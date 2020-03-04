<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="mensaje.php">
        <fieldset>
            <legend> Ingreso de Datos de Asistencia</legend>
            <p>
                <label> Nombre del estudiantes:
                    <input type="text" name="nombre" />
                </label>

                <label> Fecha:
                    <input type="date" name="fecha" />
                </label>
                <label> Asistio:
                    <input type="text" name="nit" />
                </label>
            </p>
            <p>
               <button type="submit"> Guardar</button>
            </p>

        </fieldset>
    </form>
</body>
</html>