<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Отчеты';
?>
<div class="site-index">

    <div class="jumbotron">

        <h1>Отчеты</h1>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Отчет 1</h2>

                <p>вывод всех клиентов и количество сделанных заказов.</p>

                <p>
		<?= Html::a('Смотреть', ['/client/list'], ['class' => 'btn btn-info']) ?>
	        </p>
            </div>
            <div class="col-lg-4">
                <h2>Отчет 2</h2>

                <p>вывод количества заказов по городам.</p>

                <p>
		<?= Html::a('Смотреть', ['/city'], ['class' => 'btn btn-info']) ?>
		</p>
            </div>
            <div class="col-lg-4">
                <h2>Отчет 3</h2>

                <p>вывод списка клиентов которые НЕ сделали ни одного заказа.</p>

                <p>
		<?= Html::a('Смотреть', ['/client/zeroorder'], ['class' => 'btn btn-info']) ?>
		</p>
            </div>
        </div>

    </div>
</div>
