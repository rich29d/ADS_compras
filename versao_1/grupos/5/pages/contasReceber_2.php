<?php
    include_once("../bancoDados/autenticandoBanco.php");
    $sql = mysqli_query($conexao, "select * from clientes") or die (mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Análises em Aberto</title>
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
      Contas a Receber
      <small>Todo Período</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="box collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Filtro</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group col-md-4">
                        <label>NFe</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-8">
                        <label>Nome Cliente</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Status</label>
                        <select class="form-control">
                            <option>Selecione...</option>
                            <option>Pago</option>
                            <option>Aberto</option>
                            <option>Atraso</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Forma de Pagamento</label>
                        <select class="form-control">
                            <option>Selecione...</option>
                            <option>Á vista</option>
                            <option>Boleto</option>
                            <option>Crédito</option>
                            <option>Cheque</option>
                            <option>Espécie</option>
                        </select>
                    </div>  
                    <div class="form-group col-md-2">
                        <label>Valor da Parcela</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Valor Total</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Data da Venda</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Data do Vencimento</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body no-padding">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>NFe</th>
                    <th>Nome Cliente</th>
                    <th>Tipo Pagamento</th>
                    <th>Parcela</th>
                    <th>Valor Parcela</th>
                    <th>Valor Total</th>
                    <th>Data Venda</th>
                    <th>Vencimento</th>
                    <th>Status</th>
                  </tr>
                  <?php while($linha = mysqli_fetch_array($sql)){ ?> 
                      <?php if ($linha['status'] == "aberto"){?> 
                      <tr>
                        <td><?php echo $linha['nfe']?></td>
                        <td><?php echo $linha['nome']?></td>
                        <td><?php echo $linha['tipoPag']?></td>
                        <td><?php echo $linha['parcela']?></td>
                        <td><?php echo $linha['valorParcela']?></td>
                        <td><?php echo $linha['valorTotal']?></td>
                        <td><?php echo $linha['dataVenda']?></td>
                        <td><?php echo $linha['vencimento']?></td>
                        <td><span class="label label-warning"><?php echo $linha['status']?></span></td>
                      </tr>
                </table>
              </div>
            </div>
          </div>
          <?php }?> 
            
          <?php if ($linha['status'] == "pago"){?> 
              <div class="col-md-12">
            <div class="box box-success">
              <div class="box-body no-padding">
                      <table class="table table-bordered table-striped">
                  <tr>
                    <th>NFe</th>
                    <th>Nome Cliente</th>
                    <th>Tipo Pagamento</th>
                    <th>Parcela</th>
                    <th>Valor Parcela</th>
                    <th>Valor Total</th>
                    <th>Data Venda</th>
                    <th>Vencimento</th>
                    <th>Status</th>
                  </tr>
                      <tr>
                        <td><?php echo $linha['nfe']?></td>
                        <td><?php echo $linha['nome']?></td>
                        <td><?php echo $linha['tipoPag']?></td>
                        <td><?php echo $linha['parcela']?></td>
                        <td><?php echo $linha['valorParcela']?></td>
                        <td><?php echo $linha['valorTotal']?></td>
                        <td><?php echo $linha['dataVenda']?></td>
                        <td><?php echo $linha['vencimento']?></td>
                        <td><span class="label label-warning"><?php echo $linha['status']?></span></td>
                      </tr>
                      </table>
                                 </div>
            </div>
          </div>
                      <?php }?> 
                      
                      <?php if ($linha['status'] == "atraso"){?> 
              <div class="col-md-12">
            <div class="box box-success">
              <div class="box-body no-padding">
                      <table class="table table-bordered table-striped">
                  <tr>
                    <th>NFe</th>
                    <th>Nome Cliente</th>
                    <th>Tipo Pagamento</th>
                    <th>Parcela</th>
                    <th>Valor Parcela</th>
                    <th>Valor Total</th>
                    <th>Data Venda</th>
                    <th>Vencimento</th>
                    <th>Status</th>
                  </tr>
                      <tr>
                        <td><?php echo $linha['nfe']?></td>
                        <td><?php echo $linha['nome']?></td>
                        <td><?php echo $linha['tipoPag']?></td>
                        <td><?php echo $linha['parcela']?></td>
                        <td><?php echo $linha['valorParcela']?></td>
                        <td><?php echo $linha['valorTotal']?></td>
                        <td><?php echo $linha['dataVenda']?></td>
                        <td><?php echo $linha['vencimento']?></td>
                        <td><span class="label label-warning"><?php echo $linha['status']?></span></td>
                      </tr>
                      </table>
                                 </div>
            </div>
          </div>
                      <?php }?> 
                  <?php }?>
                
   
          <div class="col-md-12">
            <div class="box box-warning">
              <div class="box-body no-padding">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>NFe</th>
                    <th>Nome Cliente</th>
                    <th>Tipo Pagamento</th>
                    <th>Parcela</th>
                    <th>Valor Parcela</th>
                    <th>Valor Total</th>
                    <th>Data Venda</th>
                    <th>Vencimento</th>
                    <th>Status</th>
                  </tr>
                  <tr>
                    <td>11111</td>
                    <td>Microsoft</td>
                    <td>Boleto</td>
                    <td>2/3</td>
                    <td>R$300,00</td>
                    <td>R$900,00</td>
                    <td>01/01/2017</td>
                    <td>02/02/2017</td>
                    <td><span class="label label-warning">Aberto</span></td>
                  </tr>
                  <tr>
                    <td>22222</td>
                    <td>Apple</td>
                    <td>Crédito</td>
                    <td>1/3</td>
                    <td>R$100,00</td>
                    <td>R$300,00</td>
                    <td>03/01/2017</td>
                    <td>02/02/2017</td>
                    <td><span class="label label-warning">Aberto</span></td>
                  </tr>
                  <tr>
                  <td>33333</td>
                  <td>Google</td>
                  <td>Cheque</td>
                  <td>3/5</td>
                  <td>R$500,00</td>
                  <td>R$100,00</td>
                  <td>05/01/2017</td>
                  <td>02/02/2017</td>
                  <td><span class="label label-warning">Aberto</span></td>
                </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-danger">
              <div class="box-body no-padding">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>NFe</th>
                    <th>Nome Cliente</th>
                    <th>Tipo Pagamento</th>
                    <th>Parcela</th>
                    <th>Valor Parcela</th>
                    <th>Valor Total</th>
                    <th>Data Venda</th>
                    <th>Vencimento</th>
                    <th>Status</th>
                  </tr>
                  <tr>
                    <td>11111</td>
                    <td>Microsoft</td>
                    <td>Boleto</td>
                    <td>2/3</td>
                    <td>R$300,00</td>
                    <td>R$900,00</td>
                    <td>01/01/2017</td>
                    <td>02/02/2017</td>
                    <td><span class="label label-danger">Atraso</span></td>
                  </tr>
                  <tr>
                    <td>22222</td>
                    <td>Apple</td>
                    <td>Crédito</td>
                    <td>1/3</td>
                    <td>R$100,00</td>
                    <td>R$300,00</td>
                    <td>03/01/2017</td>
                    <td>02/02/2017</td>
                    <td><span class="label label-danger">Atraso</span></td>
                  </tr>
                  <tr>
                  <td>33333</td>
                  <td>Google</td>
                  <td>Cheque</td>
                  <td>3/5</td>
                  <td>R$500,00</td>
                  <td>R$100,00</td>
                  <td>05/01/2017</td>
                  <td>02/02/2017</td>
                  <td><span class="label label-danger">Atraso</span></td>
                </tr>
                </table>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Universidade Cruzeiro do Sul</strong> 2017
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
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Chart Analisese -->
<script>
  $(function () {
    var barChartAnalisesCanvas = $("#barChartAnalises").get(0).getContext("2d");
    var barChartAnalises = new Chart(barChartAnalisesCanvas);
    var barChartAnalisesData = {
      labels: ["Análises"],
      datasets: [
        {
          label: "Jan",
          fillColor: "#F8F8FF",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [100]
        },
        {
          label: "Fev",
          fillColor: "#00c0ef",
          strokeColor: "#0091b4",
          pointColor: "#00c0ef",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [90]
        }
      ]
    };
    barChartAnalisesData.datasets[1].fillColor = "#00c0ef";
    barChartAnalisesData.datasets[1].strokeColor = "#0091b4";
    barChartAnalisesData.datasets[1].pointColor = "#00c0ef";
    var barChartAnalisesOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartAnalisesOptions.datasetFill = false;
    barChartAnalises.Bar(barChartAnalisesData, barChartAnalisesOptions);
  });
</script>
<!-- Chart Abertos -->
<script>
  $(function () {
    var barChartAbertosCanvas = $("#barChartAbertos").get(0).getContext("2d");
    var barChartAbertos = new Chart(barChartAbertosCanvas);
    var barChartAbertosData = {
      labels: ["Abertos"],
      datasets: [
        {
          label: "Jan",
          fillColor: "#F8F8FF",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [150]
        },
        {
          label: "Fev",
          fillColor: "#f39c12",
          strokeColor: "#bb780e",
          pointColor: "#f39c12",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [200]
        }
      ]
    };
    barChartAbertosData.datasets[1].fillColor = "#f39c12";
    barChartAbertosData.datasets[1].strokeColor = "#bb780e";
    barChartAbertosData.datasets[1].pointColor = "#f39c12";
    var barChartAbertosOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartAbertosOptions.datasetFill = false;
    barChartAbertos.Bar(barChartAbertosData, barChartAbertosOptions);
  });
</script>
<!-- Chart Recebidos -->
<script>
  $(function () {
    var barChartRecebidosCanvas = $("#barChartRecebidos").get(0).getContext("2d");
    var barChartRecebidos = new Chart(barChartRecebidosCanvas);
    var barChartRecebidosData = {
      labels: ["Recebimentos"],
      datasets: [
        {
          label: "Jan",
          fillColor: "#F8F8FF",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [200]
        },
        {
          label: "Fev",
          fillColor: "#00a65a",
          strokeColor: "#008649",
          pointColor: "#00a65a",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [150]
        }
      ]
    };
    barChartRecebidosData.datasets[1].fillColor = "#00a65a";
    barChartRecebidosData.datasets[1].strokeColor = "#008649";
    barChartRecebidosData.datasets[1].pointColor = "#00a65a";
    var barChartRecebidosOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartRecebidosOptions.datasetFill = false;
    barChartRecebidos.Bar(barChartRecebidosData, barChartRecebidosOptions);
  });
</script>
<!-- Chart Atrasados -->
<script>
  $(function () {
    var barChartAtrasadosCanvas = $("#barChartAtrasados").get(0).getContext("2d");
    var barChartAtrasados = new Chart(barChartAtrasadosCanvas);
    var barChartAtrasadosData = {
      labels: ["Atrasados"],
      datasets: [
        {
          label: "Jan",
          fillColor: "#F8F8FF",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [250]
        },
        {
          label: "Fev",
          fillColor: "#dd4b39",
          strokeColor: "#9f382c",
          pointColor: "#dd4b39",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [250]
        }
      ]
    };
    barChartAtrasadosData.datasets[1].fillColor = "#dd4b39";
    barChartAtrasadosData.datasets[1].strokeColor = "#9f382c";
    barChartAtrasadosData.datasets[1].pointColor = "#dd4b39";
    var barChartAtrasadosOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartAtrasadosOptions.datasetFill = false;
    barChartAtrasados.Bar(barChartAtrasadosData, barChartAtrasadosOptions);
  });
</script>
</body>
</html>
