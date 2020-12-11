<?php 
/** @test **/


 use PHPUnit\Framework\TestCase;

class LoginApiTest extends TestCase {
/** @test **/
	public function podemos_obtener_el_tiempo_de_respuesta_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=loginusuario', [
    'form_params' => [
        'email' => 'luisgomezdrover.200@gmail.com',
        'password' => '109809099',
    ]]);

		
		$data = json_decode($res->getBody(), true);		

		$this->assertEquals(200, $res->getStatusCode());
	}


	/** @test **/
	public function podemos_verificar_parametro_de_usuario_email_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=loginusuario', [
    'form_params' => [
        'email' => '',
        'password' => 'luisgomezdrover'
    ]]);

		
		$data = json_decode($res->getBody(), true);		

		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);

		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}

	/** @test **/
	public function podemos_verificar_parametro_de_password_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=loginusuario', [
    'form_params' => [
        'email' => 'luisgomezdrover.200@gmail.com',
        'password' => ''
    ]]);

		
		$data = json_decode($res->getBody(), true);		

		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}



		/** @test **/
	public function podemos_verificar_parametro_de_estadousuario_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=loginusuario', [
    'form_params' => [
        'email' => 'luisgomezdrover.200@gmail.com',
        'password' => '109809099'
    ]]);


		$data = json_decode($res->getBody(), true);		
		
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}


		/** @test **/
	public function podemos_verificar_restorna_datos_usuario_logeado_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=loginusuario', [
    'form_params' => [
        'email' => 'beckersan789@gmail.com',
        'password' => 'wq5jiruo6lv'
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		var_dump($data);
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(0, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}



}