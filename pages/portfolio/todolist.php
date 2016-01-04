<?php 
	require_once('../include/header-portfolio.html'); 
	require_once('../include/nav-portfolio.php'); 
?>

<div id="portfolio-show" class="container">
		
<!-- CONTAINER BIG PROJET ======================= -->
	<div class="container-big-projet">
		<img class="big-projet" src="../../img/portfolio-big/todolist-1.png" alt="todolist">
	</div>

<!-- ASIDE  ======================= -->
	<aside>
		<h2>TO DO List</h2>
		<!-- <div class="souligne"></div> -->

		<p>Petite liste de tâches en PHP, qui sauvegarde les infos dans une base de données</p>


		<ul>
			<li>
				<img src="../../img/motifsHome/circuit.png" class="ornement ormnt-left" alt="ornement">HTML5 &amp; CSS3
			</li>
			<li>
				<img src="../../img/motifsHome/circuit.png" class="ornement ormnt-left" alt="ornement">PHP<span> (Connection PDO)</span>
			</li>
			<li>
				<img src="../../img/motifsHome/circuit.png" class="ornement ormnt-left" alt="ornement">Bas de données &amp; SQL <span>(CRUD)</span>
			</li>
		</ul>

		<img class="tumb" src="../../img/portfolio-big/todolist-4.png" alt="apercu-portfolio">
		<img class="tumb" src="../../img/portfolio-big/todolist-3.png" alt="apercu-portfolio">
		<img class="tumb" src="../../img/portfolio-big/todolist-5.png" alt="apercu-portfolio">
		<img class="tumb" src="../../img/portfolio-big/todolist-2.png" alt="apercu-portfolio">
		
				<a class="a-player popup-vimeo" href="https://vimeo.com/146161705">
					<img class="player" src="../../img/arrow-play.png" alt="player">	
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