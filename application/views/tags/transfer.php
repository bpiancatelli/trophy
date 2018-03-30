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
                    <h2>Transfer</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>                           
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                <?php                     
                    echo form_open('welcome/transferjson');
                ?>  
                    <form>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Côté</th>
                                    <th>Étrangers</th>
                                    <th>Age</th>
                                    <th>Recommandation</th>                                              
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="gk" value="gk">Gardien</td>
                                    <td><input type="checkbox" name="le" value="le">Gauche</td>
                                    <td><input type="checkbox" name="for" value="for" checked> </td>
                                    <td><input class="col-md-2" name="minage" type="text" value="18">Min</td>
                                    <td>
                                        <select name="rec">
                                            <option value="0">0</option>
                                            <option value="1">0.5</option>
                                            <option value="2">1</option>
                                            <option value="3">1.5</option>
                                            <option value="4">2</option>
                                            <option value="5">2.5</option>
                                            <option value="6">3</option>
                                            <option value="7">3.5</option>
                                            <option value="8">4</option>
                                            <option value="9">4.5</option>
                                            <option value="10">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="de" value="de">Défenseur</td>
                                    <td><input type="checkbox" name="ce" value="ce">Centre</td>
                                    <td></td>
                                    <td><input class="col-md-2" name="maxage" type="text" value="37">Max</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="dm" value="dm">Milieux Défensifs</td>
                                    <td><input type="checkbox" name="ri" value="ri">Droite</td>
                                </tr>
                                <tr><td><input type="checkbox" name="mf" value="mf">Milieux</td></tr>
                                <tr><td><input type="checkbox" name="om" value="om">Milieux Offensifs</td></tr>
                                <tr><td><input type="checkbox" name="fw" value="fw">Attaquants</td></tr>
                            </tbody>
                        </table>

                    <tr>
                        <td><input class="btn btn-primary btn-block" type="submit" name="submit" value="Rechercher" /></td>
                    </tr>
                    </form>
                    <table class="dataTable table table-bordered table-hover table-striped table-condensed">

                    <?php if(isset($liste)){?>

                        <?php 

                            $maxDL = 220;
                            $maxDC = 160;
                            $maxMD = 320;
                            $maxMC = 300;
                            $maxMO = 340;
                            $maxAI = 260;
                            $maxA = 260;
                            $maxGK = 180;

                        ?>
                         <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Age</th>
                                <th>Position</th>
                                <th title="Défenseur latéraux">DL</th>
                                <th title="Défenseur centraux">DC</th>
                                <th title="Milieux défensifs">MD</th>
                                <th title="Milieux centraux">MC</th>
                                <th title="Milieux Offensif">MO</th>
                                <th title="Ailliers">AI</th>
                                <th title="Attaquants">A</th>
                                <th title="Gardiens">GK</th>
                                <th title="Salaire">Salaire</th>
                                <th title="Enchère">Enchère</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($liste as $value) { ?>
                                 
                                <tr>
                                    <?php 

                                        $marquage = $value->getMar();
                                        $tacle = $value->getTac();
                                        $vitesse = $value->getPac();
                                        $placement = $value->getPos();
                                        $puissance = $value->getStr();
                                        $tete = $value->getHea();
                                        $centre = $value->getCro();
                                        $technique = $value->getTec();
                                        $activite = $value->getWor();
                                        $passe = $value->getPas();
                                        $endurance = $value->getSta();
                                        $finition = $value->getFin();
                                        $tdl = $value->getLon();
                                        $pdb = $value->getHan();
                                        $ref = $value->getRef();
                                        $detente = $value->getJum();
                                        $air = $value->getAri();
                                        $un = $value->getOne();

                                        $dl = ( (($marquage*2+$tacle*2+$vitesse*2)  +   ($placement+$puissance+$tete+$centre+$technique)) /$maxDL)*100;
                                        $dc = ( (($marquage*2+$tacle*2)+($placement+$puissance+$tete+$vitesse)) /$maxDC)*100;
                                        $md = ( (($activite*2+$passe*2+$tacle*2+$placement*2+$marquage*2+$puissance*2)+($endurance+$vitesse+$centre+$technique) )/$maxMD)*100;
                                        $mc = ( (($passe*2+$activite*2)+($technique+$placement+$endurance+$puissance+$marquage+$tacle+$finition+$tdl+$tete+$centre+$vitesse) )/$maxMC)*100;
                                        $mo = ( (($activite*2+$passe*2+$technique*2+$tete*2+$finition*2+$tdl*2)+($puissance+$vitesse+$endurance+$centre+$placement) )/$maxMO)*100;
                                        $ai = ( (($vitesse*2+$centre*2)+($technique+$activite+$placement+$passe+$finition+$tdl+$tete+$puissance+$endurance) )/$maxAI)*100;
                                        $a = ( (($finition*2+$tdl*2+$tete*2)+($technique+$puissance+$passe+$placement+$activite+$endurance+$vitesse) )/$maxA)*100;
                                        $gk = ((($pdb*2+$ref*2)+($vitesse+$puissance+$detente+$air+$un))/$maxGK)*100;

                                    ?>                                
                                    <td><?php echo $value->getName() ?></td>
                                    <td><?php echo $value->getAge() ?></td>
                                    <td><?php echo $value->getFpFormat() ?></td>

                                    <td class="<?php if($dl > 70){echo 'alert alert-success';}?>" ><?php echo number_format($dl,3) ?></td>
                                    <td class="<?php if($dc > 70){echo 'alert alert-success';}?>" ><?php echo number_format($dc,3) ?></td>
                                    <td class="<?php if($md > 70){echo 'alert alert-success';}?>" ><?php echo number_format($md,3) ?></td>
                                    <td class="<?php if($mc > 70){echo 'alert alert-success';}?>" ><?php echo number_format($mc,3) ?></td>
                                    <td class="<?php if($mo > 70){echo 'alert alert-success';}?>" ><?php echo number_format($mo,3) ?></td>
                                    <td class="<?php if($ai > 70){echo 'alert alert-success';}?>" ><?php echo number_format($ai,3) ?></td>
                                    <td class="<?php if($a  > 70){echo 'alert alert-success';}?>" ><?php echo number_format($a,3)  ?></td>
                                    <td class="<?php if($gk  > 70){echo 'alert alert-success';}?>" ><?php echo number_format($gk,3)  ?></td>
                                    <td><?php echo $value->getWage() ?></td>
                                    <td><?php echo number_format($value->getBid()) ?></td>
                                </tr>
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
