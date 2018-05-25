
<?php
use yii\helpers\Url;
?>

<div class="avion">
	<img class="avion-image" src="<?=Url::base()?>/webAssets/images/avion.png" alt="Centro Santa Fe">
</div>

<div class="container container-premio">

	<h3>Presenta este código para poder accesar</h3>
	<img src="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/ver-codigo?token=' . $usuario->txt_token]) ?>" />

</div>