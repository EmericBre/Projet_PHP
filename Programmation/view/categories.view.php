<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $currentCategorie->getNom() ?></title>
  </head>
  <body>
      <?php foreach ($subCategories as $subCat): ?>
        <?php if ($subCat->getFille() == 1) { ?>
      <a href="afficherCategories.ctrl.php?categorie=<?= $subCat->getRef() ?>"> <?= $subCat->getNom() ?> </a> <br>
      <br>
    <?php } else { ?>
      <a href="afficherArticles.ctrl.php?categorie=<?= $subCat->getRef() ?>"> <?= $subCat->getNom() ?> </a> <br>
      <br>
    <?php } endforeach;?>
  </body>
</html>
