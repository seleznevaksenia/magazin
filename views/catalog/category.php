<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                           >                                                                                    
                                               <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <h2 class="title text-center">Last products</h2>
                <div class="features_items"><!--features_items-->

                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <a href="/product/<?php echo $product['id']; ?>">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo $product['image']; ?>" alt="" />
                                            <h2><?php echo $product['price']; ?>$</h2>
                                            <p>
                                                <a href="/product/<?php echo $product['id']; ?>">
                                                    ID:<?php echo $product['id']; ?>, <?php echo $product['name']; ?>
                                                </a>
                                            </p>
                                            <a href="#" data-id="<?php echo $product['id']; ?>"
                                               class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                            </div>
                            </a>
                        </div>
                    <?php endforeach; ?>                              

                    <!-- Постраничная навигация -->
                    <?php echo $pagination->get(); ?>


                </div><!--features_items-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>