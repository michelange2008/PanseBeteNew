# Modification de la table __alertes__
 1. la colonne **modalite** a 3 modalités OBS, CAL, NUM en fonction du type de données
 2. Création d'une colonne **abbr** pour une abbréviation des alertes


# Modification de la table __especes__
 1. ajout d'une colonne **abbr** pour abbréviation avec les valeurs VL, VA, etc;

# Modification de la table __alertes__
 1. la colonne niveau est devenue **borne_sup**
 2. une nouvelle colonne a été ajoutée avant (*integer 10*) qui s'appelle **borne_inf**
 avec une valeur 0 par défaut.

# Modification de la table __saisies__
 1. Ajout de 2 colonnes à la fin (*bool*) qui s'appellent **ininum** et **iniobs** et vaut 0 si
 il n'y a eu aucune saisie enregistrée de donnees numériques ou d'observations (pas de lignes dans la table __salertes__)
 et 1 dans le cas contraire.

# Dans la table __critalertes__
  1. Supprimer les 3 lignes correspondant à __alerte_id = 2009__
