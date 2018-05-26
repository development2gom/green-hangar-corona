<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\EntUsuarios;
use yii\db\Expression;
use app\models\ViewPremiosRestantes;
use app\models\RelUsuarioPremio;
use app\models\ViewUsuarioDatos;
use app\models\Mensajes;
use app\models\CatPremios;
use app\models\Utils;
use app\models\EntUsuariosSearch;

class SiteController extends Controller {
	public $sendQr = false;
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
				'access' => [
						'class' => AccessControl::className (),
						'only' => [
								'logout'
						],
						'rules' => [
								[
										'actions' => [
												'logout'
										],
										'allow' => true,
										'roles' => [
												'@'
										]
								]
						]
				],
				'verbs' => [
						'class' => VerbFilter::className (),
						'actions' => [
								'logout' => [
										'post'
								]
						]
				]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions(){
		return [
				'error' => [
						'class' => 'yii\web\ErrorAction'
				],
				'captcha' => [
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
				]
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex(){
		$usuario = new EntUsuarios ();

		return $this->render ( 'inicio' );
	}

	public function actionFinalizar(){
		return $this->render('finalizar');
	}

	public function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];

            	
        }
        return implode($pass);
    }

	public function actionRegistro(){
		$usuario = new EntUsuarios ();

		if ($usuario->load ( Yii::$app->request->post () )) {

			$usuario->txt_token = $this->getToken();
			date_default_timezone_set('America/Mexico_City');
			$usuario->fch_creacion = Utils::getFechaActual();
			$usuario->txt_codito_usuario = $this->randomPassword();
			if ($usuario->save ()) {

				$link = Yii::$app->urlManager->createAbsoluteUrl([
					'site/vista-codigo?token=' . $usuario->txt_token
				]);
				$urlCorta = $this->getShortUrl($link);

				
				if($this->sendQr){
					$mensajeTexto = "Gracias por participar conserva el codigo QR adjunto, para poder reclamar el premio.: ".$urlCorta;
				}else{
					$mensajeTexto = "Gracias por participar conserva el codigo adjunto, para poder reclamar el premio.: ".$urlCorta;
				}
				
				$mensajes = new Mensajes();
				$resp = $mensajes->mandarMensage($mensajeTexto, $usuario->txt_telefono_celular);

				return $this->render('finalizar');
			}else{
				//print_r($usuario->errors);
			}
		}

		return $this->render ( 'registro', [
				'usuario' => $usuario
		] );
	}

	public function actionConsultarCodigo(){
		$searchModel = new EntUsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('consultar-codigo', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}

	private function getShortUrl($url)
	{
		$urlAutenticate = 'http://dgom.mobi';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $urlAutenticate);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'user=userGreenSaco&pass=passGreenSacro&app=GreenSacro&url=' . $url);
		curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		
		// in real life you should use something like:
		// curl_setopt($ch, CURLOPT_POSTFIELDS,
		// http_build_query(array('postvar1' => 'value1')));
		
		// receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		curl_close($ch);
		return $server_output;
	}

	public function actionVistaCodigo($token=""){
		$usuario = EntUsuarios::find()->where(['txt_token'=>$token])->one();

		if($this->sendQr){
			return $this->render ( 'vista-qr',[
				'usuario' => $usuario
			]);
		}else{
			return $this->render ( 'vista-codigo',[
				'usuario' => $usuario
			]);
		}

		
	}

	public function actionVerCodigo($token=""){
		require __DIR__.'/../vendor/phpqrcode/qrlib.php';
//realiza busqueda del usuario apartir del toquen que esta llegando y concatena los datos a la variable datos usuario
		$datos=EntUsuarios::find()->
		where(['txt_token'=>$token])->one();

		$datosUsuario ='
Nombre de usuario: 
'.$datos->txt_nombre_completo.'

Teléfono: 
'.$datos->txt_telefono_celular.'

Código de compra: 
'.$datos->txt_codigo_compra.'

Número de boletos: 
'.$datos->num_pelotas;
				
		// outputs image directly into browser, as PNG stream
		\QRcode::png($datosUsuario);
		exit();
	}

	public function actionVerDatos($token=""){
		$usuario = EntUsuarios::find()->where(['txt_token'=>$token])->one();

		return $this->render ( 'vista-datos',[
			'usuario' => $usuario
		]);
	}

	/**
	 * Guarda la informacion
	 */
	public function actionGuardarInformacion($tokenEvento=null) {

		$usuario = new EntUsuarios ();
		

		if ($usuario->load ( Yii::$app->request->post () )) {

			if ($usuario->save ()) {

			}

			return $this->renderAjax ( 'mucha-suerte' );
		}
	}

	private function getToken($string='token_'){
		$token = $string . md5 ( uniqid ( $string ) ) . uniqid ();
		return $token;
	}

	/**
	 * Descarga un csv con la informacion necesaria
	 */
	public function actionDescargarRegistrossd339ffd3jl(){
		$usuarios = EntUsuarios::find()->all();

		$arrayCsv = [ ];
		$i = 0;

		foreach ( $usuarios as $data ) {
		
			$arrayCsv [$i] ['nombreCompleto'] = $data->txt_nombre_completo;
			$arrayCsv [$i] ['telefonoCelular'] = $data->txt_telefono_celular;
			$arrayCsv [$i] ['numPelotas'] = $data->num_pelotas;
			$arrayCsv [$i] ['codigoPromocional'] = $data->txt_codigo_promocion;
			$arrayCsv [$i] ['codigoCompra'] = $data->txt_codigo_compra;
			$arrayCsv [$i] ['colonia'] = $data->txt_colonia;
			$arrayCsv [$i] ['sitioCompra'] = $data->txt_sitio_compra;
			$arrayCsv [$i] ['fchRegistro'] = $data->fch_creacion;
			$arrayCsv [$i] ['aceptoTerminos'] = $data->b_aceptar_terminos;
			$arrayCsv [$i] ['codigoUsuario'] = $data->txt_codito_usuario;
			

			$i++;
		}


	//print_r($arrayCsv );
	//exit ();

		$this->downloadSendHeaders ( 'reporte.csv' );

		echo $this->array2Csv ( $arrayCsv );
		die();

	}

		private function array2Csv($array) {
		if (count ( $array ) == 0) {
			return null;
		}
		ob_start();
		$df = fopen ( "php://output", "w" );
		fputcsv ( $df, [
				'Nombre completo',
				'Telefono',
				'# Boletos comprados',
				'C. promocional',
				'Codigo de compra',
				'Colonia',
				'Lugar de compra',
				'Fecha registro',
				'Acepto terminos',
				'Codigo usuario'

		]
		 );

		foreach ( $array as $row ) {
			fputcsv ( $df, $row );
		}

		fclose ( $df );
		return ob_get_clean();
	}




	private function downloadSendHeaders($filename) {
		// disable caching
		$now = gmdate ( "D, d M Y H:i:s" );
		// header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
		header ( "Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate" );
		header ( "Last-Modified: {$now} GMT" );

		// force download
		header ( "Content-Type: application/force-download" );
		header ( "Content-Type: application/octet-stream" );
		// comentario sin sentido
		header ( "Content-Type: application/download" );

		// disposition / encoding on response body
		header ( "Content-Disposition: attachment;filename={$filename}" );
		header ( "Content-Transfer-Encoding: binary" );
	}

	/**
	 * Cambia el formato de la fecha
	 *
	 * @param unknown $string
	 */
	public static function changeFormatDate($string) {
		$date = date_create ( $string );
		return date_format ( $date, "d-M-Y" );
	}

	/**
	 * Obtenemos la fecha actual para almacenarla
	 *
	 * @return string
	 */
	private function getFechaActual() {

		// Inicializamos la fecha y hora actual
		$fecha = date ( 'Y-m-d H:i:s', time () );
		return $fecha;
	}

}
