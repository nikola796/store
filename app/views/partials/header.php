<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Build Store Task</title>

    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- required -->
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?=url()?>public/css/stellarnav.min.css">

    <!-- Custom styles for this template -->
    <link href="<?= url()?>public/css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= url()?>public/css/default.css" />
    <link rel="stylesheet" type="text/css" href="<?= url()?>public/css/component.css" />
    <script src="<?= url()?>public/js/modernizr.custom.js"></script>

    <style>

        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 100%; height: 100%; font-size: 16px; font-family: 'Exo 2', sans-serif; background: #efefef; font-weight: 300; }
        .header { text-align: center; }
        .header a { padding: 50px 0; display: block; font-size: 48px; text-decoration: none; color: #555; }
        @media only screen and (max-width : 1000px) {
            .stellarnav > ul > li > a { padding: 20px 23px; }
        }

        .container {
            margin-top:3%
        }
        #main-nav {
            position:fixed;top: 0;width: 100%;
        }
        a {
            text-decoration: none; color: #555;
        }
        a:hover{
            text-decoration: none; color: #333;
        }
        /* styles for this sample only */
    </style>
</head>

<body>

<?php require_once ('navigation.php');