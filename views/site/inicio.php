<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '24 ANIVERSARIO CENTRO COMERCIAL SANTA FE';
?>

<div class="container container-home">
	<!-- Main content Wrapper -->
	<img class="logo-evento logo-evento-inicio" src="webAssets/images/logo-centro-sta-fe.png" alt="Centro Santa Fe">
	<!-- Contenedor de las tarjetas -->
	<div class="js-tarjetas-contenedor">

		<!-- Seleccion de Tarjeta -->
		<div class="selecciona-tarjeta-wrapper">

            <?= Html::a('<span class="ladda-label">Comenzar</span>', ['site/registro'], ['class'=>'btn btn-primary js-next-step ladda-button', 'data-style'=>'zoom-in']);?>

		</div>

		<!-- Termina Seleccion de Tarjeta -->

	</div>
	<!-- Fin contenedor de las tarjetas -->

</div>
<!-- Main content Wrapper -->
