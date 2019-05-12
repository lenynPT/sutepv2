<?php

require_once "conexion.php";



class GestorArticulosModel{

    

    #MOSTRAR GUARDAR

	#------------------------------------------------------

    

    public function guardarArticuloModel($datosModel,$tabla){

        

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( titulo, introduccion, ruta, contenido, fecha ) VALUES ( :titulo, :introduccion, :ruta, :contenido, :fecha)"); 

    $stmt -> bindParam(":titulo",$datosModel["titulo"],PDO::PARAM_STR);

    $stmt -> bindParam(":introduccion",$datosModel["introduccion"],PDO::PARAM_STR);

    $stmt -> bindParam(":ruta",$datosModel["ruta"],PDO::PARAM_STR);

    $stmt -> bindParam(":contenido",$datosModel["contenido"],PDO::PARAM_STR);

    $stmt -> bindParam(":fecha",$datosModel["fecha"],PDO::PARAM_STR);

    if($stmt -> execute()){

        return "ok";

    }else{

        return "Error";

    }

    $stmt -> close();    

        

    }



   #MOSTRAR ARTÍCULOS

	#------------------------------------------------------

	public function mostrarArticulosModel($tabla){



		$stmt = Conexion::conectar()->prepare("SELECT id, titulo, introduccion, ruta,contenido, fecha FROM $tabla ORDER BY orden ASC");



		$stmt -> execute();



		return $stmt -> fetchAll();



		$stmt -> close();



    }

 	#ACTUALIZAR ORDEN 

	#---------------------------------------------------

	public function actualizarOrdenModel($datos, $tabla){



		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET orden = :orden WHERE id = :id");



		$stmt -> bindParam(":orden", $datos["ordenItem"], PDO::PARAM_STR);

		$stmt -> bindParam(":id", $datos["ordenArticulos"], PDO::PARAM_INT);



		if($stmt -> execute()){



			return "ok";

		}



		else{

			return "error";

		}



		$stmt -> close();



	}



	#SELECCIONAR ORDEN 

	#---------------------------------------------------

	public function seleccionarOrdenModel($tabla){



		$stmt = Conexion::conectar()->prepare("SELECT id, titulo, introduccion, ruta, contenido, fecha FROM $tabla ORDER BY orden ASC");



		$stmt -> execute();



		return $stmt->fetchAll();



		$stmt->close();



    }

    



    #BORRAR ARTICULOS

	#-----------------------------------------------------

	public function borrarArticuloModel($datosModel, $tabla){



		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");



		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);



		if($stmt->execute()){



			return "ok";



		}



		else{



			return "error";



		}



		$stmt->close();



	}



}

?>