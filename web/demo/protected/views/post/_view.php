<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_post')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_post), array('view', 'id'=>$data->id_post)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria); ?>
	<br />


</div>