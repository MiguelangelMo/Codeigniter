<?php

namespace App\Controllers;

use App\Models\WorldModel;
use App\Models\WorldCodeModel;

class Home extends BaseController
{
	public $session = null;
	public function __construct()
	{
		$this->session = \Config\Services::session();
	}

	public function ponerDatos()
	{
		$newdata = [
			'name' => 'novato',
			'email' => 'info@programadornovato.com',
			'login' => TRUE,
		];
		$this->session->set($newdata);
		echo $this->session->get('email');
	}
	public function leerDatos()
	{
		if ($this->session->has('name')) {
			echo "name=" . $this->session->get('name') . "<br>";
			echo "email=" . $this->session->get('email') . "<br>";
			echo "login=" . $this->session->get('login') . "<br>";
		} else {
			echo "No hay datos";
		}
	}
	public function quitarDatos()
	{
		$this->session->remove('email');
	}
	public function destruirDatos()
	{
		$this->session->destroy();
	}

	public function index()
	{
		$world = new WorldModel($db);
		$worldCode = new WorldCodeModel($db);
		/*
		****************Mostrar*******************

		$data = $world->find([10]); Aca se pide un valor 
		$data = $world->findAll(); Aca nos trae todas la data de base de datos
		$data = $world->Where('CountryCode', 'AFG')->findAll(); Aca se aplica el where ya conocido

		
		******************INSERTAR********************

		 * Este en caso de insertar
		$insertData = [
			'Code' => 'VKS', 
			'Name' => 'Island danhk', 
			'Continent' => 'Nordic', 
			'Region' => 'Categgat', 
			'SurfaceArea' => '1300', 
			'IndepYear' => '800', 
			'Population' => '20000', 
			'LifeExpectancy' => '90.1', 
			'GNP' => '701.01', 
			'GNPOld' => 'null', 
			'LocalName' => 'Europa', 
			'GovernmentForm' => 'Nordic', 
			'HeadOfState' => 'Racnar', 
			'Capital' => 'Inglash', 
			'Code2' => 'VK'];
		$worldCode->insert($insertData);

		********************Modificar*********************

		$worldCode->where('Code',[])->set($insertData)->update(); // tambien se le puede pasar un numero
										finito de elementos
		$worldCode->save($insertData); // Este si no se le pasa un id el lo creo y si se le pasa lo busca
		
		$insertData = [
			'Code' => 'VKS', 
			'Name' => 'Island danhk', 
			'Continent' => 'Europe', 
			'Region' => 'Categgat', 
			'SurfaceArea' => '1300', 
			'IndepYear' => '800', 
			'Population' => '20000', 
			'LifeExpectancy' => '90.1', 
			'GNP' => '701.01', 
			'GNPOld' => 'null', 
			'LocalName' => 'Europa', 
			'GovernmentForm' => 'Nordic', 
			'HeadOfState' => 'Racnar', 
			'Capital' => 'Inglash', 
			'Code2' => 'VK'];
		$worldCode->update('VKS', $insertData);
		
		//$data = $worldCode->where('Code', 'VKS')->findAll(10,0);
		****************** DELETE ******************
		$world->delete(1);
		
		********************Validación*********************

		$insertData = [
			'Code' => 'VKS', 
			'Name' => '', 
			'Continent' => 'Europe', 
			'Region' => 'Categgat', 
			'SurfaceArea' => '1300', 
			'IndepYear' => '800', 
			'Population' => '20000', 
			'LifeExpectancy' => '90.1', 
			'GNP' => '701.01', 
			'GNPOld' => 'null', 
			'LocalName' => 'Europa', 
			'GovernmentForm' => 'Nordic', 
			'HeadOfState' => 'Racnar', 
			'Capital' => 'Inglash', 
			'Code2' => 'VK'];

		if($worldCode->save($insertData) === false){
			var_dump($worldCode->errors());
		}
		
		*******************Value tipo Object***********************
		$data = $world->asObject()->findAll(10,5);
		print_r($data);

		*/

		//$data = $world->where('CountryCode','AFG')->findAll(20, 0);
		$data = $world->paginate(10);
		$paginate = $world->pager;
		$paginate->setPath('Codeignater/CodeIgniter4-4.0.0-rc.3/public');
		$arrayData = array('data' => $data, 'paginate' => $paginate);
		return view('Header') . view('Body', $arrayData) . view('Footer') . view('Modal/ModalUpdate');
	}

	//--------------------------------------------------------------------

}
