<?php $__env->startSection('content'); ?>
<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ລາຍລະອຽດເອກະສານ</strong> </h2>
  </blockquote>
</div>
<br>

<div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ລາຍລະອຽດຂໍ້ມູນ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
    
    <div class="col-5">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center bg-primary text-white" colspan="4"><b>ຂໍ້ມູນເອກະສານ</b></th>
                </tr>
                <tr>
                    <th scope="col">ເລກທີເອກະສານ</th>
                    <th scope="col">ເລື່ອງ</th>
                    <th scope="col">ມື້ລົງລາຍເຊັນ</th>
                    <th scope="col">ປະເພດເອກະສານ</th>
                   
                </tr>
            </thead>
            <tbody>
                    <tr>
                    <td><?php echo e($report->report_number); ?></td>
                    <td><?php echo e($report->title); ?></td>
                    <td><?php echo e($report->sign_date->format('d-m-Y')); ?></td>
                    <td><?php echo e($report->type); ?></td>
                    </tr>
            </tbody>
        </table>
    </div>

    
    <div class="col-7">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center bg-primary text-white" colspan="3"><b>ເອກະສານຄັດຕິດ</b></th>
                </tr>
                <tr>
                    <th scope="col">ຊື່ໄຟລ໌</th>
                    <th scope="col">ປະເພດໄຟລ໌</th>
                    <th scope="col">ດາວໂຫລດ</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($sign_file->name); ?></td>
                    <td>ໄຟລ໌ທີ່ມີລາຍເຊັນ</td>
                    <!-- <td><a href="<?php echo e($sign_file->path); ?>" class="badge badge-primary" >ດາວໂຫຼດ</a></td> -->

                    <td><a href="<?php echo e('storage/'.$sign_file->path); ?>">ດາວໂຫລດ</a></td>
                </tr>
                <?php $__currentLoopData = $attach_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attach_file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($attach_file->name); ?></td>
                    <td>ໄຟລ໌ຄັດຕິດ</td>
                    <td><a href="download-<?php echo e($attach_file->id); ?>">ດາວໂຫລດ</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


            <div class="col-7">
                <table class="table">
                     <thead>
                        <tr>
                            <th class="text-center bg-primary text-white" colspan="5"><b>ລາຍຊື່ບັນດາຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</b></th>
                        </tr>
                        <tr>
                            <th scope="col">ຊື່ຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</th>
                            <th scope="col">ປະເພດຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</th>
                            <th scope="col">ມື້ສົ່ງ</th>
                            <th scope="col">ສະຖານະ</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $bank_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($bank_list['reporter_name']); ?></td>
                        <td><?php echo e($bank_list['reporter_type_title']); ?></td>
                        <td><?php echo e($bank_list['send_day']->format('d-m-Y')); ?></td>
                        <td style="color: blue;">
                            <?php if(trim($bank_list['status']) == 'ຕອບກັບແລ້ວ'): ?>
                            <a href="<?php echo e(action("Boys\AllInboxController@displayReportDetailScreen", ['report_id' => $report->replys->where('replier_id', $bank_list['reporter_id'])->first()->id])); ?>" target="_blank">
                                <?php echo e($bank_list['status']); ?>

                            </a>
                            <?php else: ?>
                                <?php echo e($bank_list['status']); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        </div>

<div class="w-100"></div>
</div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_user_boy', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>