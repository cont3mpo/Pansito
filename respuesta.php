<?php 
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];

// Compone cuerpo del correo
$cuerpo = "Nombre: ".$nombre."\n";
$cuerpo = $cuerpo."Email: ".$mail."\n";

// En caso de que cualquier linea tenga mas de 70 caracteres, habria que usar wordwrap()
// $mensaje = wordwrap($mensaje, 70);


// Envia correo según los datos entregados en el formulario CORREO, ASUNTO, CUERPO, 
$enviado = mail('carlos@chm.cl', 'Mensaje de la página XXXX', $cuerpo, "From: ".$mail );
?> 

<html>
<head>
<title>nombre</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

</head>
<body>
<table id="Table_01" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><p>&nbsp;</p>
      <?php if ( $enviado == true) { ?>
        <p align="center">Su mensaje ha sido enviado con exito </p>
      <?php } else { ?>
        <p align="center">Su mensaje no pudo ser enviado </p>
      <?php } ?>
        <p align="center">&nbsp;</p></td>
  </tr>
</table>
</body>
</html>