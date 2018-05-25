
<?php
use yii\helpers\Url;
?>



<div class="container container-premio">

	<div class="avion avion-qr">
		<img class="avion-image" src="<?=Url::base()?>/webAssets/images/avion.png" alt="Centro Santa Fe">
	</div>

	<h3>Presenta este código <span>para poder accesar</span></h3>
	<img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/ver-codigo?token=' . $usuario->txt_token]) ?>" />

</div>