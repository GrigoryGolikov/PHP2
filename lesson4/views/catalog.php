Каталог

<?php foreach ($catalog as $good): ?>
<div >
    <a href="/?c=product&a=card&id=<?=$good["id"]?>">
    <b><?=$good['name']?></b><br>
    Цена: <?=$good['price']?><br>
    <button class="buy" data-id="<?=$good['id']?>">Купить</button><hr>
</div>
<?php endforeach; ?>
