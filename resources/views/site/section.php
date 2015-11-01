<?=view('header', array('site' => $site))?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <?=view('site.block.breadcrumbs', array('site' => $site))?>
            </h2>
        </div>
        <div class="col-lg-12">
            <?=$site->content?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php foreach ($site->childs()->sort()->get() as $k => $child) {
                $imageSrc = $child->image() ? $child->image()->src('preview') : '';
            ?>
                <div class="col-md-4 col-sm-6 col-xs-6 border">
                    <div class="boxgrid caption boxgrid-preview center-block">
                        <a href="<?=$child->link()?>">
                            <img src="<?=$imageSrc?>" alt="" />
                        </a>
                        <div class="cover boxcaption">
                            <h3>
                                <a href="<?=$child->link()?>"><?=$child->name?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <hr>
<?=view('footer')?>
