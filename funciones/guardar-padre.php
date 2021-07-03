<?php
    include("funciones/conexion.php");

    $nombrePadre= $_POST['txtNombrePadre']; //  en la BD() -- en PHP DatosAlumno(linea  515)
    $ape1Padre= $_POST['txtApePPadre']; //  en la BD() -- en PHP DatosAlumno(linea 519)
    $ape2Padre= $_POST['txtApeMPadre']; //  en la BD() -- en PHP DatosAlumno(linea 523 )
    $telefonoCelularPadre= $_POST['txtTelefonoCelPadre']; //  en la BD() -- en PHP DatosAlumno(linea  559)
    $CURPPadre= $_POST['txtxCurpPadre']; //  en la BD() -- en PHP DatosAlumno(linea  567)
    $claveElectorPadre= $_POST['txtClaveElectorPadre']; //  en la BD() -- en PHP DatosAlumno(linea  563)
    $idOcupacion= $_POST['cmbOcupacionPadre']; //  en la BD() -- en PHP DatosAlumno(linea 543 )
    $idNivelEscolar= $_POST['cmbUltimoGrado']; //  en la BD() -- en PHP DatosAlumno(linea  571)
    $idParentesco= $_POST['cmbParentesco']; //  en la BD() -- en PHP DatosAlumno(linea 527)
    $matricula= $_POST['']; //  en la BD() -- en PHP DatosAlumno(linea  )

    $sentencia=" INSERT INTO padre VALUES(
        '$nombrePadre',
        '$ape1Padre',
        '$ape2Padre',
        '$telefonoCelularPadre',
        '$CURPPadre',
        '$claveElectorPadre',
        $idOcupacion,
        $idNivelEscolar,
        $idParentesco,
        '$matricula'
    )";

    if(mysqli_query($conexion,$sentencia)){
        echo "Padre Almacenado Correctamente";
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);

?>