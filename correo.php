<?php   
    if(isset($_POST['enviar'])){
        if(!empty($_POST['txtnombre']) && !empty($_POST['txtempresa']) && !empty($_POST['txttelefon'])
        && !empty($_POST['txtcorreo']) && !empty($_POST['txtlugar']) && !empty($_POST['txtmensaje'])){
            $destino="ca_los01@hotmail.com";
            $asunto="Quiero contactarme con ustedes";
            $nombre=$_POST['txtnombre'];
            $empresa=$_POST['txtempresa'];
            $telefono=$_POST['txttelefon'];
            $correo=$_POST['txtcorreo'];
            $lugar=$_POST['txtlugar'];
            $mensaje=$_POST['txtmensaje'];
            $header="Enviado desde la pagina contactos de MFP";
            $msjcomplet="De: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nEmpresa y Lugar: ".$empresa." y ".$lugar."\nMensaje: ".$mensaje;
            mail($destino, $asunto, $msjcomplet, $header);
            echo "<script>alert('email enviado exitosamente!!')</script>";
            echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
        }
    }
?>