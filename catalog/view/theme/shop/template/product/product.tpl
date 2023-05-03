<?php echo $header; ?>
<div class="container">

					<div class="breadcrumbs product__breadcrumbs">
						<div class="breadcrumbs__list">
						<?php foreach ($breadcrumbs as $breadcrumb) { ?>
							<div class="breadcrumbs__item">
								<a class="breadcrumbs__link" href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
							</div>
							<?php } ?>
						</div>
					</div>  
  
<div class="product">
			<div class="container">
				<div class="product__content">


					<div class="product__main">
						<div class="product__images">
							<div class="product__images-color product__images-color--active igallery">
								<div class="product__main-img-box">

									<?php if($thumb){?>
									<img class="product__main-img igallery__btn igallery__img"
										src="<?php  echo $thumb?>" alt="">
									<?php }?>
									
									<div class="tags product__tags">
										<div class="tags__list tags__list--jc-end">
											<?php if($special){?>
											<div class="tag tags__item">
												<img class="tag__icon tag__icon--sm-small"
													src="/catalog/view/theme/shop/assets/img/icons/sale.svg" alt="">
												<span class="tag__text">акция</span>
											</div>
											<?php }?>
										</div>
									</div>
								</div>
								<?php if($images){?>
								<div class="product__other-images">
								<?php foreach ($images as $image){?>
									<div class="product__other-img">
										<img class="igallery__btn igallery__img" src="<?php echo $image?>" alt="">
									</div>
								<?php }?>
								</div>
								<?php }?>
							</div>
							<?php /*
							<div class="product__images-color igallery">
								<div class="product__main-img-box">
									<img class="product__main-img igallery__btn igallery__img"
										src="/catalog/view/theme/shop/assets/img/product/3.jpg" alt="">
									<div class="tags product__tags">
										<div class="tags__list tags__list--jc-end">
											<div class="tag tag--sm-small tags__item">
												<img class="tag__icon tag__icon--sm-small"
													src="/catalog/view/theme/shop/assets/img/icons/sale.svg" alt="">
												<span class="tag__text">акция</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product__other-images">
									<div class="product__other-img">
										<img class="igallery__btn igallery__img" src="/catalog/view/theme/shop/assets/img/product/1.jpg" alt="">
									</div>
									<div class="product__other-img">
										<img class="igallery__btn igallery__img" src="/catalog/view/theme/shop/assets/img/product/2.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="product__images-color igallery">
								<div class="product__main-img-box">
									<img class="product__main-img igallery__btn igallery__img"
										src="/catalog/view/theme/shop/assets/img/product/2.jpg" alt="">
									<div class="tags product__tags">
										<div class="tags__list tags__list--jc-end">
											<div class="tag tag--sm-small tags__item">
												<img class="tag__icon tag__icon--sm-small"
													src="/catalog/view/theme/shop/assets/img/icons/sale.svg" alt="">
												<span class="tag__text">акция</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product__other-images">
									<div class="product__other-img">
										<img class="igallery__btn igallery__img" src="/catalog/view/theme/shop/assets/img/product/3.jpg" alt="">
									</div>
								</div>
							</div>
							*/?>
						</div>
						<form class="product__form" autocomplete="off">
						<div id="product">
							<h1 class="title4 product__title"><?php  echo $heading_title?></h1>
							<div class="product__meta">
								<div class="product__meta-list">
									<div class="product__recommend product__meta-item">рекомендуют <?php echo $recomend?>%</div>
									<?php  if($count_order>0){?>
									<div class="product__order-count product__meta-item">Товар заказывали <?php echo $count_order?></div>
									<?php }?>
								</div>
							</div>
							<?php /*
							<div class="text product__text">
								<p>Metrotile — это прочный, эстетически привлекательный кровельный материал бельгийского
									производителя. Основой профиля является стальной лист, антикоррозийные качества
									которого обеспечены алюцинковым покрытием.</p>
							</div>
							
							<div class="product__colors">
								<div class="product__label">Выберите цвет:</div>
								<div class="product__colors-list">
									<label class="checkbox-color product__colors-item">
										<input class="checkbox-color__input js-product-color" type="radio"
											name="product-color" checked>
										<span class="checkbox-color__switch">
											<img src="/catalog/view/theme/shop/assets/img/products/colors/1.jpg" alt="">
											<span class="checkbox-color__text">charcoal</span>
										</span>
									</label>
									<label class="checkbox-color product__colors-item">
										<input class="checkbox-color__input js-product-color" type="radio"
											name="product-color">
										<span class="checkbox-color__switch">
											<img src="/catalog/view/theme/shop/assets/img/products/colors/2.jpg" alt="">
											<span class="checkbox-color__text">coffee</span>
										</span>
									</label>
									<label class="checkbox-color product__colors-item">
										<input class="checkbox-color__input js-product-color" type="radio"
											name="product-color">
										<span class="checkbox-color__switch">
											<img src="/catalog/view/theme/shop/assets/img/products/colors/3.jpg" alt="">
											<span class="checkbox-color__text">coal black</span>
										</span>
									</label>
								</div>
							</div>
							*/?>
							<div class="product__delivery">
								<div class="product__delivery-info">
									<div class="text product__delivery-text">Бесплатная доставка по Казахстану</div>
									<div class="text text--gray product__delivery-text">Предварительная дата доставки:
										<?php echo $date_delivery;?></div>
								</div>
							</div>
							<div class="product__buy">
							<div class="product__label">Цена:</div>
							<?php /*
								<div class="product__label">Цена за:</div>
								<div class="product__count-checkboxes">
									<label class="checkbox-text product__count-checkbox">
										<input class="checkbox-text__input js-product-type" type="radio"
											name="product-type" data-price="10000" data-price-old="12390" checked>
										<span class="checkbox-text__switch">штуку</span>
									</label>
									<label class="checkbox-text product__count-checkbox">
										<input class="checkbox-text__input js-product-type" type="radio"
											name="product-type" data-price="22000" data-price-old="27590">
										<span class="checkbox-text__switch">поддон (360 штук)</span>
									</label>
								</div>
								*/?>
								<?php if($special){?>
								<div class="product__price">
									<span class="product__price-old">
										<span class="product__price-old-value"><?php echo $price?></span>
									</span>
									<span class="product__price-new">
										<span class="product__price-new-value"><?php echo $special?></span>
										
									</span>
								</div>
								<?php } else {?>
								<div class="product__price">
								<span class="product__price-new">
										<span class="product__price-new-value"><?php echo $price?></span>
										
									</span>
								</div>
								<?php }?>
								<div class="product__buy-footer">
									<div class="counter product__counter">
										<button type="button" class="counter__minus">-</button>
										<input class="counter__input" name="quantity" id="input-quantity"  type="number" value="1" >
										<button type="button" class="counter__plus">+</button>
									</div>
									<input type="hidden" name="product_id" value="<?php echo $product_id?>" />
									<a class="btn product__buy-btn" id="button-cart">Добавить в корзину</a>
								</div>
							</div>
							</div>
						</form>
					</div>

					<div class="product__tabs tabs">
						<div class="tabs__btns">
							<button class="tabs__btn tabs__btn--active">Описание</button>
							<button class="tabs__btn">Характеристики</button>
							<button class="tabs__btn">Документация</button>
						</div>
						<div class="tabs__list">
							<div class="tabs__item tabs__item--active">
								<div class="text-content product__tab-content">
									<?php  echo $description?>
								</div>
							</div>
							<div class="tabs__item">
								<div class="text-content product__tab-content">
			<?php if($attribute_groups){?>
              <table class="table table-bordered">
                <?php foreach ($attribute_groups as $attribute_group) { ?>
                <thead>
                  <tr>
                    <td colspan="2"><strong><?php echo $attribute_group['name']; ?></strong></td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                  <tr>
                    <td><?php echo $attribute['name']; ?></td>
                    <td><?php echo $attribute['text']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <?php } ?>

              </table>
			<?php }?>			
								</div>
							</div>
							<div class="tabs__item">
								<div class="text-content product__tab-content">
									
								</div>
							</div>
						</div>
					</div>
