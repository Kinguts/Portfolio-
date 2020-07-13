<?php
include '../lib/includes.php';
include '../partials/admin_header.php';
?>

<h1>Editer une catégorie</h1>

<form action="#" method="post">
    <div class="form-group">
        <label for="name">Nom de la catégorie</label>
        <?= input('name'); ?>
    </div>
    <div class="form-group">
        <label for="slug">URL de la catégorie</label>
        <?= input('slug'); ?>
    </div>
   
    <button type="submit" class="btn btn-success">Enregistrer</button>
</form>

<?php include '../partials/footer.php';