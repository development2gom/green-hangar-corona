<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EntUsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ent Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-usuarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ent Usuarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_usuario',
            'txt_nombre_completo',
            'txt_token',
            'txt_telefono_celular',
            'txt_cp',
            //'txt_email:email',
            //'num_edad',
            //'num_pelotas',
            //'txt_codigo_promocion',
            //'fch_creacion',
            //'b_aceptar_terminos',
            //'txt_codigo_compra',
            //'txt_colonia',
            //'txt_sitio_compra',
            //'txt_codito_usuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
