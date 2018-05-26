<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntUsuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'txt_nombre_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_telefono_celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_cp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_edad')->textInput() ?>

    <?= $form->field($model, 'num_pelotas')->textInput() ?>

    <?= $form->field($model, 'txt_codigo_promocion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_aceptar_terminos')->textInput() ?>

    <?= $form->field($model, 'txt_codigo_compra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_sitio_compra')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
