
<?php $__env->startSection('content'); ?>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="formempleados.php">Agregar Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formempresa.php">Agregar Empresa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
    <div class='container'>
        <h4>Lista de usuarios</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <td>username</td>
                            <td>nombre</td>
                            <td>correo</td>
                            <td>telefono</td>
                            <td>direccion</td>
                            <td>contraseña</td>
                            <td>rol_id</td>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($usuario->username); ?></td>
                                    <td><?php echo e($usuario->nombre); ?></td>
                                    <td><?php echo e($usuario->correo); ?></td>
                                    <td><?php echo e($usuario->telefono); ?></td>
                                    <td><?php echo e($usuario->direccion); ?></td>
                                    <td><?php echo e($usuario->contraseña); ?></td>
                                    <td><?php echo e($usuario->rol_id); ?></td>
                                    <td><a href="" class="btn btn-info">Editar</a></td>
                                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/pages/home.blade.php ENDPATH**/ ?>