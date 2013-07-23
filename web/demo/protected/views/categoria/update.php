<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id_categoria=>array('view','id'=>$model->id_categoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'View Categoria', 'url'=>array('view', 'id'=>$model->id_categoria)),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Update Categoria <?php echo $model->id_categoria; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>