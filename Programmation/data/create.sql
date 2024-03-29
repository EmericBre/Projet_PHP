CREATE TABLE article (
  ref INTEGER PRIMARY KEY,
  categorie INTEGER,
  image TEXT,
  titre TEXT,
  description TEXT,
  caracteristiques TEXT,
  prix REAL,
  fabricant TEXT,
  dispo TEXT,
  FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE categorie (
  ref INTEGER PRIMARY KEY,
  nom TEXT,
  image TEXT,
  pere INTEGER,
  fille INTEGER,
  FOREIGN KEY(pere) REFERENCES categorie(id)
);
