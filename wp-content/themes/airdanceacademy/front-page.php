<?php
/**
* Template Name: Front-Page
*/
get_header();?>


<!-------------------------------------------------------------------------->
<section id="main-section-first">
	<video class="video" autoplay loop muted playsinline>
      <source src="<?php bloginfo("template_directory"); ?>/assets/images/01/background.mp4" type="video/mp4"> 
    </video>
</section>
<!-------------------------------------------------------------------------->
<section id="main-section-second">
	<p class="paralax-text-one">NAZWA</p>
	<p class="paralax-text-two">Usługi</p>
</section>
<!-------------------------------------------------------------------------->
<section id="main-section-third">
	<div class="container" style="margin-top: 30px;">
		<div class="row">
			<div class="col-lg-8"></div>
			<div class="col-lg-4">
				<div class="block-right-img-one">
					<p class="detail-card">Sklep taneczny dla profesjonalistów i tancerzy amatorów, zarówno zaawansowanych, jak i początkujących.</p>
					<div class="right-step-block">
						<p>Kupuj „wszystko<br/> do tańca”</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="block-left-img-one">
					<p class="detail-card">Wynajem miejsca na event daje możliwość realizacji ciekawych i kreatywnych pomysłów.</p>
					<div class="left-step-block">
						<p>Wynajem salina<br/> event</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8"></div>
			<div class="col-lg-8"></div>
			<div class="col-lg-4">
				<div class="block-right-img-two">
					<p class="detail-card">Strengthen the muscles and focus on bringing you back to balance.</p>
					<div class="right-step-block">
						<p>System<br/> ProAM</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="block-left-img-two">
					<p class="detail-card">Wynajem miejsca na event daje możliwość realizacji ciekawych i kreatywnych pomysłów.</p>
					<div class="left-step-block">
						<p>Kursy<br/> tańca</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8"></div>
		</div>
	</div>
	<div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-banner-one">
		<div class="swiper-wrapper">
		    <div class="swiper-slide">
		    	<div class="swiper-banner-img">
		    		<img src="<?php bloginfo("template_directory"); ?>/assets/images/03/banner-01.png" alt="#">
		    	</div>
		    </div>
		</div>
	</div>
</section>
<!-------------------------------------------------------------------------->
<section id="main-section-fourth">
	<div class="line-hover"></div>
	<p class="paralax-text-one">NASZE</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="circle-block">
					<img src="<?php bloginfo("template_directory"); ?>/assets/images/04/union-circle.png">
					<p class="info-block-01"><a href="#">Jakość</a></p>
					<p class="info-block-02"><a href="#">Cena</a></p>
					<p class="info-block-03"><a href="#">Wsparcie</a></p>
					<p class="info-block-04"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Airdance</a></p>
				</div>

			</div>
		</div>
	</div>
	<p class="paralax-text-two">ATUTY</p>
</section>
<!-------------------------------------------------------------------------->
<section id="main-section-fifth">
	<div class="line-hover"></div>
	<p class="paralax-text-one">NASZE</p>

	<div class="container">
		<div class="row row-news">

			<div class="col-md-3"></div>

			<?php global $query_string; 
			query_posts( $query_string .'posts_per_page=3' ); 
			if( have_posts() ){ while( have_posts() ){ the_post(); ?>


			<div class="col-md-3">
				<div class="news-block">
					<a href="<?php the_permalink(); ?>">
						<div class="zoom-hover-img">
							<?php the_post_thumbnail(''); ?>
						</div>
						<h3><?php the_title(); ?></h3> 
						<span>
						<?php the_time('d m Y'); ?>
						</span>
					</a>
				</div>
			</div>


			<?php } ?>
			<?php
			} 
			else 
			echo "<h3>No more articles</h3>";
			wp_reset_query();
			?>






		</div>
	</div>
	
</section>
<!-------------------------------------------------------------------------->















<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
















<?php get_footer();?>