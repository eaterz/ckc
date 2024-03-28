<?php require "components/head.php" ?>

    <?php require "components/navbar.php" ?>
<h1>Notikumi</h1>

   <ol class="delete">

    <?php foreach($notikumi as $notikums){ ?>
        <div class="blakus">
        <li> <?php echo $notikums["datums_laiks"]."/". $notikums["notikums"]. "/" . $notikums["vieta"]?> </li><br>
        <form  method="POST">
        <input name="id" type="hidden" value="<?=$notikums["id"] ?>">
        <button class="button-30" role="button" >💩</button>
        </form>
        </div>
    <?php } ?>
    </ol>

    <h1>Kolektivi</h1>
    <ol class="delete">

    <?php foreach($kolektivi as $kolektivs){ ?>
        
       <div class="blakus">
         <li> <?php echo $kolektivs["name"]."/". $kolektivs["description"]?> </li><br>
        <form   method="POST">
        <input name="id" type="hidden" value="<?=$kolektivs["id"] ?>">
        <button class="button-30" role="button" >💩</button>
        </form>
       </div>
    <?php } ?>
    </ol>

<?php require "components/footer.php" ?>