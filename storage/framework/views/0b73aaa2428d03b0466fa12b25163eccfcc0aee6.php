<?php $__env->startSection('page_title', 'STR ALL'); ?>
<?php $__env->startSection('content'); ?>


<div class="space-10"></div>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('/images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ໜ້າຈັດການຂໍ້ມູນ</strong> </h2>
  </blockquote>
</div>

<div class="row" style="background-color:#f2f2f2;">
<?php echo $__env->make('layouts.mainadminmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="col-md-10" style="background-color:white;padding:20px;">
  <!-- ------------------- report msg ----------------- -->
  <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
  <?php endif; ?>
  <?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
  <?php endif; ?>
  <?php if(session('edit')): ?>
    <div class="alert alert-success">
        <?php echo e(session('edit')); ?>

    </div>
  <?php endif; ?>
  <?php if(session('del')): ?>
    <div class="alert alert-success">
        <?php echo e(session('del')); ?>

    </div>
  <?php endif; ?>
  <!-- ------------------- report msg ----------------- -->
  <?php if(isset($Get_edit)): ?>
  <a href="<?php echo e(url('/admin/nat')); ?>" class="btn btn-link btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> ກັບຄືນ</a>
    <div class="alert alert-info">
    ແກ້ໄຂຂໍ້ມຸນປະເທດ
    </div>
  <?php endif; ?>
    <form method="POST" class="col-md-6" role="form" enctype="multipart/form-data" accept-charset="UTF-8" id="form_add">
     <?php echo e(csrf_field()); ?>

     <?php if(isset($Get_edit)): ?>
     <input type="hidden" id="idnationality" name="idnationality" value="<?php echo e($Nat_edit->idnationality); ?>">
     <?php endif; ?>
      <div class="form-group" >
        <label >ເລກລະຫັດປະເທດ</label>
        <input type="text" class="form-control" id="nationality_code" name="nationality_code" placeholder="ເລກລະຫັດປະເທດ"
        value="<?php if (isset($Get_edit)){echo $Nat_edit->nationality_code;} ?>">
      </div>
      <div class="form-group">
        <label>ຊື່ປະເທດ</label>
        <input type="text" class="form-control" id="nationality_name" name="nationality_name" placeholder="ຊື່ປະເທດ"
        value="<?php if (isset($Get_edit)){echo $Nat_edit->nationality_name;} ?>">
      </div>
      <?php if(isset($Get_edit)): ?>
        <button type="submit" class="btn btn-primary form_sub" data-action="<?php echo e(url('/admin/nat/edit/add')); ?>"> ແກ້ໄຂຂໍ້ມູນ</button>
      <?php else: ?>
        <button type="submit" class="btn btn-primary form_sub" data-action="<?php echo e(url('/admin/nat/add')); ?>"> ເພີ່ມຂໍ້ມູນ</button>
      <?php endif; ?>
    </form>
	<?php if(!isset($Get_edit)): ?>
    <div class="space-10"></div>

          <div class="row">
        <div class="col-md-offset-2 col-md-8">
        <form  class="form-horizontal" method="POST" action=<?php echo e(url('/nationalityshow')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
        <?php echo e(csrf_field()); ?>

        </form>
      </div>
      </div>
        <div class="row animated fadeInRight">
          <div class="col-xs-12">
            <div class="clearfix">
              <div class="pull-right tableTools-container"></div>
            </div>

            <div style="background-color: #eee;">
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="center">ລ/ດ</th>
                    <th>ເລກລະຫັດປະເທດ</th>
                    <th>ຊື່ປະເທດ</th>
                    <th>ແກ້ໄຂ</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;?>
                  <?php if(isset($Nats)): ?>
                    <?php if( count($Nats) > 0): ?>
                      <?php $__currentLoopData = $Nats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Nat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td class="center"><?php echo e($i); ?></td>
                          <td><?php echo e($Nat->nationality_code); ?></td>
                          <td><?php echo e($Nat->nationality_name); ?></td>
                          <form method="POST" action="<?php echo e(url('/admin/nat/del')); ?>" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" id="idnationality" name="idnationality" value="<?php echo e($Nat->idnationality); ?>">
                            <td width="9%"><a href="<?php echo e(url('/admin/nat/edit')); ?>/<?php echo e($Nat->idnationality); ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp;
                            <button type="submit" class="btn btn-danger btn-xs btn-del"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></input></td>
                          </form>
                        </tr>
                    <?php $i++;?>
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
	<?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>