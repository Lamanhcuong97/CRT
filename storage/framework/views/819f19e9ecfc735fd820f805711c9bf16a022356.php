<?php $__env->startSection('page_title', 'Comment report'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-5"></div>





  <div >
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  	 
     
      <div class="row">
  <div class="col-md-12">
  <form  class="form-horizontal" method="GET" action=<?php echo e(url('ctrlegalsearch')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

  <div class="widget-box" >
  		<div class="widget-header widget-header-blue widget-header-flat" >
  			<h4 class="widget-title lighter text-lo" style="font-family:Phetsarath OT">ການຄົ້ນຫາຂໍ້ມູນ CTR ນິຕິບຸກຄົນ </h4>

  			<div class="widget-toolbar" >
  			</div>
  		</div>

  		<div class="widget-body" >
  			<div class="widget-main" style="height:auto;" >
  				<div id="fuelux-wizard-container">
  					<div>
</div>
             

              <div class="form-group ">
                <label class="col-sm-1 control-label no-padding-right" for="name"></label>
                <div  id="sdate">
                      <input name="business_name" class="col-lg-4" type="text" placeholder="ຄົ້ນຫາຕາມຊື່ນິຕິບຸກຄົນ" >
                  </div>
              
                <label class="col-sm-2 control-label no-padding-right" for="identity_card"></label>
                <div id="sdate">
                      <input name="license_no" class="col-lg-4"  type="text" placeholder="ຄົ້ນຫາຕາມເລກທະບຽນວິສາຫະກິດ"   >
                </div><br><br>
                <div class="text-center">
                  <button type="submit" class="btn btn-sm btn-primary" style="width:85px;">ຄົ້ນຫາ</button>
                </div>
                
              </div>
<!-- comment  -->



              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>
</div>

    
    </div>
  </div>
  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_ctrlegalstats', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>