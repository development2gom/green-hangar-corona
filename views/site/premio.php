<?php
use yii\helpers\Url;

$this->title="Gracias por participar";
?>
<div class="container container-ribbon">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor" style="text-align:center">
		<div class="premio js-premio-ajax">
			<img style="width:100%" src="<?=Url::base()."/webAssets/images/premios/".$premio->id_premio.".png"?>" />
		</div>
		
	</div>
	<!-- Fin premio contenedor-->

</div>
