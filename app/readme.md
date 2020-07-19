1. démarer le projet avec un 
$ doker-compose up --build

2. executer la commande 
$ php bin/phpunit

elle va executer les tests unitaires de l'application 
si phpunit n'est pas installer elle s'occupera automatiquement de l'installer 


3. Points Importants :

-les test unitaire ce trouve dans le dossier :

tests/Util/UserTest.php


- j'ai du créer à chaque fois de nouvelle méthode, en effet je ne suis pas parvenue à faire des tests unitaires sur les méthodes "native" de symfony (show,new,edit...) j'ai donc créé des petites méthodes en plus qui test simplement le type de variable (en quelque sorte pour savoir si elles peuvent être envoyées en BDD) c'est juste histoire de dire que je sais bien faire des tests unitaires et essayer de sauver un peux la note.
Cordialement.

bon courage pour les coréctions.

