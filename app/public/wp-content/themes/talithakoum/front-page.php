<?php get_header(); ?>

<div id="hero"
    style="background-image:url(<?php echo get_theme_file_uri('images/shashank-sahay-CsUPUe-LxfU-unsplash.jpg'); ?>); min-height: 50vh;"
    class="p-5 md:p-10 bg-cover bg-center bg-no-repeat md:h-screen text-4xl pt-10">
    <div class="container mx-auto text-3xl md:text-5xl md:pt-20 lg:pl-20 lg:text-7xl">
        <div id="offering">Offering<br />Transfusions</div>
        <div id="hope-text">of <span class="text-orange-700 text-4xl md:text-8xl font-Garamond">Hope</span></div>
        <div id="allowing-text">Allowing Women</div>
        <div id="rise-up">to <span class="text-orange-700 text-4xl md:text-8xl font-Garamond">Rise Up</span></div>
        <div id="courage">With Courage</div>
        <div id="christ">in <span class="text-orange-700 text-4xl md:text-8xl font-Garamond">Christ</span></div>
    </div>
</div>


<div class="bg-gray-900 min-h-full p-5 md:p-10" style="background-color: #121123;">
    <div class="container mx-auto grid md:grid-cols-2 bg-no-repeat bg-contain md:bg-cover"
        style="background-image:url(); background-position: right bottom; min-height:50vh">
        <div class="text-white">

            <h2 class="text-4xl md:text-6xl text-orange-600 font-Garamond py-5">Rest for the weary</h2>
            <p class="text-xl md:text-2xl">In Kitsap County, there are xyz number of shelters available to women, and
                only xyz of those shelters accept children.</p>
            <p class="py-5 text-2xl md:text-4xl text-orange-200 font-Garamond w-1/2">We are working to change that.</p>
            <p class="py-10"><a
                    class="p-3 transition duration-150 ease-out bg-teal-600 hover:bg-teal-400 hover:ease-in text-black font-extrabold"
                    href="/donate/">Donate Now</a></p>
        </div>
        <div>
        </div>
    </div>
</div>


<div class="container mx-auto my-8">

    <?php if ( have_posts() ) : ?>
    <?php
		while ( have_posts() ) :
			the_post();
			?>

    <?php //get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();