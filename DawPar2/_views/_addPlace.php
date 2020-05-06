<body>

<div class="wrapper ">

    <div class="sidebar" data-color="purple" data-background-color="white">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a href="http://www.jurassicworld.com" class="simple-text logo-mini">
                JW
            </a>
            <a href="#" class="simple-text logo-normal">
                Security System
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index">
                        <i class="material-icons">dashboard</i>
                        <p>Ultimos Incidentes</p>
                    </a>
                </li>
                <li class="nav-item active  ">
                    <a class="nav-link" href="addPlace">
                        <i class="material-icons">place</i>
                        <p>Lugares</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addType">
                        <i class="material-icons">security</i>
                        <p>Tipos de incidentes</p>
                    </a>
                </li>
                <!-- your sidebar here -->
            </ul>
        </div>
    </div>
    <div class="main-panel">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Agregar incidente</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">


                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-success">
                                <div class="card-icon">
                                    <i class="material-icons">add</i>
                                </div>
                            </div>
                            <div class="card-body">


                                <form id="addPlace">
                                    <div class="col-md-s12 form-group">
                                        <label for="exampleFormControlSelect1">Nombre Lugar</label>
                                        <input name="placeName" class="form-control" placeholder="inserte el nombre" data-style="btn btn-link" required>
                                        </input>
                                    </div>



                                    <hr/>
                                    <button type="submit" class="btn btn-success">Agregar</button>

                                </form>


                            </div>
                        </div>
                    </div>

                </div>



                <!-- Modal-->

            </div>
        </div>









        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
                <!-- your footer here -->
            </div>
        </footer>
    </div>


</div>
</body>