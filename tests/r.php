<?php 


use PHPUnit\Framework\TestCase;

class RegisterUsuarioTest extends TestCase {

 /** @test **/
	public function podemos_registrar_usuario_email_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=createusuarios', [
    'form_params' => [
        'nombre' => 'Angel',
        'direccion' => 'LA MOLINA Planicie',
        'celular' => '965685213',
        'n_doc_i' => '79548563',
        'password' => 'admin123',
        'email' => 'luisgoovergmail.com',
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}

	/** @test **/
	public function podemos_registrar_usuario_password_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=createusuarios', [
    'form_params' => [
        'nombre' => 'Angel',
        'direccion' => 'LA MOLINA Planicie',
        'celular' => '965685213',
        'n_doc_i' => '79548563',
        'password' => 'a',
        'email' => 'alllaalla@gmail.com',
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		//var_dump($data);
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}


	/** @test **/
	public function podemos_registrar_usuario_nombre_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=createusuarios', [
    'form_params' => [
        'nombre' => 'an',
        'direccion' => 'LA MOLINA Planicie',
        'celular' => '965685213',
        'n_doc_i' => '79548563',
        'password' => 'admin123',
        'email' => 'luissmezdrl.com',
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		//var_dump($data);
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}

	/** @test **/
	public function podemos_registrar_usuario_direccion_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=createusuarios', [
    'form_params' => [
        'nombre' => 'Angel',
        'direccion' => 'moli',
        'celular' => '965685213',
        'n_doc_i' => '79548563',
        'password' => 'admin123',
        'email' => 'luisgomemail.com',
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		//var_dump($data);
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}

	/** @test **/
	public function podemos_registrar_usuario_dni_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=createusuarios', [
    'form_params' => [
        'nombre' => 'Angel',
        'direccion' => 'LA MOLINA Planicie',
        'celular' => '965685213',
        'n_doc_i' => '795485635',
        'password' => 'admin123',
        'email' => 'luisgorovemail.com',
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		//var_dump($data);
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}


	/** @test **/
	public function podemos_registrar_usuario_celular_mediante_el_endpoint_post () {
		$cliente = new GuzzleHttp\Client();

		$res = $cliente->request('POST', 'https://www.textilesgexem.com/api_botica/Api.php?apicall=createusuarios', [
    'form_params' => [
        'nombre' => 'Angel',
        'direccion' => 'LA MOLINA Planicie',
        'celular' => '9656852135',
        'n_doc_i' => '79548563',
        'password' => 'admin123',
        'email' => 'luisgorrmail.com',
    ]]);

		
		$data = json_decode($res->getBody(), true);		
		//var_dump($data);
		$this->assertEquals(200, $res->getStatusCode());
		$this->assertEquals(1, $data['error']);
		
		/*echo "error: ".$data['error'].'; ';
		echo "message: ".$data['message'];*/
	}



}
