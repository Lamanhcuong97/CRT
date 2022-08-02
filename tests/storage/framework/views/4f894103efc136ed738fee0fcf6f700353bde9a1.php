<?php $__env->startSection('page_title', 'STR ALL'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-10"></div>
<div class="space-10"></div>
<div class="space-10"></div>
<div class="space-10"></div>

<div class="container">
        <div class="card card-container">
        <div class="space-10"></div>
        <div class="center animated fadeInDown">
            <img src="<?php echo e(url('/images/amlio_logo.png')); ?>" width="140" />
        </div>
        <hr>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

            <form class="form-signin" method="POST" action="<?php echo e(url('/login')); ?>">
            <?php echo e(csrf_field()); ?>

                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Username</p>
                <input type="text" id="username" name="username" class="login_box" placeholder="Input Username" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="password" name="password" class="login_box" placeholder="Input Password" required>
                <div id="remember" class="checkbox">
                    <label>

                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainindex', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>