
<?php $__env->startSection('page_title', 'CTR'); ?>
<?php $__env->startSection('content'); ?>


<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('<?php echo e(url( 'images/bg-images11.jpg')); ?>'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ຮ່າງແບບພິມລາຍງານທຸລະກຳມູນຄ່າເກີນກຳນົດ CTR *</strong> </h2>
  </blockquote>
</div>
<br>
<?php if(Session::has('success')): ?>
		<div class="alert alert-success text-center" style="font-size: 30px;">
			<?php echo Session::get('success'); ?>

		</div>
	<?php endif; ?>


	<?php if(Session::has('error')): ?>
		<div class="alert alert-danger  text-center"  style="font-size: 30px;">
			<?php echo Session::get('error'); ?>

		</div>
	<?php endif; ?>
	<div id="accordion" class="accordion-style1 panel-group text-lo">
<!-- Boy added 21 Feb 2022 Validation error  -->
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            
                <h2 class="text-center" style="font-family:phetsarath OT"><?php echo e('ບໍ່ສຳເລັດ!! ໄຟລທີ່ທ່ານອັບໂຫລດບໍ່ຖືກກັບແບບ(Format) ທີ່ ສຕຟງ ກຳນົດໄວ້!! ກະລຸນາກວດຄືນແລ້ວສົ່ງອີກຄັ້ງ'); ?></h2>
           
        </ul>
    </div>
<?php endif; ?> 


<form  class="form-horizontal" method="POST" action=<?php echo e(url('/ctrstore')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
<?php echo e(csrf_field()); ?>

  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ອັບໂຫລດແບບພິມ CTR</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
        <p class="alert alert-info text-lo" style="margin-top: -6px; text-align: justify; text-justify: inter-word; font-size:16px;">
        ກະລຸນາ ສົ່ງແບບພິມການລາຍງານທຸລະກຳມູນຄ່າເກີນກຳນົດ ໃນວັນທີ 5 ຂອງທຸກໆເດືອນ. <br>ກະລຸນາໃສ່ຂໍ້ມູນໃຫ້ຖືກຕ້ອງຕາມແຕ່ລະຊ່ອງຂອງແບບຟອມ ຖ້າເລືອກໄຟລຜິດໃຫ້ກົດປຸ່ມຍົກເລີກຢູ່ດ້ານລຸ່ມ ແລ້ວເລືອກໃຫມ່
        </p>
		

	
	<div id="accordion" class="accordion-style1 panel-group text-lo">


			<!-- <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເນື້ອໃນເອກະສານ</label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-12" name="suspicious_transaction_title" required />
					</div>
			</div> -->
	<!-- Old code name of form suspicious -->
			<!-- <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຫນ້າປົກ CTR:</label>
					<div class="col-sm-8">
						<input type="file" name="suspicious_transaction_describe_file" id="id-input-file-3" required />
					</div>
			</div><br> -->
			

			<!-- <label>
    Choose your preferred party date (required, April 1st to 20th):
    <input type="date" name="party" date_default_timezone_set required>
    <span class="validity"></span>
  </label> -->
			
			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ລາຍງານ CTR ປະຈຳເດືອນ: <span class="badge badge-danger"> (ຕ້ອງໃສ່)</span></label>
					<div class="col-sm-8">
						<input type="month"  id="month" class="col-xs-5" name="ctr_month" required >
					</div>
			</div><br>

			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຫນ້າປົກ CTR: <span class="badge badge-danger"> (ຕ້ອງໃສ່):</span></label>
					<div class="col-sm-8">
						<input type="file" name="ctr_cover" id="id-input-file-2" required >
					</div>
			</div><br>
			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ໄຟລເອກະສານ CTR ບຸກຄົນ <span> (ຖ້າມີ):</span></label>
					<div class="col-sm-8">
						<input type="file" name="ctr_person" id="id-input-file-3" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
					</div>
			</div><br>
			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment" >ໄຟລເອກະສານ CTR ນິຕິບຸກຄົນ<span> (ຖ້າມີ):</span></label>
					<div class="col-sm-8">
						<input type="file" name="ctr_legal" id="id-input-file-4" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
					</div>
			</div><br>
			<div class="form-group">
			<label class="col-sm-8 control-label no-padding-right" for="form-field-comment" style="color:red; font-size:18px;" >ກະລຸນາຕັ້ງຊື່ເອກະສານເປັນພາສາອັງກິດ ແລະ ໃຫ້ສັ້ນກະທັດຮັດທິ່ສຸດ</label>
			
			</div>
      


        <!-- <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <br />
            <p><a href="<?php echo e(url('lawrefer')); ?>">ບາງມາດຕາວ່າດ້ວຍ ການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ສະບັບເລກທີ 50/ສພຊ ລົງວັນທີ 21 ກໍລະກົດ 2014 ທີ່ກ່ຽວກັບມາດຕະການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ.</a></p>
          </div>
				</div> -->

        <div class="clearfix form-actions">
					<div class="col-sm-offset-1 col-sm-10 text-center">
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							ຍົກເລີກ
						</button>
            &nbsp; &nbsp; &nbsp;
            <input type="hidden" name="reporter_idusr" value="<?php echo e(isset($user) ? $user : 1); ?>" />
						<button class="btn btn-primary" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							ສົ່ງລາຍງານ
						</button>
					</div>
				</div>
      </div><!-- end accordion -->
			</div>
		</div>
  </div>
</div>


</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>