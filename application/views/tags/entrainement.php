<?php 

    $gentelella = base_url()."../plugins/gentelella/production/";
    $datatables = base_url()."../plugins/datatables/";
    $j = new Joueur_adapter();

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
    <br>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">          
            <div class="x_panel">
                <div class="x_title">
                    <h2>Caractéristiques joueur</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>                           
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <table class="dataTable table table-bordered table-hover table-striped table-condensed">
                         <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Position</th>
                                <th title="expérience">EXP</th>
                                <th>Age</th>
                                <th>ASI</th>
                                <th title="puissance">PUI</th>
                                <th title="endurance">END</th>
                                <th title="vitesse">VIT</th>
                                <th title="marquage">MAR</th>
                                <th title="tacle">TAC</th>
                                <th title="activite">ACT</th>
                                <th title="placement">PLA</th>
                                <th title="passe">PAS</th>
                                <th title="centre">CEN</th>
                                <th title="technique">TEC</th>
                                <th title="tête">TET</th>
                                <th title="finition">FIN</th>
                                <th title="tir de loin">TDL</th>
                                <th title="coup francs">CPA</th>
                                <th title="salaire">Salaire</th>
                            </tr>
                        </thead>
                        <tbody>   
                            <?php if(isset($joueurschamps)){ ?>
                                <?php foreach ($joueurschamps as $key => $value) { ?>
                                    <?php 
                                        $datas = $j->getDataJoueurByIdTrophyJoueur($key);                                    
                                    ?>
                                    <tr> <!-- display nom, poste, experience, age and asi -->
                                        <?php foreach ($datas as $nom => $profile) { ?>
                                            <td><?php echo $nom ?></td>
                                            <?php foreach ($profile as $valueProfile){ ?>
                                                <td><?php echo $valueProfile ?></td>
                                            <?php } ?>
                                        <?php } ?>


                                        <!-- characteristics -->
                                        <?php 
                                            foreach ($value as $k => $v){ 
                                                $i = 0;
                                                if(sizeof($v) > 1){
                                                    $diff = ($v[$i]-$v[$i+1]);                                                    
                                                }else{
                                                    $diff = '-';
                                                }
                                        ?>
                                                <td class="<?php if($diff < 0){
                                                        echo 'alert alert-danger';
                                                    }elseif ($diff > 0) {
                                                        echo 'alert alert-success';
                                                    }
                                                    ?>">
                                                    <?php echo $diff ?></td>                                                                                        
                                        <?php } ?>                                        
                                                                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">          
            <div class="x_panel">
                <div class="x_title">
                    <h2>Caractéristiques gardiens</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>                           
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <table class="dataTable table table-bordered table-hover table-striped table-condensed">
                         <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Position</th>
                                <th title="expérience">EXP</th>
                                <th>Age</th>
                                <th>ASI</th>                                
                                <th title="puissance">PUI</th>
                                <th title="endurance">END</th>
                                <th title="vitesse">VIT</th>
                                <th title="prise de balle">PDB</th>
                                <th title="un contre un">1v1</th>
                                <th title="reflexes">REF</th>
                                <th title="habileté dans les airs">AIR</th>
                                <th title="détente">DET</th>
                                <th title="communication">COM</th>
                                <th title="dégagement au pied">PIE</th>
                                <th title="relance à la main">MAI</th>
                                <th>N/A</th>
                                <th>N/A</th>
                                <th>N/A</th>
                                <th>N/A</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if(isset($gardiens)){ ?>

                                <?php foreach ($gardiens as $key => $value) { ?>
                                    <?php 
                                        $datas = $j->getDataJoueurByIdTrophyJoueur($key);                                    
                                    ?>
                                    <tr> <!-- display nom, poste, experience, age and asi -->
                                        <?php foreach ($datas as $nom => $profile) { ?>
                                            <td><?php echo $nom ?></td>
                                            <?php foreach ($profile as $valueProfile){ ?>
                                                <td><?php echo $valueProfile ?></td>
                                            <?php } ?>
                                        <?php } ?>


                                        <!-- characteristics -->
                                        <?php 
                                            foreach ($value as $k => $v){ 
                                                $i = 0;
                                                if(sizeof($v) > 1){
                                                    $diff = ($v[$i]-$v[$i+1]);                                                    
                                                }else{
                                                    $diff = '-';
                                                }
                                        ?>
                                                <td class="<?php if($diff < 0){
                                                        echo 'alert alert-danger';
                                                    }elseif ($diff > 0) {
                                                        echo 'alert alert-success';
                                                    }
                                                    ?>">
                                                    <?php echo $diff ?></td>                                                                                        
                                        <?php } ?>                                        
                                                                                        
                                    </tr>
                                <?php } ?>
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