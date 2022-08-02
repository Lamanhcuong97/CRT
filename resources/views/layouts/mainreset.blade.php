
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AMLIO | Reset Password</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/myStyle.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/mainindex.css') }}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <!--<link href="{{ asset('css/ace-skins.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ace-rtl.min.css') }}" rel="stylesheet" />-->
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet" />
<style rel="stylesheet" >
body{
  font-family: 'Phetsarath OT';
  background-image: url("{{ url('/images/amlio_logo_16.png')}}");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  font-family: "Phetsarath OT";
}
</style>

<script src="{{ asset('js/ace-extra.min.js') }}"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('{{ asset('/images/bg-images9.jpeg')}}'); background-size: 100%;">
            <div class="container">


                <div class="navbar-header pull-left animated fadeInLeftBig" style="margin: -10px; padding: -10px;">
                    <a class="navbar-brand text-en" href="" data-toggle="tooltip" data-placement="right" title="AMLIO" style="margin-top: 14px; font-family: sans-serif; font-size: 48px; font-style: normal; color: #f9fafe;"><strong>AMLIO</strong></a>
                    <!-- <a class="navbar-brand text-en" href="{{ url('/') }}" data-toggle="tooltip" data-placement="right" title="STR" style="margin-top: 23px; font-family: sans-serif; font-size: 13px; color: #601020; margin-left: -55px;"><small>STR</small></a> -->

                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation" >
                    <ul class="nav ace-nav">
                        <li class="dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"  style="background-color: #f9fafe!important;">
                                <i class="fa fa-user bigger-160" style="color: #426f8c!important;"></i>
                                <span class="user-info">
                                                                    </span>

                                <i class="ace-icon fa fa-caret-down" style="color: #426f8c!important;"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="{{ url('/reset') }}">
                                        <i class="ace-icon fa fa-key"></i>
                                        ປ່ຽນລະຫັດຜ່ານ
                                    </a>
                                </li>


                                <li class="divider"></li>

                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        ປິດລະບົບ
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- <div style="padding-top: 100px;"></div> -->
<div style="padding-top: 55px;"></div>
    <div class="container">
      @yield('content')
    </div>

    <!--=========== FOOTER DIV =================-->
        <footer class="color-root">
            <div class="container">
                <div class="space-10"></div>
                <div class="hr hr2 hr-double"></div>
                <div class="space-10"></div>
            </div>
            <div class="container">
                <div class="space-10"></div>
                <div class="container footer-root">
                    <p class="text-info text-center text-lo">Suspicious Transaction Report Online © 2017 <?php $thisy = date('Y'); if($thisy > '2017'){ echo ' - ' . $thisy; } ?><br />AMLIO</p>
                </div>
                <div class="space-32"></div>
            </div>
        </footer>

        <!-- END FOOTER STICKY
        =========================-->

    <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- dataTables -->
    <!-- ace scripts -->
    <script src="{{ asset('js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('js/ace.min.js') }}"></script>
    <!-- inline scripts related to this page -->




  </body>
</html>
