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
                    <h2>Poste par poste</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
				
				<div class="x_content">
					<?php if(isset($postes)){ ?>
		                <table class="table dataTableLight">
		                	<thead>
		                		<tr>
		                			<th>GK</th>
		                			<th>value</th>
		                		</tr>                		
		                	</thead>
		                	<tbody>
		                		<?php foreach ($postes["gardiens"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
		                	</tbody>
		                </table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>DL</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["defenseurs"]["gauche"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>DC</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["defenseurs"]["centre"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>DR</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["defenseurs"]["droite"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>				
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MDL</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieuxdef"]["gauche"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MDC</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieuxdef"]["centre"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MDR</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieuxdef"]["droite"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>ML</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieux"]["gauche"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MC</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieux"]["centre"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MR</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieux"]["droite"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MOG</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieuxoff"]["gauche"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MOC</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieuxoff"]["centre"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>MOR</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["milieuxoff"]["droite"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>
						<table class="table dataTableLight">
							<thead>
								<tr>
									<th>A</th>
									<th>value</th>
								</tr>
							</thead>
							<tbody>						
		                		<?php foreach ($postes["attaquants"] as $nom){ ?>
		                			<?php foreach ($nom as $key => $value){ ?>
		                				<tr>
		                					<td class="col-md-6"><?php echo $key ?></td>
		                					<td class="col-md-6 <?php if($value < 50){echo 'alert alert-danger';}elseif($value < 60){echo 'alert alert-warning';}elseif ($value < 70) {echo 'alert alert-info';}else{echo 'alert alert-success';} ?>"><?php echo $value ?></td>
		                				</tr>
		                			<?php } ?>
		                		<?php } ?>
							</tbody>
						</table>				
					<?php } ?>
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
