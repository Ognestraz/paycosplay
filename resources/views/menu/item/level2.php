<ul class="dropdown-menu">
    <?php foreach ($menu as $item) {?>

        <li>
            <a href="<?=url($item['model']->path)?>">
                <?=$item['model']->name?>
            </a>
        </li>

    <?php } ?>
</ul>