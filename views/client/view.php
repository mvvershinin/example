<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Client */

$this->title = $model->lastname . ' ' . $model->firstname;
$this->params['breadcrumbs'][] = ['label' => 'Клиенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-view">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		<?php
			if(isset($model->photo) && file_exists(Yii::getAlias('@webroot', $model->photo)))
        		{
			    echo Html::img('@web/images/' . $model->photo, ['class'=>'img-responsive']);
		        }
    		?>
		</div>
		<div class="col-md-8">
			<p>
				<h2>
				    <?= Html::encode($model->lastname . ' ' . $model->firstname) ?>
				</h2>
				<h3>
				    <?= Html::encode('г. '. $model->namecity)  ?>
				</h3>
			</p>
		    	<p>
			        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
			        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            				'class' => 'btn btn-danger',
				        'data' => [
				                'confirm' => 'Are you sure you want to delete this item?',
				                'method' => 'post',
					          ],
				]) ?>
			</p>
		</div>
	</div>
</div>
</div>
