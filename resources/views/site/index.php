<?=view('header', array('site' => $site))?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Интернет-витрина косплея и материалов</h1>
        </div>
    </div>
    <?=view('menu.show-index', array('menu' => (new Model\Menu())->getTree(14, true)))?>
    <?=view('menu.show-subindex', array('menu' => (new Model\Menu())->getTree(18, true)))?>

<?=view('footer')?>