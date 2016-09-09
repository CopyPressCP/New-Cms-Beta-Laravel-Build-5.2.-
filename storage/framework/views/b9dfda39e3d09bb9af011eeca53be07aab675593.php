<?php $__env->startSection('content'); ?>

	<h1>Cards here!</h1>

	<?php foreach($cards as $card): ?>
		<div>
			<a href="/cards/<?php echo e($card->id); ?>"><?php echo e($card->title); ?> </a>
		</div>
	<?php endforeach; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>