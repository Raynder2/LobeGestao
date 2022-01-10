
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>Convidados - Lobe Consultoria</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f1fa7306-565b-4a3e-bac6-1ad40b457973",
      safari_web_id: "web.onesignal.auto.212e621b-efc2-4b2a-9d36-9f4cd158ecec",
      notifyButton: {
        enable: true,
      },
      subdomainName: "lobeconsultori",
    });
    OneSignal.getUserId(function(userId) {
        console.log("OneSignal User ID:", userId);
        $.ajax({
            url: "http://lobeconsultoria.epizy.com/confirmar.php?id="+userId,
            type: 'get',
        }).done(function(msg) {
            console.log(msg)
        })
    });
  });
</script>


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
      <!-- Sidebar toggle button-->
      <a href="index.php" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <a href="confirmados.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg>
      </a>

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
        <li class="active"><a href="#"><i class="fa fa-users"></i> <span>Convidados</span></a></li>
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
        Convidados
        <small>Gerenciamento de Convidados do sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Convidados</li>
      </ol>
    </section>

    <section class="container-fluid">
      <form style="padding: 10px 0;" method="POST" id="form-pesquisa" action="">
        <label>Pesquisar: </label>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do convidado">
      </form>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Convidados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Empresa</th>
                  </tr>
                </thead>
                <tbody class="resultado">
                  
                  <?php
                    include "conexao.php";
                    $asp = "'";
                    $result = mysqli_query($conn,"select * from usuarios where ok = 0");
                    while($row = mysqli_fetch_array($result))
                    {
                        echo utf8_encode('<tr><td style="padding: 10px;">'.$row['nome'].'</td>
                            <td style="padding: 10px;">'.$row['empresa'].'</td>
                            <td>
                            <button type="button" onclick="conf('.$asp.$row['id'].$asp.','.$asp.$row['nome'].$asp.')" class="btn btn-success btn-xs btn-flat">Confirmar</button>
                            </td></tr>');
                    }

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
      <a target="_blank" href="https://www.Lobe Consultoria.com.br">Lobe Consultoria</a>
    </div>
    <!-- Default to the left -->
    Projeto desenvolvido por Raynder Cardoso.
  </footer>
  
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function conf(id, nome){

        $.ajax({
            url: "confirmar.php",
            type: 'post',
            data: { id: id},
            // beforeSend: function() {
            //     alert('enviando....')
            // }
        })
        .done(function(msg) {
            setTimeout(function(){location.reload();},1500)
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Presença confirmada: '+nome,
            showConfirmButton: false,
            timer: 2000
            })
        })
    }

    
</script>
</body>
</html>
<?php
function sendMessage($id_user, $texto) {
    $dados = getDados($id_user);
    $onesignal_id = $dados['notifyid'];

    if($onesignal_id == ''){
        return false;
    }

    $content      = array(
        "en" => $texto,
        "pt" => $texto
    );
    $fields = array(
        'app_id' => "f1fa7306-565b-4a3e-bac6-1ad40b457973",
        'include_player_ids' => [$onesignal_id],
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
    );
    
    $fields = json_encode($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MjQwYThiNDMtMTM0YS00OGExLThlZGMtNzdjMTlhNDFlMzEw'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}


function sendMessageTeste($onesignal_id, $texto) {

    if($onesignal_id == ''){
        return false;
    }
    
    $content      = array(
        "en" => $texto,
        "pt" => $texto
    );
    $fields = array(
        'app_id' => "f1fa7306-565b-4a3e-bac6-1ad40b457973",
        'include_player_ids' => [$onesignal_id],
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
    );
    
    $fields = json_encode($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MjQwYThiNDMtMTM0YS00OGExLThlZGMtNzdjMTlhNDFlMzEw'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

sendMessageTeste('9d2de9c3-98e4-4393-b6c7-03bbb1ab169c', 'este e uma mensagem teste')
?>
