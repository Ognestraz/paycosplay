<?=view('header', array('site' => $site))?>

<?php 
    $image = $site->image();
    $albumImages = $site->images('album')->sort()->get();
?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=$site->name?></h1>
                <?=view('site.block.breadcrumbs', array('site' => $site))?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-7">
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" 
                    data-width="100%"
                    data-maxheight="360">
                    <?php foreach ($albumImages as $k => $image) { ?>
                        <a href="<?=$image->src('slider')?>" data-full="<?=$image->src('large')?>">
                            <img src="<?=$image->src('icon')?>">
                        </a>
                    <?php } ?>                    
                </div>
            </div>

            <div class="col-md-5">
                <?=$site->content?>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Другие мастерские</h3>
            </div>
            <?php foreach ($site->brothers()->act()->get() as $child) {
                $imageSrc = $child->image() ? $child->image()->src('preview') : '';
            ?>
                <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                    <a href="<?=$child->link()?>">
                        <img class="img-responsive img-hover center-block" src="<?=$imageSrc?>" alt="<?=$child->name?>">
                        <h4><?=$child->name?></h4>
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- /.row -->

        <hr>

<?=view('footer')?>