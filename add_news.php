<?php
$news ="";
include("init.php");

if (isset($_SESSION["client_session"])) {
?>

<div class="container">


      <div class="content">
          <h1 class="text-center"><?php echo lang("add_news") ?></h1>
          <form>
            <input type="hidden" id="email__" name="" value="<?php echo $_SESSION["client_session"]; ?>">
            <div class="form-group">
              <label for="title">Titre</label>
              <input type="text" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
              <label for="text">Text</label>
              <textarea class="form-control" id="text" rows="3"></textarea>
            </div>
            <div class="form-group">
             <label for="image">Image</label>
             <input type="file" class="form-control-file" id="image">
           </div>
           <button type="button" class="btn btn-primary" name="button"><?php echo lang("add_news") ?></button>
          </form>
      </div>
</div>
<?php
}else{
  header("location:index.php");
  exit();
}


 ?>
