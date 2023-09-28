<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Signify
 */

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <!-- <div id="fb-customer-chat" class="fb-customerchat">
    </div> -->
	
	<!-- <div class="icon-bar badge badge-pill" style="background-color:#db4f3d;border-radius:100px;">
   <a href="viber://chat?number=639667944009" class="viber"><i class="fab fa-viber"></i></a>
	</div>
	
	
	<div class="icon-bartelegram badge badge-pill" style="background-color:#db4f3d;border-radius:100px;">
   <a href="tg://resolve?domain=Pinoygames_CS" class="viber"><i class="fab fa-telegram"></i></a>
	</div>
	 -->
		</div><!-- .wrapper -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

		<div id="site-generator">
			<?php get_template_part('template-parts/navigation/navigation-footer'); ?>

			<?php //get_template_part('template-parts/footer/site-info'); ?>
			
			<div class="site-info">
			<div class="wrapper">Copyright © 2023 <a href="http://pinoygames.club/">Pinoy Games</a> 
			<span class="sep"> | </span>Powered&nbsp;by&nbsp;<a href="https://inplay.ph/" target="_blank">Inplay</a>
			</div>
			</div>	
			
		</div><!-- #site-generator -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>


<style>

.icon-bar {
  z-index: 9999;
}
.icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
  margin-top: 5px;
}
.icon-bartelegram {
  z-index: 9999;
}
.icon-bartelegram {
  position: fixed;
  bottom: 148px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bartelegram a {
  display: block;
  text-align: center;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
  margin-top: 3px;
}


.viber {
  color: white;
  border-radius:30px;
}
@media (max-width: 786px) {
  .icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
  margin-top: 5px;
}



.viber {
  color: white;
  border-radius:30px;
}
}

@media (max-height: 500px) {
  .icon-bar {
  position: fixed;
  bottom: 60px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
  margin-top: 5px;
}



.viber {
  color: white;
  border-radius:30px;
}

.icon-bartelegram {
  position: fixed;
  bottom: 128px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}
}


</style>

<script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110378051505820");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

</body>
</html>
