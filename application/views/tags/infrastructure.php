<?php 

    $gentelella = base_url()."../plugins/gentelella/production/";
    $datatables = base_url()."../plugins/datatables/";
    
?>


<div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">            	
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>                        
        </nav>
    </div>
</div>

<div class="right_col" role="main">   
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">          
            <div class="x_panel">
                <div class="x_title">
                    <h2>Infrastructure</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>                           
                    </ul>
                    <div class="clearfix"></div>
                </div>
				
				<div><?php echo "Affluence :".$attendance; ?></div>
                
                <div class="x_content">
	                	<table class="table dataTableLight">
	                		<thead>
	                			<tr>
	                				<th>Nom</th>	                			
	                				<th>1</th>
	                				<th>2</th>
	                				<th>3</th>
	                				<th>4</th>
	                				<th>5</th>
	                				<th>6</th>
	                				<th>7</th>
	                				<th>8</th>
	                				<th>9</th>
	                				<th>10</th>
	                			</tr>
	                		</thead>
	                		<tbody>

					<?php foreach ($infraAtts as $nom => $niveaux) { ?>

	                			<tr>
	                				<td><?php echo $nom ?> </td>
	                				<?php foreach ($niveaux as $niveau => $valeur) { ?>
										<td><?php echo $valeur ?></td>
	                				<?php } ?>
	                				
	                			</tr>
	                <?php } ?>
	                		
	                		</tbody>
	                	</table>
							
					

                </div>
            </div>
        </div>
    </div>


</div>




<div id="custom_notifications" class="custom-notifications dsp_none">
<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
</ul>
<div class="clearfix"></div>
<div id="notif-group" class="tabbed_notifications"></div>
</div>


<script type="text/javascript" src="<?php echo $datatables ?>datatables.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>        
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

<script src="<?php echo $gentelella?>js/bootstrap.min.js"></script>


<!-- chart js -->
<script src="<?php echo $gentelella?>js/chartjs/chart.min.js"></script>

<!-- bootstrap progress js -->
<script src="<?php echo $gentelella?>js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo $gentelella?>js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo $gentelella?>js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo $gentelella?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo $gentelella?>js/datepicker/daterangepicker.js"></script>

<script src="<?php echo $gentelella?>js/custom.js"></script>