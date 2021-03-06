<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelicula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelicula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ano')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'sinopsis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cartel')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
