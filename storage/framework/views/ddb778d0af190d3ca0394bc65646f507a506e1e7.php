

<?php $__env->startSection('content'); ?>

<div class="container w-25 border p-4">
    <div class="row mx-auto">
    <form  method="POST" action="<?php echo e(route('categories.update',['category' => $category->id])); ?>">
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>

        <div class="mb-3 col">

        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

         <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <?php if(session('success')): ?>
                <h6 class="alert alert-success"><?php echo e(session('success')); ?></h6>
        <?php endif; ?>

            <label for="exampleFormControlInput1" class="form-label">Nombre de la categoría</label>
            <input type="text" class="form-control mb-2" name="name" id="exampleFormControlInput1" placeholder="Hogar" value="<?php echo e($category->name); ?>">
            
            <label for="exampleColorInput" class="form-label">Escoge un color para la categoría</label>
            <input type="color" class="form-control form-control-color" name="color" id="exampleColorInput" value="<?php echo e($category->color); ?>" title="Choose your color">

            <input type="submit" value="Actualizar categoria" class="btn btn-primary my-2" />
        </div>
    </form>

    <div >
    <?php if($category->todos->count() > 0): ?>
        <?php $__currentLoopData = $category->todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="<?php echo e(route('todos-edit', ['id' => $todo->id])); ?>"><?php echo e($todo->title); ?></a>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="<?php echo e(route('todos-destroy', [$todo->id])); ?>" method="POST">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    <?php else: ?>
        No hay tareas para esta categoría
    <?php endif; ?>
    
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Practicas\PHP\tareas_laravel\resources\views/categories/show.blade.php ENDPATH**/ ?>