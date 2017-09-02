<!DOCTYPE html>
<html lang="en">
<head>
	
    	<meta charset="utf-8">
    	<meta name="description" content="Miminium Admin Template v.1">
    	<meta name="author" content="Isna Nur Azis">
    	<meta name="keyword" content="">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Miminium</title>
 
    <!-- start: Css -->
      <link rel="stylesheet" type="text/css" href="assets/lib/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/fullcalendar.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/nouislider.min.css">
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/select2.min.css">
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/ionrangeslider/ion.rangeSlider.css">
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css">
      <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/bootstrap-material-datetimepicker.css">
      <link href="assets/lib/css/style.css" rel="stylesheet">
	  <!-- end: Css -->

	    <link rel="shortcut icon" href="assets/lib/img/logomi.png">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b><img src="assets/lib/img/logo-next.png" class="logo-marca"></b>
                </a>

              <!--<ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>-->

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Bruno Lima</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="assets/lib/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <!--<p class="animated fadeInRight">Sat,October 1st 2029</p>-->
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-notebook"></span> Proposta 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="login">Preencher Proposta</a></li>
                      </ul>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-book-open"></span> Acompanhar
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="painel">Acompanhar Proposta</a></li>
                      </ul>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-docs"></span> Relatório
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="painel">Preencher Relatório</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

  		
          <!-- start: content -->
         <!-- <div id="content">
            <div class="tabs-wrapper text-center">             
             <div class="panel box-shadow-none text-left content-header">
                  <div class="panel-body" style="padding-bottom:0px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tab & Panels</h3>
                        <p class="animated fadeInDown">
                         Ui Element <span class="fa-angle-right fa"></span> Tabs & Panels
                        </p>
                    </div>
                    <ul id="tabs-demo" class="nav nav-tabs content-header-tab" role="tablist" style="padding-top:10px;">
                      <li role="presentation" class="active">
                        <a href="#tabs-area-demo" id="tabs2" data-toggle="tab">Tabs</a>
                      </li>
                      <li role="presentation" class="">
                        <a href="#panels-area-demo" id="tabs2" data-toggle="tab">Panels</a>
                      </li>
                    </ul>
            </div>
          </div>
          
          <div class="col-md-12 tab-content">

              <div role="tabpanel" class="tab-pane fade active in" id="tabs-area-demo" aria-labelledby="tabs1">
                <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="col-md-12 tabs-area">
                      <div class="liner"></div>
                      <ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                        <li class="active">
                         <a href="#tabs-demo6-area1" data-toggle="tab" title="welcome">
                          <span class="round-tabs one">
                            <i class="glyphicon glyphicon-home"></i>
                          </span> 
                        </a>
                      </li>

                      <li>
                        <a href="#tabs-demo6-area2" data-toggle="tab" title="profile">
                         <span class="round-tabs two">
                           <i class="glyphicon glyphicon-user"></i>
                         </span> 
                       </a>
                     </li>

                     <li>
                      <a href="#tabs-demo6-area3" data-toggle="tab" title="bootsnipp goodies">
                       <span class="round-tabs three">
                        <i class="glyphicon glyphicon-gift"></i>
                      </span> </a>
                    </li>

                    <li>
                      <a href="#tabs-demo6-area4" data-toggle="tab" title="blah blah">
                       <span class="round-tabs four">
                         <i class="glyphicon glyphicon-comment"></i>
                       </span> 
                     </a>
                   </li>

                   <li><a href="#tabs-demo6-area5" data-toggle="tab" title="completed">
                     <span class="round-tabs five">
                      <i class="glyphicon glyphicon-ok"></i>
                    </span> </a>
                  </li>
                </ul>
                <div class="tab-content tab-content-v5">
                  <div class="tab-pane fade in active" id="tabs-demo6-area1">

                    <h3 class="head text-center">Custom Tabs<sup>™</sup> <span style="color:#f48250;">♥</span></h3>
                    <p class="narrow text-center">
                      Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                    </p>

                    <p class="text-center">
                      <a href="" class="btn btn-success btn-round green"> start using Mimin <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area2">
                    <h3 class="head text-center">Create a Mimin<sup>™</sup> Profile</h3>
                    <p class="narrow text-center">
                      Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                    </p>

                    <p class="text-center">
                      <a href="" class="btn btn-success btn-round green"> create your profile <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>

                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area3">
                    <h3 class="head text-center">Mimin goodies</h3>
                    <p class="narrow text-center">
                      Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                    </p>

                    <p class="text-center">
                      <a href="" class="btn btn-success btn-round green"> start using Mimin <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area4">
                    <h3 class="head text-center">Drop comments!</h3>
                    <p class="narrow text-center">
                      Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                    </p>

                    <p class="text-center">
                      <a href="" class="btn btn-success btn-round green"> start using Mimin <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area5">
                    <div class="text-center">
                      <i class="img-intro icon-checkmark-circle"></i>
                    </div>
                    <h3 class="head text-center">thanks for staying tuned! <span style="color:#f48250;">♥</span> Bootstrap</h3>
                    <p class="narrow text-center">
                      Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>-->
           
          <!-- end: content -->
          <div id="content">
            <div class="tabs-wrapper text-center">             
             <div class="panel box-shadow-none text-left content-header">
                  <div class="panel-body" style="padding-bottom:0px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft fontTitulo">SISTEMA DE REGISTRO DE ATIVIDADES DE EXTENSÃO</h3>
                          PROPOSTA DE ATIVIDADE DE EXTENSÃO
                        <p class="animated fadeInDown">
                         Cadastro <span class="fa-angle-right fa"></span> Formulario
                        </p>
                    </div>
                    <ul id="tabs-demo" class="nav nav-tabs content-header-tab" role="tablist" style="padding-top:10px;">
                      <li role="presentation" class="active">
                        <a href="#tabs-area-demo" id="tabs2" data-toggle="tab">Tabs</a>
                      </li>
                      <li role="presentation" class="">
                        <a href="#panels-area-demo" id="tabs2" data-toggle="tab">Panels</a>
                      </li>
                    </ul>
                  </div>
              </div>
              <div class="container">
            	  <div class="row">
          	  	  <section>
                    <div class="wizard">
                      <div class="wizard-inner">
                          <div class="connecting-line"></div>
                          <ul class="nav nav-tabs" role="tablist">
          
                              <li role="presentation" class="active">
                                  <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                      <span class="round-tab">
                                          <i>1</i>
                                      </span>
                                  </a>
                              </li>
          
                              <li role="presentation" class="disabled">
                                  <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                      <span class="round-tab">
                                           <i>2</i>
                                      </span>
                                  </a>
                              </li>
                              <li role="presentation" class="disabled">
                                  <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                      <span class="round-tab">
                                           <i>3</i>
                                      </span>
                                  </a>
                              </li>
                              <li role="presentation" class="disabled">
                                  <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                      <span class="round-tab">
                                           <i>4</i>
                                      </span>
                                  </a>
                              </li>
                              <li role="presentation" class="disabled">
                                  <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
                                      <span class="round-tab">
                                           <i>5</i>
                                      </span>
                                  </a>
                              </li>
          
                              <li role="presentation" class="disabled">
                                  <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                      <span class="round-tab">
                                          <i class="glyphicon glyphicon-ok"></i>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
          
                      <form role="form" class="cmxform" id="signupForm" action="">
                          <div class="tab-content">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  
                                  <!--<p>This is step 1</p>-->
                                
                                  <div class="col-md-12"> 
                                    <p class="titulo" style="margin: 0 17px;">IDENTIFICAÇÃO DA ATIVIDADE <span class="icon-layers"></span></p>
                                     <div class="col-md-10">
                                        <!--<div class="form-group form-animate-text" style="margin-top:40px !important;">
                                          <input type="text" class="form-text mask-date" required maxlength="10">
                                          <span class="bar"></span>
                                          <label>Date</label>
                                        </div>-->
                                        
                  
                                          <div class="form-group form-animate-text formPersonal" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="atExtensao" id="atExtensao" required>
                                            <span class="bar barPersonal"></span>
                                            <label>Título da Atividade de Extensão</label>
                                          </div>
                                      </div>
                                      <div class="col-md-3 seleAtividade">
                                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            Modalidade de Extensão
                                            <select class="form-control selecFormPersonal">
                                              <option default>selecione</option>
                                              <option>Programa</option>
                                              <option>Prestação de Serviços</option>
                                              <option>Projeto</option>
                                              <option>Curso</option>
                                              <option>Produção Técnico-bibiográfica</option>
                                              <option>Evento</option>
                                              <option>Outro</option>
                                            </select>
                                            <span class="bar barPersonal"></span>
                                          </div>
                                      </div>
                                      <div class="col-md-3 seleAtividade">
                                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            Área Temática:
                                            <select class="form-control selecFormPersonal">
                                              <option default>selecione</option>
                                              <option>Programa</option>
                                              <option>Prestação de Serviços</option>
                                              <option>Projeto</option>
                                              <option>Curso</option>
                                              <option>Produção Técnico-bibiográfica</option>
                                              <option>Evento</option>
                                              <option>Outro</option>
                                            </select>
                                            <span class="bar barPersonal"></span>
                                          </div>
                                      </div>
                                      <div class="col-md-3 seleAtividade">
                                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            Unidade:
                                            <select class="form-control selecFormPersonal">
                                              <option default>selecione</option>
                                              <option>Programa</option>
                                              <option>Prestação de Serviços</option>
                                              <option>Projeto</option>
                                              <option>Curso</option>
                                              <option>Produção Técnico-bibiográfica</option>
                                              <option>Evento</option>
                                              <option>Outro</option>
                                            </select>
                                            <span class="bar barPersonal"></span>
                                          </div>
                                      </div>
                                      <div class="col-md-10">
                                          <div class="form-group form-animate-text formPersonal" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="cursoSetor" id="cursoSetor" required>
                                            <span class="bar barPersonal"></span>
                                            <label>Curso/Setor</label>
                                          </div>
                                      </div>
                                        <div class="col-md-12">
                                          <p class="titulo">COORDENADOR <span class="icon-user"></span></p>
                                            <div class="col-md-4">
                                              <div class="form-group form-animate-text formPersonal" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" name="cordeNome" id="cordeNome" required>
                                                <span class="bar barPersonal"></span>
                                                <label>Nome</label>
                                              </div>
                                           </div>
                                           <div class="col-md-4">
                                              <div class="form-group form-animate-text formPersonal" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" name="cordeNome" id="cordeNome" required>
                                                <span class="bar barPersonal"></span>
                                                <label>E-mail</label>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group form-animate-text formPersonal" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" name="cordeNome" id="cordeNome" required>
                                                <span class="bar barPersonal"></span>
                                                <label>Telefone</label>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                Coordenador
                                                <select class="form-control selecFormPersonal">
                                                  <option default>selecione</option>
                                                  <option>Docente</option>
                                                  <option>Externo</option>
                                                  <option>Aluno de Graduação Bolsista</option>
                                                  <option>Aluno de Graduação não Bolsista</option>
                                                  <option>Aluno de Pós-Graduação</option>
                                                  <option>Outro</option>
                                                </select>
                                                <span class="bar"></span>
                                              </div>
                                            </div>

                                          <div class="col-md-4">
                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                              Regime de Trabalho: (caso de docente ou funcionário)
                                              <select class="form-control selecFormPersonal">
                                                <option default>selecione</option>
                                                <option>Tempo Integral</option>
                                                <option>Tempo Parcial</option>
                                                <option>Horista</option>
                                                <option>Outro</option>
                                              </select>
                                              <span class="bar barPersonal"></span>
                                            </div>
                                          </div>
                                         
                                      </div>
                                  </div>  
                                    
                                    
                                  <ul class="list-inline pull-right">
                                      <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                                  </ul>
                                 
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step2">
                                  <h3>Step 2</h3>
                                  <p>This is step 2</p>
                                  <ul class="list-inline pull-right">
                                      <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                      <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step3">
                                  <h3>Step 3</h3>
                                  <p>This is step 3</p>
                                  <ul class="list-inline pull-right">
                                      <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                      <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                      <li><button type="button" class="btn btn-primary btn-info-full next-step">Salvar e continuar</button></li>
                                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="complete">
                                  <h3>Complete</h3>
                                  <p>You have successfully completed all steps.</p>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </form>
                  </div>
              </section>
             </div>
          </div>
    
          <!-- start: right menu -->
            <div id="right-menu">
              <ul class="nav nav-tabs">
                <li class="active">
                 <a data-toggle="tab" href="#right-menu-user">
                  <span class="fa fa-comment-o fa-2x"></span>
                 </a>
                </li>
                <li>
                 <a data-toggle="tab" href="#right-menu-notif">
                  <span class="fa fa-bell-o fa-2x"></span>
                 </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#right-menu-config">
                   <span class="fa fa-cog fa-2x"></span>
                  </a>
                 </li>
              </ul>

              <div class="tab-content">
                <div id="right-menu-user" class="tab-pane fade in active">
                  <div class="search col-md-12">
                    <input type="text" placeholder="search.."/>
                  </div>
                  <div class="user col-md-12">
                   <ul class="nav nav-list">
                    <li class="online">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="away">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-desktop"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>

                  </ul>
                </div>
                <!-- Chatbox -->
                <div class="col-md-12 chatbox">
                  <div class="col-md-12">
                    <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
                  </div>
                  <div class="chat-area">
                    <div class="chat-area-content">
                      <div class="msg_container_base">
                        <div class="row msg_container send">
                          <div class="col-md-9 col-xs-9 bubble">
                            <div class="messages msg_sent">
                              <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                              </div>
                            </div>
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="assets/lib/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                          </div>

                          <div class="row msg_container receive">
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="assets/lib/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                            <div class="col-md-9 col-xs-9 bubble">
                              <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                  tiny master db, and huge document store</p>
                                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                              </div>
                            </div>

                            <div class="row msg_container send">
                              <div class="col-md-9 col-xs-9 bubble">
                                <div class="messages msg_sent">
                                  <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="assets/lib/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="assets/lib/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                  <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                      tiny master db, and huge document store</p>
                                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                  </div>
                                </div>

                                <div class="row msg_container send">
                                  <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                      <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="assets/lib/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="assets/lib/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                    <div class="col-md-9 col-xs-9 bubble">
                                      <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                          tiny master db, and huge document store</p>
                                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-input">
                                <textarea placeholder="type your message here.."></textarea>
                              </div>
                              <div class="user-list">
                                <ul>
                                  <li class="online">
                                    <a href=""  data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <div class="user-avatar"><img src="assets/lib/img/avatar.jpg" alt="user name"></div>
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="assets/lib/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div id="right-menu-notif" class="tab-pane fade">

                            <ul class="mini-timeline">
                              <li class="mini-timeline-highlight">
                               <div class="mini-timeline-panel">
                                <h5 class="time">07:00</h5>
                                <p>Coding!!</p>
                              </div>
                            </li>

                            <li class="mini-timeline-highlight">
                             <div class="mini-timeline-panel">
                              <h5 class="time">09:00</h5>
                              <p>Playing The Games</p>
                            </div>
                          </li>
                          <li class="mini-timeline-highlight">
                           <div class="mini-timeline-panel">
                            <h5 class="time">12:00</h5>
                            <p>Meeting with <a href="#">Clients</a></p>
                          </div>
                        </li>
                        <li class="mini-timeline-highlight mini-timeline-warning">
                         <div class="mini-timeline-panel">
                          <h5 class="time">15:00</h5>
                          <p>Breakdown the Personal PC</p>
                        </div>
                      </li>
                      <li class="mini-timeline-highlight mini-timeline-info">
                       <div class="mini-timeline-panel">
                        <h5 class="time">15:00</h5>
                        <p>Checking Server!</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-success">
                      <div class="mini-timeline-panel">
                        <h5 class="time">16:01</h5>
                        <p>Hacking The public wifi</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-danger">
                      <div class="mini-timeline-panel">
                        <h5 class="time">21:00</h5>
                        <p>Sleep!</p>
                      </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>

                </div>
                <div id="right-menu-config" class="tab-pane fade">
                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Notification</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-info">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                        <label class="onoffswitch-label" for="myonoffswitch1"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Custom Designer</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                        <label class="onoffswitch-label" for="myonoffswitch2"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Autologin</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                        <label class="onoffswitch-label" for="myonoffswitch3"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Hacking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                        <label class="onoffswitch-label" for="myonoffswitch4"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto locking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                        <label class="onoffswitch-label" for="myonoffswitch5"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>FireWall</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                        <label class="onoffswitch-label" for="myonoffswitch6"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>CSRF Max</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
                        <label class="onoffswitch-label" for="myonoffswitch7"></label>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Man In The Middle</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
                        <label class="onoffswitch-label" for="myonoffswitch8"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Repair</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
                        <label class="onoffswitch-label" for="myonoffswitch9"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input type="button" value="More.." class="btnmore">
                  </div>

                </div>
              </div>
            </div>  
          <!-- end: right menu -->
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                   <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <!--<p class="animated fadeInRight">Sat,October 1st 2029</p>-->
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-notebook"></span> Proposta 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Preencher Proposta</a></li>
                      </ul>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-book-open"></span> Acompanhar
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Acompanhar Proposta</a></li>
                      </ul>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-docs"></span> Relatório
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Preencher Relatório</a></li>
                      </ul>
                    </li>
                </ul>    
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

    <!-- start: Javascript -->
    <script src="assets/lib/js/jquery.min.js"></script>
    <script src="assets/lib/js/jquery.ui.min.js"></script>
    <script src="assets/lib/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="assets/lib/js/plugins/moment.min.js"></script>
    <script src="assets/lib/js/plugins/jquery.knob.js"></script>
    <script src="assets/lib/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/lib/js/plugins/bootstrap-material-datetimepicker.js"></script>
    <script src="assets/lib/js/plugins/jquery.nicescroll.js"></script>
    <script src="assets/lib/js/plugins/jquery.mask.min.js"></script>
    <script src="assets/lib/js/plugins/select2.full.min.js"></script>
    <script src="assets/lib/js/plugins/nouislider.min.js"></script>
    <script src="assets/lib/js/plugins/jquery.validate.min.js"></script>
    <script src="assets/lib/js/plugins/fullcalendar.min.js"></script>
    <script src="assets/lib/js/plugins/jquery.nicescroll.js"></script>
    <script src="assets/lib/js/plugins/jquery.vmap.min.js"></script>
    <script src="assets/lib/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="assets/lib/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="assets/lib/js/plugins/chart.min.js"></script>


    <!-- custom -->
     <script src="assets/lib/js/main.js"></script>
     <script type="text/javascript">
      (function(jQuery){

        // start: Chart =============

        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {

            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }

            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);

            var innerHtml = '';
            if (undefined !== tooltip.labels && tooltip.labels.length) {
                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                    innerHtml += [
                        '<div class="chartjs-tooltip-section">',
                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                        '</div>'
                    ].join('');
                }
                tooltipEl.html(innerHtml);
            }

            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(21,186,103,0.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(66,69,67,0.3)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                 data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }, {
                label: "My Second dataset",
                fillColor: "rgba(21,113,186,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }]
        };

        var doughnutData = [
                {
                    value: 300,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 50,
                    color: "#1AD576",
                    highlight: "#15BA67",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#0F5E36",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }

            ];


        var doughnutData2 = [
                {
                    value: 100,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 250,
                    color: "#FF6656",
                    highlight: "#FF6656",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#FD786A",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }

            ];

        var barChartData = {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(21,186,103,0.4)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(21,186,103,0.2)",
                        highlightStroke: "rgba(21,186,103,0.2)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(21,113,186,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(21,113,186,0.2)",
                        highlightStroke: "rgba(21,113,186,0.2)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

         window.onload = function(){
                var ctx = $(".doughnut-chart")[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });

                var ctx2 = $(".line-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx2).Line(lineChartData, {
                     responsive: true,
                        showTooltips: true,
                        multiTooltipTemplate: "<%= value %>",
                     maintainAspectRatio: false
                });

                var ctx3 = $(".bar-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx3).Bar(barChartData, {
                     responsive: true,
                        showTooltips: true
                });

                var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
                window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                    responsive : true,
                    showTooltips: true
                });

            };
        
        //  end:  Chart =============

        // start: Calendar =========
         $('.dashboard .calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2015-02-12',
            businessHours: true, // display business hours
            editable: true,
            events: [
                {
                    title: 'Business Lunch',
                    start: '2015-02-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2015-02-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#20C572'
                },
                {
                    title: 'Conference',
                    start: '2015-02-18',
                    end: '2015-02-20'
                },
                {
                    title: 'Party',
                    start: '2015-02-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    id: 'availableForMeeting',
                    start: '2015-02-11T10:00:00',
                    end: '2015-02-11T16:00:00',
                    rendering: 'background'
                },
                {
                    id: 'availableForMeeting',
                    start: '2015-02-13T10:00:00',
                    end: '2015-02-13T16:00:00',
                    rendering: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2015-02-24',
                    end: '2015-02-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#FF6656'
                },
                {
                    start: '2015-02-06',
                    end: '2015-02-08',
                    overlap: true,
                    rendering: 'background',
                    color: '#FF6656'
                }
            ]
        });
        // end : Calendar==========

        // start: Maps============

          jQuery('.maps').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });
        
            jQuery(document).ready(function () { 
                var $seuCampoData = $(".mask-date");
                $seuCampoData.mask('00/00/0000', {reverse: true});
            });
            
            jQuery(document).ready(function(){
                $('.next-step').clik(function(){
                    alert('Funcionando!!!');
                });
            });
            //atExtensao

        // end: Maps==============

      })(jQuery);
     </script>
  <!-- end: Javascript -->
  </body>
</html>