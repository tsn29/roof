<?php echo $header;?>

<section class="banner">
			<div class="banner__content">
				<div class="banner__info">
					<h1 class="title1 banner__title">TerraRoof.</h1>
					<h2 class="title2 banner__subtitle">Кровля для самых требовательных</h2>
					<div class="banner__features">
						<div class="banner__features-title">Полностью за наш счет:</div>
						<div class="banner__features-list">
							<div class="banner__feature">
								<img class="banner__feature-icon" src="/catalog/view/theme/shop/assets/img/icons/check-fill.svg" alt="">
								<span class="banner__feature-text">Доставка</span>
							</div>
							<div class="banner__feature">
								<img class="banner__feature-icon" src="/catalog/view/theme/shop/assets/img/icons/check-fill.svg" alt="">
								<span class="banner__feature-text">Обучение монтажу</span>
							</div>
							<div class="banner__feature">
								<img class="banner__feature-icon" src="/catalog/view/theme/shop/assets/img/icons/check-fill.svg" alt="">
								<span class="banner__feature-text">Аренда оборудования</span>
							</div>
						</div>
					</div>
					<a class="btn banner__btn" href="/shop/">Каталог продукции</a>
				</div>
				<div class="banner__slider swiper">
					<div class="swiper-wrapper">
					<?php foreach ($banners as $b){?>
						<div class="banner__slide swiper-slide">
						<?php if($b['link']!=''){?>
						<a href="<?php echo $b['link']?>"><img src="<?php echo $b['image']?>" alt="<?php  echo $b['title']?>"></a>
						<?php } else {?>
							<img src="<?php  echo $b['image']?>" alt="<?php  echo $b['title']?>">
						<?php }?>
						</div>
					<?php }?>

					</div>
					<div class="banner__pagination"></div>
				</div>
			</div>
		</section>

		<section class="main-product main__main-product">
			<div class="container">
				<div class="main-product__content">
					<div class="main-product__img">
						<img src="/catalog/view/theme/shop/assets/img/main-product.jpg" alt="">
					</div>
					<div class="main-product__info">
						<div class="tags main-product__tags">
							<div class="tags__list">
								<div class="tag tags__item">
									<img class="tag__icon" src="/catalog/view/theme/shop/assets/img/icons/tag.svg" alt="">
									<span class="tag__text">хит продаж</span>
								</div>
							</div>
						</div>
						<h2 class="title2 main-product__title">Композитная черепица</h2>
						<div class="text-content text-dropdown main-product__text-content" data-droptext-length="108"
							data-droptext-width="767">
							Идеальна для резко-континентального климата Казахстана.
							<br><br>
							Задерживает сход снега и не парусит при штормовых ветрах. Не нагревается, не выцветает, не
							горит.
							<br><br>
							Гарантированно не требует ремонта более 40 лет.
						</div>
						<a class="btn main-product__btn" href="/shop/">Перейти в каталог</a>
					</div>
				</div>
			</div>
		</section>

		<section class="callback-bg main__section" id="callback">
			<div class="container">
				<div class="callback-bg__content" style="background-image: url('/catalog/view/theme/shop/assets/img/callback-bg.jpg');">
					<div class="callback-bg__main">
						<h2 class="title2 callback-bg__title">Заменим старую кровлю <br> на новую за 2 недели!</h2>
						<form class="callback-form callback-form--row callback-bg__form js-form" autocomplete="off">
							<h3 class="title5 title5--sm-white callback-form__title">Заказать звонок специалиста</h3>
							<div class="callback-form__main callback-form__main--row">
								<div class="form-field callback-form__item">
									<input class="input form-field__input" type="text" placeholder="Ваше имя"
										data-validate="name" data-label="имя">
									<span class="form-field__error form-field__error--md-absolute"></span>
								</div>
								<div class="form-field callback-form__item">
									<input class="input form-field__input" type="text" placeholder="Телефон"
										data-validate="phone" data-label="телефон">
									<span class="form-field__error form-field__error--md-absolute"></span>
								</div>
								<button class="btn btn--border btn--sm-primary callback-form__btn">Отправить</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="features main__section">
			<div class="container">
				<div class="features__content">
					<div class="features__header">
						<h2 class="title2 features__title">Наши решающие преимущества</h2>
						<button class="link-more features__more js-open-popup" data-popup-name="callback">Заказать
							просчет Вашего проекта с 3D
							визуализацией</button>
					</div>
					<div class="features__list">
						<div class="features__item accordion accordion--mobile">
							<div class="features__item-line wow animate__fadeIn"></div>
							<h3 class="title5 features__item-title accordion__btn wow animate__fadeIn"
								data-wow-delay="0.3s" data-wow-offset="265">Эстетика на века:</h3>
							<div class="accordion__content">
								<div class="accordion__main">
									<p class="text features__item-text wow animate__fadeIn" data-wow-delay="0.6s"
										data-wow-offset="240">кровельные материалы TerraRoof не выцветают, не
										подвергаются коррозии и не теряют первоначальный вид.</p>
								</div>
							</div>
						</div>
						<div class="features__item accordion accordion--mobile">
							<div class="features__item-line wow animate__fadeIn"></div>
							<h3 class="title5 features__item-title accordion__btn wow animate__fadeIn"
								data-wow-delay="0.3s" data-wow-offset="265">Идеальная шумо
								-&nbsp;и&nbsp;теплоизоляция:</h3>
							<div class="accordion__content">
								<div class="accordion__main">
									<p class="text features__item-text wow animate__fadeIn" data-wow-delay="0.6s"
										data-wow-offset="240">под нашей крышей не потревожит ни стук дождя, ни
										шум метели, температура в Вашем доме комфортна при любой погоде.</p>
								</div>
							</div>
						</div>
						<div class="features__item accordion accordion--mobile">
							<div class="features__item-line wow animate__fadeIn"></div>
							<h3 class="title5 features__item-title accordion__btn wow animate__fadeIn"
								data-wow-delay="0.3s" data-wow-offset="265">Гарантийный срок:</h3>
							<div class="accordion__content">
								<div class="accordion__main">
									<p class="text features__item-text wow animate__fadeIn" data-wow-delay="0.6s"
										data-wow-offset="240">гарантийный срок от 30 до 100+ лет в зависимости
										от материала. Выбор TerraRoof - Ваше грамотное вложение средств.</p>
								</div>
							</div>
						</div>
						<div class="features__item accordion accordion--mobile">
							<div class="features__item-line wow animate__fadeIn"></div>
							<h3 class="title5 features__item-title accordion__btn wow animate__fadeIn"
								data-wow-delay="0.3s" data-wow-offset="265">Безупречный сервис:</h3>
							<div class="accordion__content">
								<div class="accordion__main">
									<p class="text features__item-text wow animate__fadeIn" data-wow-delay="0.6s"
										data-wow-offset="240">более 4000 довольных клиентов. Мы ведем проект
										от бесплатного создания 3Д модели до полного авторского надзора и приема
										оставшихся материалов. Ваше время - наш приоритет.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="article main__section">
			<div class="container">
				<div class="article__content">
					<div class="article__info">
						<h2 class="title2 article__title"><strong>Бесплатная</strong> 3D‑визуализация</h2>
						<div class="text article__text">
							<p>Не получается представить, как будет выглядеть Ваша крыша с новым материалом? При покупке
								кровли мы создаем 3D-визуализацию в подарок!</p>
						</div>
						<button class="btn article__btn article__btn--desktop js-open-popup"
							data-popup-name="callback">Узнать
							подробнее</button>
						<a class="btn article__btn article__btn--mobile" href="#">Каталог продукции</a>
					</div>
					<img class="article__img" src="/catalog/view/theme/shop/assets/img/article.jpg" alt="">
				</div>
			</div>
		</section>

		<section class="offer main__section">
			<div class="container">
				<div class="offer__content">
					<div class="offer__img">
						<img src="/catalog/view/theme/shop/assets/img/offer.png" alt="">
					</div>
					<div class="offer__info">
						<div class="tags offer__tags">
							<div class="tags__list">
								<div class="tag tags__item">
									<img class="tag__icon" src="/catalog/view/theme/shop/assets/img/icons/sale.svg" alt="">
									<span class="tag__text">акция -20%</span>
								</div>
							</div>
						</div>
						<div class="title2 title2--white offer__title">Лучшее предложение</div>
						<p class="text text--white offer__text">Композитная черепица Metrotile</p>
						<a class="btn btn--white offer__btn" href="#">Заказать выгодно</a>
					</div>
					<img class="offer__bg" src="/catalog/view/theme/shop/assets/img/icons/logo-blue.svg" alt="">
				</div>
			</div>
		</section>

		<section class="video-section main__section">
			<div class="video-section__main">
				<div class="container video-section__container">
					<div class="video-section__body">
						<h3 class="title3 video-section__title">Индивидуальный тур по крышам – уникальная возможность
							оценить объекты TerraRoof</h3>
						<button class="btn btn--xs-border video-section__btn js-open-popup"
							data-popup-name="callback">Подобрать время</button>
					</div>
				</div>
			</div>
			<div class="video-section__video-box">
				<video class="video-section__video" src="/catalog/view/theme/shop/assets/video/main.mp4" loop="loop" autoplay preload="auto"
					muted></video>
			</div>
		</section>

		<section class="categories-section main__section">
			<div class="container">
				<div class="categories-section__content">
					<h2 class="title2 categories-section__title">Сэкономьте время - купите все для кровли в TerraRoof
					</h2>
					<div class="categories-section__list">
						<a class="categories-section__item" href="/index.php?route=product/category&path=59">
							<h3 class="categories-section__item-title">
								<span>Кровельные материалы</span>
							</h3>
						</a>
						<a class="categories-section__item categories-section__item--active" href="/index.php?route=product/category&path=78">
							<h3 class="categories-section__item-title">
								<span>Мансардные окна</span>
							</h3>
						</a>
						<a class="categories-section__item" href="/index.php?route=product/category&path=75">
							<h3 class="categories-section__item-title">
								<span>Гидроизоляция</span>
							</h3>
						</a>
						<div class="categories-section__item categories-section__item--img">
							<img class="categories-section__item-bg" src="/catalog/view/theme/shop/assets/img/categories-section/1.jpg" alt="">
						</div>
						<a class="categories-section__item" href="/index.php?route=product/category&path=69">
							<h3 class="categories-section__item-title">
								<span>Водосточные системы</span>
							</h3>
						</a>
						<div class="categories-section__item categories-section__item--img">
							<img class="categories-section__item-bg" src="/catalog/view/theme/shop/assets/img/categories-section/2.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="callback-bg main__section">
			<div class="container">
				<div class="callback-bg__content" style="background-image: url('/catalog/view/theme/shop/assets/img/callback-bg2.jpg');">
					<div class="callback-bg__main">
						<h2 class="title2 callback-bg__title">Самый большой склад <br> в Центральной Азии 30 000 кв.м
						</h2>
						<form class="callback-form callback-form--row callback-bg__form js-form" autocomplete="off">
							<h3 class="title5 title5--sm-white callback-form__title">Отгрузим день в день, свяжитесь с
								нами</h3>
							<div class="callback-form__main callback-form__main--row">
								<div class="form-field callback-form__item">
									<input class="input form-field__input" type="text" placeholder="Ваше имя"
										data-validate="name" data-label="имя">
									<span class="form-field__error form-field__error--md-absolute"></span>
								</div>
								<div class="form-field callback-form__item">
									<input class="input form-field__input" type="text" placeholder="Телефон"
										data-validate="phone" data-label="телефон">
									<span class="form-field__error form-field__error--md-absolute"></span>
								</div>
								<button class="btn btn--border btn--sm-primary callback-form__btn">Отправить</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="images-section main__section">
			<div class="container">
				<div class="images-section__content">
					<h2 class="title2 images-section__title">Мы сделаем Ваш дом объектом восхищения</h2>
					<div class="images-section__slider-box">
						<div class="images-section__slider swiper">
							<div class="swiper-wrapper images-section__slider-wrapper">
								<div class="images-section__slide swiper-slide">
									<div class="swiper images-section__inner-slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/1.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/2.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/3.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/4.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/5.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/6.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/7.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/8.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/9.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/10.jpg"
													alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="images-section__slide swiper-slide">
									<div class="swiper images-section__inner-slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/1.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/2.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/3.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/4.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/5.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/6.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/7.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/8.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/9.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/10.jpg"
													alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="images-section__slide swiper-slide">
									<div class="swiper images-section__inner-slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/1.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/2.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/3.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/4.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/5.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/6.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/7.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/8.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/9.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/10.jpg"
													alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="images-section__slide swiper-slide">
									<div class="swiper images-section__inner-slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/1.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/2.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/3.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/4.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/5.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/6.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/7.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/8.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/9.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/10.jpg"
													alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="images-section__slide swiper-slide">
									<div class="swiper images-section__inner-slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/1.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/2.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/3.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/4.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/5.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/6.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/7.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/8.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/9.jpg"
													alt="">
											</div>
											<div class="swiper-slide images-section__inner-slide">
												<img class="images-section__img" src="/catalog/view/theme/shop/assets/img/house-images/10.jpg"
													alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="images-section__slide images-section__slide--btn swiper-slide">
									<button class="images-section__slide-btn js-open-popup" data-popup-name="callback">
										<span>Подобрать</span>
										<img src="/catalog/view/theme/shop/assets/img/icons/logo-blue.svg" alt="">
									</button>
								</div>
							</div>
						</div>
						<div class="images-section__pagination"></div>
					</div>
					<button class="btn images-section__mobile-btn js-open-popup" data-popup-name="callback">
						Подобрать
					</button>
				</div>
			</div>
		</section>

		<section class="info-section main__section">
			<div class="container">
				<div class="info-section__content">
					<div class="info-section__main">
						<h2 class="title2 info-section__title">Возьмем на себя <strong>обучение Вашей бригады</strong>
						</h2>
						<button class="link-more link-more--primary info-section__more js-open-popup"
							data-popup-name="callback">Связаться с техническим
							отделом</button>
					</div>
					<div class="video-player info-section__video" data-src="/catalog/view/theme/shop/assets/video/info.mp4">
						<img class="video-player__bg" src="/catalog/view/theme/shop/assets/img/info-section.jpg" alt="">
						<button class="video-player__play"></button>
					</div>
				</div>
			</div>
		</section>

		<section class="partners main__section">
			<div class="container">
				<div class="partners__content">
					<h2 class="title2 partners__title">Наши партнеры</h2>
					<div class="partners__slider-box">
						<div class="partners__slider swiper">
							<div class="swiper-wrapper">
							<?php foreach ($partners as $p){?>
								<div class="swiper-slide partners__slide">
									<img class="partners__img" src="<?php  echo $p["image"]?>" alt="">
								</div>
							<?php }?>

							</div>
						</div>
						<div class="partners__pagination"></div>
					</div>
				</div>
			</div>
		</section>

		<section class="faq main__faq">
			<div class="container">
				<div class="faq__content">
					<div class="faq__info">
						<h2 class="title2 faq__title">Ответы на ваши вопросы</h2>
					</div>
					<div class="faq__list">
					<?php foreach ($quest as $q){?>
						<div class="faq__item accordion">
							<button class="faq__item-header accordion__btn">
								<?php  echo $q['name']?>
								<span class="faq__item-arrow"></span>
							</button>
							<div class="accordion__content">
								<div class="accordion__main faq__item-main">
									<div class="text faq__item-text">
										<p><?php  echo $q['description']?></p>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
						
					</div>
				</div>
			</div>
		</section>

		<section class="price-list main__section">
			<div class="container">
				<div class="price-list__content">
					<div class="price-list__contacts">
						<div class="contact-item price-list__contact">
							<h3 class="title4 price-list__title">Узнайте актуальные цены</h3>
							<a class="btn btn--border price-list__btn" href="#">Скачать прайс</a>
						</div>
						<div class="contact-item price-list__contact">
							<div class="contact-item__icon">
								<img src="/catalog/view/theme/shop/assets/img/icons/location.svg" alt="">
							</div>
							<div class="text text--gray contact-item__name">Центральный штаб</div>
							<div class="contact-item__value">г. Астана, ул. Керей, Жанибек хандар, 30</div>
						</div>
						<div class="contact-item price-list__contact">
							<div class="contact-item__icon">
								<img src="/catalog/view/theme/shop/assets/img/icons/message.svg" alt="">
							</div>
							<div class="text text--gray contact-item__name">Почта:</div>
							<a class="contact-item__value" href="mailto:info@terraroof.kz">info@terraroof.kz</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="social main__social">
			<div class="container">
				<div class="social__content">
					<h2 class="title2 title2--white social__title">Мы в социальных сетях</h2>
					<p class="text text--white social__text">Подпишитесь на нас и следите за новостями, акциями и
						спец.предложениями!</p>
					<div class="social__list">
						<a class="social__item" href="https://www.instagram.com/" target="_blank">
							<img class="social__item-icon" src="/catalog/view/theme/shop/assets/img/icons/social/instagram.svg" alt="">
							<span class="social__item-text">Instagram</span>
						</a>
						<a class="social__item" href="https://www.facebook.com/" target="_blank">
							<img class="social__item-icon" src="/catalog/view/theme/shop/assets/img/icons/social/facebook.svg" alt="">
							<span class="social__item-text">Facebook</span>
						</a>
						<a class="social__item" href="https://www.youtube.com/" target="_blank">
							<img class="social__item-icon" src="/catalog/view/theme/shop/assets/img/icons/social/youtube.svg" alt="">
							<span class="social__item-text">YouTube</span>
						</a>
						<a class="social__item" href="https://www.whatsapp.com/" target="_blank">
							<img class="social__item-icon" src="/catalog/view/theme/shop/assets/img/icons/social/whatsapp.svg" alt="">
							<span class="social__item-text">WhatsApp</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="gallery main__gallery">
			<div class="container">
				<div class="gallery__content">
					<div class="gallery__header">
						<h3 class="title4 gallery__title gallery__title--long">Подпишись на наш инстаграм и следи за
							новостями, акциями и спец.предложениями!</h3>
						<a class="btn btn--border gallery__btn" href="https://www.instagram.com/"
							target="_blank">Подписаться</a>
					</div>
					<div class="gallery__list">
						<a class="gallery__item" href="https://www.instagram.com/p/CnTT-QcI4WS/" target="_blank">
							<img class="gallery__img" src="/catalog/view/theme/shop/assets/img/instagram-images/1.jpg" alt="">
						</a>
						<a class="gallery__item" href="https://www.instagram.com/p/CngNTTuILS6/" target="_blank">
							<img class="gallery__img" src="/catalog/view/theme/shop/assets/img/instagram-images/2.jpg" alt="">
						</a>
						<a class="gallery__item" href="https://www.instagram.com/p/CnEriSwrxyo/" target="_blank">
							<img class="gallery__img" src="/catalog/view/theme/shop/assets/img/instagram-images/3.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="gallery main__section">
			<div class="container">
				<div class="gallery__content">
					<div class="gallery__header">
						<h3 class="title4 gallery__title">Подпишись на наш Youtube-канал и следи за новыми видео</h3>
						<a class="btn btn--border gallery__btn" href="https://www.youtube.com/"
							target="_blank">Подписаться</a>
					</div>
					<div class="gallery__list">
						<div class="youtube-player gallery__item gallery__item--video"
							data-src="https://www.youtube.com/embed/Gx543KbuGFY">
							<img class="youtube-player__preview gallery__img" src="/catalog/view/theme/shop/assets/img/youtube-previews/1.jpg"
								alt="">
							<button class="youtube-player__play"></button>
						</div>
						<div class="youtube-player gallery__item gallery__item--video"
							data-src="https://www.youtube.com/embed/Gx543KbuGFY">
							<img class="youtube-player__preview gallery__img" src="/catalog/view/theme/shop/assets/img/youtube-previews/2.jpg"
								alt="">
							<button class="youtube-player__play"></button>
						</div>
						<div class="youtube-player gallery__item gallery__item--video"
							data-src="https://www.youtube.com/embed/Gx543KbuGFY">
							<img class="youtube-player__preview gallery__img" src="/catalog/view/theme/shop/assets/img/youtube-previews/3.jpg"
								alt="">
							<button class="youtube-player__play"></button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="callback-box">
			<button class="icon-circle callback-box__btn">
				<img class="icon-circle__icon" src="/catalog/view/theme/shop/assets/img/icons/whatsapp.svg" alt="">
			</button>
		</div>

<?php echo $footer;?>