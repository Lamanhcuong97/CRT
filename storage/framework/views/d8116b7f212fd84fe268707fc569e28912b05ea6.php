
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
  <form  class="form-horizontal" method="GET" action=<?php echo e(url('ctrstats')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

  <div class="widget-box" >
  		<div class="widget-header widget-header-blue widget-header-flat" >
  			<h4 class="widget-title lighter text-lo">ສັງລວມສະຖິຕິ CTR </h4>

  			<div class="widget-toolbar" >
  			</div>
  		</div>

  		<div class="widget-body" >
  			<div class="widget-main" style="height:300px;" >
  				<div id="fuelux-wizard-container">
  					<div>
</div>
             <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1">ຊື່ຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ  </label>
              <div class="col-sm-6">
              <select name="reporter" class="col-xs-12 col-sm-12" required>
                  <option value="all_re" selected>ເລືອກຫົວຫນ່ວຍທັງຫມົດ</option>
                <?php $__currentLoopData = $reporters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($reporter->idreporter); ?>"><?php echo e($reporter->reporter_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
              </select>
              </div>
            </div> 

              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-2" id="sdate">
                      <input class="input-medium datepicker" name="sdate"  type="date" required>
                  </div>
              
                <label class="col-sm-1 control-label no-padding-right" for="edate">  ເຖິງ</label>
                <div class="col-sm-2" id="sdate">
                      <input class="input-medium datepicker" name="edate"  type="date" required >
                </div>
                <div >
                  <button type="submit" class="btn btn-sm btn-primary" style="width:85px;">ຄົ້ນຫາ</button>
                </div>
                
              </div>
      <br><br><h3 class="text-center" style="font-family:Phetsarath OT">ກະລຸນາເລືອກຊື່ຫົວຫນ່ວຍ ແລະ ໄລຍະເວລາ ເພື່ອຄົ້ນຫາສະຖິຕິ</h3>

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

<?php echo $__env->make('layouts.main_ctrstats', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>