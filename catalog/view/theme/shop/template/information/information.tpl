<?php echo $header; ?>
<?php if($information_id==8){?>
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
<?php } else {?>
<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1>
      <?php echo $description; ?>
	  
	  <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?}?>
<?php echo $footer; ?>