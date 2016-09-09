<?php $__env->startSection('content'); ?>
	
	<h1>Edit the note, fool!</h1>

	<form method="POST" action="/notes/<?php echo e($note->id); ?>">
				<?php echo e(method_field('PATCH')); ?>

				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="form-group">
					<textarea name="body" class="form-control"><?php echo e($note->body); ?></textarea>
					
				</div>
			<div class="form-group">
					<button type="submit" class="btn btn-primary"> Update note</button>
					
			</div>
			
			</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>