<?php
    require("conexiondb.php");

    $login=htmlentities(addslashes($_POST["usuario"]));
    $password=htmlentities(addslashes($_POST["password"]));

    $sqlU="SELECT * FROM usuarios where USUARIO= :login";
    $resultadoU=$base->prepare($sqlU);
    $resultadoU->bindValue(":login",$login);
    $resultadoU->execute();
    $numreg=$resultadoU->rowCount();
    if($numreg!=0){
        $sql="select * from usuarios where USUARIO= :login AND PASSWORD= :password";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){
            ob_start();
            session_start();
            $_SESSION["user"]=$_POST["usuario"];
            header("location:index.php");
        }else{
            header("Location:index.php?erno=1");
        }
    }else{
        header("Location: index.php?erno=2");
    }
?>