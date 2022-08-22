
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ຂໍຂໍ້ມູນ | <?php echo $__env->yieldContent('page_title'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- <link href="<?php echo e(asset('css/navbar.css')); ?>" rel="stylesheet"> -->
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.custom.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/chosen.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.gritter.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.custom.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.gritter.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/select2.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datepicker3.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-editable.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/chosen.min.css')); ?>" />
    <link href="<?php echo e(asset('css/myStyle.css')); ?>" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@700&display=swap" rel="stylesheet">
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style" />
   
   

<style>
body{
  font-family: 'Noto Sans Lao';
  background-image: url('<?php echo e(asset("images/amlio_logo_16.png")); ?>');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('<?php echo e(asset("images/bg-images9.jpeg")); ?>'); background-size: 100%;">
       <div class="container">


          <div class="navbar-header pull-left animated fadeInLeftBig" style="margin: -10px; padding: -10px;">
            <a class="navbar-brand text-en" href="<?php echo e(url('/')); ?>" data-toggle="tooltip" data-placement="right" title="AMLIO" style="margin-top: 14px; font-family: sans-serif; font-size: 48px; font-style: normal; color: #f9fafe;"><strong>AMLIO</strong></a>
                    

             </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation" >
                    <ul class="nav ace-nav">
                           <?php if(Auth::user()->role_idrole == '1'): ?>
             
                      <li class="blue dropdown-modal">
                        <a href="<?php echo e(route('send-report')); ?>">
                            ສ້າງເອກະສານໃຫມ່
                        </a>
                      </li>

                      <li class="blue dropdown-modal">
                        
                        <a href="<?php echo e(route('all-inbox')); ?>">
                            ເອກະສານຂາເຂົ້າທັງຫມົດ
                        </a>
                       
                     
                      </li>

                      <li class="blue dropdown-modal">
                        <a href="<?php echo e(route('all-sent')); ?>">
                            ເອກະສານຂາອອກທັງຫມົດ
                        </a>
                      </li>

             <?php else: ?>

                    <li class="blue dropdown-modal">
                      <!-- Comment -->
                     
                      <!-- stop comment -->
                      
                        <a href="<?php echo e(route('all-user-sent')); ?>">
                            ເອກະສານຂາເຂົ້າທັງຫມົດ
                        </a>
                      </li>

                      <li class="blue dropdown-modal">
                        <a href="<?php echo e(route('all-user-inbox')); ?>">
                            ເອກະສານຂາອອກທັງຫມົດ
                        </a>
                      </li>  
              <?php endif; ?>

                      
                    </ul>
                </div>
       </div>
  </nav>
    <!-- <div style="padding-top: 100px;"></div> -->
<div style="padding-top: 55px;"></div>
    <div class="container">
      <?php echo $__env->yieldContent('content'); ?>
  </div>

    <!-- FOOTER DIV
        ===================================-->
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

  <div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php echo $__env->yieldContent('custom_js'); ?>
  </div>

  </body>
</html>
