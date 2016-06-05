<?php
include('../sistema.php');

class ClienteAPI extends Sistema
{
	public function API()
	{
		header('Content-Type: application/JSON');
		$method=$_SERVER['REQUEST_METHOD'];
		switch ($method) {
			case 'GET':
				if(isset($_GET['id']))//si tengo el id del cliente, obtengo los datos de ese cliente
				{
					$id=$_GET['id'];
					$response=$this->getCliente($id);
				}
				else//obtiene los datos de todos
				{
					$response = $this->getClientes();
				}
				echo json_encode($response, JSON_PRETTY_PRINT);
			break;
			
			case 'POST':
				$this->newCliente();
			break;

			case 'PUT':
				$this->updateCliente();
			break;

			case 'DELETE':
				$this->deleteCliente();
			break;

			default:
		}
	}

	public function getClientes()
	{
		return $this->DB->GetAll("select * from cliente");
	}

	public function getCliente($id)
	{
		return $this->DB->GetAll("select * from cliente where id_cliente =$id");
	}

	public function newCliente()
	{
		$obj=json_decode(file_get_contents('php://input'));
		$objArr=(array)$obj;//transforma a una array 
		$this->insert($obj->nombre);
		$this->response(200,"succes","new record added");
	}

	public function insert($nombre='')
	{
		$this->query("insert into cliente (nombre) values ('$nombre')");
		return $this->rs;
	}
	public function response($code=200,$status="",$message="")
	{
		http_response_code($code);
		$response=array("status"=>$status,"message"=>$message);
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	public function update($id,$nombre='')
	{
		$this->query("update cliente set nombre=$nombre where id_cliente=$id");
		return $this->rs;
	}

	public function updateCliente()
	{
		$obj=json_decode(file_get_contents('php://input'));
		$objArr=(array)$obj;//transforma a una array 
		$id=$_GET['id'];
		$this->update($id,$obj->nombre);
		$this->response(200,"succes","new record updated");
	}

	public function deleteCliente()
	{
		$obj=json_decode(file_get_contents('php://input'));
		$objArr=(array)$obj;//transforma a una array 
		$id=$_GET['id'];
		$this->delete($id);
		$this->response(200,"succes"," record deleted");
	}

	public function delete($id)
	{
		$this->query("delete from cliente where id_cliente=$id");
		return $this->rs;
	}
}
?>