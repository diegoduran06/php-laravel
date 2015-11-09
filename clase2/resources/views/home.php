<html>
    <head>
        <title>Platzi Blog en PHP!</title>
    </head>
    <body>
        <ul>
            <?php /**
             * @type \PlatziPHP\Post[] $post
             */
            foreach ($posts as $post): ?>
            <li>
                <h2><?= $post->getTitle() ?>
                    <small><?= $post->getAuthor() ?></small></h2>
                <p><?= $post->getBody() ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>