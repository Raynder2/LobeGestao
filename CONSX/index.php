
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>Consulta CNPJs - Lobe Consultoria</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<style>
.bi {
    color: white;
    margin: 15px 0px;
}
</style>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Lobe Consultoria</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Lobe Consultoria</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
   

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-users"></i> <span>Consulta CNPJs</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consulta CNPJs
        <small>Nome do Sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Consulta CNPJs</li>
      </ol>
    </section>

    <section class="container-fluid">
      <form style="padding: 10px 0;" method="POST" id="form-pesquisa" action="">
        <label>Consultar: </label>
        <input type="text" name="consulta" id="consulta" placeholder="Coloque a lista de cnpjs">
        <input type="button" value="ENVIAR" onclick="consultar()">
        <input type="button" id="gerar" value="GERAR PLANILHA" onclick="gerarPlanilha()" disabled="disabled" style="color: white;background: grey;">
      </form>
    </section>

    <form id="form" action="api/gerar_planilha.php" method="post">
		<input style="display:none" type="text" id="cnpj" name="cnpj">
	</form>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Consulta CNPJs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>CNPJ</th>
                    <th>EMPRESA</th>
                    <th>CONTRIBUINTE</th>
                    <th>HOSPITAL</th>
                    <th>ÓRGÃO  PUBLICO</th>
                    <th>PRODUTOR RURAL</th>
                    <th>OBS</th>
                  </tr>
                </thead>
                <tbody class="resultado">
                  
                  <?php

                  ?>
                  
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <a target="_blank" href="https://www.Lobe Consultoria.com.br/consulta.php">Lobe Consultoria</a>
    </div>
    <!-- Default to the left -->
    Projeto desenvolvido por Raynder Cardoso.
  </footer>
  
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script type="text/javascript" src="personalizado.js"></script>

<script>
    function consultar(){

        cnpjs = document.getElementById('consulta').value

        cnps = cnpjs.split(';')

        cnps.forEach(function(cnpj){     
            $.ajax({
                url: "api/index.php",
                type: 'post',
                data: { cnpj: cnpj},
                // beforeSend: function() {
                //     alert('enviando....')
                // }    #65b565
            })
            .done(function(msg) {
                texto = document.querySelector('.resultado').innerHTML
                novotexto = texto+msg
                
                document.querySelector('.resultado').innerHTML = novotexto
            })
        })

        document.getElementById('gerar').style.background = "#65b565"
        document.getElementById('gerar').removeAttribute('disabled')

    }

    function gerarPlanilha(){
        texto = document.querySelector('.resultado').innerHTML
        document.getElementById('cnpj').value = texto
        document.getElementById('form').submit()
    }
</script>
</body>
</html>
