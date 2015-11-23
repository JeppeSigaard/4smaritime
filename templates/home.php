<section class="widescreen-hero" data-bg="<?php echo get_template_directory_uri() ?>/statics/img/4sbaggrund.jpg">
    <div class="inner page-width">
        <h1 class="home-title"><span>Marine</span> <span>Surveys</span></h1>
        <div class="sopro-icons">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/statics/img/classibs.png">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/statics/img/cmid.png">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/statics/img/imca.png">
            </a>
        </div>
    </div>
</section>
<section class="newsletter">
    <div class="inner page-width grid">
        <div class="half">
            Her er en halvdel
        </div>
        <div class="half">
            Og her er en halvdel
        </div>
    </div>
</section>
<section class="newsfeed">
    <div class="inner page-width grid grid-twist">
        <div class="half">
            <?php get_template_part('template-parts/common/article'); ?>
        </div>
        <div class="half">
            <div class="article-list">
                <?php $i = 0; while ($i < 4) : $i++; ?>
                <a href="#" class="list-article">
                    <div class="list-article-date">
                        <span>12</span>
                        <span>Okt 2015</span>
                    </div>
                    <div class="list-article-pre">
                        <h3>Artiklens overskrift</h3>
                        <p>Artiklens uddrag Artiklens uddrag Artiklens uddrag</p>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>