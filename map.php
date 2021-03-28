<?include( 'tpl/header.php' );?>
<!-- START CONTENT -->
	<section class="content">
		<div class="section section-mapmain">
			<div id="map" style="width: 100%;height: 695px;position: absolute;left: 0;top: 0;"></div>
			<div class="map-wrapper">
				<div class="container">
					<div class="find">Шукай фінансові послуги NovaPay у відділеннях Нової пошти</div>
					<div class="map-filter">
						<div class="search-steps">
							<div class="search-step">
								<span>Населений пункт</span>
								<div class="form-group">
									<input type="text" class="map-control" placeholder="Вкажіть населений пункт">
								</div>
								<div class="result-list">
									<a href="#" class="current">
										<img src="img/current-map-ico.svg" alt="">
										Моє місцезнаходження
									</a>
									<ul>
										<li>
											<a href="#"><small class="conc">Київ,</small>  Київська область</a>
										</li>
										<li>
											<a href="#"><small class="conc">Київ</small>ська область</a>
										</li>
										<li>
											<a href="#"><small class="conc">Київ</small>ський зоопарк</a>
										</li>
									</ul>
									<p class="empty">Немає результатів</p>
								</div>
								<a href="#" class="remove-result">
									<img src="img/remove-result.svg" alt="">
								</a>
							</div>
							<div class="search-step street">
								<span>Вулиця</span>
								<div class="form-group">
									<input type="text" class="map-control" placeholder="Вкажіть вулицю">
								</div>
								<div class="result-list">
									<a href="#" class="current">
										<img src="img/current-map-ico.svg" alt="">
										Моє місцезнаходження
									</a>
									<ul>
										<li>
											<a href="#">вул. Київська, 24</a>
										</li>
										<li>
											<a href="#">вул. Київська, 24</a>
										</li>
										<li>
											<a href="#">вул. Київська, 24</a>
										</li>
									</ul>
									<p class="empty">Немає результатів</p>
								</div>
								<a href="#" class="remove-result">
									<img src="img/remove-result.svg" alt="">
								</a>
							</div>
							<div class="search-step switch-view map">
								<p>Мапа</p>
								<label class="switch">  
									<div></div>
								</label>
								<p>Список</p>
							</div>
						</div>
					</div>
					<div class="map-controls">
						<div id="location">
							<img src="img/location-ico.svg" alt="">
						</div>
					    <div id="zoomin">
					    	<img src="img/map-plus.svg" alt="">
					    </div>
		    			<div id="zoomout">
		    				<img src="img/map-minus.svg" alt="">
		    			</div>
					</div>
					<div class="map-modal">
						<div class="adress-head">
							<p>Відділення №89</p>
							<span>вулиця Глибочицька, 28, Київ</span>
							<a href="#" class="close-adress">
								<img src="img/adress-modal-close.svg" alt="">
							</a>
						</div>
						<div class="adress-body">
							<ul classs="weekday">
								<li>
									<a href="#">
										<span>пн</span>
										8:00 - 21:00
									</a>
								</li>
								<li>
									<a href="#">
										<span>вт</span>
										9:00 - 18:00
									</a>
								</li>
								<li>
									<a href="#" class="active">
										<span>ср</span>
										9:00 - 14:00
									</a>
								</li>
								<li>
									<a href="#">
										<span>чт</span>
										9:00 - 18:00
									</a>
								</li>
								<li>
									<a href="#">
										<span>пт</span>
										9:00 - 14:00
									</a>
								</li>
							</ul>
							<ul classs="weekend">
								<li>
									<a href="#">
										<span>сб</span>
										 8:00 - 21:00
									</a>
								</li>
								<li>
									<a href="#">
										<span>нд</span>
										 9:00 - 18:00
									</a>
								</li>
							</ul>
							<a href="#" class="link">
								Прокласти маршрут
							</a>
						</div>
					</div>
    			</div>
    			<div class="list-view">
			    	<div class="container">
			    		<div class="table-wrapper">
				    		<table>
				    			<thead>
				    				<tr>
				    					<th>Відділення</th>
				    					<th>Населений пункт</th>
				    					<th>Графік роботи</th>
				    					<th>&nbsp;</th>
				    				</tr>
				    			</thead>
				    			<tbody>
				    				<tr>
				    					<td>
				    						<p>Відділення №89</p>
											<span>вулиця Глибочицька, 28, Київ</span>
				    					</td>
				    					<td>
				    						<span>Київ</span>
				    					</td>
				    					<td>
				    						<div class="graph full-height">
						    					<ul classs="weekday">
						    						<li>
						    							<a href="#">
						    								<span>пн</span>
						    								8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>вт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#" class="active">
						    								<span>ср</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>чт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>пт</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    					</ul>
						    					<ul classs="weekend">
						    						<li>
						    							<a href="#">
						    								<span>сб</span>
						    								 8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>нд</span>
						    								 9:00 - 18:00
						    							</a>
						    						</li>
						    					</ul>
						    					<a href="#" class="link d-block d-md-none">
					    							Прокласти маршрут
					    						</a>
				    						</div>	
				    						<a href="#" class="open-graph opened">
				    							<img src="img/graph-ico-down.svg" alt="">
				    						</a>								
				    					</td>
				    					<td>
				    						<a href="#" class="link d-none d-md-block">
				    							Прокласти маршрут
				    						</a>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>
				    						<p>Відділення №89</p>
											<span>вулиця Глибочицька, 28, Київ</span>
				    					</td>
				    					<td>
				    						<span>Київ</span>
				    					</td>
				    					<td>
				    						<div class="graph">
						    					<ul classs="weekday">
						    						<li>
						    							<a href="#">
						    								<span>пн</span>
						    								8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>вт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#" class="active">
						    								<span>ср</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>чт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>пт</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    					</ul>
						    					<ul classs="weekend">
						    						<li>
						    							<a href="#">
						    								<span>сб</span>
						    								 8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>нд</span>
						    								 9:00 - 18:00
						    							</a>
						    						</li>
						    					</ul>
						    					<a href="#" class="link d-block d-md-none">
					    							Прокласти маршрут
					    						</a>
				    						</div>	
				    						<a href="#" class="open-graph">
				    							<img src="img/graph-ico-down.svg" alt="">
				    						</a>								
				    					</td>
				    					<td>
				    						<a href="#" class="link d-none d-md-block">
				    							Прокласти маршрут
				    						</a>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>
				    						<p>Відділення №89</p>
											<span>вулиця Глибочицька, 28, Київ</span>
				    					</td>
				    					<td>
				    						<span>Київ</span>
				    					</td>
				    					<td>
				    						<div class="graph">
						    					<ul classs="weekday">
						    						<li>
						    							<a href="#">
						    								<span>пн</span>
						    								8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>вт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#" class="active">
						    								<span>ср</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>чт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>пт</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    					</ul>
						    					<ul classs="weekend">
						    						<li>
						    							<a href="#">
						    								<span>сб</span>
						    								 8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>нд</span>
						    								 9:00 - 18:00
						    							</a>
						    						</li>
						    					</ul>
						    					<a href="#" class="link d-block d-md-none">
					    							Прокласти маршрут
					    						</a>
				    						</div>	
				    						<a href="#" class="open-graph">
				    							<img src="img/graph-ico-down.svg" alt="">
				    						</a>								
				    					</td>
				    					<td>
				    						<a href="#" class="link d-none d-md-block">
				    							Прокласти маршрут
				    						</a>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>
				    						<p>Відділення №89</p>
											<span>вулиця Глибочицька, 28, Київ</span>
				    					</td>
				    					<td>
				    						<span>Київ</span>
				    					</td>
				    					<td>
				    						<div class="graph">
						    					<ul classs="weekday">
						    						<li>
						    							<a href="#">
						    								<span>пн</span>
						    								8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>вт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#" class="active">
						    								<span>ср</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>чт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>пт</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    					</ul>
						    					<ul classs="weekend">
						    						<li>
						    							<a href="#">
						    								<span>сб</span>
						    								 8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>нд</span>
						    								 9:00 - 18:00
						    							</a>
						    						</li>
						    					</ul>
						    					<a href="#" class="link d-block d-md-none">
					    							Прокласти маршрут
					    						</a>
				    						</div>	
				    						<a href="#" class="open-graph">
				    							<img src="img/graph-ico-down.svg" alt="">
				    						</a>								
				    					</td>
				    					<td>
				    						<a href="#" class="link d-none d-md-block">
				    							Прокласти маршрут
				    						</a>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>
				    						<p>Відділення №89</p>
											<span>вулиця Глибочицька, 28, Київ</span>
				    					</td>
				    					<td>
				    						<span>Київ</span>
				    					</td>
				    					<td>
				    						<div class="graph">
						    					<ul classs="weekday">
						    						<li>
						    							<a href="#">
						    								<span>пн</span>
						    								8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>вт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#" class="active">
						    								<span>ср</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>чт</span>
						    								9:00 - 18:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>пт</span>
						    								9:00 - 14:00
						    							</a>
						    						</li>
						    					</ul>
						    					<ul classs="weekend">
						    						<li>
						    							<a href="#">
						    								<span>сб</span>
						    								 8:00 - 21:00
						    							</a>
						    						</li>
						    						<li>
						    							<a href="#">
						    								<span>нд</span>
						    								 9:00 - 18:00
						    							</a>
						    						</li>
						    					</ul>
						    					<a href="#" class="link d-block d-md-none">
					    							Прокласти маршрут
					    						</a>
				    						</div>	
				    						<a href="#" class="open-graph">
				    							<img src="img/graph-ico-down.svg" alt="">
				    						</a>								
				    					</td>
				    					<td>
				    						<a href="#" class="link d-none d-md-block">
				    							Прокласти маршрут
				    						</a>
				    					</td>
				    				</tr>
				    			</tbody>
				    		</table>
			    		</div>
			    	</div>
			    </div>
		    </div>	
		    <div class="mobile-buttons map">
		    	<ul>
		    		<li>
		    			<a href="#">мапа</a>
		    		</li>
		    		<li>
		    			<a href="#">список відділень</a>
		    		</li>
		    	</ul>
		    </div>			
		</div>																																	
	</section>
