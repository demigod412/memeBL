<?php $__env->startSection('title', __('Server Error')); ?>
<?php $__env->startSection('code', '500'); ?>
<?php $__env->startSection('message', __('An unexpected error seems to have occured. Why not try refreshing your page? Or you can contact us if the problem persist ')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u731824248/domains/optimatraderpro.com/public_html/appx/resources/views/errors/500.blade.php ENDPATH**/ ?>