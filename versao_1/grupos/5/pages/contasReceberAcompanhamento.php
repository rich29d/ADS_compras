<?php
    session_start();

    include_once("../bancoDados/autenticandoBanco.php");

    if(isset($_SESSION['email'])){}else{ 
        session_destroy();
        header('Location: ../login/login.php'); 
    }

    //$cnpj_cpf_cliente = $_POST["cnpj_cpf"];

    $dadosCliente = mysqli_query($conexao, "select * from tbl_cliente where CNPJ_CPF = 03470727000120");
    $linhaCliente = mysqli_fetch_assoc($dadosCliente);
    $totalCliente = mysqli_num_rows($dadosCliente);

    $dadosEndereco = mysqli_query($conexao, "select * from tbl_endereco where CNPJ_CPF = 03470727000120");
    $linhaEndereco = mysqli_fetch_assoc($dadosEndereco);
    $totalEndereco= mysqli_num_rows($dadosEndereco);

    if($totalCliente > 0){
        $cnpj_cpf = $linhaCliente["CNPJ_CPF"];
        $razao_social = $linhaCliente["NOME_RAZAOSOCIAL"];   
        $ie_rg = $linhaCliente["IE_RG"];
        $telefone = $linhaCliente["TELEFONE"]; 
        $telefone2 = $linhaCliente["Telefone2"]; 
        $celular = $linhaCliente["CELULAR"]; 
        $email = $linhaCliente["EMAIL"]; 
        $email2 = $linhaCliente["EMAIL2"];
        
        $rua_av = $linhaEndereco["RUA_AV"];
        $num = $linhaEndereco["NUMERO"];
        $bairro = $linhaEndereco["BAIRRO"];
        $cep = $linhaEndereco["CEP"];
        $cidade = $linhaEndereco["CIDADE"];
        $uf = $linhaEndereco["UF"];
    }else{
        $retornoResposta = "Desculpe, nenhum CNJP ou CPF encontrado !";    
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Recebimento Individual</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SGI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SGI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-usd"></i>
              <span class="label label-danger">9</span>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Nome do Usuário</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  Nome do Usuário
                  <small>Contas a Receber</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Contas a Receber</li>
        <li>
          <a href="../index.html">
            <i class="fa fa-th"></i> <span>Início</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Análise de Crédito</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="creditoAnalise.html"><i class="fa fa-circle-o"></i> Análises em aberto</a></li>
            <li><a href="creditoAnaliseFinalizada.html"><i class="fa fa-circle-o"></i> Análises finalizadas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Contas a Receber</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="contasReceber.html"><i class="fa fa-circle-o"></i>Contas a Receber</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Conta a Receber
        <small>Controle Individual</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">

<!-- -------------------------- -->
<!--    Informações da Venda    -->
<!-- -------------------------- -->
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><strong>Informações da Venda</strong></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body" style="padding: 0px;">
                    <!-- ------------------ -->
                    <!-- DADOS DO COMPRADOR -->
                    <!-- ------------------ -->
                    <div class="box-header with-border">
                        <h3 class="box-title">Dados do Comprador</h3>
                    </div><br>
                    <div class="form-group col-md-2">
                        <label>CNPJ/CPF</label>
                        <input type="text" class="form-control" value="<?php echo $cnpj_cpf?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Razão Social</label>
                        <input type="text" class="form-control" value="<?php echo $razao_social?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Nome Fantasia</label>
                        <input type="text" class="form-control" value="<?php echo $ie_rg?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Rua / Av.</label>
                        <input type="text" class="form-control" value="<?php echo $rua_av?>">
                    </div>
                    <div class="form-group col-md-1">
                        <label>Nro.</label>
                        <input type="text" class="form-control" value="<?php echo $num?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Bairro</label>
                        <input type="text" class="form-control" value="<?php echo $bairro?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>CEP</label>
                        <input type="text" class="form-control" value="<?php echo $cep?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Cidade</label>
                        <input type="text" class="form-control" value="<?php echo $cidade?>">
                    </div>
                    <div class="form-group col-md-1">
                        <label>UF</label>
                        <input type="text" class="form-control" value="<?php echo $uf?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Telefone</label>
                        <input type="text" class="form-control" value="<?php echo $telefone?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Telefone 2</label>
                        <input type="text" class="form-control" value="<?php echo $telefone2?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Celular</label>
                        <input type="text" class="form-control" value="<?php echo $celular?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>E-mail</label>
                        <input type="text" class="form-control" value="<?php echo $email?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>E-mail 2</label>
                        <input type="text" class="form-control" value="<?php echo $email2?>">
                    </div>
                </div>
                    <!-- ------------------ -->
                    <!--   DADOS DA VENDA   -->
                    <!-- ------------------ -->
                <div class="box-body" style="padding: 0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title"><br/>Dados da Venda</h3>
                    </div><br>
                    <div class="form-group col-md-3">
                        <label>Nro. da Nota Fiscal</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Tipo de Pagamento</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Data da Venda</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Qtd. de Parcelas</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Valor Total</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                    <!-- ------------------ -->
                    <!--      PARCELAS      -->
                    <!-- ------------------ -->
                <div class="box-body" style="padding: 0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title"><br/>Parcelas (Boleto) - Usar o numero da NFe como chave estrangeira na tabela de boletos</h3>
                    </div><br>
                    <table class="table table-hover" style="margin-top:-21px;">
                      <tr>
                        <th class="col-md-6" style="hover{background-color:#fff;}">Nro. do Boleto</th>
                        <th class="col-md-1">Parcela</th>
                        <th class="col-md-2">Vencimento</th>
                        <th class="col-md-2">Valor</th>
                        <th class="col-md-1">Status</th>
                      </tr>
                      <tr>
                        <td>12345678901234567890123456789012345678901234567890123456789</td>
                        <td>1/3</td>
                        <td>01/01/2017</td>
                        <td>R$10.000,00</td>
                        <td><span class="label label-success">Pago</span></td>
                      </tr>
                        <tr>
                        <td>12345678901234567890123456789012345678901234567890123456789</td>
                        <td>1/3</td>
                        <td>01/01/2017</td>
                        <td>R$10.000,00</td>
                        <td><span class="label label-success">Pago</span></td>
                      </tr>
                        <tr>
                        <td>12345678901234567890123456789012345678901234567890123456789</td>
                        <td>1/3</td>
                        <td>01/01/2017</td>
                        <td>R$10.000,00</td>
                        <td><span class="label label-success">Pago</span></td>
                      </tr>
                    </table>
                </div>
            </div>
          </div>
      </div>
<!-- -------------------------- -->
<!-- Timeline de acompanhamento -->
<!-- -------------------------- -->
      <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Acompanhamento do Recebimento</strong></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <ul class="timeline">
                        <!-- timeline time label -->
                        <li class="time-label">
                              <span class="bg-red">
                                10 Feb. 2014
                              </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                          <i class="fa fa-envelope bg-red"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 1 Mês atrás</span>

                            <h3 class="timeline-header no-border">Notificação de atraso encaminhada</h3>
                          </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class="time-label">
                              <span class="bg-green">
                                10 Feb. 2014
                              </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                          <i class="fa fa-usd bg-green"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 1 Mês atrás</span>

                            <h3 class="timeline-header no-border">Recebimento - Parcela 1/3</h3>
                          </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class="time-label">
                              <span class="bg-blue">
                                10 Feb. 2014
                              </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                          <i class="fa fa-shopping-cart bg-blue"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 1 Mês atrás</span>

                            <h3 class="timeline-header no-border">Venda Realizada</h3>
                          </div>
                        </li>
                        <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
                </div>
            </div>
          </div>
        <div class="col-md-12">
          <!-- The time line -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
