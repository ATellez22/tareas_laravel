<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis tareas</title>

    <!-- Bootstrap CSS -->    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
	 rel="stylesheet">

    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
    
        a {
            text-decoration: none;
        }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('todos')); ?>">Todos </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link <?php echo e(str_contains('todos',Route::current()->getName())? 'active': ''); ?>" href="<?php echo e(route('todos')); ?>">Tareas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(str_contains('categories', Route::current()->getName()) ? 'active' : ''); ?>" href="<?php echo e(route('categories.index')); ?>">Categorias</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>


    <!-- Bundle -->	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH C:\Users\Admin\Desktop\Practicas\PHP\tareas_laravel\resources\views/app.blade.php ENDPATH**/ ?>