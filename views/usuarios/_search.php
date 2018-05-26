<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntUsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_usuario') ?>

    <?= $form->field($model, 'txt_nombre_completo') ?>

    <?= $form->field($model, 'txt_token') ?>

    <?= $form->field($model, 'txt_telefono_celular') ?>

    <?= $form->field($model, 'txt_cp') ?>

    <?php // echo $form->field($model, 'txt_email') ?>

    <?php // echo $form->field($model, 'num_edad') ?>

    <?php // echo $form->field($model, 'num_pelotas') ?>

    <?php // echo $form->field($model, 'txt_codigo_promocion') ?>

    <?php // echo $form->field($model, 'fch_creacion') ?>

    <?php // echo $form->field($model, 'b_aceptar_terminos') ?>

    <?php // echo $form->field($model, 'txt_codigo_compra') ?>

    <?php // echo $form->field($model, 'txt_colonia') ?>

    <?php // echo $form->field($model, 'txt_sitio_compra') ?>

    <?php // echo $form->field($model, 'txt_codito_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
