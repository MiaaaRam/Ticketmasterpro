<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TICKETMASTER3000</title>
    <link rel='icon' href='icono.ico' type='image/x-ico'>
</head>
<body>
<h1 align='center'>TICKETMASTER3000</h1>
<h5 align='center'>Conciertos, eventos deportivos, artísticos y teatrales</h5>
<h3 align='center'>Compre sus boletos aquí</h3>
<br>
<center><table padding=10px>
    <thead>
        <th>Daddy Yankee</th>
        <th>Stray Kids</th>
        <th>Luis Miguel</th>
        <th>August D</th>
    </thead>
    <tr>
        <td><img src='daddyyankee.jpg' alt='DaddyYankee' height="200px" width="200px"></td>
        <td><img src='straykids.jpg' alt='StrayKids' height="200px" width="200px" ></td>
        <td><img src='luismiguel.jpg' alt='LuisMi' height="200px" width="200px" ></td>
        <td><img src='augustd.jpg' alt='AugustD' height="200px" width="200px" ></td>
    </tr>
 </table></center>
<form action="imprimir_boletos.php" method="GET" target="_blank">
    <fieldset>
        <legend>Ingrese sus datos personales y de compra</legend>
        <label>Nombre:</label>
        <input name="nombre" maxlength="10" type="text"><br><br>
        <label>Apellido:</label>
        <input name="apellido" maxlength="15" type="text"><br><br>
        <label>Artista:</label>
        <select name="artista">
            <optgroup label="Elige uno">
                <option value="DaddyYankee">Daddy Yankee</option>
                <option value="StrayKids">Stray Kids</option>
                <option value="LuisMiguel">Luis Miguel</option>
                <option value="AugustD">August D</option>
            </optgroup>
        </select><br><br>
        <label>Zona:</label>
        <select name="zona">
            <optgroup label="Elige zona">
                <option value="GeneralA">General A</option>
                <option value="GeneralB">General B</option>
                <option value="NaranjaA">Naranja A</option>
                <option value="VerdeA">Verde A</option>
            </optgroup>
        </select><br><br>
        <!-- Metí el numero de boletos así para que sea más facil controlar que solo compren 15 max -->
        <label>Numero de boletos:</label>
        <select name="boletos">
            <optgroup label="Elige">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
            </optgroup>
        </select><br><br>
        <label>Recinto del concierto:</label>
        <select name="recinto">
            <optgroup label="Elige lugar">
                <option value="Forosol">Foro Sol</option>
                <option value="Blackberry">Auditorio Blackberry</option>
                <option value="EstadioAzteca">Estadio Azteca</option>
                <option value="AuditorioN">Auditorio Nacional</option>
            </optgroup>
        </select><br><br>
        <label>Extras:</label>
        <select name="extras">
            <optgroup label="Extras">
                <option value="Vip">Pase VIP</option>
                <option value="Estacionamiento">Estacionamiento</option>
                <option value="Mercancia">Mercancia</option>
            </optgroup>
        </select><br><br>
        <label>Fecha:</label>
        <input name="fecha" type="date"><br><br>
        <input type="submit" value="Imprimir boletos">
    </fieldset>
</form>
</body>
</html>
