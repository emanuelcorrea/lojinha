<section class="home">
    <div class="carousel">
        <div class="options">
            <i id="previous" class="fas fa-chevron-left"></i>
        </div>
        <div id="itens" class="carousel-imagens">
            <ul>
                <li>
                    <div class="item">
                        <img src="<?php echo DIR_IMG; ?>carousel/img-banner1.jpg" alt="Primeira imagem do Banner">
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
                <?php foreach ($this->catalog->catalogListProducts([10, 30]) as $produto): $this->product->loadBy('sku', $produto->prodSku); ?>
                        <a href="<?php echo DIR_PATH . $this->product->getSlug(); ?>" style="text-decoration: none;">
                            <li>
                                <article class="product">
                                    <div class="product-image">
                                        <img src="<?php echo $this->product->getImageByPosition(1); ?>" width="300">
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
                                            <h3><?php echo $this->product->getName(); ?></h3>
                                        </div>
                                        <div class="product-price">
                                            <?php if ($this->product->getPriceBefore() != 0) { ?>
                                                <span><?php echo number_format($this->product->getPriceBefore(), 2, ',', '.') ?></span>
                                            <?php } ?>
                                            <h4>R$ <?php echo number_format($this->product->getPrice(), 2, ',', '.') ?></h4>
                                        </div>
                                        <span class="product-parcel">ou 1x de R$ <?php echo number_format($this->product->getPrice(), 2, ',', '.') ?></span>
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
                    <?php foreach ($this->catalog->catalogListProducts([28, 29, 13, 14, 16]) as $produto): $this->product->loadBy('sku', $produto->prodSku); ?>
                        <a href="<?php echo DIR_PATH . $this->product->getSlug(); ?>" style="text-decoration: none;">
                            <li>
                                <article class="product">
                                    <div class="product-image">
                                        <img src="<?php echo $this->product->getImageByPosition(1); ?>" width="300">
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
                                            <h3><?php echo $this->product->getName(); ?></h3>
                                        </div>
                                        <div class="product-price">
                                            <?php if ($this->product->getPriceBefore() != 0) { ?>
                                                <span><?php echo number_format($this->product->getPriceBefore(), 2, ',', '.') ?></span>
                                            <?php } ?>
                                            <h4>R$ <?php echo number_format($this->product->getPrice(), 2, ',', '.') ?></h4>
                                        </div>
                                        <span class="product-parcel">ou 1x de R$ <?php echo number_format($this->product->getPrice(), 2, ',', '.') ?></span>
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
                <?php foreach ($this->catalog->catalogListProducts([5, 44, 45, 53]) as $key): $this->product->loadBy('sku', $produto->prodSku); ?>
                        <a href="<?php echo DIR_PATH . $this->product->getSlug(); ?>" style="text-decoration: none;">
                            <li>
                                <article class="product">
                                    <div class="product-image">
                                        <img src="<?php echo $this->product->getImageByPosition(1); ?>" width="300">
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
                                            <h3><?php echo $this->product->getName(); ?></h3>
                                        </div>
                                        <div class="product-price">
                                            <?php if ($this->product->getPriceBefore() != 0) { ?>
                                                <span><?php echo number_format($this->product->getPriceBefore(), 2, ',', '.') ?></span>
                                            <?php } ?>
                                            <h4>R$ <?php echo number_format($this->product->getPrice(), 2, ',', '.') ?></h4>
                                        </div>
                                        <span class="product-parcel">ou 1x de R$ <?php echo number_format($this->product->getPrice(), 2, ',', '.') ?></span>
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
