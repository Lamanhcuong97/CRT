
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>STR | @yield('page_title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"> -->
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.gritter.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.gritter.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-editable.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}" />
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@700&display=swap" rel="stylesheet">
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
<style>
body{
  font-family: 'Noto Sans Lao';
  background-image: url('{{ asset("images/amlio_logo_16.png") }}');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url('{{ asset("images/bg-images9.jpeg") }}'); background-size: 100%;">
            <div class="container">


                <div class="navbar-header pull-left animated fadeInLeftBig" style="margin: -10px; padding: -10px;">
                    <a class="navbar-brand text-en" href="{{ url('/') }}" data-toggle="tooltip" data-placement="right" title="AMLIO" style="margin-top: 14px; font-family: sans-serif; font-size: 48px; font-style: normal; color: #f9fafe;"><strong>AMLIO</strong></a>
                    <!-- <img src="{{ url('images/amlio_logo.png') }}" width="39" style="margin-top: -10px;"/> -->

                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation" >
                    <ul class="nav ace-nav">
                      @if(Auth::user()->role_idrole == '1')
                      <li class="blue dropdown-modal">
          							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            ??????????????????
                            <i class="ace-icon fa fa-caret-down"></i>
          							</a>

          							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
          								<li class="dropdown-content">
          									<ul class="dropdown-menu dropdown-navbar">
          										<li>
          											<a href="{{ url('/firviews')}}">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-user-secret"></i>&nbsp;????????????????????????????????? FIR</strong></span>
          												</div>
          											</a>
          										</li>

                              <li>
          											<a href="{{ url('/strdetails')}}">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-file-text-o"></i>&nbsp;??????????????????????????????????????????</strong></span>
          												</div>
          											</a>
          										</li>

                              <!-- <li>
          											<a href="/strreporters">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-bank"></i>&nbsp;????????????????????????????????????</strong></span>
          												</div>
          											</a>
          										</li>

                              <li>
          											<a href="/strbranchs">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-sitemap"></i>&nbsp;?????????????????????????????????</strong></span>
          												</div>
          											</a>
          										</li> -->

                              <li>
          											<a href="{{ url('/nat')}}">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-globe"></i>&nbsp;??????????????????</strong></span>
          												</div>
          											</a>
          										</li>

                              <li>
          											<a href="{{ url('/strcharts')}}">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-pie-chart"></i>&nbsp;??????????????????</strong></span>
          												</div>
          											</a>
          										</li>

          									</ul>
          								</li>
          							</ul>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="{{ url('/strall')}}">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ???????????????????????????????????????????????????????????????
          							</a>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="{{ url('/fir')}}">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ?????????????????????????????????????????????????????????????????????????????????
          							</a>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="{{ url('/ctrall')}}">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ?????????????????????????????????????????????????????????
          							</a>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="{{ url('/replyviews')}}">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ???????????????????????????????????????
          							</a>
          						</li>

                      <!-- <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="{{ url('/admin/user')}}">
          								 <i class="ace-icon fa fa-tasks"></i>
                            ????????????????????????????????????
          							</a>
          						</li> -->

                      @else
                      <li class="blue dropdown-modal">
          							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            ????????????????????????????????????
                            <i class="ace-icon fa fa-caret-down"></i>
          							</a>

          							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
          								<li class="dropdown-content">
          									<ul class="dropdown-menu dropdown-navbar">
                              <li>
                                <a href="{{ url('/str')}}">
                                  <div class="clearfix">

          													<span class="pull-left"><strong><i class="fa fa-user-secret"></i>&nbsp;??????????????????</strong></span>
          												</div>
                                </a>
                              </li>

          										<li>
          											<a href="{{ url('/strent')}}">
          												<div class="clearfix">

          													<span class="pull-left"><strong><i class="fa fa-bank"></i>&nbsp;??????????????????????????????</strong></span>
          												</div>
          											</a>
          										</li>
          									</ul>
          								</li>
          							</ul>
          						</li>

                      <li class="blue dropdown-modal">
                        <a class="dropdown-toggle" href="{{ url('/strall')}}">
                          <!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ?????????????????????????????????????????????
                        </a>
                      </li>

                      <li class="blue dropdown-modal">
                        <a class="dropdown-toggle" href="{{ url('/replyviews')}}">
                          <!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ???????????????????????????????????????
                        </a>
                      </li>
                      @endif
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
                                        ???????????????????????????????????????
                                    </a>
                                </li>


                                <li class="divider"></li>

                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        ????????????????????????
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
                    <p class="text-info text-center text-lo">Suspicious Transaction Report Online ?? 2017 <?php $thisy = date('Y'); if($thisy > '2017'){ echo ' - ' . $thisy; } ?><br />AMLIO</p>
                </div>
                <div class="space-32"></div>
            </div>
        </footer>

        <!-- END FOOTER STICKY
        =========================-->

        <script type="text/javascript">
    			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    		</script>


    <!-- <script src="{{ asset('js/myScript.js') }}"></script> -->
    <!-- <script src="{{ asset('js/clocks.js') }}"></script> -->
    <!-- <script src="{{ asset('js/my.jQuery.js') }}"></script> -->
    <!-- <script src="{{ asset('js/quickEdit.js') }}"></script> -->


    <script src="{{ asset('js/jquery2_1_4.min.js') }}"></script>
    <script src="{{ asset('js/jquery.youi.min.js') }}"></script>
    <!-- <script src="../assets/js/jquery-3.2.1.slim.min.js"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>

    <!-- page specific plugin scripts -->

    <script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('js/jquery.gritter.min.js') }}"></script>
    <script src="{{ asset('js/bootbox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hotkeys.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/fuelux.spinner.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('js/ace-editable.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>


    <!-- ace scripts -->
    <script src="{{ asset('js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('js/ace.min.js') }}"></script>

    <script src="{{ asset('js/pace.min.js') }}"></script>
    <!--<script src="../assets/js/wow.min.js"></script>-->

    <!-- Slick -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript">
    jQuery(function ($) {

      ////////////////////////////////////
      ////// Added by Youi 20171130 //////
      ////////////////////////////////////
        $('#dob, #card-issue-1').find('input[type=file]').ace_file_input().end().find('button[type=reset]').on(ace.click_event, function () {
            $('#dob, #card-issue-1 input[type=file]').ace_file_input('reset_input');
        }).end().find('.date-picker').datepicker({autoclose: true, startDate: '01-01-2008', todayBtn: "linked", calendarWeeks: true, keyboardNavigation: false, forceParse: false}).next().on(ace.click_event, function () {
            $(this).prev().focus();
        });
        //////////////////////////
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'??????????????????????????????????????????????????????????????????????????? PDF ????????? ????????????????????????????????????????????? !!',
					btn_choose:'???????????????',
					btn_change:'????????????',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});

        $('#id-input-file-3, #id-input-file-4').ace_file_input({
					no_file:'?????????????????????????????????????????? Excel ???????????????????????????!!',
					btn_choose:'???????????????',
					btn_change:'????????????',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
////////////////////////////////////////////////


    });

    ///////////////////////////////////////////
    $(document).ready(function(){
      $(document).on('change', '.province', function(){
        var province_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxprovince',
          data:{'id':province_id},
          success:function(data){
            op+='<option value="0" selected>???????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].iddistrict+'">'+data[i].district_name+'</option>';
            }
            $('.district').html(op);

          },
          error:function(){
            console.log('error der');
          }
        });
      });
      $(document).on('change', '.province1', function(){
        var province1_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxprovince',
          data:{'id':province1_id},
          success:function(data){
            op+='<option value="0" selected>???????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].iddistrict+'">'+data[i].district_name+'</option>';
            }
            $('.district1').html(op);

          }
        });
      });
      $(document).on('change', '.province2', function(){
        var province2_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxprovince',
          data:{'id':province2_id},
          success:function(data){
            op+='<option value="0" selected>???????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].iddistrict+'">'+data[i].district_name+'</option>';
            }
            $('.district2').html(op);

          }
        });
      });
      $(document).on('change', '.province3', function(){
        var province3_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxprovince',
          data:{'id':province3_id},
          success:function(data){
            op+='<option value="0" selected>???????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].iddistrict+'">'+data[i].district_name+'</option>';
            }
            $('.district3').html(op);

          }
        });
      });
