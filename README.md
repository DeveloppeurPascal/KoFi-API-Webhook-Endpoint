# Ko-fi API webhook endpoint

[Cette page en français.](LISEZMOI.md)

Whether you are streamer on Twitch, youtubeur, tiktoker or content creator, musician, cartoonist, actor or artist, software developer, mobile applications or video games, author or publisher, if you use [Ko-fi](https://ko-fi.com/) to receive donations or payments it may be useful to know in real time. It allows you to automate your deliveries, display alerts, receive notifications or emails.

Ko-fi offers a very simple API to do what you want with [a webhook](https://ko-fi.com/manage/webhooks). They are told the URL of an online program. They call it each time they get a payment.

It's up to us to do something about it then...

## Use

In this code repository you will find a folder "src" containing the PHP program "kofi-webhook.php", subfolders and other files.

Set it up with your control token, install it all on your website (preferably in a complicated folder not to fall on it by chance) and give its URL to Ko-fi.

At each call (so each payment) the program checks the consistency of what it receives and stores the data in a file in the subfolder "kofi-data" in the form "AAMMJJHHMMSS-xxx.json" (AAAA for the year, MM for the month, JJ for the day, HH for the moment, MM for the minutes, SS for the seconds and xxx as the random alphanumeric value).

All you have to do is browse this folder regularly to process its content and do what you need.

If you want to go further and don't know how to program or don't know how to install all this don't hesitate to [contact me](https://trucs-de-developpeur-web.fr/nous-contacter.php). I can do this for you in the form of service delivery or exchange.

## Source code installation

To download this code repository, we recommend using "git", but you can also download a ZIP file directly from [its GitHub repository](https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint).

## License to use this code repository and its contents

This source code is distributed under the [AGPL 3.0 or later license](https://choosealicense.com/licenses/agpl-3.0/).

You are generally free to use the contents of this code repository anywhere, provided that:
* you mention it in your projects
* distribute the modifications made to the files supplied in this project under the AGPL license (leaving the original copyright notices (author, link to this repository, license) which must be supplemented by your own)
* to distribute the source code of your creations under the AGPL license.

If this license doesn't suit your needs, you can purchase the right to use this project under the [Apache License 2.0](https://choosealicense.com/licenses/apache-2.0/) or a dedicated commercial license ([contact the author](https://developpeur-pascal.fr/nous-contacter.php) to explain your needs).

These source codes are provided as is, without warranty of any kind.

Certain elements included in this repository may be subject to third-party usage rights (images, sounds, etc.). They are not reusable in your projects unless otherwise stated.

## How to ask a new feature, report a bug or a security issue ?

If you want an answer from the project owner the best way to ask for a new feature or report a bug is to go to [the GitHub repository](https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint) and [open a new issue](https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint/issues).

If you found a security issue please don't report it publicly before a patch is available. Explain the case by [sending a private message to the author](https://developpeur-pascal.fr/nous-contacter.php).

You also can fork the repository and contribute by submitting pull requests if you want to help. Please read the [CONTRIBUTING.md](CONTRIBUTING.md) file.

## Support the project and its author

If you think this project is useful and want to support it, please make a donation to [its author](https://github.com/DeveloppeurPascal). It will help to maintain the code and binaries.

You can use one of those services :

* [GitHub Sponsors](https://github.com/sponsors/DeveloppeurPascal)
* [Liberapay](https://liberapay.com/PatrickPremartin)
* [Patreon](https://www.patreon.com/patrickpremartin)
* [Paypal](https://www.paypal.com/paypalme/patrickpremartin)

or if you speack french you can [subscribe to Zone Abo](https://zone-abo.fr/nos-abonnements.php) on a monthly or yearly basis and get a lot of resources as videos and articles.
