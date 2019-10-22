
// EVENTO PARA AGREGAR PRODUCTO
$('#btn-agregar').click(function () {
    if ($('#input-producto').val() < 1 || $('#input-vendedor').val() < 1 || $('#input-precio').val() < 1) {
        $("body").overhang({
            type: "error",
            message: "A complete todos los campos en blanco",
            closeConfirm: true
        });
    } else {
        var ruta = "nombre_producto=" + $('#input-producto').val() + "&nombre_empleado=" + $('#input-vendedor').val() + "&precio_producto="
                + $('#input-precio').val();

        $.ajax({
            url: "php/AgregarProducto.php",
            type: "POST",
            data: ruta
        })
                .done(function (res) {
                    $("body").overhang({
                        type: "success",
                        message: "Producto agregado exitosamente ",

                    });
                    $('#input-producto').val("");
                    $('#input-vendedor').val("");
                    $('#input-precio').val("");
                    $("#contenido-tabla").load("php/config/TablaDatos.php");
                    $('#formulario-buscador').load('php/config/Buscador.php');



                })
                .fail(function () {
                    $("body").overhang({
                        type: "error",
                        message: "Error al procesar los datos",
                        closeConfirm: true
                    });
                })
    }
});
// EVENTO PARA ACTUALIZAR PRODUCTO
$('#btn-actualizar').click(function () {
    if ($('#idproducto').val() < 1 || $('#producto-actualizar').val() < 1 || $('#vendedor-actualizar').val() < 1 || $('#precio-actualizar').val() < 1) {
        $("body").overhang({
            type: "error",
            message: "A complete todos los campos en blanco para la actualización de datos",
            closeConfirm: true
        });
    } else {
        var ruta = "id=" + $('#idproducto').val() + "&nombre_productoA=" + $('#producto-actualizar').val() + "&nombre_empleadoA=" + $('#vendedor-actualizar').val() + "&precio_productoA="
                + $('#precio-actualizar').val();

        $.ajax({
            url: "php/ActualizarProducto.php",
            type: "POST",
            data: ruta
        })
                .done(function (res) {
                    $("body").overhang({
                        type: "success",
                        message: "Producto actualizado exitosamente ",
                    });
                    $("#contenido-tabla").load("php/config/TablaDatos.php");
                })
                .fail(function () {
                    $("body").overhang({
                        type: "error",
                        message: "Error al procesar los datos",
                        closeConfirm: true
                    });
                })
    }
});


// FUNCION PARA ELIMINAR PRODUCTO
function eliminarProducto(id) {
    $.ajax({
        url: 'php/EliminarProducto.php',
        type: 'POST',
        data: 'id=' + id
    })
            .done(function (res) {
                $("body").overhang({
                    type: "success",
                    message: "Producto eliminado exitosamente ",
                });
                $("#contenido-tabla").load("php/config/TablaDatos.php");
                $('#formulario-buscador').load('php/config/Buscador.php');
            })
            .fail(function () {
                $("body").overhang({
                    type: "error",
                    message: "Error al procesar los datos",
                    closeConfirm: true
                });
            })
}

// FUNCION PARA AGREGAR DATOS AL MODAL DEL FORMULARIO PARA SU ACTUALIZACION
function agregarDatosForm(datos) {
    // CONVERTIR LA VARIABLE datos en un array
    var arreglo_datos = datos.split("||");
    $('#idproducto').val(arreglo_datos[0]);
    $('#producto-actualizar').val(arreglo_datos[1]);
    $('#vendedor-actualizar').val(arreglo_datos[2]);
    $('#precio-actualizar').val(arreglo_datos[3]);

}








