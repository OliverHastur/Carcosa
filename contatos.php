<?php require_once ('header.php')?>


    <!--INÍCIO DA PÁGINA DE CONTATOS-->
    <div class="contatos">

        <div class="container">

            <div class="linha">

                <div class="col-2">
                    <img src="/coqueteria-v1/assets/img/banner-1.png" alt="" width="100%">
                </div>

                <div class="col-2">
                    <div class="formulario-contato">
                        <div class="btn-form">  
                        <span onclick="Cadastro()">Entre em contato</span>
                        <hr id="Indicador-contato">
                        </div>

                        <form action="" method="post" id="ContatoSite">
                        <input type="text" name="nome" id=""placeholder="Nome completo">
                        <input type="tel" name="telefone" id=""placeholder="Telefone">
                        <input type="email" name="email" id=""placeholder="Email de cadastro">
                        <button type="submit" name="sendCont" class="btn">Entre em contato</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>


    </div>
  <!--FIM DA PÁGINA DE CONTATOS-->


<?php require_once ('footer-contato.php')?>