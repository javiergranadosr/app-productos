<?php
include_once 'Conexion.php';
$con = new Conexion();
$sql = "SELECT * FROM productos ORDER BY id DESC";
$resultado = mysqli_query($con->Conectar(), $sql);
?>

<section>
    <form>
        <div class="row">
            
            <div class="col-md-12">
                <label>Buscar producto</label>
                <select id="buscadorVivo" class="form-control input-sm">
                    <option value="0">Todos los productos</option>
                    <?php
                    while ($row = mysqli_fetch_array($resultado)):
                        ?>
                        <option value="<?php echo $row['id'] ?>">
                            <?php echo $row['nombre_producto'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>

            </div>

        </div>
    </form>
</section>


<script>
    $('#buscadorVivo').select2();
    //FUNCION Y PETICION AJAX PARA RECARGAR LA TABLA Y EL BUSCADOR CON LOS NUEVOS PRODUCTOS
    $('#buscadorVivo').change(function () {
        $.ajax({
            url: 'php/config/Crearsesion.php',
            type: 'POST',
            data: 'dato='+$('#buscadorVivo').val()
        })
                .done(function (res) {
                   
                    $("#contenido-tabla").load("php/config/TablaDatos.php");
          
                  
                   
                })
                .fail(function () {
                    $("body").overhang({
                        type: "error",
                        message: "Error al procesar los datos",
                        closeConfirm: true
                    });
                })
    });

</script>
