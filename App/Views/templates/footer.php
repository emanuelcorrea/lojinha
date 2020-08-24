<footer class="footer-home">
    <section class="social">
        <div class="news-letter">
            <div class="container">
                <div class="logo">
                    <img src="<?php echo DIR_IMG; ?>home/10off.png" alt="">
                </div>
                <form action="get">
                    <input type="text" name="nome" id="nome" placeholder="Nome:">
                    <input type="text" name="nome" id="email" placeholder="Email:">
                    <input type="submit" value="CADASTRAR" name="submit">
                </form>
            </div>
        </div>
        <div class="social-medias">
            <div class="container">
                <div class="social-title">
                    <h4>SIGA NOSSAS REDES SOCIAIS: </h4>
                </div>
                <div class="social-icons">
                    <h5>@VOUDELOJINHA</h5>
                    <nav>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-spotify"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="links">
            <div class="container">
                <div class="links-nav">
                    <nav>
                        <ul>
                            <li>
                                <h6>Departamentos</h6>
                                <ul>
                                    <?php foreach($this->getModel()->getAllCategory() as $key => $value) :?>
                                    <li><a href="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h6>Institucional</h6>
                                <ul>
                                    <li><a href="#">Sobre a Lojinha</a></li>
                                    <li><a href="#">Nossas Lojas</a></li>
                                    <li><a href="#">Lojas Marisa Celular</a></li>
                                    <li><a href="#">Investidores</a></li>
                                    <li><a href="#">Termos de Segurança</a></li>
                                    <li><a href="#">Imprensa</a></li>
                                    <li><a href="#">Cartão Marisa</a></li>
                                    <li><a href="#">Mapa do Site</a></li>
                                    <li><a href="#">Sax Financeira</a></li>
                                    <li><a href="#">Certificados</a></li>
                                    <li><a href="#">Política de Privacidade</a></li>
                                    <li><a href="#">Sustentabilidade</a></li>
                                </ul>
                            </li>
                            <li>
                                <h6>Ajuda e Suporte</h6>
                                <ul>
                                    <li><a href="#">Formas de Pagamento</a></li>
                                    <li><a href="#">Trocas e Devoluções</a></li>
                                    <li><a href="#">Meus Pedidos</a></li>
                                    <li><a href="#">Como Comprar</a></li>
                                    <li><a href="#">Prazo de Entrega</a></li>
                                    <li><a href="#">2ª Via de Boleto</a></li>
                                    <li><a href="#">Regras e Regulamentos</a></li>
                                    <li><a href="#">Clique e Retire</a></li>
                                </ul>
                            </li>
                            <li>
                                <h6>Trabalhe Conosco</h6>
                                <ul>
                                    <li><a href="#">Trabalhe Conosco</a></li>
                                    <li><a href="#">Contratação de Modelos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="help">
                    <h6>Não encontrou o que estava procurando?</h6>
                    <div>
                        <img src="https://images2.marisa.com.br/_ui/responsive/theme-marisa/img/ico_ajuda.png" alt="">
                        <p>Podemos ajudar? Fale conosco.</p>
                    </div>
                    <div>
                        <img src="https://images2.marisa.com.br/_ui/responsive/theme-marisa/img/ico_localizacao_cinza.png" alt="">
                        <p>Encontre as lojas mais próximas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="business">
        <div class="container">
            <div class="pagment">
                <div class="selos">
                    <div>
                        <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h46/hf2/9762966667294/ico-seguranca.png" alt="">
                        <p>Selos de segurança</p>
                    </div>
                    <img style="margin-left: 20px;" src="https://images2.marisa.com.br/medias/sys_master/images/images/h01/h96/9914672742430/ebit-diamante.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h60/h18/10252886835230/clearsale.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/hc2/hbf/9762957426718/camerae-badge.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/hac/h14/9762959982622/verisign-badge.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h48/h8e/9762960900126/internetsegura-badge.png" alt="">
                </div>
                <div class="formas">
                    <div>
                        <img src="https://images2.marisa.com.br/medias/sys_master/images/images/hef/hd3/9762965454878/ico-cartaocredito-footer.png" alt="">
                        <p>Formas de Pagamento</p>
                    </div>
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/hcc/he4/11130261798942/novocartaomarisa-icon.jpg" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h01/h05/11130261733406/novocartaomarisaitau-icon.jpg" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h77/h00/9762946908190/amex-icon.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/hfa/h04/9762947563550/hipercard-icon.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h22/hcc/9762948612126/diners-icon.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h6b/hce/9762949955614/mastercard-icon.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h9b/h15/9762951233566/visa-icon.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h3d/hb8/9762951659550/elo-icon.png" alt="">
                    <img src="https://images2.marisa.com.br/medias/sys_master/images/images/h15/h31/9762952151070/boleto-icon.png" alt="">
                </div>
            </div>

            
        </div>
    </section>
</footer>