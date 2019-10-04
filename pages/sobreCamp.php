<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../index.php"></a>
        <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="../images/logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
          
        </button>
        <!-- Criar nova conta -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
              <span class="btn">Cadastre-se como:</span>
            </a>
            
            <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="../pages/cadastroTime.php">
                <i class="icon-user text-primary"></i>
                Cadastrar time 
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../pages/cadastro.php">
                <i class="icon-user-following text-warning"></i>
                Cadastrar-se como jogador solo
              </a>
              
              
            </div>
          </li>
        </ul>
      <!-- FIM CRIAR CONTA -->

        <!-- MENU DE LOGIN -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
              <span class="btn">LOGIN</span>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="../pages/loginTime.php">
                <i class="icon-user text-primary"></i>
                Entrar como TIME 
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../pages/login.php">
                <i class="icon-user-following text-warning"></i>
                Entrar como JOGADOR SOLO
              </a>
              

              
          </li>
        </ul>
        <!-- fim menu login -->
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- FIM MENU NOTIFICAÇÕES -->



    <!-- MUDAR TEMA DO SITE -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper ps ps--theme_default" id="todo-section" role="tabpanel" aria-labelledby="todo-section" data-ps-id="733d2b78-6c92-fa12-fd56-91bbea23e8b0">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                      <i class="input-helper"></i></label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                      <i class="input-helper"></i></label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                      <i class="input-helper"></i></label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked="">
                        Schedule meeting for next week
                      <i class="input-helper"></i></label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked="">
                        Project review
                      <i class="input-helper"></i></label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                </ul>
              </div>
              <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
              </div>
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
              </div>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
              <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
              </div>
              <ul class="chat-list">
                <li class="list active">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <div class="wrapper d-flex">
                      <p>Catherine</p>
                    </div>
                    <p>Away</p>
                  </div>
                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                  <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">47 min</small>
                </li>
              </ul>
            </div>
            <!-- chat tab ends -->
          </div>
        </div>
        <!-- partial -->
        <!-- FIM MUDAR DE TEMA -->
         


        <!-- MENUUUUU -->

        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                   <a href="../pages/index.php"> <img src="../imagens/csc.png" alt="image">
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                  <p class="name">
                  CS COMP
                  </p>
                  <p class="designation">
                    cadastre-se nos campeonatos
                  </p>
                </div>
              </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../pages/index.php">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Pagina inicial</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../pages/sobreCamp.php">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Sobre o campeonato</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../pages/sobre.php">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Como funciona ?</span>
              </a>

            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" href="../pages/contato.php">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Fale conosco</span>
              </a>
              
            
            </li>
          </ul>
        </nav>

        <div class="content-wrapper">
          <h1>Regras do Campeonato CS COMP</h1>

        <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Regras</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">                   
                    O  torneio do CS COMP  terá 3 fases.

                    A primeira fase, GERAL, será realizada nos dias 27 e 28 de fevereiro, e não contará com transmissão.<br>

                    A segunda fase, GRUPOS, será realizada nos dias 11 e 12 de março, com início às 14:00hrs. Serão disputadas partidas em melhores de 1.<br>

                    A terceira fase, PLAYOFFS, será realizada no dia  13 de março, contando com as partidas das semifinais, disputa do 3º e 4º lugares e grande final, também a partir das 14:00hrs, horário de Brasília.<br>

                    As fases de grupos e playoffs contarão com transmissão oficial no canal do CS COMP na TWITCH.TV e narração contratada junto à GN.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Especificações</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">                   
                      

                        Modo de Jogo: Competitivo 5v5, com tempos de 1min55s e 40s para rodada e bomba, respectivamente;<br>

                        Pontuação: Vitória - 3 pontos; Empate - 1 ponto; Derrota - 0 pontos;<br>

                        Mapas: Grupo da Campanha Ativa (de_dust2, de_inferno, de_cache, de_train, de_mirage, de_cobblestone e de_overpass);<br>

                        Servidores de jogo fornecidos e configurados pela plataforma GamersCLUB.<br>

                        Narração de Willian “gORDOx” Lemos

                        Streaming via Twitch.tv</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Formato</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">                   
                                       
                      Na fase geral serão disputados jogos em melhores de 1, com eliminação direta (mata-mata), até que se alcancem quatro semifinalistas (desta fase), que estarão automaticamente escalados para a segunda fase.<br>

                      Os grupos serão definidos após a fase geral, onde estas quatro equipes se juntarão, então, às quatro equipes convidadas (Keyd, CNB, g3x e INTZ) em um sorteio aleatório de dois grupos. <br>

                      Nestes são feitas partidas únicas (MD1) entre todas as equipes, e as duas equipes com maior pontuação prosseguem para a fase das playoffs,<br> 

                      onde serão feitas as semifinais, e então dois jogos que definem o placar premiado, começando com os 3º e 4º e depois a final.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Premiação</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">  

                    Essa premiação será recebida pela equipe/responsável e deverá ser repassada aos jogadores integralmente - salvo contrato prévio entre jogadores e equipes referente à premiação.<br>

                    A premiação total será de R$ 5.000,00* dividida da seguinte maneira:<br>

                    1º Colocado: R$ 2.000,00;<br>

                    2º Colocado: R$ 1.500,00;<br>

                    3º Colocado: R$ 1.000,00 (CréditosGOLD)<br>

                    4º Colocado: R$ 500,00 (CréditosGOLD)<br>

                    *As premiações serão entregues até 45 dias.</p>

                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Confirmação de Inscrição</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">  

                        Os times que desejem participar devem manifestar seu interesse por meio da inscrição no evento oficial da  <a href="../pages/cadastroTime.php">CS COMP</a><br>

                        Para o preenchimento das 64 vagas disponíveis, serão confirmadas as inscrições dos times sob os seguintes critérios:<br>

                        1- Inscrição na lista;<br>

                        2- Pagamento do boleto;<br>

                        3- Apresentação do comprovante de pagamento e CPF em mãos;
                      </p>
                    
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Regras de Jogo</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">  

                      

                      1.1 Modo de Jogo: Competitivo 5v5, com tempos de 1min55s e 40s para rodada e bomba, respectivamente;<br>

                      1.2 Sentida a necessidade de esclarecimento sobre qualquer assunto procure por um organizador dentro do servidor TeamSpeak, ou utilize o botão “chamar um administrador” dentro da plataforma GamersClub;<br>

                      1.3 É estritamente proibida a transmissão dos jogos, seja feita por um jogador, staff da equipe, espectador ou outros. Apenas a organização poderá fazer a transmissão das partidas;<br>

                      1.4 É estritamente proibido jogar logado na conta Steam de terceiros;<br>

                      1.5 É proibido o uso de qualquer tipo de software que dá vantagens ao usuário, como aimbots, wallhacks, triggerbots, etc;<br>

                      1.6 Toda a organização respectiva aos playoffs, incluindo seleção de adversários, horário dos jogos e procedimental ingame será organizada e é de responsabilidade da GamersCLUB.<br>

                      1.6.1 A fase classificatória (para os grupos) será realizada em formato de mata-mata, onde a vitória garante que a equipe avance para a próxima fase. Os arranjos dos pares de equipes para as partidas será feita aleatoriamente pela plataforma GamersCLUB;<br>

                      1.7.1 A fase de grupos será realizada no modo melhor de um, onde cada equipe enfrenta o adversário apenas uma vez, valendo a pontuação descrita na seção “Formato”;<br>

                      1.7.2 Em caso de empate na pontuação das equipes na tabela, os seguintes critérios de desempate serão usados:<br><br>

                      Número de vitórias;<br>
                      Saldo de Rounds;<br>
                      Rounds Ganhos;<br>
                      Rounds perdidos;<br>
                      Placar com maior diferença;<br><br>

                      OBS: Em caso de o empate ainda persistir, será realizada uma partida em um mapa a ser definido por um sorteio feito pela organização, prorrogada se necessário;<br><br>

                      1.8 Os mapas serão definidos por vetos. Em partidas realizadas no formato melhor de 1, cada time vetará 1 mapa, até que reste apenas o mapa que será jogado na partida. O lado inicial (CT ou TR) de cada equipe será definido por uma rodada de faca ao início do jogo;
                      </p>
                    
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Conduta dos Jogadores</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="card card-inverse-success" id="context-menu-access">
                    <div class="card-body">
                      <p class="card-text">  

                      
                    3.2.1 Trapaças por meio de hacks<br>

                    Qualquer alteração no cliente do CS:GO que não é autorizada pela Valve e/ou caracteriza trapaça é estritamente proibido e acarreta na desclassificação do mesmo.<br>

                    3.2.2 Profanação e Hate Speech<br>

                    Os membros de equipes não poderão usar linguagem obscena, vulgar, nem mesmo de insultos, ameaças, abusos, calúnia, difamação ou portar-se de qualquer maneira ofensiva ou repreensível, nem promover ou incitar ódio ou conduta discriminatória dentro ou perto da área de partida em qualquer momento, seja via jogo ou via TeamSpeak. Ações que desrespeitem as clausulas de boa conduta e convivência entre jogadores  e serão julgadas pelo comitê organizador e são passíveis de punição para o(s) time(s) envolvido(s).<br>

                    3.2.3 Comportamento Disruptivo/Insultos

                    O membro de uma equipe não pode tomar qualquer ação ou executar qualquer gesto, ou incitar qualquer indivíduo a fazer o mesmo, que seja direcionado ao time adversário em uma natureza insultuosa, zombeteira, perturbadora ou antagônica.<br>

                    3.2.1 Responsabilidade sob Código<br>

                    Salvo indicação contrária, ofensas e quebras dessas regras são passíveis de punição, tendo sido ou não cometidas propositalmente. Tentativas de quebra de regras também são passíveis de punição.<br>

                    3.4.4 Discriminação e Difamação<br>

                    Membros das equipes não podem ofender a dignidade ou integridade de um País, pessoa ou um grupo de pessoas por meio de palavras ou atos de desprezo ou ações de raça, cor de pele, etnia, nação, origem social, gênero, língua, religião, opinião política ou qualquer outra opinião, status financeiro, idade ou qualquer outro status de orientação sexual.<br>

                    3.4.5 Recusa de cumprimento<br>

                    Nenhum membro de uma equipe poderá recusar ou se negar a executar as instruções dos organizadores do Torneio.<br>

                    3.4.6 Combinação de Resultados<br>

                    Qualquer tipo de tentativa de oferecer, concordar ou conspirar a influenciar o resultado de um jogo que não a seu curso natural com qualquer objetivo final é estritamente proibido.<br>

                    3.4.7 Sujeições a Penalidades<br>

                    Qualquer pessoa envolvida ou com tentativa de envolvimento em qualquer ação que os organizadores acreditem, a seu critério exclusivo e absoluto, que constitua uma vantagem desigual, estará sujeita a uma punição imposta devido a esses atos. A natureza e extensão das punições impostas devido a essas operações obedecerão a critérios exclusivos e absolutos da Organização.<br>

                    3.5 Penalidades<br>

                    Após a descoberta de violação por um membro de uma equipe de qualquer uma das regras listadas acima, os organizadores poderão, sem limitação de sua autoridade sob a seção 3.2.4 emitir as seguintes penalidades:<br>

                    3.5.1 Advertência Verbal<br>

                    3.5.2 Perda da escolha de lado para o Jogo atual e/ou futuros<br>

                    3.5.3 Multas e/ou Perda de Premiação<br>

                    3.5.4 Perda de Jogos<br>

                    3.5.5 Perda de Partidas<br>

                    3.5.6 Suspensões<br>

                    3.5.7 Desclassificação<br>

                    Infrações repetidas ou graves (abusos, hack, entre outros) estão sujeitas a escalação de penalidades, até mesmo incluindo ou não a desclassificação de eventos futuros e/ou banimento do evento. É importante notar que penalidades não têm ordem de grandeza definida. A critério dos organizadores, um jogador pode ser desclassificado por uma primeira ofensa se a ação do jogador for o suficiente para uma desclassificação.<br>

                    3.6 Direito de Publicação<br>

                    Ao se inscrever no campeonato, os participantes concordam em ceder, neste ato, os direitos de uso de sua imagem e da equipe que representam para a GN, em banners, peças publicitárias, comunicações em mídias em redes sociais, e-mail marketing, streaming ao vivo, replays e eventuais ações relacionadas a promover o campeonato.<br>

                    A organização do torneio terá todos os direitos de publicar e declarar que um membro da equipe foi penalizado. Qualquer membro da equipe ou time poderá ser citado nessas declarações, renunciando assim a qualquer direito de ação judicial contra a GNCup ou qualquer um dos patrocinadores, e/ou seus parceiros, subsidiários, afiliados, funcionários, agentes ou contratados.<br>

                    3.7 Espírito das Regras<br>

                    3.7.1 Atrasos<br>

                    Em caso de atraso por motivos técnicos, superior a duas horas, ou que seja constatado que não haverá uma solução rápida, para que ocorra o início e andamento do mesmo, qualquer ação fica a critério da organização, desde o cancelamento até o adiamento.<br>

                    3.7.2 Decisões Finais<br>

                    Todas as decisões a respeito da interpretação das regras, elegibilidade de jogadores, cronograma do evento e penalidades por mau comportamento dependem apenas das decisões da organização, que são finais. As decisões da organização, em respeito a essas regras, não podem ser objeto de recurso e não darão origem a qualquer reclamação por danos monetários ou qualquer outra medida legal.<br>

                    3.7.3 Termo de Concordância<br>

                    Ao se inscrever no torneio, a equipe está inteiramente de acordo com as regras e deverá cumpri-las conforme foram determinadas pela organização do torneio, sem direito a reclamação futura.
                      </p>
                    
                    </div>
                  </div>
                </div>
              </div>





              </div>
              </div>



        

        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a href="#">UrbanUI</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
