<!DOCTYPE HTML>
<html>
<head>
<title>Carrito de comparas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{asset('js/jquery.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>
<!-- Mainly scripts -->
<script src="{{asset('js/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/screenfull.js')}}"></script>
<!--scrolling js-->
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!--//scrolling js-->
<script>
$(function () {
    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
    if (!screenfull.enabled) {
        return false;
    }
    $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
    });
});
</script>
</head>
<body>
<div id="wrapper">
    <!----->
     <nav class="navbar-default navbar-static-top" role="navigation">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
            <h1> <a class="navbar-brand" href="index.html">Administrador</a></h1>         
                        </div>
                      <div class=" border-bottom">
             <div class="full-left">
         <div class="clearfix"> </div>
        </div>
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="clearfix"></div>
         <div class="navbar-default sidebar" role="navigation">
             <div class="sidebar-nav navbar-collapse">
                 <ul class="nav" id="side-menu">
                      <li>
                         <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Mantenimientos</span><span class="fa arrow"></span>
                         </a>
                         <ul class="nav nav-second-level">
                             <li><a href="{{ url('/producto') }}" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Libros</span> </a></li>
                             <li><a href="{{ url('/categoria') }}" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>Categorias</a></li>
                             <li><a href="editar.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Usuarios</a></li>
                        </ul>
                     </li>
                 </ul>               
             </div>
         </div>
     </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
           @yield('content')
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!---->
</body>
</html>