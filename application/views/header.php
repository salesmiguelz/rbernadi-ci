<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titulo ?></title>

    <link href="<?=base_url('assets/css/estilo.css') ?>" rel="stylesheet">

    <link href="<?=base_url('assets/bootstrap-3.3.7/css/bootstrap.min.css') ?>" rel="stylesheet">

    <script src="<?=base_url('assets/JQuery3.3.1/jquery-3.3.1.min.js')?>"></script>

    <script src="<?=base_url('assets/bootstrap-3.3.7/js/bootstrap.min.js')?>"></script>

</head>
<body style="overflow-x: hidden;">

    <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-left" style="margin-left: 20%;">
                <a class="navbar-brand" href="<?=base_url();?>">RBernadi</a>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 20%;">
                <li> <a href="<?=base_url(); ?>"> HOME </a> </li>
                <li> <a href="<?=base_url('clientes'); ?>"> CLIENTES </a> </li>
                <li> <a href="<?=base_url('servicos'); ?>"> SERVIÇOS </a> </li>
                <li> <a href="<?=base_url('sobre'); ?>"> SOBRE </a> </li>
                <li> <a href="<?=base_url('contato'); ?>"> CONTATO </a> </li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid" style="margin-top:5%; margin-left: 19%;">