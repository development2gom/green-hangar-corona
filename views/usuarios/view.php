<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EntUsuarios */

$this->title = $model->id_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Ent Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_usuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_usuario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_usuario',
            'txt_nombre_completo',
            'txt_token',
            'txt_telefono_celular',
            'txt_cp',
            'txt_email:email',
            'num_edad',
            'num_pelotas',
            'txt_codigo_promocion',
            'fch_creacion',
            'b_aceptar_terminos',
            'txt_codigo_compra',
            'txt_colonia',
            'txt_sitio_compra',
            'txt_codito_usuario',
        ],
    ]) ?>

</div>
