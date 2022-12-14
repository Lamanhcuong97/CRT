
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AMLIO</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/myStyle.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datepicker3.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('css/mainindex.css')); ?>" />
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style" />
    <!--<link href="<?php echo e(asset('css/ace-skins.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/ace-rtl.min.css')); ?>" rel="stylesheet" />-->
    <link href="<?php echo e(asset('css/myStyle.css')); ?>" rel="stylesheet" />
<style rel="stylesheet" >
body{
  font-family: 'Phetsarath OT';
  background-image: url("<?php echo e(asset('/images/amlio_logo_16.png')); ?>");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  font-family: "Phetsarath OT";
}
</style>

<script src="<?php echo e(asset('js/ace-extra.min.js')); ?>"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('<?php echo e(asset('/images/bg-images9.jpeg')); ?>'); background-size: 100%;">
            <div class="container">


                <div class="navbar-header pull-left animated fadeInLeftBig" style="margin: -10px; padding: -10px;">
                    <a class="navbar-brand text-en" href="<?php echo e(url('/')); ?>" data-toggle="tooltip" data-placement="right" title="AMLIO" style="margin-top: 14px; font-family: sans-serif; font-size: 48px; font-style: normal; color: #f9fafe;"><strong>AMLIO
                      <!-- <img src="<?php echo e(url('/images/amlio_logo.png')); ?>" width="39" style="margin-top: -10px;"/> -->
                    </strong></a>
                    <!-- <a class="navbar-brand text-en" href="<?php echo e(url('/')); ?>" data-toggle="tooltip" data-placement="right" title="STR" style="margin-top: 23px; font-family: sans-serif; font-size: 13px; color: #601020; margin-left: -55px;"><small>STR</small></a> -->

                </div>


            </div>
        </nav>
    <!-- <div style="padding-top: 100px;"></div> -->
<div style="padding-top: 55px;"></div>
    <div class="container">
      <?php echo $__env->yieldContent('content'); ?>
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
                    <p class="text-info text-center text-lo" >Anti-Money Laundering Intelligence Systems  ?? 2018 <?php $thisy = date('Y'); if($thisy > '2017'){ echo ' - ' . $thisy; } ?><br />AMLIO</p>
                    <p class="text-danger text-center text-lo" >?????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????? : 021 264506 ????????? 020 94424771</p>
                </div>
                <div class="space-32"></div>
            </div>
        </footer>

        <!-- END FOOTER STICKY
        =========================-->

    <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
    <script src="<?php echo e(asset('js/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- dataTables -->
    <script src="<?php echo e(asset('js/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- ace scripts -->
    <script src="<?php echo e(asset('js/ace-elements.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ace.min.js')); ?>"></script>
    <!-- inline scripts related to this page -->




  </body>
</html>
