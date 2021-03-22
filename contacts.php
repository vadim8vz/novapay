<?include( 'tpl/header.php' );?>
<!-- START CONTENT -->
	<section class="content">
		<div class="section section-inner-headings w-search contacts">
			<div class="container">
				<h1>Контакти</h1>
				<div class="contact-info">
					<a href="tel:+380 67 552 22 24" class="line">
						+380 67 552 22 24
						<span>Лінія підтримки</span>
					</a>
					<div class="work-time-envelope">
						<a href="#" class="title d-block d-md-none">
							Графік роботи підтримки
							<img src="img/collapse-chevron-down.svg" alt="">
						</a>
						<ul class="work-time">
							<li>
								<p>пн-пт</p>
								<p>8:00 - 21:00</p>
							</li>
							<li>
								<p>сб</p>
								<p>9:00 - 18:00</p>
							</li>
							<li>
								<p>нд</p>
								<p>9:00 - 14:00</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<div class="section section-map">
			<div class="top-nav">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<a href="#" class="contact-link">
								Зв'яжіться з нами
								<img src="img/white-arrow-right.svg" alt="">
							</a>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<a href="#" class="contact-link">
								Найближча каса
								<img src="img/white-arrow-right.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="map">
				<div id="map" style="width: 100%; height: 600px;position: absolute;top: 0;"></div>
				<div class="container">
					<div class="map-info">
						<div class="map-info-heading">
							<p class="adress">
								03026, місто Київ,<br/> Столичне шосе, буд. 103,<br/> корпус 1, 13-й поверх, офіс 1304
							</p>
							<div class="route">
								<ul>
									<li>
										<a href="mailto:office@novapay.ua">office@novapay.ua</a>
									</li>
									<li>
										<a href="#" target="_blank">Linkedin</a>
									</li>
								</ul>
								<a href="#" class="link">Прокласти маршрут</a>	
							</div>
						</div>
						<div class="graph">
							<a href="#" class="map-info-footer">
								Графік роботи офісу
								<img src="img/collapse-chevron-down.svg" alt="">
							</a>
							<div class="hidden-block">
								<ul class="work-time">
									<li>
										<p>пн-пт</p>
										<p>9:00 - 18:00</p>
									</li>
									<li>
										<p>перерва</p>
										<p>13:00 - 14:00</p>
									</li>
									<li>
										<p>сб, нд</p>
										<p>вихідні</p>
									</li>
								</ul>
							</div>								
						</div>
					</div>
				</div>
			</div>
		</div>																																		
	</section>
<!-- END CONTENT -->
<?include( 'tpl/footer.php' );?>
<script>
	function initMap() {
		var myLatLng = { lat:50.4373273, lng:30.5153794};

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: { lat:50.4373273, lng:30.5153794},
			scrollwheel: false
		});

		var image = 'img/marker.svg';
		var beachMarker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: image
		});
	};
</script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBLmSrYz01qDh9um3Bp6v6995mt43clmh0&region=UA&language=uk&callback=initMap'></script>