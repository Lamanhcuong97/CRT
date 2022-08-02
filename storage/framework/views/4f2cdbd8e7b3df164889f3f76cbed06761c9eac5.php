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
  <a href="<?php echo e(url('/admin/user')); ?>" class="btn btn-link btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> ກັບຄືນ</a>
    <div class="alert alert-info">
    ແກ້ໄຂຂໍ້ມຸນຜູ້ໃຊ້
    </div>
  <?php endif; ?>
    <form method="POST" class="col-md-6" role="form" enctype="multipart/form-data" accept-charset="UTF-8" id="form_add">
     <?php echo e(csrf_field()); ?>

     <?php if(isset($Get_edit)): ?>
     <input type="hidden" id="idusr" name="idusr" value="<?php echo e($User_edit->idusr); ?>">
     <?php endif; ?>
      <div class="form-group" >
        <label >ຊື່ເຂົ້າໃຊ້ລະບົບ</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="ຊື່ເຂົ້າໃຊ້ລະບົບ"
        value="<?php if (isset($Get_edit)){echo $User_edit->username;} ?>" required>
      </div>
      <div class="form-group">
        <label>ລະຫັດເຂົ້າລະບົບ</label>
        <input type="password" class="form-control" id="password"name="password"  placeholder="<?php if (isset($Get_edit)){echo "********";}else{echo "ລະຫັດເຂົ້າລະບົບ";}?>"
        value="" required>
      </div>
      <div class="form-group">
        <label>ຊື່ຜູ້ໃຊ້</label>
        <input type="text" class="form-control" id="usr_name" name="usr_name" placeholder="ຊື່ຜູ້ໃຊ້"
        value="<?php if (isset($Get_edit)){echo $User_edit->usr_name;} ?>" required>
      </div>
      <div class="form-group">
        <label >ນາມສະກຸນຜູ້ໃຊ້</label>
        <input type="text" class="form-control" id="usr_surname" name="usr_surname" placeholder="ນາມສະກຸນຜູ້ໃຊ້"
        value="<?php if (isset($Get_edit)){echo $User_edit->usr_surname;} ?>" required>
      </div>
      <div class="form-group">
        <label>ອີເມວ</label>
        <input type="text" class="form-control" id="usr_email" name="usr_email" placeholder="ອີເມວ"
        value="<?php if (isset($Get_edit)){echo $User_edit->usr_email;} ?>">
      </div>
      <div class="form-group">
        <label >ເບີໂທ</label>
        <input type="text" class="form-control" id="usr_tel" name="usr_tel" placeholder="ເບີໂທ"
        value="<?php if (isset($Get_edit)){echo $User_edit->usr_tel;} ?>">
      </div>
      <div class="form-group">
        <label>ສິດທິເຂົ້າໃຊ້ລະບົບ</label>
        <select class="form-control" id="role_idrole" name="role_idrole" required>
        <?php $__currentLoopData = $User_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($User_role->idrole); ?>" <?php if (isset($Get_edit) && $User_role->idrole == $User_edit->role_idrole){echo "selected";} ?>
          ><?php echo e($User_role->role_title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group">
        <label>ຜູ້ລາຍງານ</label>
        <select class="form-control" id="reporter_idreporter" name="reporter_idreporter" required>
        <option value="" <?php if (isset($Get_edit) && $User_edit->reporter_idreporter == ""){echo "selected";} ?>
        >(ບໍ່ມີ)</option>
        <?php $__currentLoopData = $User_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User_report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($User_report->idreporter); ?>" <?php if (isset($Get_edit) && $User_report->idreporter == $User_edit->reporter_idreporter){echo "selected";} ?>
          ><?php echo e($User_report->reporter_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <?php if(isset($Get_edit)): ?>
        <button type="submit" class="btn btn-primary form_sub" data-action="<?php echo e(url('/admin/user/edit/add')); ?>"> ແກ້ໄຂຂໍ້ມູນ</button>
      <?php else: ?>
        <button type="submit" class="btn btn-primary form_sub" data-action="<?php echo e(url('/admin/user/add')); ?>"> ເພີ່ມຂໍ້ມູນ</button>
      <?php endif; ?>
    </form>
	<?php if(!isset($Get_edit)): ?>
    <div class="space-10"></div>

          <div class="row">
        <div class="col-md-offset-2 col-md-8">
        <form  class="form-horizontal" method="POST" action="<?php echo e(url('/nationalityshow')); ?>" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
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
                    <th>ຊື່ເຂົ້າໃຊ້ລະບົບ</th>
                    <th>ຊື່ຜູ້ໃຊ້</th>
                    <th>ນາມສະກຸນຜູ້ໃຊ້</th>
                    <th>ອີເມວ</th>
                    <th>ເບີໂທ</th>
                    <th>ສິດທິເຂົ້າໃຊ້ລະບົບ</th>
                    <th>ຜູ້ລາຍງານ</th>
                    <th>ວັນທີ່ສ້າງບັນຊີຜູ້ໃຊ້</th>
                    <th>ແກ້ໄຂ</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;?>
                  <?php if(isset($Users)): ?>
                    <?php if( count($Users) > 0): ?>
                      <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td class="center"><?php echo e($i); ?></td>
                          <td><?php echo e($User->username); ?></td>
                          <td><?php echo e($User->usr_name); ?></td>
                          <td><?php echo e($User->usr_surname); ?></td>
                          <td><?php echo e($User->usr_email); ?></td>
                          <td><?php echo e($User->usr_tel); ?></td>
                          <td><?php echo e($User->getRelation('Role')->role_title); ?></td>
                        
                            <?php if(isset($User->getRelation('Report')->reporter_name)): ?>
                              <td><?php echo e($User->getRelation('Report')->reporter_name); ?></td>
                            <?php else: ?>
                              <td> - </td>
                            <?php endif; ?>
                            
                          <td><?php echo e($User->usr_assigned); ?></td>
                          <form method="POST" action="<?php echo e(url('/admin/user/del')); ?>" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" id="idusr" name="idusr" value="<?php echo e($User->idusr); ?>">
                            <td width="9%"><a href="<?php echo e(url('/admin/user/edit')); ?>/<?php echo e($User->idusr); ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp;
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