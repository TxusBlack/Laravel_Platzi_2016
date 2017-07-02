<html>
<head>
    <title>Platzi Blog in PHP!</title>
</head>
<body>
<ul>
    <?php /** @type \PlatziPHP\Post[] $posts */
    foreach ($posts as $post): ?>
    <li>
        <h2><?= $post->getTitle()?>
            <small><?= $post->getAuthor()?></small>
        </h2>
        <p><?= $post->getBody()?></p>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>