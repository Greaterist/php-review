<?php if ($isAdmin) : ?>
    <h2>Админка</h2>
<?php endif; ?>
<?php foreach ($orders as $item) : ?>
    <a href="/orders/details/?session=<?= $item['order_session'] ?>">Заказ№: <?= $item['id'] ?> Пользователь: <?= $item['login'] ?> Email: <?= $item['email'] ?><br></a>

<?php endforeach; ?>