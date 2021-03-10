<?include( 'tpl/header.php' );?>
<!-- START CONTENT -->
	<section class="content">
		<div class="section section-form questions private">
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
						<ul class="private">
							<li>
								<a href="#" class="private">Приватна особа</a>
							</li>
							<li>
								<a href="#" class="business">Бізнес</a>
							</li>
						</ul>
					</div>
					<div class="alert alert-danger">
						Заповніть, будь ласка, пропущені поля
					</div>
					<form>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default w-error">
									<div class="form-group">
										<span>Ім’я </span>
										<input type="text" name="name" class="form-control" placeholder="Ваше ім’я" required="">
									</div>
									<small>Пропущене поле</small>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default w-error">
									<div class="form-group">
										<span>Прізвище </span>
										<input type="text" name="name" class="form-control" placeholder="Ваше прізвище" required="">
									</div>
									<small>Пропущене поле</small>
								</div>
							</div>
							<div class="d-block d-lg-none col-md-6">
								<div class="form-wrapper-default w-error">
									<div class="form-group">
										<span>По-батькові </span>
										<input type="text" name="name" class="form-control" placeholder="Ваше по-батькові" required="">
									</div>
									<small>Пропущене поле</small>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default w-error">
									<div class="form-group">
										<span>Номер телефону</span>
										<input type="tel" name="phone" class="form-control" placeholder="+380 00 000 00 00" required="">
									</div>
									<small>Пропущене поле</small>
								</div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>Email (за бажанням) </span>
										<input type="email" name="email" class="form-control" placeholder="Ваш email">
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="form-wrapper-default">
									<div class="form-group">
										<span>Номер накладної (за потреби) </span>
										<input type="email" name="email" class="form-control" placeholder="00 000 0000 0000">
									</div>
								</div>
							</div>
							<div class="col-xl-12">
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
							<div class="col-xl-12">
								<div class="form-wrapper-default w-error">
									<div class="form-group">
										<span>Повідомлення</span>
										<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Розкажіть нам, що вас цікавить. Чим ми можемо допомогти вам?" oninput="auto_grow(this)" required=""></textarea>
									</div>
									<small>Пропущене поле</small>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="last-col">
									<div class="button">
										<p>
											Даю згоду на обробку персональних даних.
											<a href="#">Положення про порядок обробки ПД</a>
										</p>
										<a href="#" class="btn btn-purple">
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