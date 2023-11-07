<?php require 'controlador.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario IMSS</title>
</head>
<body>
    <h1>Formulario IMSS</h1>
    <form method="post" id="contact_form" class="declara">
        <ul>
            <li>
                <span class="required notification">*Agregue sus datos</span>
            </li>
            <li>
                <label for="nu_der_hab">Número de derechohabiente</label>
                <input type="text" name="nu_der_hab" pattern="[a-zA-Z0-9]+" placeholder="Introduzca 14 caracteres" maxlength="11" required>
            </li>

            <li>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"  placeholder="Introduzca su nombre" maxlength="15" required>
            </li>

            <li>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos"  placeholder="Introduzca sus apellidos" maxlength="20" required>
            </li>
            <li>
                <label for="t_sangre">Mes</label>
                <select name="t_sangre" required>
                    <option value="">Opción</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </li>
            <li>
                <label for="edad">Edad</label>
                <input type="number" name="edad" maxlength="3" min="18" max="100" placeholder="Escribe aquí tu edad" required>
            </li>
            <li>
                <label for="especialidad">Especialidad</label>
                <select name="especialidad" required>
                    <option value="">Escoge tu especialidad</option>
                    <option value="Anestesiologí">Anestesiología</option>
                    <option value="Epidemiología">Epidemiología</option>
                    <option value="Ginecología">Ginecología</option>
                    <option value="Audiología">Audiología</option>
                    <option value="Geriatría">Geriatría</option>
                    <option value="Neumología">Neumología</option>
                    <option value="Oftalmología">Oftalmología</option>
                    <option value="Psiquiatría">Psiquiatría</option>
                </select>
            </li>
            <li>
                <label for="telefono">Teléfono</label><br>
                <input type="tel" name="clave_lada" placeholder="Formato: 123" pattern="[0-9]{3}" maxlength="3" required> <br>
                <input type="tel" name="numero" placeholder="Debe insertar 10 digitos" pattern="[0-9]{10}" maxlength="10" required>
            </li>
            
            <li>
                <button class="submit" type="submit" name="registro">Enviar</button>
            </li>
        </ul>
    </form>
</body>
</html>