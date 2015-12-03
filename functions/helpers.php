<?php 

function smamo_newlines($string,$tagname){
    return str_replace('\\n','</'.$tagname.'><'.$tagname.'>',$string);
}