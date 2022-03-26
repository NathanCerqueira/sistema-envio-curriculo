<?php $__env->startComponent('mail::message'); ?>
## Olá <?php echo e($candidate->name); ?> ,

Enviamos este e-mail para agradecer sua vontade de fazer parte do nosso time,
e também desejar boa sorte neste processo seletivo.

Obrigado,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/nathan/Projetos-Laravel/sistema-envio-curriculo/back-end/resources/views/emails/new/candidacy.blade.php ENDPATH**/ ?>