<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Design of..." />
    <meta name="keywords" 
          content="php, mvc, web app..." />
    <meta name="author" content="Julio Zinga, Matis Karamenderes, Chin" />
    <link rel="shortcut icon"    href="<?=getenv('APP_URL')?>/public/assets/img/cogip-favico.jpg" type="image/jpg" sizes="16x16" />
    <link rel="apple-touch-icon" href="<?=getenv('APP_URL')?>/public/assets/img/cogip-favico.jpg" type="image/jpg" sizes="16x16" />
    <link rel="stylesheet"       href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet"       href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet"       href="<?=getenv('APP_URL')?>/public/assets/css/app.css" type="text/css" />
    <title> <?=getenv('APP_NAME') . ' | ' . $dataInfo['title']?></title>
</head>

<body>
    <!-- header -->
    <header id="header">
        <?php require getenv('APP_ROOT') . '/app/views/inc/navbar.php'?>
    </header>
    <!-- header-end -->        