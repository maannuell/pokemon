<!DOCTYPE html>
<html>
  <head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema | Panel Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <!--link rel="stylesheet" href="{{asset("fonts/font-awesome.min.css")}}"-->
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("fonts/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("dist/css/skins/_all-skins.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("plugins/iCheck/flat/blue.css")}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset("plugins/morris/morris.css")}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset("plugins/datepicker/datepicker3.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker-bs3.css")}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue-light  sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/consultartipos')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-lg"><b>Pokemon</b>GO</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Plu</b>SIS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
            
              <!-- Tasks: style can be found in dropdown.less -->
             
               
                  
                
               
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset("imagenespoke/usuario.PNG")}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">Integrantes</span>
                </a>
                 <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                     <b> Ingenieria Web</b>

                      <small>Oct. 2016</small>
                      <br>
                      <small>Meza Urias Jose Manuel</small>
                      
                      <small>Villegaz Herrera MIguel</small>
                      <small>Carrasco Orozco Brisa Jazmin</small>
                      <small>Celis Lopez Santos Jonatham</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div>
                      <a href="{{url("/editaritems")}}" class="btn btn-primary">Items</a>
                    </div>
                   
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
           
</header>
      <!-- Left side column. contains the logo and sidebar comienza menu -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu PokemonGo</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-chrome"></i> <span>Tipos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
                 <ul class="treeview-menu">
              @foreach($tipos as $t)
           
                <li class="active"><a href="{{url('/consultarpokemon')}}/{{$t->id}}"><i class="fa fa-circle-o"></i>{{$t->tipo}}</a></l>
               
              
              @endforeach
              </ul>
            </li>
           
           
        
        </section>
        <!-- /.sidebar -->
      </aside>

     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('encabezado')
        <section class="content-header">
          @yield('contenido')
            
            

    </div>
  </div>
  <section>
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://itculiacan.edu.mx">Proyecto Integrador</a>.</strong> All rights reserved.
      </footer>

     <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("plugins\jQueryUI/jquery-ui.min.js")}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset("plugins/raphael-min.js")}}"></script>
    <script src="{{asset("plugins/morris/morris.min.js")}}"></script>
    <!-- Sparkline -->
    <script src="{{asset("plugins/sparkline/jquery.sparkline.min.js")}}"></script>
    <!-- jvectormap -->
    <script src="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
    <script src="{{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset("plugins/knob/jquery.knob.js")}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset("plugins/moment.min.js")}}"></script>
    <script src="{{asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- datepicker -->
    <script src="{{asset("plugins/datepicker/bootstrap-datepicker.js")}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset("plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("plugins/fastclick/fastclick.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("dist/js/app.min.js")}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset("dist/js/pages/dashboard.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("dist/js/demo.js")}}"></script>
  </body>
</html>
