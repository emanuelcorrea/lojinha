<section class="home">
    <div class="carousel">
        <div class="options">
            <i id="previous" class="fas fa-chevron-left"></i>
        </div>
        <div id="itens" class="carousel-imagens">
            <ul>
                <li>
                    <div class="item">
                        <img src="<?php echo DIRIMG; ?>carousel/img-banner1.jpg" alt="Primeira imagem do Banner">
                    </div>
                </li>
            </ul>
        </div>
        <div class="options">
            <i id="next" class="fas fa-chevron-right"></i>
        </div>
    </div>
</section>

<!-- Seção de camisas -->
<section class="shirts section"">
    <div class=" container">
        <div class="section-title">
            <h2>Camisas</h2>
        </div>
        <div class="section-products">
            <div class="list-products">
                <ul class="owl-carousel">
                    <?php foreach ($this->getModel()->selectCamisas() as $produto) : $sub = $this->getModel()->selectNameByCat($produto->catSub)[0]['slug']; ?>
                        <a href="<?php echo DIRPAGE . "produto/slug/" . $produto->productSlug; ?>" style="text-decoration: none;">
                            <li>
                                <article class="product">
                                    <div class="product-image">
                                        <img src="<?php echo $produto->productImg; ?>" width="300">
                                    </div>
                                    <div class="loved">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="product-rate">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <header class="product-info">
                                        <div class="product-name">
                                            <h3><?php echo $produto->productName; ?></h3>
                                        </div>
                                        <div class="product-price">
                                            <?php if ($produto->productPriceBefore != 0) { ?>
                                                <span><?php echo $produto->productPriceBefore; ?></span>
                                            <?php } ?>
                                            <h4>R$ <?php echo number_format($produto->productPrice, 2, ',', '.') ?></h4>
                                        </div>
                                        <span class="product-parcel">ou 1x de R$ <?php echo $produto->productPrice; ?></span>
                                    </header>
                                </article>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Seção de calças -->
<section class="shirts section"">
    <div class=" container">
        <div class="section-title">
            <h2>Calças</h2>
        </div>
        <div class="section-products">
            <div class="list-products">
                <ul class="owl-carousel">
                    <?php foreach ($this->getModel()->selectCalcas() as $produto) : $sub = $this->getModel()->selectNameByCat($produto->catSub)[0]['slug']; ?>
                        <a href="<?php echo DIRPAGE . "produto/slug/" . $produto->productSlug; ?>" style="text-decoration: none;">
                            <li>
                                <article class="product">
                                    <div class="product-image">
                                        <img src="<?php echo $produto->productImg; ?>" width="300">
                                    </div>
                                    <div class="loved">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="product-rate">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <header class="product-info">
                                        <div class="product-name">
                                            <h3><?php echo $produto->productName; ?></h3>
                                        </div>
                                        <div class="product-price">
                                            <?php if ($produto->productPriceBefore != 0) { ?>
                                                <span><?php echo $produto->productPriceBefore; ?></span>
                                            <?php } ?>
                                            <h4>R$ <?php echo number_format($produto->productPrice, 2, ',', '.') ?></h4>
                                        </div>
                                        <span class="product-parcel">ou 1x de R$ <?php echo $produto->productPrice; ?></span>
                                    </header>
                                </article>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Seção de calças -->
<section class="shirts section"">
    <div class=" container">
        <div class="section-title">
            <h2>Calçados</h2>
        </div>
        <div class="section-products">
            <div class="list-products">
                <ul class="owl-carousel">
                    <?php foreach ($this->getModel()->selectCalcados() as $produto) : $sub = $this->getModel()->selectNameByCat($produto->catSub)[0]['slug']; ?>
                        <a href="<?php echo DIRPAGE . "produto/slug/" . $produto->productSlug; ?>" style="text-decoration: none;">
                            <li>
                                <article class="product">
                                    <div class="product-image">
                                        <img src="<?php echo $produto->productImg; ?>" width="300">
                                    </div>
                                    <div class="loved">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="product-rate">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <header class="product-info">
                                        <div class="product-name">
                                            <h3><?php echo $produto->productName; ?></h3>
                                        </div>
                                        <div class="product-price">
                                            <?php if ($produto->productPriceBefore != 0) { ?>
                                                <span><?php echo $produto->productPriceBefore; ?></span>
                                            <?php } ?>
                                            <h4>R$ <?php echo number_format($produto->productPrice, 2, ',', '.') ?></h4>
                                        </div>
                                        <span class="product-parcel">ou 1x de R$ <?php echo $produto->productPrice; ?></span>
                                    </header>
                                </article>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
