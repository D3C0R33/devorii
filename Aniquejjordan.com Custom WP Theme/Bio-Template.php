<?php /* Template Name: Bio Template */
?>

<?php get_header(); ?>
<div class="alignBioContent">
                            <div class="bioContent">

                                <h1 style="color: black; width: 40px; padding-right: 1rem;">Bio</h1>
                                      <!--  <p class="introductionContent">-->
											<?php the_field('bio_content'); ?>
                                              
                                               <!--  </p>-->
                            </div>
            </div>
<?php get_footer(); ?>