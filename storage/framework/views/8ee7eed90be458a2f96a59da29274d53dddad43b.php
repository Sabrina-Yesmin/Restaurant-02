
<?php if(Session::has('msg')): ?>
<div class="alert alert-danger" role="alert">
<p><?php echo e(Session::get('msg')); ?></p>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\finalsd\resources\views/website/includes/msg.blade.php ENDPATH**/ ?>