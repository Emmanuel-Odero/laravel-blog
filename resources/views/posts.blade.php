<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
    <?php foreach ($posts as $post): ?>
        <article>
            <a href="/posts/first-post"><h1>My First Post</h1></a>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
    <!-- <article>
        <a href="/posts/first-post"><h1>My First Post</h1></a>
        <p>
            Money
            Cardano has a digital currency called ADA. You can use ADA to buy food and services where accepted. 
            You can also trade ADA for local currency, as you might exchange US Dollars for Euros. 
            One way that ADA works better than traditional currencies is that it is easy, fast, 
            and cheap to send it anywhere in the world. It is also accessible and secure, 
            so that even areas of the world without reliable banking can use it.
        </p>
    </article>
    <article>
        <a href="/posts/second-post"><h1>My Second Post</h1></a>
        <p>
            Contracts
            Why stop at money? You can also send other money-like things. 
            For example, home or car ownership certificates. 
            Things on the blockchain are permanent and incorruptible. 
            As a result, no one can bribe a government worker to steal your home from you.
        </p>
    </article>
    <article>
        <a href="/posts/third-post"><h1>My Third Post</h1></a>
        <p>
            Identity & Records
            When you go to a new country, or even a new state, your identity does not follow you. 
            Cardano uses the blockchain to store your identity. And because the blockchain is global, 
            your ID and personal records are available wherever you go.

            Imagine a world where the same drivers license that works for you in Texas, 
            also works in Sierra Leone. And the same goes for educational achievements, 
            professional credentials, and medical records.
        </p>
    </article> -->
</body>
</html>