<?php foreach ($users as $item):?>
    <div id="item_<?=$item['id']?>">
        <a href="/?c=user&a=user&id=<?=$item['id']?>">
        <?=$item['login']?> <br>
    </div>
<?php endforeach;?>
