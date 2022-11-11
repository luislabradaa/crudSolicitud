<?php
    include "Settings/Connection.php";

    $nom_est = $_POST["nombre"];
    $apeP_est = $_POST["ape_paterno"];
    $apeM_est = $_POST["ape_materno"];
    $tel_est = $_POST["telefono"];
    $email_est = $_POST["correo"];
    $telCasa = $_POST["tel_casa"];
    $telFam = $_POST["tel_fam"];
    $n_madre = $_POST["n_madre"];
    $apeP_madre = $_POST["ap_madre"];
    $apeM_madre = $_POST["am_madre"];
    $n_padre = $_POST["n_padre"];
    $apeP_padre = $_POST["ap_padre"];
    $apeM_padre = $_POST["am_padre"];
    $bachillerato = $_POST["bachillerato"];
    $espec = $_POST["especialidad"];
    $prom = $_POST["promedio"];
    $foto_est = addslashes(file_get_contents($_FILES["foto"]['tmp_name']));
    $domicilio = addslashes(file_get_contents($_FILES["certificado"]['tmp_name']));
    $cert = addslashes(file_get_contents($_FILES["comp_dom"]['tmp_name']));

    //Inserta los datos en la base de datos
    $sql="INSERT INTO `estudiante` (`nombre`,`ape_paterno`,`ape_materno`,`telefono`,`correo`,`tel_casa`,`tel_fam`,`n_madre`,`ap_madre`,`am_madre`,`n_padre`,`ap_padre`,`am_padre`,
    `bachillerato`,`especialidad`,`promedio`,`foto`,`certificado`,`comp_dom`) VALUES ('$nom_est','$apeP_est','$apeM_est', '$tel_est', '$email_est', '$telCasa', '$telFam', '$n_madre', '$apeP_madre',
    '$apeM_madre','$n_padre', '$apeP_padre', '$apeM_padre', '$bachillerato', '$espec', '$prom', '$foto_est', '$domicilio', '$cert')";

    $resultado = $conexion -> query($sql);

    if($resultado){
        header('Location: Index.php');
    }else {
        echo "No se pudieron insertar los datos";
    }