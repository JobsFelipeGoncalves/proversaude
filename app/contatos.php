
<!doctype html>
<html lang="pt-br">
<head>

  <title>Fale com a Integra Assessoria - O melhor em Gestão Contábil e controladoria empresarial</title>
  <meta charset="UTF-8">
  <meta name="viewport"              content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="description"           content="Com a Integra Assessoria fica mais fácil gerir a sua empresa."/>
  <meta name="keywords"              content="contabilidade, ferramentas de análises, Assessoria Contábil, Assessoria Fisco Tributária, Departamento pessoal, Assessoria a produtores rurais, Recuperação de crédito, Gestão por controladoria, Departamento de auditorias, dourados, index, MS, mato grosso do sul"/>
  <meta name="robots"                content="index, follow" />

  <meta property="og:locale"       content="pt_BR">
  <meta property="og:site_name"    content="Integra Assessoria">
  <meta property="og:url"          content="<?= BASE ?>" />
  <meta property="og:type"         content="website" />
  <meta property="og:title"        content="Sobre a Integra Assessoria Integra Assessoria - O melhor em Gestão Contábil e controladoria empresarial" />
  <meta property="og:description"  content="Com a Integra Assessoria fica mais fácil gerir a sua empresa." />
  <meta property="og:image"        content="<?= BASE_IMG ?>marcas/logo.png" />
  <meta name="author"              content="W1 Agência - w1agencia.com.br & Felipe Goncalves - l.felipe.m.goncalves@gmail.com"/>


  <link rel="canonical" href="<?= BASE ?>">

  <link rel="icon" href="<?= BASE_IMG ?>marcas/logo_icon.png">
  <link rel="stylesheet" href="<?= BASE_CSS ?>bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>estilo.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>estilo.responsivo.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>owl.carousel.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>fancybox.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>animate.min.css">




