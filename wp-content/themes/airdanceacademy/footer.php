<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package airdanceacademy
 */

?>

	<footer id="colophon" class="site-footer">



	</footer>



<script src="<?php bloginfo("template_directory"); ?>/assets/plugins/swiper-v5.4.5/js/swiper.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/plugins/aos-master-v2.3.4/js/aos.js"></script>
<script>AOS.init();</script>
<script src="<?php bloginfo("template_directory"); ?>/assets/plugins/jquery-v3.6.0/js/jquery.min.js"></script>
<!------------------------ NAVBAR ----------------------------->
<script type="text/javascript">
$(document).ready(function(){
  	$('.nav ul.toggle').click(function(){
    	$(this).toggleClass('active');
        $('.nav ul.top-left-menu').toggleClass('active');
        $('.nav ul.bottom-left-menu').toggleClass('active');
 	})
})
</script>


<!------------------------- PARALAX ------------------------->
<script type="text/javascript">
textone('#main-section-second','.paralax-text-one');
textone('#main-section-fourth','.paralax-text-one');
textone('#main-section-fifth','.paralax-text-one');
textone('#main-section-fifth','.row-news');

	function textone(parent_cls,child_cls) {
		var e = jQuery(parent_cls+' '+child_cls),
		t = jQuery(window).height();
		jQuery(window).on("scroll", function() {
			if (jQuery(parent_cls).length) {
				var t = jQuery(document).scrollTop() + jQuery(window).height(),
				n = jQuery(parent_cls).offset().top;
				
				if (n <= t) {
					var i = jQuery(document).scrollTop() - n + jQuery(window).height();
					var scroll = i - 400;
					var scroll_slow = scroll + ((scroll/120)/100);
					var img_scroll = scroll_slow * 30 /100;
					e.css({
						transform: "translateX(" + img_scroll + "px)"
					})
				}
			}
		});
	}
</script>






<script type="text/javascript">
	$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-banner-one', {
loop: true,
loopFillGroupWithBlank: true,
speed: 3000,
spaceBetween: 0,
centeredSlides: true,
autoplay: {
delay: 3000, 
disableOnInteraction: false,
}, 

on: {
init() {
this.el.addEventListener('mouseenter', () => {
this.autoplay.stop();
});
this.el.addEventListener('mouseleave', () => {
this.autoplay.start();
});
}
},
});
</script>

<?php wp_footer(); ?>

</body>
</html>
