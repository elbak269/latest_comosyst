<?php
ob_start();
$pageTitle = "Login";
$login ="";
include("init.php");
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
include($template."footer.php");
ob_end_flush();

 ?>
