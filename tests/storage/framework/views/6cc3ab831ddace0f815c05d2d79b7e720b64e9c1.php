
<?php $__env->startSection('page_title', 'receive report'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<div class="center animated fadeInDown">
  <img src="<?php echo e(url('images/amlio_logo.png')); ?>" width="140" style="margin-top: -10px;"/>
</div>
<div class="space-10"></div>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ຮ່າງແບບພິມລາຍງານທຸລະກຳທີ່ມີລັກສະນະພາໃຫ້ສົງໄສ ສຳລັບຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ *</strong> </h2>
  </blockquote>
</div>


<form  class="form-horizontal" method="POST" action="<?php echo e(url('/strstore')); ?>" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
<?php echo e(csrf_field()); ?>

  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ແບບພິມລາຍງານ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
        <p class="alert alert-info text-lo" style="margin-top: -6px; text-align: justify; text-justify: inter-word;">
        ຄຳແນະນຳ:​ໃຫ້ຕື່ມເນື້ອໃນໃສ່ໃນແບບຟອມລາຍງານນີ້ ຫຼາຍເທົ່າທີ່ຈະຫຼາຍໄດ້. ບ່ອນໃດທີ່ມີເຄື່ອງໝາຍ (*) ແມ່ນຈຳເປັນຕ້ອງໄດ້ຕື່ມ, ໃຫ້ຕື່ມເຄື່ອງໝາຍ (X) ໃສ່ຫ້ອງໃດທີ່ເຫັນວ່າເໝາະສົມກັບເນື້ອໃນ. ຕ້ອງໄດ້ສົ່ງແບບພິມລາຍງານນີ້ໃຫ້ແກ່ ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ (ສຕຟງ) ໂດຍດ່ວນທີ່ສຸດພາຍຫຼັງທີ່ມີການໃຊ້ບໍລິການ ຫຼືມີທຸລະກຳເກີດຂຶ້ນ(ໃຫ້ຮັກສາຄວາມລັບພາຍຫຼັງສຳເລັດການຕື່ມເນື້ອໃນລົງໃນແບບພິມລາຍງານນີ້).
        </p>
<div id="accordion" class="accordion-style1 panel-group text-lo">
  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title text-lo">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
					&nbsp;ລາຍລະອຽດຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ
				</a>
			</h4>
		</div>
    <div class="panel-collapse collapse in" id="collapseOne">
  		<div class="panel-body text-lo">
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ປະເພດຫົວໜ່ວຍທີມີໜ້າທີ່ລາຍງານ </label>
          <div class="col-sm-8">
            <div>
							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> reporter_type_title)): ?> <?php echo e($strreceive -> reporter_type_title); ?> <?php endif; ?>" />
            </div>
					</div>
        </div>
        <hr />
        <p>1. <u>ລາຍລະອຽດຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ</u></p>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 1. ຊື່ຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> str_form_reporter_name)): ?> <?php echo e($strreceive -> str_form_reporter_name); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 2. ລາຍເຊັນພ້ອມຊື່ເຕັມຜູ້ອະນຸມັດ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> approval_signature_fullname)): ?> <?php echo e($strreceive -> approval_signature_fullname); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 3. ເລກບັດປະຈຳຕົວຜູ້ອະນຸມັດ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> approval_id_card)): ?> <?php echo e($strreceive -> approval_id_card); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 4. ລາຍເຊັນພ້ອມຊື່ເຕັມຜູ້ກວດກາ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> audit_signature_fullname)): ?> <?php echo e($strreceive -> audit_signature_fullname); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 5. ເລກບັດປະຈຳຕົວຜູ້ກວດກາ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> audit_id_card)): ?> <?php echo e($strreceive -> audit_id_card); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 6. ຊື່ສາຂາຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> reporter_branch_name)): ?> <?php echo e($strreceive -> reporter_branch_name); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 7. ທີ່ຢູ່ຂອງສາຂາ: </label>
          <div class="col-sm-8">
            <div>
							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> province_name)): ?> <?php echo e($strreceive -> province_name); ?> <?php endif; ?>" />
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 8. ເບີໂທຂອງສາຂາ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> reporter_branch_tel)): ?> <?php echo e($strreceive -> reporter_branch_tel); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ເບີແຟັກຂອງສາຂາ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> reporter_branch_fax)): ?> <?php echo e($strreceive -> reporter_branch_fax); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 9. ປະເພດການເຄື່ອນໄຫວທຸລະກິດ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> reporter_business_type)): ?> <?php echo e($strreceive -> reporter_business_type); ?> <?php endif; ?>" />
          </div>
        </div>
    </div> <!-- end body -->
  </div><!-- end collapse -->
