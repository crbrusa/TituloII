
 <div class="col-md-6">
<?php            
            if($this->session->flashdata('success') !=null)
            {
                echo '<div class="callout callout-success">';
                echo $this->session->flashdata('success');
                echo '</div>';
                
            }
            if($this->session->flashdata('bienvenida') !=null)
            {
                echo '<div class="callout callout-info">';
                echo '<center><h1>';
                echo $this->session->flashdata('bienvenida');
                echo '</h1></center>';
                echo '</div>';
                
            }

?>

<?php echo $subtitle1; ?>
    <!--      <div class="box box-widget widget-user-2">
            
            <div class="widget-user-header bg-yellow">
  <?php foreach ($usuario as $news_item): ?> 
              
              <h3 class="widget-user-username"><?php echo $news_item['nombre'].' '. $news_item['apellido']?> </h3>
              <h5 class="widget-user-desc"><?php echo $this->session->userdata('user') ?></h5>
  <?php endforeach; ?>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div>-->
                </div>
