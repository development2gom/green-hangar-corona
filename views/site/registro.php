<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;


$this->title="Registro";
?>

<div class="container container-ribbon">
	<!-- Main content Wrapper -->

	<!-- Contenedor de registro -->
	<div class="js-registro-contenedor">
		<img class="serpentina" src="<?=Url::base()?>/webAssets/images/serpentina.png" alt="Serpentinas - Centro Santa Fe">
		<img class="logo-evento" src="<?=Url::base()?>/webAssets/images/logo-centro-sta-fe.png" alt="Centro Santa Fe">
		


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
				echo $form->field ( $usuario, 'txt_email' )->textInput ( [
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
				] )->label(false);
				
				// Genera un input
				echo $form->field ( $usuario, 'txt_telefono_celular' )->textInput ( [
						'type'=>'number',
						'maxlength' => 10,
						'placeholder'=>'Teléfono'
				] )->label(false);



				// Genera un input
				echo $form->field ( $usuario, 'num_pelotas' )->textInput ( [
					'type'=>'number',
					'maxlength' => 10,
					'placeholder'=>'Número de esferas'
				] )->label(false);

				echo $form->field ( $usuario, 'txt_codigo_promocion' )->textInput ( [
					'placeholder'=>'CSF17'
				] )->label(false);
				
				?>
				
				
				<!---->
				<div class="terminos-wrapper">
					<div class="check-box js-modal-trigger js-check-box-aviso"></div>
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

		<h2>Aviso de Privacidad Administradora de Centros Comerciales Santa Fe, S.A. de C.V.</h2>
		<p>El presente Aviso de Privacidad<span class="superscript">1</span> se emite en cumplimiento con lo dispuesto en los artículos 6, 8, 15 y 16 de  la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (en lo sucesivo la “Ley”).</p> 
		<p>Administradora de Centros Comerciales Santa Fe, S.A. de C.V. (en lo sucesivo “ACFE”), está comprometida con la transparencia, seguridad y privacidad de los Datos Personales<span class="superscript">2</span>  de nuestros clientes, proveedores y usuarios. Al recopilar y tratar<span class="superscript">3</span> sus Datos Personales, ACFE, se compromete y obliga a observar y cumplir los principios de licitud, consentimiento, calidad, información, finalidad, lealtad, proporcionalidad y responsabilidad previstos en la Ley (artículo 6).</p>  
		<p>De acuerdo a lo anterior, el presente Aviso de Privacidad aplica a todo tipo de información, incluyendo la relativa a  Datos Personales Sensibles<span class="superscript">4</span> de nuestros clientes, proveedores y usuarios, así como de terceros con los que ACFE pretenda iniciar una relación contractual, o cualesquier otro. Por lo antes mencionado, y al momento de leer el presente Aviso de Privacidad, usted otorga su consentimiento a ACFE,  para que recopile, utilice y transfiera sus Datos Personales para los fines que más adelante se especifican.</p>
		<p>Con el objeto de dar cumplimiento a lo establecido en el Artículo 16 de la Ley se señala lo siguiente:</p>

		<h5>IDENTIDAD Y DOMICILIO DE ACFE:</h5>
		<p>ACFE es una sociedad mercantil debidamente constituida conforme a las leyes de los Estado Unidos Mexicanos, con domicilio para efectos del presente Aviso de Privacidad, en Avenida Vasco de Quiroga 3800, 2º nivel, junto a El Palacio de Hierro, Colonia Antigua Mina la Totolapa, Cuajimalpa, 05109, en México Distrito Federal.</p>
		<p>En términos del Artículo 30 de la Ley, toda comunicación relacionada con el presente Aviso de Privacidad deberá dirigirse al departamento de Centro de Atención, designado por ACFE como responsable de la recopilación,  tratamiento así como  de las solicitudes relacionadas con el acceso, rectificación, cancelación u oposición de los Datos Personales.</p>

		<h5>FINALIDAD </h5> <p>La finalidad de la recopilación y tratamiento de los Datos Personales incluyendo en algunos casos,  Datos Personales Sensibles, es ofrecer a nuestros usuarios, clientes y proveedores, una mejor comunicación y difusión de las políticas y normas generales de operación en relación con las áreas de administración y fianzas, comercialización, atención al cliente, mercadotécnica, entre otras. Entre la información que ACFE pudiera solicitar, se encuentra de manera enunciativa más no limitativa: nombre completo, número telefónico, correo electrónico, compañía a la que pertenece, domicilio.</p>

		<h5>OPCIONES Y MEDIOS QUE ACFE  PONE A SU DISPOSICIÓN PARA LIMITAR EL USO O DIVULGACIÓN DE SUS DATOS PERSONALES</h5>
		<p>ACFE cuenta con las medidas de seguridad, administrativas, técnicas y físicas necesarias e implementadas conforme a sus políticas y procedimientos de seguridad, para asegurar sus Datos Personales contra un uso indebido o ilícito, un acceso no autorizado, o contra la pérdida, alteración, robo o modificación de sus Datos Personales, quedando prohibido su divulgación ilícita y limitando su tratamiento conforme a lo previsto en el presente Aviso de Privacidad y en la legislación aplicable.</p>

		<h5>MEDIOS PARA EJERCER SUS DERECHOS ARCO<span class="superscript">5</span></h5>
		<p>Usted, como titular de los Datos Personales, puede ejercer frente a ACFE, cualquiera de los derechos de acceso, rectificación, cancelación y oposición (en lo sucesivo Derechos ARCO) contemplados en el artículo 22 de la Ley y que se explican a continuación, en el entendido que cada uno de estos derechos es independiente entre sí, es decir, no es necesario agotar uno para ejercer alguno de los otros tres:</p>
		<ol>
			<li>Acceso: facultad que tiene de solicitar a ACFE que le informe si en sus Bases de Datos6  tiene alguno de sus Datos Personales.   Rectificación: derecho que tiene para que se corrijan los Datos Personales que se encuentren en posesión de ACFE, para ello, es posible que  le solicitemos la presentación de documentación que acredite las correcciones que solicita.</li>
			<li>Cancelación: facultad que tiene de solicitar, una vez que termine la relación con ACFE, la cancelación de sus Datos Personales en posesión de ACFE.</li>
			<li>Oposición: facultad que tiene de solicitar a ACFE que se abstenga de realizar el tratamiento de sus Datos Personales en determinadas situaciones. No obstante, ACFE no estará obligada a suspender el tratamiento de los datos en los supuestos señalados en la Ley.</li>
		</ol>
		<p>Las solicitudes para el ejercicio de sus derechos ARCO deberán presentarse por escrito a ACFE en el domicilio señalado en el presente Aviso de Privacidad. Su solicitud deberá contener al menos: (i) su nombre y domicilio o medio para recibir comunicaciones; (ii) su identificación o documentos que acrediten la personalidad de su representante legal; (iii) la explicación clara y precisa de los Datos Personales a los cuales quieres tener acceso, rectificar, cancelar u oponerse; y (iv) cualquier otro elemento o documento que facilite la localización de sus Datos Personales.  </p>

		<h5>TRANSFERENCIA DE DATOS PERSONALES</h5>
		<p>ACFE podrá transferir sus Datos Personales únicamente a las siguientes personas y/o entidades, en el entendido que deberá asegurarse que dichas personas y/o entidades guarden estricta confidencialidad respecto de la información proporcionada:</p>
		<ol>
			<li>Las empresas controladoras, subsidiarias o afiliadas de Grupo CAABSA en México o en el extranjero.</li>
			<li>Terceros proveedores de servicios para el cumplimiento de las obligaciones legales, contables, regulatorias o contractuales a cargo de ACFE o de cualquiera de sus empresas controladoras, subsidiarias o afiliadas del Grupo CAABSA en México o en el extranjero.</li>
			<li>Terceros con fines de mercadotecnia, tecnologías de la información, operación, administración, comercialización y otros fines análogos y lícitos.</li>
		</ol>

		<h5>MODIFICACIONES AL AVISO DE PRIVACIDAD</h5>
		<p>Cualquier modificación al presente Aviso de Privacidad le será informado indistintamente, mediante avisos en las oficinas de ACFE, correo electrónico o a través de los portales de internet de ACFE.</p>
		<hr>
		<ol class="pie-de-pagina">
			<li>La Ley define Aviso de Privacidad como el documento físico, electrónico o en cualquier otro formato generado por el responsable que es puesto a disposición del titular, previo al tratamiento de sus Datos Personales.</li>
			<li>La Ley define Datos Personales como cualquier información concerniente a una persona física identificada o identificable.</li>
			<li>El tratamiento de Datos Personales se refiere a cualquier operación que se realice con sus Datos Personales, desde su obtención, uso, divulgación, almacenamiento y hasta su cancelación y supresión.</li>
			<li>La Ley define Datos Personales Sensibles como aquellos Datos Personales que afecten a la esfera más íntima de su titular, o cuya utilización indebida pueda dar origen a discriminación o conlleve un riesgo grave para éste.</li>
			<li>Conforme al artículo cuarto transitorio de la Ley, se le informa que sus derechos ARCO se podrán ejercitar a partir del 1° de enero de 2012. 6 Base de Datos es el conjunto ordenado de Datos Personales.</li>
		</ol> 


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
			<a class="btn btn-secondary js-btn-aceptar-aviso" href=""> Acepto los avisos de privacidad </a>
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
