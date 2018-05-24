<?php
use yii\helpers\Url;

$this->title="Gracias por participar";
?>
<div class="container container-ribbon">
	<img class="serpentina" src="<?=Url::base()?>/webAssets/images/serpentina.png" alt="Serpentinas - Centro Santa Fe">

	<img class="logo-evento" src="<?=Url::base()?>/webAssets/images/logo-centro-sta-fe.png" alt="Centro Santa Fe">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor premio">
		<h3>¡Gracias por participar!</h3>
	    <p>Recibirás al instante un QR al celular registrado como comprobante de participación, el cual deberás conservar para poder reclamar el premio en caso de resultar ganador, así como el ó los tickets participantes.</p>
			
		<a class="btn btn-primary" href="<?=Url::base()?>">Finalizar</a>
		
	</div>
	<!-- Fin premio contenedor-->

</div>
