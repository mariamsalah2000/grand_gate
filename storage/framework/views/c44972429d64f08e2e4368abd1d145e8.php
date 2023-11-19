<?php $__env->startSection('content'); ?>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('all.edit_project')); ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('projects.update',$project->id)); ?>" method="POST" enctype="multipart/form-data"><?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong><?php echo e(trans('all.Name')); ?></strong></label>
                                <input type="text" value="<?php echo e($project->name); ?>" name="name" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong><?php echo e(trans('all.order')); ?></strong></label>
                                <input type="number" name="order" class="form-control" value="<?php echo e($project->order); ?>">
                            </div>
                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="category"><strong><?php echo e(trans('all.category')); ?></strong></label>
                                <select name="category_id" class="form-control" value="<?php echo e($project->category->id); ?>">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php if($category->id == $project->category_id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <?php if($project->images): ?>
                            <?php $__currentLoopData = $project->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e(asset($image->url)); ?>" alt="<?php echo e($project->name); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="image"><strong><?php echo e(trans('all.image')); ?></strong></label>
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                            <br>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('all.update')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iwan\resources\views/backend/projects/edit.blade.php ENDPATH**/ ?>