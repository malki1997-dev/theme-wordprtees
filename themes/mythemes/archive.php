<?php get_header();?>

<section class="page-wrap">

<div class="container">

<section class="row"> 

<div class="col-lg-3">

<?php 
if(is_active_sidebar('Blog-sidebar')):?>
 <?php dynamic_sidebar('Blog-sidebar');?>
 <?php endif;?>

</div>

<div class="col-lg-9">
<!--post category -->
<h1><?php echo single_cat_title();?></h1>

<!--pagination -->
<?php get_template_part('includes/section','archive');?>
<?php
global $wp_query;
$big = 999999999; 
echo paginate_links( array(
  'base' => str_replace( $big,'%#%', esc_url( get_pagenum_link( $big))),
  'format' => '?paged=%#%',
  'current' => max( 1,get_query_var('paged') ),
  'total' => $wp_query->max_num_pages

))?>



</div>
</section>


</div>

</section>

<?php get_footer();?>