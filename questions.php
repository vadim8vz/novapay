<?include( 'tpl/header.php' );?>
<!-- START CONTENT -->
	<section class="content">
		<div class="section section-form questions">
			<div class="container">
				<div class="question-headings">
					<div class="heading-left">
						<h1>Залишилися питання?</h1>
						<p class="subtitle">Не шукайте кращих слів – напишіть їх, як вам зручно. Ми зрозуміємо</p>
					</div>
					<img src="img/questions-ico.svg" alt="">
				</div>
				<div class="envelope">
					<div class="form-nav">
						<ul class="business">
							<li>
								<a href="#" class="private">Приватна особа</a>
							</li>
							<li>
								<a href="#" class="business">Бізнес</a>
							</li>
						</ul>
						<ul class="black-nav">
							<li>
								<a href="#" class="active">Підприємство</a>
							</li>
							<li>
								<a href="#">ФОП</a>
							</li>
						</ul>
					</div>
					<form>
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>Назва компанії</span>
										<input type="text" name="name" class="form-control" placeholder="Назва компанії" required="">
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>ЄДРПОУ</span>
										<input type="text" name="name" class="form-control" placeholder="00 00 00 00" required="">
									</div>
								</div>
							</div>
							<div class="col-12">
								<p class="form-title">Контактна особа</p>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>Прізвище </span>
										<input type="text" name="surname" class="form-control" placeholder="Ваше прізвище" required="">
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>Ім’я  </span>
										<input type="text" name="surname" class="form-control" placeholder="Ваше ім’я" required="">
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>По-батькові (за бажанням)</span>
										<input type="text" name="thirdname" class="form-control" placeholder="Ваше по-батькові" required="">
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4  col-md-6">
								<div class="form-wrapper-default phone">
									<div class="form-group">
										<span>Номер телефону</span>
										<input type="tel" name="phone" class="form-control" placeholder="00 000 00 00" required="">
										<small>+380</small>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-8">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>Email (за бажанням) </span>
										<input type="email" name="email" class="form-control" placeholder="Ваш email" required="">
									</div>
								</div>
							</div>
							<div class="col-12">
								<p class="form-title">Оберіть категорію вашого запиту</p>
							</div>
						</div>
						<div class="select-envelope">
							<div class="form-wrapper-default default-select">
								<div class="form-group">
									<span>Категорія запиту</span>
									<p>Оберіть категорію із списку</p>
								</div>
							</div>
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#nocash">Безготівкове<br/> зарахування післяплати</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#internet">Інтернет-еквайринг</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#register">
										Реєстрові виплати
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#other">
										Інше
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="nocash">
								<div class="row">
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Повідомлення</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Розкажіть нам, що вас цікавить. Чим ми можемо допомогти вам?" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Номер накладної (за потреби) </span>
												<input type="email" name="email" class="form-control" placeholder="00 000 0000 0000">
											</div>
										</div>
									</div>	
									<div class="col-xl-8">
										<label class="form-wrapper-default w-half js-add-file to-right">
											<input type="file" class="file-control" style="display: none">
											<a href="javascript:void(0)" class="link">Завантажити файл</a>
											<span class="hidden-content">
												<p></p>
												<a href="#" class="remove-file link">
													Видалити
												</a>
											</span>
										</label>
									</div>																
								</div>
							</div>
							<div class="tab-pane fade" id="internet">
								<div class="row">
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Повідомлення</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Розкажіть нам, що вас цікавить. Чим ми можемо допомогти вам?" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Номер накладної (за потреби) </span>
												<input type="email" name="email" class="form-control" placeholder="00 000 0000 0000">
											</div>
										</div>
									</div>	
									<div class="col-xl-8">
										<label class="form-wrapper-default w-half js-add-file">
											<span class="or d-block d-md-none">або</span>
											<input type="file" class="file-control" style="display: none">
											<a href="javascript:void(0)" class="link">Завантажити файл</a>
											<span class="hidden-content">
												<p></p>
												<a href="#" class="remove-file link">
													Видалити
												</a>
											</span>
										</label>
									</div>																
								</div>
							</div>
							<div class="tab-pane fade" id="register">
								<div class="row">
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Повідомлення</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Розкажіть нам, що вас цікавить. Чим ми можемо допомогти вам?" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Номер накладної (за потреби) </span>
												<input type="email" name="email" class="form-control" placeholder="00 000 0000 0000">
											</div>
										</div>
									</div>	
									<div class="col-xl-8">
										<label class="form-wrapper-default w-half js-add-file">
											<span class="or d-block d-md-none">або</span>
											<input type="file" class="file-control" style="display: none">
											<a href="javascript:void(0)" class="link">Завантажити файл</a>
											<span class="hidden-content">
												<p></p>
												<a href="#" class="remove-file link">
													Видалити
												</a>
											</span>
										</label>
									</div>																
								</div>
							</div>
							<div class="tab-pane fade" id="other">
								<div class="row">
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Тема запиту (за бажанням)</span>
												<input type="email" name="email" class="form-control" placeholder="Тема запиту">
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Повідомлення</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Розкажіть нам, що вас цікавить. Чим ми можемо допомогти вам?" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Номер накладної (за потреби) </span>
												<input type="email" name="email" class="form-control" placeholder="00 000 0000 0000">
											</div>
										</div>
									</div>	
									<div class="col-xl-8">
										<label class="form-wrapper-default w-half js-add-file">
											<span class="or d-block d-md-none">або</span>
											<input type="file" class="file-control" style="display: none">
											<a href="javascript:void(0)" class="link">Завантажити файл</a>
											<span class="hidden-content">
												<p></p>
												<a href="#" class="remove-file link">
													Видалити
												</a>
											</span>
										</label>
									</div>																
								</div>
							</div>
						</div>	
						<div class="row">	
							<div class="col-xl-12">
								<div class="last-col">
									<div class="button">
										<p>
											Даю згоду на обробку персональних даних.
											<a href="#">Положення про порядок обробки ПД</a>
										</p>
										<a href="#" class="btn btn-green" data-toggle="modal" data-target="#successModal2">
											<span>
												Відправити запит 
											</span>
										</a>
									</div>
								</div>
							</div>	
						</div>
					</form>
				</div>					
			</div>
		</div>		
	</section>
<!-- END CONTENT -->
<?include( 'tpl/footer.php' );?>