# Modification de la table __alertes__
  1. Remplacement de la colonne **type** par une colonne **type_id** qui renvoie à la table __types__
  2. Création d'une colonne **modalite_id** qui renvoie à la table __modalites__ (OBS ou NUM)
  3. suppression de la colonne **???** définissant qu'une alerte est anormale (tranfert dans les
    tables __numalertes__ et __critalertes__)

# Modification de la table __especes__
 1. ajout d'une colonne **abbr** pour abbréviation avec les valeurs VL, VA, etc;

# Modification de la table __alertes__
 1. la colonne niveau est devenue **borne_sup**
 2. une nouvelle colonne a été ajoutée avant (*integer 10*) qui s'appelle **borne_inf**
 avec une valeur 0 par défaut.

# Modification de la table __saisies__
 1. Ajout de 2 colonnes à la fin (*bool*) qui s'appellent **ininum** et **iniobs** et vaut 0 si
 il n'y a eu aucune saisie enregistrée de donnees numériques ou d'observations (pas de lignes dans la table __salertes__) et 1 dans le cas contraire.

# Création de la table __numalertes__
  1. Table liée avec une relation OneToOne à la table __alertes__ et qui comporte 4 variables:
    1. **borne_inf** et **borne_sup** pour les valeurs normales et qui peuvent être nulles
    si il n'y a pas de limite supérieure ou inférieure ("mortalité des vache par exemple")
    2. **num_id** et **denom_id** qui renvoient tous les deux à la table __chiffres__ et
    permettent de calcule les indicateurs (num = numérateur et denom = dénominateur). **num_id**
    ne peut pas être nul, tandis que **denom_id** est nul si l'indicateur est une valeur et non
    un ration ou un pourcentage.

# Dans la table __critalertes__
  1. Supprimer les 3 lignes correspondant à __alerte_id = 2009__
  2. Ajouter une colonne **isALerte** qui est un *boolean* avec la valeur TRUE si une alerte est anormale.

# dans la table __salertes__
  1. Rajout d'une colonne *unsignedInteger* qui s'appelle **nbsorigine** et permet de savoir combien il y a de sorigines pour cette salerte
