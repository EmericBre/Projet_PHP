CREATE TABLE article (
  ref INTEGER PRIMARY KEY,
  categorie INTEGER,
  image TEXT,
  titre TEXT,
  description TEXT,
  caracteristiques TEXT,
  prix REAL,
  fabricant TEXT,
  dispo INTEGER,
  FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE categorie (
  ref INTEGER PRIMARY KEY,
  nom TEXT,
  pere INTEGER,
  FOREIGN KEY(pere) REFERENCES categorie(id)
);
