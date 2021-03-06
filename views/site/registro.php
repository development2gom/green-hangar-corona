<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;


$this->title="Registro";
$this->registerJsFile('@web/webAssets/js/registro.js',
['depends'=>[\app\assets\AppAsset::className()]]);
?>

<div class="container container-ribbon">
	<!-- Main content Wrapper -->
	<div class="avion">
		<img class="avion-image" src="<?=Url::base()?>/webAssets/images/avion.png" alt="Centro Santa Fe">
	</div>
	<!-- Contenedor de registro -->
	<div class="registro-cont js-registro-contenedor">

		<div class="form-wrapper">
			<?php
			// Inicio de etiqueta <form>
			$form = ActiveForm::begin ( [
					'id' => 'form-usuario-participar',
					'options' => [
							'class' => 'registro'
					]
			] );
			?>
				<?php
				// Genera un input
				echo $form->field ( $usuario, 'txt_nombre_completo' )->textInput ( [
						'maxlength' => 150,
						'placeholder'=>'Nombre completo'
				] )->label(false);
				
				// Genera un input
				/*echo $form->field ( $usuario, 'txt_email' )->textInput ( [
					'placeholder'=>'Email'
				] )->label(false);
				// Genera un input
				echo $form->field ( $usuario, 'txt_cp' )->textInput ( [
					'maxlength' => 5,
					'placeholder'=>'C.P.'			
				] )->label(false);
				echo $form->field ( $usuario, 'num_edad' )->textInput ( [
					'maxlength' => 2,
					'placeholder'=>'Edad'			
				] )->label(false);*/
				
				// Genera un input
				echo $form->field ( $usuario, 'txt_telefono_celular' )->textInput ( [
						'type'=>'number',
						'maxlength' => 10,
						'placeholder'=>'Teléfono celular (10 dígitos)'
				] )->label(false);

				// Genera un input
				echo $form->field ( $usuario, 'txt_colonia' )->textInput ( [
					'placeholder'=>'Colonia'
				] )->label(false);// Genera un input
echo $form->field ( $usuario, 'txt_sitio_compra' )->textInput ( [
	'placeholder'=>'Sitio de compra'
] )->label(false);

				// Genera un input
				echo $form->field ( $usuario, 'num_pelotas' )->textInput ( [
					'type'=>'number',
					'maxlength' => 10,
					'placeholder'=>'Boletos comprados'
				] )->label(false);

				echo $form->field ( $usuario, 'txt_codigo_promocion' )->textInput ( [
					'placeholder'=>"Código de GI'O"
				] )->label(false);

				echo $form->field ( $usuario, 'txt_codigo_compra' )->textInput ( [
					'placeholder'=>'Código de compra'
				] )->label(false);
				
				?>
				
				
				<!---->
				<div class="terminos-wrapper">
					<div class="check-box js-modal-trigger js-check-box-aviso "></div>
					<p class="message">
						He leído y acepto el <span id="aviso-trigger" class="highlight">aviso
							de privacidad</span>
					</p>
				</div>
				<div class="form-cta-wrapper">
					<button class="btn btn-primary ladda-button" id="js-btn-guardar-informacion"  data-style="zoom-in" type="submit"><span class="ladda-label">Enviar</span></button>
				</div>
			<?php
			// Cierre de etiqueta </form>
			ActiveForm::end ();
			?>
		</div>

	</div>
	<!-- Fin contenedor de registro -->

	<!-- Premio contenedor -->
	<div class="js-premio-contenedor" style="display: none; text-align:center">
		<div class="premio js-premio-ajax">

		</div>
		<a class="btn btn-primary js-boton-inicio" href="#">Finalizar</a>
	</div>
	<!-- Fin premio contenedor-->

	<!-- Gracias contenedor -->
	<div class="js-gracias-contenedor" style="display: none;">Muchas
		gracias</div>
	<!-- Fin gracias contenedor -->

</div>
<!-- Main content Wrapper -->

