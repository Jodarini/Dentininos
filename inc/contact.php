<?php 

    $con = mysqli_connect("localhost","dentinos_jodarin","jodari1125959","dentinos_contactos");

    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Edad = $_POST['Edad'];
    $correo = $_POST['correo'];
    $whatsapp = $_POST['whatsapp'];
    $Tratamiento = $_POST['Tratamiento'];

    $sql = "INSERT INTO `contactos` (`userid`, `Nombres`, `Apellidos`, `Edad`, `correo`, `whatsapp`, `Tratamiento`) VALUES ('0', '$Nombres', '$Apellidos', '$Edad', '$correo', '$whatsapp', '$Tratamiento');";

    $rs = mysqli_query($con, $sql);


    if($rs)
{

    ?>
    <script type="text/javascript">
    alert("Hemos recibido tus datos con éxito! Una de nuestras asesoras se comunicará contigo con toda la información.");
    window.location = "/";
    
    </script>      
        <?php
}
?>