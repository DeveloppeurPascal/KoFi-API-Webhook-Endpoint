# Ko-fi API webhook endpoint

[This page in english.](README.md)

Que vous soyez streameur sur Twitch, youtubeur, tiktokeur ou créateur de contenu, musicien, dessinateur, comédien ou artiste, développeur de logiciels, d'applications mobiles ou de jeux vidéo, auteur ou éditeur, si vous utilisez [Ko-fi](https://ko-fi.com/) pour recevoir des dons ou des paiments il peut être utile de le savoir en temps réel. Ca permet d'automatiser vos livraisons, d'afficher des alertes, de recevoir des notifications ou des emails.

Ko-fi propose une API très simple pour faire ce que l'on veut à l'aide d'[un webhook](https://ko-fi.com/manage/webhooks). On leur déclare l'URL d'un programme en ligne. Ils l'appellent à chaque fois qu'ils reçoivent un paiement.

A nous d'en faire quelque chose ensuite...

## Utilisation

Dans ce dépôt de code vous trouverez un dossier "src" contenant le programme PHP "kofi-webhook.php", des sous-dossiers et d'autres fichiers.

Paramétrez le avec votre token de contrôle, installez le tout sur votre site web (de préférence dans un dossier compliqué pour ne pas tomber dessus par hasard) et donnez son URL à Ko-fi.

A chaque appel (donc à chaque paiement) le programme contrôle la cohérence de ce qu'il reçoit et stocke les données dans un fichier du sous-dossier "kofi-data" sous la forme "AAMMJJHHMMSS-xxx.json" (AAAA pour l'année, MM pour le mois, JJ pour le jour, HH pour l'heure, MM pour les minutes, SS pour les secondes et xxx comme valeur alphanumérique aléatoire).

Vous n'avez plus qu'à parcourir régulièrement ce dossier pour traiter son contenu et en faire ce dont vous avez besoin.

Si vous voulez aller plus loin et ne savez pas programmer ou ne savez pas comment installer tout ça n'hésitez pas à [me contacter](https://trucs-de-developpeur-web.fr/nous-contacter.php). Je pourrai le faire pour vous sous forme de prestation ou échange de service.

## Installation des codes sources

Pour télécharger ce dépôt de code il est recommandé de passer par "git" mais vous pouvez aussi télécharger un ZIP directement depuis [son dépôt GitHub](https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint).

## Licence d'utilisation de ce dépôt de code et de son contenu

Ces codes sources sont distribués sous licence [AGPL 3.0 ou ultérieure](https://choosealicense.com/licenses/agpl-3.0/).

Vous êtes globalement libre d'utiliser le contenu de ce dépôt de code n'importe où à condition :
* d'en faire mention dans vos projets
* de diffuser les modifications apportées aux fichiers fournis dans ce projet sous licence AGPL (en y laissant les mentions de copyright d'origine (auteur, lien vers ce dépôt, licence) obligatoirement complétées par les vôtres)
* de diffuser les codes sources de vos créations sous licence AGPL

Si cette licence ne convient pas à vos besoins vous pouvez acheter un droit d'utilisation de ce projet sous la licence [Apache License 2.0](https://choosealicense.com/licenses/apache-2.0/) ou une licence commerciale dédiée ([contactez l'auteur](https://developpeur-pascal.fr/nous-contacter.php) pour discuter de vos besoins).

Ces codes sources sont fournis en l'état sans garantie d'aucune sorte.

Certains éléments inclus dans ce dépôt peuvent dépendre de droits d'utilisation de tiers (images, sons, ...). Ils ne sont pas réutilisables dans vos projets sauf mention contraire.

## Comment demander une nouvelle fonctionnalité, signaler un bogue ou une faille de sécurité ?

Si vous voulez une réponse du propriétaire de ce dépôt la meilleure façon de procéder pour demander une nouvelle fonctionnalité ou signaler une anomalie est d'aller sur [le dépôt de code sur GitHub](https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint) et [d'ouvrir un ticket](https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint/issues).

Si vous avez trouvé une faille de sécurité n'en parlez pas en public avant qu'un correctif n'ait été déployé ou soit disponible. [Contactez l'auteur du dépôt en privé](https://developpeur-pascal.fr/nous-contacter.php) pour expliquer votre trouvaille.

Vous pouvez aussi cloner ce dépôt de code et participer à ses évolutions en soumettant vos modifications si vous le désirez. Lisez les explications dans le fichier [CONTRIBUTING.md](CONTRIBUTING.md).

## Supportez ce projet et son auteur

Si vous trouvez ce dépôt de code utile et voulez le montrer, merci de faire une donation [à son auteur](https://github.com/DeveloppeurPascal). Ca aidera à maintenir le projet (codes sources et binaires).

Vous pouvez utiliser l'un de ces services :

* [GitHub Sponsors](https://github.com/sponsors/DeveloppeurPascal)
* [Liberapay](https://liberapay.com/PatrickPremartin)
* [Patreon](https://www.patreon.com/patrickpremartin)
* [Paypal](https://www.paypal.com/paypalme/patrickpremartin)

ou si vous parlez français vous pouvez [vous abonner à Zone Abo](https://zone-abo.fr/nos-abonnements.php) sur une base mensuelle ou annuelle et avoir en plus accès à de nombreuses ressources en ligne (vidéos et articles).
