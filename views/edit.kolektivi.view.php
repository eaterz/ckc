<?php require 'components/head.php' ?>

<h1>EDIT</h1>
<section>
    <form action="/edit/kolektivi" method="post">
        <input id="id" name="id" type="hidden" value="<?=$post['id']?>" />
        <label for="name">Kolektīvs</label>
<input id="name" name="name" type="text" value='<?=$post['name'] ?? date("Y-m-d")?>' />
<label for="description">Apraksts</label>
<input id="description" name="description" type="text" value="<?=$post['description'] ?? null?>" />
        <button class="yes" type="submit">edit</button>
        <button class="no" type="submit" formaction="/" formmethod="get">Cancel</button>
    </form>
</section>
<?php require 'components/footer.php' ?>