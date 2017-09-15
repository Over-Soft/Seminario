<?php if (!isset($_SESSION['emailUser'])) {header('location:login');} else { $name = ucwords($_SESSION['nameUser']);
    $email = $_SESSION['emailUser'];
    $dateUser = $_SESSION['dateUser'];require 'php/temasPhp.php';}?>
<?php include 'admin/header/head.php';?>
<body onload="mueveReloj()">
    <div class="page home-page">
        <!-- Main Navbar-->
        <?php include 'admin/header/cabezera.php';?>
        <!-- fin cabezera -->
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <?php include 'admin/header/navegacion.php';?>
            <!-- Fin navegacion -->
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">
                            Página
                            <small>
                                <i class="text-danger">
                                    Enciclopedia Temas
                                </i>
                            </small>
                        </h2>
                        <h2 class="version float-lg-right">
                            Memorium
                            <small>
                                <i class="text-danger">
                                    versión 1.0
                                </i>
                            </small>
                        </h2>
                    </div>
                </header>
                <!-- Dashboard Counts Section-->
                <section class="dashboard-counts no-padding-bottom" ">
                    <div class="container-fluid">
                        <div class="bg-white has-shadow">
                            <div class="row">

                            <div class="col-lg-7">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar">
                                          <i class="fa fa-plus"></i>
                                        </button>
                                        <a class="btn btn-primary active btn-sm" href="../principal/">
                                            Home
                                        </a>
                                        <a class="btn btn-outline-primary btn-sm" href="../buscar/">
                                            Buscar en la aplicación
                                        </a>
                                        <a class="btn btn-outline-primary btn-sm" href="../busquedaweb/">
                                            Buscar en Wikipedia
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <form class="form-inline" name="form_reloj">
                                    <input class="form-control w-25 p-2 text-white bg-inverse text-center" type="text" name="reloj" readonly="readonly" data-toggle="tooltip" data-placement="bottom" title="Hora"/>
                                    <button type="button" class="btn btn-primary w-75 p-2   active" data-toggle="tooltip" data-placement="bottom" title="Fecha">
                                        <span id="diaSemana" class="diaSemana">
                                            &nbsp;
                                        </span>
                                        <span id="dia" class="dia">
                                            &nbsp;
                                        </span>
                                        <span>
                                            de
                                        </span>
                                        <span id="mes" class="mes">
                                            &nbsp;
                                        </span>
                                        <span>
                                            del
                                        </span>
                                        <span id="year" class="year">
                                            &nbsp;
                                        </span>
                                    </button>
                                </form>
                            </div>
                            </div>
            <div class="row">
                <div class="col-lg-12">
                     <div class="card text-center">
                        <div class="card-header">
                            <h4 class="card-title">
                                Bienvenidos a Wiki
                            </h4>
                            <p class="card-text">
                                En este sitio puede compartir y buscar contenido.
                            </p>
                        </div>
                <div class="card-block">
                    <?php foreach ($rcantidad as $cantidad): ?>
                    <p class="card-text">
                        <strong>
                            Cantidad de temas creados:
                        </strong>
                        <?php echo $cantidad->cantidad; ?>
                    </p>
                    <?php endforeach;?>
                    <div class="col-md-6 offset-3">
                        <?php if (isset($_GET['exitoagregar'])) {echo ' <br/>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    &times;
                                </span>
                            </button>
                            <strong>
                                Exitos!
                            </strong>
                            El tema fue creado
                            <i class="text-primary fa fa-thumbs-o-up" aria-hidden="true">
                            </i>
                        </div>
                        ';
    echo '<meta http-equiv="refresh" content="4;url=../principal/"/>';}?>
                    </div>
                    <div class="col-md-6 offset-3">
                        <?php if (isset($_GET['exitomodificar'])) {echo ' <br/>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    &times;
                                </span>
                            </button>
                            <strong>
                                Exitos!
                            </strong>
                            El tema fue modificado
                            <i class="text-primary fa fa-thumbs-o-up" aria-hidden="true">
                            </i>
                        </div>
                        ';
    echo '<meta http-equiv="refresh" content="4;url=../principal/"/>';
}?>
                    </div>
                    <div class="col-md-6 offset-3">
                        <?php if (isset($_GET['exitoeliminar'])) {echo '  <br/>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    &times;
                                </span>
                            </button>
                            <strong>
                                Exitos!
                            </strong>
                            El tema fue eliminado
                            <i class="text-primary fa fa-thumbs-o-up" aria-hidden="true">
                            </i>
                        </div>
                        ';
    echo '<meta http-equiv="refresh" content="4;url=../principal/"/>';
}?>
                    </div>
               <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="loader" class="text-center">
                            <img src="../assets/img/loader.gif"/>
                        </div>
                        <div class="outer_div">
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'admin/enciclopedia/php/agregar_definicion.php';?>
            <script>
                $(document).ready(function(){
                  load(1);
                });

                function load(page){
                  var parametros = {"action":"ajax","page":page};
                  $("#loader").fadeIn('slow');
                  $.ajax({
                    url:'../paginacion/',
                    data: parametros,
                     beforeSend: function(objeto){
                    $("#loader").html("<img src='../assets/img/loader.gif'>");
                    },
                    success:function(data){
                      $(".outer_div").html(data).fadeIn('slow');
                      $("#loader").html("");
                    }
                  })
                }
                </script>
            <script>
              $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
            </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Header Section    -->
                <script src="admin/enciclopedia/config/js/hora.js"></script>
                <script src="admin/enciclopedia/config/js/fecha.js"></script>
                <!-- Page Footer-->
                <footer class="main-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    Copyright
                                    <i class="fa fa-copyright">
                                    </i>
                                    Memorium
                                    <?php echo date('Y') ?>
                                    <small>
                                        Todo los derechos reservados.
                                    </small>
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>
                                    Desarrollado
                                    <a href="https://diegopennisi.es" target="_blank" class="external">
                                        Diego Pennisi.
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>



<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="agregar" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="text-success fa fa-plus">
                    </i>
                    Agregar Nueva definición
                </h5>
                <a class="btn " href="temas" > <i class="text-danger  fa fa-times-circle fa-2x " aria-hidden="true"></i></a>
            </div>
            <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="formulario">
                    <div class="form-group" id="form">
                        <label class="form-control-label" for="titulo">
                            Titulo:
                        </label>
                        <input class="form-control" placeholder="titulo" id="titulo" required="" name="titulo" type="text">

                        </input>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="descripcion">
                            Descripción:
                        </label>

                       <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="descripcion" required=""></textarea>

                        </input>
                    </div>
                    <div class="form-group">
                     <input readonly="" type="text"  name="fecha" class="form-control" value="<?php echo date("Y-m-d H:i:s"); ?>" >
                    </div>
                        <div class="modal-footer">
                           <a class="btn btn-outline-danger" href="../principal/">Cerrar</a>
                            <button class="btn btn-outline-success" id="button" name="agregar" type="submit">
                                Agregar definición
                            </button>
                        </div>
                    </input>
                </form>
            </div>
        </div>
    </div>



<script type="text/javascript">

            $(function(){
    $("#button").on("click", function(){

$( "#formulario" ).validate({
  rules: {
    titulo: {
      required: true
    },
    descripcion: {
      required: true}


  },
   messages:
    {
        titulo: {required: 'El titulo es requerido'},
        descripcion:{required: 'La descripcion es requerida'}
    }


        });


    });
});


</script>

    <?php include 'admin/header/modal/modalSesion.php';?>
    <?php include 'admin/header/modal/desconectado.php';?>
