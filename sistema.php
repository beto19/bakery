<?php
include('config.php');
//definimos las rutas absoultas
//define('PATHAPP','/var/www/html/ferreweb/');//define una constante
define('PATHLIB',PATHAPP . LIB);
#date_default_timezone_set(ZONA_HORARIA);
//includes a librerías
include(PATHLIB.'ADOdb/adodb.inc.php');
include(PATHLIB.'smarty/libs/Smarty.class.php');
include(PATHLIB.'phpmailer/PHPMailerAutoload.php');
include(PATHLIB.'html2pdf/vendor/autoload.php');
include(PATHLIB.'nusoap/lib/nusoap.php');

//clases del sistema
class Conexion
{
	function Conectar()
	{
		$this->server=DB_DBMS;
		$this->host=DB_HOST;
		$this->userdb=DB_USER;
		$this->passdb=DB_PASS;
		$this->database=DB_NAME;
		$this->DB=&ADONewConnection($this->server);
		$this->DB->PConnect($this->host,$this->userdb,$this->passdb,$this->database);//conexión con mysql
		//$this->DB->PConnect(DB_LOCATION); //conexion con sqlite
	}
}

class Sistema extends Conexion
{
	//varaiables
	var $rs='';
	var $query='';

	function query($query)
	{
		$this->query=$query;
		$this->rs=&$this->DB->Execute($this->query);
		if($this->DB->ErrorMsg())
		{
			die($this->DB->ErrorMsg());
		}
	}

	function __construct()
	{
		parent::Conectar();
		$this->smarty=new Smarty();
	}

	function actualizaCliente($id)
	{
		$id_cliente=$id;
		$query=("select * from cliente where id_cliente='$id_cliente'");
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('Admin/datosCliente.html');
	}

	function divisa()
	{
		$de='USD';
		$a='MXN';
		$url='http://finance.yahoo.com/d/quotes.csv?f=l1d1t1&s='.$de.$a.'=X';
		$handle=fopen($url,'r');
		if ($handle) 
		{
			$r=fgetcsv($handle);
			fclose($handle);
		}
		$dolar= '1'.$de.'='.$r[0].' '.$a.'<br>';
		$this->smarty->assign('dolar',$dolar);
		return $this->smarty->fetch('header.html');
		
	}