</div> <!-- end panel -->

<?php if($strreceive -> personnel_or_entity === 'per'): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title text-lo">
			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
				&nbsp;ບຸກຄົນທົ່ວໄປ
			</a>
		</h4>
	</div>
  <div class="panel-collapse collapse in" id="collapseTwo">
		<div class="panel-body">

        <p>2. <u>ລາຍລະອຽດກ່ຽວກັບບຸກຄົນ/ນິຕິບຸກຄົນ ຫຼືອົງການຈັດຕັ້ງທີ່ດຳເນີນທຸລະກຳທີ່ສົງໄສ</u></p>
        <p>2.1. <u>ໃນກໍລະນີຂອງເຈົ້າຂອງບັນຊີ/ ລູກຄ້າແມ່ນບຸກຄົນທົ່ວໄປ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 10. ຊື່ ແລະ ນາມສະກຸນ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php echo e($strreceive -> personnel_name); ?>"/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 11. ສັນຊາດ: </label>
          <div class="col-sm-3">
            <div>
							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->personnel_nationality)): ?> <?php echo e($nat_names[$strreceive->personnel_nationality]); ?> <?php endif; ?>" />
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 12. ເພດ: </label>
          <div class="col-sm-3">
						<label class="inline">
							<input name="personel_gender"  type="radio" class="ace" value="m" <?php if($strreceive -> personel_gender === 'm'): ?><?php echo e('checked'); ?><?php endif; ?>/>
							<span class="lbl middle"> ຊາຍ</span>
						</label>

						&nbsp; &nbsp; &nbsp;
						<label class="inline">
							<input name="personel_gender" type="radio" class="ace" value="f" <?php if($strreceive -> personel_gender === 'f'): ?><?php echo e('checked'); ?><?php endif; ?>/>
							<span class="lbl middle"> ຍິງ</span>
						</label>
					</div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 13. ບ່ອນເຮັດວຽກ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personelcol_office)): ?> <?php echo e($strreceive -> personelcol_office); ?> <?php endif; ?>"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 14. ອາຊີບ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_occupation)): ?> <?php echo e($strreceive -> personnel_occupation); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> 15. ວັນ, ເດືອນ, ປີ ເກີດ: </label>
          <div class="col-sm-3" id="dob">
            <input type="text" tabindex="" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> personnel_dob))); ?>" />
          </div>

          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 16. ສະຖານທີ່ເກີດ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_pob)): ?> <?php echo e($strreceive -> personnel_pob); ?> <?php endif; ?>"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 17. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_addr_proof_detail)): ?> <?php echo e($strreceive -> personnel_addr_proof_detail); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-8">
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->personnel_addr_proof)): ?><?php echo e('ບ້ານ ' . $vl_names[$strreceive->personnel_addr_proof]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($distrik)): ?><?php echo e('ເມືອງ ' . $dtr_names[$distrik]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($provig)): ?><?php echo e('ແຂວງ ' . $prv_names[$provig]); ?><?php endif; ?>" />
              </div>
  					</div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 18. ທີ່ຢູ່ອາໄສຖາວອນ ໃນ ສປປ ລາວ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_addr_in_laos)): ?> <?php echo e($strreceive -> personnel_addr_in_laos); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 19. ທີ່ຢູ່ອາໄສຖາວອນ ຕ່າງປະເທດ ຖ້າມີ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_addr_abroad)): ?> <?php echo e($strreceive -> personnel_addr_abroad); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 20. ເບີໂທລະສັບບ້ານ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_phone)): ?> <?php echo e($strreceive -> personnel_phone); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທຫ້ອງການ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_tel)): ?> <?php echo e($strreceive -> personnel_tel); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທລະສັບມືຖື: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_cell)): ?> <?php echo e($strreceive -> personnel_cell); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 21. ປະເພດເອກະສານຢັ້ງຢືນບຸກຄົນ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_type)): ?> <?php echo e($strreceive -> personnel_proof_type); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 22. ລາຍລະອຽດເອກະສານຢັ້ງຢືນບຸກຄົນ: </label>
          <div class="col-sm-8">

          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> ວັນອອກບັດ </label>
          <div class="col-sm-2" id="card-issue-1">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> personnel_proof_issue_date))); ?>" />
          </div>

          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເລກທີ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_no)): ?> <?php echo e($strreceive -> personnel_proof_no); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ສະຖານທີ່ອອກບັດ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_issue_place)): ?> <?php echo e($strreceive -> personnel_proof_issue_place); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> ວັນໝົດອາຍຸ </label>
          <div class="col-sm-2" id="dob">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> personnel_proof_expiry_date))); ?>" />
          </div>

          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເລກລົງທະບຽນ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_register_no)): ?> <?php echo e($strreceive -> personnel_proof_register_no); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1" style="margin-left: -10px; margin-right: 10px;"> ສະຖານທີ່ລົງທະບຽນ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_register_place)): ?> <?php echo e($strreceive -> personnel_proof_register_place); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ອື່ນໆ ຖ້າມີ </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_other)): ?> <?php echo e($strreceive -> personnel_proof_other); ?> <?php endif; ?>" />
          </div>
        </div>
    </div> <!-- end body -->
  </div><!-- end collapse -->
