<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pelicula */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelicula-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="media">
        <div class="media-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'ano',
                    'duracion',
                    'sinopsis:ntext',
                ],
            ]) ?>
        </div>
        <div class="media-right">
            <?= Html::img($model->cartel, ['title' =>$this->title ]) ?>
        </div>
    </div>
</div>
