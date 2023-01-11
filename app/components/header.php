<header class = "sticky-top">
  <nav class=" navbar navbar-expand-lg">
    <div class="container-fluid">

      

      <!-- marca -->
      <a class="navbar-brand" href="<?= BASE ?>">
        <img src="<?= BASE_IMG ?>marcas/sistema_prover_saude.png" 
             title = "Sistema Prover Saúde"
             alt = "Sistema Prover Saúde">
      </a>

      <!-- menu responsivo -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="material-symbols-rounded">menu</span>
          <span class = "texto-menu">Menu</span>
      </button>

      <!-- menu -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center f-16">

          <li class="nav-item dropdown">
            <a class="nav-link " href="<?= BASE ?>vantagens-e-beneficios">
                Vantagens e benefícios
            </a>
          </li>

          <!--li class="nav-item dropdown">
            <-- <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
              Porque o Prover Saúde
            </a> -->
            <!-- <a class="nav-link" data-bs-toggle="dropdown" href="<?= BASE ?>vantagens-e-beneficios" role="button" aria-expanded="false">
              Vantagens e benefícios
            </a> --><!-- 
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios#consultas"> 
                  <b> Consultas</b><br>
                  <span class = "fonte-regular fonte-14">Todas as especialidades médicas</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios#drProverTelemedicina"> 
                  <b> Dr. Prover Telemedicina</b><br>
                  <span class = "fonte-regular fonte-14">Consultas de urgência 24 h</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios#exames"> 
                  <b> Exames</b><br>
                  <span class = "fonte-regular fonte-14">Exames com até 70% de cobertura</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios#centralDeAtendimento"> 
                  <b> Central de Atendimento</b><br>
                  <span class = "fonte-regular fonte-14">Agende consultas e exames sem sair de casa</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios#beneficiosAssistenciais"> 
                  <b> Benefícios Assistenciais</b><br>
                  <span class = "fonte-regular fonte-14">Seguro e Assistência funeral familiar</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios#clubeDeVantagens"> 
                  <b> Clube de Vantagens</b><br>
                  <span class = "fonte-regular fonte-14">Tenha descontos exclusivos em farmácias</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>vantagens-e-beneficios"> 
                  <b>Ver tudo &rarr;</b>
                </a>
              </li>
            </ul> --
          </li-->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
              Para família
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?= BASE ?>planos/quality"> 
                  <b> Modalidade Quality</b> <span class="badge rounded-pill bg-primary">Ideal</span><br>
                  <span class = "fonte-regular fonte-14">Consultas médicas por <b>R$ 60,00</b></span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>planos/classico"> 
                  <b> Modalidade Clássico</b><br>
                  <span class = "fonte-regular fonte-14">Adicione agregados em seu plano</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>planos/dr-prover-telemedicina"> 
                  <b> Dr. Prover Telemedicina</b><br>
                  <span class = "fonte-regular fonte-14">Consulte de onde estiver</span>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
              Para empresas
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?= BASE ?>planos/corporate-master-plus"> 
                  <b>Corporate Master Plus</b> <span class="badge rounded-pill bg-warning">Ideal</span><br>
                  <span class = "fonte-regular fonte-14">Consultas médicas e telemedicina por <b>R$ 35,00</b></span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>planos/pj/quality-corporate"> 
                  <b> Mod. Quality Corporate</b><br>
                  <span class = "fonte-regular fonte-14">Consultas médicas por <b>R$ 60,00</b></span>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
              Rede
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?= BASE ?>rede/medicos-e-clinicas"> 
                  <b> Rede de médicos credenciados</b><br>
                  <span class = "fonte-regular fonte-14">Médicos e clínicas próximo de você</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>seja-um-credenciado"> 
                  <b> Seja um credenciado</b><br>
                  <span class = "fonte-regular fonte-14">Faça parte do nosso time de credenciados</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link " href="<?= BASE ?>duvidas">
               Dúvidas
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
               Sobre nós
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?= BASE ?>sobre/quem-somos"> 
                  <b> Quem somos</b><br>
                  <span class = "fonte-regular fonte-14">Sobre o Sistema Prover Saúde</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>sobre/unidades-prover-saude"> 
                  <b>Unidades Prover Saúde</b><br>
                  <span class = "fonte-regular fonte-14">Conheça nossas unidades</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>sobre/fale-conosco"> 
                  <b> Fale conosco</b><br>
                  <span class = "fonte-regular fonte-14">Precisa falar com a gente?</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
               Acesse
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?= BASE ?>rede/médicos"> 
                  <b> Área do Beneficiário</b><br>
                  <span class = "fonte-regular fonte-14">Acessar área</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>seja-um-credenciado"> 
                  <b> Área do Médico</b><br>
                  <span class = "fonte-regular fonte-14">Acessar área</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= BASE ?>seja-um-credenciado"> 
                  <b> Área do colaborador PS</b><br>
                  <span class = "fonte-regular fonte-14">Acessar área</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- botao -->
        <div class="d-flex">
          <a href="<?=  BASE ?>simular" class = "botao botao-a">Simular agora</a>
        </div>
        
      </div>
    </div>
  </nav> 
</header>
