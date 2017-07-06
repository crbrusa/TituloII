
 
<div class="col-md-6">
<h2><?php echo $subtitle1; ?></h2>
<?php 

			if(validation_errors()!= null)
			{

				echo '<div class="alert alert-danger">';
				echo validation_errors();
				echo '</div>';


			}

			?>


<?php echo form_open('administrador/regserv'); ?>
       


  <div class="form-group has-feedback">
    <input type="text" name="nombre" class="form-control" placeholder="Nombre">

 </div>


<div class="form-group has-feedback">
  
    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">

  </div>

<div class="form-group has-feedback">

    <input type="text" name="costo" class="form-control" placeholder="Costo $">

 </div>

<div class="form-group has-feedback">

	<input type="text" name="duracion" class="form-control" placeholder="Duracion">

 </div>

<div class="form-group has-feedback">

   <center> <?php echo $this->recaptcha->render(); ?></center>
   </div>

<div class="form-group has-feedback">
    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
</div>

</form>
</div>