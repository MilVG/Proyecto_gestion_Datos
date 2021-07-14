<?php 
                        require_once("conexionsql.php");
                        $nombres="";
                        $nombres = $_POST['nombres'];
                        $rol = "ADMINISTRADOR";
                        $cedula = $_POST['cedula'];
                        $sql="INSERT INTO USUARIOS (NOMBRE,ROL,CEDULA) VALUES('$nombres','$rol','$cedula')";
                        $sql2="EXEC PROC_INSERT_USERS '".$nombres."','".$rol."','".$cedula."'";
                        $cnx->query($sql2) or die("error $sql2");
                        echo "ok";
                        ?>