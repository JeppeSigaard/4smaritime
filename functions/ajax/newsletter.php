<?php

class MailChimp
{
    private $api_key;
    private $api_endpoint = 'https://<dc>.api.mailchimp.com/2.0';
    private $verify_ssl   = false;
    public function __construct($api_key){
        $this->api_key = $api_key;
        list(, $datacentre) = explode('-', $this->api_key);
        $this->api_endpoint = str_replace('<dc>', $datacentre, $this->api_endpoint);
    }
    public function validateApiKey(){
        $request = $this->call('helper/ping');
		return !empty($request);
    }
    public function call($method, $args = array(), $timeout = 10){
        return $this->makeRequest($method, $args, $timeout);
    }
    private function makeRequest($method, $args = array(), $timeout = 10){
        $args['apikey'] = $this->api_key;
        $url = $this->api_endpoint.'/'.$method.'.json';
        $json_data = json_encode($args);
        if (function_exists('curl_init') && function_exists('curl_setopt')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->verify_ssl);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
            $result = curl_exec($ch);
            curl_close($ch);
        } else {
            $result    = file_get_contents($url, null, stream_context_create(array(
                'http' => array(
                    'protocol_version' => 1.1,
                    'user_agent'       => 'PHP-MCAPI/2.0',
                    'method'           => 'POST',
                    'header'           => "Content-type: application/json\r\n".
                                          "Connection: close\r\n" .
                                          "Content-length: " . strlen($json_data) . "\r\n",
                    'content'          => $json_data,
                ),
            )));
        }
        return $result ? json_decode($result, true) : false;
    }
}


add_action('wp_ajax_smamo_mailchimp_subscribe','smamo_ajax_newsletter');
add_action('wp_ajax_nopriv_smamo_mailchimp_subscribe','smamo_ajax_newsletter');
function smamo_ajax_newsletter(){



    $response = array();

    $email = wp_strip_all_tags($_POST['email']);
    $api_key = wp_strip_all_tags($_POST['api_key']);
    $list_ID = wp_strip_all_tags($_POST['list_ID']);


    if(!$email || $email === ''){
        $response['error'] = 'Indtast venligst en email';
        echo json_encode($response);
        wp_die();
    }

	if(!$api_key || $api_key === ''){
        $response['error'] = 'Mangler API nøgle';
        echo json_encode($response);
        wp_die();
    }

	if(!$list_ID || $list_ID === ''){
        $response['error'] = 'Mangler liste ID';
        echo json_encode($response);
        wp_die();
    }


    $MailChimp = new MailChimp($api_key);
    $result = $MailChimp->call('lists/subscribe', array(
        'id'                => $list_ID,
        'email'             => array('email'=>$email),
        'double_optin'      => false,
        'update_existing'   => true,
        'replace_interests' => false,
        'send_welcome'      => false,
    ));

    $response['mailchimp'] = $result;

	$response['destroy_self'] = '5000';

    $response['success'] = '<span class="subscribe-success">Thank you</span>';
    echo json_encode($response);
    wp_die();
}
