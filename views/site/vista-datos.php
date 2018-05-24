
<?php
use yii\helpers\Url;
use app\models\Utils;

$this->title="Gracias por participar | Datos de participante";
?>
<div class="container container-ribbon">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor">
		<div class="premio js-premio-ajax">
			<h2>Datos del Concursante</h2>
			<br>
			<table class="data-table">
				<tbody>
					<tr>
						<td class="concepto-cell">Nombre</td>
						<td class="data-cell"><?=$usuario->txt_nombre_completo?></td>
					</tr>
					<tr>
						<td class="concepto-cell">Teléfono celular</td>
						<td class="data-cell"><?=$usuario->txt_telefono_celular?></td>
					</tr>
					<tr>
						<td class="concepto-cell">Número de esferas calculado</td>
						<td class="data-cell"><?=$usuario->num_pelotas?></td>
					</tr>
					<tr>
						<td class="concepto-cell">Correo electrónico</td>
						<td class="data-cell"><?=$usuario->txt_email?></td>
					</tr>
					<tr>
						<td class="concepto-cell">Fecha y hora que participación</td>
						<td class="data-cell"><?=$usuario->fch_creacion?></td>
					</tr>
				</tbody>
				
			</table>
		</div>
		
	</div>
	<!-- Fin premio contenedor-->

</div>