<!-- END CONTENT -->
<?include( 'tpl/footer.php' );?>
<script>
	function HomeControl(controlDiv, map) {
	    google.maps.event.addDomListener(zoomout, 'click', function() {
	        var currentZoomLevel = map.getZoom();
	        if (currentZoomLevel != 0) {
	            map.setZoom(currentZoomLevel - 1);
	        }
	    });

	    google.maps.event.addDomListener(zoomin, 'click', function() {
	        var currentZoomLevel = map.getZoom();
	        if (currentZoomLevel != 21) {
	            map.setZoom(currentZoomLevel + 1);
	        }
	    });
	}

	let infoWindow;

	function initMap() {
		var locations = [
			['',50.448321321575975, 30.51139937785376, "img/active-map-ico.svg"],
			['',50.43345289572514, 30.555688013447877, "img/marker.svg"],
			['',50.460125273741006, 30.409775841916872, "img/marker.svg"],
			['',50.40348320492831, 30.50281630894017, "img/marker.svg"],
			['',50.459906708799636, 30.636712183992156, "img/marker.svg"],
		];

	   
	    var mapDiv = document.getElementById('map');
	    var mapOptions = {
	        zoom: 12,
	        center: new google.maps.LatLng(50.448321321575975, 30.51139937785376),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
	        disableDefaultUI: true
	    }

	    map = new google.maps.Map(mapDiv, mapOptions);
	    for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map,
				icon: {
					url: locations[i][3],
				}
			});
		}

	    var homeControlDiv = document.createElement('div');
	    var homeControl = new HomeControl(homeControlDiv, map);
	    
	    infoWindow = new google.maps.InfoWindow();
	    const locationButton = document.getElementById('location');
	    locationButton.addEventListener("click", () => {
	        if (navigator.geolocation) {
	            navigator.geolocation.getCurrentPosition(
	                (position) => {
	                    const pos = {
	                        lat: position.coords.latitude,
	                        lng: position.coords.longitude,
	                    };
	                    infoWindow.setPosition(pos);
	                    infoWindow.setContent("Location found.");
	                    infoWindow.open(map);
	                    map.setCenter(pos);
	                },
	                () => {
	                    handleLocationError(true, infoWindow, map.getCenter());
	                }
	            );
	        } else {
	            // Browser doesn't support Geolocation
	            handleLocationError(false, infoWindow, map.getCenter());
	        }
	    });
	}

	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	    infoWindow.setPosition(pos);
	    infoWindow.setContent(
	        browserHasGeolocation ?
	        "Error: The Geolocation service failed." :
	        "Error: Your browser doesn't support geolocation."
	    );
	    infoWindow.open(map);
	}
</script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBLmSrYz01qDh9um3Bp6v6995mt43clmh0&region=UA&language=uk&callback=initMap&libraries=&v=weekly'></script>