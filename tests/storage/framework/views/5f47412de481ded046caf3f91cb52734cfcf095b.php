<?php $__env->startSection('page_title', 'Nationality report'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="<?php echo e(url('images/amlio_logo.png')); ?>" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <?php if(isset($sendto)): ?>
    <div class="alert alert-info">
			<button class="close" data-dismiss="alert">
				<i class="ace-icon fa fa-times"></i>
			</button>
			ສຳເລັດການແຈ້ງຕອບແລ້ວ.
		</div>
    <?php endif; ?>

  <form  class="form-horizontal" method="POST" action=<?php echo e(url('/replystore')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

    <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  			<h4 class="widget-title lighter text-lo" style="color: white;">ໃສ່ລາຍລະອຽດ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ຜູ້ຮັບແຈ້ງຕອບ </label>
                <div class="col-sm-8">
      							<select class="form-control sendto"  name="sendto" id="form-field-select-1" tabindex="1" autofocus required >
                      <option value="">ເລືອກຜູ້ຮັບ</option>
                      <?php $__currentLoopData = $reporters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      								<option value="<?php echo e($reporter->idusr); ?>"><?php echo e($reporter->reporter_name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
      					</div>
              </div>

              <div class="form-group">
      					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ລາຍງານອ້າງອີງ</label>
      					<div class="col-sm-8">
                  <div class="strreport">
                    <label class="col-sm-6 control-label">ກະລຸນາ ເລືອກຜູ້ຮັບລາຍງານຂ້າງເທິງກ່ອນ.</label>
                  </div>

      					</div>
      				</div>

              <div class="form-group">
      					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເຖິງ</label>
      					<div class="col-sm-8">
      						<textarea class="form-control" name="reply_title" id="form-field-8" placeholder="ຕົວຢ່າງ: ທ່ານ ຜູ້ອຳນວຍການທະນາຄານ..." tabindex="2"></textarea>
      					</div>
      				</div>

              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ເລກທີຂາອອກ </label>
                <div class="col-sm-8">
                  <input type="text" name="reply_no" class="col-xs-12" placeholder="ຕົວຢ່າງ: 008/ສຕຟງ" tabindex="3" />
                </div>
              </div>

              <div class="form-group">
                <input type="hidden" name="usr_reply" value="<?php echo e(isset($user) ? $user : 1); ?>" />
                <div class="col-sm-offset-3 col-sm-8 text-right">
                  <button type="reset" class="btn btn-sm btn-default" tabindex="5">ຍົກເລີກ</button>
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="4">ສົ່ງແຈ້ງຕອບ</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
  <div class="row animated fadeInRight">

  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>