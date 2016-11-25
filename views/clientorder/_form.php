<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Clientorder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientorder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->dropDownList(
  		ArrayHelper::map($client, 'id', 'fullnamecity'),
		['prompt' => 'Выберете клиента...']
	) ?>


    <?= $form->field($model, 'orderdata')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
