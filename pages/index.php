<?php
session_start();
include("../PDO/conexao.php");
include("../PDO/listaTime.php");
include("../PDO/listaBD.php");
// include("../PDO/excluiBD.php");
if(!isset($_SESSION['user_nome']) && !isset($_SESSION['user_senha']) )
//header("Location: ../pages/login.php");

?>



<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CS COMP</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../node_modules/icheck/skins/all.css">
  <link rel="stylesheet" href="../node_modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/meuCss.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png">
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
              <a class="nav-link" href="../pages/">
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
        <!-- partial -->

        <div class="imagemRe"> 

        <img src="../imagens/cs4.png">
        <div class="imgbanner">
        <img src="../imagens/icons/cloud9.png">
        <img src="../imagens/icons/astralis.png">
        <img src="../imagens/icons/mibr.png">
        <img src="../imagens/icons/iconeFaze.png">
        <img src="../imagens/icons/cloud9.png">
        <img src="../imagens/icons/astralis.png">
        <img src="../imagens/icons/mibr.png">
        <img src="../imagens/icons/iconeFaze.png">
        <img src="../imagens/icons/cloud9.png">
        <img src="../imagens/icons/astralis.png"> 

        </div>

        </div>

        <!-- LISTA -->

      <div class="listaTime">
       <form method="POST" action="../PDO/listaTime.php">
        <div class="timescad">
        <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Times Cadastrados</h6>
                  <div class="d-flex table-responsive">
                    <div class="btn-group mr-2">
                      <!-- <button class="btn btn-sm btn-info"><i class="mdi mdi-plus-circle-outline"></i> Add</button> -->
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-alert-circle-outline"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                    </div>
                    <div class="btn-group ml-auto mr-2 border-0">
                      <input type="text" class="form-control" placeholder="Search Here">
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th>ID do Time</th>
                          <th>Nome do time</th>
                          <th>Líder</th>
                          <th>Pais</th>
                          <th>QTD. Jogadores</th>
                          
                        </tr>
                      </thead>
                      
                      <tbody>
                      
                        <?php    
                        foreach($results as $row){

                          ?>
                        
                        <tr> 
                       
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["nome"]; ?></td>
                          <td><?php echo $row["nomeLider"]; ?></td>
                          <td><?php echo $row["pais"]; ?></td>
                          <td><?php echo $row["qtdJogador"]; ?></td>
                          <td></td>
                          
                        
                        </tr>
                        <?php } ?>

                     

                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
              </div>
              </div>
              <!-- FIM LISTA -->

              <div class="listaJS">
       <form method="POST" action="../PDO/listaBD.php">
        <div class="timescad">
        <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Jogadores Cadastrados</h6>
                  <div class="d-flex table-responsive">
                    <div class="btn-group mr-2">
                      <!-- <button class="btn btn-sm btn-info"><i class="mdi mdi-plus-circle-outline"></i> Add</button> -->
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-alert-circle-outline"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                    </div>
                    <div class="btn-group ml-auto mr-2 border-0">
                      <input type="text" class="form-control" placeholder="Search Here">
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th>ID do Jogador</th>
                          <th>NICK</th>
                          <th>EMAIL</th>
                          
                        </tr>
                      </thead>
                      
                      <tbody>

                        <?php    
                        foreach($results2 as $row){

                          ?>
                        
                        <tr> 
                       
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["nome"]; ?></td>
                          <td><?php echo $row["email"]; ?></td>
                          
                          
                          
                        
                        </tr>
                        <?php } ?>

                     

                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
              </div>
              </div>
              <!-- FIM LISTA -->

              


              <div class="dados">
              <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <img src="../imagens/icons/arma2.png" alt="image">
                    <div class="ml-3">
                      <p class="mb-0">Premios em skins</p>
                      <h6>12569</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                  <img src="../imagens/icons/medalha.png" alt="image">
                    <div class="ml-3">
                      <p class="mb-0">Premiações realizadas</p>
                      <h6>2346</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                  <img src="../imagens/icons/dinheiro.png" alt="image">
                    <div class="ml-3">
                      <p class="mb-0">Premios em dinheiro</p>
                      <h6>896546</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                  <img src="../imagens/icons/grafico.png" alt="image">
                    <div class="ml-3">
                      <p class="mb-0">Times do amador ao pró</p>
                      <h6>$ 56000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>


              <!-- REPLICAR AS FIGURAS PARA GERAR UMA LISTA DE PREMIOS -->
              <div class="premios">
              <h2>PREMIOS</h2>
                  <div class="row portfolio-grid">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/awpDL.jpg" alt="image">
                            <figcaption>
                              <h4>AWP - Dragon Lore</h4>
                              <p>Nova de fábrica com float 0.02</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/uspneonoir.jpg" alt="image">
                            <figcaption>
                              <h4>USP - Neonoir</h4>
                              <p>Testada em campo com float 0,12</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/ak47patrocinio.jpg" alt="image">
                            <figcaption>
                              <h4>AK47 - Patrocinio</h4>
                              <p>Nova de fábrica com float 0.07</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/ak47jaguar.jpg" alt="image">
                            <figcaption>
                              <h4>AK47 - Jaguar</h4>
                              <p>Nova de fábrica com float 0.06</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/ak47redline.jpg" alt="image">
                            <figcaption>
                              <h4>AK47 - Linhas Vermelhas</h4>
                              <p>Desgaste mínimo com float 0.12</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/awpMedusa.png" alt="image">
                            <figcaption>
                              <h4>AWP - Medusa</h4>
                              <p>Nova de fábrica com float 0.03</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/awpPhobos.jpg" alt="image">
                            <figcaption>
                              <h4>AWP - Phobos</h4>
                              <p>Testada em campo com float 0,17</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/awpHyperbeast.png" alt="image">
                            <figcaption>
                              <h4>AWP - Hyper Fera</h4>
                              <p>Desgaste mínimo com float 0,10</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/uspKillconfirmed.png" alt="image">
                            <figcaption>
                              <h4>USP - Baixa Confirmada</h4>
                              <p>Desgaste mínimo com float 0,08</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/umpDesilusao.png" alt="image">
                            <figcaption>
                              <h4>UMP - Desilusão</h4>
                              <p>Nova de fábrica com float 0.03</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/umpBlaze.png" alt="image">
                            <figcaption>
                              <h4>UMP - Blaze</h4>
                              <p>Testada em campo com float 0,22</p>
                            </figcaption>			
                          </figure>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="../imagens/p2000Corticera.png" alt="image">
                            <figcaption>
                              <h4>P2000 - Corticera</h4>
                              <p>Desgaste mínimo com float 0.12</p>
                            </figcaption>			
                          </figure>
                        </div>          
              </div>
              <!-- FIM LISTA DE PREMIOS -->
              
              


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="#">CS COMP</a>. All rights reserved.</span>
            
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
  <script src="../node_modules/icheck/icheck.min.js"></script>
  <script src="../node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="../node_modules/select2/dist/js/select2.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/file-upload.js"></script>
  <script src="../js/iCheck.js"></script>
  <script src="../js/typeahead.js"></script>
  <script src="../js/select2.js"></script>
  <!-- End custom js for this page-->



</body></html>