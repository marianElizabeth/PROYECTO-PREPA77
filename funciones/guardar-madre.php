<?php
    include("funciones/conexion.php");

    /**SOLO SE AGEGARON HASTA LA LINEA  508 DEL PHP(DATOS ALUMNO)*/
    $nombreMadre= $_POST['txtNombreMadre']; //  en la BD() -- en PHP DatosAlumno(linea 590 )    
    $ape1Madre= $_POST['txtApePMadre'];  //  en la BD() -- en PHP DatosAlumno(linea 594)
    $ape2Madre= $_POST['txtApeMMadre']; //  en la BD() -- en PHP DatosAlumno(linea 598)
    $telefonoCelularMadre= $_POST['txtTelefonoCelMadre'];  //  en la BD() -- en PHP DatosAlumno(linea 634 )
    $CURPMadre= $_POST['txtxCurpMadre']; //  en la BD() -- en PHP DatosAlumno(linea 642)
    $claveElectroMadre= $_POST['txtClaveElectorMadre']; //  en la BD() -- en PHP DatosAlumno(linea 638 )
    $idOcupacion= $_POST['cmbOcupacionMadre']; //  en la BD() -- en PHP DatosAlumno(linea 618)
    $idNivelEscolar= $_POST['cmbUltimoGrado']; //  en la BD() -- en PHP DatosAlumno(linea 646 )
    $idParentesco= $_POST['cmbParentesco']; //  en la BD() -- en PHP DatosAlumno(linea  602)
    $matricula= $_POST['']; //  en la BD() -- en PHP DatosAlumno(linea )

    $sentencia= "INSERT INTO madre VALUES (
        '$nombreMadre',
        '$ape1Madre',
        '$ape2Madre',
        '$telefonoCelularMadre',
        '$CURPMadre',
        '$claveElectroMadre',
        $idOcupacion,
        $idNivelEscolar,
        $idParentesco,
        '$matricula'
    )";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verMadre.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>