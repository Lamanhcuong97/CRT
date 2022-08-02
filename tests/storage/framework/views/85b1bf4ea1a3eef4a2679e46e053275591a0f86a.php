<?php $__env->startSection('page_title', 'Reply view'); ?>
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

</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  			ລາຍການ ການແຈ້ງຕອບ 
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">ລ/ດ</th>
              <th>ແຈ້ງຕອບຂອງເລກທີ</th>
							<th>ເຖິງ</th>
              <th>ຜູ້ຮັບ</th>
							<th>ຜູ້ແຈ້ງຕອບ</th>
              <th>ແຈ້ງຕອບເມື່ອ</th>
						</tr>
					</thead>

					<tbody>
            <?php if(isset($replies)): ?>
              <?php if( count($replies) > 0): ?>
                <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="center"><?php echo e($reply+1); ?></td>
                    <td><a href="<?php echo e(url('replycontent/' . $name->id)); ?>"><?php if($name->str_reply_no !== null): ?> <?php echo e($name->str_reply_no); ?> <?php else: ?> <?php echo e('ບໍ່ມີຂໍ້ມູນ'); ?> <?php endif; ?></a></td>
        						<td><a href="<?php echo e(url('replycontent/' . $name->id)); ?>"><?php if($name->str_reply_topic !== null): ?> <?php echo e($name->str_reply_topic); ?> <?php else: ?> <?php echo e('ບໍ່ມີຫົວຂໍ້'); ?> <?php endif; ?></a></td>
                    <td><?php ($id = $name->str_reply_to); ?><?php echo e($idreceivers[$id]); ?></td>
                    <td><?php echo e($name->usr_name); ?></td>
                    <td><?php echo e(date('d/m/Y', strtotime($name->created_at)) . ' (' . $name->created_at->diffForHumans() . ')'); ?></td>
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

<?php echo $__env->make('layouts.mainreplyview', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>