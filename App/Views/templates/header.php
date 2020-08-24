<div class="information">
    <div class="container">
        <div class="rules">
            <a href="#">Regras do site</a>
        </div>
        <div class="atendimento">
            <ul>
                <li><a href="#">Atendimento</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
    </div>
</div>
<header class="menu">
    <div class="container">
        <div class="logo"><a href="http://localhost/lojinha/" style="text-decoration: none"><h1>Lojinha</h1></a></div>
        <div class="input-search">
            <input type="text" name="search" id="search" placeholder="Busque aqui...">
            <i class="fas fa-search"></i>
        </div>
        <div class="menu-nav">
            <a href="#">Faça login aqui<i class="fas fa-long-arrow-alt-left"></i></a>
            <i class="fas fa-shopping-cart"><div class="qnt">0</div></i>
        </div>
    </div>
    <div class="submenu">
        <div class="container">
            <nav class="nav-submenu">
                <ul>
                    <li class="promotion">
                        <a href="#"><i class="fas fa-gift"></i></a>
                        <div class="submenu-content">
                            <div class="content">
                                <div class="a">
                                    <a href="#" style="color: #444444;">Área de promoções!</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Masculino</a>
                        <div class="submenu-content">
                            <div class="content">
                                <div class="roupas">
                                    <a href="#">Roupas</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <?php foreach ($this->getModel()->categoryBy(7) as $category): ?>
                                                <li><?php echo $category->name; ?></li>
                                            <?php endforeach; ?>
                                            <li class="promo"><span>+ Promoções</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="calcados">
                                    <a href="#">Calçados</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <?php foreach ($this->getModel()->categoryBy(8) as $category): ?>
                                                <li><?php echo $category->name; ?></li>
                                            <?php endforeach; ?>
                                            <li class="promo"><span>+ Promoções</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="acessorios">
                                    <a href="#">Acessórios</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <?php foreach ($this->getModel()->categoryBy(9) as $category): ?>
                                                <li><?php echo $category->name; ?></li>
                                            <?php endforeach; ?>
                                            <li class="promo"><span>+ Promoções</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="promocao">
                                    <a href="#">Promoção</a>
                                    <div class="article-content">
                                        <a href="#">
                                            <img src="<?php echo DIR_IMG;?>/promotion/promotion-male.jpg" alt="" width="470px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Feminino</a>
                        <div class="submenu-content">
                            <div class="content">
                                <div class="roupas">
                                    <a href="#">Roupas</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <?php foreach ($this->getModel()->categoryBy(10) as $category): ?>
                                                <li><?php echo $category->name; ?></li>
                                            <?php endforeach; ?>
                                            <li class="promo"><span>+ Promoções</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="calcados">
                                    <a href="#">Calçados</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <?php foreach ($this->getModel()->categoryBy(11) as $category): ?>
                                                <li><?php echo $category->name; ?></li>
                                            <?php endforeach; ?>
                                            <li class="promo"><span>+ Promoções</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="acessorios">
                                    <a href="#">Acessórios</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <?php foreach ($this->getModel()->categoryBy(12) as $category): ?>
                                                <li><?php echo $category->name; ?></li>
                                            <?php endforeach; ?>
                                            <li class="promo"><span>+ Promoções</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="promocao">
                                    <a href="#">Promoção</a>
                                    <div class="article-content">
                                        <a href="#">
                                            <img src="<?php echo DIR_IMG;?>/promotion/promotion-female.jpg" alt="" width="470px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="unissex">
                        <a href="#">Unissex</a>
                        <div class="submenu-content">
                            <div class="content">
                                <div class="roupas">
                                    <a href="#">Roupas</a>
                                    <div class="article-content">
                                        <div class="roupas">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/camisa.jpeg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Camisetas</a></h2>
                                                    <p>Polo, Camiseta Regata, Camisa Striped, Camisa Viscose...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calcas">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/calca.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Calças</a></h2>
                                                    <p>Algodão, Legging, Farbane, Saruel...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calcas">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/bermuda.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Bermudas</a></h2>
                                                    <p>Tilly Baby, Scrubs Dry Fit, Calça de Relanca...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="calcados">
                                    <a href="#">Calçados</a>
                                    <div class="article-content">
                                        <div class="sapato">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/calcado.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Sapato</a></h2>
                                                    <p>Mr. Cat, Sapato Casual, Sapatênis, Esportivo...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tenis">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/tenis.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Tênis</a></h2>
                                                    <p>Algodão, Legging, Farbane, Saruel...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chinelo">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/chinelo.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Chinelo</a></h2>
                                                    <p>Nike, Havaianas, Rider, Fila, Puma, Gap...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acessorios">
                                    <a href="#">Acessórios</a>
                                    <div class="article-content">
                                        <div class="sapato">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/relogio.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Relógio</a></h2>
                                                    <p>Mr. Cat, Sapato Casual, Sapatênis, Esportivo...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tenis">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/oculos.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Óculos</a></h2>
                                                    <p>Algodão, Legging, Farbane, Saruel...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chinelo">
                                            <div class="category-box">
                                                <div class="imagem">
                                                    <img src="<?php echo DIR_IMG;?>/products/colar.jpg" alt="" srcset="">
                                                </div>
                                                <div class="product">
                                                    <h2><a href="#">Pulseiras & Coláres</a></h2>
                                                    <p>Nike, Havaianas, Rider, Fila, Puma, Gap...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sports">
                        <a href="#">Esportes</a>
                        <div class="submenu-content">
                            <div class="content">
                                <div class="img-banner">
                                    <img src="<?php echo DIR_IMG;?>sports/fitness.jpg" alt="">
                                </div>
                                <div class="img-banner">
                                    <img src="<?php echo DIR_IMG;?>sports/ciclismo.jpg" alt="">
                                </div>
                                <div class="img-banner">
                                    <img src="<?php echo DIR_IMG;?>sports/corrida.jpg" alt="">
                                </div>
                            </div> 
                        </div>      
                    </li>
                    <li>
                        <a href="#">Marcas</a>
                        <div class="submenu-content">
                            <div class="content">
                                <div class="roupas">
                                    <a href="#">Roupas</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <li>Camisetas</li>
                                            <li>Moletom</li>
                                            <li>Jaquetas corta-ventos</li>
                                            <li>Bermudas</li>
                                            <li>Calças</li>
                                            <li>Camisas</li>
                                            <li>Cuecas</li>
                                            <li>Polo</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="calcados">
                                    <a href="#">Calçados</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <li>Tênis</li>
                                            <li>Botas</li>
                                            <li>Tênis casual</li>
                                            <li>Tênis de skate</li>
                                            <li>Tênis para corrida</li>
                                            <li>Sapatênis</li>
                                            <li>Alpargatas</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="acessorios">
                                    <a href="#">Acessórios</a>
                                    <div class="article-content">
                                        <ul class="article-list">
                                            <li>Camisetas</li>
                                            <li>Moletom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>