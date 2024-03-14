<?php require "components/head.php" ?>

    <?php require "components/navbar.php" ?>

    <h1>Pasākumi Cēsīs</h1>

    

    

    <?php foreach($posts as $post){ ?>

        <li> <?php echo $post["datums_laiks"]."/". $post["notikums"]. "/" . $post["vieta"]?> </li><br>
    <?php } ?>

<?php require "components/footer.php" ?>