<?php $__env->startSection('page_title', 'new report'); ?>
<?php $__env->startSection('content'); ?>


<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ຮ່າງແບບພິມລາຍງານທຸລະກຳທີ່ມີລັກສະນະພາໃຫ້ສົງໄສ ສຳລັບຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ *</strong> </h2>
  </blockquote>
</div>
<br>

<form  class="form-horizontal" method="POST" action=<?php echo e(url('/strstore')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
<?php echo e(csrf_field()); ?>

  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ແບບພິມລາຍງານ ບຸກຄົນ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
        <p class="alert alert-info text-lo" style="margin-top: -6px; text-align: justify; text-justify: inter-word;">
        ຄຳແນະນຳ:​ໃຫ້ຕື່ມເນື້ອໃນໃສ່ໃນແບບຟອມລາຍງານນີ້ ຫຼາຍເທົ່າທີ່ຈະຫຼາຍໄດ້. ບ່ອນໃດທີ່ມີເຄື່ອງໝາຍ (*) ແມ່ນຈຳເປັນຕ້ອງໄດ້ຕື່ມ, ໃຫ້ຕື່ມເຄື່ອງໝາຍ (X) ໃສ່ຫ້ອງໃດທີ່ເຫັນວ່າເໝາະສົມກັບເນື້ອໃນ. ຕ້ອງໄດ້ສົ່ງແບບພິມລາຍງານນີ້ໃຫ້ແກ່ ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ (ສຕຟງ) ໂດຍດ່ວນທີ່ສຸດພາຍຫຼັງທີ່ມີການໃຊ້ບໍລິການ ຫຼືມີທຸລະກຳເກີດຂຶ້ນ(ໃຫ້ຮັກສາຄວາມລັບພາຍຫຼັງສຳເລັດການຕື່ມເນື້ອໃນລົງໃນແບບພິມລາຍງານນີ້).
        </p>
<div id="accordion" class="accordion-style1 panel-group text-lo">


        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> ເລກທີ (*)</label>
          <div class="col-sm-3">
            <div>
							<input type="text" name="str_no" class="col-xs-12 col-sm-12" required/>
            </div>
					</div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="color:red"> ລົງວັນທີ (*) </label>
          <div class="col-sm-3">
            <div>
              <div class="col-sm-3" id="dob">
                  <div class="input-medium">
                      <div class="input-group clearfix text-lo">
                          <input class="input-medium date-picker" name="str_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="" readonly required />
                          <span class="input-group-addon">
                              <i class="ace-icon fa fa-calendar"></i>
                          </span>
                      </div>
                  </div>
              </div>
            </div>
					</div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> ປະເພດຫົວໜ່ວຍທີມີໜ້າທີ່ລາຍງານ (*) </label>
          <div class="col-sm-8">
            <div>
							<select class="form-control" name="reporter_type_idreporter_type" id="form-field-select-1" required >
                <option value="">ກະລຸນາເລືອກ</option>
                <?php $__currentLoopData = $reportertypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reportertype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($reportertype->idreporter_type); ?>"><?php echo e($reportertype->reporter_type_title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>
            </div>
					</div>
        </div>
        <hr />
        <p>1. <u>ລາຍລະອຽດຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ</u></p>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 1. ຊື່ຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ: (*)</label>
          <div class="col-sm-8">
            <input type="text" name="str_form_reporter_name" class="col-xs-12 col-sm-12" required/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 2. ລາຍເຊັນພ້ອມຊື່ເຕັມຜູ້ອະນຸມັດ: (*)</label>
          <div class="col-sm-3">
            <input type="text" name="approval_signature_fullname" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 3. ເລກບັດປະຈຳຕົວຜູ້ອະນຸມັດ: </label>
          <div class="col-sm-3">
            <input type="text" name="approval_id_card" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 4. ລາຍເຊັນພ້ອມຊື່ເຕັມຜູ້ກວດກາ: (*)</label>
          <div class="col-sm-3">
            <input type="text" name="audit_signature_fullname" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 5. ເລກບັດປະຈຳຕົວຜູ້ກວດກາ: </label>
          <div class="col-sm-3">
            <input type="text" name="audit_id_card" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 6. ຊື່ສາຂາຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ: </label>
          <div class="col-sm-8">
            <input type="text" name="reporter_branch_name" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 7. ທີ່ຢູ່ຂອງສາຂາ: </label>
          <div class="col-sm-8">
            <div>
							<select class="form-control" name="reporter_branch_province" id="form-field-select-1" >

                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($province->idprovince); ?>"><?php echo e($province->province_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 8. ເບີໂທຂອງສາຂາ: (*)</label>
          <div class="col-sm-3">
            <input type="text" name="reporter_branch_tel" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ເບີແຟັກຂອງສາຂາ: </label>
          <div class="col-sm-3">
            <input type="text" name="reporter_branch_fax" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 9. ປະເພດການເຄື່ອນໄຫວທຸລະກິດ: </label>
          <div class="col-sm-8">
            <input type="text" name="reporter_business_type" class="col-xs-12 col-sm-12" />
          </div>
        </div>




        <p>2. <u>ລາຍລະອຽດກ່ຽວກັບບຸກຄົນ/ນິຕິບຸກຄົນ ຫຼືອົງການຈັດຕັ້ງທີ່ດຳເນີນທຸລະກຳທີ່ສົງໄສ</u></p>
        <p>2.1. <u>ໃນກໍລະນີຂອງເຈົ້າຂອງບັນຊີ/ ລູກຄ້າແມ່ນບຸກຄົນທົ່ວໄປ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="color:red"> 10. ຊື່ ແລະ ນາມສະກຸນ: (*)</label>
          <div class="col-sm-3">
            <input type="text" name="personnel_name" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"style="color:red"> 11. ສັນຊາດ: (*)</label>
          <div class="col-sm-3">
            <div>
							<select class="form-control" name="personnel_nationality" id="form-field-select-1" required>
								<option value="">ສັນຊາດ</option>

                <?php $__currentLoopData = $nationalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nationality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($nationality->idnationality); ?>"><?php echo e($nationality->nationality_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 12. ເພດ: </label>
          <div class="col-sm-3">
						<label class="inline">
							<input name="personel_gender"  type="radio" class="ace" value="m" checked/>
							<span class="lbl middle"> ຊາຍ</span>
						</label>

						&nbsp; &nbsp; &nbsp;
						<label class="inline">
							<input name="personel_gender" type="radio" class="ace" value="f"/>
							<span class="lbl middle"> ຍິງ</span>
						</label>
					</div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 13. ບ່ອນເຮັດວຽກ: </label>
          <div class="col-sm-3">
            <input type="text" name="personelcol_office" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="color:red"> 14. ອາຊີບ: (*) </label>
          <div class="col-sm-8">
            <input type="text" name="personnel_occupation" class="col-xs-12 col-sm-12" required/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> 15. ວັນ, ເດືອນ, ປີ ເກີດ: </label>
          <div class="col-sm-3" id="dob">
              <div class="input-medium">
                  <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="personnel_dob"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                  </div>
              </div>
          </div>

          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 16. ສະຖານທີ່ເກີດ: </label>
          <div class="col-sm-3">
            <input type="text" name="personnel_pob" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 17. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ: </label>
          <div class="col-sm-8">
            <input type="text" name="personnel_addr_proof_detail" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-8">
            <div class="col-sm-4">
              <div>
  							<select class="form-control province" id="province" >
  								<option value="">ແຂວງ</option>

                  <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  								<option value="<?php echo e($province->idprovince); ?>"><?php echo e($province->province_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<select class="form-control district" id="district" >
  								<option value="">ເມືອງ</option>

                </select>
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<select class="form-control village" name="personnel_addr_proof" id="village" >
  								<option value="">ບ້ານ</option>
                </select>
              </div>
  					</div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 18. ທີ່ຢູ່ອາໄສຖາວອນ ໃນ ສປປ ລາວ: </label>
          <div class="col-sm-8">
            <input type="text" name="personnel_addr_in_laos" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 19. ທີ່ຢູ່ອາໄສຖາວອນ ຕ່າງປະເທດ ຖ້າມີ: </label>
          <div class="col-sm-8">
            <input type="text" name="personnel_addr_abroad" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 20. ເບີໂທລະສັບບ້ານ: </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_phone" class="col-xs-12 col-sm-12" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທຫ້ອງການ: </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_tel" class="col-xs-12 col-sm-12" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທລະສັບມືຖື: </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_cell" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 21. ປະເພດເອກະສານຢັ້ງຢືນບຸກຄົນ: </label>
          <div class="col-sm-8">
            <input type="text" name="personnel_proof_type" class="col-xs-12 col-sm-12" />
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
            <div class="input-medium">
              <div class="input-group clearfix text-lo">
                <input class="input-medium date-picker" name="personnel_proof_issue_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="" readonly />
                <span class="input-group-addon">
                    <i class="ace-icon fa fa-calendar"></i>
                </span>
              </div>
            </div>
          </div>

          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເລກທີ </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_proof_no" class="col-xs-12 col-sm-12" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ສະຖານທີ່ອອກບັດ </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_proof_issue_place" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob"> ວັນໝົດອາຍຸ </label>
          <div class="col-sm-2" id="dob">
            <div class="input-medium">
              <div class="input-group clearfix text-lo">
                <input class="input-medium date-picker" name="personnel_proof_expiry_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="" readonly/>
                <span class="input-group-addon">
                    <i class="ace-icon fa fa-calendar"></i>
                </span>
              </div>
            </div>
          </div>

          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເລກລົງທະບຽນ </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_proof_register_no" class="col-xs-12 col-sm-12" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1" style="margin-left: -10px; margin-right: 10px;"> ສະຖານທີ່ລົງທະບຽນ </label>
          <div class="col-sm-2">
            <input type="text" name="personnel_proof_register_place" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ອື່ນໆ ຖ້າມີ </label>
          <div class="col-sm-8">
            <input type="text" name="personnel_proof_other" class="col-xs-12 col-sm-12" />
          </div>
        </div>





        <p><u>3. ລາຍລະອຽດຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="color:red"> 49. ຊື່ຜູ້ຮັບຜົນປະໂຫຍດ: (*) </label>
          <div class="col-sm-8">
            <input type="text" name="beneficiary_name" class="col-xs-12 col-sm-12" required/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="color:red"> 50. ສັນຊາດ: (*)</label>
          <div class="col-sm-8">
            <div>
							<select class="form-control" name="beneficiary_nationality" id="form-field-select-1" required>
								<option value="">ສັນຊາດ</option>

                <?php $__currentLoopData = $nationalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nationality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($nationality->idnationality); ?>"><?php echo e($nationality->nationality_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>
            </div>
					</div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 51. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ: </label>
          <div class="col-sm-8">
            <input type="text" name="beneficiary_proof_addr_detail" class="col-xs-12 col-sm-12" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-8">
            <div class="col-sm-4">
              <div>
  							<select class="form-control province3" id="form-field-select-1" >
  								<option value="">ແຂວງ</option>

                  <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  								<option value="<?php echo e($province->idprovince); ?>"><?php echo e($province->province_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<select class="form-control district3" id="form-field-select-1" >
  								<option value="">ເມືອງ</option>
                </select>
              </div>
  					</div>
            <div class="col-sm-4">
              <div>
  							<select class="form-control village3" name="beneficiary_proof_addr" id="form-field-select-1" >
  								<option value="">ບ້ານ</option>
                </select>
              </div>
  					</div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 52. ເບີໂທລະສັບບ້ານ: </label>
          <div class="col-sm-2">
            <input type="text" name="beneficiary_phone" class="col-xs-12 col-sm-12" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທຫ້ອງການ: </label>
          <div class="col-sm-2">
            <input type="text" name="beneficiary_tel" class="col-xs-12 col-sm-12" />
          </div>
          <label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ເບີໂທລະສັບມືຖື: </label>
          <div class="col-sm-2">
            <input type="text" name="beneficiary_cell" class="col-xs-12 col-sm-12" />
          </div>
        </div>




        <p><u>4. ລາຍລະອຽດທຸລະກຳທີ່ສົງໄສ</u></p>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob" style="color:red"> 53. ວັນທີ ເຮັດທຸລະກຳ: (*) </label>
          <div class="col-sm-2" id="dob">
            <div class="input-medium">
              <div class="input-group clearfix text-lo">
                <input class="input-medium date-picker" name="transaction_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex=""  required/>
                <span class="input-group-addon">
                    <i class="ace-icon fa fa-calendar"></i>
                </span>
              </div>
            </div>
          </div>

          <label class="col-sm-3 control-label no-padding-right" for="dob" style="color:red"> 54. ວັນທີສົງໄສ: (*)</label>
          <div class="col-sm-2" id="dob">
            <div class="input-medium">
              <div class="input-group clearfix text-lo">
                <input class="input-medium date-picker" name="suspicious_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex=""  required/>
                <span class="input-group-addon">
                    <i class="ace-icon fa fa-calendar"></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="color:red"> 55. ເລກບັນຊີ: (*) </label>
          <div class="col-sm-3">
            <input type="text" name="acc_no_or_insurance" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 56. ປະເພດ ບັນຊີ: (*)</label>
          <div class="col-sm-2">
            <input type="text" name="acc_type" class="col-xs-12 col-sm-12" required/>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="dob" style="color:red"> 57. ວັນເປີດບັນຊີ: (*) </label>
          <div class="col-sm-2" id="dob">
            <div class="input-medium">
              <div class="input-group clearfix text-lo">
                <input class="input-medium date-picker" name="acc_open_date"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex=""  required/>
                <span class="input-group-addon">
                    <i class="ace-icon fa fa-calendar"></i>
                </span>
              </div>
            </div>
          </div>
        </div>



        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 58. ມູນຄ່າທັງໝົດທຽບເທົ່າກີບ: (*) </label>
          <div class="col-sm-8">
            <input type="text" name="total_amount" class="col-xs-12 col-sm-12" placeholder="ກະລຸນາໃສ່ຕົວເລກເທົ່ານັ້ນ" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" />
          </div>
        </div>

		        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 59. ມູນຄ່າແຕ່ລະສະກຸນເງິນ: </label>
          <div class="col-sm-4">
            <input type="text" name="amount_currency_1" class="col-xs-12 col-sm-12" placeholder="ກະລຸນາໃສ່ຕົວເລກເທົ່ານັ້ນ" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
          </div>
          <div class="col-sm-4">
            <div>
              <select class="form-control" name="currency_1" id="form-field-select-1" >
                <option value="">ສະກຸນເງິນ</option>
                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($currency->idcurrency); ?>"><?php echo e($currency->currency_ini_l); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
        </div>
		
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" > </label>
          <div class="col-sm-4">
            <input type="text" name="amount_currency_2" class="col-xs-12 col-sm-12" placeholder="ກະລຸນາໃສ່ຕົວເລກເທົ່ານັ້ນ" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
          </div>
          <div class="col-sm-4">
            <div>
              <select class="chosen-select form-control" name="currency_2"  id="form-field-select-1" >
                <option value="">ສະກຸນເງິນ</option>
                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($currency->idcurrency); ?>"><?php echo e($currency->currency_ini_l); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          <div class="col-sm-4">
            <input type="text" name="amount_currency_3" class="col-xs-12 col-sm-12" placeholder="ກະລຸນາໃສ່ຕົວເລກເທົ່ານັ້ນ" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
          </div>
          <div class="col-sm-4">
            <div>
              <select class="chosen-select form-control" name="currency_3" id="form-field-select-1" >
                <option value="">ສະກຸນເງິນ</option>
                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($currency->idcurrency); ?>"><?php echo e($currency->currency_ini_l); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
        </div>

        <!-- <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>

          <div class="col-sm-8">
            <button class="btn btn-sm btn-primary col-sm-12"> <i class="fa fa-plus"></i> ສະກຸນເງິນອື່ນ </button>
          </div>
        </div> -->

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red"> 60. ປະເພດທຸລະກຳ: (*)</label>
          <div class="col-sm-8">
            <input type="text" name="transaction_type" class="col-xs-12 col-sm-12" required/>
          </div>
        </div>

        <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment" style="color:red">61. ອະທິບາຍກ່ຽວກັບການເຄື່ອນໄຫວທຸລະກຳ (*)</label>
					<div class="col-sm-8">
						<textarea class="form-control" name="suspicious_transaction_describe" id="form-field-8" placeholder="ອະທິບາຍກ່ຽວກັບທຸລະກຳ" required></textarea>
					</div>
				</div>

        

        <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment" style="color:red">62. ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ: (*) </label>
					<div class="col-sm-8">
						<textarea class="form-control" name="suspicious_clue" id="form-field-8" placeholder="ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ" required></textarea>
					</div>
				</div>


      <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຕິດຄັດບໍ່ເກີນ 20 MB</label>
					<div class="col-sm-8">
						<input type="file" name="suspicious_transaction_describe_file" id="id-input-file-3" />
					</div>
				</div>

      <div class="form-group">
			<label class="col-sm-8 control-label no-padding-right" for="form-field-comment" style="color:red">ກະລຸນາຕັ້ງຊື່ເອກະສານຕິດຄັດ (File Upload) ເປັນຕົວອັກສອນພາສາອັງກິດເທົ່ານັ້ນ</label>
			
			</div>  
        
          

        <!--<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຕິດຄັດບໍ່ເກີນ 30 MB</label>
					<div class="col-sm-8">
						<input type="file" name="suspicious_clue_file" id="id-input-file-4" />
					</div>
				</div>-->





        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <br />
            <p><a href="<?php echo e(url('lawrefer')); ?>">ບາງມາດຕາວ່າດ້ວຍ ການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ສະບັບເລກທີ 50/ສພຊ ລົງວັນທີ 21 ກໍລະກົດ 2014 ທີ່ກ່ຽວກັບມາດຕະການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ.</a></p>
          </div>
				</div>

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