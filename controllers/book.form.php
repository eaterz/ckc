
<?php require "views/components/head.php" ?>
<label for="datums_laiks">Datums</label>
<input id="datums_laiks" name="datums_laiks" type="date" value='<?=$post['datums_laiks'] ?? date("Y-m-d")?>' />
<label for="notikums">Notikums</label>
<input id="notikums" name="notikums" type="text" value="<?=$post['notikums'] ?? null?>" />
<label for="vieta">Vieta</label>
<input id="vieta" name="vieta" type="text" value="<?=$post['vieta'] ?? null?>" />


<?php require "views/components/footer.php" ?>