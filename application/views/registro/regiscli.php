
 
<div class="login-box-body">
<?php  
$error = $this->session->flashdata('usuario_incorrecto');
            if($error)
            {
                echo '<div class="alert alert-danger">';
                echo $error;
                echo '</div>';
                
            }

            if(validation_errors()!= null)
            {

                echo '<div class="alert alert-danger">';
                echo validation_errors();
                echo '</div>';


            }

            ?>
<p class="login-box-msg"><?php echo $subtitle1; ?></p>

<?php echo form_open('mecanicapp/reguser/cli'); ?>
       <div class="form-group has-feedback">

    <input type="text" name="rut" class="form-control" placeholder="Rut"/><br />

    <input type="text" name="nombre" class="form-control" placeholder="Nombre"/><br />

    <input type="text" name="apellido" class="form-control" placeholder="Apellido"/><br />

    <input type="email" name="email" class="form-control" placeholder="E-mail"/><br />


	<input type="password" name="pass" class="form-control" placeholder="Password"/><br />

</div>
<script type="text/javaScript">
    $(function() {
        $('input[type="checkbox"]').on('change', function() {
            $(this).closest('fieldset').find('.myClass').toggle(this.checked);
        });
    });
</script>

<fieldset>
    <legend><input type="checkbox" name="check" checked> Registrar vehiculo</legend>
    <span class="myClass">
 
    <input type="text" name="patente" class="form-control" placeholder="Patente"><br />

    <input type="text" name="marca" class="form-control" placeholder="Marca"/><br />

    <input type="text" name="modelo" class="form-control" placeholder="Modelo"/><br />

 
    <input type="text" name="ano" class="form-control" placeholder="Año"/><br />

    <input type="text" name="color" class="form-control" placeholder="Color"/><br />

    </span>
</fieldset>

<?php echo $this->recaptcha->render(); ?>


    <input type="submit" name="submit" value="Enviar" />

</form>
</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
