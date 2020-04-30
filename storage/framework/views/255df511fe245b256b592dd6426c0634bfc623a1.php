<div class="alert alert-<?php echo e($type); ?> alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    <?php if(isset($title)): ?>
        <strong><?php echo e($title); ?></strong>
    <?php endif; ?>

    <?php echo e($slot); ?>

</div>
<?php /**PATH /var/www/html/notification/resources/views/components/alerts/dismissible.blade.php ENDPATH**/ ?>