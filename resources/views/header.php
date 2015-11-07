<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="<?=$site->keywords?>">
    <meta name="description" content="<?=$site->description?>">
    <title><?=$site->title()?></title>
    <meta name='yandex-verification' content='7ce573f8ee5814af' />
    <link rel='stylesheet' href='<?=elixir("css/all.css");?>' type='text/css' media='all' />
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link rel="shortcut icon" href='<?=url('/')?>/favicon.ico' type="image/x-icon">
    <script type='text/javascript'> var csrf_token = '<?=csrf_token()?>';</script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Pay Cosplay</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?=view('menu.show', array('menu' => (new Model\Menu())->getTree(8, true)))?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">