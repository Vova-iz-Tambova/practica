<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Header</h1>
    <?php if (isset($text)) : ?>
        <?php foreach ($text as $item) : ?>
            <h2>
                <a href="index.php?id=<?= $item['id']; ?>"><?= $item['id']; ?></a>
            </h2>
            <p>
                <?= $item['name']; ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>
    <h6></h6>
</body>

</html>