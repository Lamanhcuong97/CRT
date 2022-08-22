
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>STR | <?php echo $__env->yieldContent('page_title'); ?></title>

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
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style" />
<style>
body{
  font-family: 'Phetsarath OT';
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
                    <!-- <a class="navbar-brand text-en" href="<?php echo e(url('/')); ?>" data-toggle="tooltip" data-placement="right" title="STR" style="margin-top: 23px; font-family: sans-serif; font-size: 13px; color: #601020; margin-left: -55px;"><small>STR</small></a> -->

                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation" >
                    <ul class="nav ace-nav">
                      <?php if(Auth::user()->role_idrole == '1'): ?>
                      <li class="blue dropdown-modal">
          							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            ຄົ້ນຫາ
                            <i class="ace-icon fa fa-caret-down"></i>
          							</a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
          								<li class="dropdown-content">
          									<ul class="dropdown-menu dropdown-navbar">
          										<li>
          											<a href="<?php echo e(url('/firviews')); ?>">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-user-secret"></i>&nbsp;ເບິ່ງລາຍງານ FIR</strong></span>
          												</div>
          											</a>
          										</li>

                              <li>
          											<a href="<?php echo e(url('/strdetails')); ?>">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-file-text-o"></i>&nbsp;ລາຍລະອຽດ</strong></span>
          												</div>
          											</a>
          										</li>

                              <!-- <li>
          											<a href="/strreporters">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-bank"></i>&nbsp;ບັນດາທະນາຄານ</strong></span>
          												</div>
          											</a>
          										</li>

                              <li>
          											<a href="/strbranchs">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-sitemap"></i>&nbsp;ສາຂາທະນາຄານ</strong></span>
          												</div>
          											</a>
          										</li>

                              <li> -->
          											<a href="<?php echo e(url('/nat')); ?>">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-globe"></i>&nbsp;ສັນຊາດ</strong></span>
          												</div>
          											</a>
          										</li>

                              <li>
          											<a href="<?php echo e(url('/strcharts')); ?>">
          												<div class="clearfix">

          													<span class="pull-left" style="margin-top: -3px; margin-bottom: -3px;"><strong><i class="fa fa-pie-chart"></i>&nbsp;ສະຖິຕິ</strong></span>
          												</div>
          											</a>
          										</li>

          									</ul>
          								</li>
          							</ul>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="<?php echo e(url('/strall')); ?>">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ລາຍງານທຸລະກຳທີ່ໄດ້ຮັບ
          							</a>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="<?php echo e(url('/fir')); ?>">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ລາຍງານຂ່າວກອງທາງດ້ານການເງິນ
          							</a>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="<?php echo e(url('/ctrall')); ?>">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ລາຍງານທຸລະກຳເງິນສົດ
          							</a>
          						</li>

                      <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="<?php echo e(url('/replyviews')); ?>">
          								<!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ລາຍການແຈ້ງຕອບ
          							</a>
          						</li>

                      <!-- <li class="blue dropdown-modal">
          							<a class="dropdown-toggle" href="<?php echo e(url('/admin/user')); ?>">
          								 <i class="ace-icon fa fa-tasks"></i> 
                            ຄຸ້ມຄອງລະບົບ
          							</a>
          						</li> -->

                      <?php else: ?>
                      <li class="blue dropdown-modal">
          							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            ລາຍງານທຸລະກຳ
                            <i class="ace-icon fa fa-caret-down"></i>
          							</a>

          							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
          								<li class="dropdown-content">
          									<ul class="dropdown-menu dropdown-navbar">
                              <li>
                                <a href="<?php echo e(url('/str')); ?>">
                                  <div class="clearfix">

          													<span class="pull-left"><strong><i class="fa fa-user-secret"></i>&nbsp;ບຸກຄົນ</strong></span>
          												</div>
                                </a>
                              </li>

          										<li>
          											<a href="<?php echo e(url('/strent')); ?>">
          												<div class="clearfix">

          													<span class="pull-left"><strong><i class="fa fa-bank"></i>&nbsp;ນິຕິບຸກຄົນ</strong></span>
          												</div>
          											</a>
          										</li>
          									</ul>
          								</li>
          							</ul>
          						</li>

                      <li class="blue dropdown-modal">
                        <a class="dropdown-toggle" href="<?php echo e(url('/strall')); ?>">
                          <!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ທຸລະກຳທີ່ລາຍງານ
                        </a>
                      </li>

                      <li class="blue dropdown-modal">
                        <a class="dropdown-toggle" href="<?php echo e(url('/replyviews')); ?>">
                          <!-- <i class="ace-icon fa fa-tasks"></i> -->
                            ລາຍການແຈ້ງຕອບ
                        </a>
                      </li>
                      <?php endif; ?>

                      <li class="dropdown-modal">
                          <a data-toggle="dropdown" href="#" class="dropdown-toggle"  style="background-color: #f9fafe!important;">
                              <i class="fa fa-user bigger-160" style="color: #426f8c!important;"></i>
                              <span class="user-info">
                                                                  </span>

                              <i class="ace-icon fa fa-caret-down" style="color: #426f8c!important;"></i>
                          </a>

                          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                              <li>
                                  <a href="<?php echo e(url('/reset')); ?>">
                                      <i class="ace-icon fa fa-key"></i>
                                      ປ່ຽນລະຫັດຜ່ານ
                                  </a>
                              </li>


                              <li class="divider"></li>

                              <li>
                                  <a href="<?php echo e(url('/logout')); ?>">
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

        <script type="text/javascript">
    			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo e(asset('assets/js/jquery.mobile.custom.min.js')); ?>'>"+"<"+"/script>");
    		</script>


    <!-- <script src="<?php echo e(asset('js/myScript.js')); ?>"></script> -->
    <!-- <script src="<?php echo e(asset('js/clocks.js')); ?>"></script> -->
    <!-- <script src="<?php echo e(asset('js/my.jQuery.js')); ?>"></script> -->
    <!-- <script src="<?php echo e(asset('js/quickEdit.js')); ?>"></script> -->


    <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo e(asset('assets/js/jquery.mobile.custom.min.js')); ?>'>"+"<"+"/script>");
		</script>
    <script src="<?php echo e(asset('js/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- dataTables -->
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- ace scripts -->
    <script src="<?php echo e(asset('js/ace-elements.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ace.min.js')); ?>"></script>
    <script type="text/javascript">
    jQuery(function($) {

      ////////////////////////////////////
      ////// Added by Youi 20180613 //////
      ////////////////////////////////////
      //initiate dataTables plugin
      var myTable =
      $('#dynamic-table')
      //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
      .DataTable( {
        bAutoWidth: false,
        "aoColumns": [
           null, null, null, null, null, null, null
        ],
        "aaSorting": [],


        //"bProcessing": true,
            //"bServerSide": true,
            //"sAjaxSource": "http://127.0.0.1/table.php"	,

        //,
        //"sScrollY": "200px",
        //"bPaginate": false,

        //"sScrollX": "100%",
        //"sScrollXInner": "120%",
        //"bScrollCollapse": true,
        //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
        //you may want to wrap the table inside a "div.dataTables_borderWrap" element

        //"iDisplayLength": 50


        select: {
          style: 'multi'
        }
        } );

				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
            {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },

					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );




    })

</script>

  </body>
</html>
