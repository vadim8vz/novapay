<?include( 'tpl/header.php' );?>
<!-- START CONTENT -->
	<section class="content">
		<div class="section section-form">
			<div class="container">
				<h1>Повідомлення про<br/> порушення</h1>
				<p class="subtitle">у сфері протидії легалізації грошових коштів</p>
				<p class="description">Ваше повідомлення отримає Департамент фінансового моніторингу ТОВ «НоваПей».<br/> Повідомлення щодо легалізації грошових коштів <b>не передбачає відповіді</b>
					<span class="tip">
						<img src="img/info-ico-small.svg" alt="">
						<small>
							Дані клієнта потрібні, щоб фахівці Департаменту фінансового моніторингу у разі необхідності могли отримати додаткову інформації щодо порушення.
						</small>
					</span>
				</p>
				<div class="envelope">
					<div class="success-message">
						<p>Якщо ви незадоволені якістю обслуговування чи бажаєте отримати відповідь на звернення, заповніть</p>
						<a href="#">
							Форму зворотного зв’язку
							<img src="img/green-arrow-right.svg" alt="">
						</a>
					</div>
					<form>
						<p class="form-title d-none d-md-block">Вид звернення</p>
						<div class="select-envelope">
							<div class="form-wrapper-default default-select">
								<div class="form-group">
									<span>Вид звернення</span>
									<p>Оберіть вид звернення</p>
								</div>
							</div>
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#default">Звичайне</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#conf">Конфіденційне</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#anon">
										Анонімне
										<span class="tip">
											<img src="img/info-ico-small.svg" alt="">
											<small>
												Дані клієнта потрібні, щоб фахівці Департаменту фінансового моніторингу у разі необхідності могли отримати додаткову інформації щодо порушення.
											</small>
										</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="default">
								<div class="row">
									<div class="col-12">
										<p class="form-title">Особиста інформація</p>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Ім’я </span>
												<input type="text" name="name" class="form-control" placeholder="Ваше ім’я" required="">
											</div>
										</div>
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
												<span>По-батькові</span>
												<input type="text" name="thirdname" class="form-control" placeholder="Ваше по-батькові" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-md-6">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Посада, назва підрозділу</span>
												<input type="text" name="post" class="form-control" placeholder="Виключно для співробітників ТОВ «НоваПей»" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Номер телефону</span>
												<input type="tel" name="phone" class="form-control" placeholder="+380 00 000 00 00" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-8 col-lg-8">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Email</span>
												<input type="email" name="email" class="form-control" placeholder="Ваш email" required="">
											</div>
										</div>
									</div>
									<div class="col-12">
										<p class="form-title">Зміст повідомлення </p>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-5">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Дата проведення фінансових операцій</span>
												<input type="email" name="email" class="form-control" placeholder="ДД/ММ/РРРР" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-8 col-lg-8">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Сума операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Валюта та сума кожної фінансової операції" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Зміст фінансових операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Зміст фінансових операцій" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Ознаки легалізації доходів чи фін. тероризму</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Ознаки легалізації доходів чи фінансування тероризму" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>За яких обставин виявлені фін. операції</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="За яких обставин виявлені фінансові операції" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-12">
										<p class="form-title">Додаткова інформація</p>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Фактичні вигодоодержувачі, якщо вони відомі</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Фактичні вигодоодержувачі, якщо вони відомі" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Треті особи, що причетні до пров. операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Треті особи, що причетні до проведення операцій" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Інша інформація</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Інша інформація" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<label class="form-wrapper-default w-half js-add-file">
											<span class="or d-block d-md-none">або</span>
											<input type="file" id="fileinput" class="file-control" style="display: none">
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
							<div class="tab-pane fade" id="conf">
								<div class="row">
									<div class="col-12">
										<p class="form-title">Особиста інформація</p>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Ім’я </span>
												<input type="text" name="name" class="form-control" placeholder="Ваше ім’я" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Прізвище </span>
												<input type="text" name="surname" class="form-control" placeholder="Ваше прізвище" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>По-батькові</span>
												<input type="text" name="thirdname" class="form-control" placeholder="Ваше по-батькові" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Посада, назва підрозділу</span>
												<input type="text" name="post" class="form-control" placeholder="Виключно для співробітників ТОВ «НоваПей»" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Номер телефону</span>
												<input type="tel" name="phone" class="form-control" placeholder="+380 00 000 00 00" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Email</span>
												<input type="email" name="email" class="form-control" placeholder="Ваш email" required="">
											</div>
										</div>
									</div>
									<div class="col-12">
										<p class="form-title">Зміст повідомлення </p>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Дата проведення фінансових операцій</span>
												<input type="email" name="email" class="form-control" placeholder="ДД/ММ/РРРР" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Сума операцій</span>
												<input type="email" name="email" class="form-control" placeholder="Валюта та сума кожної фінансової операції" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Зміст фінансових операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Зміст фінансових операцій" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Ознаки легалізації доходів чи фін. тероризму</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Ознаки легалізації доходів чи фінансування тероризму" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>За яких обставин виявлені фін. операції</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="За яких обставин виявлені фінансові операції" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-12">
										<p class="form-title">Додаткова інформація</p>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Фактичні вигодоодержувачі, якщо вони відомі</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Фактичні вигодоодержувачі, якщо вони відомі" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Треті особи, що причетні до пров. операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Треті особи, що причетні до проведення операцій" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Інша інформація</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Інша інформація" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<label class="form-wrapper-default w-half js-add-file">
											<span class="or d-block d-md-none">або</span>
											<input type="file" class="file-control" style="display: none">
											<a href="javascript:void(0)" class="link">Завантажити резюме</a>
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
							<div class="tab-pane fade" id="anon">
								<div class="row">
									<div class="col-12">
										<p class="form-title">Зміст повідомлення </p>
									</div>
									<div class="col-xl-4">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Дата проведення фінансових операцій</span>
												<input type="email" name="email" class="form-control" placeholder="ДД/ММ/РРРР" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Сума операцій</span>
												<input type="email" name="email" class="form-control" placeholder="Валюта та сума кожної фінансової операції" required="">
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Зміст фінансових операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Зміст фінансових операцій" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Ознаки легалізації доходів чи фін. тероризму</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Ознаки легалізації доходів чи фінансування тероризму" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>За яких обставин виявлені фін. операції</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="За яких обставин виявлені фінансові операції" oninput="auto_grow(this)" required=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-12">
										<p class="form-title">Додаткова інформація</p>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Фактичні вигодоодержувачі, якщо вони відомі</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Фактичні вигодоодержувачі, якщо вони відомі" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Треті особи, що причетні до пров. операцій</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Треті особи, що причетні до проведення операцій" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-wrapper-default">
											<div class="form-group">
												<span>Інша інформація</span>
												<textarea name="fin" cols="1" rows="1" class="form-control" placeholder="Інша інформація" oninput="auto_grow(this)"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<label class="form-wrapper-default w-half js-add-file">
											<span class="or d-block d-md-none">або</span>
											<input type="file" id="fileinput" class="file-control" style="display: none">
											<a href="javascript:void(0)" class="link">Завантажити резюме</a>
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
									<div class="captcha">
										<img src="img/captcha.svg" alt="">
									</div>
									<div class="button">
										<p>
											Даю згоду на обробку персональних даних.
											<a href="#">Положення про порядок обробки ПД</a>
										</p>
										<a href="#" class="btn btn-green">
											<span>
												Відправити повідомлення 
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