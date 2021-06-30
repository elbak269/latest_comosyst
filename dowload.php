<?php
ob_start();
$pageTitle = "Dowload";
$dowload ="";
include("init.php");

if (isset($_GET["FREE_TRIAL"])) {
  if (!isset($_SESSION["client_session"])) {

    ?>
    <div class="container">
      <h1 class="text-center"> <span class="span_login" > <i class="fa fa-sign-in-alt"></i> <?php echo lang("login"); ?></span> <span class="space"> || </span><span class="span_sigh_up"> <i class="fas fa-user-plus"></i> <?php echo lang("signup"); ?></span> </h1>

      <div class="div_for_login">

            <form>
          <div class="form-group">
            <label for="email_login"><?php echo lang("email") ?></label>
            <input type="email" class="form-control" id="email_login" aria-describedby="emailHelp" placeholder="Entrez <?php echo lang("email") ?>">
          </div>
          <div class="form-group">
            <label for="passwprd_login"><?php echo lang("password") ?></label>
            <input type="password" class="form-control" id="passwprd_login" placeholder="<?php echo lang("password") ?>">
          </div>
          <a id="btn_login" class="btn btn-primary"><?php echo lang("login"); ?></a>
        </form>

      </div>


      <div class="div_for_sign_up ">

        <form>
          <div class="form-group">
            <label for="full_name"><?php echo lang("fullName") ?></label>
            <input type="email" class="form-control" id="full_name"  placeholder="Entrez <?php echo lang("fullName") ?>" >
          </div>

          <div class="form-group">
            <label for="phone"><?php echo lang("phone") ?></label>
            <input type="number" class="form-control" id="phone"  placeholder="Entrez <?php echo lang("phone") ?>">
          </div>


            <div class="form-group">
              <label for="email"><?php echo lang("email") ?></label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez <?php echo lang("email") ?>">
            </div>

            <div class="form-group">
              <label for="company_name"><?php echo lang("company") ?></label>
              <input type="text" class="form-control" id="company_name" placeholder="Entrez <?php echo lang("company") ?>">
            </div>

            <div class="form-group">
              <label for="adress"><?php echo lang("adress") ?></label>
              <input type="text" class="form-control" id="adress"  placeholder="Entrez <?php echo lang("adress") ?>">
            </div>

      <div class="form-group">
        <label for="password"><?php echo lang("password") ?></label>
        <input type="password" class="form-control" id="password" placeholder="<?php echo lang("password"); ?>">
      </div>



      <div class="form-group">
        <label for="rep_password"><?php echo lang("repeatPassword"); ?></label>
        <input type="password" class="form-control" id="rep_password" placeholder="<?php  echo lang("repeatPassword");?>">
      </div>

      <a id="btn_sign_up" class="btn btn-primary">Submit</a>
    </form>

      </div>



      <div id="result_request" class=""></div>

    </div>


    <?php


  }else if(isset($_GET["product_id"])){
    ?>

    <div class="container">
      <input type="hidden" id="inpu_price" name="" value="<?php echo get_product_price ($_GET["product_id"]);  ?> ">
        <input type="hidden" id="client_email" name="" value="<?php echo $_SESSION["client_session"];  ?> ">
        <input type="hidden" id="product_id_" name="" value="<?php echo $_GET["product_id"];?> ">
      <h1 class="text-center">Comment installer le Logiciel ComoApp</h1>


      <ol>
         <li>Cliquez Télécharger</li>
         <li>
           Après le téléchargement et décompression  cliquez sur Fichier  (Setup)
        </li>
        <li>

          <ol>
           <strong>Configuration requise pour exécuter l'application</strong>
            <li>Crystal Report (c'est dans le fichier d'installation)</li>
              <li>SQL server 2019 Report (c'est dans le fichier d'installatioN .   Choisissez le Type  d'installation =>( De base ) . Lors de l'installation le Logiciel)</li>
              <li>Sql Server Management  (c'est dans le fichier d'installation)</li>
          </ol>
        </li>
        <li> <ol>
         <strong> Une Fois l'installation Terminée </strong>
          <li>
             Dans le fichier de téléchargement, il y a un fichier appelé (sales)
          </li>
          <li>Il y a une vidéo ci-dessous qui explique comment ajouter ce fichier (sales) dans le programme</li>
        </ol>
      </li>
      </ol>


<div class="foote">
  <div class="row">
    <div class="col-sm-12 col-md-6">

      <iframe  src="https://www.youtube.com/embed/F62hySXp7Wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    </div>
    <div class="col-sm-12 col-md-6 div_btn_dow">

      <div class="row">
        <div class="col-xs-6">
          <div class="div_pay">
            <div id="smart-button-container">
                <div style="text-align: center;">
                  <div id="paypal-button-container"></div>
                </div>
              </div>
            <script src="https://www.paypal.com/sdk/js?client-id=ASvNaabsdeh9N_nxtfsxc04_DmUWNTjHJtY-d4GGkCp-3FDFFv3AM0jnZzOHwfTdmBSKGKp3081izByQ&currency=EUR" data-sdk-integration-source="button-factory"></script>

          </div>
        </div>

        <div class="col-xs-6">

          <form class="" action="<?php echo $_SERVER['PHP_SELF'].""; ?>" method="get">
            <input class="hidden" type="hidden" name="dowload_comoapp" value="1">
            <input class="hidden" type="hiden" name="FREE_TRIAL" value="1">
            <input class="hidden" type="hiden" name="product_id" value="<?php echo $_GET["product_id"] ?>">
            <button type="submit" id="btn_dowlaod" type="button" class="btn btn-primary" name="dowload_comoapp"> Télécharger Pour Essai Gratuit</button>

          </form>

        </div>

      </div>


    </div>

  </div>

</div>


    </div>

    <?php

    if (isset($_GET["FREE_TRIAL"]) && isset($_GET["dowload_comoapp"])) {
        $file_url = 'dowlaod/ComoAapp.rar';
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url);
    }

  }else{
    header("location:index.php");
  }
}

 include($template."footer.php");
ob_end_flush();
 ?>
