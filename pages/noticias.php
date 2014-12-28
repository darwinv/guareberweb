<?php
	echo "
	<script src='../js/jquery.min.js'></script>
	<script src='../js/slides.min.jquery.js'></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '../imagenes/img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script><!--para efectos de transsendencia-->
	<div id='container'>
		<div id='example'>
			<img src='../imagenes/img/new-ribbon.png' width='20%' height='30%' alt='New Ribbon' id='ribbon'>
			<div id='slides'>
				<div class='slides_container'>
					<div class='slide'>
						<a href='#' title='145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-1.jpg' width='100%' height='100%' alt='Slide 1'>
						</a>
						<div class='caption' style='bottom:0'>
							<p>Happy Bokeh Thursday!</p>
						</div>
					</div>
					<div class='slide'>
						<a href='#' title='Taxi | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-2.jpg' width='100%' height='100%' alt='Slide 2'>
						</a>
						<div class='caption'>
							<p>Taxi</p>
						</div>
					</div>
					<div class='slide'>
						<a href='#' title='Happy Bokeh raining Day | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-3.jpg' width='100%' height='100%' alt='Slide 3'>
						</a>
						<div class='caption'>
							<p>Happy Bokeh raining Day</p>
						</div>
					</div>
					<div class='slide'>
						<a href='#' title='We Eat Light | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-4.jpg' width='100%' height='100%' alt='Slide 4'>
						</a>
						<div class='caption'>
							<p>We Eat Light</p>
						</div>
					</div>
					<div class='slide'>
						<a href='#' title='&ldquo;I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.&rdquo; | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-5.jpg' width='100%' height='100%' alt='Slide 5'>
						</a>
						<div class='caption'>
							<p>&ldquo;I must go down to the sea again, to the lonely sea and the sky...&rdquo;</p>
						</div>
					</div>
					<div class='slide'>
						<a href='#' title='twelve.inch | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-6.jpg' width='100%' height='100%' alt='Slide 6'>
						</a>
						<div class='caption'>
							<p>twelve.inch</p>
						</div>
					</div>
					<div class='slide'>
						<a href='#' title='Save my love for loneliness | Flickr - Photo Sharing!' target='_blank'>
							<img src='../imagenes/img/slide-7.jpg' width='100%' height='100%' alt='Slide 7'>
						</a>
						<div class='caption'>
							<p>Save my love for loneliness</p>
						</div>
					</div>
				</div>
				<a href='#' class='prev'><img src='../imagenes/img/arrow-prev.png' width='100%' height='100%' alt='Arrow Prev'></a>
				<a href='#' class='next'><img src='../imagenes/img/arrow-next.png' width='100%' height='100%' alt='Arrow Next'></a>
			</div>
			<img src='../imagenes/img/example-frame.png' width='100%' height='100%' alt='Example Frame' id='frame'>
		</div>
	</div>
	";
?>
