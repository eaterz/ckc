<?php require "components/head.php" ?>

    <?php require "components/navbar.php" ?>

    <h1>CKC Kolektīvi</h1>

    

    
<table>
    <tr>
        <th>kolektīvi</th>
        <th>apraksts</th>
        <th>Mainīt info</th>
    </tr>
    

    
    <?php foreach($posts as $post){ ?>
        <form action="/edit/kolektivi" method="GET">
            
       
            <input id="id" name="id" type="hidden" value="<?=$post['id']?>" />
            
            <tr> <td> <?= $post["name"]?></td><td><?= $post["description"]?> </td><td><button class="button-30" role="button">Edit</button></td></tr>
        </form>
    <?php } ?>

</table>

<form  class="Add" action="/create/kolektivi" method="GET">
<button class="button-30" role="button">Pievienot kolektīvu</button>
</form>
<?php require "components/footer.php" ?>