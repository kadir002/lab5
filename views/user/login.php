<div class="container mt-5">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?php if($msg != ""){?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error:</strong> <?php echo $msg;?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


            <?php } ?>
            <form action="<?php echo "index.php?"."c=".Security::encode("User")."&m=".Security::encode("validate")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="input_user_user">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="input_user_password">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <!-- El token siempre se usa en cada formulario, sea GET o POST -->
                <input type="hidden" value="<?php echo Security::getToken()?>" name="token">

                <button type="submit" class="btn btn-success w-100">
                    Entrar
                </button>
            </form> 
        </div>
        
    </div>
</div>