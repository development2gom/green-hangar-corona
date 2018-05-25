<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = '24 ANIVERSARIO CENTRO COMERCIAL SANTA FE';
?>

<div class="avion">
	<img class="avion-image" src="<?=Url::base()?>/webAssets/images/avion.png" alt="Centro Santa Fe">
</div>
	
<div class="container container-home">
	<!-- Main content Wrapper -->
	
	<!-- Contenedor de las tarjetas -->
	<div class="inicio-cont js-tarjetas-contenedor">

		<img class="logo-hangar" src="webAssets/images/logo-AeroCorona.png" alt="Centro Santa Fe">

		<!-- Seleccion de Tarjeta -->
		<div class="inicio-cont-actions">

            <?= Html::a('<span class="ladda-label">Comenzar</span>', ['site/registro'], ['class'=>'btn btn-primary js-next-step ladda-button', 'data-style'=>'zoom-in']);?>

		</div>

		<!-- Termina Seleccion de Tarjeta -->

	</div>
	<!-- Fin contenedor de las tarjetas -->

</div>
<!-- Main content Wrapper -->
