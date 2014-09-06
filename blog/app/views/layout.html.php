<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($title) ? $title : config('blog.title') ?></title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
    <meta name="description" content="<?php echo config('blog.description')?>" />

    <link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />

    <link href="/css/normalize.css" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet" />
    <link href="/css/blog.css" rel="stylesheet" />
    
    
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <aside>

        <h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>

        <p class="description"><?php echo config('blog.description')?></p>

        <ul>
            <li><a href="<?php echo site_url() ?>">Home</a></li>
            <li><a href="http://tutorialzine.com/members/">Members area</a></li>
            <li><a href="http://tutorialzine.com/contact/">Contact Us</a></li>
        </ul>

        <p class="author"><?php echo config('blog.authorbio') ?></p>

    </aside>

    <section id="content">

        <?php echo content()?>

    </section>

</body>
</html>