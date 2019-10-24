<html>
<head>
  <title>Gun and Co</title>
</head>

<body>
  <header>
    <h1>Gun and Co, la démocratie à petit prix</h1>
  </header>
  <?php foreach ($produits as $produit): ?>
    <a href="afficherArticle.ctrl.php?categorie=<?= $produit->getCategorie() ?>&produit=<?= $produit->getRef() ?>"> <img src="../view/Design/<?= $produit->getImage() ?>" alt=""/>
  <?php endforeach; ?>
</body>
</html>
