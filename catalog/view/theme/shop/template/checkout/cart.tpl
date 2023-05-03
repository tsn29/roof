<?php echo $header; ?>
<div class="cart">
			<div class="container">
				<div class="cart__content">
					<div class="breadcrumbs cart__breadcrumbs">
						<div class="breadcrumbs__list">
							<div class="breadcrumbs__item">
								<a class="breadcrumbs__link" href="/">Главная</a>
							</div>

							<div class="breadcrumbs__item">
								<span class="breadcrumbs__current">Корзина</span>
							</div>
						</div>
					</div>
					
  <?php if ($attention) { ?>
  <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $attention; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>					
					
					<h1 class="title5 cart__title"><?php echo $heading_title; ?> (<?echo count($products);?>)</h1>
					<div class="cart__list">
					<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
					<?php foreach ($products as $product) { ?>
						<div class="cart-item cart__item">
							<div class="cart-item__img">
								<?php if ($product['thumb']) { ?>
                  <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-thumbnail" /></a>
								<?}?>
							</div>
							<div class="cart-item__info">
								<h2 class="title5 cart-item__title"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
								<?php if (!$product['stock']) { ?>
                  <span class="text-danger">***</span>
                  <?php } ?>
								<?/*<p class="text cart-item__text">Здесь будет описание</p>*/?>
							</div>
							<div class="counter counter--high cart-item__counter">
								<button type="button" class="counter__minus">-</button>
								<input class="counter__input counter__input--text-big" type="number" value="1" name="quantity[<?php echo $product['cart_id']; ?>]"	>
								<button type="button" class="counter__plus">+</button>
								
							</div>
							<div class="cart-item__right">
								<div class="cart-item__price"><?php echo $product['price']; ?></div>
								<div class="cart-item__price"><?php echo $product['total']; ?></div>
								
								<button type="submit" data-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-primary">Обновить</button>
                    <button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="cart-item__delete" onclick="cart.remove('<?php echo $product['cart_id']; ?>');">Удалить</button>
								
							</div>
						</div>
					<?}?>
					</form>
					</div>
				</div>
			</div>
		</div>
		
<div class="data-section">
			<div class="container">
				<div class="data-section__content">
					<form class="callback-form data-section__form js-form" autocomplete="off">
						<h3 class="title5 title5--center callback-form__title callback-form__title--sm-bold">Данные
							получателя</h3>
						<div class="callback-form__main">
							<div class="form-field callback-form__item">
								<label class="form-field__label" for="form-street">Город</label>
								<div class="select">
									<select class="select__field form-field__input" data-validate="empty" data-label="город">
										<option value="1">Астана</option>
										<option value="2">Москва</option>
										<option value="3">Новосибирск</option>
									</select>
								</div>
								<span class="form-field__error"></span>
							</div>
							<div class="form-field callback-form__item">
								<label class="form-field__label" for="form-street">Улица, дом</label>
								<input class="input form-field__input" id="form-street" type="text"
									data-validate="empty" data-label="улица, дом">
								<span class="form-field__error"></span>
							</div>
							<div class="form-field callback-form__item">
								<label class="form-field__label" for="form-flat">Квартира</label>
								<input class="input form-field__input" id="form-flat" type="text" data-validate="empty"
									data-label="квартира">
								<span class="form-field__error"></span>
							</div>
							<div class="form-field callback-form__item">
								<label class="form-field__label" for="form-phone">Телефон</label>
								<input class="input form-field__input" id="form-phone" type="text" data-validate="phone"
									data-label="телефон">
								<span class="form-field__error"></span>
							</div>
							<button class="btn callback-form__btn callback-form__btn--mt-32">Продолжить</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	
		
<?php echo $footer; ?>
