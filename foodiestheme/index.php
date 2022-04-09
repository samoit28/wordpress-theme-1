	<?php get_header(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
		  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php if ( !is_page() ):?>
			  <section class="entry-meta">
			  <p>Posted on <?php the_date();?> by <?php the_author();?></p>
			  </section>
			<?php endif; ?>
			<section class="entry-content">
			  <?php the_content(); ?>
			</section>
			<section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
			  <span class="category-links">
				Posted under: <?php echo get_the_category_list( ', ' ); ?>
			  </span>
			<?php endif; ?></section>
		  </article>
		<?php endwhile; ?>
            
            <div class="Feature"></div>
            
            <div class="Support"></div>
                <div class="s_text1">Ready Support</div>
                <div class="s_text2">24/7 Support</div>
                <div class="s_tcon"></div>
                    <div class="s_rectangle"></div>
                    <div class="s_image"><span class="material-icons">headset</span></div>
            <div class="Special_Promo"></div>
                <div class="sp_text1">Get Special Promo</div>
                <div class="sp_text2">Special Promo</div>
                <div class="sp_icon"></div>
                    <div class="sp_rectangle"></div>
                    <div class="sp_image"><span class="material-icons">percentage</span></div>
            <div class="Quick_Payment"></div>
                <div class="qp_text1">100% Secure Payment</div>
                <div class="qp_text2">Quick Payment</div>
                <div class="qp_icon"></div>
                    <div class="qp_rectangle"></div>
                    <div class="qp_image"><span class="material-icons">wallet</span></div>
            <div class="Free_Shipping"></div>
                <div class="fs_text1">Orders Over $140</div>
                <div class="fs_text2">Free Shipping</div>
                <div class="fs_icon"></div>
                    <div class="fs_rectangle"></div>
                    <div class="fs_image"><span class="material-icons">flight</span></div>
            <div class="Line1"></div>
            <div class="Line2"></div>

            <div class="Our_Benefit"></div>

            <div class="Box_Polcadot2"></div>
            <div class="Image_Benefit"></div>
            <div class="rectangle_b"></div>
            <div class="img_b"><img src="<?php echo get_template_directory_uri(); ?>/images/veges.gif"></div>
            <div class="text1_b">Our Benefit</div>
            <div class="text2_b">The More Healthy Food The Better</div>
            <div class="ck1_b"><span class="material-icons">check</span></div><div class="txt1_b">Be Alive With Veggie Food.</div>
            <div class="ck2_b"><span class="material-icons">check</span></div><div class="txt2_b">It's The Place To Be.</div>
            <div class="ck3_b"><span class="material-icons">check</span></div><div class="txt3_b">Nonstop Veggie Food.</div>
            <div class="ck4_b"><span class="material-icons">check</span></div><div class="txt4_b">The Best Silk Dish In Town.</div>
            <div class="ck5_b"><span class="material-icons">check</span></div><div class="txt5_b">Truffles, Egg & Pumpkin Spice.</div>

            <div class="Our_Product"></div>

            <div class="text1_op">Our Product</div>
            <div class="text2_op">Most Popular Product</div>

            <div class="vp1"></div>
            <div class="vp2"></div>
            <div class="pimage1"><img src="<?php echo get_template_directory_uri(); ?>/images/banana.gif"></div>
            <div class="pname1">Summer Veganie</div>
            <div class="pprice1">$29</div>
            <div class="pprice12"><p style="text-decoration: line-through;">$25</p></div>
            <div class="pbutton1"></div>
            <div class="pbutton12"></div>
            <div class="pbuy1">Buy Now</div>
            <div class="picon1"><span class="material-icons">east</span></div>

            <div class="vp3"></div>
            <div class="vp4"></div>
            <div class="pimage2"><img src="<?php echo get_template_directory_uri(); ?>/images/papaya.gif"></div>
            <div class="pname2">Greanie Seafood</div>
            <div class="pprice2">$29</div>
            <div class="pprice22"><p style="text-decoration: line-through;">$25</p></div>
            <div class="pbutton2"></div>
            <div class="pbutton22"></div>
            <div class="pbuy2">Buy Now</div>
            <div class="picon2"><span class="material-icons">east</span></div>

            <div class="vp5"></div>
            <div class="vp6"></div>
            <div class="pimage3"><img src="<?php echo get_template_directory_uri(); ?>/images/avocado.gif"></div>
            <div class="pname3">Fresh Vegetable</div>
            <div class="pprice3">$29</div>
            <div class="pbutton3"></div>
            <div class="pbutton32"></div>
            <div class="pbuy3">Buy Now</div>
            <div class="picon3"><span class="material-icons">east</span></div>

            <div class="vp7"></div>
            <div class="vp8"></div>
            <div class="pimage4"><img src="<?php echo get_template_directory_uri(); ?>/images/orange.jpg"></div>
            <div class="pname4">Fresh Meatyus</div>
            <div class="pprice4">$29</div>
            <div class="pprice42"><p style="text-decoration: line-through;">$25</p></div>
            <div class="pbutton4"></div>
            <div class="pbutton42"></div>
            <div class="pbuy4">Buy Now</div>
            <div class="picon4"><span class="material-icons">east</span></div>

    <?php get_footer(); ?>        