</div> <!-- end panel -->
<?php else: ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title text-lo">
			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
				&nbsp;ນິຕິບຸກຄົນ
			</a>
		</h4>
	</div>
  <div class="panel-collapse collapse in" id="collapseThree">
		<div class="panel-body">



        <p>2.2. <u>ໃນກໍລະນີຂອງເຈົ້າຂອງບັນຊີ/ລູກຄ້າ ເປັນນິຕິບຸກຄົນ ຫຼື ບໍລິສັດ/ທຸລະກິດ</u></p>
        <p>2.2.1. <u>ລາຍລະອຽດນິຕິບຸກຄົນ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 23. ຊື່: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_name)): ?> <?php echo e($strreceive -> entities_name); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 24. ຮູບແບບທາງທຸລະກິດ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_business_type)): ?> <?php echo e($strreceive -> entities_business_type); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 25. ທີ່ຕັ້ງສຳນັກງານ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_office_addr_detail)): ?> <?php echo e($strreceive -> entities_office_addr_detail); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-8">
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(!empty($strreceive->entities_office_addr)): ?> <?php echo e('ບ້ານ ' . $vl_names[$strreceive->entities_office_addr]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(!empty($strreceive->entities_office_addr)): ?> <?php echo e('ເມືອງ ' . $dtr_names[$vl_id_dtrs[$strreceive->entities_office_addr]]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(!empty($strreceive->entities_office_addr)): ?> <?php echo e('ແຂວງ ' . $prv_names[$dtr_id_prvs[$vl_id_dtrs[$strreceive->entities_office_addr]]]); ?><?php endif; ?>" />
              </div>
  					</div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> 26. ວັນທີ່ອະນຸຍາດໃຫ້ດຳເນີນທຸລະກິດ: </label>
          <div class="col-sm-2" id="dob">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> entities_business_approve_date))); ?>" />

          </div>

          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 27. ທຶນຈົດທະບຽນ: </label>
          <div class="col-sm-2">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ຈຳນວນ </label>
            <div class="col-sm-12">
              <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_registra_capital)): ?> <?php echo e(number_format($strreceive -> entities_registra_capital)); ?> <?php endif; ?>" />
            </div>
          </div>

          <div class="col-sm-2">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ສະກຸນເງິນ </label>
            <div class="col-sm-12">
              <div>
                <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_registra_capital_currency)): ?> <?php echo e($curr_names[$strreceive -> entities_registra_capital_currency]); ?> <?php endif; ?>" />
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 28. ປະເພດການເຄື່ອນໄຫວ ອີງຕາມໃບທະບຽນວິສາຫະກິດ: </label>
          <div class="col-sm-8">
          <textarea class="form-control" id="form-field-8" rows="5"> <?php echo e($strreceive -> entities_business_registration_certificate_type); ?></textarea>
            <!-- <input type="text" class="col-xs-12 col-sm-12" value="<?php echo e($strreceive -> entities_business_registration_certificate_type); ?>" /> -->
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 29. ເລກທະບຽນວິສາຫະກິດ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_business_registration_certificate_no)): ?> <?php echo e($strreceive -> entities_business_registration_certificate_no); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 30. ວັນທີ ແລະ ສະຖານທີ່ລົງທະບຽນ </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_business_registration_certificate_issue)): ?> <?php echo e($strreceive -> entities_business_registration_certificate_issue); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 31. ເລກປະຈຳຕົວຜູ້ເສຍອາກອນ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_taxpayer_no)): ?> <?php echo e($strreceive -> entities_taxpayer_no); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 32. ປະເພດ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_type)): ?> <?php echo e($strreceive -> entities_type); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 33. ເລກລະຫັດ (ຖ້າມີ): </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_code)): ?> <?php echo e($strreceive -> entities_code); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 34. ເບີໂທລະສັບບ້ານ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_phone)): ?> <?php echo e($strreceive -> entities_phone); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທຫ້ອງການ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_tel)): ?> <?php echo e($strreceive -> entities_tel); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທລະສັບມືຖື: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> entities_cell)): ?> <?php echo e($strreceive -> entities_cell); ?> <?php endif; ?>" />
          </div>
        </div>
      </div> <!-- end body -->
    </div><!-- end collapse -->
  </div> <!-- end panel -->
  <div class="panel panel-default">
  	<div class="panel-heading">
  		<h4 class="panel-title text-lo">
  			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
  				<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
  				&nbsp;ຕາງໜ້າໃຫ້ນິຕິບຸກຄົນ
  			</a>
  		</h4>
  	</div>
    <div class="panel-collapse collapse in" id="collapseFour">
  		<div class="panel-body">

        <p>2.2.2. <u>ລາຍລະອຽດຂອງບຸກຄົນທົ່ວໄປ ທີ່ຕາງໜ້າໃຫ້ນິຕິບຸກຄົນ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 35. ຊື່ ແລະ ນາມສະກຸນ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_name)): ?> <?php echo e($strreceive -> personnel_name); ?> <?php endif; ?>"/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 36. ສັນຊາດ: </label>
          <div class="col-sm-3">
            <div>
							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->personnel_nationality)): ?> <?php echo e($nat_names[$strreceive->personnel_nationality]); ?> <?php endif; ?>"/>
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 37. ເພດ: </label>
          <div class="col-sm-3">
						<label class="inline">
							<input name="personel_gender"  type="radio" class="ace" value="m" <?php if($strreceive -> personel_gender === 'm'): ?><?php echo e('checked'); ?><?php endif; ?>/>
							<span class="lbl middle"> ຊາຍ</span>
						</label>

						&nbsp; &nbsp; &nbsp;
						<label class="inline">
							<input name="personel_gender" type="radio" class="ace" value="f" <?php if($strreceive -> personel_gender === 'f'): ?><?php echo e('checked'); ?><?php endif; ?>/>
							<span class="lbl middle"> ຍິງ</span>
						</label>
					</div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 38. ສະຖານທີ່ເຮັດວຽກ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personelcol_office)): ?> <?php echo e($strreceive -> personelcol_office); ?> <?php endif; ?>"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 39. ອາຊີບ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_occupation)): ?> <?php echo e($strreceive -> personnel_occupation); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 40. ສາຍພົວພັນກັບນິຕິບຸກຄົນ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_occupation)): ?> <?php echo e($strreceive -> personnel_occupation); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> 41. ວັນ, ເດືອນ, ປີ ເກີດ: </label>
          <div class="col-sm-3" id="dob">
            <input type="text" tabindex="" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> personnel_dob))); ?>" />
          </div>

          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 42. ສະຖານທີ່ເກີດ: </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_pob)): ?> <?php echo e($strreceive -> personnel_pob); ?> <?php endif; ?>"/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 43. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_addr_proof_detail)): ?> <?php echo e($strreceive -> personnel_addr_proof_detail); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-8">
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->personnel_addr_proof)): ?><?php echo e('ບ້ານ ' . $vl_names[$strreceive->personnel_addr_proof]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->personnel_addr_proof)): ?><?php echo e('ເມືອງ ' . $dtr_names[$vl_id_dtrs[$strreceive->personnel_addr_proof]]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->personnel_addr_proof)): ?><?php echo e('ແຂວງ ' . $prv_names[$dtr_id_prvs[$vl_id_dtrs[$strreceive->personnel_addr_proof]]]); ?><?php endif; ?>" />
              </div>
  					</div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 44. ທີ່ຢູ່ອາໄສຖາວອນ ໃນ ສປປ ລາວ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_addr_in_laos)): ?> <?php echo e($strreceive -> personnel_addr_in_laos); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 45. ທີ່ຢູ່ອາໄສຖາວອນ ຕ່າງປະເທດ ຖ້າມີ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_addr_abroad)): ?> <?php echo e($strreceive -> personnel_addr_abroad); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 46. ເບີໂທລະສັບບ້ານ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_phone)): ?> <?php echo e($strreceive -> personnel_phone); ?>  <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທຫ້ອງການ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_tel)): ?> <?php echo e($strreceive -> personnel_tel); ?>  <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທລະສັບມືຖື: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_cell)): ?> <?php echo e($strreceive -> personnel_cell); ?>  <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 47. ປະເພດເອກະສານຢັ້ງຢືນບຸກຄົນ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_type)): ?> <?php echo e($strreceive -> personnel_proof_type); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 48. ລາຍລະອຽດເອກະສານຢັ້ງຢືນບຸກຄົນ: </label>
          <div class="col-sm-8">

          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> ວັນອອກບັດ </label>
          <div class="col-sm-2" id="card-issue-1">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> personnel_proof_issue_date))); ?>" />
          </div>

          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເລກທີ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_no)): ?> <?php echo e($strreceive -> personnel_proof_no); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ສະຖານທີ່ອອກບັດ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_issue_place)): ?> <?php echo e($strreceive -> personnel_proof_issue_place); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> ວັນໝົດອາຍຸ </label>
          <div class="col-sm-2" id="dob">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> personnel_proof_expiry_date))); ?>" />
          </div>

          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເລກລົງທະບຽນ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_register_no)): ?> <?php echo e($strreceive -> personnel_proof_register_no); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1" style="margin-left: -10px; margin-right: 10px;"> ສະຖານທີ່ລົງທະບຽນ </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_register_place)): ?> <?php echo e($strreceive -> personnel_proof_register_place); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ອື່ນໆ ຖ້າມີ </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> personnel_proof_other)): ?> <?php echo e($strreceive -> personnel_proof_other); ?> <?php endif; ?>" />
          </div>
        </div>
      </div> <!-- end body -->
    </div><!-- end collapse -->
  </div> <!-- end panel -->
  <?php endif; ?>

  <div class="panel panel-default">
  	<div class="panel-heading">
  		<h4 class="panel-title text-lo">
  			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
  				<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
  				&nbsp;ຜູ້ຮັບຜົນປະໂຫຍດ
  			</a>
  		</h4>
  	</div>
    <div class="panel-collapse collapse in" id="collapseFive">
  		<div class="panel-body">

        <p><u>3. ລາຍລະອຽດຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ(ຖ້າມີ)</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 49. ຊື່ຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> beneficiary_name)): ?> <?php echo e($strreceive -> beneficiary_name); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 50. ສັນຊາດ: </label>
          <div class="col-sm-8">
            <div>
							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->beneficiary_nationality)): ?> <?php echo e($nat_names[$strreceive->beneficiary_nationality]); ?> <?php endif; ?>" />
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 51. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> beneficiary_proof_addr_detail)): ?> <?php echo e($strreceive -> beneficiary_proof_addr_detail); ?>  <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-8">
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive->beneficiary_proof_addr)): ?><?php echo e('ບ້ານ ' . $vl_names[$strreceive->beneficiary_proof_addr]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($distrik2)): ?><?php echo e('ເມືອງ ' . $dtr_names[$distrik2]); ?><?php endif; ?>" />
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($provig2)): ?><?php echo e('ແຂວງ ' . $prv_names[$provig2]); ?><?php endif; ?>" />
              </div>
  					</div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 52. ເບີໂທລະສັບບ້ານ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> beneficiary_phone)): ?> <?php echo e($strreceive -> beneficiary_phone); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທຫ້ອງການ: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> beneficiary_tel)): ?> <?php echo e($strreceive -> beneficiary_tel); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທລະສັບມືຖື: </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> beneficiary_cell)): ?> <?php echo e($strreceive -> beneficiary_cell); ?> <?php endif; ?>" />
          </div>
        </div>

        </div> <!-- end body -->
      </div><!-- end collapse -->
    </div> <!-- end panel -->
    <div class="panel panel-default">
    	<div class="panel-heading">
    		<h4 class="panel-title text-lo">
    			<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
    				<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
    				&nbsp;ລາຍລະອຽດທຸລະກຳທີ່ສົງໄສ
    			</a>
    		</h4>
    	</div>
      <div class="panel-collapse collapse in" id="collapseSix">
    		<div class="panel-body">


        <p><u>4. ລາຍລະອຽດທຸລະກຳທີ່ສົງໄສ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> 53. ວັນທີ ເຮັດທຸລະກຳ/ຊື້ປະກັນໄພ/ຈັດການຫຼັກຊັບ: </label>
          <div class="col-sm-2" id="dob">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> transaction_date))); ?>" />

          </div>

          <label class="col-sm-3 control-label no-padding-right" for="dob"> 54. ວັນທີສົງໄສ: </label>
          <div class="col-sm-2" id="dob">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> suspicious_date))); ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 55. ເລກບັນຊີ/ປະກັນໄພ (ຖ້າມີ): </label>
          <div class="col-sm-3">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> acc_no_or_insurance)): ?> <?php echo e($strreceive -> acc_no_or_insurance); ?> <?php endif; ?>" />
          </div>
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 56. ປະເພດ ບັນຊີ/ປະກັນໄພ/ຫຼັກຊັບ (ຖ້າມີ): </label>
          <div class="col-sm-2">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> acc_type)): ?> <?php echo e($strreceive -> acc_type); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> 57. ວັນເປີດບັນຊີ (ຖ້າມີ): </label>
          <div class="col-sm-2" id="dob">
            <input type="text" value="<?php echo e(date('d/m/Y', strtotime($strreceive -> acc_open_date))); ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 58. ມູນຄ່າທັງໝົດທຽບເທົ່າກີບ: </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset($strreceive -> total_amount)): ?> <?php echo e(number_format($strreceive -> total_amount)); ?> <?php endif; ?>" />
          </div>
        </div>


        <?php $__currentLoopData = $amt_curs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php        
        
        $a[$key] = $currency->amount_currency;
        $b[$key] = $currency->currency_ini_l;
         ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 59. ມູນຄ່າແຕ່ລະສະກຸນເງິນຕາຕ່າງປະເທດ: </label>
          <div class="col-sm-4">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php  if (isset ($a[0])) echo number_format($a[0]);  ?>" />
          </div>
          <div class="col-sm-4">
            <div>
              <input type="text" class="col-xs-12 col-sm-12" value="<?php  if (isset ($b[0])) echo $b[0];  ?>" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-4">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php  if (isset ($a[1])) echo number_format($a[1]);  ?>" />
          </div>
          <div class="col-sm-4">
            <div>
              <input type="text" class="col-xs-12 col-sm-12" value="<?php  if (isset ($b[1])) echo $b[1];  ?>" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-4">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php  if (isset ($a[2])) echo number_format($a[2]);  ?>" />
          </div>
          <div class="col-sm-4">
            <div>
              <input type="text" class="col-xs-12 col-sm-12" value="<?php  if (isset ($b[2])) echo $b[2];  ?>" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 60. ປະເພດທຸລະກຳ (ຖ້າມີ): </label>
          <div class="col-sm-8">
            <input type="text" class="col-xs-12 col-sm-12" value="<?php if(isset( $strreceive -> transaction_type)): ?> <?php echo e($strreceive -> transaction_type); ?> <?php endif; ?>" />
          </div>
        </div>

        <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">61. ອະທິບາຍກ່ຽວກັບທຸລະກຳ</label>
					<div class="col-sm-8"> 
						<textarea class="form-control" id="form-field-8" rows="8"><?php echo e($strreceive -> suspicious_transaction_describe); ?></textarea>
          </div>
				</div>

        

        <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">62. ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ: </label>
					<div class="col-sm-8">
						<textarea class="form-control" id="form-field-8" rows="8"><?php echo e($strreceive -> suspicious_clue); ?></textarea>
					</div>
				</div>



        <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຕິດຄັດ(ຖ້າມີ)</label>
					<div class="col-sm-8">
            <?php if($strreceive -> suspicious_transaction_describe_file !== NULL): ?>
						<a href="<?php echo e(url($strreceive -> suspicious_transaction_describe_file )); ?>" download="<?php echo e(url(($strreceive -> suspicious_transaction_describe_file))); ?>" class="btn btn-sm">ເບິ່ງລາຍລະອຽດ</a>
            <?php endif; ?>
					</div>
				</div>






        <!-- <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຕິດຄັດ(ຖ້າມີ)</label>
					<div class="col-sm-8">
						<a href="<?php echo e('fileattaches/susdetail/1_08-12-2017_1512728088_aaaa - Copy (2).JPG'); ?>" download="<?php echo e(url('fileattaches/susdetail/1_08-12-2017_1512728088_aaaa - Copy (2).JPG')); ?>" class="btn btn-sm">ເບິ່ງລາຍລະອຽດ</a>
					</div>
				</div> -->

      </div> <!-- end body -->
    </div><!-- end collapse -->
</div> <!-- end panel -->


        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <br />
            <p><a href="<?php echo e(url('lawrefer')); ?>">ບາງມາດຕາວ່າດ້ວຍ ການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ສະບັບເລກທີ 50/ສພຊ ລົງວັນທີ 21 ກໍລະກົດ 2014 ທີ່ກ່ຽວກັບມາດຕະການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ.</a></p>
          </div>
				</div>

        <div class="clearfix form-actions">
					<div class="col-sm-offset-1 col-sm-10 text-center">
						<a href="{{ url('/strall')}}" class="btn" type="button">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							ກັບຄືນ
						</a>
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