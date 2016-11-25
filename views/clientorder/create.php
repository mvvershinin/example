<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clientorder */

$this->title = 'Создать заказ';
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
	'client' => $client,
    ]) ?>

</div>
