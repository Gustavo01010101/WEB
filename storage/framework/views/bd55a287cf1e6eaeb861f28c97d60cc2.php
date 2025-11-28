<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<item>
    <nome><?php echo e($item->nome); ?></nome>
    <data><?php echo e($item->data); ?></data>
    <e_pirata><?php echo e($item->e_pirata == 0 ? "false" : "true"); ?></e_pirata>
    <valor_recompensa><?php echo e($item->Valor_Recompensa); ?></valor_recompensa>
    <idade><?php echo e($item->Idade); ?></idade>
</item>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</data>
<?php /**PATH C:\Users\Pichau\exemploapp\resources\views/data_xml.blade.php ENDPATH**/ ?>