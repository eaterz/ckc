<?php require "components/head.php" ?>

    <?php require "components/navbar.php" ?>

    <h1>Pasākumi Cēsīs</h1>

    

    

    <?php foreach($posts as $post){ ?>

        <li> <?php echo $post["datums_laiks"]."/". $post["notikums"]. "/" . $post["vieta"]?>
        <form action="/edit" method="GET">
        <input id="id" name="id" type="hidden" value="<?=$post['id']?>" />
        <button type="submit">edit</button>
        </form> </li><br>
    <?php } ?>

<form action="/create" method="GET">
<button type="submit">Pievienot pasākumu</button>
</form>

<?php require "components/footer.php" ?>