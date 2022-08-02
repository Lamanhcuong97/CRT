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
  <form  class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
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
  <div class="container">
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('<?php echo e(url( 'images/bg-images11.jpg')); ?>'); background-size: 100%;">
  	  ລາຍງານທຸລະກຳເງິນສົດທີ່ມີມູນຄ່າເກີນກຳນົດ
      </div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">ລ/ດ</th>
							<th>ວັນທີ</th>
							<th width="100px;">CTR ປະຈຳເດືອນ</th>
							<th>ເລື່ອງ</th>
							<th>ຫົວໜ່ວຍລາຍງານ</th>
              <th>ເອກະສານຫນ້າປົກ</th>
              <th>ເອກະສານບຸກຄົນ</th>
              <th>ເອກະສານນິຕິບຸກຄົນ</th>
						</tr>
					</thead>

					<tbody>
          <?php  
          $i = 1;
           ?>

            <?php if(isset($ctrshow)): ?>
                <?php $__currentLoopData = $ctrshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctrshow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="center"><?php echo e($i); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($ctrshow->upload_date))); ?></td>
                    <!-- <td><?php echo e($ctrshow->title); ?></td> -->
                <!-- Boy added 12 Feb -->
                <td><?php if($ctrshow->ctr_month !== null): ?><?php echo e(date('m-Y', strtotime($ctrshow->ctr_month))); ?>  <?php else: ?> <?php echo e(' '); ?> <?php endif; ?> </td>
                <td><?php if($ctrshow->title !== null): ?> <?php echo e($ctrshow->title); ?> <?php else: ?> <?php echo e('ລາຍງານທຸລະກຳເງິນສົດທີ່ມີມູນຄ່າເກີນກຳນົດ '); ?> <?php endif; ?></td>
                    <td><?php echo e($ctrshow->reporter_name); ?></td>
                    <td><a href="<?php echo e($ctrshow->path_file); ?>" class="badge badge-primary" >ດາວໂຫຼດ</a></td>
                    <td><?php if($ctrshow->path_person !== null): ?> <a href='<?php echo e($ctrshow->path_person); ?>' class="badge badge-primary">ດາວໂຫຼດ</a>  <?php else: ?> <?php echo e('ລວມຢູ່ໃນໄຟລຫນ້າປົກ'); ?> <?php endif; ?></td>
                    <td><?php if($ctrshow->path_legal !== null): ?> <a href='<?php echo e($ctrshow->path_legal); ?>' class="badge badge-primary">ດາວໂຫຼດ</a> <?php else: ?> <?php echo e('ລວມຢູ່ໃນໄຟລຫນ້າປົກ'); ?> <?php endif; ?></td>
        						
                <?php  
                $i++;
                 ?>    
        					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
              <td>ບໍ່ມີຂໍ້ມູນ</td>

            </tr>
            <?php endif; ?>
					</tbody>
				</table>
        
      </div>
    </div>
  </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_ctrall', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>