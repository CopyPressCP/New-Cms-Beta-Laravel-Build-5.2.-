<?php $__env->startSection('content'); ?>
	
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1><?php echo e($card->title); ?></h1>

		<ul class="list-group">
			<?php foreach($card->notes as $note): ?>
				<li class="list-group-item">
				<?php echo e($note->body); ?>

				<?php if($note->user): ?>
				<a href="#" class="pull-right"><?php echo e($note->user->username); ?></a>
				<?php endif; ?>
				</li>
				<a href="/notes/<?php echo e($note->id); ?>/edit" class="btn btn-primary">Edit Note </a>
			<?php endforeach; ?>
		</ul>

		<hr>
			<h3>Add a New Note</h3>

			<form method="POST" action="/cards/<?php echo e($card->id); ?>/notes">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="form-group">
					<textarea name="body" class="form-control"><?php echo e(old('body')); ?></textarea>
					
				</div>
			<div class="form-group">
					<button type="submit" class="btn btn-primary"> Add note</button>
					
			</div>
			
			</form>
			<?php if(count($errors)): ?>

				<ul><?php foreach($errors->all() as $error): ?>

						<li><?php echo e($error); ?></li>

					<?php endforeach; ?>
				</ul>

			<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>