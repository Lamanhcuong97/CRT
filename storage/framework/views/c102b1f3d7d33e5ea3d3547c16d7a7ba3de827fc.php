
<?php $__env->startSection('page_title', 'details report'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<div class="space-10"></div>
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action=<?php echo e(url('/strdetailshow')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

    <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກລາຍລະອຽດ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ເລືອກປະເພດ </label>
                <div class="col-sm-9">
      							<select class="form-control" name="report_detail_type" id="form-field-select-1" >

                      <option value="1" <?php if($report_detail_type ==1): ?> selected="selected" <?php endif; ?>>ລາຍລະອຽດຫົວໜ່ວຍທີ່ມີໜ້າທີລາຍງານ</option>
                      <option value="2" <?php if($report_detail_type ==2): ?> selected="selected" <?php endif; ?>>ລາຍລະອຽດກ່ຽວກັບບຸກຄົນ</option>
                      <option value="3" <?php if($report_detail_type ==3): ?> selected="selected" <?php endif; ?>>ລາຍລະອຽດຂອງນິຕິບຸກຄົນ</option>
                      <option value="4" <?php if($report_detail_type ==4): ?> selected="selected" <?php endif; ?>>ລາຍລະອຽດຄົນມາເຮັດທຸລະກຳແທນ (ນິຕິບຸກຄົນ)</option>
                      <option value="5" <?php if($report_detail_type ==5): ?> selected="selected" <?php endif; ?>>ລາຍລະອຽດຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ (ຖ້າມີ)</option>
    								  <option value="6" <?php if($report_detail_type ==6): ?> selected="selected" <?php endif; ?>>ລາຍລະອຽດທຸລະກຳທີ່ສົງໄສ</option>

                    </select>
      					</div>
              </div>

              <div class="form-group">

                <label class="col-sm-2 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-3" id="sdate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="sdate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="<?php if(isset($ssdate)): ?><?php echo e($ssdate); ?><?php endif; ?>" tabindex="1" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <label class="col-sm-1 control-label no-padding-right" for="edate"> ເຖິງ </label>
                <div class="col-sm-3" id="edate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="edate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="<?php if(isset($sedate)): ?><?php echo e($sedate); ?><?php endif; ?>" tabindex="2" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-offset-1 col-sm-2">
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="3">ຄົ້ນຫາ</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="space-30"></div>
</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('<?php echo e(url( 'images/bg-images11.jpg')); ?>'); background-size: 100%;">
  			ຜົນການຄົ້ນຫາລາຍງານ STR ແບບລະອຽດ
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>

              <?php if($report_detail_type == 1): ?>
  							<th class="center">ລ/ດ</th>
  							<th>ຫົວໜ່ວຍທີ່ລາຍງານ</th>
  							<th>ຊື່ຜູ້ອະນຸມັດ</th>
  							<th>ບັດຜູ້ອະນຸມັດ</th>
  							<th>ຊື່ຜູ້ກວດກາ</th>
  							<th>ບັດຜູ້ກວດກາ</th>
                <th>ຊື່ສາຂາທີ່ລາຍງານ</th>
                <th>ທີ່ຢູ່</th>
                <th>ເບີໂທ-ແຟັກ</th>
                <th>ປະເພດເຄື່ອນໄຫວ</th>
              <?php elseif($report_detail_type == 2): ?>
  							<th class="center">ລ/ດ</th>
  							<th>ຊື່ ແລະ ນາມສະກຸນ</th>
  							<th>ສັນຊາດ</th>
  							<th>ເພດ</th>
  							<th>ບ່ອນເຮັດວຽກ</th>
  							<th>ອາຊີບ</th>
                <th>ວດປ ເກີດ</th>
                <th>ເກີດທີ່</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
  							<th>ທີ່ຢູ່ຕາມ ເອກະສານຢັ້ງຢືນ</th>
  							<th>ບ້ານຢູ່ປັດຈຸບັນ</th>
  							<th>ທີ່ຢູ່ອາໃສຖາວອນ ຢູ່ຕ່າງປະເທດ</th>
  							<th>ໂທລະສັບ</th>
                <th>ປະເພດ ເອກະສານຢັ້ງຢືນ</th>
                <th>ວດປ ອອກບັດ</th>
                <th>ສະຖານທີອອກບັດ</th>
                <th>ວດປ ໝົດອາຍຸ</th>
              <?php elseif($report_detail_type == 3): ?>
  							<th class="center">ລ/ດ</th>
  							<th>ຊື່</th>
  							<th>ຮູບແບບທາງທຸລະກິດ</th>
  							<th>ທີ່ຕັ້ງສຳນັກງານ (ບ້ານ)</th>
  							<th>ເມືອງ</th>
  							<th>ແຂວງ</th>
                <th>ວັນທີອະນຸຍາດດຳເນີນທຸລະກິດ</th>
                <th>ທຶນຈົດທະບຽນ</th>
                <th>ສະກຸນເງິນ</th>
                <th>ປະເພດການເຄື່ອໄຫວ</th>
                <th>ທະບຽນວິສາຫະກິດ</th>
  							<th>ວັນທີ ແລະ ສະຖານທີ່ລົງທະບຽນ</th>
  							<th>ບັດປະຈຳຕົວຜູ້ເສຍອາກອນ</th>
  							<th>ປະເພດ</th>
  							<th>ເລກລະຫັດ</th>
                <th>ໂທລະສັບ</th>
              <?php elseif($report_detail_type == 4): ?>
  							<th class="center">ລ/ດ</th>
  							<th>ຊື່ ແລະ ນາມສະກຸນ</th>
  							<th>ສັນຊາດ</th>
  							<th>ເພດ</th>
  							<th>ບ່ອນເຮັດວຽກ</th>
                <th>ອາຊີບ</th>
  							<th>ພົວພັນນິຕິບຸກຄົນ</th>
                <th>ວດປ ເກີດ</th>
                <th>ເກີດທີ່</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
  							<th>ທີ່ຢູ່ຕາມ ເອກະສານຢັ້ງຢືນ</th>
  							<th>ບ້ານຢູ່ປັດຈຸບັນ</th>
  							<th>ທີ່ຢູ່ອາໃສຖາວອນ ຢູ່ຕ່າງປະເທດ</th>
  							<th>ໂທລະສັບ</th>
                <th>ປະເພດ ເອກະສານຢັ້ງຢືນ</th>
                <th>ວດປ ອອກບັດ</th>
                <th>ສະຖານທີອອກບັດ</th>
                <th>ວດປ ໝົດອາຍຸ</th>
              <?php elseif($report_detail_type == 5): ?>
                <th class="center">ລ/ດ</th>
                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                <th>ສັນຊາດ</th>
                <th>ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ(ບ້ານ)</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ໂທລະສັບ</th>
              <?php elseif($report_detail_type == 6): ?>
  							<th class="center">ລ/ດ</th>
               
  							<th>ວດປ ເຮັດທຸລະກຳ</th>
  							<th>ວດປ ສົງໄສ</th>
  							<th>ເລກບັນຊີ/ປະກັນໄພ</th>
  							<th>ປະເພດບັນຊີ/ປະກັນໄພ/ຫຼັກຊັບ</th>
                <th>ວດປ ເປີດບັນຊີ</th>
  							<th>ມູນຄ່າທັງໝົດເປັນກີບ</th>
                <th>ມູນຄ່າແຍກສະກຸນເງິນຕາ</th>
                <th>ປະເພດທຸລະກຳ</th>
                <th>ອະທິບາຍທຸລະກຳທີ່ພາໃຫ້ສົງໄສ</th>
                <th>ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ</th>
              <?php endif; ?>
						</tr>
					</thead>

					<tbody>
            <?php if($report_detail_type == 1): ?>
              <?php if(isset($strdetailreports)): ?>
                <?php if( count($strdetailreports) > 0): ?>
                  <?php $__currentLoopData = $strdetailreports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strdetailreport => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="center"><?php echo e($strdetailreport+1); ?></td>
                      <td><?php echo e($name->str_form_reporter_name); ?></td>
                      <td><?php echo e($name->approval_signature_fullname); ?></td>
                      <td><?php echo e($name->approval_id_card); ?></td>
          						<td><?php echo e($name->audit_signature_fullname); ?></td>
          						<td><?php echo e($name->audit_id_card); ?></td>
          						<td><?php echo e($name->reporter_branch_name); ?></td>
                      <td><?php echo e($name->province_name); ?></td>
                      <td><?php echo e($name->reporter_branch_tel); ?> <?php if($name->reporter_branch_fax !== NULL): ?><?php echo e('; ' . $name->reporter_branch_fax); ?> <?php endif; ?></td>
          						<td><?php echo e($name->reporter_business_type); ?></td>
          					</tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              <?php else: ?>
              <tr>
                <td colspan="10" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              <?php endif; ?>

            <?php elseif($report_detail_type == 2): ?>
              <?php if(isset($strdetailreport2s)): ?>
                <?php if( count($strdetailreport2s) > 0): ?>
                  <?php $__currentLoopData = $strdetailreport2s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strdetailreport2 => $name2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="center"><?php echo e($strdetailreport2+1); ?></td>
                      <td><?php echo e($name2->personnel_name); ?></td>
                      <td><?php echo e($name2->nationality_name); ?></td>
                      <td><?php if($name2->personel_gender == 'm'): ?><?php echo e('ຊາຍ'); ?><?php elseif($name2->personel_gender == 'f'): ?><?php echo e('ຍິງ'); ?><?php endif; ?></td>
                      <td><?php echo e($name2->personelcol_office); ?></td>
                      <td><?php echo e($name2->personnel_occupation); ?></td>
                      <td><?php echo e(date('d/m/Y',strtotime($name2->personnel_dob))); ?></td>
                      <td><?php echo e($name2->personnel_pob); ?></td>
                      <td><?php echo e($name2->village_name); ?></td>
                      <td><?php echo e($name2->district_name); ?></td>
                      <td><?php echo e($name2->province_name); ?></td>
                      <td><?php echo e($name2->personnel_addr_proof); ?></td>
                      <td><?php echo e($name2->personnel_addr_in_laos); ?></td>
                      <td><?php echo e($name2->personnel_addr_abroad); ?></td>
                      <td><?php echo e($name2->personnel_phone); ?></td>
                      <td><?php echo e($name2->personnel_proof_type); ?></td>
                      <td><?php echo e(date('d/m/Y', strtotime($name2->personnel_proof_issue_date))); ?></td>
                      <td><?php echo e($name2->personnel_proof_issue_place); ?></td>
                      <td><?php echo e(date('d/m/Y', strtotime($name2->personnel_proof_expiry_date))); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              <?php else: ?>
              <tr>
                <td colspan="19" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              <?php endif; ?>

            <?php elseif($report_detail_type == 3): ?>
              <?php if(isset($strdetailreport3s)): ?>
                <?php if( count($strdetailreport3s) > 0): ?>
                  <?php $__currentLoopData = $strdetailreport3s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strdetailreport3 => $name3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="center"><?php echo e($strdetailreport3+1); ?></td>
                      <td><?php echo e($name3->entities_name); ?></td>
                      <td><?php echo e($name3->entities_business_type); ?></td>
                      <td><?php echo e($name3->village_name); ?></td>
                      <td><?php echo e($name3->district_name); ?></td>
                      <td><?php echo e($name3->province_name); ?></td>
                      <td><?php echo e(date('d/m/Y',strtotime($name3->entities_business_approve_date))); ?></td>
                      <td><?php echo e(number_format($name3->entities_registra_capital)); ?></td>
                      <td><?php echo e($name3->currency_ini_l); ?></td>
                      <td><?php echo e($name3->entities_business_registration_certificate_type); ?></td>
                      <td><?php echo e($name3->entities_business_registration_certificate_no); ?></td>
                      <td><?php echo e($name3->entities_business_registration_certificate_issue); ?></td>
                      <td><?php echo e($name3->entities_taxpayer_no); ?></td>
                      <td><?php echo e($name3->entities_type); ?></td>
                      <td><?php echo e($name3->entities_code); ?></td>
                      <td><?php echo e($name3->entities_phone); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              <?php else: ?>
              <tr>
                <td colspan="16" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              <?php endif; ?>

            <?php elseif($report_detail_type == 4): ?>
              <?php if(isset($strdetailreport4s)): ?>
                <?php if( count($strdetailreport4s) > 0): ?>
                  <?php $__currentLoopData = $strdetailreport4s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strdetailreport4 => $name4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="center"><?php echo e($strdetailreport4+1); ?></td>
                      <td><?php echo e($name4->personnel_name); ?></td>
                      <td><?php echo e($name4->nationality_name); ?></td>
                      <td><?php if($name4->personel_gender == 'm'): ?><?php echo e('ຊາຍ'); ?><?php elseif($name4->personel_gender == 'f'): ?><?php echo e('ຍິງ'); ?><?php endif; ?></td>
                      <td><?php echo e($name4->personelcol_office); ?></td>
                      <td><?php echo e($name4->personnel_occupation); ?></td>
                      <td><?php echo e($name4->personnel_entity_relation); ?></td>
                      <td><?php echo e(date('d/m/Y',strtotime($name4->personnel_dob))); ?></td>
                      <td><?php echo e($name4->personnel_pob); ?></td>
                      <td><?php echo e($name4->village_name); ?></td>
                      <td><?php echo e($name4->district_name); ?></td>
                      <td><?php echo e($name4->province_name); ?></td>
                      <td><?php echo e($name4->personnel_addr_proof); ?></td>
                      <td><?php echo e($name4->personnel_addr_in_laos); ?></td>
                      <td><?php echo e($name4->personnel_addr_abroad); ?></td>
                      <td><?php echo e($name4->personnel_phone); ?></td>
                      <td><?php echo e($name4->personnel_proof_type); ?></td>
                      <td><?php echo e(date('d/m/Y', strtotime($name4->personnel_proof_issue_date))); ?></td>
                      <td><?php echo e($name4->personnel_proof_issue_place); ?></td>
                      <td><?php echo e(date('d/m/Y', strtotime($name4->personnel_proof_expiry_date))); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              <?php else: ?>
              <tr>
                <td colspan="18" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              <?php endif; ?>

            <?php elseif($report_detail_type == 5): ?>
              <?php if(isset($strdetailreport5s)): ?>
                <?php if( count($strdetailreport5s) > 0): ?>
                  <?php $__currentLoopData = $strdetailreport5s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strdetailreport5 => $name5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="center"><?php echo e($strdetailreport5+1); ?></td>
                      <td><?php echo e($name5->beneficiary_name); ?></td>
                      <td><?php echo e($name5->nationality_name); ?></td>
                      <td><?php echo e($name5->village_name); ?></td>
                      <td><?php echo e($name5->district_name); ?></td>
                      <td><?php echo e($name5->province_name); ?></td>
                      <td><?php echo e($name5->beneficiary_phone); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

              <?php else: ?>
              <tr>
                <td colspan="18" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              <?php endif; ?>

            <?php elseif($report_detail_type == 6): ?>
              <?php if(isset($strdetailreport6s)): ?>
                <?php if( count($strdetailreport6s) > 0): ?>


                <?php if(isset($amt_curs)): ?>

                  <?php ($ordernumber = array()); ?>
                  <?php ($laststrdetail = 1); ?>
                  <?php $__currentLoopData = $amt_curs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amt_cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($laststrdetail == $amt_cur->str_detail_idstr_detail): ?>

                    <?php else: ?>

                    <?php endif; ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                <?php endif; ?>


                  <?php $__currentLoopData = $strdetailreport6s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strdetailreport6 => $name6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="center"><?php echo e($strdetailreport6+1); ?></td>
                    
                      <td><?php if($name6->transaction_date !== NULL): ?> <?php echo e(date('d/m/Y', strtotime($name6->transaction_date))); ?> <?php endif; ?></td>
                      <td><?php if($name6->suspicious_date !== NULL): ?> <?php echo e(date('d/m/Y', strtotime($name6->suspicious_date))); ?> <?php endif; ?></td>
                      <td><?php echo e($name6->acc_no_or_insurance); ?></td>
                      <td><?php echo e($name6->acc_type); ?></td>
                      <td><?php if($name6->acc_open_date !== NULL): ?> <?php echo e(date('d/m/Y', strtotime($name6->acc_open_date))); ?> <?php endif; ?></td>
                      <td class="text-right"><?php if($name6->total_amount > 0): ?> <?php echo e(number_format($name6->total_amount)); ?> <?php endif; ?></td>
                      <td></td>
                      <td><?php echo e($name6->transaction_type); ?></td>
                      <td><?php echo e($name6->suspicious_transaction_describe); ?> <?php if($name6->suspicious_transaction_describe_file !== null): ?> <a href=<?php echo e(url($name6->suspicious_transaction_describe_file)); ?>>[ເອກະສານ]</a> <?php endif; ?></td>
                      <td><?php echo e($name6->suspicious_clue); ?><?php if($name6->suspicious_clue_file !== null): ?> <a href=<?php echo e(url($name6->suspicious_clue_file)); ?>>[ເອກະສານ]</a> <?php endif; ?></td>
                    </tr>

                    <?php if(isset($amount[$name6->idstr_detail])): ?>
                      <?php if(count($amount[$name6->idstr_detail]) > 0): ?>

                        <?php ($count = count($amount[$name6->idstr_detail])); ?>

                        <?php for($i = 1; $i <= $count; $i++): ?>


                          <tr>
                            <td class="center"><?php echo e($strdetailreport6+1 . '.' . $i); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo e($i); ?></td>

                            <td><?php echo e(number_format($amount[$name6->idstr_detail][$i]) . ' (' . $currency[$name6->idstr_detail][$i] . ')'); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>

                        <?php endfor; ?>
                      <?php endif; ?>
                    <?php endif; ?>



                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

              <?php else: ?>
              <tr>
                <td colspan="18" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              <?php endif; ?>
            <?php endif; ?>
					</tbody>
				</table>
      </div>
    </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make($mainpage, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>