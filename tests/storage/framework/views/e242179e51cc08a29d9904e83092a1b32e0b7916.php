<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMLIO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #426f8c;
                font-family: 'Phetsarath OT', sans-serif;
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
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                        <!-- <a href="<?php echo e(url('/')); ?>">ໜ້າຫຼັກ</a> -->
                        <a href="<?php echo e(url('/reset')); ?>">ປ່ຽນລະຫັດຜ່ານ</a>
                        <a href="<?php echo e(url('/logout')); ?>">ອອກຈາກລະບົບ</a>
                        
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    AMLIO
                </div>

                <div class="links">
                <?php if(Auth::user()->role_idrole == 2): ?>
                  <!-- <a href="<?php echo e(url('menu')); ?>">REPORTS</a> -->

                  <a href="<?php echo e(url('str')); ?>">ລາຍງານ STR ບຸກຄົນ</a>
                  <a href="<?php echo e(url('strent')); ?>">ລາຍງານ STR ນິຕິບຸກຄົນ</a>
				  <a href="<?php echo e(url('ctrviews')); ?>">ລາຍງານ CTR</a>
                  <a href="<?php echo e(url('docviews')); ?>">ລາຍງານອື່ນໆ</a>
                  <a href="<?php echo e(url('strall')); ?>">STR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                  <a href="<?php echo e(url('ctrall_rp')); ?>">CTR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                  <a href="<?php echo e(url('replyviews')); ?>">ແຈ້ງຕອບ</a>
                  <a href="<?php echo e(url('comment')); ?>">ປະກອບຄຳເຫັນ</a>

				 
                <?php else: ?>
                  <a href="<?php echo e(url('/firviews')); ?>">ຄົ້ນຫາ</a>
                  <a href="<?php echo e(url('strall')); ?>">ລາຍງານ STR</a>
                  <a href="<?php echo e(url('ctrall')); ?>">ລາຍງານ CTR</a>
                  <a href="<?php echo e(url('docall')); ?>">ລາຍງານອື່ນໆ</a>
                  <a href="<?php echo e(url('fir')); ?>">ລາຍງານ FIR</a>
                  <a href="<?php echo e(url('viewcbra')); ?>">ລາຍງານ CBR</a>
                  <a href="<?php echo e(url('reply')); ?>">ແຈ້ງຕອບ</a>
                  <a href="<?php echo e(url('replyviews')); ?>">ລາຍການແຈ້ງຕອບ</a>
                  <a href="<?php echo e(url('viewcomment')); ?>">ປະກອບຄຳເຫັນ</a>
                  <!-- <a href="<?php echo e(url('/admin')); ?>">ຄຸ້ມຄອງລະບົບ</a> -->
                <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
