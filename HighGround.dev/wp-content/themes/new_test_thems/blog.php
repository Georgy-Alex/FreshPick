<?php
/*
Template Name: Blog
Template Post: post, page
*/
?>

<?php get_header();?>

<div id="content" class="container">

    <!-- main
================================================== -->
    <section id="main" class="grid9 first">

        <article>

            <h2 class="huge">We All Love Good and Awesome Typography.</h2>
            <p class="post-info">by <span><a href="#">Erwin Aligam</a></span> &nbsp;
                filed in <span><a href="#">typography</a>, <a href="#">designs</a>, <a href="#">projects</a></span>
            </p>

            <div class="post-thumb">
                <a href="#" title="Permanent Link to ...">
                    <img title="post-thumb" alt="post-thumb" src="images/post-thumb-710x228.png">
                </a>
            </div>

            <p class="lead">Nullam dictum felis eu pede mollis pretium. Cras dapibus. Vivamus elementum se semper nisi.
                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae seasne eleifend ac,
                enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, telus. Phasellus viverra nulla ut
                metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>

            <p>
                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu
                ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna
                eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin
                condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam,
                ut aliquam massa nisl quis neque. Suspendisse in orci enim.
            </p>

            <p>
                Amet ultrices ridiculus cras tristique risus, in etiam! Elementum in risus magna? Turpis! In sed.
                Vut montes proin, augue, tincidunt, enim nunc cras cursus! Facilisis, integer etiam est, in magna?
                In magna porta tortor parturient phasellus, urna platea elit dignissim, pid magna? Enim nunc,
                integer, magna turpis porttitor, odio lacus, porta cum et aliquam porta purus, montes vel pulvinar
                cras a magna odio ut magna? Odio amet etiam non placerat, integer nec? Cras placerat habitasse, integer
                augue ac, nisi dictumst. Urna duis? Cursus quis.
            </p>

            <p class="tags">
                <span>Tagged in </span>:
                <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
            </p>

        </article>


        <section id="respond">

            <h3>Leave a Reply</h3>

            <!-- <form id="contactform" action="contact.php" method="post">

                <div>
                    <p>Send me a message</p>
                </div>

                <div>
                    <label>Name <span class="required">*</span></label>
                    <input type="text" value="" id="name" name="name">
                </div>

                <div>
                    <label>Email <span class="required">*</span></label>
                    <input type="text" value="" id="email" name="email">
                </div>

                <div>
                    <label>Message <span class="required">*</span></label>
                    <textarea id="message" cols="50" rows="20" name="message"></textarea>
                </div>

                <div>
                    <input type="submit" class="button" value="Submit">
                    <input type="reset" class="button" value="Reset">
                </div>

            </form> -->

            <?php echo do_shortcode('[contact-form-7 id="9fc5f61" title="Comment"]') ?>

        </section>


    </section> <!-- end main -->


    <!-- sidebar
================================================== -->
    <aside id="sidebar" class="grid3 add-margin-top">
        <?php dynamic_sidebar('sidebar'); ?>
    </aside>

</div>

<?php get_footer();?>