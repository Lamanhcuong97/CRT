
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>AMLIO | Admin</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/myStyle.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datepicker3.min.css')); ?>" />
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style" />
    <!--<link href="<?php echo e(asset('css/ace-skins.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/ace-rtl.min.css')); ?>" rel="stylesheet" />-->
    <link href="<?php echo e(asset('css/myStyle.css')); ?>" rel="stylesheet" />
<style rel="stylesheet" >
body{
  font-family: 'Phetsarath OT';
  background-image: url("<?php echo e(url('/images/amlio_logo_16.png')); ?>");
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
<!-- 
                            <li>
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
                            </li> -->

                            <li>
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
    <!-- inline scripts related to this page -->
		<script type="text/javascript">
			$(document).ready(function(){

				var myTable =
				$('#dynamic-table').DataTable();




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

				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});


				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {

					defaultColvisAction(e, dt, button, config);


					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});

				////

				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);





				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );




				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});

				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});



				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});



				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});





				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}




				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/





				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/


			});

	$(document).on('click', '.form_sub', function () {
		var form = $('#form_add');
		var action = $(this).data('action');
		form.attr('action', action);
		form.submit();
	});
	$(document).on('click', '.btn-del', function () {
		if (confirm("ເຈົ້າໝັ້ນໃຈລຶບຂໍ້ມູນນີ້ ແທ້ ຫຼື ບໍ່ ?") == true){
			return true;
		}else{
			return false;
		}
	});

	$(document).on('change', '#reporter_type_idreporter_type', function () {
		if($(this).val() != 1){
			$('#bank_group_idbank_group').attr("disabled", true);
		}else{
			$('#bank_group_idbank_group').attr("disabled", false);
		}
		//alert($(this).val());
	});
	</script>



  </body>
</html>
