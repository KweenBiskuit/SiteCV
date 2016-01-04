<?php 
	require_once('../include/header-portfolio.html'); 
	require_once('../include/nav-portfolio.php'); 
?>

<!-- <img src="../../img/go-right.png" alt="" class="go-arrow-right">
<img src="../../img/go-left.png" alt="" class="go-arrow-left"> -->

<div id="portfolio-show" class="container">
		
<!-- CONTAINER BIG PROJET ======================= -->
	<div class="container-big-projet">
		<img class="big-projet" src="../../img/portfolio-big/carrot-1.png" alt="carrot">
	</div>

<!-- ASIDE  ======================= -->
	<aside>
		<h2>Love Carrots</h2>
		<!-- <div class="souligne"></div> -->

		<p>Mini site, avec une série de carottes plantées dans le footer qui réagissent au survol de la souris</p>


		<ul>
			<li>
				<img src="../../img/motifsHome/circuit.png" class="ornement ormnt-left" alt="ornement">HTML5 &amp; CSS3
			</li>
			<li>
				<img src="../../img/motifsHome/circuit.png" class="ornement ormnt-left" alt="ornement">CSS hover - Animation footer
			</li>
			<li>
				<img src="../../img/motifsHome/circuit.png" class="ornement ormnt-left" alt="ornement">JQuery <span>(.animate)</span>
			</li>
		</ul>

		<img class="tumb" src="../../img/portfolio-big/carrot-4.png" alt="apercu-portfolio">
		<img class="tumb" src="../../img/portfolio-big/carrot-3.png" alt="apercu-portfolio">
		<img class="tumb" src="../../img/portfolio-big/carrot-5.png" alt="apercu-portfolio">
		<img class="tumb" src="../../img/portfolio-big/carrot-2.png" alt="apercu-portfolio">
		
		
		<a class="a-player popup-vimeo" href="https://vimeo.com/146161702">
			<img class="player" src="../../img/arrow-play.png" alt="">	
			<span>PLAY !</span>		
		</a>
		
	</aside>

</div><!-- fin .container #portfolio-show -->



<script>
	var imgPlayer = document.querySelector('.player');

	imgPlayer.addEventListener('mouseover', function(){
		this.src = "../../img/arrow-play-hover2.png";
	});
	imgPlayer.addEventListener('mouseout', function(){
		this.src = "../../img/arrow-play.png";
	});
</script>

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="./../../script/jquery.magnific-popup.js"></script>

<script>
	$(document).ready(function() {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,

				fixedContentPos: false
			});
	});

</script>



</body>
</html>