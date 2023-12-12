<?php $__env->startSection('content'); ?>

<!-- breadcrumb Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Products Details</h1>
					<p></p>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Products</a></li>
					  	<li class="active">Single Products</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->




	<section id="single-product">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="<?php echo e(asset('website/images/single-product.png')); ?>" alt="">
					</div>

				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-4">
					<div class="block">
						<div class="product-des">
							<h4>Claritas est etiam</h4>
							<p class="price">$380</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, culpa, esse, magni omnis blanditiis unde vitae in nobis fuga optio numquam at ipsum impedit perspiciatis quia rem consequatur recusandae repudiandae provident nemo voluptatibus corporis ab id iste pariatur ipsam vero porro eos eaque rerum nam dolorum mollitia adipisci. Quaerat, ullam!</p>
							<a class="view-link" href="#"><i class="fa fa-plus-circle"></i>Add To Cart</a>
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4 class="top-catagori-heading">Latest Food Items</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="<?php echo e(asset('website/images/post-img.png')); ?>" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Lamb leg roast
							      		<p>Lorem ipsum dolor sit amet.</p></a>
							    	</div>
							  	</li>	<!-- End of /.media -->
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="<?php echo e(asset('website/images/post-img-2.png')); ?>" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading"> Lamingtons
							      		<p>Lorem ipsum dolor.</p></a>
							    	</div>
							  	</li>	<!-- End of /.media -->
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="<?php echo e(asset('website/images/post-img-3.png')); ?>" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		Anzac Salad
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>	<!-- End of /.media -->
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="<?php echo e(asset('website/images/post-img-3.png')); ?>" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		Anzac Salad
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>	<!-- End of /.media -->
							</ul>	<!-- End of /.media-list -->
						</div>	<!-- End of /.block -->

					</div>	<!-- End of /.blog-sidebar -->

				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
			<div class="row">
				<div class="col-md-9">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">More Info</a></li>
						<li><a href="#profile" data-toggle="tab">Comments</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi quidem vel sit expedita nam sint non explicabo magni totam?</p>
						</div>
						<div class="tab-pane" id="profile">
							<p>No customer comments for the moment.</p>
						</div>
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<img src="<?php echo e(asset('website/images/food-ad.png')); ?>" alt="">
						</div> <!-- End of /.block -->
					</div>	<!-- End of /.blog-sidebar -->
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('links'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\finalsd\resources\views/website/pages/product.blade.php ENDPATH**/ ?>