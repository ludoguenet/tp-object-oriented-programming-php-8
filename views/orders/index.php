<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, dolores molestias. Corrupti commodi reprehenderit explicabo aspernatur amet delectus veniam, itaque aperiam tenetur autem sed reiciendis. Vel voluptas exercitationem deserunt debitis ipsum quos nihil officiis deleniti non fuga ducimus neque sequi ad voluptate blanditiis, vitae illum. Consequatur qui quia ipsum aliquam ea similique, perferendis voluptate vel.</p>

    <ul>
        <?php foreach($orders as $order): ?>
            <li>
                <?= \Source\Enums\OrderStatus::tryFrom($order->status)->toFrenchName()->value ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>