<?php if($products){?>
					<div class="products product__similar">
						<h3 class="title4 products__subtitle">Вместе с этим покупают</h3>
						<div class="products__list">
							<?php foreach ($products as $product){?>
							<?php include $_SERVER['DOCUMENT_ROOT'].'/catalog/view/theme/shop/template/product/product_card.php';?>
							<?php }?>
						</div>
					</div>
<?php }?>
<?php if($similar){?>
					<div class="products product__similar">
						<h3 class="title4 products__subtitle">Похожие товары</h3>
						<div class="products__list">
						<?php foreach ($similar as $product){?>
							<?php include $_SERVER['DOCUMENT_ROOT'].'/catalog/view/theme/shop/template/product/product_card.php';?>
							<?php }?>
						</div>
					</div>
<?php }?>					
				</div>
			</div>
		</div>  
 <script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json['success']) {
				$('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

//				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
				$('#cart-total').html(json['total']);

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				$('#cart > ul').load('index.php?route=common/cart/info ul li');
			}
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
    grecaptcha.reset();
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});

$(document).ready(function() {
	var hash = window.location.hash;
	if (hash) {
		var hashpart = hash.split('#');
		var  vals = hashpart[1].split('-');
		for (i=0; i<vals.length; i++) {
			$('#product').find('select option[value="'+vals[i]+'"]').attr('selected', true).trigger('select');
			$('#product').find('input[type="radio"][value="'+vals[i]+'"]').attr('checked', true).trigger('click');
			$('#product').find('input[type="checkbox"][value="'+vals[i]+'"]').attr('checked', true).trigger('click');
		}
	}
})
//--></script> 
<?php echo $footer; ?>
