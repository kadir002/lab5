<div class="container mt-5">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php $controller = Security::encode("Contact"); $method = Security::encode("show"); ?>
            <form action="<?php echo "index.php?c=".$controller."&m=".$method.""?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
                        name="input_contacto_name" value="<?php echo isset($nombre) ? $nombre : "";?>">
                    <div id="textHelp" class="form-text"><?php echo isset($error[0]) ? $error[0] : "" ?></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
                        name="input_contacto_email" value="<?php echo isset($email) ? $email : "";?>">
                    <div id="textHelp" class="form-text"><?php echo isset($error[1]) ? $error[1] : "" ?></div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="input_contacto_comment"></textarea>
                    <div id="textHelp" class="form-text"><?php echo isset($error[2]) ? $error[2] : "" ?></div>
                </div>

                <input type="hidden" value="<?php echo Security::getToken()?>" name="token">

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
            </form>
        </div>
    </div>
</div>