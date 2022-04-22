<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>
    <section class= "container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

<div class="blocker"></div>
        </div> <!-- container -->
    </section>

    <section class="container-fluid articlesbg">
        <div class="container">
        <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row"><!--  a row that gives us access to the BS columns-->

<div class="col-md-4">
<img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
<h4 class="article-title"><?php the_field('articletitle'); ?></h4>
<p class="date" ><?php the_field('articledate'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
</div>

                <div class="col-md-4">
                <img class="img-fluid" alt=“armour” src="<?php the_field('articleimage_middle');?>">
                <h4 class="article-title"><?php the_field('articletitle_middle'); ?></h4>
                <p class="date" ><?php the_field('articledate_middle'); ?></p>
                <p class="article-p"><?php the_field('articleexcerpt_middle'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore_middle">CONTINUE READING</a>
              </div>
              <div class="col-md-4">
              <img class="img-fluid" alt=“armour” src="<?php the_field('articleimage_right');?>">
                <h4 class="article-title"><?php the_field('articletitle_right'); ?></h4>
                <p class="date" ><?php the_field('articledate_right'); ?></p>
                <p class="article-p"><?php the_field('articleexcerpt_right'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore_right">CONTINUE READING</a>
            </div>
                </div><!-- row-->
            </div><!-- container-->
           </section><!-- container-fluid-->
           <?php get_footer();?>