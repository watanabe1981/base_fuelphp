<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= (isset($title))?$title:''; ?></title>
    <?= Asset::css(['bootstrap.css']); ?>
    <style>
        body { margin: 70px; }
    </style>
    <?= Asset::js([
        '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        'bootstrap.js'
    ]); ?>
    <script>
        $(function(){ $('.topbar').dropdown(); });
    </script>
</head>
<body>

    <? if ($current_user): ?>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Uri::create('/admin'); ?>">Admin Panel </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
                        <ul class="dropdown-menu">
                            <li><?= Html::anchor('admin/users', '<i class="fa fa-user fa-fw"></i>&nbsp;ユーザー') ?></li>
                            <li role="separator" class="divider"></li>
                            <li><?= Html::anchor('auth/logout', '<i class="fa fa-sign-out fa-fw"></i>&nbsp;ログアウト') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <? endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
<? if (Session::get_flash('success')): ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p>
                    <?= implode('</p><p>', (array) Session::get_flash('success')); ?>
                    </p>
                </div>
<? endif; ?>
<? if (Session::get_flash('error')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p>
                    <?= implode('</p><p>', (array) Session::get_flash('error')); ?>
                    </p>
                </div>
<? endif; ?>
            </div>

            <div class="col-md-12">
<?= $content; ?>
            </div>
        </div>
        <hr/>
        <footer>
            <p class="pull-right"></p>
            <p>
                <?= $environment; ?>
            </p>
        </footer>
    </div>
</body>
</html>