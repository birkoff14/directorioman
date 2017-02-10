<?php
        require("connection.php");
            $name=$_GET['search'];
        $sql="SELECT * FROM usuario WHERE usuario.Nombre LIKE '%$name%'";
        $resultado = mysqli_query($link,$sql) or die(mysql_error());
        $to_encode = array();
while($row2 = mysqli_fetch_array($resultado)):
            $nombre=$row2["Nombre"];
            $area=$row2["area"];
            $correo=$row2["Correo"];
            $telefono=$row2["telefono"];
            $extencion=$row2["extencion"];
            $celular=$row2["celular"];

    $to_encode[]=array('nombre'=> $nombre, 'area'=> $area, 'correo'=> $correo,
                        'telefono'=> $telefono, 'extencion'=> $extencion, 'celular'=> $celular);
endwhile;
echo json_encode($to_encode);


        ?>