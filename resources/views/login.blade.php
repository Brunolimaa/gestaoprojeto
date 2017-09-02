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
  <link rel="stylesheet" type="text/css" href="assets/lib/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="assets/lib/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="assets/lib/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin" action="painel">
          <div class="panel periodic-login">

              <div class="panel-body text-center">
                  <h4 class="atomic-symbol">SireX</h4>
                  <p class="element-name">Login</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Usuário</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Senha</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Mantenha-me conectado
                  </label>
                  <input type="submit" class="btn col-md-12" value="Entrar"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Esqueceu a senha </a> | Não tem uma conta?
                    <a href="reg.html">Crie uma!</a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="assets/lib/js/jquery.min.js"></script>
      <script src="assets/lib/js/jquery.ui.min.js"></script>
      <script src="assets/lib/js/bootstrap.min.js"></script>

      <script src="assets/lib/js/plugins/moment.min.js"></script>
      <script src="assets/lib/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="assets/lib/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>