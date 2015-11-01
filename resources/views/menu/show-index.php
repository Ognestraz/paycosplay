<div class="row">
    <?php foreach ($menu as $item) { 
        $imageSrc = $item['model']->site->image() ? $item['model']->site->image()->src('preview') : '';
    ?>

        <div class="col-md-4 text-center">
            <div class="boxgrid boxgrid-preview caption center-block">
                <a href="<?=$item['model']->link()?>">
                    <img src="<?=$imageSrc?>" alt="" />
                </a>
                <div class="cover boxcaption">
                    <h3>
                        <a href="<?=$item['model']->link()?>"><?=$item['model']->name?></a>
                    </h3>
                    <p><?=$item['model']->preview?></p>
                </div>
            </div>
        </div>    

    <?php } ?>
</div>