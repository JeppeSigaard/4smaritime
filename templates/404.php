<?php 
$suggest = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
)); 
?>
<section class="error-404">
    <article class="error-404-article read-width">
        <h1 class="dimitri">Well, Shucks...</h1>
        <p>Jeg har ikke noget til dig her. Kunne du tænke dig at lave noget? Skriv til mig, og så snakker vi om det:</p>
        <form>
            <div class="split">
                <div>
                    <input type="text" name="name">
                    <label for="name">Dit navn</label>
                </div>
                <div>
                    <input type="email" name="email">
                    <label for="email">Din email</label>
                </div>
            </div>
            <div>
                <textarea name="besked" rows="1"></textarea>
                <label for="besked">Hvad vil du bruge denne plads til?</label>
            </div>
            <div class="buttons right">
                <a href="#" class="button submit black">Indsend anmodning</a>
            </div>
        </form>
    </article>
</section>
<section class="feature">
<?php 
while ( $suggest->have_posts() ) {
    $suggest->the_post();
    
    get_template_part('template-parts/common/featured','article');
    
    wp_reset_postdata();
}
?>
</section>