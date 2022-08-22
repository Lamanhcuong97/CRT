<?php $__env->startSection('page_title', 'STR ALL'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<div class="space-10"></div>

<div class="container">

  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
        <div class="card card-container">
          <div class="space-10"></div>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

            <form class="form-signin" method="POST" action="<?php echo e(url('/reset/add')); ?>">
            <?php echo e(csrf_field()); ?>

                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">ລະຫັດປະຈຸບັນ</p>
                <input type="password" id="username" name="password" class="login_box" placeholder="ປ້ອນລະຫັດປະຈຸບັນ" required autofocus>
                <p class="input_title">ລະຫັດໃໝ່</p>
                <input type="password" id="newpass1" name="newpass1" class="login_box" placeholder="ປ້ອນລະຫັດໃໝ່" required>
                <p class="input_title">ລະຫັດໃໝ່ອີກຄັ້ງ</p>
                <input type="password" id="newpass2" name="newpass2" class="login_box" placeholder="ປ້ອນລະຫັດໃໝ່ອີກຄັ້ງ" required>
                <div id="remember" class="checkbox">
                    <label>

                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">ປ່ຽນລະຫັດ</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainreset', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>