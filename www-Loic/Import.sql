LOAD DATA LOCAL INFILE '/var/www/html/Stage2017/www-Loic/ready/Parents.csv' 
INTO TABLE Esta.Parents
FIELDS TERMINATED BY ';' 
ENCLOSED BY '' 
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/var/www/html/Stage2017/www-Loic/ready/Etablissement50.csv' 
INTO TABLE Esta.Etablissement
FIELDS TERMINATED BY ';' 
ENCLOSED BY '' 
LINES TERMINATED BY '\r\n';


LOAD DATA LOCAL INFILE '/var/www/html/Stage2017/www-Loic/ready/Etudiant.csv' 
INTO TABLE Esta.Etudiant
FIELDS TERMINATED BY ';' 
ENCLOSED BY '' 
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/var/www/html/Stage2017/www-Loic/ready/AncienEleve2.csv' 
INTO TABLE Esta.Ancien_Eleve
FIELDS TERMINATED BY ';' 
ENCLOSED BY '' 
LINES TERMINATED BY '\n';


LOAD DATA LOCAL INFILE '/var/www/html/Stage2017/www-Loic/ready/Professeur.csv' 
INTO TABLE Esta.Professeur
FIELDS TERMINATED BY ';' 
ENCLOSED BY '' 
LINES TERMINATED BY '\r\n';

LOAD DATA LOCAL INFILE '/var/www/html/Stage2017/www-Loic/ready/Semestre.csv' 
INTO TABLE Esta.Semestre
FIELDS TERMINATED BY ';' 
ENCLOSED BY '' 
LINES TERMINATED BY '\r\n';