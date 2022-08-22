<?php $__env->startSection('page_title', 'Comment report'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="<?php echo e(url('images/amlio_logo.png')); ?>" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('<?php echo e(url( 'images/bg-images11.jpg')); ?>'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action=<?php echo e(url('/cbrshow')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

    <!-- <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກໄລຍະເວລາ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

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
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</div>
  <!-- <div class="container"> -->
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('<?php echo e(url( 'images/bg-images11.jpg')); ?>'); background-size: 100%;">
  			ລາຍງານ CBR
  		</div>

    <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
            <th>ລ/ດ</th>
												
													<th style="width:100px">ຜູ້ລາຍງານ</th>
												
													<!-- <th>ລະຫັດ</th> -->
													<th style="width:90px">ວັນທີລາຍງານ</th>
													<th style="width:80px">ຊື່</th>
													<th style="width:80px">ນາມສະກຸນ</th>
													<th style="width:90px">ວັນເດືອນປີເກີດ</th>
													<th style="width:90px">ເລກໜັງສື ເດີນທາງ/ ຜ່ານແດນ</th>
													<th style="width:90px">ອອກໃຫ້ວັນທີ</th>
													<th style="width:90px">ໝົດອາຍຸວັນທີ</th>													
													<th>ປະເທດອອກໜັງສື ເດີນທາງ / ຜ່ານແດນ</th>																				
													<th style="width:200px">ເປົ້າໝາຍຂອງການເດີນທາງ</th>
													<th>ເດີນທາງຈາກປະເທດ</th>
													<th>ປະເທດປາຍທາງ</th>
													<th>ເລກທີ່ທ່ຽວບິນ ຫຼື ທະບຽນພາຫານະ</th>
													
													<th>ມູນຄ່າທີ່ແຈ້ງ</th>
													<!-- <th>ສະກຸນເງິນທີ່ແຈ້ງ</th> -->
													<th>ມູນຄ່າທີ່ແຈ້ງ 2</th>
													<!-- <th>ສະກຸນເງິນທີ່ແຈ້ງ 2</th> -->
													<th>ມູນຄ່າທີ່ແຈ້ງ 3</th>
													<!-- <th>ສະກຸນເງິນທີ່ແຈ້ງ 3</th> -->
													<th>ການແຈ້ງວັດຖຸມີຄ່າ ຫຼື ເຄື່ອງມືທາງດ້ານການເງິນ</th>
													<th>ມູນຄ່າທຽບເທົ່າເງິນກີບ</th>
													<th style="width:70px">ປະເພດຂອງການແຈ້ງ</th>
													<th style="width:90px">ໃບແຈ້ງລົງວັນທີ</th>
													<th>ເອກະສານຄັດຕິດ</th>
												</tr>
											</thead>
											<tbody>
											<?php  
											$i = 1;
											 ?>

											<?php $__currentLoopData = $data_cbr_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cbr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
												<tr>																						
													<td><?php echo e($i); ?></td>
													<td><?php echo e($cbr->usr_name); ?></td>
													<!-- <td><?php echo e($cbr->cbr_id); ?></td> -->
													<td><?php echo e($cbr->date_report); ?></td>											
													<td><?php echo e($cbr->name); ?></td>
													<td><?php echo e($cbr->lastname); ?></td>
													<td><?php echo e($cbr->dateofb); ?></td>			
													<td><?php echo e($cbr->pass_no); ?></td>
													<td><?php echo e($cbr->date_issue); ?></td>
													<td><?php echo e($cbr->date_expire); ?></td>
													<td><?php echo e($cbr->country_issue); ?></td>
													<td><?php echo e($cbr->object_travel); ?></td>																				
													<td><?php echo e($cbr->from_country); ?></td>
													<td><?php echo e($cbr->to_country); ?></td>
													<td><?php echo e($cbr->no_vehicle); ?></td>
													
													<td><?php echo e(number_format($cbr->amount)); ?> <?php echo e($cbr->amount_cur); ?></td>
													
													<td><?php echo e(number_format($cbr->amount_1)); ?> <?php echo e($cbr->amount_cur_1); ?></td>
												
													<td><?php echo e(number_format($cbr->amount_2)); ?> <?php echo e($cbr->amount_cur_2); ?></td>
													
													<td><?php echo e($cbr->item); ?></td>
													<td><?php echo e(number_format($cbr->amount_dollar)); ?></td>
													<td><?php echo e($cbr->type); ?></td>
													<td><?php echo e($cbr->date_notice); ?></td>
													<td><a href="<?php echo e($cbr->path_file); ?>">ດາວໂຫຼດເອກະສານຄັດຕິດ</a></td>

                        </tr>

											<?php 
											$i++;
											 ?>
										
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</tbody>
				</table>
      </div>
    </div>
  </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>