<?php for($num=1 ; $num <= $toalpages ; $num++) {?>
        <?php if($num != $current_page) { ?>
    <a class="page_item" href="?per_page=<?=$item_per_page?>&page=<?=$num?>"><?= $num ?></a>
    <?php } else { ?>
        <strong ><?=$num?></strong>
        <?php } ?>
<?php }?>