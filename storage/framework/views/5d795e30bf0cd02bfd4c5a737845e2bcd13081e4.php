<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMLIO</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #426f8c;
                font-family: 'Noto Sans Lao', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                /*background-image: url('images/amlio_logo_16.png');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;*/
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #426f8c;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="container" >
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                        <!-- <a href="<?php echo e(url('/')); ?>">ໜ້າຫຼັກ</a> -->
                        <div class="btn-group">
                        <a class="btn btn-light " type="button" href="<?php echo e(url('/reset')); ?>">ປ່ຽນລະຫັດຜ່ານ</a>
                        </div>
                        <div class="btn-group">
                        <a class="btn btn-light " type="button" href="<?php echo e(url('/logout')); ?>">ອອກຈາກລະບົບ</a>
                        </div>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    AMLIO
                </div>

                <div class="links">
                <?php if(Auth::user()->role_idrole == 2): ?>
                  <!-- <a href="<?php echo e(url('menu')); ?>">REPORTS</a> -->
                
                <!-- Large button groups (default and split) -->
                <div class="btn-group">
                    <button class="btn btn-danger btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        STR
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?php echo e(url('str')); ?>">ລາຍງານ STR ບຸກຄົນ</a>
                                            <a class="dropdown-item" href="<?php echo e(url('strent')); ?>">ລາຍງານ STR ນິຕິບຸກຄົນ</a>
                                            <a class="dropdown-item" href="<?php echo e(url('strall')); ?>">STR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                    </div>
                </div>
                <div class="btn-group">
 
                    <button type="button" class="btn btn-lg btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CTR
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="<?php echo e(url('ctrviews')); ?>">ລາຍງານ CTR</a>
                        <a class="dropdown-item" href="<?php echo e(url('ctrall_rp')); ?>">CTR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                    </div>
                </div>
                <div class="btn-group">
                    <a class="btn btn-primary btn-lg " type="button" href="<?php echo e(url('all-user-sent')); ?>" >  ສະຫນອງຂໍ້ມູນ</a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-info btn-lg " type="button" href="<?php echo e(url('docviews')); ?>" >   ລາຍງານອື່ນໆ</a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-secondary btn-lg " type="button" href="<?php echo e(url('replyviews')); ?>" >   ແຈ້ງຕອບ</a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-secondary btn-lg " type="button" href="<?php echo e(url('comment')); ?>" >   ປະກອບຄຳເຫັນ</a>
                </div>
                  <!-- <a href="<?php echo e(url('str')); ?>">ລາຍງານ STR ບຸກຄົນ</a>
                  <a href="<?php echo e(url('strent')); ?>">ລາຍງານ STR ນິຕິບຸກຄົນ</a>
				  <a href="<?php echo e(url('ctrviews')); ?>">ລາຍງານ CTR</a>
				  <a href="<?php echo e(url('all-user-sent')); ?>">ສະຫນອງຂໍ້ມູນ</a>
                  <a href="<?php echo e(url('docviews')); ?>">ລາຍງານອື່ນໆ</a>
                  <a href="<?php echo e(url('strall')); ?>">STR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                  <a href="<?php echo e(url('ctrall_rp')); ?>">CTR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                  <a href="<?php echo e(url('replyviews')); ?>">ແຈ້ງຕອບ</a>
                  <a href="<?php echo e(url('comment')); ?>">ປະກອບຄຳເຫັນ</a> -->

                

                
                <?php else: ?>
                <div class="btn-group">
                  <a href="<?php echo e(url('/firviews')); ?>" type="button" class="btn btn-secondary" >ຄົ້ນຫາ</a>
                </div>
                <div class="btn-group">
                  <a href="<?php echo e(url('strall')); ?>" type="button" class="btn btn-danger">ລາຍງານ STR</a>
                </div>
                <div class="btn-group">
                  <a href="<?php echo e(url('ctrall')); ?>" type="button" class="btn btn-warning">ລາຍງານ CTR</a>
                </div> 
                <div class="btn-group"> 
                  <a href="<?php echo e(url('viewcbra')); ?>" type="button" class="btn btn-success">ລາຍງານ CBR</a>
                </div>  
                <div class="btn-group">  
				  <a href="<?php echo e(route('send-report')); ?>" type="button" class="btn btn-primary">ຂໍຂໍ້ມູນ RE</a>
                </div> 
                <div class="btn-group">     
                  <a href="<?php echo e(url('docall')); ?>" type="button" class="btn btn-info">ລາຍງານອື່ນໆ</a>
                </div> 
                <div class="btn-group">        
                  <a href="<?php echo e(url('fir')); ?>" type="button" class="btn btn-dark">ລາຍງານ FIR</a>
                </div>  
                  <div class="btn-group">
 
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ການແຈ້ງຕອບ
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="<?php echo e(url('reply')); ?>">ແຈ້ງຕອບ</a>
                        <a class="dropdown-item" href="<?php echo e(url('replyviews')); ?>">ລາຍການແຈ້ງຕອບ</a>
                        <a class="dropdown-item" href="<?php echo e(url('viewcomment')); ?>">ຄຳເຫັນຈາກ RE</a>
                    </div>
                </div>
                  <!-- <a href="<?php echo e(url('reply')); ?>" type="button" class="btn btn-outline-secondary">ແຈ້ງຕອບ</a>
                  <a href="<?php echo e(url('replyviews')); ?>" type="button" class="btn btn-outline-secondary">ລາຍການແຈ້ງຕອບ</a>
                  <a href="<?php echo e(url('viewcomment')); ?>" type="button" class="btn btn-outline-secondary">ປະກອບຄຳເຫັນ</a> -->
                  <!-- <a href="<?php echo e(url('/admin')); ?>" type="button" class="btn btn-outline-secondary">ຄຸ້ມຄອງລະບົບ</a> -->
                <?php endif; ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
