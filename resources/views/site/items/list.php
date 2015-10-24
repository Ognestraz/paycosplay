<? foreach ($list as $item) { ?>
    <li>
            <i class="clip-home-3"></i>
            <a href="<?=URL::to('/').'/'.$item->path?>">
                    <?=$item->name?>
            </a>
    </li>
<? } ?>    

