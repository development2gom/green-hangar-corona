<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EntUsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consulta de códigos';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
['depends'=>[\app\assets\AppAsset::className()]]);
$this->registerJsFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
['depends'=>[\app\assets\AppAsset::className()]]);
?>

<div class="container-fluid container-ribbon">
<!-- Main content Wrapper -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php Pjax::begin(); ?>
            


                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'pager'=>[
                        'maxButtonCount'=>5
                    ],
                    'columns' => [
                       

                        
                        'txt_nombre_completo',
                        
                        
                        'num_pelotas',
                        
                        'txt_codito_usuario',
                    ],
                ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
    
    
</div>
