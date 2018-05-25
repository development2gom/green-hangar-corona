<?php
use yii\helpers\Url;

$this->title="Gracias por participar";
?>
<div class="container container-ribbon">

	<div class="avion avion-finalizar">
		<img class="avion-image" src="<?=Url::base()?>/webAssets/images/avion.png" alt="Centro Santa Fe">
	</div>

	<!-- Premio contenedor -->
	<div class="finalizar-cont js-premio-contenedor premio">
		<h3>¡¡Tu registro ha sido exitoso!!</h3>
	    <p>En los próximos minutos recibirás un QR en el celular registrado, deberás presentarlo junto con una identificación oficial en el área de Cashless dentro del Hangar Corona para poder entregarte tu beneficio.</p>
			
		<a class="btn btn-primary" href="<?=Url::base()?>">Finalizar</a>
		
	</div>
	<!-- Fin premio contenedor-->

</div>
