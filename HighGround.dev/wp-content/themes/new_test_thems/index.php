<?php get_header(); ?>
<!-- latest article
      ================================================== -->
<?php 
         $my_posts = get_posts( array(
            'numberposts' => 1,
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
         ) );
         
         global $post;
         
         foreach( $my_posts as $post ){
            setup_postdata( $post ); ?>

<article id="latest-article" class="container">

    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    <p class="post-info">by <span><a href="#">Erwin Aligam</a></span> &nbsp;
        <!-- filed in <span></span> -->
        <?php the_tags( 'filed in ', ', '); ?>
    </p>

    <div class="dcontent cf">
        <?php the_excerpt(); ?>

        <p class="continue cf"><a class="button" href="<?php the_permalink(); ?>">Continue Reading</a></p>

        <div class="post-meta">
<!-- 
            <p class="dateinfo">
                14
                <span class="dmonth">Mar</span>
                <span class="dyear">2013</span>
                
            </p> -->
            <?php the_time('j M Y');?>

        </div>

    </div>

</article>

<?php }; 
   wp_reset_postdata(); ?>

<!-- more articles
      ================================================== -->
<div id="more-articles" class="container">


    <?php
if ( have_posts() ){
	while ( have_posts() ){
		the_post(); ?>
    <article class="cf">

        <div class="grid4 a-left first">
            <h3><a href="#"><?php the_title();?></a></h3>
            <?php the_time('j M Y');?>
        </div>

        <div class="grid8 a-right">

            <p>Enim urna! Et turpis ac mus arcu, placerat in proinodio, nisi, in est
                Hac, augue ultrices phasellus elit, sociis aenean aenean Eu turpis
                scelerisque sed eu pid, elementum aliquet, nec cras urpis magnis
                Sagittis diam aenean? Eu turpis magnis risus nascetur magna odio
                magna odio, nisi, in est aenean porttitor, urna egestas er odio arcu
                Lundium facilisis odio arcu mus ultricies ac penatibus risus nascetur. <a href="#">Read More...</a> </p>

            <div class="comments">
                <a href="#" title="comment on...">11</a>
            </div>

        </div>

    </article>
    <?php }
} else {
	echo wpautop( 'Постов для вывода не найдено.' );
}
?>

</div>


</div> <!-- end content-wrap -->

<?php get_footer();?>