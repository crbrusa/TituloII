
 
<div class="col-md-6">
        <?php echo $subtitle1; ?>




<?php 

            if(validation_errors()!= null)
            {

                echo '<div class="alert alert-danger">';
                echo validation_errors();
                echo '</div>';


            }
            $error = $this->session->flashdata('usuario_incorrecto');
            if($error)
            {
                echo '<div class="alert alert-danger">';
                echo $error;
                echo '</div>';
                
            }

?>

<?php echo form_open('cliente/regveh/'. $iduser); ?>
       

    <div class="form-group has-feedback">
    <input type="text" name="patente" class="form-control" placeholder="Patente">
 </div>


<div class="form-group has-feedback">
    <input type="text" name="marca" class="form-control" placeholder="Marca">

     </div>


<div class="form-group has-feedback">
    <input type="text" name="modelo" class="form-control" placeholder="Modelo">

     </div>


<div class="form-group has-feedback">
    <input type="text" name="ano" class="form-control" placeholder="Año">

     </div>


<div class="form-group has-feedback">
	<input type="text" name="color" class="form-control" placeholder="Color">
 </div>


<div class="form-group has-feedback">
        <center> <?php echo $this->recaptcha->render(); ?></center>
         </div>


<div class="form-group has-feedback">
      <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Agregar</button>
</div>
</form>
           

</div>
