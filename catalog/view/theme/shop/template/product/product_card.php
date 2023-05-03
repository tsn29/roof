<div class="product-card products__item">
									<div class="product-card__img-box">
										<a href="<?php echo $product['href']?>"><img class="product-card__img" src="<?php echo $product['thumb']?>" alt="<?php echo $product['name']?>"></a>
									</div>
									<div class="product-card__info">
										<h3 class="title5 product-card__name">
											<a href="<?php echo $product['href']?>"><?php echo $product['name']?></a>
										</h3>
										<div class="text text--gray product-card__status">в наличии</div>
										<div class="product-card__price">
											<span class="product-card__price-new">
												<span class="product-card__price-new-value"><?php echo $product['price']?></span>
		</span>
		</div>
		<a class="btn btn--border product-card__btn" href="#">Заказать</a>
	</div>
</div>