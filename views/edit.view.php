<?php require 'components/head.php' ?>

<h1>EDIT</h1>
<section>
    <form action="/edit" method="post">
        <input id="id" name="id" type="hidden" value="<?=$post['id']?>" />
        <?php require 'controllers/book.form.php' ?>
        <button class="yes" type="submit">edit</button>
        <button class="no" type="submit" formaction="/" formmethod="get">Cancel</button>
    </form>
</section>
<?php require 'components/footer.php' ?>