<div class="row">
    <?php foreach ($menu as $item) { ?>

        <div class="col-md-3 text-center">
            <div class="thumbnail">
                <a href="<?=$item['model']->link()?>">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <div class="caption">
                    <h3><a href="<?=$item['model']->link()?>"><?=$item['model']->name?></a></h3>
                    <p><?=$item['model']->preview?></p>
                </div>
            </div>
        </div>    

    <?php } ?>
</div>