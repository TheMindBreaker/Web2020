<!DOCTYPE html>
<html>
<html lang="es-mx">

<head>
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Examen de segundo parcial</title>
</head>

<body>
<header></header>

<main>

    <div class="navbar-fixed">
        <nav>
            <div class="blue darken-1 nav-wrapper">
                <a href="index.php" class="brand-logo"><acronym title="Desarrollo de aplicaciones web y Bases de datos">Segundo parcial: DAW-BD</acronym></a>
                <ul id="nav-mobile" class="right">
                    <li><a href="#">Consultas</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">

        <h3>Zombis</h3>

        <a class="right btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal1"><i class="material-icons">add</i></a>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <form>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <input placeholder="Nombre de zombie" id="first_name" type="text" class="validate" required>
                                <label for="first_name">Nombre Zombie</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <div class="input-field col s12">
                                    <select id="status" class="browser-default">
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="createZombie">Agree</a>
            </div>
        </div>

        <table class="highlight" id="allZombies">
            <thead>
            <tr>
                <th>Zombie</th>
                <th>Estados</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</main>

<footer class="blue darken-1 page-footer">
    <div class="container">
        <p class="grey-text text-lighten-4">Powered by <a href="http://materializecss.com/" target="_blank" class="white-text text-lighten-4">Materialize</a>.</p>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2019 Escuela de Ingeniería y Ciencias - Tecnológico de Monterrey en Querétaro.
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/index.js" type="application/javascript"></script>

</body>

</html>