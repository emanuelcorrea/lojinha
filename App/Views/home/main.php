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
                <li>
                    <div class="item">
                        <img src="<?php echo DIRIMG; ?>carousel/img-banner2.jpg" alt="Primeira imagem do Banner">
                    </div>
                </li>
                <li>
                    <div class="item">
                        <img src="<?php echo DIRIMG; ?>carousel/img-banner3.jpg" alt="Primeira imagem do Banner">
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
                <?php foreach ($this->getModel()->selectObject() as $produto) : ?>
                    <a href="<?php echo DIRPAGE . $produto->slug; ?>" style="text-decoration: none;">
                        <li>
                            <article class="product">
                                <div class="product-image">
                                    <img src="<?php echo $produto->url_img; ?>" width="300">
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
                                        <h3><?php echo $produto->name; ?></h3>
                                    </div>
                                    <div class="product-price">
                                        <?php if ($produto->price_before != 0) { ?>
                                            <span><?php echo $produto->price_before; ?></span>
                                        <?php } ?>
                                        <h4>R$ <?php echo number_format($produto->price, 2, ',', '.') ?></h4>
                                    </div>
                                    <span class="product-parcel">ou 1x de R$ <?php echo $produto->price; ?></span>
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

<!--! Seção de camisas -->
<section class="shirts section"">
    <div class=" container">
    <div class="section-title">
        <h2>Camisas</h2>
    </div>
    <div class="section-products">
        <div class="list-products">
            <ul class="owl-carousel">
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/camisa-social-manga-longa-watkins&krown-masculina/14/IFZ-0006-014/IFZ-0006-014_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Camisa Social Watkins&Krown Masculina</h3>
                            </div>
                            <div class="product-price">
                                <span>R$ 99,99</span>
                                <h4>R$ 55,99</h4>
                            </div>
                            <span class="product-parcel">ou 1x de R$ 55,99</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/camisa-manga-longa-c-&-v-collection-barra-floral-feminina/14/MAU-0027-014/MAU-0027-014_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Camisa C & V Collection Barra Floral Feminina</h3>
                            </div>
                            <div class="product-price">
                                <span>R$ 59,99</span>
                                <h4>R$ 47,99</h4>
                            </div>
                            <span class="product-parcel">ou 1x de R$ 47,99</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/camisa-adooro!-manga-34-folhagens-feminina/14/ILV-0048-014/ILV-0048-014_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Camisa Adooro! Manga 3/4 Folhagens Feminina - Branco</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 59,99</h4>
                            </div>
                            <span class="product-parcel">ou 1x de R$ 59,99</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/camisa-regata-adooro!-estampada-coracoes-bolso-feminina/12/ILV-0102-012/ILV-0102-012_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Camisa Regata Adooro! Estampada Corações Bolso Feminina - Marinho</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 59,99</h4>
                            </div>
                            <span class="product-parcel">ou 1x de R$ 59,99</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>


<!-- Seção de calças -->
<section class="legs section"">
    <div class=" container">
    <div class="section-title">
        <h2>Calças</h2>
    </div>
    <div class="section-products">
        <div class="list-products">
            <ul class="owl-carousel">
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-flare-coffee-feminina-/14/ESL-0521-014/ESL-0521-014_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Flare Coffee Feminina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 99,99</h4>
                            </div>
                            <span class="product-parcel">ou 2x de R$ 50,00</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-jeans-flare-coffee-lavagem-escura-cintura-media-feminina/25/ESL-0082-325/ESL-0082-325_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Jeans Flare Coffee Lavagem Escura</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 99,99</h4>
                            </div>
                            <span class="product-parcel">ou 1x de R$ 50,00</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-jeans-skinny-opera-rock-estonada-masculina/25/E76-0192-325/E76-0192-325_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Jeans Skinny Opera Rock Estonada Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 309,99</h4>
                            </div>
                            <span class="product-parcel">ou 7x de R$ 44,28</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
                <li>
                    <article class="product">
                        <div class="product-image">
                            <img src="https://static.zattini.com.br/produtos/calca-moletom-adidas-tp-fleece-masculina/06/COL-7486-006/COL-7486-006_detalhe1.jpg?ims=326x" width="300">
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
                                <h3>Calça Moletom Adidas TP Fleece Masculina</h3>
                            </div>
                            <div class="product-price">
                                <h4>R$ 249,99</h4>
                            </div>
                            <span class="product-parcel">ou 6x de R$ 41,67</span>
                        </header>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>