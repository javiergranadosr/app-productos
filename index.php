<?php 

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>APLICACIÓN DE PRODUCTOS</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/overhang.min.css" />
        <link rel="stylesheet" type="text/css" href="css/select2.css"/>
        <link rel="stylesheet" href="css/styles.css">

    </head>

    <body>

        <header>
            <div class="container">
                <div class="row p-4">
                    <div class="col-md-4">
                        <img src="iconos/icon-carrito.png" alt="ICONO CARRO" width="25%">
                    </div>
                    <div class="col-md-8">
                        <h1 class="titulo-app"> APLICACIÓN DE PRODUCTOS</h1>
                    </div>
                </div>

            </div>
        </header>

        <main>
            <div class="container mt-2">


                <div id="formulario-buscador"></div>
                <section class="mt-4 mr-5 ml-5">
                    <form>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text" class="caja-input-nproducto" id="input-producto"
                                       placeholder="Nombre del producto">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="text" class="caja-input-vendedor" id="input-vendedor"
                                       placeholder="Nombre del vendedor">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="caja-input-precio" id="input-precio"
                                       placeholder="$ Precio del producto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button"   id="btn-agregar" class="btn-agregar-producto">Agregar producto</button>

                            </div>
                        </div>
                    </form>
                </section>

                <section   class="mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Vendedor</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Fecha de compra</th>
                                <th scope="col">Actualizar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id ="contenido-tabla">
                            <?php
                            include_once 'php/config/TablaDatos.php';
                            ?>

                        </tbody>
                    </table>
                </section>


            </div>

            <!-- MODAL DE ACTUALIZACION DE PRODUCTO-->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bg-info">
                            <form>
                                <input type="hidden" id="idproducto">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="caja-input-nproducto" id="producto-actualizar"
                                               placeholder="Nombre del producto">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <input type="text" class="caja-input-vendedor" id="vendedor-actualizar"
                                               placeholder="Nombre del vendedor">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="caja-input-precio" id="precio-actualizar"
                                               placeholder="$ Precio del producto">
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button"   id="btn-actualizar" class="btn-actualizar-producto">Actualizar</button>

                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </main>


        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        <!--SCRIPT PARA CARGAR EL FORMULARIO DE BUSQUEDA DE DATOS-->
        <script>
            $('#formulario-buscador').load('php/config/Buscador.php');
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/overhang.min.js"></script>
        <script src="js/ProcesarDatos.js"></script>
        <script src="js/select2.js"></script>
    </body>

</html>