///////////////////////////////////////////////////////////////////////
      $(document).on('change', '.district', function(){
        var district_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxdistrict',
          data:{'id':district_id},
          success:function(data){
            op+='<option value="0" selected>????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].idvillage+'">'+data[i].village_name+'</option>';
            }
            $('.village').html(op);
          }
        });
      });
      $(document).on('change', '.district1', function(){
        var district1_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxdistrict',
          data:{'id':district1_id},
          success:function(data){
            op+='<option value="0" selected>????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].idvillage+'">'+data[i].village_name+'</option>';
            }
            $('.village1').html(op);
          }
        });
      });
      $(document).on('change', '.district2', function(){
        var district2_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxdistrict',
          data:{'id':district2_id},
          success:function(data){
            op+='<option value="0" selected>????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].idvillage+'">'+data[i].village_name+'</option>';
            }
            $('.village2').html(op);
          }
        });
      });
      $(document).on('change', '.district3', function(){
        var district3_id=$(this).val();
        var op='';
        $.ajax({
          type:'get',
          url:'ajaxdistrict',
          data:{'id':district3_id},
          success:function(data){
            op+='<option value="0" selected>????????????</option>';
            for(var i=0;i<data.length;i++){
              op+='<option value="'+data[i].idvillage+'">'+data[i].village_name+'</option>';
            }
            $('.village3').html(op);
          }
        });
      });
      ////////////////////////////////////
      $(document).on('change', '.sendto', function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
          var sendto = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
          //var dataString = "sendto="+sendto; /* STORE THAT TO A DATA STRING */
          
          var rad='';
          $.ajax({ /* THEN THE AJAX CALL */
            type: 'get', /* TYPE OF METHOD TO USE TO PASS THE DATA */
            url: 'ajaxstrreport', /* PAGE WHERE WE WILL PASS THE DATA */
            data: {'id':sendto}, /* THE DATA WE WILL BE PASSING */
            success: function(data){ /* GET THE TO BE RETURNED DATA */

              for(var i=0;i<data.length;i++){
                rad+='&nbsp;<input type="checkbox" name="'+data[i].str_form_reporter_name+data[i].idstr_form+'" value="'+data[i].str_no+'" checked="" disabled="" />&nbsp;'+data[i].str_no;
              }
              $('.strreport').html(rad); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
            }
          });

        });

    });

</script>

  </body>
</html>
