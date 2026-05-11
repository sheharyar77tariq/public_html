<?php $__env->startSection('content'); ?>
<div class="container pt-100 pb-100">
    <div class="d-flex justify-content-center">
        <div class="verification-code-wrapper custom__bg">
            <div class="verification-area ">
                <form action="<?php echo e(route('user.go2fa.verify')); ?>" method="POST" class="submit-form">
                    <?php echo csrf_field(); ?>

                    <?php echo $__env->make($activeTemplate.'partials.verification_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="form--group">
                        <button type="submit" class="btn btn--base w-100"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate .'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u961900210/domains/darkviolet-hippopotamus-325070.hostingersite.com/public_html/core/resources/views/templates/basic/user/auth/authorization/2fa.blade.php ENDPATH**/ ?>