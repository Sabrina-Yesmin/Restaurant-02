<!doctype html>
<html lang="en">
<head>

    <?php echo $__env->make('website.includes.whead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->

    <?php echo $__env->make('website.includes.wtopbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- LOGO Start
    ================================================== -->
    <?php echo $__env->make('website.includes.wlogo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('website.includes.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- MENU Start
    ================================================== -->

	<?php echo $__env->make('website.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- SLIDER Start
    ================================================== -->
    <?php echo $__env->yieldContent('content'); ?>






	<!-- FOOTER Start
    ================================================== -->

	<?php echo $__env->make('website.includes.firstfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



	<!-- FOOTER-BOTTOM Start
    ================================================== -->
    <?php echo $__env->make('website.includes.lastfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<a id="back-top" href="#"></a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\finalsd\resources\views/website/layouts/website.blade.php ENDPATH**/ ?>