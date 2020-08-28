<main class="home">
    <section class="product-page">
        <div class="product-header">
            <div class="container">
                <div class="product-images">
                    <div class="product-image-principal">
                        <img id="img-principal" src="<?php echo $this->model->getFirstImage(); ?>" alt="" width="600">
                    </div>
                    <div class="product-other-images">
                        <div class="owl-carousel owl-theme" style="width: 600px">
                            <div class="item" class="ativado">
                                <img id="1" src="https://static.zattini.com.br/produtos/camisa-social-manga-longa-watkins&krown-masculina/14/IFZ-0006-014/IFZ-0006-014_zoom1.jpg" alt="" width="70">
                            </div>
                            <div class="item">
                                <img id="2" src="https://static.zattini.com.br/produtos/camisa-social-manga-longa-watkins&krown-masculina/14/IFZ-0006-014/IFZ-0006-014_zoom2.jpg" alt="" width="70">
                            </div>
                            <div class="item">
                                <img id="3" src="https://static.zattini.com.br/produtos/camisa-social-manga-longa-watkins&krown-masculina/14/IFZ-0006-014/IFZ-0006-014_zoom3.jpg" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details">
                    <div class="product-name">
                        <h1><?php echo $this->model->getName(); ?> - <span>Ref: <?php echo $this->model->getSku(); ?> </span></h1>
                    </div>
                    <div class="product-rate">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>(<a href="#"><b>0</b> opiniões</a>)</p>
                    </div>
                    <div class="product-price">
                        <h2><span>R$</span><?php echo $this->model->getPrice(); ?></h2>
                        <p class="or">R$ <?php echo $this->model->getPriceBefore(); ?></p>
                    </div>
                    <div class="product-pre-description">
                        <p><?php echo $this->model->getDescription(); ?></p>
                    </div>
                    <div class="line">
                        <div class="product-colors product-bg">
                            <h3>CORES</h3>
                            <div>
                                <div class="product-color-selected ball white" name="Branco"></div>
                                <div class="product-extra-colors">
                                    <ul>
                                        <li class="ball pink" name="Rosa"></li>
                                        <li class="ball blue" name="Azul"></li>
                                        <li class="ball white" style="background: none;"></li>
                                        <i class="fas fa-plus"></i>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="product-have-colors">
                                <ul>
                                    <li class="white"></li>
                                    <li class="black"></li>
                                    <li class="blue"></li>
                                    <li class="pink"></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="product-sizes product-bg">
                            <h3>TAMANHOS</h3>
                            <div>
                                <select>
                                    <option data-display="P">Nenhum</option>
                                    <option value="p">P</option>
                                    <option value="m">M</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="g">G</option>
                                    <option value="gg">GG</option>
                                    <option value="xgg">XGG</option>
                                </select>
                            </div>
                            <!-- <div class="product-have-colors">
                                <ul>
                                    <li class="white"></li>
                                    <li class="black"></li>
                                    <li class="blue"></li>
                                    <li class="pink"></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="product-quantity product-bg">
                            <h3>QUANTIDADES</h3>
                            <div>
                                <input type="number" name="quantity" id="quantity" min="0" max="20" value="0">
                            </div>
                            <!-- <div class="product-have-colors">
                                <ul>
                                    <li class="white"></li>
                                    <li class="black"></li>
                                    <li class="blue"></li>
                                    <li class="pink"></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="product-sizes">
                        <h3>TAMANHOS</h3>
                        <ul>
                            <li>P</li>
                            <li>M</li>
                            <li>G</li>
                            <li>GG</li>
                        </ul>
                    </div>
                    <div class="product-quantity">
                        <h3>QUANTIDADE</h3>
                        <ul>
                            <li>P</li>
                            <li>M</li>
                            <li>G</li>
                            <li>GG</li>
                        </ul>
                    </div> -->
                    <div class="product-buy">
                        <button class="btn-buy"><i class="fas fa-shopping-cart"></i> Comprar</button>
                        <div class="product-favorite">
                            <i class="fab fa-gratipay"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-description">
                
        </div>
    </section>

    <script>
        var img1 = document.getElementById('1');
        var img2 = document.getElementById('2');
        var img3 = document.getElementById('3');

        console.log(img3);
        var img = document.getElementById('img-principal');

        img1.onclick = function() {
            img.src = img1.src;
        }

        img2.onclick = function() {
            img.src = img2.src;
        } 

        img3.onclick = function() {
            img.src = img3.src;
        } 

        function changeImage() {
            document.getElementById("img-principal").src = this.src;
        }
    </script>
</main>