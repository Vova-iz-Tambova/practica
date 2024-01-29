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
            <h2>
                <?= $text['id']; ?>
            </h2>
            <p>
                <?= $text['name']; ?>
            </p>
    <?php endif; ?>
    <h6>footer</h6>
</body>

</html>