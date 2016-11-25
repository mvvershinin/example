<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<?php
				if(isset($model->photo) && file_exists(Yii::getAlias('@webroot', $model->photo)))
		        		{echo Html::img('@web/images/' . $model->photo, ['class'=>'img-responsive']);}
			?>
			<?= $form->field($model, 'file')->fileInput()->label('') ?>
		</div>
		<div class="col-md-8">
<div class="form-group">	


    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'city')->dropDownList(
  		ArrayHelper::map($city, 'id', 'name'),
		['prompt' => 'Выберите город...']
	) ?>

</div>
		</div>
	</div>
</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
