<div class="container mt-5">
    <h3>Datos de Contacto</h3>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <tr>
                    <th scope="col">Nombre</th>
                    <td><?php echo $result["name"];?></td>
                </tr>
        
                <tr>
                    <th scope="col">Correo</th>
                    <td><?php echo $result["email"];?></td>
                </tr>
        
                <tr>
                    <th scope="col">Comentario</th>
                    <td><?php echo $result["comment"];?></td>
                </tr>
        </table>
        </div>
    </div>
</div>