<div class="overlay">
<div class="modal-window modal-wide">
  <div class="panel panel-small">
    <div class="panel-header"><a class="js-dismiss-modal dismiss-modal"><i class="ion ion-ios-close-outline"></i></a><h3>Avisos de Privacidad</h3></div>
    <div class="panel-body">

		
		<h2 class="mt-50">Aviso de Privacidad PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V.</h2>
		<p>Con fundamento en los artículos 15 y 16 de la <strong> LEY FEDERAL DE PROTECCIÓN DE DATOS PERSONALES EN POSESIÓN DE PARTICULARES, hacemos de su conocimiento que, PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V.</strong>, con domicilio en calle Convento de Santa Brígida #19, Colonia Jardines de Santa Mónica, Tlalnepantla, Estado de México, C.P. 54050, es responsable de recabar sus datos personales, del uso que se les dé a los mismos y de su protección. </p>

		<p>Su información personal será utilizada para las siguientes finalidades: proveer los servicios y productos que ha solicitado; notificarle sobre nuevos productos que tengan relación con los ya contratados o adquiridos; comunicarle en los cambios de los mismos; elaborar estudios y programas que son necesarios para determinar hábitos de consumo; realizar evaluaciones periódicas de nuestros productos y servicios para efecto de mejorar la calidad de los mismos; evaluar la calidad del servicio que brindamos, y en general  para dar cumplimiento a las obligaciones que hemos contraído para con Usted. </p>

		<p>Para las finalidades antes mencionadas, en forma enunciativa más no limitativa podríamos obtener alguno de los siguientes datos personales: nombre completo, teléfono fijo y/o teléfono celular, correo electrónico, dirección de facebook, twitter, y/o cualquier otra red social, así como domicilio particular y de trabajo. </p>

		<h5>LIMITACIÓN DE USO Y DIVULGACIÓN</h5>

		<p>El tratamiento de sus datos personales será el que resulte necesario, adecuado y relevante en relación con las finalidades previstas en esta Política de Privacidad. </p>

		<p>PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., cumple los principios de protección de datos personales establecidos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y adopta las medidas necesarias para su aplicación. Lo anterior aplica aún y cuando estos datos fueren tratados por un tercero, a solicitud de PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., y con el fin de cubrir los servicios necesarios, manteniendo la confidencialidad en todo momento. PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., toma las medidas necesarias y suficientes para procurar que esta Política de Privacidad sea respetada, por él o por terceros con los que guarde alguna relación, para otorgar los servicios o productos establecidos con el titular.</p>

		<p>La obligación de acceso a la información se dará por cumplida cuando se ponga a disposición del titular los datos personales, o bien, mediante la expedición de copias simples, documentos electrónicos o cualquier otro medio que PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., provea al titular</p>

		<p>En el caso de que el titular solicite acceso a los datos a una persona que presume es el responsable, y ésta resulta no serlo, bastará con que así se le indique al titular por cualquiera de los medios impresos (carta de procedencia) o electrónicos (correo electrónico, medios audiovisuales, etc.), para tener por cumplida la solicitud. </p>

		<p>PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., limitará el uso de los datos personales sensibles a petición expresa del titular, y no estará obligada a cancelar los datos personales cuando: </p>

		<ol>
			<li>Se refiera a las partes de un contrato privado, social, administrativo, y sean necesarios para su desarrollo y cumplimiento</li>
			<li>Deban ser tratados por disposición legal</li>
			<li>Obstaculice actuaciones judiciales o administrativas vinculadas a obligaciones fiscales, la investigación y persecución de delitos, o la actualización de sanciones administrativas</li>
			<li>Sean necesarios para proteger los intereses jurídicamente tutelados del titular</li>
			<li>Sean necesarios para realizar una acción en función del interés público</li>
			<li>Sean necesarios para cumplir con una obligación legalmente adquirida por el titular, o…</li>
			<li>Sean objeto de tratamiento para la prevención o el diagnóstico médico o la gestión de servicios de salud, siempre que dicho tratamiento se realice por un profesional de la salud sujeto a un deber secreto.</li>
		</ol>

		<p> <strong> Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar su consentimiento, para lo cual se puede poner en contacto directamente a Publicidad y Soluciones Green S.A. de C.V., la cual puede localizar en la dirección ya señalada en el primer párrafo de este aviso, o al teléfono 24-87-01-01, y en el correo electrónico info@publicidadgreen.com.mx, o bien a través de un escrito libre acompañado de una copia de su identificación oficial, y especificando los datos personales que quiera proteger, entregándolo en la misma dirección ya citada</strong>, PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V., contará con 20 días hábiles para atender su solicitud </p>

		<p>Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. </p>

		<p><strong>Es importante informarle que Usted tiene derecho al acceso, ratificación, y cancelación de sus datos personales, a oponerse al tratamiento de los mismos o a revocar el consentimiento que para dicho fin nos haya otorgado.</strong>
		</p>

		<p>Al aceptar las condiciones y términos establecidos por medio del presente aviso de privacidad se considera otorgado el consentimiento expreso para que PUBLICIDAD GREEN, haga uso de manejo tratamiento y transferencia de sus datos personales para los fines descritos.</p>

		<h5>CAMBIOS A ESTA DECLARACIÓN DE PRIVACIDAD</h5>

		<p><strong>SOLUCIONES GREN S.A. DE C.V. </strong> podrá en cualquier momento actualizar esta declaración de privacidad. En el caso de que se produzcan cambios sustanciales a esta declaración, lo comunicaremos a través de nuestras páginas de internet señaladas en el párrafo tres de este Aviso de Privacidad.</p>

		<p>Por lo anterior, les sugerimos visitar periódicamente esta declaración de privacidad</p>

		<p>Contacto PUBLICIDAD Y SOLUCIONES GREEN S.A. DE C.V.    <a href="mailto:info@publicidadgreen.com.mx">info@publicidadgreen.com.mx</a></p>
		<div class="accept-btn-wrapper">
			<a class="btn btn-primary js-btn-aceptar-aviso" href=""> Acepto los avisos de privacidad </a>
		</div>
    </div>
    <div class="panel-footer"><h6>CENTRO COMERCIAL SANTA FE y P. GREEN 2017</h6></div>
  </div>
</div>
</div>

 <div class="aviso-box" style="display:none;">

      <div class="close-btn-wrapper">
        <a class="js-btn-cerrar-aviso" href=""><i class="ion-close-circled"> </i>cerrar</a>
      </div>

  </div>