	function actualizarAdmin($email)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$id=$this->getID($email);
		$query=("select * from empleado where id_usuario='$id'");
		$this->query($query);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('Admin/datosAdmin.html');
	}

	function actualizarCliente($email)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$id=$this->getID($email);
		$query=("select * from cliente where id_usuario='$id'");
		$this->query($query);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('cliente/datosCliente.html');
	}

	function historial($email)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$id=$this->getIDCliente($email);
		$query=("select p.id_producto,p.producto,p.foto,p.precio,ca.id_carrito,cd.cantidad,(p.precio*cd.cantidad) as subtotal from producto p inner join carrito_detalle cd on p.id_producto=cd.id_producto inner join carrito ca on ca.id_carrito=cd.id_carrito where ca.id_cliente=$id and ca.fecha_compra!='NULL'");
		$this->query($query);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('cliente/historial.html');
	}

	function pdf($email)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$id=$this->getIDCliente($email);
		$query=("select p.id_producto,p.producto,p.foto,p.precio,ca.id_carrito,cd.cantidad,(p.precio*cd.cantidad) as subtotal from producto p inner join carrito_detalle cd on p.id_producto=cd.id_producto inner join carrito ca on ca.id_carrito=cd.id_carrito where ca.id_cliente=$id and ca.fecha_compra!='NULL'");
		$this->query($query);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('cliente/tablaPDF.html');
	}

	function pdftodo()
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query=("select p.id_producto ,p.producto ,p.foto ,p.precio ,c.categoria from producto p inner join producto_categoria pc on pc.id_producto=p.id_producto inner join
		categoria c on c.id_categoria=pc.id_categoria");
		$this->query($query);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('allProductos.html');
	}

	public function guarda_foto_empleado($id,$foto){
				$conexion =@new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				$encoded = $foto;
			    $encoded = str_replace(' ', '+', $encoded);
			    $encoded = str_replace('data:image/jpeg;base64,', '', $encoded);
			    $image = base64_decode($encoded);
			    //para mysql
			    $image = mysqli_real_escape_string($conexion,$image);
			    echo $image;

			    //par postgres
			    //$image = pg_escape_bytea($image); y -> '{$image}' 
			    $sql = " 		 UPDATE  empleado 
			                     SET foto = '$image' 
			                     WHERE id_empleado = 1 "; 
			    //echo $sql;
				$this->query($sql);

	}

	//metodo para convertir de html a pdf
	function convertir2PDF($contenido,$nombre)
	{
		$html2pdf = new HTML2PDF('P', 'A4', 'es','UTF-8');
//      $html2pdf->setModeDebug();
        $html2pdf->writeHTML($contenido);
        $html2pdf->Output('$nombre.pdf');
	}

	function mostrarPDF()
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query=("select p.producto, p.precio, m.marca from producto p inner join marca m 
				on p.id_marca=m.id_marca
				where p.id=1");
		$this->query($query);
		$cantidadcolumnas=$this->rs->_numOfFields;
		$cantidadregistros=$this->rs->_numOfRows;
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		//print_r($nombrescolumnas);
		//print_r($datos);
		$this->smarty->assign('cantidadcolumnas',$cantidadcolumnas);
		$this->smarty->assign('cantidadregistros',$cantidadregistros);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		$this->smarty->fetch('muestraPDF.html');
		ob_start();
    	include('templates/muestraPDF.html');
    	$contenido = ob_get_clean();
    	$tabla="muestra Tabla";
		$this->convertir2PDF($contenido,$tabla);

	}

	function temperatura()
	{
		$registros=$this->numRegistros("select * from temperatura");
		$array=$this->DB->GetAll("select temperatura from temperatura");
		$temp=$array[$registros-1]['temperatura'];
		$this->smarty->assign('temp',$temp);
	}

	function getIDClienteSinMail($id_cliente)
	{
		$query="select id_usuario from cliente where id_usuario in
		(select id_usuario from usuario where id_cliente=$id_cliente)";
		
			
			$this->query($query);
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_usuario'];
	   			$this->rs->MoveNext();
			}
			return $id;			
	}

	function getID($email)
	{
		if (!$this->validarEmail($email)) 
		{
			$this->query("select id_usuario from usuario where email='$email'");
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_usuario'];
	   			$this->rs->MoveNext();
			}
			return $id;

			
		}
		else
		{
			$this->error('Error al ingresar el tipo de correo');
		}


	}

	function getCantidad($id_carrito,$id_producto)
	{
		$this->query("select cantidad from carrito_detalle where id_carrito=$id_carrito 
					 and id_producto=$id_producto");
		while (!$this->rs->EOF) 
		{
	    	$cantidad=$this->rs->fields['cantidad'];
	   		$this->rs->MoveNext();
		}
		return $cantidad;
	}


	function getCategoria($id_producto)
	{
		$this->query("select id_categoria from producto_categoria where id_producto=$id_producto");
		while (!$this->rs->EOF) 
		{
	    	$cantidad=$this->rs->fields['id_categoria'];
	   		$this->rs->MoveNext();
		}
		return $cantidad;
	}

	function getIdProducto($producto)
	{
		$this->query("select id_producto from producto where producto='$producto'");
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_producto'];
	   			$this->rs->MoveNext();
			}
			return $id;
	}

	function getIDCliente($email)
	{
		$query="select id_cliente from cliente where id_usuario in
		(select id_usuario from usuario where email='$email')";
		if (!$this->validarEmail($email)) 
		{
			
			$this->query($query);
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_cliente'];
	   			$this->rs->MoveNext();
			}
			return $id;			
		}
		else
		{
			$this->error('Error al ingresar el tipo de correo');
		}

	}

	function getDias($email)
	{
		$id_cliente=$this->getIDCliente($email);
		$id_carrito=$this->getIdCarrito($email);
		$fecha=date("Y-m-d");
		//$this->query("select fecha from carrito where id_cliente=$id_cliente and id_carrito=$id_carrito");
		$this->query("select datediff(CURDATE(),fecha) as fecha from carrito 
			          where id_cliente=$id_cliente and id_carrito=$id_carrito ");
		while (!$this->rs->EOF) 
			{
	    		$dias=$this->rs->fields['fecha'];
	   			$this->rs->MoveNext();
			}
			return $dias;
	}

	function getIdEmpleado($email)
	{
		if (!$this->validarEmail($email)) 
		{
			$idUsuario=$this->getID($email);
			$this->query("select id_empleado from empleado where id_usuario=$idUsuario");
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_empleado'];
	   			$this->rs->MoveNext();
			}
			return $id;

			
		}
		else
		{
			$this->error('Error al ingresar el tipo de correo');
		}


	}

	function generarClave()
	{
		$aleatorio1=rand(0,1000000);
		$aleatorio2=rand(0,1000000);
		$cadenaAleatoria=md5($aleatorio1)+sha1($aleatorio2);
		$cadena=strtolower(md5($cadenaAleatoria));
		return substr($cadena, 8);
	}

	function sendMail($destino,$nombreDest,$asunto,$mensaje)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP(); // telling the class to use SMTP

		try 
		{
		  $mail->SMTPDebug  = MAIL_SMTPDEBUG;                     // enables SMTP debug information (for testing)
		  $mail->SMTPAuth   = MAIL_SMTPAUTH;                  // enable SMTP authentication
		  $mail->SMTPSecure = MAIL_SMTPSECURE;                 // sets the prefix to the servier
		  $mail->Host       = MAIL_HOST;      // sets GMAIL as the SMTP server
		  $mail->Port       = MAIL_PORT;                   // set the SMTP port for the GMAIL server
		  $mail->Username   = MAIL_USSERNAME;  // GMAIL username
		  $mail->Password   = MAIL_PASSWORD;            // GMAIL password
		  //$mail->AddReplyTo('name@yourdomain.com', 'First Last');
		  $mail->AddAddress($destino, $nombreDest);
		  $mail->SetFrom(MAIL_USSERNAME, 'Bakery');
		  $mail->Subject = $asunto;
		  $mail->AltBody = $mensaje; // optional - MsgHTML will create an alternate automatically
		  $mail->MsgHTML($mensaje);
		  $mail->Send();
		} 
		catch (phpmailerException $e) 
		{
		  echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} 
		catch (Exception $e) 
		{
		  echo $e->getMessage(); //Boring error messages from anything else!
		}
    
	}



	function mostrarDescripcion($id_producto)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select  descripcion ,producto, foto, precio, comentario, nombre,apaterno
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
        $nombrescolumnas=array_keys($this->rs->fields);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('id_producto',$id_producto);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('descripcion.html');
	}

	function descripcionCliente($id_producto)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select comentario, nombre,apaterno
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
        $nombrescolumnas=array_keys($this->rs->fields);
		$descripcionCliente=$this->DB->GetAll($query);
		$this->smarty->assign('id_producto',$id_producto);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('descripcionCliente',$descripcionCliente);
		//return $this->smarty->fetch('cliente/descripcionArticulo.html');
	}

	function descripcionProducto($id_producto)//este sirve para mandar las descripciones por partes de cada vista
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select  descripcion ,producto, foto, precio
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
		$descripcionProducto=$this->DB->GetAll($query);
		$descripcion=$descripcionProducto[0]['descripcion'];
		$producto=$descripcionProducto[0]['producto'];
		$foto=$descripcionProducto[0]['foto'];
		$precio=$descripcionProducto[0]['precio'];
		$this->smarty->assign('descripcion',$descripcion);
		$this->smarty->assign('producto',$producto);
		$this->smarty->assign('foto',$foto);
		$this->smarty->assign('precio',$precio);
		////////////////////////////////////////////////
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select comentario, nombre,apaterno
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
        $nombrescolumnas=array_keys($this->rs->fields);
		$descripcionCliente=$this->DB->GetAll($query);
		$this->smarty->assign('id_producto',$id_producto);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('descripcionCliente',$descripcionCliente);

		return $this->smarty->fetch('cliente/descripcionArticulo.html');
	}

	function descripcionProductoSnLogin($id_producto)//este sirve para mandar las descripciones por partes de cada vista
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select  descripcion ,producto, foto, precio
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
		$descripcionProducto=$this->DB->GetAll($query);
		$descripcion=$descripcionProducto[0]['descripcion'];
		$producto=$descripcionProducto[0]['producto'];
		$foto=$descripcionProducto[0]['foto'];
		$precio=$descripcionProducto[0]['precio'];
		$this->smarty->assign('descripcion',$descripcion);
		$this->smarty->assign('producto',$producto);
		$this->smarty->assign('foto',$foto);
		$this->smarty->assign('precio',$precio);
		////////////////////////////////////////////////
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select comentario, nombre,apaterno
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
        $nombrescolumnas=array_keys($this->rs->fields);
		$descripcionCliente=$this->DB->GetAll($query);
		$this->smarty->assign('id_producto',$id_producto);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('descripcionCliente',$descripcionCliente);

		return $this->smarty->fetch('descripcion.html');
	}

	function mostrarDescripcionSinComentario($id_producto)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select  descripcion ,producto, foto, precio, nombre ,apaterno
        from descripcion where producto in
        (select producto from producto 
        where id_producto=$id_producto)";
        $this->query($query);
        $nombrescolumnas=array_keys($this->rs->fields);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('id_producto',$id_producto);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('cliente/descripcion.html');
	}

	function mostrarMartillo()
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$query="select  producto.producto, producto.foto, producto.precio, marca.marca, producto.id from producto inner join marca on producto.id_marca = marca.id_marca
					  inner join producto_categoria pc on pc.id_producto=producto.id
					  where id_categoria=1";
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('cliente/tablaMartillo.html');

	}

	function tablaMarcas($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		//print_r($nombrescolumnas);
		//print_r($datos);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('tablaCategoria.html');
	}

	function mostrartabla($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('muestratabla.html');
	}

	function mostrartablaPDF($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('muestratabla.html');
	}

	function mostrartablaPan($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('cliente/muestratabla.html');
	}
	function mostrartablaPostre($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('cliente/mostrarPostre.html');
	}
	function mostrartablaPanChido($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('cliente/mostrarPan.html');
	}
	function mostrartablaGalletas($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('cliente/mostrarGalletas.html');
	}
	function mostrartablaTodo($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('cliente/mostrar.html');
	}

	function numRegistros($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$cantidadregistros=$this->rs->_numOfRows;
		return $cantidadregistros;
	}


	function setAltaProductos($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$arreglo=$this->DB->GetAll($query);
		$this->smarty->assign('arreglo',$arreglo);

		$datos=$this->comboMarca("select id_categoria, categoria from categoria");
		$productos=$this->tablaMejorada('select id_producto, producto, foto, precio from producto');
		$this->smarty->assign('productos',$productos);
		$this->smarty->assign('marca',$datos);

	    $this->smarty->display('Admin/alta_productos.html');
	}

	function setAltaCategoria($query)
	{
		$arreglo=$this->DB->GetAll($query);
		$this->smarty->assign('arreglo',$arreglo);
		$productos=$this->tablaCategoria('select id_categoria, categoria from categoria');
		$this->smarty->assign('productos',$productos);
	    $this->smarty->fetch('Admin/alta_marca.html');
	}


	function tablaMejorada($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('tablaMejorada.html');
	}

	function tablaCategoria($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$nombrescolumnas=array_keys($this->rs->fields);
		$dato=$this->DB->GetAll($query);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('dato',$dato);
		return $this->smarty->fetch('tablaCategoria.html');
	}

	function tablaCarrito($email)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		//sacar el id del carrito a que le pertenece al cliente
		$registros=$this->numRegistros("select id_carrito from carrito where id_cliente in
		        (select id_cliente from cliente where id_usuario in 
                (select id_usuario from usuario where email='$email'))");
		if ($registros==0) {//checa si hay un carrito para el cliente
			$this->clienteHeader($email);
			$this->smarty->display('cliente/noCarrito.html');
			die();
		}
		$id=$this->getIdCarrito($email); 
		$checaCompra=$this->checkFechaCompra($id);
		//checa si contiene algun producto en carrito_detalle
		if ($checaCompra!='') 
		{
			$this->clienteHeader($email);
			$this->smarty->display('cliente/noCarrito.html');
			die();
		}

		else
		{
			$query="select producto,cantidad, precio, subtotal, foto, id_producto from vista where id_carrito=$id";
			$this->query($query);
			$dato=$this->DB->GetAll($query);
			$this->smarty->assign('dato',$dato);
			$this->smarty->fetch('cliente/tablaCarrito.html');
			$this->smarty->display('cliente/carrito.html');
			die();
		}
	}

	function getIdProductoVista($email,$id)
	{
		if (!$this->validarEmail($email)) 
		{
			$query="select id from vistaCarritoUno where id_carrito=$id )";

			$this->query($query);
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_carrito'];
	   			$this->rs->MoveNext();
			}
			return $id;

			
		}
		else
		{
			$this->error('Error al ingresar el tipo de correo');
		}
	}

	function getIdCarrito($email)
	{
		if (!$this->validarEmail($email)) 
		{
			$query="select id_carrito from carrito where id_cliente in
		        (select id_cliente from cliente where id_usuario in 
                (select id_usuario from usuario where email='$email'))";
            $registro=$this->numRegistros($query);
            if ($registro==0) {

            	return $registro;
            	die();
            }
			$this->query($query);
			while (!$this->rs->EOF) 
			{
	    		$id=$this->rs->fields['id_carrito'];
	   			$this->rs->MoveNext();
			}
			return $id;

			
		}
		else
		{
			$this->error('Error al ingresar el tipo de correo');
		}


	}

	function comboMarca($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$datos=$this->DB->GetAll($query);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('combo.html');
	}

	function nombreHeader($email)
	{
		$this->smarty->assign('email',$email);
		return $this->smarty->fetch('Admin/header.html');
	}

	function clienteHeader($email)
	{
		$this->smarty->assign('email',$email);
		return $this->smarty->fetch('cliente/header.html');
	}

	function checkFechaCompra($id_carrito)
	{//checa si contiene algun producto en carrito_detalle
	$query="select fecha_compra from carrito where id_carrito=$id_carrito";
	$registros=$this->numRegistros($query);
	if ($registros==0) 
	{
		return $registros;
		die();
	}
	$this->query($query);
		while (!$this->rs->EOF) 
		{
	    	$fecha=$this->rs->fields['fecha_compra'];
	   		$this->rs->MoveNext();
		}
		return $fecha;
	}
	function checkCarrito($id_carrito)
	{//checa si el carrito ya esta comprado, si no regresará un null
		
		return $cantidad=$this->numRegistros("select fecha_compra from carrito ");
	}

	function smarty()
	{
		$this->smarty->setTemplateDir(PATHAPP.TEMPLATES);
		$this->smarty->setCompileDir(PATHAPP.TEMPLATES_C);
		$this->smarty->setCacheDir(PATHAPP.CACHE);
		$this->smarty->setConfigDir(PATHAPP.CONFIGS);
		$this->smarty->debugging = false;
		$this->smarty->caching = true;
		$this->smarty->cache_lifetime = 0;

	}

	function error($mensaje)
	{
		$this->smarty();
		$this->smarty->assign('mensaje',$mensaje);
		$this->smarty->display('error.html');
	}

	
	function validarContrasena($contrasena)
	{
		$bandera=true;


		if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $contrasena)) 
		{ 
		    	$bandera=true;
			
		} 
		else
		{
			$bandera=false;
		    	
			
			//var_dump($bandera);

		}

		return $bandera;
	}

	function validarEmail($email)
	{
		if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$email)) 
		{
    		return false;
		}
	}

	function validarLogin($email,$pass)
	{
		$bandera=true;
		
		$claveNoProvicional="select contrasena from usuario where email='$email' and contrasena='$pass'";
        $sesionValida="select clave from usuario where email='$email' and clave='$pass'";
        $numeroRegistros=$this->numRegistros($sesionValida);
        $numeroProvicional=$this->numRegistros($claveNoProvicional);
        echo $numeroRegistros;
        echo "<br/>";
        echo $numeroProvicional;
        if ($numeroRegistros!=$claveNoProvicional) 
        {
        	$bandera=false;
        }
     	
        return $bandera;

	}

	function login($email, $pass)
    {
    	//validar que la contraseña no sea la provisional 
        
        $bandera=$this->validarLogin($email,$pass);
        echo "bandera";
        echo($bandera);
        echo "<br/>";
        if ($bandera==false) 
        {
        	$this->smarty->display("recuperarContrasena.html");
        	die();
        }
        ///////////////////////////////////////////
        $pass = md5($pass);
        if($this->validarEmail($email))
        {
        	$this->error("Email incorrecto");
        }
        $this->query("select * from usuario where email ='$email' and contrasena = '$pass'");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->error ("formato de correo electronico invalido");
        }
        var_dump($this->rs->_numOfRows);
        echo "<br/>";
        if ($this->rs->_numOfRows)
        {
        	echo "entre";
            $roles = $this->DB->GetALL("select rol from usuario u inner join rol_usuario r ON u.id_usuario = r.id_usuario
                                                   join rol on rol.id_rol = r.id_rol where email = '$email'");
            $roles = call_user_func_array('array_merge', $roles);
            // Voy a crear las variables de sesion
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['logueado'] = true;
            $_SESSION['roles'] = $roles;
            //$_SESSION['privilegios'] = $privilegios;
            $array=$_SESSION['roles'];
            $rol=$array['rol'];
            if ($rol=="Cliente") 
            {
            	header('Location: cliente/indexClienteC.php');
            }
            if ($rol=="Admin"|| $rol=="Empleado") 
            {
            	 header('Location: Admin/indexC.php');
            }
           
            
        }
        else
        {
            echo "<script>
	      	alert('Error al recibir datos del Loginnnn'); 
	      	document.location.href = 'formulario_login.php'; 
		 	 </script>";
		  	die();
        }
    }

     function checkRol($rol)
    {
        if ($_SESSION['logueado'])
        {
            if(!in_array($rol, $_SESSION['roles']))
            {

                $this->error("Usted no esta logeado");
            }
        }
        else
            $this->error("Usted no esta logeado");

    }

    function checkPrivileges($privilege)
    {
        if ($_SESSION['logueado'])
        {
            if(!in_array($privilege, $_SESSION['privilegios']))
            {
                $this->error("Usted no tiene los privilegios necesarios");
            }
        }
        else
            $this->error("Usted no esta logeado");
    }

    public function logout()
    {
        session_destroy();
    }

    function pruebaCadenas($cadena1,$cadena2)
    {
    	if ($cadena1==$cadena2) 
    		echo "son Igualitas";
    	else
    		echo "no lo son";
    }

    

}
//instanciamos web 
$web = new Sistema;
$web->smarty();
?>