</head>
<body class = "f-branco">
  <?php require "components/header.php"; ?>

 <!--  <section id = fale-conosco>
    <div class="container-fluid pt-5 pb-5 ">
      <div class="row m-auto centro branco  pt-5 pb-5">
        <div class="col-11 m-auto col-md-8">

          <h5 class = "display-4 branco mb-4">Fale conosco</h5>
          <h5>Por favor, permita-nos saber se você tem alguma dúvida, questionamento ou gostaria de deixar um comentário! Ficaremos muito felizes em receber sua mensagem.</h5>


        </div>
      </div>
    </div>
  </section>
 -->

    <section>
    <div class="container p-3">
      <div class="row m-auto pt-5 pb-5">
        <div class="col-12  left  p-5">

            <div class="row">
              <div class="col-12 col-md-6">
                <h5 class = "cor-amarelo-escuro">Nossos telefones</h5>
                <p>
                  (67) 3423-0045<br>
                  (67) 9 9972-2566<br>

                </p>
              </div>

              <div class="col-12 col-md-6">
                <h5 class = "cor-amarelo-escuro">E-mail</h5>
                <p>
                  contato@contabilintegra.com.br
                </p>
              </div>

              
            </div>

            <div class="row">
              
              <div class="col-12 col-md-6">
                <h5 class = "cor-amarelo-escuro">Endereço</h5>
                <p>
                  R. Hilda Bergo Duarte, 1700 - Jardim Planalto, Dourados - MS, 79826-090
                </p>
              </div>
              <div class="col-12 col-md-6">
                <h5 class = "cor-amarelo-escuro">Horário</h5>
                <p>
                  Segunda a Sexta 07:30h - 17:00h
                </p>
              </div>
            </div>



        </div>
      </div>
    </div>
  </section>



 <section class = " f-cinza-1">
    <div class="container p-3">
      <div class="row pt-5">
        <div class="col-md pt-4">
          <h5 class = "display-4 cor-azul-escuro p-2">Fale com a gente</h5>
        </div>
      </div>

      <form method="post" id = "form-contato">
        <div class="row pb-5">
          <div class="col-12 col-md-6  left  p-4">

              
              <div class="row">
                <div class="col-12 col-md-12">
                  <div class="mb-3">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" name = "nome" placeholder="Nome completo">
                      <label for="floatingInput">Nome completo*</label>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-12">
                  <div class="mb-3">
                      <div class="form-floating mb-3">
                        <input type="email" name = "email" class="form-control" id="floatingInput" placeholder="email">
                        <label for="floatingInput">E-mail*</label>
                      </div>
                  </div>
                </div>

                <div class="col-12 col-md-12">
                  <div class="mb-3">
                      <div class="form-floating">
                        <input type="tel" class="form-control" name = "telefone" id="telefone" placeholder="telefone">
                        <label for="telefone">Sua telefone*</label>
                      </div>
                  </div>
                </div>
              </div>

             

          </div>

          <div class="col-12 col-md-6 p-4">
                   <div class="row">
                      <div class="col">
                        <div class="row">

                          <div class="col-12 col-md-12">
                            <div class="mb-3">

                                  <div class="form-floating">
                                    <select class="form-select" name = "assunto" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected>Assunto*</option>
                                      <option value="Orçamento">Orçamento</option>
                                      <option value="Dúvidas">Dúvidas</option>
                                      <option value="Ouvidoria">Ouvidoria</option>
                                    </select>
                                    <label for="floatingSelect">Selecione</label>
                                  </div>

                            </div>
                          </div>

                          <div class="col-12 col-md-12">
                            <div class="mb-3">
                             <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name = "msg" style="height: 130px"></textarea>
                                <label for="floatingTextarea2">Mensagem*</label>

                                <input type="hidden" name="img_url" value = "<?= BASE_IMG ?>">
                                <input type="hidden" name="base_url" value = "<?= BASE ?>">
                              </div>
                            </div>
                          </div>
                      </div>


              </div>
          </div>
        </div>

        <div class="col-12 col-md-12 pt-0 p-4">

            <div class="row">
              <div class="col-12">
                <div class="mb-3 d-grid gap-2 ">
                  <button type="submit" class="botao botao-azul btn-lg mb-3">Enviar</button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3 d-grid gap-2 ">
                  <div id = "repostas" class="repostas mt-3">  <!-- nulo --></div>
                </div>
              </div>
            </div>

        </div>
      </div>
    </form>
    </div>
  </section>


    <section>
    <div class="container-fluid f-cinza-1" style = "margin: 0px; padding: 0px;">
      <div class="row m-auto centro" style = "margin: 0px; padding: 0px;">
        <div class="col-11 col-md-12 m-auto" style = "margin: 0px; padding: 0px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7387.26238551633!2d-54.806686!3d-22.216118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9489a9c9fbeea109%3A0x5002af6e55524010!2sR.%20Hilda%20Bergo%20Duarte%2C%201700%20-%20Jardim%20Caramuru%2C%20Dourados%20-%20MS%2C%2079826-090!5e0!3m2!1spt-BR!2sbr!4v1647910874471!5m2!1spt-BR!2sbr" style="border:0;width:100%;height:450px;margin: 0px; padding: 0px;" allowfullscreen="" loading="lazy" ></iframe>
        </div>
      </div>
    </div>
  </section>


  <?php require "components/footer.php"; ?>
  <script src="<?= BASE_JS ?>jquery.min.js"></script>
  <script src="<?= BASE_JS ?>bootstrap.bunble.js"></script>
  <script src="<?= BASE_JS ?>popper.min.js"></script>
  <script src="<?= BASE_JS ?>bootstrap.min.js"></script>
  <script src="<?= BASE_JS ?>fancybox.min.js"></script>
  <script src="<?= BASE_JS ?>owl.carousel.min.js"></script>
  <script src="<?= BASE_JS ?>jquery.mask.min.js"></script>
  <script src="<?= BASE_JS ?>wow.min.js"></script>
  <script src="<?= BASE_JS ?>estilo.min.js"></script>

</body>
</html>
