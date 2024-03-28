<?php require 'components/head.php' ?>

<h1>Create</h1>
<section>
    <form action="/create/kolektivi" method="post">
        <label for="name">Kolektivi</label>
        <input id="name" name="name" type="text" value="<?=$post['name'] ?? null?>" />
        <label for="description">Apraksts</label>
        <input id="description" name="description" type="text" value="<?=$post['description'] ?? null?>" />
        <button class="yes" type="submit">Create</button>
        <button class="no" type="submit" formaction="/" formmethod="get">Cancel</button>
    </form>
</section>
<?php require 'components/footer.php' ?>