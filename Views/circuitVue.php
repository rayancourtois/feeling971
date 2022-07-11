<?php
include_once('header.php');
?>
<link href="css/bootstrap.css" rel="stylesheet">

<div class="container">

    <div class="display">
        <div class="display1">

            <div>

                <p>Ceci est un filtre</p>

            </div>

        </div>

        <div class="display2">
            <div>
                    <?php
                    $listeCircuit = getInfoCircuit();
                    foreach($listeCircuit as $a){ ?>
                            <div class="gridCircuit">
                                <div class="alignCircuit">
                                <img src="<?php echo $a["image_circuit"]; ?>"">
                                   <div class="informationCircuit">
                                        <h3><?php echo $a["titre_circuit"]; ?></h3>
                                          <div class="nuiteeCircuit">
                                              <?php $nuitee = $a["nuitee_circuit"];
                                              $jours = intval($nuitee)+1;
                                              ?>
                                              <b class="colororange">  <p><?php echo $jours.' jours / '. $nuitee . ' nuits'; ?></p></b>
                                              <b> <p><?php echo 'À partir de ' . $a["prix_circuit"] .'€ par adulte'; ?></p></b>

                                          </div>
                                       <div class="descriptionCircuit">
                                        <p><?php echo $a["description_circuit"]; ?></p>
                                       </div>
                                    </div>
                                    <div class="pdfCircuit">
                                        <a href="<?php echo $a["pdflink_circuit"]; ?>" target="_blank">Téléchargez la fiche produit</a>.
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
            </div>

        </div>

    </div>

</div>