# BladeShop

/!\ Installation du projet : /!\

# Cloner le répo dans un dossier vide avec la commande suivante :

-> git clone https://github.com/lyesi/Blad-eShop.git

# Installer composer ainsi que le module Webpack Encore si ce n'est pas déjà fait

-> composer install
-> yarn install

*Si déjà installés le terminal vous dira qu'ils sont à jour.

# Créer un fichier .env.local, décommenter la ligne 30 et commenter la ligne 31 si vous utilisez mysql, mettre son id pour se connecter à mysql, et appeler la base de données "bladeshop" et lancer les commandes suivantes :

-> symfony console d : d : c (pour créer la base de données)
-> symfony console make:migration (pour charger les migrations)
-> symfony console d : m : m (pour charger les migrations)
-> symfony console d : f : l (pour charger les fixtures)

# Commandes importantes

-> symfony server:start #Pour mettre en marche le serveur sur localhost
-> yarn encore dev --watch #Pour compiler les composants du fichier assets et les rendre accessibles au navigateur

# Vous pouvez commencer à coder !

/!\ Pour démarrer un nouveau projet en Symfony /!\

Dans le terminal, écrire dans l'ordre :

# Pour créer son projet avec le Framework Symfony et l'installation du module Webpack Encore
-> symfony new my_project_name --full
-> yarn install

# Ajouter le projet au répo" #Ajouter le projet au répo

-> git remote add origin <<Lien du repository>>
   git add .
   git commit -m "Initial commit"
   git push -u origin master
   
# Vous pouvez commencer à coder !
