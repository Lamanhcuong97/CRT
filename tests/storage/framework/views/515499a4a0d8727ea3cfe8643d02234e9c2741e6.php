<?php $__env->startSection('page_title', 'STR ALL'); ?>
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
  <form  class="form-horizontal" method="POST" action=<?php echo e(url('/nationalityshow')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>


  </form>
</div>
</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12 text-lo">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  			ລາຍການ ການແຈ້ງທຸລະກຳທີ່ພາໃຫ້ສົງໄສ
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">ລ/ດ</th>
							<th>ເລກທີ</th>
							<th>ຜູ້ຖືກລາຍງານ</th>
              <th>ປະເພດການລາຍງານ</th>
              <th><i class="fa fa-download"></i> ໂອນຂໍ້ມູນລົງ</th>
              <th>ແຈ້ງເມື່ອ</th>
						</tr>
					</thead>

					<tbody>
            <?php if(isset($stralls)): ?>
              <?php if( count($stralls) > 0): ?>
                <?php $__currentLoopData = $stralls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strall => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="center"><?php echo e($strall+1); ?></td>
                    <?php if($name->str_stt !== '0'): ?>
          						<td><a href="<?php echo e(url('strreceive/' . $name->idstr_form)); ?>" style="color: purple;"><?php if($name->str_no !== null): ?> <?php echo e($name->str_no); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></a></td>
                    <?php else: ?>
                      <td><a href="<?php echo e(url('strreceive/' . $name->idstr_form)); ?>"><?php if($name->str_no !== null): ?> <?php echo e($name->str_no); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></a></td>
                    <?php endif; ?>
                    <td><?php if($name->personnel_name !== null): ?> <?php echo e($name->personnel_name); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
                    <td><?php echo e($name->personnel_or_entity); ?></td>
                    <td>
                      <div style="margin: -6px 0 -8px 0;">
                        <form  class="form-horizontal" method="POST" action=<?php echo e(url('/strpdf')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                        <?php echo e(csrf_field()); ?>

                          <input type="hidden" name="idstr" value="<?php echo e($name->idstr_form); ?>" />
                          <button type="submit" class="btn btn-xs"><i class="fa fa-file-pdf-o"></i> ກົດທີ່ນີ້</button>
                        </form>
                      </div>
                    </td>
                    <td><?php if($name->created_at !== null): ?><?php echo e(date('d/m/Y', strtotime($name->created_at)) . ' (' . $name->created_at->diffForHumans() . ')'); ?><?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></td>
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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_strall_rp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>