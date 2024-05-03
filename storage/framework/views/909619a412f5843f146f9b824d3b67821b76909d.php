

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Verifica tu correo')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(__('Un enlace de verificación ha sido enviado a tu correo.')); ?>

                    </div>
                    <?php endif; ?>

                    <?php echo e(__('Antes de continuar, por favor revisa en tu correo el enlace de verificación.')); ?>

                    <?php echo e(__('Si no recibiste el correo')); ?>,
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('haz click aquí para solicitar otro')); ?></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SunFlowers\resources\views/auth/verify.blade.php ENDPATH**/ ?>