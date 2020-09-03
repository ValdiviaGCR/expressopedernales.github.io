<?php 

//llamando a los campos (declarando variables)
$nombre= $_POST['nombre']; 
$numero= $_POST['numero'];
$direccion= $_POST['direccion'];
$pedido= $_POST['pedido'];
$comentarios= $_POST['comentarios'];

//Datos para el correo
$destinatario = "valdiviagcr@gmail.com";
$destinatario2 = "expressopedernales@gmail.com";
$asunto= "PedidoNuevo";

$carta= "De: $nombre \n";
$carta .= "Teléfono: $numero \n" ;
$carta .= "Dirección de entrega: $direccion \n"; 
$carta .= "Pedido: $pedido \n";
$carta .= "Comentarios: $comentarios \n"; 


//enviando mensaje
mail($destinatario2, $asunto, $carta);
//mail($destinatario, $asunto, $carta);
header('Location:enviado.html')

?>