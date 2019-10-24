<html>
<head>
  <title>Gun and Co</title>
</head>

<body>
  <header>
    <h1>Gun and Co, la démocratie à petit prix</h1>
  </header>
  <?php foreach ($produits as $produit): ?>
    <img src="../view/Design/<?= $produit->getImage() ?>" alt="">
  <?php endforeach; ?>
</body>
</html>
