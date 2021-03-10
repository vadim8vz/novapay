<?include( 'tpl/header.php' );?>
<!-- START CONTENT -->
	<section class="content">
		<div class="section section-inner-headings w-search">
			<div class="container">
				<h1>Юридична інформація</h1>
				<form class="inner-search">
					<div class="form-group">
						<button type="submit">
							<img src="img/inner-search-ico.svg" alt="">
						</button>
						<input type="search" class="form-control js-inner-inputsearch" id="search" placeholder="Пошук по документам" required>
						<span class="close-search" onclick="document.getElementById('search').value = ''">
							<img src="img/search-close.svg" alt="">
						</span>
					</div>
					<p class="search-results">
						Результат пошуку: <span>3</span>
					</p>
				</form>
			</div>
		</div>	
		<div class="section section-documents">
			<div class="container">
				<ul class="nav nav-tabs">
				    <li role="presentation">
				    	<a href="#docs" data-toggle="tab" class="active">Установчі та фінансові документи</a>
				    </li>
				    <li role="presentation">
				    	<a href="#private" data-toggle="tab">Документи для приватних осіб</a>
				    </li>
				    <li role="presentation">
				    	<a href="#form" data-toggle="tab">Форма публічного договору</a>
				    </li>
				    <li role="presentation">
				    	<a href="#contract" data-toggle="tab">Документи для оформлення договору</a>
				    </li>
				    <li role="presentation">
				    	<a href="#add" data-toggle="tab">Додаткові документи</a>
				    </li>
			  	</ul>
			  	  <!-- Tab panes -->
				<div class="tab-content">
				    <div class="tab-pane active" id="docs">
				    	<ul class="doc-list">
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Виписка ЄДР</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Свідоцтво про реєстрацію фінустанови_ПОСТ ФІНАНС</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Ліцензія НБУ №11/1 від 17.10.2014 р. - Ліцензія чинна</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Свідоцтво_узгодження змін до правил_ МПС_NovaPay</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Ліцензія на здійснення валютних операцій №5</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Консолідована фінансова звітність за рік що закінчився 31.12.2019р та звіт незалежного аудитора</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Звітні дані за рік що закінчився 31.12.2019 р та звіт незалежного аудитора</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Окрема фінансова звітність за рік що закінчився 31.12.2019р та звіт незалежного аудитора</a>
				    		</li>
				    	</ul>
				    </div>
				    <div class="tab-pane" id="private">
				    	<ul class="doc-list">
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Виписка ЄДР</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Свідоцтво про реєстрацію фінустанови_ПОСТ ФІНАНС</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Ліцензія НБУ №11/1 від 17.10.2014 р. - Ліцензія чинна</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Свідоцтво_узгодження змін до правил_ МПС_NovaPay</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Ліцензія на здійснення валютних операцій №5</a>
				    		</li>
				    	</ul>
				    </div>
				    <div class="tab-pane" id="form">
				    	<ul class="doc-list">
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Виписка ЄДР</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Свідоцтво про реєстрацію фінустанови_ПОСТ ФІНАНС</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Ліцензія НБУ №11/1 від 17.10.2014 р. - Ліцензія чинна</a>
				    		</li>
				    	</ul>
				    </div>
				    <div class="tab-pane" id="contract">
				    	<ul class="doc-list">
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Виписка ЄДР</a>
				    		</li>
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Свідоцтво про реєстрацію фінустанови_ПОСТ ФІНАНС</a>
				    		</li>
				    	</ul>
				    </div>
				    <div class="tab-pane" id="add">
				    	<ul class="doc-list">
				    		<li>
				    			<a href="test.pdf" download="test.pdf" target="_blank">Виписка ЄДР</a>
				    		</li>
				    	</ul>
				    </div>
			    </div>
			</div>
		</div>																																			
	</section>
<!-- END CONTENT -->
<?include( 'tpl/footer.php' );?>
<script src="libs/bootstrap/bootstrap-tabcollapse.js"></script>
<script>
	$('.section-documents .nav-tabs').tabCollapse({
		tabsClass: 'd-none d-lg-block',
    	accordionClass: 'd-block d-lg-none'
	});
</script>