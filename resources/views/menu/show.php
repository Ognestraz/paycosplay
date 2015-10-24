<ul class="nav navbar-nav navbar-right">
    <?php foreach ($menu as $item) {?>
        <?php if (!empty($item['children'])) { ?>
            <li class="dropdown">
                <a href="#" class="menu-item " data-toggle="dropdown">
                    <?=$item['model']->name?><b class="caret"></b>
                </a>
                <?=view('menu.item.level2', array('menu' => $item['children']))?>
            </li>
        <?php } else { ?>
            <li>
                <a class="menu-item <?=($item['model']->active(true) ? ' active' : '')?>" href="<?=url($item['model']->path)?>"><?=$item['model']->name?></a>
            </li>
        <?php } ?>
    <?php } ?>        
</ul>

