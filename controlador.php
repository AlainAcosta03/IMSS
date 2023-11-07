<?php
if(isset($_POST['registro'])){
    $nu_der_hab = $_POST['nu_der_hab'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $t_sangre = $_POST['t_sangre'];
    $edad = $_POST['edad'];
    $especialidad = $_POST['especialidad'];
    $clave_lada = $_POST['clave_lada'];
    $numero = $_POST['numero'];

    $servername = "localhost";
    $username = "id20243129_alumno64";
    $password = "C0ntr4s3n4.";
    $dbname = "id20243129_universidad";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar datos en la tabla 'IMSS'
    $sql = "INSERT INTO IMSS (nu_der_hab, nombre, apellidos, t_sangre, edad, especialidad, clave_lada, numero)
    VALUES ('$nu_der_hab', '$nombre', '$apellidos', '$t_sangre', '$edad', '$especialidad', '$clave_lada', '$numero')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
