<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
            @if (Route::has('login'))
                <div class="top-right links">
                        <!-- <a href="{{ url('/') }}">ໜ້າຫຼັກ</a> -->
                        <div class="btn-group">
                        <a class="btn btn-light " type="button" href="{{ url('/reset') }}">ປ່ຽນລະຫັດຜ່ານ</a>
                        </div>
                        <div class="btn-group">
                        <a class="btn btn-light " type="button" href="{{ url('/logout') }}">ອອກຈາກລະບົບ</a>
                        </div>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    REPORT ONLINE
                </div>

                <div class="links">
                @if (Auth::user()->role_idrole == 2)
                  <!-- <a href="{{ url('menu') }}">REPORTS</a> -->
                
                <!-- Large button groups (default and split) -->
                
                <div class="btn-group">
 
                    <button type="button" class="btn btn-lg btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CTR
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="{{ url('ctrviews') }}">ລາຍງານ CTR</a>
                        <a class="dropdown-item" href="{{ url('ctrall_rp') }}">CTR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                    </div>
                </div>
            
                 

                

                
                @else
               
                <div class="btn-group">
                  <a href="{{ url('ctrall') }}" type="button" class="btn btn-warning">ລາຍງານ CTR</a>
                </div> 
                 
                @endif
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
