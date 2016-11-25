<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиенты без заказов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">
fgdghd
    <h1><?= Html::encode($this->title) ?></h1>
<h1><?= Html::encode($dataProvider) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
	
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'fullnamecity',
//            'countorders',
        ],
    ]); ?>

</div>
