<div class="container">
    <div class="d-flex justify-content-center">
        <div class="form-group my-5">
            <form action="<?=base_url("admin/promociones/agregar")?>" class="form-group" id="formAgregarPromocion" method="post" enctype="multipart/form-data">
                <div id="nombre">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre de la promoción">
                        <div class="invalid-feedback">
                        </div>
                        <br>
                </div>
                <div id="productos">
                    <label for="">productos</label>
                    <input type="text" class="form-control" id="productos" name="productos" placeholder="productos">
                        <div class="invalid-feedback">
                        </div>
                        <br>
                </div>
                <div id="precio">
                    <label for="">precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="precio">
                        <div class="invalid-feedback">
                        </div><br>
                </div>
                <div id="imagen">
                    <label for="">Imagen</label>
                    <input type="file" id="imagen" name="imagen">
                        <div class="invalid-feedback">
                        </div><br>
                </div>
                <div clas="pd-4">
                <button type="submit" class="btn btn-primary" id="subirPromocion" name="subirPromocion" >Agregar</button>
                </div>
            </form>
        </div>
    
    </div>
</div>


<script>
    $('#nombre > input').focus(function(){
        $(this).removeClass("is-invalid")
    })
    $('#productos > input').focus(function(){
        $(this).removeClass("is-invalid")
    })
    $('#precio > input').focus(function(){
        $(this).removeClass("is-invalid")
    })

    var frmAgregar = $("#formAgregarPromocion");
    frmAgregar.submit(function(e){
        var nom = $('#nombre').val();
        var prod = $('#productos').val();
        var pre = $('#precio').val();
        var imag = $('#imagen').val();
        $.ajax({
            url: "<?=base_url("admin/promociones/agregar")?>",
            data:{nombre:nom, prod:productos, pre:precio,imag:imagen},
            dataType: "JSON",
            type: "post",
            statusCode:{
                400: function(xhr){
                    var json = JSON.parse(xhr.responseText);
                    console.log(json);
                    $('#nombre > input').removeClass('is-invalid')
                    $('#productos > input').removeClass('is-invalid')
                    $('#precio > input').removeClass('is-invalid')

                    if(json.nombre.length != 0){
                        $("#nombre > div").html(json.nombre);
                        $('#nombre > input').addClass('is-invalid')
                    }
                    if(json.productos.length != 0){
                        $('#productos > div').html(json.productos);
                        $('#productos > input').addClass("is-invalid")
                    }
                    if(json.precio.length != 0){
                        $('#precio > div').html(json.precio)
                        $('#precio > input').addClass("is-invalid")

                    }
                }
            }
            
        })
        .done(function(response){
            alert(response.mensaje);

        })
        .fail(function(response){

        })

        e.preventDefault();

    });


</script>