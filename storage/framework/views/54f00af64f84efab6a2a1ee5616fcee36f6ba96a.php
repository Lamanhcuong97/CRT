<?php $__env->startSection('page_title', 'STR ALL'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="<?php echo e(url('images/amlio_logo.png')); ?>" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action=<?php echo e(url('/strall/search')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

  <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກຮູບແບບການຄົ້ນຫາ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">ຄຳຄົ້ນຫາ</label>
                <div class="col-sm-6">
                  <input type="text" name="search_txt" class="col-xs-12" tabindex="1" />
                </div>
              </div>
              <div class="form-group">

                <label class="col-sm-2 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-3" id="sdate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium datepicker" name="sdate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="2" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <label class="col-sm-1 control-label no-padding-right" for="edate">  ເຖິງ </label>
                <div class="col-sm-3" id="edate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium datepicker" name="edate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="3" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

                
                <div class="col-sm-offset-1 col-sm-2">
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="4">ຄົ້ນຫາ</button>
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
    <div class="col-xs-12 text-lo">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  			ລາຍການ ການແຈ້ງທຸລະກຳທີ່ພາໃຫ້ສົງໄສ <?php echo e($stralls->count()); ?><?php echo e(' ຈາກ '); ?><?php echo e($count_data); ?>

  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-bordered table-striped display nowrap">
					<thead>
						<tr>
              <th class="center">ລ/ດ</th>
              <th style="color:blue">ລາຍງານໃນລະບົບລົງວັນທີ</th> 
							
              <th>ເອກະສານເລກທີ</th>
              <th>ເອກະສານລົງວັນທີ</th>
							<th>ຫົວໜ່ວຍລາຍງານ</th>
              <th>ຜູ້ຖືກລາຍງານ</th>
              <th>ສັນຊາດ</th>
              <th>ປະເພດ <br> ຜູ້ຖືກລາຍງານ</th>
              <th>ລັກສະນະທຸລະກຳ</th>

              <!-- nok hide -->
              <!-- <th>ເອກະສານຢັ້ງຢືນ</th>
              <th>ຈຳນວນເງິນເປັນກີບທັງໝົດ</th> -->
              
              <th style="width:350px">ອະທິບາຍກ່ຽວກັບທຸລະກຳ</th>
              <th style="width:350px">ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ</th>  

							
              
              <th><i class="fa fa-download"></i> ໂອນຂໍ້ມູນລົງ</th>
                           
              <th>ເລກທີ່ STR ຂອງ ສຕຟງ </th>
              <th>ນັກວິເຄາະ <br> ຜູ້ຮັບຜິດຊອບ STR</th>
              

						</tr>
					</thead>

					<tbody>
          <?php if(isset($stralls)): ?>
            <!-- <?php ($i = 1); ?> -->
              <?php if( count($stralls) > 0): ?>
                <?php $__currentLoopData = $stralls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strall=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="center"><?php echo e($strall+1); ?></td>
                    <!-- <td class="center"><?php echo e($i); ?><?php ($i += 1); ?></td> -->
                    <td style="color:blue"><?php if($name->created_at !== null): ?><?php echo e(date('d/m/Y', strtotime($name->created_at)) . ' (' . $name->created_at->diffForHumans() . ')'); ?><?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                    <td><?php if($name->str_no !== null): ?> <?php echo e($name->str_no); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                    <td><?php if($name->str_date !== null): ?> <?php echo e(date('d/m/Y', strtotime($name->str_date))); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                    <?php if($name->str_stt !== '0'): ?>
                      <td>
                        <a href="<?php echo e(url('strreceive/' . $name->idstr_form)); ?>" style="color: purple;">
                          <?php if($name->str_form_reporter_name !== null): ?> 
                            <?php echo e($idsenders[$name->reporter_idusr]); ?> 
                          <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></a>
                      </td>
                    <?php else: ?>
                      <td><a href="<?php echo e(url('strreceive/' . $name->idstr_form)); ?>"><?php if($name->str_form_reporter_name !== null): ?> <?php echo e($idsenders[$name->reporter_idusr]); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></a></td>
                    <?php endif; ?>
                      
                      <td><?php if($name->personnel_name !== null): ?> <?php echo e($name->personnel_name); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                      <td><?php if($name->nationality_name !== null): ?> <?php echo e($name->nationality_name); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                      <td><?php echo e($name->personnel_or_entity); ?></td>

                      <td><?php if($name->transaction_type !== null): ?> <?php echo e($name->transaction_type); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>


                      <!-- nok hide -->
                      <!--<td><?php if($name->personnel_proof_no !== null): ?> <?php echo e($name->personnel_proof_no); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                      <td><?php if($name->total_amount !== null): ?> <?php echo e($name->total_amount); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td> -->
                      
                      <td><?php if($name->suspicious_transaction_describe !== null): ?> <?php echo e($name->suspicious_transaction_describe); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                      <td>
					  <?php if($name->suspicious_clue !== null): ?> 
						<?php echo e($name->suspicious_clue); ?> 
						<?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> 
					  <?php endif; ?>
					  </td>  

                    

    
                      <td>
                        <div style="margin: -6px 0 -8px 0;">
						<!--<?php if(isset($name->idstr_form)): ?>-->
                          <form  class="form-horizontal" method="POST" action=<?php echo e(url('/strpdf')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                          <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="idstr" value="<?php echo e($name->idstr_form); ?>" />
                            <button type="submit" class="btn btn-xs" formtarget="_blank"><i class="fa fa-file-pdf-o"></i> ກົດທີ່ນີ້</button>
                          </form>
                        </div>
						<!--<?php endif; ?>-->
                      </td>
                      
                  

                      <td>
					   <!--<?php if(isset($amliostrno)): ?>
                        <?php $__currentLoopData = $amliostrno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($rp->idstr_form == $name->idstr_form): ?>
                          <?php echo e($rp->amliostr_no); ?>

                            <?php break; ?>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?> -->
					  <?php if(isset($name->amliostr_no)): ?>
                         <?php echo e($name->amliostr_no); ?>

					 <?php endif; ?>
                      <?php if(Auth::user()->idusr == 1016): ?>

                      <button data-id="<?php echo e($name->idstr_form); ?>" class="btn btn-xs bt_amliostrno" type="button" data-toggle="modal" data-target="#exampleModal2" >+</button>
                      <?php endif; ?>
                    </td>


                    <td>
                      <?php if(isset($responsibility)): ?>
                        <?php $__currentLoopData = $responsibility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($rp->idstr_form == $name->idstr_form): ?>
                            <?php $__currentLoopData = $usr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($u->idusr == $rp->idusr): ?>
                                <?php echo e($u->usr_name); ?>

                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                      <?php if(Auth::user()->idusr == 1016): ?>
                      <button data-id="<?php echo e($name->idstr_form); ?>" class="btn btn-xs bt_res" type="button" data-toggle="modal" data-target="#exampleModal" >+</button>
                      <?php endif; ?>
                    </td> 
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            <?php else: ?>
            <tr>
              <td colspan="8" class="center">ບໍ່ມີຂໍ້ມູນ</td>

            </tr>
            <?php endif; ?>
					</tbody>
				</table>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method='post' action="<?php echo e(url('/responsibility')); ?>">
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label for="exampleFormControlSelect1"><b>ກະລຸນາເລືອກນັກວິເຄາະຜູ້ຈະຮັບຜິດຊອບ STR</b></label>
        <select name="uid" class="form-control" id="exampleFormControlSelect1">
          
          <?php $__currentLoopData = $usr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($u->idusr); ?>" ><?php echo e($u->usr_name); ?> <?php echo e($u->usr_surname); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </select>
        <input type="hidden" name="form_id" id="form_id" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດໜ້າຕ່າງນີ້</button>
        <button type="submit" class="btn btn-primary">ກຳນົດຜູ້ຮັບຜິດຊອບ</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>ດ
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method='post' action="<?php echo e(url('/amliostrno')); ?>">
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label for="exampleFormControlSelect2" class="col-sm-4 control-label"><b>ກະລຸນາປ້ອນເລກທີ STR</b></label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="amliostrno" autocomplete="off"/>
          <input type="hidden" name="form_id2" id="form_id2" />
        </div>
      </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດໜ້າຕ່າງນີ້</button>
        <button type="submit" class="btn btn-primary">ໃສ່ເລກທີ່ STR</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_strall', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>