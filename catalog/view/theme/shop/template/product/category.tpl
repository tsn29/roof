<?php echo $header; ?>
<div class="catalog">
			<div class="container">
				<div class="catalog__content">
					<div class="breadcrumbs catalog__breadcrumbs">
						<div class="breadcrumbs__list">
							<div class="breadcrumbs__item">
								<a class="breadcrumbs__link" href="/">Главная</a>
							</div>
							<div class="breadcrumbs__item">
								<span class="breadcrumbs__current">Каталог</span>
							</div>
						</div>
					</div>
					<h1 class="title4 catalog__title"><?php echo $heading_title; ?></h1>
					<div class="btn catalog__open-sidebar js-open-catalog-sidebar">
						<img src="assets/img/icons/menu-white.svg" alt="">
						Каталог
					</div>
					<div class="catalog__main">
<?php echo $column_left; ?>
<div class="products catalog__products">
	<div class="products__list">
	<?php foreach ($products as $product){?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/catalog/view/theme/shop/template/product/product_card.php';?>
	<?php }?>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php echo $footer; ?>
