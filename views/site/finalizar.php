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
		<h3>¡Gracias por participar!</h3>
	    <p>Recibirás al instante un QR al celular registrado como comprobante de participación, el cual deberás conservar para poder reclamar el premio en caso de resultar ganador, así como el ó los tickets participantes.</p>
			
		<a class="btn btn-primary" href="<?=Url::base()?>">Finalizar</a>
		
	</div>
	<!-- Fin premio contenedor-->

</div>
