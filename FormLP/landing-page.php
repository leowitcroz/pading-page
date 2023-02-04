<?php
require_once('db_connect.php');

// Receber o ID da URL
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Recupere as informações do banco de dados
$sql = "SELECT * FROM par WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if ($result->num_rows == 0) {
    header('Location: index.php');

    exit();
}

// Armazene as informações do banco de dados em variáveis
$titulo = $row['titulo'];
$descricaoVideo = $row['descricaovideo'];
$video = $row['video'];
$cel = $row['cel'];
$nome = $row['nome'];
$descricaoUser = $row['descricaouser'];
$chamda = $row['chamada'];
$referencia = $row['referencia'];
$btnRef = $row['btnref'];
$fotouser = $row['fotouser'];
$local = $row['local'];
$hmanha = $row['hmanha'];
$hmanhaFim = $row['hmanhafim'];
$htarde = $row['htarde'];
$htardeFim = $row['htardefim'];
$hnoite = $row['hnoite'];
$hnoiteFim = $row['hnoitefim'];
$certificacao = $row['certificacao'];
$lote = $row['lote'];
$extra = $row['extra'];
$canal = $row['canal'];
$inico = $row['inicio'];
$mes = $row['mes'];
$fim = $row['fim'];
$valor = $row['valor'];
$inscrever = $row['inscrever'];
$cidade = $row['cidade'];
$estado = $row['estado'];

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta name="__gdcc" content="true" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title></title>
        <!-- Twitter Card data -->
        <meta name="twitter:card" value="summary" />
        <!-- Open Graph data -->
        <meta property="og:title" content='FORMAÇÃO EM PORTO ALEGRE' />
        <meta property="og:type" content="website" />
        <meta property="og:description" content='' />

        <meta property="og:image" content='https://thumb.gdigital.com.br/thumb/capa_16775_260.jpg'>



        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name='robots' content='index,follow' />
        <meta name="__gdbi" content="16775" />
        <meta name="__gdpi" content="260" />
        <!-- <meta name="referrer" content="origin" /> -->

        <meta name="author" content="GDigital.com.br" />
        <script src="script.js" type="text/javascript" data-minify="false"></script>

        <style>
            /* div, p, span, body, html, h1, h2, h3, h4, h5, i, .fas, .fa-image, .dashicons{
            font-family: Arial, Helvetica;
          } */
            /* Adiciona a fonte do tipo otf */
            /* @font-face {
              font-family: Century Gothic;
              src: url("/fonts/Century-Gothic.ttf") format("opentype");
          } */
        </style>

        <!-- <script>
        </script> -->

        <link rel='dns-prefetch' href='//hipnosefacil.gpages.com.br' />
        <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel='stylesheet' id='yt-lazyload-css-css' href='https://gpages.com.br/assets/css/yt-lazyload.css?ver=2.3.1.3' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-5-css' href='https://hipnosefacil.gpages.com.br/gdigital/gdigital_novo/fonts/fontawesome/5.12.0/css/all.min.css?ver=2.3.1.3' type='text/css' media='all' />
        <link rel='stylesheet' id='foundation-icons-css' href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css?ver=2.3.1.3' type='text/css' media='all' />
        <link rel='stylesheet' id='dashicons-css' href='https://hipnosefacil.gpages.com.br/wp-includes/css/dashicons.min.css?ver=4.9.4' type='text/css' media='all' />
        <link rel='https://api.w.org/' href='https://hipnosefacil.gpages.com.br/wp-json/' />
        <link rel="alternate" type="application/json+oembed" href="https://hipnosefacil.gpages.com.br/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhipnosefacil.gpages.com.br%2Fhipnoseportoalegre%2F" />
        <link rel="alternate" type="text/xml+oembed" href="https://hipnosefacil.gpages.com.br/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhipnosefacil.gpages.com.br%2Fhipnoseportoalegre%2F&#038;format=xml" />
        <style type="text/css">
            .recentcomments a {
                display: inline !important;
                padding: 0 !important;
                margin: 0 !important;
            }
        </style>
        <style>
            .fl-builder-content *,
            .fl-builder-content *:before,
            .fl-builder-content *:after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .fl-row:before,
            .fl-row:after,
            .fl-row-content:before,
            .fl-row-content:after,
            .fl-col-group:before,
            .fl-col-group:after,
            .fl-col:before,
            .fl-col:after,
            .fl-module:before,
            .fl-module:after,
            .fl-module-content:before,
            .fl-module-content:after {
                display: table;
                content: " ";
            }

            .fl-row:after,
            .fl-row-content:after,
            .fl-col-group:after,
            .fl-col:after,
            .fl-module:after,
            .fl-module-content:after {
                clear: both;
            }

            .fl-row,
            .fl-row-content,
            .fl-col-group,
            .fl-col,
            .fl-module,
            .fl-module-content {
                zoom: 1;
            }

            .fl-clear {
                clear: both;
            }

            .fl-clearfix:before,
            .fl-clearfix:after {
                display: table;
                content: " ";
            }

            .fl-clearfix:after {
                clear: both;
            }

            .fl-clearfix {
                zoom: 1;
            }

            .fl-visible-medium,
            .fl-visible-medium-mobile,
            .fl-visible-mobile,
            .fl-col-group .fl-visible-medium.fl-col,
            .fl-col-group .fl-visible-medium-mobile.fl-col,
            .fl-col-group .fl-visible-mobile.fl-col {
                display: none;
            }

            .fl-row,
            .fl-row-content {
                margin-left: auto;
                margin-right: auto;
            }

            .fl-row-content-wrap {
                position: relative;
            }

            .fl-builder-mobile .fl-row-bg-photo .fl-row-content-wrap {
                background-attachment: scroll;
            }

            .fl-row-bg-video,
            .fl-row-bg-video .fl-row-content {
                position: relative;
            }

            .fl-row-bg-video .fl-bg-video {
                bottom: 0;
                left: 0;
                overflow: hidden;
                position: absolute;
                right: 0;
                top: 0;
            }

            .fl-row-bg-video .fl-bg-video video {
                bottom: 0;
                left: 0px;
                max-width: none;
                position: absolute;
                right: 0;
                top: 0px;
            }

            .fl-row-bg-video .fl-bg-video iframe {
                pointer-events: none;
                width: 100vw;
                height: 56.25vw;
                max-width: none;
                min-height: 100vh;
                min-width: 177.77vh;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
            }

            .fl-bg-video-fallback {
                background-position: 50% 50%;
                background-repeat: no-repeat;
                background-size: cover;
                bottom: 0px;
                left: 0px;
                position: absolute;
                right: 0px;
                top: 0px;
            }

            .fl-row-bg-slideshow,
            .fl-row-bg-slideshow .fl-row-content {
                position: relative;
            }

            .fl-row .fl-bg-slideshow {
                bottom: 0;
                left: 0;
                overflow: hidden;
                position: absolute;
                right: 0;
                top: 0;
                z-index: 0;
            }

            .fl-builder-edit .fl-row .fl-bg-slideshow * {
                bottom: 0;
                height: auto !important;
                left: 0;
                position: absolute !important;
                right: 0;
                top: 0;
            }

            .fl-row-bg-overlay .fl-row-content-wrap:after {
                border-radius: inherit;
                content: '';
                display: block;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 0;
            }

            .fl-row-bg-overlay .fl-row-content {
                position: relative;
                z-index: 1;
            }

            .fl-row-full-height .fl-row-content-wrap,
            .fl-row-custom-height .fl-row-content-wrap {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                min-height: 100vh;
            }

            .fl-row-overlap-top .fl-row-content-wrap {
                display: -webkit-inline-box;
                display: -webkit-inline-flex;
                display: -moz-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                width: 100%;
            }

            .fl-row-custom-height .fl-row-content-wrap {
                min-height: 0;
            }

            .fl-builder-edit .fl-row-full-height .fl-row-content-wrap {
                min-height: calc(100vh - 48px);
            }

            .fl-row-full-height .fl-row-content,
            .fl-row-custom-height .fl-row-content {
                -webkit-box-flex: 1 1 auto;
                -moz-box-flex: 1 1 auto;
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }

            .fl-row-full-height .fl-row-full-width.fl-row-content,
            .fl-row-custom-height .fl-row-full-width.fl-row-content {
                max-width: 100%;
                width: 100%;
            }

            .fl-builder-ie-11 .fl-row.fl-row-full-height:not(.fl-visible-medium):not(.fl-visible-medium-mobile):not(.fl-visible-mobile),
            .fl-builder-ie-11 .fl-row.fl-row-custom-height:not(.fl-visible-medium):not(.fl-visible-medium-mobile):not(.fl-visible-mobile) {
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .fl-builder-ie-11 .fl-row-full-height .fl-row-content-wrap,
            .fl-builder-ie-11 .fl-row-custom-height .fl-row-content-wrap {
                height: auto;
            }

            .fl-builder-ie-11 .fl-row-full-height .fl-row-content,
            .fl-builder-ie-11 .fl-row-custom-height .fl-row-content {
                flex: 0 0 auto;
                flex-basis: 100%;
                margin: 0;
            }

            .fl-builder-ie-11 .fl-row-full-height.fl-row-align-top .fl-row-content,
            .fl-builder-ie-11 .fl-row-full-height.fl-row-align-bottom .fl-row-content,
            .fl-builder-ie-11 .fl-row-custom-height.fl-row-align-top .fl-row-content,
            .fl-builder-ie-11 .fl-row-custom-height.fl-row-align-bottom .fl-row-content {
                margin: 0 auto;
            }

            .fl-builder-ie-11 .fl-row-full-height.fl-row-align-center .fl-col-group:not(.fl-col-group-equal-height),
            .fl-builder-ie-11 .fl-row-custom-height.fl-row-align-center .fl-col-group:not(.fl-col-group-equal-height) {
                display: flex;
                align-items: center;
                justify-content: center;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-align: center;
                -ms-flex-pack: center;
            }

            .fl-row-full-height.fl-row-align-center .fl-row-content-wrap,
            .fl-row-custom-height.fl-row-align-center .fl-row-content-wrap {
                align-items: center;
                justify-content: center;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-align: center;
                -ms-flex-pack: center;
            }

            .fl-row-full-height.fl-row-align-bottom .fl-row-content-wrap,
            .fl-row-custom-height.fl-row-align-bottom .fl-row-content-wrap {
                align-items: flex-end;
                justify-content: flex-end;
                -webkit-align-items: flex-end;
                -webkit-justify-content: flex-end;
                -webkit-box-align: end;
                -webkit-box-pack: end;
                -ms-flex-align: end;
                -ms-flex-pack: end;
            }

            .fl-builder-ie-11 .fl-row-full-height.fl-row-align-bottom .fl-row-content-wrap,
            .fl-builder-ie-11 .fl-row-custom-height.fl-row-align-bottom .fl-row-content-wrap {
                justify-content: flex-start;
                -webkit-justify-content: flex-start;
            }

            @media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {
                .fl-row-full-height .fl-row-content-wrap {
                    min-height: 1024px;
                }
            }

            @media all and (device-width: 1024px) and (device-height: 768px) and (orientation:landscape) {
                .fl-row-full-height .fl-row-content-wrap {
                    min-height: 768px;
                }
            }

            @media screen and (device-aspect-ratio: 40/71) {
                .fl-row-full-height .fl-row-content-wrap {
                    min-height: 500px;
                }
            }

            .fl-col-group-equal-height,
            .fl-col-group-equal-height .fl-col,
            .fl-col-group-equal-height .fl-col-content {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }

            .fl-col-group-equal-height {
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                width: 100%;
            }

            .fl-col-group-equal-height.fl-col-group-has-child-loading {
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .fl-col-group-equal-height .fl-col,
            .fl-col-group-equal-height .fl-col-content {
                -webkit-box-flex: 1 1 auto;
                -moz-box-flex: 1 1 auto;
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }

            .fl-col-group-equal-height .fl-col-content {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                flex-shrink: 1;
                min-width: 1px;
                max-width: 100%;
                width: 100%;
            }

            .fl-col-group-equal-height:before,
            .fl-col-group-equal-height .fl-col:before,
            .fl-col-group-equal-height .fl-col-content:before,
            .fl-col-group-equal-height:after,
            .fl-col-group-equal-height .fl-col:after,
            .fl-col-group-equal-height .fl-col-content:after {
                content: none;
            }

            .fl-col-group-equal-height.fl-col-group-align-center .fl-col-content {
                align-items: center;
                justify-content: center;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-align: center;
                -ms-flex-pack: center;
            }

            .fl-col-group-equal-height.fl-col-group-align-bottom .fl-col-content {
                justify-content: flex-end;
                -webkit-justify-content: flex-end;
                -webkit-box-align: end;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
            }

            .fl-col-group-equal-height.fl-col-group-align-center .fl-module,
            .fl-col-group-equal-height.fl-col-group-align-center .fl-col-group {
                width: 100%;
            }

            .fl-builder-ie-11 .fl-col-group-equal-height,
            .fl-builder-ie-11 .fl-col-group-equal-height .fl-col,
            .fl-builder-ie-11 .fl-col-group-equal-height .fl-col-content,
            .fl-builder-ie-11 .fl-col-group-equal-height .fl-module,
            .fl-col-group-equal-height.fl-col-group-align-center .fl-col-group {
                min-height: 1px;
            }

            .fl-col {
                float: left;
                min-height: 1px;
            }

            .fl-col-bg-overlay .fl-col-content {
                position: relative;
            }

            .fl-col-bg-overlay .fl-col-content:after {
                border-radius: inherit;
                content: '';
                display: block;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 0;
            }

            .fl-col-bg-overlay .fl-module {
                position: relative;
                z-index: 2;
            }

            .fl-module img {
                max-width: 100%;
            }

            .fl-builder-module-template {
                margin: 0 auto;
                max-width: 1100px;
                padding: 20px;
            }

            .fl-builder-content a.fl-button,
            .fl-builder-content a.fl-button:visited {
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                display: inline-block;
                font-size: 16px;
                font-weight: normal;
                line-height: 18px;
                padding: 12px 24px;
                text-decoration: none;
                text-shadow: none;
            }

            .fl-builder-content .fl-button:hover {
                text-decoration: none;
            }

            .fl-builder-content .fl-button:active {
                position: relative;
                top: 1px;
            }

            .fl-builder-content .fl-button-width-full .fl-button {
                display: block;
                text-align: center;
            }

            .fl-builder-content .fl-button-width-custom .fl-button {
                display: inline-block;
                text-align: center;
                max-width: 100%;
            }

            .fl-builder-content .fl-button-left {
                text-align: left;
            }

            .fl-builder-content .fl-button-center {
                text-align: center;
            }

            .fl-builder-content .fl-button-right {
                text-align: right;
            }

            .fl-builder-content .fl-button i {
                font-size: 1.3em;
                height: auto;
                margin-right: 8px;
                vertical-align: middle;
                width: auto;
            }

            .fl-builder-content .fl-button i.fl-button-icon-after {
                margin-left: 8px;
                margin-right: 0;
            }

            .fl-builder-content .fl-button-has-icon .fl-button-text {
                vertical-align: middle;
            }

            .fl-icon-wrap {
                display: inline-block;
            }

            .fl-icon {
                display: table-cell;
                vertical-align: middle;
            }

            .fl-icon a {
                text-decoration: none;
            }

            .fl-icon i {
                float: left;
                height: auto;
                width: auto;
            }

            .fl-icon i:before {
                border: none !important;
                height: auto;
                width: auto;
            }

            .fl-icon-text {
                display: table-cell;
                text-align: left;
                padding-left: 15px;
                vertical-align: middle;
            }

            .fl-icon-text-empty {
                display: none;
            }

            .fl-icon-text *:last-child {
                margin: 0 !important;
                padding: 0 !important;
            }

            .fl-icon-text a {
                text-decoration: none;
            }

            .fl-icon-text span {
                display: block;
            }

            .fl-icon-text span.mce-edit-focus {
                min-width: 1px;
            }

            .fl-photo {
                line-height: 0;
                position: relative;
            }

            .fl-photo-align-left {
                text-align: left;
            }

            .fl-photo-align-center {
                text-align: center;
            }

            .fl-photo-align-right {
                text-align: right;
            }

            .fl-photo-content {
                display: inline-block;
                line-height: 0;
                position: relative;
                max-width: 100%;
            }

            .fl-photo-img-svg {
                width: 100%;
            }

            .fl-photo-content img {
                display: inline;
                height: auto;
                max-width: 100%;
            }

            .fl-photo-crop-circle img {
                -webkit-border-radius: 100%;
                -moz-border-radius: 100%;
                border-radius: 100%;
            }

            .fl-photo-caption {
                font-size: 13px;
                line-height: 18px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .fl-photo-caption-below {
                padding-bottom: 20px;
                padding-top: 10px;
            }

            .fl-photo-caption-hover {
                background: rgba(0, 0, 0, 0.7);
                bottom: 0;
                color: #fff;
                left: 0;
                opacity: 0;
                filter: alpha(opacity=0);
                padding: 10px 15px;
                position: absolute;
                right: 0;
                -webkit-transition: opacity 0.3s ease-in;
                -moz-transition: opacity 0.3s ease-in;
                transition: opacity 0.3s ease-in;
            }

            .fl-photo-content:hover .fl-photo-caption-hover {
                opacity: 100;
                filter: alpha(opacity=100);
            }

            .fl-builder-pagination,
            .fl-builder-pagination-load-more {
                padding: 40px 0;
            }

            .fl-builder-pagination ul.page-numbers {
                list-style: none;
                margin: 0;
                padding: 0;
                text-align: center;
            }

            .fl-builder-pagination li {
                display: inline-block;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .fl-builder-pagination li a.page-numbers,
            .fl-builder-pagination li span.page-numbers {
                border: 1px solid #e6e6e6;
                display: inline-block;
                padding: 5px 10px;
                margin: 0 0 5px;
            }

            .fl-builder-pagination li a.page-numbers:hover,
            .fl-builder-pagination li span.current {
                background: #f5f5f5;
                text-decoration: none;
            }

            .fl-slideshow,
            .fl-slideshow * {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
            }

            .fl-slideshow .fl-slideshow-image img {
                max-width: none !important;
            }

            .fl-slideshow-social {
                line-height: 0 !important;
            }

            .fl-slideshow-social * {
                margin: 0 !important;
            }

            .fl-builder-content .bx-wrapper .bx-viewport {
                background: transparent;
                border: none;
                box-shadow: none;
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                left: 0;
            }

            .mfp-wrap button.mfp-arrow,
            .mfp-wrap button.mfp-arrow:active,
            .mfp-wrap button.mfp-arrow:hover,
            .mfp-wrap button.mfp-arrow:focus {
                background: transparent !important;
                border: none !important;
                outline: none;
                position: absolute;
                top: 50%;
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .mfp-wrap .mfp-close,
            .mfp-wrap .mfp-close:active,
            .mfp-wrap .mfp-close:hover,
            .mfp-wrap .mfp-close:focus {
                background: transparent !important;
                border: none !important;
                outline: none;
                position: absolute;
                top: 0;
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .admin-bar .mfp-wrap .mfp-close,
            .admin-bar .mfp-wrap .mfp-close:active,
            .admin-bar .mfp-wrap .mfp-close:hover,
            .admin-bar .mfp-wrap .mfp-close:focus {
                top: 32px !important;
            }

            img.mfp-img {
                padding: 0;
            }

            .mfp-counter {
                display: none;
            }

            .mfp-wrap .mfp-preloader.fa {
                font-size: 30px;
            }

            .fl-form-field {
                margin-bottom: 15px;
            }

            .fl-form-field input.fl-form-error {
                border-color: #DD6420;
            }

            .fl-form-error-message {
                clear: both;
                color: #DD6420;
                display: none;
                padding-top: 8px;
                font-size: 12px;
                font-weight: lighter;
            }

            .fl-form-button-disabled {
                opacity: 0.5;
            }

            .fl-animation {
                opacity: 0;
            }

            .fl-builder-preview .fl-animation,
            .fl-builder-edit .fl-animation,
            .fl-animated {
                opacity: 1;
            }

            .fl-animated {
                animation-fill-mode: both;
                -webkit-animation-fill-mode: both;
            }

            .fl-button.fl-button-icon-animation i {
                width: 0 !important;
                opacity: 0;
                -ms-filter: "alpha(opacity=0)";
                transition: all 0.2s ease-out;
                -webkit-transition: all 0.2s ease-out;
            }

            .fl-button.fl-button-icon-animation:hover i {
                opacity: 1 ! important;
                -ms-filter: "alpha(opacity=100)";
            }

            .fl-button.fl-button-icon-animation i.fl-button-icon-after {
                margin-left: 0px !important;
            }

            .fl-button.fl-button-icon-animation:hover i.fl-button-icon-after {
                margin-left: 10px !important;
            }

            .fl-button.fl-button-icon-animation i.fl-button-icon-before {
                margin-right: 0 !important;
            }

            .fl-button.fl-button-icon-animation:hover i.fl-button-icon-before {
                margin-right: 20px !important;
                margin-left: -10px;
            }

            .single:not(.woocommerce).single-fl-builder-template .fl-content {
                width: 100%;
            }

            .fl-builder-layer {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 0;
                pointer-events: none;
                overflow: hidden;
            }

            .fl-builder-shape-layer {
                z-index: 0;
            }

            .fl-builder-shape-layer.fl-builder-bottom-edge-layer {
                z-index: 1;
            }

            .fl-row-bg-overlay .fl-builder-shape-layer {
                z-index: 1;
            }

            .fl-row-bg-overlay .fl-builder-shape-layer.fl-builder-bottom-edge-layer {
                z-index: 2;
            }

            .fl-row-has-layers .fl-row-content {
                z-index: 1;
            }

            .fl-row-bg-overlay .fl-row-content {
                z-index: 2;
            }

            .fl-builder-layer>* {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }

            .fl-builder-layer+.fl-row-content {
                position: relative;
            }

            .fl-builder-layer .fl-shape {
                fill: #aaa;
                stroke: none;
                stroke-width: 0;
                width: 100%;
            }

            .fl-builder-content a.fl-button,
            .fl-builder-content a.fl-button:visited {
                background: #fafafa;
                border: 1px solid #ccc;
                color: #333;
            }

            .fl-builder-content a.fl-button *,
            .fl-builder-content a.fl-button:visited * {
                color: #333;
            }

            .fl-row-content-wrap {
                margin: 0px;
            }

            .fl-row-content-wrap {
                padding: 20px;
            }

            .fl-row-fixed-width {
                max-width: 1100px;
            }

            .fl-col-content {
                margin: 0px;
            }

            .fl-col-content {
                padding: 0px;
            }

            .fl-module-content {
                margin: 20px;
            }

            @media (max-width: 992px) {

                .fl-visible-desktop,
                .fl-visible-mobile,
                .fl-col-group .fl-visible-desktop.fl-col,
                .fl-col-group .fl-visible-mobile.fl-col {
                    display: none;
                }

                .fl-visible-desktop-medium,
                .fl-visible-medium,
                .fl-visible-medium-mobile,
                .fl-col-group .fl-visible-desktop-medium.fl-col,
                .fl-col-group .fl-visible-medium.fl-col,
                .fl-col-group .fl-visible-medium-mobile.fl-col {
                    display: block;
                }

                .fl-col-group-equal-height .fl-visible-desktop-medium.fl-col,
                .fl-col-group-equal-height .fl-visible-medium.fl-col,
                .fl-col-group-equal-height .fl-visible-medium-mobile.fl-col {
                    display: flex;
                }
            }

            @media (max-width: 768px) {

                .fl-visible-desktop,
                .fl-visible-desktop-medium,
                .fl-visible-medium,
                .fl-col-group .fl-visible-desktop.fl-col,
                .fl-col-group .fl-visible-desktop-medium.fl-col,
                .fl-col-group .fl-visible-medium.fl-col,
                .fl-col-group-equal-height .fl-visible-desktop-medium.fl-col,
                .fl-col-group-equal-height .fl-visible-medium.fl-col {
                    display: none !important;
                }

                .fl-visible-medium-mobile,
                .fl-visible-mobile,
                .fl-col-group .fl-visible-medium-mobile.fl-col,
                .fl-col-group .fl-visible-mobile.fl-col {
                    display: block !important;
                }

                .fl-row-content-wrap {
                    background-attachment: scroll !important;
                }

                .fl-row-bg-parallax .fl-row-content-wrap {
                    background-attachment: scroll !important;
                    background-position: center center !important;
                }

                .fl-col-group.fl-col-group-equal-height {
                    display: block;
                }

                .fl-col-group.fl-col-group-equal-height.fl-col-group-custom-width {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                }

                .fl-col-group.fl-col-group-responsive-reversed {
                    display: -webkit-box;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: -moz-flex;
                    display: -webkit-flex;
                    display: flex;
                    flex-flow: row wrap;
                    -ms-box-orient: horizontal;
                    -webkit-flex-flow: row wrap;
                }

                .fl-col-group.fl-col-group-responsive-reversed .fl-col {
                    -webkit-box-flex: 0 0 100%;
                    -moz-box-flex: 0 0 100%;
                    -webkit-flex: 0 0 100%;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    min-width: 0;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(1) {
                    -webkit-box-ordinal-group: 12;
                    -moz-box-ordinal-group: 12;
                    -ms-flex-order: 12;
                    -webkit-order: 12;
                    order: 12;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(2) {
                    -webkit-box-ordinal-group: 11;
                    -moz-box-ordinal-group: 11;
                    -ms-flex-order: 11;
                    -webkit-order: 11;
                    order: 11;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(3) {
                    -webkit-box-ordinal-group: 10;
                    -moz-box-ordinal-group: 10;
                    -ms-flex-order: 10;
                    -webkit-order: 10;
                    order: 10;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(4) {
                    -webkit-box-ordinal-group: 9;
                    -moz-box-ordinal-group: 9;
                    -ms-flex-order: 9;
                    -webkit-order: 9;
                    order: 9;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(5) {
                    -webkit-box-ordinal-group: 8;
                    -moz-box-ordinal-group: 8;
                    -ms-flex-order: 8;
                    -webkit-order: 8;
                    order: 8;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(6) {
                    -webkit-box-ordinal-group: 7;
                    -moz-box-ordinal-group: 7;
                    -ms-flex-order: 7;
                    -webkit-order: 7;
                    order: 7;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(7) {
                    -webkit-box-ordinal-group: 6;
                    -moz-box-ordinal-group: 6;
                    -ms-flex-order: 6;
                    -webkit-order: 6;
                    order: 6;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(8) {
                    -webkit-box-ordinal-group: 5;
                    -moz-box-ordinal-group: 5;
                    -ms-flex-order: 5;
                    -webkit-order: 5;
                    order: 5;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(9) {
                    -webkit-box-ordinal-group: 4;
                    -moz-box-ordinal-group: 4;
                    -ms-flex-order: 4;
                    -webkit-order: 4;
                    order: 4;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(10) {
                    -webkit-box-ordinal-group: 3;
                    -moz-box-ordinal-group: 3;
                    -ms-flex-order: 3;
                    -webkit-order: 3;
                    order: 3;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(11) {
                    -webkit-box-ordinal-group: 2;
                    -moz-box-ordinal-group: 2;
                    -ms-flex-order: 2;
                    -webkit-order: 2;
                    order: 2;
                }

                .fl-col-group-responsive-reversed .fl-col:nth-of-type(12) {
                    -webkit-box-ordinal-group: 1;
                    -moz-box-ordinal-group: 1;
                    -ms-flex-order: 1;
                    -webkit-order: 1;
                    order: 1;
                }

                .fl-col {
                    clear: both;
                    float: none;
                    margin-left: auto;
                    margin-right: auto;
                    width: auto !important;
                }

                .fl-col-small:not(.fl-col-small-full-width) {
                    max-width: 400px;
                }

                .fl-block-col-resize {
                    display: none;
                }

                .fl-row[data-node] .fl-row-content-wrap {
                    margin: 0;
                    padding-left: 0;
                    padding-right: 0;
                }

                .fl-row[data-node] .fl-bg-video,
                .fl-row[data-node] .fl-bg-slideshow {
                    left: 0;
                    right: 0;
                }

                .fl-col[data-node] .fl-col-content {
                    margin: 0;
                    padding-left: 0;
                    padding-right: 0;
                }
            }

            .page .fl-post-header,
            .single-fl-builder-template .fl-post-header {
                display: none;
            }

            .fl-node-627e69d11f60e>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0c353a 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-627e69d11f60e>.fl-row-content-wrap {
                margin-top: 0px;
            }

            .fl-node-627e69d11f60e>.fl-row-content-wrap {
                padding-top: 30px;
                padding-bottom: 80px;
            }

            .fl-node-6397804f9d6f3>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0C353A 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-6397804f9d6f3>.fl-row-content-wrap {
                padding-top: 30px;
                padding-bottom: 0px;
            }

            .fl-node-627e69d11f77d>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0c353a 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-627e69d11f77d>.fl-row-content-wrap {
                margin-top: 0px;
            }

            .fl-node-627e69d11f77d>.fl-row-content-wrap {
                padding-top: 80px;
                padding-bottom: 50px;
            }

            .fl-node-639782deaf336>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0C353A 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-639782deaf336>.fl-row-content-wrap {
                padding-top: 30px;
                padding-bottom: 0px;
            }

            .fl-node-630619398457a>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57AEB9 30%, #0c353a 100%);
            }

            .fl-node-627e69d11f7a1>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0C353A 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-627e69d11f7a1>.fl-row-content-wrap {
                padding-top: 30px;
                padding-bottom: 0px;
            }

            .fl-node-627e69d11f771>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0c353a 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-627e69d11f6e9>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0c353a 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-627e69d11f6e9>.fl-row-content-wrap {
                padding-top: 0px;
            }

            .fl-node-63062d1cdec96>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57AEB9 30%, #0C353A 100%);
            }

            .fl-node-63978ef5f0839>.fl-row-content-wrap {
                background-image: linear-gradient(90deg, #57aeb9 30%, #0c353a 100%);
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-63978ef5f0839>.fl-row-content-wrap {
                margin-top: 0px;
            }

            .fl-node-63978ef5f0839>.fl-row-content-wrap {
                padding-top: 80px;
                padding-bottom: 50px;
            }

            .fl-node-627e69d11f5da>.fl-row-content-wrap {
                background-color: #212121;
                border-top-width: 1px;
                border-right-width: 0px;
                border-bottom-width: 1px;
                border-left-width: 0px;
            }

            .fl-node-627e69d11f5da>.fl-row-content-wrap {
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
            }

            .fl-node-627e69d11f67a {
                width: 20%;
            }

            .fl-node-627e69d11f67e {
                width: 20%;
            }

            .fl-node-627e69d11f681 {
                width: 20%;
            }

            .fl-node-627e69d11f685 {
                width: 20%;
            }

            .fl-node-627e69d11f689 {
                width: 20%;
            }

            .fl-node-627e69d11f66c {
                width: 65%;
            }

            .fl-node-627e69d11f66c>.fl-col-content {
                background-color: rgba(0, 0, 0, 0.5);
                border-top-width: 1px;
                border-right-width: 1px;
                border-bottom-width: 1px;
                border-left-width: 1px;
            }

            .fl-node-627e69d11f66f {
                width: 35%;
            }

            .fl-node-63a628ba8b16c {
                width: 100%;
            }

            .fl-node-6397804f9f4cc {
                width: 50%;
            }

            .fl-node-6397804f9f4dd {
                width: 50%;
            }

            .fl-node-627e69d11f79a {
                width: 100%;
            }

            .fl-node-627e76c5ba429 {
                width: 100%;
            }

            .fl-node-6306292f298e6 {
                width: 100%;
            }

            .fl-node-639782deb11c5 {
                width: 100%;
            }

            .fl-node-639782deb1209 {
                width: 50%;
            }

            .fl-node-639782deb1217 {
                width: 50%;
            }

            .fl-node-6306193a06a46 {
                width: 100%;
            }

            .fl-node-627e69d11f7a8 {
                width: 100%;
            }

            .fl-node-627e69d11f7b7 {
                width: 100%;
            }

            .fl-node-627e69d11f778 {
                width: 100%;
            }

            .fl-node-627e69d11f727 {
                width: 25%;
            }

            .fl-node-627e69d11f72b {
                width: 25%;
            }

            .fl-node-627e69d11f72e {
                width: 25%;
            }

            .fl-node-627e69d11f732 {
                width: 25%;
            }

            .fl-node-63062d1d914be {
                width: 100%;
            }

            .fl-node-63978ef5f25b1 {
                width: 100%;
            }

            .fl-node-63978ef5f25d3 {
                width: 100%;
            }

            .fl-node-63978ef5f25fc {
                width: 100%;
            }

            .fl-node-627e69d11f5f0 {
                width: 100%;
            }

            img.mfp-img {
                padding-bottom: 40px !important;
            }

            @media (max-width: 768px) {
                .fl-photo-content {
                    width: 100%;
                }
            }

            .fl-node-627e69d11f61e .fl-photo {
                text-align: center;
            }

            .fl-node-627e69d11f61e>.fl-module-content {
                margin-top: 20px;
                margin-right: 20px;
                margin-bottom: 50px;
                margin-left: 20px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f61e>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .fl-embed-video iframe {
                max-width: 100%;
            }

            .fl-wp-video {
                position: relative;
                height: 0;
                overflow: hidden;
                padding: 0 0 56.25%;
            }

            .fl-wp-video .wp-video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100% !important;
                height: 100% !important;
            }

            .fl-wp-video .wp-video .mejs-container,
            .fl-wp-video .wp-video .mejs-inner,
            .fl-wp-video .wp-video .mejs-layers,
            .fl-wp-video .wp-video .mejs-layer,
            .fl-wp-video .wp-video-shortcode,
            .fl-wp-video .me-plugin,
            .fl-wp-video .me-plugin * {
                width: 100% !important;
                height: 100% !important;
            }

            @media (max-width: 768px) {}

            .fl-builder-content .fl-rich-text strong {
                font-weight: bold;
            }

            .fl-node-627e69d11f5e7>.fl-module-content {
                margin-top: -30px;
                margin-right: 5px;
                margin-bottom: -25px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f5e7>.fl-module-content {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }
            }

            .fl-animated.fl-fade-down {
                animation: fl-fade-down 1s ease;
                -webkit-animation: fl-fade-down 1s ease;
            }

            @-webkit-keyframes fl-fade-down {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -50%, 0);
                    transform: translate3d(0, -50%, 0);
                }

                to {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes fl-fade-down {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -50%, 0);
                    transform: translate3d(0, -50%, 0);
                }

                to {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }

            .fl-node-627e69d11f673>.fl-module-content {
                margin-top: -10px;
                margin-right: 5px;
                margin-bottom: -25px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f673>.fl-module-content {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }
            }

            .fl-node-627e69d11f612>.fl-module-content {
                margin-top: 0px;
                margin-right: 5px;
                margin-bottom: 0px;
            }

            .fl-animated.fl-fade-in {
                animation: fl-fade-in 1s ease;
                -webkit-animation: fl-fade-in 1s ease;
            }

            @-webkit-keyframes fl-fade-in {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes fl-fade-in {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @media (max-width: 768px) {

                .fl-module-button .fl-button-left,
                .fl-module-button .fl-button-right {
                    text-align: center;
                }
            }

            @media screen and (max-width: 1024px) {
                .btn-mobile {
                    display: block;
                }

                .btn-desktop {
                    display: none;
                }
            }

            @media screen and (min-width: 1024px) {
                .btn-mobile {
                    display: none;
                }

                .btn-desktop {
                    display: block;
                }
            }

            .fundo-fixo {
                position: fixed;
                top: 0%;
                width: 100%;
                background-color: #FFFFFF;
                height: 20%;
                left: 0%;
                z-index: 999;
                transition: 0s;
            }

            .fl-button-fixo {
                width: 80% !important;
                font-size: 20px !important;
                margin-top: 30px !important;
                transition: 0s !important;
            }

            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button,
            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button:visited {
                font-size: 28px;
                line-height: 30px;
                padding: 12px 24px;
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                transition: 0.5s;
                background: #ffbf00;
                border: 1px solid #f3b300;
                background: -moz-linear-gradient(top, #ffdd1e 0%, #ffbf00 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffdd1e), color-stop(100%, #ffbf00));
                background: -webkit-linear-gradient(top, #ffdd1e 0%, #ffbf00 100%);
                background: -o-linear-gradient(top, #ffdd1e 0%, #ffbf00 100%);
                background: -ms-linear-gradient(top, #ffdd1e 0%, #ffbf00 100%);
                background: linear-gradient(to bottom, #ffdd1e 0%, #ffbf00 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdd1e', endColorstr='#ffbf00', GradientType=0);
            }

            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button,
            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button:visited,
            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button *,
            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button:visited * {
                color: #ffffff;
            }

            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button:hover,
            .fl-builder-content .fl-node-63a628ba8aa65 a.fl-button:focus {}

            .fl-node-6397804f9f4d4 .fl-photo {
                text-align: center;
            }

            .fl-node-6397804f9f4e6>.fl-module-content {
                margin-top: 60px;
                margin-bottom: 0px;
            }

            @media (max-width: 768px) {
                .fl-node-6397804f9f4e6>.fl-module-content {
                    margin-top: 20px;
                }
            }

            .fl-node-6397804f9f4ee>.fl-module-content {
                margin-top: 30px;
                margin-bottom: 0px;
            }

            @media (max-width: 768px) {
                .fl-node-6397804f9f4ee>.fl-module-content {
                    margin-top: 20px;
                }
            }

            .fl-node-627e69d11f780>.fl-module-content {
                margin-top: -30px;
                margin-right: 5px;
                margin-bottom: -25px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f780>.fl-module-content {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }
            }

            @media screen and (max-width: 1024px) {
                .btn-mobile {
                    display: block;
                }

                .btn-desktop {
                    display: none;
                }
            }

            @media screen and (min-width: 1024px) {
                .btn-mobile {
                    display: none;
                }

                .btn-desktop {
                    display: block;
                }
            }

            .fundo-fixo {
                position: fixed;
                top: 0%;
                width: 100%;
                background-color: #FFFFFF;
                height: 20%;
                left: 0%;
                z-index: 999;
                transition: 0s;
            }

            .fl-button-fixo {
                width: 80% !important;
                font-size: 20px !important;
                margin-top: 30px !important;
                transition: 0s !important;
            }

            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button,
            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button:visited {
                font-size: 20px;
                line-height: 22px;
                padding: 12px 24px;
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                transition: 0.5s;
                background: #0071aa;
                border: 1px solid #00659e;
                background: -moz-linear-gradient(top, #1e8fc8 0%, #0071aa 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e8fc8), color-stop(100%, #0071aa));
                background: -webkit-linear-gradient(top, #1e8fc8 0%, #0071aa 100%);
                background: -o-linear-gradient(top, #1e8fc8 0%, #0071aa 100%);
                background: -ms-linear-gradient(top, #1e8fc8 0%, #0071aa 100%);
                background: linear-gradient(to bottom, #1e8fc8 0%, #0071aa 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e8fc8', endColorstr='#0071aa', GradientType=0);
            }

            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button,
            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button:visited,
            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button *,
            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button:visited * {
                color: #ffffff;
            }

            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button:hover,
            .fl-builder-content .fl-node-627e76c5ba070 a.fl-button:focus {}

            .fl-node-639782deb1210 .fl-photo {
                text-align: center;
            }

            .fl-node-639782deb121d>.fl-module-content {
                margin-top: 60px;
                margin-bottom: 0px;
            }

            @media (max-width: 768px) {
                .fl-node-639782deb121d>.fl-module-content {
                    margin-top: 20px;
                }
            }

            .fl-node-639782deb1224>.fl-module-content {
                margin-top: 30px;
                margin-bottom: 0px;
            }

            @media (max-width: 768px) {
                .fl-node-639782deb1224>.fl-module-content {
                    margin-top: 20px;
                }
            }

            @media screen and (max-width: 1024px) {
                .btn-mobile {
                    display: block;
                }

                .btn-desktop {
                    display: none;
                }
            }

            @media screen and (min-width: 1024px) {
                .btn-mobile {
                    display: none;
                }

                .btn-desktop {
                    display: block;
                }
            }

            .fundo-fixo {
                position: fixed;
                top: 0%;
                width: 100%;
                background-color: #FFFFFF;
                height: 20%;
                left: 0%;
                z-index: 999;
                transition: 0s;
            }

            .fl-button-fixo {
                width: 80% !important;
                font-size: 20px !important;
                margin-top: 30px !important;
                transition: 0s !important;
            }

            .fl-builder-content .fl-node-639782deb122b a.fl-button,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:visited {
                font-size: 14px;
                line-height: 16px;
                padding: 20px 40px;
                border-radius: 50px;
                -moz-border-radius: 50px;
                -webkit-border-radius: 50px;
                transition: 0.5s;
                background-color: transparent !important;
                border-color: #ffffff !important;
            }

            .fl-builder-content .fl-node-639782deb122b a.fl-button,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:visited,
            .fl-builder-content .fl-node-639782deb122b a.fl-button *,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:visited * {
                color: #ffffff;
            }

            .fl-builder-content .fl-node-639782deb122b a.fl-button:hover,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:focus {
                background: #ffa200 !important;
                border: 1px solid #f39600;
                transition: 0.5s;
                border-color: #ffa200 !important;
            }

            .fl-builder-content .fl-node-639782deb122b a.fl-button:hover,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:focus,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:hover *,
            .fl-builder-content .fl-node-639782deb122b a.fl-button:focus * {
                color: #ffffff;
            }

            .fl-node-639782deb122b>.fl-module-content {
                margin-top: 40px;
            }

            @media (max-width: 768px) {
                .fl-node-639782deb122b>.fl-module-content {
                    margin-top: 20px;
                }
            }

            @media (max-width: 768px) {

                .fl-module-button .fl-button-left,
                .fl-module-button .fl-button-right {
                    text-align: center;
                }
            }

            .fl-builder-content .fl-node-639791572f4e5 a.fl-button,
            .fl-builder-content .fl-node-639791572f4e5 a.fl-button:visited {}

            @media (max-width: 768px) {
                .fl-node-639791572f4e5 .fl-button-wrap {
                    text-align: center;
                }
            }

            .fl-builder-content .fl-node-6397ae13b477d a.fl-button,
            .fl-builder-content .fl-node-6397ae13b477d a.fl-button:visited {}

            @media (max-width: 768px) {
                .fl-node-6397ae13b477d .fl-button-wrap {
                    text-align: center;
                }
            }

            .fl-node-627e69d11f7b0>.fl-module-content {
                margin-top: 0px;
                margin-right: 5px;
                margin-bottom: -20px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f7b0>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .ce-countdown--theme-1 {
                background: #f7f7f7;
                color: #000;
                font-family: 'Roboto', sans-serif;
                font-size: 1em;
                line-height: 1.4;
                padding: 20px;
            }

            .ce-countdown--theme-1 .ce-col {
                display: inline-block;
                margin: 0 20px;
                padding-bottom: 20px;
            }

            .ce-countdown--theme-1 .ce-days,
            .ce-countdown--theme-1 .ce-hours,
            .ce-countdown--theme-1 .ce-minutes,
            .ce-countdown--theme-1 .ce-seconds,
            .ce-countdown--theme-1 .ce-dseconds,
            .ce-countdown--theme-1 .ce-mseconds {
                font-size: 4.5em;
            }

            .ce-countdown--theme-1 .ce-dseconds,
            .ce-countdown--theme-1 .ce-mseconds {
                display: inline-block;
                width: 150px;
            }

            .ce-countdown--theme-1 .ce-days-label,
            .ce-countdown--theme-1 .ce-hours-label,
            .ce-countdown--theme-1 .ce-minutes-label,
            .ce-countdown--theme-1 .ce-seconds-label,
            .ce-countdown--theme-1 .ce-dseconds-label,
            .ce-countdown--theme-1 .ce-mseconds-label {
                display: block;
                text-transform: uppercase;
            }

            @media all and (max-width: 540px) {

                .ce-countdown--theme-1 .ce-days,
                .ce-countdown--theme-1 .ce-hours,
                .ce-countdown--theme-1 .ce-minutes,
                .ce-countdown--theme-1 .ce-seconds,
                .ce-countdown--theme-1 .ce-dseconds,
                .ce-countdown--theme-1 .ce-mseconds {
                    font-size: 1.5em;
                }

                .ce-countdown--theme-1 .ce-col {
                    display: block;
                }
            }

            .ce-countdown--theme-2 {
                background: #ffc728;
                color: #fff;
                font-family: 'Open Sans', sans-serif;
                font-size: 1em;
                font-weight: 300;
                line-height: 1.4;
                padding: 20px;
            }

            .ce-countdown--theme-2 .ce-bar {
                background: #a66600;
                clear: both;
                float: left;
                margin: 7px 0 0 0;
                width: 330px;
            }

            .ce-countdown--theme-2 .ce-fill {
                background: #fff;
                height: 5px;
                width: 0%;
            }

            .ce-countdown--theme-2 .ce-info {
                float: left;
                line-height: 20px;
            }

            .ce-countdown--theme-2 .ce-text {
                float: left;
                margin: -14px 0 0 26px;
                padding-top: 10px;
                clear: none;
                text-align: left;
            }

            .ce-countdown--theme-2 strong {
                font-size: 45px;
                font-style: italic;
                font-weight: 600;
                line-height: 1.1em;
            }

            .ce-countdown--theme-2 p {
                font-size: 30px;
                font-style: italic;
                line-height: 1.2em;
                margin: 0;
            }

            .ce-countdown--theme-2 .ce-days,
            .ce-countdown--theme-2 .ce-hours,
            .ce-countdown--theme-2 .ce-minutes,
            .ce-countdown--theme-2 .ce-seconds,
            .ce-countdown--theme-2 .ce-dseconds,
            .ce-countdown--theme-2 .ce-mseconds {
                float: left;
                font-size: 12px;
                font-weight: 800 !important;
                text-align: center;
                width: 40px;
            }

            .ce-countdown--theme-2 .ce-days-label,
            .ce-countdown--theme-2 .ce-hours-label,
            .ce-countdown--theme-2 .ce-minutes-label,
            .ce-countdown--theme-2 .ce-seconds-label,
            .ce-countdown--theme-2 .ce-dseconds-label,
            .ce-countdown--theme-2 .ce-mseconds-label {
                color: #a76500;
                float: left;
                font-size: 12px;
                font-weight: 400;
            }

            @media all and (max-width: 900px) {
                .ce-countdown--theme-2 {
                    text-align: center;
                }

                .ce-countdown--theme-2 .ce-info {
                    display: inline-block;
                    float: none;
                }

                .ce-countdown--theme-2 .ce-text {
                    float: none;
                    margin: 0;
                    text-align: center;
                    padding-top: 20px;
                }

                .ce-countdown--theme-2 .ce-bar {
                    width: 115px;
                }

                .ce-countdown--theme-2 strong {
                    font-size: 25px;
                    font-weight: 600;
                }

                .ce-countdown--theme-2 p {
                    font-size: 20px;
                    margin: 5px 0 0;
                }
            }

            .ce-countdown--theme-3 {
                background: #000;
                color: #fff;
                font-family: 'Roboto', sans-serif;
                font-size: 0;
                font-weight: 100;
                padding: 30px;
                text-align: center;
            }

            .ce-countdown--theme-3 .ce-col {
                display: inline-block;
                font-size: 120px;
                padding-bottom: 5px;
                width: 2em;
            }

            .ce-countdown--theme-3 .ce-col+.ce-col {
                border-left: 1px solid #ffc728;
            }

            .ce-countdown--theme-3 .ce-days-label,
            .ce-countdown--theme-3 .ce-hours-label,
            .ce-countdown--theme-3 .ce-minutes-label,
            .ce-countdown--theme-3 .ce-seconds-label,
            .ce-countdown--theme-3 .ce-dseconds-label,
            .ce-countdown--theme-3 .ce-mseconds-label {
                color: #806314;
                display: block;
                font-size: 20px;
                font-weight: 300;
                text-transform: lowercase;
            }

            @media all and (max-width: 800px) {
                .ce-countdown--theme-3 .ce-col {
                    font-size: 80px;
                }

                .ce-countdown--theme-3 .ce-days-label,
                .ce-countdown--theme-3 .ce-hours-label,
                .ce-countdown--theme-3 .ce-minutes-label,
                .ce-countdown--theme-3 .ce-seconds-label,
                .ce-countdown--theme-3 .ce-dseconds-label,
                .ce-countdown--theme-3 .ce-mseconds-label {
                    font-size: 16px;
                }
            }

            @media all and (max-width: 600px) {
                .ce-countdown--theme-3 .ce-col {
                    display: block;
                    font-size: 70px;
                    margin: 0 auto;
                }

                .ce-countdown--theme-3 .ce-col+.ce-col {
                    border-left: 0;
                    border-top: 1px solid #ffc728;
                    margin-top: 10px;
                }

                .ce-countdown--theme-3 .ce-days-label,
                .ce-countdown--theme-3 .ce-hours-label,
                .ce-countdown--theme-3 .ce-minutes-label,
                .ce-countdown--theme-3 .ce-seconds-label,
                .ce-countdown--theme-3 .ce-dseconds-label,
                .ce-countdown--theme-3 .ce-mseconds-label {
                    font-size: 13px;
                }
            }

            .ce-countdown--theme-4 {
                background: #ec667a;
                color: #fff;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 60px;
                font-weight: 300;
                min-height: 90px;
                padding: 30px;
                text-align: center;
                text-transform: lowercase;
            }

            .ce-countdown--theme-4 span {
                font-weight: 900;
            }

            @media all and (max-width: 730px) {
                .ce-countdown--theme-4 {
                    font-size: 30px;
                }
            }

            .ce-countdown--theme-5 {
                background-color: #000;
                color: #fff;
                font-family: 'Permanent Marker', cursive;
                font-size: 140px;
            }

            .ce-countdown--theme-5 {
                background: url(../media/theme-5/background.jpg);
                background-size: cover;
            }

            @media all and (max-width: 540px) {
                .ce-countdown--theme-5 {
                    font-size: 70px;
                }
            }

            .ce-countdown--theme-6 {
                background: #31facd;
                color: #00bfa0;
                font-family: 'Roboto', sans-serif;
                font-size: 0;
                font-weight: 400;
                padding: 30px;
                text-align: center;
            }

            .ce-countdown--theme-6 .ce-col {
                display: inline-block;
                font-size: 24px;
                margin: 0 0 0 4.513888888889%;
                width: 30.324074074074%;
            }

            .ce-countdown--theme-6 .ce-col:first-child {
                margin: 0;
            }

            .ce-countdown--theme-6 .ce-hours,
            .ce-countdown--theme-6 .ce-minutes,
            .ce-countdown--theme-6 .ce-seconds {
                color: #fff;
                display: block;
                font-size: 46px;
                font-weight: 300;
                height: 66px;
                line-height: 66px;
                margin-bottom: 10px;
            }

            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-hours,
            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-minutes,
            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-seconds {
                -webkit-perspective: 1000;
                -moz-perspective: 1000;
                -ms-perspective: 1000;
                perspective: 1000;
            }

            .ce-countdown--theme-6 .ce-flip-wrap {
                position: relative;
            }

            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-flip-wrap {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transition: 0s;
                -moz-transition: 0s;
                transition: 0s;
            }

            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-animate .ce-flip-wrap {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                transform: rotateY(180deg);
                -webkit-transition: 0.6s;
                -moz-transition: 0.6s;
                transition: 0.6s;
            }

            .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-front,
            .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-back {
                background: #00bfa0;
                height: 66px;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
            }

            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-front,
            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-back {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-front {
                z-index: 2;
            }

            html:not([class*='ce-ie']) .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-back {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                transform: rotateY(180deg);
            }

            @media all and (max-width: 560px) {
                .ce-countdown--theme-6 .ce-col {
                    font-size: 12px;
                }

                .ce-countdown--theme-6 .ce-hours,
                .ce-countdown--theme-6 .ce-minutes,
                .ce-countdown--theme-6 .ce-seconds {
                    color: #fff;
                    display: block;
                    font-size: 24px;
                    height: 40px;
                    line-height: 40px;
                }

                .ce-countdown--theme-6 .ce-col {
                    margin: 0 2% 0;
                }

                .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-front,
                .ce-countdown--theme-6 .ce-flip-wrap .ce-flip-back {
                    height: 40px;
                }
            }

            .ce-countdown--theme-7 {
                background: #292929;
                color: #00deff;
                font-family: 'Exo', sans-serif;
                font-size: 90px;
                height: 1em;
                line-height: 1em;
                overflow: hidden;
            }

            .ce-countdown--theme-7 .ce-digits {
                display: inline-block;
                min-width: 1.6em;
            }

            .ce-countdown--theme-7 .ce-digits span {
                bottom: -1em;
                display: inline-block;
                min-width: .7em;
                position: relative;
                text-align: left;
                -moz-transition: none;
                -webkit-transition: none;
                transition: none;
            }

            .ce-countdown--theme-7 .ce-digits span:first-child {
                text-align: right;
            }

            .ce-countdown--theme-7 .ce-digits span.ce-animate {
                -moz-transform: translateY(-100%);
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
                -moz-transition: -moz-transform .3s;
                -webkit-transition: -webkit-transform .3s;
                transition: transform .3s;
            }

            .ce-countdown--theme-7 .ce-digits span:before {
                content: attr(data-old);
                position: absolute;
                top: -100%;
                -moz-transform: translate3d(0, 0, 0);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            @media all and (max-width: 600px) {
                .ce-countdown--theme-7 {
                    font-size: 40px;
                }
            }

            .ce-countdown--theme-8 {
                background: #fde5e1;
                color: #594b48;
                font-family: 'Alice', serif;
                font-size: 2em;
                padding: 30px;
                text-transform: uppercase;
            }

            .ce-countdown--theme-8 .ce-days {
                font-size: 3em;
            }

            .ce-countdown--theme-8 strong {
                color: #c28a81;
                display: block;
                font-weight: normal;
            }

            @media all and (max-width: 540px) {
                .ce-countdown--theme-8 {
                    font-size: 1.2em;
                }
            }

            .ce-countdown--theme-9 {
                font-family: 'Open Sans';
                font-size: 0;
                font-weight: 300;
                max-width: none;
                padding: 50px 30px;
                text-align: center;
            }

            .ce-countdown--theme-9 .ce-circle {
                display: inline-block;
                margin: -20px;
                position: relative;
                vertical-align: top;
            }

            .ce-countdown--theme-9 canvas {
                display: inline-block;
                height: 160px;
                width: 160px;
            }

            .ce-countdown--theme-9 .ce-circle__values {
                height: 70px;
                margin-top: -35px;
                position: absolute;
                top: 50%;
                width: 100%;
            }

            .ce-countdown--theme-9 .ce-digit,
            .ce-countdown--theme-9 .ce-label {
                display: block;
                line-height: 1;
            }

            @media all and (max-width: 900px) {
                .ce-countdown--theme-9 canvas {
                    height: 164px;
                    width: 164px;
                }

                .ce-countdown--theme-9 .ce-digit {
                    font-size: 35px;
                }
            }

            @media all and (max-width: 400px) {
                .ce-countdown--theme-9 .ce-circle {
                    margin: -30px;
                    display: block;
                }

                .ce-countdown--theme-9 canvas {
                    height: 134px;
                    width: 134px;
                }

                .ce-countdown--theme-9 .ce-circle__values {
                    margin-top: -30px;
                }

                .ce-countdown--theme-9 .ce-digit {
                    font-size: 30px;
                }

                .ce-countdown--theme-9 .ce-label {
                    font-size: 12px;
                    margin-top: 8px;
                }
            }

            .ce-countdown--theme-10 {
                display: inline-block;
                font-family: 'Unica One', 'cursive';
                padding: 30px;
                position: relative;
                -webkit-user-select: none;
                text-align: center;
            }

            .ce-countdown--theme-10:before,
            .ce-countdown--theme-10:after {
                content: " ";
                display: table;
            }

            .ce-countdown--theme-10:after {
                clear: both;
            }

            .ce-countdown--theme-10 * {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                -o-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -ms-box-sizing: border-box;
                -o-box-sizing: border-box;
                box-sizing: border-box;
            }

            .ce-countdown--theme-10 .ce-unit-wrap {
                float: left;
                margin-left: 1.25em;
            }

            .ce-countdown--theme-10 .ce-unit-wrap:first-child {
                margin-left: 0;
            }

            .ce-countdown--theme-10 .ce-unit-wrap>div:before,
            .ce-countdown--theme-10 .ce-unit-wrap>div:after {
                content: " ";
                display: table;
            }

            .ce-countdown--theme-10 .ce-unit-wrap>div:after {
                clear: both;
            }

            .ce-countdown--theme-10 .ce-unit-wrap>span {
                color: #929292;
                display: block;
                font-size: 1.5em;
                margin: .66666666666667em 0 0;
                text-transform: uppercase;
            }

            .ce-countdown--theme-10 div.flip-wrap {
                color: #fff;
                cursor: pointer;
                text-decoration: none;
            }

            .ce-countdown--theme-10 div.flip-wrap:hover {
                color: #fff;
            }

            .ce-countdown--theme-10 div.digits {
                list-style: none;
            }

            .ce-countdown--theme-10.clearfix:before,
            .ce-countdown--theme-10.clearfix:after {
                content: " ";
                display: table;
            }

            .ce-countdown--theme-10.clearfix:after {
                clear: both;
            }

            .ce-countdown--theme-10 div.digits {
                background: #000;
                border-radius: 5px;
                float: left;
                font-size: 120px;
                height: 150px;
                line-height: 150px;
                margin: 0 4px;
                position: relative;
                width: 70px;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner {
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 1;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner:first-child {
                z-index: 2;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap {
                cursor: default !important;
                display: block;
                height: 100%;
                margin: 0 !important;
                overflow: visible !important;
                -webkit-perspective: 300px;
                -moz-perspective: 300px;
                perspective: 300px;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div {
                font-size: 120px;
                height: 50%;
                left: 0;
                outline: 1px solid transparent;
                overflow: hidden;
                position: absolute;
                width: 100%;
                z-index: 1;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div .shadow {
                height: 100%;
                position: absolute;
                width: 100%;
                z-index: 2;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.up {
                -webkit-transform-origin: 50% 100%;
                -moz-transform-origin: 50% 100%;
                -ms-transform-origin: 50% 100%;
                -o-transform-origin: 50% 100%;
                transform-origin: 50% 100%;
                top: 0;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.up:after {
                background-color: #000;
                background-color: rgba(0, 0, 0, 0.4);
                content: "";
                height: 2px;
                left: 0;
                position: absolute;
                top: 73px;
                width: 100%;
                z-index: 5;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.down {
                bottom: 0;
                -webkit-transform-origin: 50% 0;
                -moz-transform-origin: 50% 0;
                -ms-transform-origin: 50% 0;
                -o-transform-origin: 50% 0;
                transform-origin: 50% 0;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div div.inn {
                background-color: #191919;
                border-radius: 5px;
                color: #fff;
                font-size: 120px;
                height: 200%;
                left: 0;
                position: absolute;
                text-align: center;
                text-shadow: 0 1px 2px #000;
                width: 100%;
                z-index: 1;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.up div.inn {
                background: #373737;
                top: 0;
            }

            .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.down div.inn {
                bottom: 0;
            }

            .ce-countdown--theme-10 div.play div.digits-inner.before {
                z-index: 3;
            }

            .ce-countdown--theme-10 div.play div.digits-inner.active {
                -webkit-animation: asd 0.5s 0.5s linear both;
                -moz-animation: asd 0.5s 0.5s linear both;
                animation: asd 0.5s 0.5s linear both;
                z-index: 5;
            }

            @-webkit-keyframes asd {
                0% {
                    z-index: 2;
                }

                20% {
                    z-index: 4;
                }

                100% {
                    z-index: 4;
                }
            }

            @-moz-keyframes asd {
                0% {
                    z-index: 2;
                }

                20% {
                    z-index: 4;
                }

                100% {
                    z-index: 4;
                }
            }

            @-o-keyframes asd {
                0% {
                    z-index: 2;
                }

                20% {
                    z-index: 4;
                }

                100% {
                    z-index: 4;
                }
            }

            @keyframes asd {
                0% {
                    z-index: 2;
                }

                20% {
                    z-index: 4;
                }

                100% {
                    z-index: 4;
                }
            }

            .ce-countdown--theme-10 div.play div.digits-inner.active .down {
                -webkit-animation: turn 0.5s 0.5s linear both;
                -moz-animation: turn 0.5s 0.5s linear both;
                animation: turn 0.5s 0.5s linear both;
                z-index: 2;
            }

            @-webkit-keyframes turn {
                0% {
                    -webkit-transform: rotateX(90deg);
                }

                100% {
                    -webkit-transform: rotateX(0deg);
                }
            }

            @-moz-keyframes turn {
                0% {
                    -moz-transform: rotateX(90deg);
                }

                100% {
                    -moz-transform: rotateX(0deg);
                }
            }

            @-o-keyframes turn {
                0% {
                    -o-transform: rotateX(90deg);
                }

                100% {
                    -o-transform: rotateX(0deg);
                }
            }

            @keyframes turn {
                0% {
                    transform: rotateX(90deg);
                }

                100% {
                    transform: rotateX(0deg);
                }
            }

            .ce-countdown--theme-10 div.play div.digits-inner.before .up {
                -webkit-animation: turn2 0.5s linear both;
                -moz-animation: turn2 0.5s linear both;
                animation: turn2 0.5s linear both;
                z-index: 2;
            }

            @-webkit-keyframes turn2 {
                0% {
                    -webkit-transform: rotateX(0deg);
                }

                100% {
                    -webkit-transform: rotateX(-90deg);
                }
            }

            @-moz-keyframes turn2 {
                0% {
                    -moz-transform: rotateX(0deg);
                }

                100% {
                    -moz-transform: rotateX(-90deg);
                }
            }

            @-o-keyframes turn2 {
                0% {
                    -o-transform: rotateX(0deg);
                }

                100% {
                    -o-transform: rotateX(-90deg);
                }
            }

            @keyframes turn2 {
                0% {
                    transform: rotateX(0deg);
                }

                100% {
                    transform: rotateX(-90deg);
                }
            }

            .ce-countdown--theme-10 div div.digits-inner.active {
                z-index: 3;
            }

            .ce-countdown--theme-10 div.play div.digits-inner.before .up .shadow {
                -webkit-animation: show 0.5s linear both;
                -moz-animation: show 0.5s linear both;
                animation: show 0.5s linear both;
                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.1)), color-stop(100%, black));
                background: linear, top, rgba(0, 0, 0, 0.1) 0%, black 100%;
                background: -o-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
                background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
                background: linear, to bottom, rgba(0, 0, 0, 0.1) 0%, black 100%;
            }

            .ce-countdown--theme-10 div.play div.digits-inner.active .up .shadow {
                -webkit-animation: hide 0.5s 0.3s linear both;
                -moz-animation: hide 0.5s 0.3s linear both;
                animation: hide 0.5s 0.3s linear both;
                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.1)), color-stop(100%, black));
                background: linear, top, rgba(0, 0, 0, 0.1) 0%, black 100%;
                background: -o-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
                background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
                background: linear, to bottom, rgba(0, 0, 0, 0.1) 0%, black 100%;
            }

            .ce-countdown--theme-10 div.play div.digits-inner.before .down .shadow {
                -webkit-animation: show 0.5s linear both;
                -moz-animation: show 0.5s linear both;
                animation: show 0.5s linear both;
                background: -moz-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, black), color-stop(100%, rgba(0, 0, 0, 0.1)));
                background: linear, top, black 0%, rgba(0, 0, 0, 0.1) 100%;
                background: -o-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
                background: -ms-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
                background: linear, to bottom, black 0%, rgba(0, 0, 0, 0.1) 100%;
            }

            .ce-countdown--theme-10 div.play div.digits-inner.active .down .shadow {
                -webkit-animation: hide 0.5s 0.3s linear both;
                -moz-animation: hide 0.5s 0.3s linear both;
                animation: hide 0.5s 0.2s linear both;
                background: -moz-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, black), color-stop(100%, rgba(0, 0, 0, 0.1)));
                background: linear, top, black 0%, rgba(0, 0, 0, 0.1) 100%;
                background: -o-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
                background: -ms-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
                background: linear, to bottom, black 0%, rgba(0, 0, 0, 0.1) 100%;
            }

            @-webkit-keyframes show {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @-moz-keyframes show {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @-o-keyframes show {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @keyframes show {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @-webkit-keyframes hide {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            @-moz-keyframes hide {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            @-o-keyframes hide {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            @keyframes hide {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            @media all and (max-width: 900px) {
                .ce-countdown--theme-10 .ce-unit-wrap {
                    margin-left: 0.75em;
                }

                .ce-countdown--theme-10 .ce-unit-wrap>span {
                    font-size: 1em;
                    margin: .66666666666667em 0 0;
                }

                .ce-countdown--theme-10 {
                    margin: .75em;
                }

                .ce-countdown--theme-10 div.digits {
                    font-size: 70px;
                    height: 100px;
                    line-height: 100px;
                    margin: 0 2px;
                    width: 50px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div {
                    font-size: 70px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.up:after {
                    height: 2px;
                    top: 48px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div div.inn {
                    font-size: 70px;
                    left: 0;
                }
            }

            @media all and (max-width: 650px) {
                .ce-countdown--theme-10 .ce-unit-wrap {
                    margin-left: 0.5em;
                }

                .ce-countdown--theme-10 .ce-unit-wrap>span {
                    font-size: 1em;
                    margin: .5em 0 0;
                }

                .ce-countdown--theme-10 {
                    margin: .75em;
                }

                .ce-countdown--theme-10 div.digits {
                    font-size: 40px;
                    height: 70px;
                    line-height: 70px;
                    margin: 0 2px;
                    width: 40px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div {
                    font-size: 40px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.up:after {
                    height: 2px;
                    top: 33px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div div.inn {
                    font-size: 40px;
                    left: 0;
                }
            }

            @media all and (max-width: 500px) {
                .ce-countdown--theme-10 .ce-unit-wrap {
                    margin-left: 0.3em;
                }

                .ce-countdown--theme-10 .ce-unit-wrap>span {
                    font-size: .75em;
                    margin: .5em 0 0;
                }

                .ce-countdown--theme-10 {
                    margin: .75em;
                }

                .ce-countdown--theme-10 div.digits {
                    font-size: 30px;
                    height: 50px;
                    line-height: 50px;
                    margin: 0 1px;
                    width: 26px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div {
                    font-size: 30px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div.up:after {
                    height: 2px;
                    top: 24px;
                }

                .ce-countdown--theme-10 div.digits div.digits-inner div.flip-wrap div div.inn {
                    font-size: 30px;
                    left: 0;
                }
            }

            .ce-countdown--theme-11 {
                background: url('../media/theme-11/background.png') no-repeat center center;
                background-size: cover;
                display: table;
                font-family: 'Peralta', cursive;
                font-size: 0;
                margin: 0 auto;
                position: relative;
                text-align: center;
            }

            .ce-countdown--theme-11:after {
                background: url('../media/theme-11/snow.png') repeat;
                content: '';
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 2;
            }

            .ce-countdown--theme-11 .ce-duration,
            .ce-countdown--theme-11 .ce-oncomplete {
                display: table-cell;
                vertical-align: middle;
            }

            .ce-countdown--theme-11 .ce-col {
                color: #bb202e;
                display: inline-block;
                font-size: 110px;
                margin: 0 .4em;
            }

            .ce-countdown--theme-11 p,
            .ce-countdown--theme-11 span {
                text-shadow: -.02em .05em 0 #761d25, .08em .08em 0 #184141;
            }

            .ce-countdown--theme-11 .ce-image {
                display: inline;
            }

            .ce-countdown--theme-11 .ce-image img {
                height: auto;
                margin-top: 40px;
                vertical-align: top;
                width: 55px;
            }

            .ce-countdown--theme-11 .ce-days-label,
            .ce-countdown--theme-11 .ce-hours-label,
            .ce-countdown--theme-11 .ce-minutes-label {
                display: block;
                font-size: 24px;
                margin-top: -10px;
                text-transform: uppercase;
            }

            .ce-countdown--theme-11 .ce-oncomplete {
                color: #bb202e;
                display: none;
                font-size: 40px;
                padding: 0 30px 60px;
                text-transform: uppercase;
            }

            .ce-countdown--theme-11 .ce-oncomplete.shake {
                display: table-cell;
            }

            .ce-countdown--theme-11 .ce-oncomplete img {
                display: inline-block;
                margin: 0 10px;
                vertical-align: top;
            }

            .ce-countdown--theme-11 .ce-oncomplete p {
                display: inline-block;
                margin: 0;
                padding: 30px 0;
            }

            .ce-countdown--theme-11 .ce-oncomplete span {
                display: inline-block;
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            .ce-countdown--theme-11 .ce-oncomplete.shake span {
                -webkit-animation: shake 1s infinite;
                -moz-animation: shake 1s infinite;
                animation: shake 1s infinite;
            }

            @-webkit-keyframes shake {
                0% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }

                10%,
                20% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }

                30%,
                50%,
                70%,
                90% {
                    -webkit-transform: rotate3d(0, 0, 1, -20deg);
                    transform: rotate3d(0, 0, 1, -20deg);
                }

                40%,
                60%,
                80% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }

                100% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }
            }

            @keyframes shake {
                0% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }

                10%,
                20% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }

                30%,
                50%,
                70%,
                90% {
                    -webkit-transform: rotate3d(0, 0, 1, -20deg);
                    transform: rotate3d(0, 0, 1, -20deg);
                }

                40%,
                60%,
                80% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }

                100% {
                    -webkit-transform: rotate3d(0, 0, 1, -10deg);
                    transform: rotate3d(0, 0, 1, -10deg);
                }
            }

            @media all and (max-width: 900px) {
                .ce-countdown--theme-11 .ce-col {
                    font-size: 60px;
                }

                .ce-countdown--theme-11 .ce-image img {
                    margin-top: 15px;
                    width: 35px;
                }

                .ce-countdown--theme-11 .ce-days-label,
                .ce-countdown--theme-11 .ce-hours-label,
                .ce-countdown--theme-11 .ce-minutes-label {
                    font-size: 16px;
                }
            }

            @media all and (max-width: 600px) {
                .ce-countdown--theme-11 .ce-col {
                    font-size: 35px;
                }

                .ce-countdown--theme-11 .ce-image img {
                    margin-top: 10px;
                    width: 20px;
                }

                .ce-countdown--theme-11 .ce-days-label,
                .ce-countdown--theme-11 .ce-hours-label,
                .ce-countdown--theme-11 .ce-minutes-label {
                    font-size: 10px;
                    margin-top: -5px;
                }

                .ce-countdown--theme-11 .ce-oncomplete {
                    font-size: 30px;
                }

                .ce-countdown--theme-11 .ce-oncomplete p {
                    display: block;
                }
            }

            .ce-countdown-wrap--theme-12 {
                background: url('../media/theme-12/bg-video-fallback.jpg') no-repeat 50% 50%;
                background-size: cover;
                height: 100%;
                position: relative;
                width: 100%;
            }

            .ce-countdown-wrap--theme-12::after {
                -webkit-animation: ce-countdown-colorchange--theme-12 10s linear infinite alternate;
                -moz-animation: ce-countdown-colorchange--theme-12 10s linear infinite alternate;
                -o-animation: ce-countdown-colorchange--theme-12 10s linear infinite alternate;
                animation: ce-countdown-colorchange--theme-12 10s linear infinite alternate;
                content: '';
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 1;
            }

            .ce-ie .ce-countdown-wrap--theme-12::after {
                display: none;
            }

            @-webkit-keyframes ce-countdown-colorchange--theme-12 {
                0% {
                    background-color: rgba(80, 0, 190, .4);
                }

                25% {
                    background-color: rgba(0, 98, 190, .4);
                }

                75% {
                    background-color: rgba(0, 156, 190, .4);
                }

                100% {
                    background-color: rgba(80, 0, 190, .4);
                }
            }

            @-moz-keyframes ce-countdown-colorchange--theme-12 {
                0% {
                    background-color: rgba(80, 0, 190, .4);
                }

                25% {
                    background-color: rgba(0, 98, 190, .4);
                }

                75% {
                    background-color: rgba(0, 156, 190, .4);
                }

                100% {
                    background-color: rgba(80, 0, 190, .4);
                }
            }

            @-o-keyframes ce-countdown-colorchange--theme-12 {
                0% {
                    background-color: rgba(80, 0, 190, .4);
                }

                25% {
                    background-color: rgba(0, 98, 190, .4);
                }

                75% {
                    background-color: rgba(0, 156, 190, .4);
                }

                100% {
                    background-color: rgba(80, 0, 190, .4);
                }
            }

            @keyframes ce-countdown-colorchange--theme-12 {
                0% {
                    background-color: rgba(80, 0, 190, .4);
                }

                25% {
                    background-color: rgba(0, 98, 190, .4);
                }

                75% {
                    background-color: rgba(0, 156, 190, .4);
                }

                100% {
                    background-color: rgba(80, 0, 190, .4);
                }
            }

            .ce-countdown--theme-12 {
                color: #fff;
                font-family: 'Josefin Slab', serif;
                font-size: 0;
                font-weight: 400;
                position: relative;
                z-index: 2;
            }

            .ce-countdown--theme-12 .ce-col {
                display: inline-block;
                margin: 20px 0;
            }

            .ce-countdown--theme-12 .ce-digits {
                display: inline-block;
                margin: 0 18px;
            }

            .ce-countdown--theme-12 .ce-digits span {
                border-radius: 50px;
                border: 1px solid #fff;
                display: inline-block;
                font-size: 80px;
                font-weight: 100;
                height: 100px;
                line-height: 100px;
                margin: 0 7px;
                position: relative;
                text-align: center;
                width: 100px;
            }

            .ce-countdown--theme-12 .ce-days-label,
            .ce-countdown--theme-12 .ce-hours-label,
            .ce-countdown--theme-12 .ce-minutes-label,
            .ce-countdown--theme-12 .ce-seconds-label,
            .ce-countdown--theme-12 .ce-dseconds-label,
            .ce-countdown--theme-12 .ce-mseconds-label {
                display: block;
                font-size: 20px;
                font-weight: 400;
                letter-spacing: 4px;
                margin: 25px 0 0;
                text-align: center;
                text-transform: uppercase;
            }

            .ce-countdown-bg-video--theme-12 {
                background-size: cover;
                background: url('../media/theme-12/bg-video-fallback.jpg') no-repeat;
                bottom: 0;
                height: auto;
                min-height: 100%;
                min-width: 100%;
                position: absolute;
                right: 0;
                width: auto;
                z-index: 0;
            }

            @media all and (max-width: 820px) {
                .ce-countdown--theme-12 .ce-digits {
                    margin: 0 15px;
                }

                .ce-countdown--theme-12 .ce-digits span {
                    border-radius: 40px;
                    font-size: 60px;
                    font-weight: 100;
                    height: 80px;
                    line-height: 80px;
                    margin: 0 6px;
                    width: 80px;
                }

                .ce-countdown--theme-12 .ce-days-label,
                .ce-countdown--theme-12 .ce-hours-label,
                .ce-countdown--theme-12 .ce-minutes-label,
                .ce-countdown--theme-12 .ce-seconds-label,
                .ce-countdown--theme-12 .ce-dseconds-label,
                .ce-countdown--theme-12 .ce-mseconds-label {
                    font-size: 18px;
                    letter-spacing: 4px;
                    margin: 20px 0 0;
                }
            }

            @media all and (max-width: 480px) {
                .ce-countdown--theme-12 .ce-col {
                    margin: 15px 0;
                }

                .ce-countdown--theme-12 .ce-digits span {
                    border-radius: 30px;
                    font-size: 30px;
                    font-weight: 400;
                    height: 60px;
                    line-height: 65px;
                    margin: 0 5px;
                    width: 60px;
                }

                .ce-countdown--theme-12 .ce-days-label,
                .ce-countdown--theme-12 .ce-hours-label,
                .ce-countdown--theme-12 .ce-minutes-label,
                .ce-countdown--theme-12 .ce-seconds-label,
                .ce-countdown--theme-12 .ce-dseconds-label,
                .ce-countdown--theme-12 .ce-mseconds-label {
                    font-size: 12px;
                    letter-spacing: 4px;
                    margin: 10px 0 0;
                }
            }

            .ce-clearfix:before,
            .ce-clearfix:after {
                content: " ";
                display: table;
            }

            .ce-clearfix:after {
                clear: both;
            }

            .fl-node-627e69d11f7ac .ce-countdown--theme-9 .ce-digit,
            .fl-node-627e69d11f7ac .ce-countdown--theme-9 .ce-label {
                color: #f0f0f0 !important;
                display: block;
            }

            .ce-countdown--theme-9 .ce-digit {
                font-size: 40px;
            }

            .ce-countdown--theme-9 .ce-label {
                font-size: 15px;
                margin-top: 15px;
                text-transform: uppercase;
            }

            .fl-node-627e69d11f7ac .digit {
                color: #f0f0f0 !important;
                background-color: #363636 !important;
            }

            .fl-node-627e69d11f7ac .digit.static {
                background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.5, #363636), color-stop(0.5, #282828));
            }

            .fl-node-627e69d11f7ac .countDiv:before,
            .countDiv:after {
                background-color: #f0f0f0 !important;
            }

            .fl-node-627e69d11f7ac .countdownHolder {
                width: auto;
            }

            .fl-animated.fl-fade-up {
                animation: fl-fade-up 1s ease;
                -webkit-animation: fl-fade-up 1s ease;
            }

            @-webkit-keyframes fl-fade-up {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 50%, 0);
                    transform: translate3d(0, 50%, 0);
                }

                to {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes fl-fade-up {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 50%, 0);
                    transform: translate3d(0, 50%, 0);
                }

                to {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }

            .fl-node-6303dda6d0e31>.fl-module-content {
                margin-top: 0px;
                margin-right: 5px;
                margin-bottom: -20px;
            }

            @media (max-width: 768px) {
                .fl-node-6303dda6d0e31>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button,
            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button:visited {
                background: #278b96;
                border: 2px solid #1b7f8a;
                background-color: rgba(39, 139, 150, 0);
            }

            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button,
            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button:visited,
            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button *,
            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button:visited * {
                color: #ffffff;
            }

            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button:hover,
            .fl-builder-content .fl-node-6303de4e4aeb6 a.fl-button:focus {
                background: #278b96;
                border: 2px solid #1b7f8a;
                background-color: rgba(39, 139, 150, 0);
                border-color: #278b96
            }

            @media (max-width: 768px) {
                .fl-node-6303de4e4aeb6 .fl-button-wrap {
                    text-align: center;
                }
            }

            .fl-node-627e69d11f720>.fl-module-content {
                margin-top: 50px;
                margin-right: 5px;
                margin-bottom: 20px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f720>.fl-module-content {
                    margin-top: 20px;
                }
            }

            .fl-animated.fl-fade-right {
                animation: fl-fade-right 1s ease;
                -webkit-animation: fl-fade-right 1s ease;
            }

            @-webkit-keyframes fl-fade-right {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(50%, 0, 0);
                    transform: translate3d(50%, 0, 0);
                }

                to {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes fl-fade-right {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(50%, 0, 0);
                    transform: translate3d(50%, 0, 0);
                }

                to {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }

            @media (max-width: 768px) {
                .fl-module-icon {
                    text-align: center !important;
                }
            }

            .fl-node-627e69d11f6f2 .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6f2 .fl-module-content .fl-icon i:before {
                color: #ffffff;
            }

            a[x-apple-data-detectors-type="telephone"] {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span span a {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span a {
                color: #ffffff;
            }

            .fl-node-627e69d11f6f2 .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6f2 .fl-module-content .fl-icon i:before {
                font-size: 50px;
            }

            .fl-node-627e69d11f6f2 .fl-module-content .fl-icon-text {
                height: 87.5px;
            }

            .fl-node-627e69d11f6f2.fl-module-icon {
                text-align: center;
            }

            .fl-node-627e69d11f6f2>.fl-module-content {
                margin-bottom: -10px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f6f2>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .fl-node-627e69d11f735 .fl-rich-text,
            .fl-node-627e69d11f735 .fl-rich-text * {
                color: #ffffff;
            }

            .fl-node-627e69d11f6f5 .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6f5 .fl-module-content .fl-icon i:before {
                color: #ffffff;
            }

            a[x-apple-data-detectors-type="telephone"] {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span span a {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span a {
                color: #ffffff;
            }

            .fl-node-627e69d11f6f5 .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6f5 .fl-module-content .fl-icon i:before {
                font-size: 50px;
            }

            .fl-node-627e69d11f6f5 .fl-module-content .fl-icon-text {
                height: 87.5px;
            }

            .fl-node-627e69d11f6f5.fl-module-icon {
                text-align: center;
            }

            .fl-node-627e69d11f6f5>.fl-module-content {
                margin-bottom: -10px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f6f5>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .fl-node-627e69d11f6f9 .fl-rich-text,
            .fl-node-627e69d11f6f9 .fl-rich-text * {
                color: #ffffff;
            }

            .fl-node-627e69d11f6ed .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6ed .fl-module-content .fl-icon i:before {
                color: #ffffff;
            }

            a[x-apple-data-detectors-type="telephone"] {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span span a {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span a {
                color: #ffffff;
            }

            .fl-node-627e69d11f6ed .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6ed .fl-module-content .fl-icon i:before {
                font-size: 50px;
            }

            .fl-node-627e69d11f6ed .fl-module-content .fl-icon-text {
                height: 87.5px;
            }

            .fl-node-627e69d11f6ed.fl-module-icon {
                text-align: center;
            }

            .fl-node-627e69d11f6ed>.fl-module-content {
                margin-bottom: -10px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f6ed>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .fl-node-627e69d11f73c .fl-rich-text,
            .fl-node-627e69d11f73c .fl-rich-text * {
                color: #ffffff;
            }

            .fl-node-627e69d11f6fc .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6fc .fl-module-content .fl-icon i:before {
                color: #ffffff;
            }

            a[x-apple-data-detectors-type="telephone"] {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span span a {
                color: #ffffff;
            }

            .fl-icon-text h3 strong span a {
                color: #ffffff;
            }

            .fl-node-627e69d11f6fc .fl-module-content .fl-icon i,
            .fl-node-627e69d11f6fc .fl-module-content .fl-icon i:before {
                font-size: 50px;
            }

            .fl-node-627e69d11f6fc .fl-module-content .fl-icon-text {
                height: 87.5px;
            }

            .fl-node-627e69d11f6fc.fl-module-icon {
                text-align: center;
            }

            .fl-node-627e69d11f6fc>.fl-module-content {
                margin-bottom: -10px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f6fc>.fl-module-content {
                    margin-bottom: 20px;
                }
            }

            .fl-node-627e69d11f738 .fl-rich-text,
            .fl-node-627e69d11f738 .fl-rich-text * {
                color: #ffffff;
            }

            .fl-node-6306430c2f344 .fl-photo {
                text-align: center;
            }

            .fl-node-630645039c3da .fl-photo {
                text-align: center;
            }

            .fl-node-63064520d303b .fl-photo {
                text-align: center;
            }

            .fl-node-6306453949c76 .fl-photo {
                text-align: center;
            }

            .fl-node-63978ef5f25b8>.fl-module-content {
                margin-top: -30px;
                margin-right: 5px;
                margin-bottom: -25px;
            }

            @media (max-width: 768px) {
                .fl-node-63978ef5f25b8>.fl-module-content {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }
            }

            .fl-node-63978ef5f25bf>.fl-module-content {
                margin-top: -10px;
                margin-right: 5px;
                margin-bottom: -25px;
            }

            @media (max-width: 768px) {
                .fl-node-63978ef5f25bf>.fl-module-content {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }
            }

            .fl-node-63978ef5f25c5>.fl-module-content {
                margin-top: 0px;
                margin-right: 5px;
                margin-bottom: 0px;
            }

            @media screen and (max-width: 1024px) {
                .btn-mobile {
                    display: block;
                }

                .btn-desktop {
                    display: none;
                }
            }

            @media screen and (min-width: 1024px) {
                .btn-mobile {
                    display: none;
                }

                .btn-desktop {
                    display: block;
                }
            }

            .fundo-fixo {
                position: fixed;
                top: 0%;
                width: 100%;
                background-color: #FFFFFF;
                height: 20%;
                left: 0%;
                z-index: 999;
                transition: 0s;
            }

            .fl-button-fixo {
                width: 80% !important;
                font-size: 20px !important;
                margin-top: 30px !important;
                transition: 0s !important;
            }

            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button,
            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button:visited {
                font-size: 20px;
                line-height: 22px;
                padding: 12px 24px;
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                transition: 0.5s;
                background: #0071a5;
                border: 1px solid #006599;
                background: -moz-linear-gradient(top, #1e8fc3 0%, #0071a5 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e8fc3), color-stop(100%, #0071a5));
                background: -webkit-linear-gradient(top, #1e8fc3 0%, #0071a5 100%);
                background: -o-linear-gradient(top, #1e8fc3 0%, #0071a5 100%);
                background: -ms-linear-gradient(top, #1e8fc3 0%, #0071a5 100%);
                background: linear-gradient(to bottom, #1e8fc3 0%, #0071a5 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e8fc3', endColorstr='#0071a5', GradientType=0);
            }

            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button,
            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button:visited,
            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button *,
            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button:visited * {
                color: #ffffff;
            }

            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button:hover,
            .fl-builder-content .fl-node-63978ef5f25d9 a.fl-button:focus {}

            .fl-node-627e69d11f5df>.fl-module-content {
                margin-top: 30px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f5df>.fl-module-content {
                    margin-top: 20px;
                }
            }

            .fl-icon-group .fl-icon {
                display: inline-block;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon i,
            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon i:before {
                color: #999999;
            }

            a[x-apple-data-detectors-type="telephone"] {
                color: #999999;
            }

            .fl-icon-text h3 strong span span a {
                color: #999999;
            }

            .fl-icon-text h3 strong span a {
                color: #999999;
            }

            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon i:hover,
            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon i:hover:before,
            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon a:hover i,
            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon a:hover i:before {
                color: #fb704e;
            }

            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon i,
            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon i:before {
                font-size: 15px;
            }

            .fl-node-627e69d11f5e3 .fl-module-content .fl-icon-text {
                height: 26.25px;
            }

            .fl-node-627e69d11f5e3 .fl-icon {
                margin-left: 5px;
                margin-right: 5px
            }

            .fl-node-627e69d11f5e3 .fl-icon-group {
                text-align: center;
            }

            .fl-node-627e69d11f5e3>.fl-module-content {
                margin-top: -20px;
            }

            @media (max-width: 768px) {
                .fl-node-627e69d11f5e3>.fl-module-content {
                    margin-top: 20px;
                }
            }
        </style>



        <!-- start of imported css -->
        <style>
            body {
                overflow-x: hidden !important
            }

            body {
                font-smoothing: antialiased;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                margin: 0 !important;
                font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif
            }

            @media screen and (max-width:1024px) {
                .fl-row-content {
                    max-padding: 25px !important
                }
            }

            @media screen and (max-width:1024px) {
                .linha_fixa .fl-row-content {
                    padding: 0 !important;
                    padding-top: 10px
                }
            }

            .alignleft {
                float: left;
                margin-right: 10px
            }

            .alignright {
                float: right;
                margin-left: 10px
            }

            .paragrafo iframe {
                display: block;
                background: #000;
                border: 0;
                min-height: 400px;
                width: 100%
            }

            .checkbox input[type=checkbox],
            .checkbox-inline input[type=checkbox],
            .radio input[type=radio],
            .radio-inline input[type=radio] {
                position: absolute;
                margin-left: 0
            }

            /*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
            /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
            html {
                font-family: sans-serif;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%
            }

            body {
                margin: 0
            }

            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            main,
            menu,
            nav,
            section,
            summary {
                display: block
            }

            audio,
            canvas,
            progress,
            video {
                display: inline-block;
                vertical-align: baseline
            }

            audio:not([controls]) {
                display: none;
                height: 0
            }

            [hidden],
            template {
                display: none
            }

            a {
                background-color: transparent
            }

            a:active,
            a:hover {
                outline: 0
            }

            abbr[title] {
                border-bottom: 1px dotted
            }

            b,
            strong {
                font-weight: 700
            }

            dfn {
                font-style: italic
            }

            h1 {
                margin: .67em 0;
                font-size: 2em
            }

            mark {
                color: #000;
                background: #ff0
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                position: relative;
                font-size: 75%;
                line-height: 0;
                vertical-align: baseline
            }

            sup {
                top: -.5em
            }

            sub {
                bottom: -.25em
            }

            img {
                border: 0
            }

            svg:not(:root) {
                overflow: hidden
            }

            figure {
                margin: 1em 40px
            }

            hr {
                height: 0;
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box
            }

            pre {
                overflow: auto
            }

            code,
            kbd,
            pre,
            samp {
                font-family: monospace, monospace;
                font-size: 1em
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                margin: 0;
                font: inherit;
                color: inherit
            }

            button {
                overflow: visible
            }

            button,
            select {
                text-transform: none
            }

            button,
            html input[type=button],
            input[type=reset],
            input[type=submit] {
                -webkit-appearance: button;
                cursor: pointer
            }

            button[disabled],
            html input[disabled] {
                cursor: default
            }

            button::-moz-focus-inner,
            input::-moz-focus-inner {
                padding: 0;
                border: 0
            }

            input {
                line-height: normal
            }

            input[type=checkbox],
            input[type=radio] {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 0
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                height: auto
            }

            input[type=search] {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                -webkit-appearance: textfield
            }

            input[type=search]::-webkit-search-cancel-button,
            input[type=search]::-webkit-search-decoration {
                -webkit-appearance: none
            }

            fieldset {
                padding: .35em .625em .75em;
                margin: 0 2px;
                border: 1px solid silver
            }

            legend {
                padding: 0;
                border: 0
            }

            textarea {
                overflow: auto
            }

            optgroup {
                font-weight: 700
            }

            table {
                border-spacing: 0;
                border-collapse: collapse
            }

            td,
            th {
                padding: 0
            }

            /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
            @media print {

                *,
                :after,
                :before {
                    color: #000 !important;
                    text-shadow: none !important;
                    background: 0 !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important
                }

                a,
                a:visited {
                    text-decoration: underline
                }

                a[href]:after {
                    content: " (" attr(href) ")"
                }

                abbr[title]:after {
                    content: " (" attr(title) ")"
                }

                a[href^="javascript:"]:after,
                a[href^="#"]:after {
                    content: ""
                }

                blockquote,
                pre {
                    border: 1px solid #999;
                    page-break-inside: avoid
                }

                thead {
                    display: table-header-group
                }

                img,
                tr {
                    page-break-inside: avoid
                }

                img {
                    max-width: 100% !important
                }

                h2,
                h3,
                p {
                    orphans: 3;
                    widows: 3
                }

                h2,
                h3 {
                    page-break-after: avoid
                }

                .navbar {
                    display: none
                }

                .btn>.caret,
                .dropup>.btn>.caret {
                    border-top-color: #000 !important
                }

                .label {
                    border: 1px solid #000
                }

                .table {
                    border-collapse: collapse !important
                }

                .table td,
                .table th {
                    background-color: #fff !important
                }

                .table-bordered td,
                .table-bordered th {
                    border: 1px solid #ddd !important
                }
            }

            @font-face {
                font-family: 'Glyphicons Halflings';
                src: url(../fonts/glyphicons-halflings-regular.eot);
                src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'), url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'), url(../fonts/glyphicons-halflings-regular.woff) format('woff'), url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
            }

            .glyphicon {
                position: relative;
                top: 1px;
                display: inline-block;
                font-family: 'Glyphicons Halflings';
                font-style: normal;
                font-weight: 400;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .glyphicon-asterisk:before {
                content: "\2a"
            }

            .glyphicon-plus:before {
                content: "\2b"
            }

            .glyphicon-eur:before,
            .glyphicon-euro:before {
                content: "\20ac"
            }

            .glyphicon-minus:before {
                content: "\2212"
            }

            .glyphicon-cloud:before {
                content: "\2601"
            }

            .glyphicon-envelope:before {
                content: "\2709"
            }

            .glyphicon-pencil:before {
                content: "\270f"
            }

            .glyphicon-glass:before {
                content: "\e001"
            }

            .glyphicon-music:before {
                content: "\e002"
            }

            .glyphicon-search:before {
                content: "\e003"
            }

            .glyphicon-heart:before {
                content: "\e005"
            }

            .glyphicon-star:before {
                content: "\e006"
            }

            .glyphicon-star-empty:before {
                content: "\e007"
            }

            .glyphicon-user:before {
                content: "\e008"
            }

            .glyphicon-film:before {
                content: "\e009"
            }

            .glyphicon-th-large:before {
                content: "\e010"
            }

            .glyphicon-th:before {
                content: "\e011"
            }

            .glyphicon-th-list:before {
                content: "\e012"
            }

            .glyphicon-ok:before {
                content: "\e013"
            }

            .glyphicon-remove:before {
                content: "\e014"
            }

            .glyphicon-zoom-in:before {
                content: "\e015"
            }

            .glyphicon-zoom-out:before {
                content: "\e016"
            }

            .glyphicon-off:before {
                content: "\e017"
            }

            .glyphicon-signal:before {
                content: "\e018"
            }

            .glyphicon-cog:before {
                content: "\e019"
            }

            .glyphicon-trash:before {
                content: "\e020"
            }

            .glyphicon-home:before {
                content: "\e021"
            }

            .glyphicon-file:before {
                content: "\e022"
            }

            .glyphicon-time:before {
                content: "\e023"
            }

            .glyphicon-road:before {
                content: "\e024"
            }

            .glyphicon-download-alt:before {
                content: "\e025"
            }

            .glyphicon-download:before {
                content: "\e026"
            }

            .glyphicon-upload:before {
                content: "\e027"
            }

            .glyphicon-inbox:before {
                content: "\e028"
            }

            .glyphicon-play-circle:before {
                content: "\e029"
            }

            .glyphicon-repeat:before {
                content: "\e030"
            }

            .glyphicon-refresh:before {
                content: "\e031"
            }

            .glyphicon-list-alt:before {
                content: "\e032"
            }

            .glyphicon-lock:before {
                content: "\e033"
            }

            .glyphicon-flag:before {
                content: "\e034"
            }

            .glyphicon-headphones:before {
                content: "\e035"
            }

            .glyphicon-volume-off:before {
                content: "\e036"
            }

            .glyphicon-volume-down:before {
                content: "\e037"
            }

            .glyphicon-volume-up:before {
                content: "\e038"
            }

            .glyphicon-qrcode:before {
                content: "\e039"
            }

            .glyphicon-barcode:before {
                content: "\e040"
            }

            .glyphicon-tag:before {
                content: "\e041"
            }

            .glyphicon-tags:before {
                content: "\e042"
            }

            .glyphicon-book:before {
                content: "\e043"
            }

            .glyphicon-bookmark:before {
                content: "\e044"
            }

            .glyphicon-print:before {
                content: "\e045"
            }

            .glyphicon-camera:before {
                content: "\e046"
            }

            .glyphicon-font:before {
                content: "\e047"
            }

            .glyphicon-bold:before {
                content: "\e048"
            }

            .glyphicon-italic:before {
                content: "\e049"
            }

            .glyphicon-text-height:before {
                content: "\e050"
            }

            .glyphicon-text-width:before {
                content: "\e051"
            }

            .glyphicon-align-left:before {
                content: "\e052"
            }

            .glyphicon-align-center:before {
                content: "\e053"
            }

            .glyphicon-align-right:before {
                content: "\e054"
            }

            .glyphicon-align-justify:before {
                content: "\e055"
            }

            .glyphicon-list:before {
                content: "\e056"
            }

            .glyphicon-indent-left:before {
                content: "\e057"
            }

            .glyphicon-indent-right:before {
                content: "\e058"
            }

            .glyphicon-facetime-video:before {
                content: "\e059"
            }

            .glyphicon-picture:before {
                content: "\e060"
            }

            .glyphicon-map-marker:before {
                content: "\e062"
            }

            .glyphicon-adjust:before {
                content: "\e063"
            }

            .glyphicon-tint:before {
                content: "\e064"
            }

            .glyphicon-edit:before {
                content: "\e065"
            }

            .glyphicon-share:before {
                content: "\e066"
            }

            .glyphicon-check:before {
                content: "\e067"
            }

            .glyphicon-move:before {
                content: "\e068"
            }

            .glyphicon-step-backward:before {
                content: "\e069"
            }

            .glyphicon-fast-backward:before {
                content: "\e070"
            }

            .glyphicon-backward:before {
                content: "\e071"
            }

            .glyphicon-play:before {
                content: "\e072"
            }

            .glyphicon-pause:before {
                content: "\e073"
            }

            .glyphicon-stop:before {
                content: "\e074"
            }

            .glyphicon-forward:before {
                content: "\e075"
            }

            .glyphicon-fast-forward:before {
                content: "\e076"
            }

            .glyphicon-step-forward:before {
                content: "\e077"
            }

            .glyphicon-eject:before {
                content: "\e078"
            }

            .glyphicon-chevron-left:before {
                content: "\e079"
            }

            .glyphicon-chevron-right:before {
                content: "\e080"
            }

            .glyphicon-plus-sign:before {
                content: "\e081"
            }

            .glyphicon-minus-sign:before {
                content: "\e082"
            }

            .glyphicon-remove-sign:before {
                content: "\e083"
            }

            .glyphicon-ok-sign:before {
                content: "\e084"
            }

            .glyphicon-question-sign:before {
                content: "\e085"
            }

            .glyphicon-info-sign:before {
                content: "\e086"
            }

            .glyphicon-screenshot:before {
                content: "\e087"
            }

            .glyphicon-remove-circle:before {
                content: "\e088"
            }

            .glyphicon-ok-circle:before {
                content: "\e089"
            }

            .glyphicon-ban-circle:before {
                content: "\e090"
            }

            .glyphicon-arrow-left:before {
                content: "\e091"
            }

            .glyphicon-arrow-right:before {
                content: "\e092"
            }

            .glyphicon-arrow-up:before {
                content: "\e093"
            }

            .glyphicon-arrow-down:before {
                content: "\e094"
            }

            .glyphicon-share-alt:before {
                content: "\e095"
            }

            .glyphicon-resize-full:before {
                content: "\e096"
            }

            .glyphicon-resize-small:before {
                content: "\e097"
            }

            .glyphicon-exclamation-sign:before {
                content: "\e101"
            }

            .glyphicon-gift:before {
                content: "\e102"
            }

            .glyphicon-leaf:before {
                content: "\e103"
            }

            .glyphicon-fire:before {
                content: "\e104"
            }

            .glyphicon-eye-open:before {
                content: "\e105"
            }

            .glyphicon-eye-close:before {
                content: "\e106"
            }

            .glyphicon-warning-sign:before {
                content: "\e107"
            }

            .glyphicon-plane:before {
                content: "\e108"
            }

            .glyphicon-calendar:before {
                content: "\e109"
            }

            .glyphicon-random:before {
                content: "\e110"
            }

            .glyphicon-comment:before {
                content: "\e111"
            }

            .glyphicon-magnet:before {
                content: "\e112"
            }

            .glyphicon-chevron-up:before {
                content: "\e113"
            }

            .glyphicon-chevron-down:before {
                content: "\e114"
            }

            .glyphicon-retweet:before {
                content: "\e115"
            }

            .glyphicon-shopping-cart:before {
                content: "\e116"
            }

            .glyphicon-folder-close:before {
                content: "\e117"
            }

            .glyphicon-folder-open:before {
                content: "\e118"
            }

            .glyphicon-resize-vertical:before {
                content: "\e119"
            }

            .glyphicon-resize-horizontal:before {
                content: "\e120"
            }

            .glyphicon-hdd:before {
                content: "\e121"
            }

            .glyphicon-bullhorn:before {
                content: "\e122"
            }

            .glyphicon-bell:before {
                content: "\e123"
            }

            .glyphicon-certificate:before {
                content: "\e124"
            }

            .glyphicon-thumbs-up:before {
                content: "\e125"
            }

            .glyphicon-thumbs-down:before {
                content: "\e126"
            }

            .glyphicon-hand-right:before {
                content: "\e127"
            }

            .glyphicon-hand-left:before {
                content: "\e128"
            }

            .glyphicon-hand-up:before {
                content: "\e129"
            }

            .glyphicon-hand-down:before {
                content: "\e130"
            }

            .glyphicon-circle-arrow-right:before {
                content: "\e131"
            }

            .glyphicon-circle-arrow-left:before {
                content: "\e132"
            }

            .glyphicon-circle-arrow-up:before {
                content: "\e133"
            }

            .glyphicon-circle-arrow-down:before {
                content: "\e134"
            }

            .glyphicon-globe:before {
                content: "\e135"
            }

            .glyphicon-wrench:before {
                content: "\e136"
            }

            .glyphicon-tasks:before {
                content: "\e137"
            }

            .glyphicon-filter:before {
                content: "\e138"
            }

            .glyphicon-briefcase:before {
                content: "\e139"
            }

            .glyphicon-fullscreen:before {
                content: "\e140"
            }

            .glyphicon-dashboard:before {
                content: "\e141"
            }

            .glyphicon-paperclip:before {
                content: "\e142"
            }

            .glyphicon-heart-empty:before {
                content: "\e143"
            }

            .glyphicon-link:before {
                content: "\e144"
            }

            .glyphicon-phone:before {
                content: "\e145"
            }

            .glyphicon-pushpin:before {
                content: "\e146"
            }

            .glyphicon-usd:before {
                content: "\e148"
            }

            .glyphicon-gbp:before {
                content: "\e149"
            }

            .glyphicon-sort:before {
                content: "\e150"
            }

            .glyphicon-sort-by-alphabet:before {
                content: "\e151"
            }

            .glyphicon-sort-by-alphabet-alt:before {
                content: "\e152"
            }

            .glyphicon-sort-by-order:before {
                content: "\e153"
            }

            .glyphicon-sort-by-order-alt:before {
                content: "\e154"
            }

            .glyphicon-sort-by-attributes:before {
                content: "\e155"
            }

            .glyphicon-sort-by-attributes-alt:before {
                content: "\e156"
            }

            .glyphicon-unchecked:before {
                content: "\e157"
            }

            .glyphicon-expand:before {
                content: "\e158"
            }

            .glyphicon-collapse-down:before {
                content: "\e159"
            }

            .glyphicon-collapse-up:before {
                content: "\e160"
            }

            .glyphicon-log-in:before {
                content: "\e161"
            }

            .glyphicon-flash:before {
                content: "\e162"
            }

            .glyphicon-log-out:before {
                content: "\e163"
            }

            .glyphicon-new-window:before {
                content: "\e164"
            }

            .glyphicon-record:before {
                content: "\e165"
            }

            .glyphicon-save:before {
                content: "\e166"
            }

            .glyphicon-open:before {
                content: "\e167"
            }

            .glyphicon-saved:before {
                content: "\e168"
            }

            .glyphicon-import:before {
                content: "\e169"
            }

            .glyphicon-export:before {
                content: "\e170"
            }

            .glyphicon-send:before {
                content: "\e171"
            }

            .glyphicon-floppy-disk:before {
                content: "\e172"
            }

            .glyphicon-floppy-saved:before {
                content: "\e173"
            }

            .glyphicon-floppy-remove:before {
                content: "\e174"
            }

            .glyphicon-floppy-save:before {
                content: "\e175"
            }

            .glyphicon-floppy-open:before {
                content: "\e176"
            }

            .glyphicon-credit-card:before {
                content: "\e177"
            }

            .glyphicon-transfer:before {
                content: "\e178"
            }

            .glyphicon-cutlery:before {
                content: "\e179"
            }

            .glyphicon-header:before {
                content: "\e180"
            }

            .glyphicon-compressed:before {
                content: "\e181"
            }

            .glyphicon-earphone:before {
                content: "\e182"
            }

            .glyphicon-phone-alt:before {
                content: "\e183"
            }

            .glyphicon-tower:before {
                content: "\e184"
            }

            .glyphicon-stats:before {
                content: "\e185"
            }

            .glyphicon-sd-video:before {
                content: "\e186"
            }

            .glyphicon-hd-video:before {
                content: "\e187"
            }

            .glyphicon-subtitles:before {
                content: "\e188"
            }

            .glyphicon-sound-stereo:before {
                content: "\e189"
            }

            .glyphicon-sound-dolby:before {
                content: "\e190"
            }

            .glyphicon-sound-5-1:before {
                content: "\e191"
            }

            .glyphicon-sound-6-1:before {
                content: "\e192"
            }

            .glyphicon-sound-7-1:before {
                content: "\e193"
            }

            .glyphicon-copyright-mark:before {
                content: "\e194"
            }

            .glyphicon-registration-mark:before {
                content: "\e195"
            }

            .glyphicon-cloud-download:before {
                content: "\e197"
            }

            .glyphicon-cloud-upload:before {
                content: "\e198"
            }

            .glyphicon-tree-conifer:before {
                content: "\e199"
            }

            .glyphicon-tree-deciduous:before {
                content: "\e200"
            }

            .glyphicon-cd:before {
                content: "\e201"
            }

            .glyphicon-save-file:before {
                content: "\e202"
            }

            .glyphicon-open-file:before {
                content: "\e203"
            }

            .glyphicon-level-up:before {
                content: "\e204"
            }

            .glyphicon-copy:before {
                content: "\e205"
            }

            .glyphicon-paste:before {
                content: "\e206"
            }

            .glyphicon-alert:before {
                content: "\e209"
            }

            .glyphicon-equalizer:before {
                content: "\e210"
            }

            .glyphicon-king:before {
                content: "\e211"
            }

            .glyphicon-queen:before {
                content: "\e212"
            }

            .glyphicon-pawn:before {
                content: "\e213"
            }

            .glyphicon-bishop:before {
                content: "\e214"
            }

            .glyphicon-knight:before {
                content: "\e215"
            }

            .glyphicon-baby-formula:before {
                content: "\e216"
            }

            .glyphicon-tent:before {
                content: "\26fa"
            }

            .glyphicon-blackboard:before {
                content: "\e218"
            }

            .glyphicon-bed:before {
                content: "\e219"
            }

            .glyphicon-apple:before {
                content: "\f8ff"
            }

            .glyphicon-erase:before {
                content: "\e221"
            }

            .glyphicon-hourglass:before {
                content: "\231b"
            }

            .glyphicon-lamp:before {
                content: "\e223"
            }

            .glyphicon-duplicate:before {
                content: "\e224"
            }

            .glyphicon-piggy-bank:before {
                content: "\e225"
            }

            .glyphicon-scissors:before {
                content: "\e226"
            }

            .glyphicon-bitcoin:before {
                content: "\e227"
            }

            .glyphicon-btc:before {
                content: "\e227"
            }

            .glyphicon-xbt:before {
                content: "\e227"
            }

            .glyphicon-yen:before {
                content: "\00a5"
            }

            .glyphicon-jpy:before {
                content: "\00a5"
            }

            .glyphicon-ruble:before {
                content: "\20bd"
            }

            .glyphicon-rub:before {
                content: "\20bd"
            }

            .glyphicon-scale:before {
                content: "\e230"
            }

            .glyphicon-ice-lolly:before {
                content: "\e231"
            }

            .glyphicon-ice-lolly-tasted:before {
                content: "\e232"
            }

            .glyphicon-education:before {
                content: "\e233"
            }

            .glyphicon-option-horizontal:before {
                content: "\e234"
            }

            .glyphicon-option-vertical:before {
                content: "\e235"
            }

            .glyphicon-menu-hamburger:before {
                content: "\e236"
            }

            .glyphicon-modal-window:before {
                content: "\e237"
            }

            .glyphicon-oil:before {
                content: "\e238"
            }

            .glyphicon-grain:before {
                content: "\e239"
            }

            .glyphicon-sunglasses:before {
                content: "\e240"
            }

            .glyphicon-text-size:before {
                content: "\e241"
            }

            .glyphicon-text-color:before {
                content: "\e242"
            }

            .glyphicon-text-background:before {
                content: "\e243"
            }

            .glyphicon-object-align-top:before {
                content: "\e244"
            }

            .glyphicon-object-align-bottom:before {
                content: "\e245"
            }

            .glyphicon-object-align-horizontal:before {
                content: "\e246"
            }

            .glyphicon-object-align-left:before {
                content: "\e247"
            }

            .glyphicon-object-align-vertical:before {
                content: "\e248"
            }

            .glyphicon-object-align-right:before {
                content: "\e249"
            }

            .glyphicon-triangle-right:before {
                content: "\e250"
            }

            .glyphicon-triangle-left:before {
                content: "\e251"
            }

            .glyphicon-triangle-bottom:before {
                content: "\e252"
            }

            .glyphicon-triangle-top:before {
                content: "\e253"
            }

            .glyphicon-console:before {
                content: "\e254"
            }

            .glyphicon-superscript:before {
                content: "\e255"
            }

            .glyphicon-subscript:before {
                content: "\e256"
            }

            .glyphicon-menu-left:before {
                content: "\e257"
            }

            .glyphicon-menu-right:before {
                content: "\e258"
            }

            .glyphicon-menu-down:before {
                content: "\e259"
            }

            .glyphicon-menu-up:before {
                content: "\e260"
            }

            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            :after,
            :before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            html {
                font-size: 10px;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
            }

            body {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 14px;
                line-height: 1.42857143;
                color: #333;
                background-color: #fff
            }

            button,
            input,
            select,
            textarea {
                font-family: inherit;
                font-size: inherit;
                line-height: inherit
            }

            a {
                color: #337ab7;
                text-decoration: none
            }

            a:focus,
            a:hover {
                color: #23527c;
                text-decoration: underline
            }

            a:focus {
                outline: thin dotted;
                outline: 5px auto-webkit-focus-ring-color;
                outline-offset: -2px
            }

            figure {
                margin: 0
            }

            img {
                vertical-align: middle
            }

            .carousel-inner>.item>a>img,
            .carousel-inner>.item>img,
            .img-responsive,
            .thumbnail a>img,
            .thumbnail>img {
                display: block;
                max-width: 100%;
                height: auto
            }

            .img-rounded {
                border-radius: 6px
            }

            .img-thumbnail {
                display: inline-block;
                max-width: 100%;
                height: auto;
                padding: 4px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: all .2s ease-in-out;
                -o-transition: all .2s ease-in-out;
                transition: all .2s ease-in-out
            }

            .img-circle {
                border-radius: 50%
            }

            hr {
                margin-top: 20px;
                margin-bottom: 20px;
                border: 0;
                border-top: 1px solid #eee
            }

            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                border: 0
            }

            .sr-only-focusable:active,
            .sr-only-focusable:focus {
                position: static;
                width: auto;
                height: auto;
                margin: 0;
                overflow: visible;
                clip: auto
            }

            [role=button] {
                cursor: pointer
            }

            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: inherit;
                font-weight: 500;
                line-height: 1.1;
                color: inherit
            }

            .h1 .small,
            .h1 small,
            .h2 .small,
            .h2 small,
            .h3 .small,
            .h3 small,
            .h4 .small,
            .h4 small,
            .h5 .small,
            .h5 small,
            .h6 .small,
            .h6 small,
            h1 .small,
            h1 small,
            h2 .small,
            h2 small,
            h3 .small,
            h3 small,
            h4 .small,
            h4 small,
            h5 .small,
            h5 small,
            h6 .small,
            h6 small {
                font-weight: 400;
                line-height: 1;
                color: #777
            }

            .h1,
            .h2,
            .h3,
            h1,
            h2,
            h3 {
                margin-top: 20px;
                margin-bottom: 10px
            }

            .h1 .small,
            .h1 small,
            .h2 .small,
            .h2 small,
            .h3 .small,
            .h3 small,
            h1 .small,
            h1 small,
            h2 .small,
            h2 small,
            h3 .small,
            h3 small {
                font-size: 65%
            }

            .h4,
            .h5,
            .h6,
            h4,
            h5,
            h6 {
                margin-top: 10px;
                margin-bottom: 10px
            }

            .h4 .small,
            .h4 small,
            .h5 .small,
            .h5 small,
            .h6 .small,
            .h6 small,
            h4 .small,
            h4 small,
            h5 .small,
            h5 small,
            h6 .small,
            h6 small {
                font-size: 75%
            }

            .h1,
            h1 {
                font-size: 36px
            }

            .h2,
            h2 {
                font-size: 30px
            }

            .h3,
            h3 {
                font-size: 24px
            }

            .h4,
            h4 {
                font-size: 18px
            }

            .h5,
            h5 {
                font-size: 14px
            }

            .h6,
            h6 {
                font-size: 12px
            }

            p {
                margin: 0 0 10px
            }

            .lead {
                margin-bottom: 20px;
                font-size: 16px;
                font-weight: 300;
                line-height: 1.4
            }

            @media (min-width:768px) {
                .lead {
                    font-size: 21px
                }
            }

            .small,
            small {
                font-size: 85%
            }

            .mark,
            mark {
                padding: .2em;
                background-color: #fcf8e3
            }

            .text-left {
                text-align: left
            }

            .text-right {
                text-align: right
            }

            .text-center {
                text-align: center
            }

            .text-justify {
                text-align: justify
            }

            .text-nowrap {
                white-space: nowrap
            }

            .text-lowercase {
                text-transform: lowercase
            }

            .text-uppercase {
                text-transform: uppercase
            }

            .text-capitalize {
                text-transform: capitalize
            }

            .text-muted {
                color: #777
            }

            .text-primary {
                color: #337ab7
            }

            a.text-primary:focus,
            a.text-primary:hover {
                color: #286090
            }

            .text-success {
                color: #3c763d
            }

            a.text-success:focus,
            a.text-success:hover {
                color: #2b542c
            }

            .text-info {
                color: #31708f
            }

            a.text-info:focus,
            a.text-info:hover {
                color: #245269
            }

            .text-warning {
                color: #8a6d3b
            }

            a.text-warning:focus,
            a.text-warning:hover {
                color: #66512c
            }

            .text-danger {
                color: #a94442
            }

            a.text-danger:focus,
            a.text-danger:hover {
                color: #843534
            }

            .bg-primary {
                color: #fff;
                background-color: #337ab7
            }

            a.bg-primary:focus,
            a.bg-primary:hover {
                background-color: #286090
            }

            .bg-success {
                background-color: #dff0d8
            }

            a.bg-success:focus,
            a.bg-success:hover {
                background-color: #c1e2b3
            }

            .bg-info {
                background-color: #d9edf7
            }

            a.bg-info:focus,
            a.bg-info:hover {
                background-color: #afd9ee
            }

            .bg-warning {
                background-color: #fcf8e3
            }

            a.bg-warning:focus,
            a.bg-warning:hover {
                background-color: #f7ecb5
            }

            .bg-danger {
                background-color: #f2dede
            }

            a.bg-danger:focus,
            a.bg-danger:hover {
                background-color: #e4b9b9
            }

            .page-header {
                padding-bottom: 9px;
                margin: 40px 0 20px;
                border-bottom: 1px solid #eee
            }

            ol,
            ul {
                margin-top: 0;
                margin-bottom: 10px
            }

            ol ol,
            ol ul,
            ul ol,
            ul ul {
                margin-bottom: 0
            }

            .list-unstyled {
                padding-left: 0;
                list-style: none
            }

            .list-inline {
                padding-left: 0;
                margin-left: -5px;
                list-style: none
            }

            .list-inline>li {
                display: inline-block;
                padding-right: 5px;
                padding-left: 5px
            }

            dl {
                margin-top: 0;
                margin-bottom: 20px
            }

            dd,
            dt {
                line-height: 1.42857143
            }

            dt {
                font-weight: 700
            }

            dd {
                margin-left: 0
            }

            @media (min-width:768px) {
                .dl-horizontal dt {
                    float: left;
                    width: 160px;
                    overflow: hidden;
                    clear: left;
                    text-align: right;
                    text-overflow: ellipsis;
                    white-space: nowrap
                }

                .dl-horizontal dd {
                    margin-left: 180px
                }
            }

            abbr[data-original-title],
            abbr[title] {
                cursor: help;
                border-bottom: 1px dotted #777
            }

            .initialism {
                font-size: 90%;
                text-transform: uppercase
            }

            blockquote {
                padding: 10px 20px;
                margin: 0 0 20px;
                font-size: 17.5px;
                border-left: 5px solid #eee
            }

            blockquote ol:last-child,
            blockquote p:last-child,
            blockquote ul:last-child {
                margin-bottom: 0
            }

            blockquote .small,
            blockquote footer,
            blockquote small {
                display: block;
                font-size: 80%;
                line-height: 1.42857143;
                color: #777
            }

            blockquote .small:before,
            blockquote footer:before,
            blockquote small:before {
                content: '\2014 \00A0'
            }

            .blockquote-reverse,
            blockquote.pull-right {
                padding-right: 15px;
                padding-left: 0;
                text-align: right;
                border-right: 5px solid #eee;
                border-left: 0
            }

            .blockquote-reverse .small:before,
            .blockquote-reverse footer:before,
            .blockquote-reverse small:before,
            blockquote.pull-right .small:before,
            blockquote.pull-right footer:before,
            blockquote.pull-right small:before {
                content: ''
            }

            .blockquote-reverse .small:after,
            .blockquote-reverse footer:after,
            .blockquote-reverse small:after,
            blockquote.pull-right .small:after,
            blockquote.pull-right footer:after,
            blockquote.pull-right small:after {
                content: '\00A0 \2014'
            }

            address {
                margin-bottom: 20px;
                font-style: normal;
                line-height: 1.42857143
            }

            code,
            kbd,
            pre,
            samp {
                font-family: Menlo, Monaco, Consolas, "Courier New", monospace
            }

            code {
                padding: 2px 4px;
                font-size: 90%;
                color: #c7254e;
                background-color: #f9f2f4;
                border-radius: 4px
            }

            kbd {
                padding: 2px 4px;
                font-size: 90%;
                color: #fff;
                background-color: #333;
                border-radius: 3px;
                -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
            }

            kbd kbd {
                padding: 0;
                font-size: 100%;
                font-weight: 700;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            pre {
                display: block;
                padding: 9.5px;
                margin: 0 0 10px;
                font-size: 13px;
                line-height: 1.42857143;
                color: #333;
                word-break: break-all;
                word-wrap: break-word;
                background-color: #f5f5f5;
                border: 1px solid #ccc;
                border-radius: 4px
            }

            pre code {
                padding: 0;
                font-size: inherit;
                color: inherit;
                white-space: pre-wrap;
                background-color: transparent;
                border-radius: 0
            }

            .pre-scrollable {
                max-height: 340px;
                overflow-y: scroll
            }

            .container {
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto
            }

            @media (min-width:768px) {
                .container {
                    width: 750px
                }
            }

            @media (min-width:992px) {
                .container {
                    width: 970px
                }
            }

            @media (min-width:1200px) {
                .container {
                    width: 1170px
                }
            }

            .container-fluid {
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto
            }

            .row {
                margin-right: -15px;
                margin-left: -15px
            }

            .col-lg-1,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-md-1,
            .col-md-10,
            .col-md-11,
            .col-md-12,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9,
            .col-xs-1,
            .col-xs-10,
            .col-xs-11,
            .col-xs-12,
            .col-xs-2,
            .col-xs-3,
            .col-xs-4,
            .col-xs-5,
            .col-xs-6,
            .col-xs-7,
            .col-xs-8,
            .col-xs-9 {
                position: relative;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px
            }

            .col-xs-1,
            .col-xs-10,
            .col-xs-11,
            .col-xs-12,
            .col-xs-2,
            .col-xs-3,
            .col-xs-4,
            .col-xs-5,
            .col-xs-6,
            .col-xs-7,
            .col-xs-8,
            .col-xs-9 {
                float: left
            }

            .col-xs-12 {
                width: 100%
            }

            .col-xs-11 {
                width: 91.66666667%
            }

            .col-xs-10 {
                width: 83.33333333%
            }

            .col-xs-9 {
                width: 75%
            }

            .col-xs-8 {
                width: 66.66666667%
            }

            .col-xs-7 {
                width: 58.33333333%
            }

            .col-xs-6 {
                width: 50%
            }

            .col-xs-5 {
                width: 41.66666667%
            }

            .col-xs-4 {
                width: 33.33333333%
            }

            .col-xs-3 {
                width: 25%
            }

            .col-xs-2 {
                width: 16.66666667%
            }

            .col-xs-1 {
                width: 8.33333333%
            }

            .col-xs-pull-12 {
                right: 100%
            }

            .col-xs-pull-11 {
                right: 91.66666667%
            }

            .col-xs-pull-10 {
                right: 83.33333333%
            }

            .col-xs-pull-9 {
                right: 75%
            }

            .col-xs-pull-8 {
                right: 66.66666667%
            }

            .col-xs-pull-7 {
                right: 58.33333333%
            }

            .col-xs-pull-6 {
                right: 50%
            }

            .col-xs-pull-5 {
                right: 41.66666667%
            }

            .col-xs-pull-4 {
                right: 33.33333333%
            }

            .col-xs-pull-3 {
                right: 25%
            }

            .col-xs-pull-2 {
                right: 16.66666667%
            }

            .col-xs-pull-1 {
                right: 8.33333333%
            }

            .col-xs-pull-0 {
                right: auto
            }

            .col-xs-push-12 {
                left: 100%
            }

            .col-xs-push-11 {
                left: 91.66666667%
            }

            .col-xs-push-10 {
                left: 83.33333333%
            }

            .col-xs-push-9 {
                left: 75%
            }

            .col-xs-push-8 {
                left: 66.66666667%
            }

            .col-xs-push-7 {
                left: 58.33333333%
            }

            .col-xs-push-6 {
                left: 50%
            }

            .col-xs-push-5 {
                left: 41.66666667%
            }

            .col-xs-push-4 {
                left: 33.33333333%
            }

            .col-xs-push-3 {
                left: 25%
            }

            .col-xs-push-2 {
                left: 16.66666667%
            }

            .col-xs-push-1 {
                left: 8.33333333%
            }

            .col-xs-push-0 {
                left: auto
            }

            .col-xs-offset-12 {
                margin-left: 100%
            }

            .col-xs-offset-11 {
                margin-left: 91.66666667%
            }

            .col-xs-offset-10 {
                margin-left: 83.33333333%
            }

            .col-xs-offset-9 {
                margin-left: 75%
            }

            .col-xs-offset-8 {
                margin-left: 66.66666667%
            }

            .col-xs-offset-7 {
                margin-left: 58.33333333%
            }

            .col-xs-offset-6 {
                margin-left: 50%
            }

            .col-xs-offset-5 {
                margin-left: 41.66666667%
            }

            .col-xs-offset-4 {
                margin-left: 33.33333333%
            }

            .col-xs-offset-3 {
                margin-left: 25%
            }

            .col-xs-offset-2 {
                margin-left: 16.66666667%
            }

            .col-xs-offset-1 {
                margin-left: 8.33333333%
            }

            .col-xs-offset-0 {
                margin-left: 0
            }

            @media (min-width:768px) {

                .col-sm-1,
                .col-sm-10,
                .col-sm-11,
                .col-sm-12,
                .col-sm-2,
                .col-sm-3,
                .col-sm-4,
                .col-sm-5,
                .col-sm-6,
                .col-sm-7,
                .col-sm-8,
                .col-sm-9 {
                    float: left
                }

                .col-sm-12 {
                    width: 100%
                }

                .col-sm-11 {
                    width: 91.66666667%
                }

                .col-sm-10 {
                    width: 83.33333333%
                }

                .col-sm-9 {
                    width: 75%
                }

                .col-sm-8 {
                    width: 66.66666667%
                }

                .col-sm-7 {
                    width: 58.33333333%
                }

                .col-sm-6 {
                    width: 50%
                }

                .col-sm-5 {
                    width: 41.66666667%
                }

                .col-sm-4 {
                    width: 33.33333333%
                }

                .col-sm-3 {
                    width: 25%
                }

                .col-sm-2 {
                    width: 16.66666667%
                }

                .col-sm-1 {
                    width: 8.33333333%
                }

                .col-sm-pull-12 {
                    right: 100%
                }

                .col-sm-pull-11 {
                    right: 91.66666667%
                }

                .col-sm-pull-10 {
                    right: 83.33333333%
                }

                .col-sm-pull-9 {
                    right: 75%
                }

                .col-sm-pull-8 {
                    right: 66.66666667%
                }

                .col-sm-pull-7 {
                    right: 58.33333333%
                }

                .col-sm-pull-6 {
                    right: 50%
                }

                .col-sm-pull-5 {
                    right: 41.66666667%
                }

                .col-sm-pull-4 {
                    right: 33.33333333%
                }

                .col-sm-pull-3 {
                    right: 25%
                }

                .col-sm-pull-2 {
                    right: 16.66666667%
                }

                .col-sm-pull-1 {
                    right: 8.33333333%
                }

                .col-sm-pull-0 {
                    right: auto
                }

                .col-sm-push-12 {
                    left: 100%
                }

                .col-sm-push-11 {
                    left: 91.66666667%
                }

                .col-sm-push-10 {
                    left: 83.33333333%
                }

                .col-sm-push-9 {
                    left: 75%
                }

                .col-sm-push-8 {
                    left: 66.66666667%
                }

                .col-sm-push-7 {
                    left: 58.33333333%
                }

                .col-sm-push-6 {
                    left: 50%
                }

                .col-sm-push-5 {
                    left: 41.66666667%
                }

                .col-sm-push-4 {
                    left: 33.33333333%
                }

                .col-sm-push-3 {
                    left: 25%
                }

                .col-sm-push-2 {
                    left: 16.66666667%
                }

                .col-sm-push-1 {
                    left: 8.33333333%
                }

                .col-sm-push-0 {
                    left: auto
                }

                .col-sm-offset-12 {
                    margin-left: 100%
                }

                .col-sm-offset-11 {
                    margin-left: 91.66666667%
                }

                .col-sm-offset-10 {
                    margin-left: 83.33333333%
                }

                .col-sm-offset-9 {
                    margin-left: 75%
                }

                .col-sm-offset-8 {
                    margin-left: 66.66666667%
                }

                .col-sm-offset-7 {
                    margin-left: 58.33333333%
                }

                .col-sm-offset-6 {
                    margin-left: 50%
                }

                .col-sm-offset-5 {
                    margin-left: 41.66666667%
                }

                .col-sm-offset-4 {
                    margin-left: 33.33333333%
                }

                .col-sm-offset-3 {
                    margin-left: 25%
                }

                .col-sm-offset-2 {
                    margin-left: 16.66666667%
                }

                .col-sm-offset-1 {
                    margin-left: 8.33333333%
                }

                .col-sm-offset-0 {
                    margin-left: 0
                }
            }

            @media (min-width:992px) {

                .col-md-1,
                .col-md-10,
                .col-md-11,
                .col-md-12,
                .col-md-2,
                .col-md-3,
                .col-md-4,
                .col-md-5,
                .col-md-6,
                .col-md-7,
                .col-md-8,
                .col-md-9 {
                    float: left
                }

                .col-md-12 {
                    width: 100%
                }

                .col-md-11 {
                    width: 91.66666667%
                }

                .col-md-10 {
                    width: 83.33333333%
                }

                .col-md-9 {
                    width: 75%
                }

                .col-md-8 {
                    width: 66.66666667%
                }

                .col-md-7 {
                    width: 58.33333333%
                }

                .col-md-6 {
                    width: 50%
                }

                .col-md-5 {
                    width: 41.66666667%
                }

                .col-md-4 {
                    width: 33.33333333%
                }

                .col-md-3 {
                    width: 25%
                }

                .col-md-2 {
                    width: 16.66666667%
                }

                .col-md-1 {
                    width: 8.33333333%
                }

                .col-md-pull-12 {
                    right: 100%
                }

                .col-md-pull-11 {
                    right: 91.66666667%
                }

                .col-md-pull-10 {
                    right: 83.33333333%
                }

                .col-md-pull-9 {
                    right: 75%
                }

                .col-md-pull-8 {
                    right: 66.66666667%
                }

                .col-md-pull-7 {
                    right: 58.33333333%
                }

                .col-md-pull-6 {
                    right: 50%
                }

                .col-md-pull-5 {
                    right: 41.66666667%
                }

                .col-md-pull-4 {
                    right: 33.33333333%
                }

                .col-md-pull-3 {
                    right: 25%
                }

                .col-md-pull-2 {
                    right: 16.66666667%
                }

                .col-md-pull-1 {
                    right: 8.33333333%
                }

                .col-md-pull-0 {
                    right: auto
                }

                .col-md-push-12 {
                    left: 100%
                }

                .col-md-push-11 {
                    left: 91.66666667%
                }

                .col-md-push-10 {
                    left: 83.33333333%
                }

                .col-md-push-9 {
                    left: 75%
                }

                .col-md-push-8 {
                    left: 66.66666667%
                }

                .col-md-push-7 {
                    left: 58.33333333%
                }

                .col-md-push-6 {
                    left: 50%
                }

                .col-md-push-5 {
                    left: 41.66666667%
                }

                .col-md-push-4 {
                    left: 33.33333333%
                }

                .col-md-push-3 {
                    left: 25%
                }

                .col-md-push-2 {
                    left: 16.66666667%
                }

                .col-md-push-1 {
                    left: 8.33333333%
                }

                .col-md-push-0 {
                    left: auto
                }

                .col-md-offset-12 {
                    margin-left: 100%
                }

                .col-md-offset-11 {
                    margin-left: 91.66666667%
                }

                .col-md-offset-10 {
                    margin-left: 83.33333333%
                }

                .col-md-offset-9 {
                    margin-left: 75%
                }

                .col-md-offset-8 {
                    margin-left: 66.66666667%
                }

                .col-md-offset-7 {
                    margin-left: 58.33333333%
                }

                .col-md-offset-6 {
                    margin-left: 50%
                }

                .col-md-offset-5 {
                    margin-left: 41.66666667%
                }

                .col-md-offset-4 {
                    margin-left: 33.33333333%
                }

                .col-md-offset-3 {
                    margin-left: 25%
                }

                .col-md-offset-2 {
                    margin-left: 16.66666667%
                }

                .col-md-offset-1 {
                    margin-left: 8.33333333%
                }

                .col-md-offset-0 {
                    margin-left: 0
                }
            }

            @media (min-width:1200px) {

                .col-lg-1,
                .col-lg-10,
                .col-lg-11,
                .col-lg-12,
                .col-lg-2,
                .col-lg-3,
                .col-lg-4,
                .col-lg-5,
                .col-lg-6,
                .col-lg-7,
                .col-lg-8,
                .col-lg-9 {
                    float: left
                }

                .col-lg-12 {
                    width: 100%
                }

                .col-lg-11 {
                    width: 91.66666667%
                }

                .col-lg-10 {
                    width: 83.33333333%
                }

                .col-lg-9 {
                    width: 75%
                }

                .col-lg-8 {
                    width: 66.66666667%
                }

                .col-lg-7 {
                    width: 58.33333333%
                }

                .col-lg-6 {
                    width: 50%
                }

                .col-lg-5 {
                    width: 41.66666667%
                }

                .col-lg-4 {
                    width: 33.33333333%
                }

                .col-lg-3 {
                    width: 25%
                }

                .col-lg-2 {
                    width: 16.66666667%
                }

                .col-lg-1 {
                    width: 8.33333333%
                }

                .col-lg-pull-12 {
                    right: 100%
                }

                .col-lg-pull-11 {
                    right: 91.66666667%
                }

                .col-lg-pull-10 {
                    right: 83.33333333%
                }

                .col-lg-pull-9 {
                    right: 75%
                }

                .col-lg-pull-8 {
                    right: 66.66666667%
                }

                .col-lg-pull-7 {
                    right: 58.33333333%
                }

                .col-lg-pull-6 {
                    right: 50%
                }

                .col-lg-pull-5 {
                    right: 41.66666667%
                }

                .col-lg-pull-4 {
                    right: 33.33333333%
                }

                .col-lg-pull-3 {
                    right: 25%
                }

                .col-lg-pull-2 {
                    right: 16.66666667%
                }

                .col-lg-pull-1 {
                    right: 8.33333333%
                }

                .col-lg-pull-0 {
                    right: auto
                }

                .col-lg-push-12 {
                    left: 100%
                }

                .col-lg-push-11 {
                    left: 91.66666667%
                }

                .col-lg-push-10 {
                    left: 83.33333333%
                }

                .col-lg-push-9 {
                    left: 75%
                }

                .col-lg-push-8 {
                    left: 66.66666667%
                }

                .col-lg-push-7 {
                    left: 58.33333333%
                }

                .col-lg-push-6 {
                    left: 50%
                }

                .col-lg-push-5 {
                    left: 41.66666667%
                }

                .col-lg-push-4 {
                    left: 33.33333333%
                }

                .col-lg-push-3 {
                    left: 25%
                }

                .col-lg-push-2 {
                    left: 16.66666667%
                }

                .col-lg-push-1 {
                    left: 8.33333333%
                }

                .col-lg-push-0 {
                    left: auto
                }

                .col-lg-offset-12 {
                    margin-left: 100%
                }

                .col-lg-offset-11 {
                    margin-left: 91.66666667%
                }

                .col-lg-offset-10 {
                    margin-left: 83.33333333%
                }

                .col-lg-offset-9 {
                    margin-left: 75%
                }

                .col-lg-offset-8 {
                    margin-left: 66.66666667%
                }

                .col-lg-offset-7 {
                    margin-left: 58.33333333%
                }

                .col-lg-offset-6 {
                    margin-left: 50%
                }

                .col-lg-offset-5 {
                    margin-left: 41.66666667%
                }

                .col-lg-offset-4 {
                    margin-left: 33.33333333%
                }

                .col-lg-offset-3 {
                    margin-left: 25%
                }

                .col-lg-offset-2 {
                    margin-left: 16.66666667%
                }

                .col-lg-offset-1 {
                    margin-left: 8.33333333%
                }

                .col-lg-offset-0 {
                    margin-left: 0
                }
            }

            table {
                background-color: transparent
            }

            caption {
                padding-top: 8px;
                padding-bottom: 8px;
                color: #777;
                text-align: left
            }

            th {
                text-align: left
            }

            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px
            }

            .table>tbody>tr>td,
            .table>tbody>tr>th,
            .table>tfoot>tr>td,
            .table>tfoot>tr>th,
            .table>thead>tr>td,
            .table>thead>tr>th {
                padding: 8px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd
            }

            .table>thead>tr>th {
                vertical-align: bottom;
                border-bottom: 2px solid #ddd
            }

            .table>caption+thead>tr:first-child>td,
            .table>caption+thead>tr:first-child>th,
            .table>colgroup+thead>tr:first-child>td,
            .table>colgroup+thead>tr:first-child>th,
            .table>thead:first-child>tr:first-child>td,
            .table>thead:first-child>tr:first-child>th {
                border-top: 0
            }

            .table>tbody+tbody {
                border-top: 2px solid #ddd
            }

            .table .table {
                background-color: #fff
            }

            .table-condensed>tbody>tr>td,
            .table-condensed>tbody>tr>th,
            .table-condensed>tfoot>tr>td,
            .table-condensed>tfoot>tr>th,
            .table-condensed>thead>tr>td,
            .table-condensed>thead>tr>th {
                padding: 5px
            }

            .table-bordered {
                border: 1px solid #ddd
            }

            .table-bordered>tbody>tr>td,
            .table-bordered>tbody>tr>th,
            .table-bordered>tfoot>tr>td,
            .table-bordered>tfoot>tr>th,
            .table-bordered>thead>tr>td,
            .table-bordered>thead>tr>th {
                border: 1px solid #ddd
            }

            .table-bordered>thead>tr>td,
            .table-bordered>thead>tr>th {
                border-bottom-width: 2px
            }

            .table-striped>tbody>tr:nth-of-type(odd) {
                background-color: #f9f9f9
            }

            .table-hover>tbody>tr:hover {
                background-color: #f5f5f5
            }

            table col[class*=col-] {
                position: static;
                display: table-column;
                float: none
            }

            table td[class*=col-],
            table th[class*=col-] {
                position: static;
                display: table-cell;
                float: none
            }

            .table>tbody>tr.active>td,
            .table>tbody>tr.active>th,
            .table>tbody>tr>td.active,
            .table>tbody>tr>th.active,
            .table>tfoot>tr.active>td,
            .table>tfoot>tr.active>th,
            .table>tfoot>tr>td.active,
            .table>tfoot>tr>th.active,
            .table>thead>tr.active>td,
            .table>thead>tr.active>th,
            .table>thead>tr>td.active,
            .table>thead>tr>th.active {
                background-color: #f5f5f5
            }

            .table-hover>tbody>tr.active:hover>td,
            .table-hover>tbody>tr.active:hover>th,
            .table-hover>tbody>tr:hover>.active,
            .table-hover>tbody>tr>td.active:hover,
            .table-hover>tbody>tr>th.active:hover {
                background-color: #e8e8e8
            }

            .table>tbody>tr.success>td,
            .table>tbody>tr.success>th,
            .table>tbody>tr>td.success,
            .table>tbody>tr>th.success,
            .table>tfoot>tr.success>td,
            .table>tfoot>tr.success>th,
            .table>tfoot>tr>td.success,
            .table>tfoot>tr>th.success,
            .table>thead>tr.success>td,
            .table>thead>tr.success>th,
            .table>thead>tr>td.success,
            .table>thead>tr>th.success {
                background-color: #dff0d8
            }

            .table-hover>tbody>tr.success:hover>td,
            .table-hover>tbody>tr.success:hover>th,
            .table-hover>tbody>tr:hover>.success,
            .table-hover>tbody>tr>td.success:hover,
            .table-hover>tbody>tr>th.success:hover {
                background-color: #d0e9c6
            }

            .table>tbody>tr.info>td,
            .table>tbody>tr.info>th,
            .table>tbody>tr>td.info,
            .table>tbody>tr>th.info,
            .table>tfoot>tr.info>td,
            .table>tfoot>tr.info>th,
            .table>tfoot>tr>td.info,
            .table>tfoot>tr>th.info,
            .table>thead>tr.info>td,
            .table>thead>tr.info>th,
            .table>thead>tr>td.info,
            .table>thead>tr>th.info {
                background-color: #d9edf7
            }

            .table-hover>tbody>tr.info:hover>td,
            .table-hover>tbody>tr.info:hover>th,
            .table-hover>tbody>tr:hover>.info,
            .table-hover>tbody>tr>td.info:hover,
            .table-hover>tbody>tr>th.info:hover {
                background-color: #c4e3f3
            }

            .table>tbody>tr.warning>td,
            .table>tbody>tr.warning>th,
            .table>tbody>tr>td.warning,
            .table>tbody>tr>th.warning,
            .table>tfoot>tr.warning>td,
            .table>tfoot>tr.warning>th,
            .table>tfoot>tr>td.warning,
            .table>tfoot>tr>th.warning,
            .table>thead>tr.warning>td,
            .table>thead>tr.warning>th,
            .table>thead>tr>td.warning,
            .table>thead>tr>th.warning {
                background-color: #fcf8e3
            }

            .table-hover>tbody>tr.warning:hover>td,
            .table-hover>tbody>tr.warning:hover>th,
            .table-hover>tbody>tr:hover>.warning,
            .table-hover>tbody>tr>td.warning:hover,
            .table-hover>tbody>tr>th.warning:hover {
                background-color: #faf2cc
            }

            .table>tbody>tr.danger>td,
            .table>tbody>tr.danger>th,
            .table>tbody>tr>td.danger,
            .table>tbody>tr>th.danger,
            .table>tfoot>tr.danger>td,
            .table>tfoot>tr.danger>th,
            .table>tfoot>tr>td.danger,
            .table>tfoot>tr>th.danger,
            .table>thead>tr.danger>td,
            .table>thead>tr.danger>th,
            .table>thead>tr>td.danger,
            .table>thead>tr>th.danger {
                background-color: #f2dede
            }

            .table-hover>tbody>tr.danger:hover>td,
            .table-hover>tbody>tr.danger:hover>th,
            .table-hover>tbody>tr:hover>.danger,
            .table-hover>tbody>tr>td.danger:hover,
            .table-hover>tbody>tr>th.danger:hover {
                background-color: #ebcccc
            }

            .table-responsive {
                min-height: .01%;
                overflow-x: auto
            }

            @media screen and (max-width:767px) {
                .table-responsive {
                    width: 100%;
                    margin-bottom: 15px;
                    overflow-y: hidden;
                    -ms-overflow-style: -ms-autohiding-scrollbar;
                    border: 1px solid #ddd
                }

                .table-responsive>.table {
                    margin-bottom: 0
                }

                .table-responsive>.table>tbody>tr>td,
                .table-responsive>.table>tbody>tr>th,
                .table-responsive>.table>tfoot>tr>td,
                .table-responsive>.table>tfoot>tr>th,
                .table-responsive>.table>thead>tr>td,
                .table-responsive>.table>thead>tr>th {
                    white-space: nowrap
                }

                .table-responsive>.table-bordered {
                    border: 0
                }

                .table-responsive>.table-bordered>tbody>tr>td:first-child,
                .table-responsive>.table-bordered>tbody>tr>th:first-child,
                .table-responsive>.table-bordered>tfoot>tr>td:first-child,
                .table-responsive>.table-bordered>tfoot>tr>th:first-child,
                .table-responsive>.table-bordered>thead>tr>td:first-child,
                .table-responsive>.table-bordered>thead>tr>th:first-child {
                    border-left: 0
                }

                .table-responsive>.table-bordered>tbody>tr>td:last-child,
                .table-responsive>.table-bordered>tbody>tr>th:last-child,
                .table-responsive>.table-bordered>tfoot>tr>td:last-child,
                .table-responsive>.table-bordered>tfoot>tr>th:last-child,
                .table-responsive>.table-bordered>thead>tr>td:last-child,
                .table-responsive>.table-bordered>thead>tr>th:last-child {
                    border-right: 0
                }

                .table-responsive>.table-bordered>tbody>tr:last-child>td,
                .table-responsive>.table-bordered>tbody>tr:last-child>th,
                .table-responsive>.table-bordered>tfoot>tr:last-child>td,
                .table-responsive>.table-bordered>tfoot>tr:last-child>th {
                    border-bottom: 0
                }
            }

            fieldset {
                min-width: 0;
                padding: 0;
                margin: 0;
                border: 0
            }

            legend {
                display: block;
                width: 100%;
                padding: 0;
                margin-bottom: 20px;
                font-size: 21px;
                line-height: inherit;
                color: #333;
                border: 0;
                border-bottom: 1px solid #e5e5e5
            }

            label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 700
            }

            input[type=search] {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            input[type=checkbox],
            input[type=radio] {
                margin: 4px 0 0;
                margin-top: 1px\9;
                line-height: normal
            }

            input[type=file] {
                display: block
            }

            input[type=range] {
                display: block;
                width: 100%
            }

            select[multiple],
            select[size] {
                height: auto
            }

            input[type=file]:focus,
            input[type=checkbox]:focus,
            input[type=radio]:focus {
                outline: thin dotted;
                outline: 5px auto-webkit-focus-ring-color;
                outline-offset: -2px
            }

            output {
                display: block;
                padding-top: 7px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555
            }

            .form-control {
                display: block;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #ccc;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
            }

            .form-control:focus {
                border-color: #66afe9;
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
            }

            .form-control::-moz-placeholder {
                color: #999;
                opacity: 1
            }

            .form-control:-ms-input-placeholder {
                color: #999
            }

            .form-control::-webkit-input-placeholder {
                color: #999
            }

            .form-control[disabled],
            .form-control[readonly],
            fieldset[disabled] .form-control {
                background-color: #eee;
                opacity: 1
            }

            .form-control[disabled],
            fieldset[disabled] .form-control {
                cursor: not-allowed
            }

            textarea.form-control {
                height: auto
            }

            input[type=search] {
                -webkit-appearance: none
            }

            @media screen and (-webkit-min-device-pixel-ratio:0) {

                input[type=date].form-control,
                input[type=time].form-control,
                input[type=datetime-local].form-control,
                input[type=month].form-control {
                    line-height: 34px
                }

                .input-group-sm input[type=date],
                .input-group-sm input[type=time],
                .input-group-sm input[type=datetime-local],
                .input-group-sm input[type=month],
                input[type=date].input-sm,
                input[type=time].input-sm,
                input[type=datetime-local].input-sm,
                input[type=month].input-sm {
                    line-height: 30px
                }

                .input-group-lg input[type=date],
                .input-group-lg input[type=time],
                .input-group-lg input[type=datetime-local],
                .input-group-lg input[type=month],
                input[type=date].input-lg,
                input[type=time].input-lg,
                input[type=datetime-local].input-lg,
                input[type=month].input-lg {
                    line-height: 46px
                }
            }

            .form-group {
                margin-bottom: 15px
            }

            .checkbox,
            .radio {
                position: relative;
                display: block;
                margin-top: 10px;
                margin-bottom: 10px
            }

            .checkbox label,
            .radio label {
                min-height: 20px;
                padding-left: 20px;
                margin-bottom: 0;
                font-weight: 400;
                cursor: pointer
            }

            .checkbox input[type=checkbox],
            .checkbox-inline input[type=checkbox],
            .radio input[type=radio],
            .radio-inline input[type=radio] {
                position: absolute;
                margin-top: 4px\9;
                margin-left: -20px
            }

            .checkbox+.checkbox,
            .radio+.radio {
                margin-top: -5px
            }

            .checkbox-inline,
            .radio-inline {
                position: relative;
                display: inline-block;
                padding-left: 20px;
                margin-bottom: 0;
                font-weight: 400;
                vertical-align: middle;
                cursor: pointer
            }

            .checkbox-inline+.checkbox-inline,
            .radio-inline+.radio-inline {
                margin-top: 0;
                margin-left: 10px
            }

            fieldset[disabled] input[type=checkbox],
            fieldset[disabled] input[type=radio],
            input[type=checkbox].disabled,
            input[type=checkbox][disabled],
            input[type=radio].disabled,
            input[type=radio][disabled] {
                cursor: not-allowed
            }

            .checkbox-inline.disabled,
            .radio-inline.disabled,
            fieldset[disabled] .checkbox-inline,
            fieldset[disabled] .radio-inline {
                cursor: not-allowed
            }

            .checkbox.disabled label,
            .radio.disabled label,
            fieldset[disabled] .checkbox label,
            fieldset[disabled] .radio label {
                cursor: not-allowed
            }

            .form-control-static {
                min-height: 34px;
                padding-top: 7px;
                padding-bottom: 7px;
                margin-bottom: 0
            }

            .form-control-static.input-lg,
            .form-control-static.input-sm {
                padding-right: 0;
                padding-left: 0
            }

            .input-sm {
                height: 30px;
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            select.input-sm {
                height: 30px;
                line-height: 30px
            }

            select[multiple].input-sm,
            textarea.input-sm {
                height: auto
            }

            .form-group-sm .form-control {
                height: 30px;
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            .form-group-sm select.form-control {
                height: 30px;
                line-height: 30px
            }

            .form-group-sm select[multiple].form-control,
            .form-group-sm textarea.form-control {
                height: auto
            }

            .form-group-sm .form-control-static {
                height: 30px;
                min-height: 32px;
                padding: 6px 10px;
                font-size: 12px;
                line-height: 1.5
            }

            .input-lg {
                height: 46px;
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333;
                border-radius: 6px
            }

            select.input-lg {
                height: 46px;
                line-height: 46px
            }

            select[multiple].input-lg,
            textarea.input-lg {
                height: auto
            }

            .form-group-lg .form-control {
                height: 46px;
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333;
                border-radius: 6px
            }

            .form-group-lg select.form-control {
                height: 46px;
                line-height: 46px
            }

            .form-group-lg select[multiple].form-control,
            .form-group-lg textarea.form-control {
                height: auto
            }

            .form-group-lg .form-control-static {
                height: 46px;
                min-height: 38px;
                padding: 11px 16px;
                font-size: 18px;
                line-height: 1.3333333
            }

            .has-feedback {
                position: relative
            }

            .has-feedback .form-control {
                padding-right: 42.5px
            }

            .form-control-feedback {
                position: absolute;
                top: 0;
                right: 0;
                z-index: 2;
                display: block;
                width: 34px;
                height: 34px;
                line-height: 34px;
                text-align: center;
                pointer-events: none
            }

            .form-group-lg .form-control+.form-control-feedback,
            .input-group-lg+.form-control-feedback,
            .input-lg+.form-control-feedback {
                width: 46px;
                height: 46px;
                line-height: 46px
            }

            .form-group-sm .form-control+.form-control-feedback,
            .input-group-sm+.form-control-feedback,
            .input-sm+.form-control-feedback {
                width: 30px;
                height: 30px;
                line-height: 30px
            }

            .has-success .checkbox,
            .has-success .checkbox-inline,
            .has-success .control-label,
            .has-success .help-block,
            .has-success .radio,
            .has-success .radio-inline,
            .has-success.checkbox label,
            .has-success.checkbox-inline label,
            .has-success.radio label,
            .has-success.radio-inline label {
                color: #3c763d
            }

            .has-success .form-control {
                border-color: #3c763d;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
            }

            .has-success .form-control:focus {
                border-color: #2b542c;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
            }

            .has-success .input-group-addon {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #3c763d
            }

            .has-success .form-control-feedback {
                color: #3c763d
            }

            .has-warning .checkbox,
            .has-warning .checkbox-inline,
            .has-warning .control-label,
            .has-warning .help-block,
            .has-warning .radio,
            .has-warning .radio-inline,
            .has-warning.checkbox label,
            .has-warning.checkbox-inline label,
            .has-warning.radio label,
            .has-warning.radio-inline label {
                color: #8a6d3b
            }

            .has-warning .form-control {
                border-color: #8a6d3b;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
            }

            .has-warning .form-control:focus {
                border-color: #66512c;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
            }

            .has-warning .input-group-addon {
                color: #8a6d3b;
                background-color: #fcf8e3;
                border-color: #8a6d3b
            }

            .has-warning .form-control-feedback {
                color: #8a6d3b
            }

            .has-error .checkbox,
            .has-error .checkbox-inline,
            .has-error .control-label,
            .has-error .help-block,
            .has-error .radio,
            .has-error .radio-inline,
            .has-error.checkbox label,
            .has-error.checkbox-inline label,
            .has-error.radio label,
            .has-error.radio-inline label {
                color: #a94442
            }

            .has-error .form-control {
                border-color: #a94442;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
            }

            .has-error .form-control:focus {
                border-color: #843534;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
            }

            .has-error .input-group-addon {
                color: #a94442;
                background-color: #f2dede;
                border-color: #a94442
            }

            .has-error .form-control-feedback {
                color: #a94442
            }

            .has-feedback label~.form-control-feedback {
                top: 25px
            }

            .has-feedback label.sr-only~.form-control-feedback {
                top: 0
            }

            .help-block {
                display: block;
                margin-top: 5px;
                margin-bottom: 10px;
                color: #737373
            }

            @media (min-width:768px) {
                .form-inline .form-group {
                    display: inline-block;
                    margin-bottom: 0;
                    vertical-align: middle
                }

                .form-inline .form-control {
                    display: inline-block;
                    width: auto;
                    vertical-align: middle
                }

                .form-inline .form-control-static {
                    display: inline-block
                }

                .form-inline .input-group {
                    display: inline-table;
                    vertical-align: middle
                }

                .form-inline .input-group .form-control,
                .form-inline .input-group .input-group-addon,
                .form-inline .input-group .input-group-btn {
                    width: auto
                }

                .form-inline .input-group>.form-control {
                    width: 100%
                }

                .form-inline .control-label {
                    margin-bottom: 0;
                    vertical-align: middle
                }

                .form-inline .checkbox,
                .form-inline .radio {
                    display: inline-block;
                    margin-top: 0;
                    margin-bottom: 0;
                    vertical-align: middle
                }

                .form-inline .checkbox label,
                .form-inline .radio label {
                    padding-left: 0
                }

                .form-inline .checkbox input[type=checkbox],
                .form-inline .radio input[type=radio] {
                    position: relative;
                    margin-left: 0
                }

                .form-inline .has-feedback .form-control-feedback {
                    top: 0
                }
            }

            .form-horizontal .checkbox,
            .form-horizontal .checkbox-inline,
            .form-horizontal .radio,
            .form-horizontal .radio-inline {
                padding-top: 7px;
                margin-top: 0;
                margin-bottom: 0
            }

            .form-horizontal .checkbox,
            .form-horizontal .radio {
                min-height: 27px
            }

            .form-horizontal .form-group {
                margin-right: -15px;
                margin-left: -15px
            }

            @media (min-width:768px) {
                .form-horizontal .control-label {
                    padding-top: 7px;
                    margin-bottom: 0;
                    text-align: right
                }
            }

            .form-horizontal .has-feedback .form-control-feedback {
                right: 15px
            }

            @media (min-width:768px) {
                .form-horizontal .form-group-lg .control-label {
                    padding-top: 14.33px;
                    font-size: 18px
                }
            }

            @media (min-width:768px) {
                .form-horizontal .form-group-sm .control-label {
                    padding-top: 6px;
                    font-size: 12px
                }
            }

            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px
            }

            .btn.active.focus,
            .btn.active:focus,
            .btn.focus,
            .btn:active.focus,
            .btn:active:focus,
            .btn:focus {
                outline: thin dotted;
                outline: 5px auto-webkit-focus-ring-color;
                outline-offset: -2px
            }

            .btn.focus,
            .btn:focus,
            .btn:hover {
                color: #333;
                text-decoration: none
            }

            .btn.active,
            .btn:active {
                background-image: none;
                outline: 0;
                -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
            }

            .btn.disabled,
            .btn[disabled],
            fieldset[disabled] .btn {
                cursor: not-allowed;
                filter: alpha(opacity=65);
                -webkit-box-shadow: none;
                box-shadow: none;
                opacity: .65
            }

            a.btn.disabled,
            fieldset[disabled] a.btn {
                pointer-events: none
            }

            .btn-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc
            }

            .btn-default.focus,
            .btn-default:focus {
                color: #333;
                background-color: #e6e6e6;
                border-color: #8c8c8c
            }

            .btn-default:hover {
                color: #333;
                background-color: #e6e6e6;
                border-color: #adadad
            }

            .btn-default.active,
            .btn-default:active,
            .open>.dropdown-toggle.btn-default {
                color: #333;
                background-color: #e6e6e6;
                border-color: #adadad
            }

            .btn-default.active.focus,
            .btn-default.active:focus,
            .btn-default.active:hover,
            .btn-default:active.focus,
            .btn-default:active:focus,
            .btn-default:active:hover,
            .open>.dropdown-toggle.btn-default.focus,
            .open>.dropdown-toggle.btn-default:focus,
            .open>.dropdown-toggle.btn-default:hover {
                color: #333;
                background-color: #d4d4d4;
                border-color: #8c8c8c
            }

            .btn-default.active,
            .btn-default:active,
            .open>.dropdown-toggle.btn-default {
                background-image: none
            }

            .btn-default.disabled,
            .btn-default.disabled.active,
            .btn-default.disabled.focus,
            .btn-default.disabled:active,
            .btn-default.disabled:focus,
            .btn-default.disabled:hover,
            .btn-default[disabled],
            .btn-default[disabled].active,
            .btn-default[disabled].focus,
            .btn-default[disabled]:active,
            .btn-default[disabled]:focus,
            .btn-default[disabled]:hover,
            fieldset[disabled] .btn-default,
            fieldset[disabled] .btn-default.active,
            fieldset[disabled] .btn-default.focus,
            fieldset[disabled] .btn-default:active,
            fieldset[disabled] .btn-default:focus,
            fieldset[disabled] .btn-default:hover {
                background-color: #fff;
                border-color: #ccc
            }

            .btn-default .badge {
                color: #fff;
                background-color: #333
            }

            .btn-primary {
                color: #fff;
                background-color: #337ab7;
                border-color: #2e6da4
            }

            .btn-primary.focus,
            .btn-primary:focus {
                color: #fff;
                background-color: #286090;
                border-color: #122b40
            }

            .btn-primary:hover {
                color: #fff;
                background-color: #286090;
                border-color: #204d74
            }

            .btn-primary.active,
            .btn-primary:active,
            .open>.dropdown-toggle.btn-primary {
                color: #fff;
                background-color: #286090;
                border-color: #204d74
            }

            .btn-primary.active.focus,
            .btn-primary.active:focus,
            .btn-primary.active:hover,
            .btn-primary:active.focus,
            .btn-primary:active:focus,
            .btn-primary:active:hover,
            .open>.dropdown-toggle.btn-primary.focus,
            .open>.dropdown-toggle.btn-primary:focus,
            .open>.dropdown-toggle.btn-primary:hover {
                color: #fff;
                background-color: #204d74;
                border-color: #122b40
            }

            .btn-primary.active,
            .btn-primary:active,
            .open>.dropdown-toggle.btn-primary {
                background-image: none
            }

            .btn-primary.disabled,
            .btn-primary.disabled.active,
            .btn-primary.disabled.focus,
            .btn-primary.disabled:active,
            .btn-primary.disabled:focus,
            .btn-primary.disabled:hover,
            .btn-primary[disabled],
            .btn-primary[disabled].active,
            .btn-primary[disabled].focus,
            .btn-primary[disabled]:active,
            .btn-primary[disabled]:focus,
            .btn-primary[disabled]:hover,
            fieldset[disabled] .btn-primary,
            fieldset[disabled] .btn-primary.active,
            fieldset[disabled] .btn-primary.focus,
            fieldset[disabled] .btn-primary:active,
            fieldset[disabled] .btn-primary:focus,
            fieldset[disabled] .btn-primary:hover {
                background-color: #337ab7;
                border-color: #2e6da4
            }

            .btn-primary .badge {
                color: #337ab7;
                background-color: #fff
            }

            .btn-success {
                color: #fff;
                background-color: #5cb85c;
                border-color: #4cae4c
            }

            .btn-success.focus,
            .btn-success:focus {
                color: #fff;
                background-color: #449d44;
                border-color: #255625
            }

            .btn-success:hover {
                color: #fff;
                background-color: #449d44;
                border-color: #398439
            }

            .btn-success.active,
            .btn-success:active,
            .open>.dropdown-toggle.btn-success {
                color: #fff;
                background-color: #449d44;
                border-color: #398439
            }

            .btn-success.active.focus,
            .btn-success.active:focus,
            .btn-success.active:hover,
            .btn-success:active.focus,
            .btn-success:active:focus,
            .btn-success:active:hover,
            .open>.dropdown-toggle.btn-success.focus,
            .open>.dropdown-toggle.btn-success:focus,
            .open>.dropdown-toggle.btn-success:hover {
                color: #fff;
                background-color: #398439;
                border-color: #255625
            }

            .btn-success.active,
            .btn-success:active,
            .open>.dropdown-toggle.btn-success {
                background-image: none
            }

            .btn-success.disabled,
            .btn-success.disabled.active,
            .btn-success.disabled.focus,
            .btn-success.disabled:active,
            .btn-success.disabled:focus,
            .btn-success.disabled:hover,
            .btn-success[disabled],
            .btn-success[disabled].active,
            .btn-success[disabled].focus,
            .btn-success[disabled]:active,
            .btn-success[disabled]:focus,
            .btn-success[disabled]:hover,
            fieldset[disabled] .btn-success,
            fieldset[disabled] .btn-success.active,
            fieldset[disabled] .btn-success.focus,
            fieldset[disabled] .btn-success:active,
            fieldset[disabled] .btn-success:focus,
            fieldset[disabled] .btn-success:hover {
                background-color: #5cb85c;
                border-color: #4cae4c
            }

            .btn-success .badge {
                color: #5cb85c;
                background-color: #fff
            }

            .btn-info {
                color: #fff;
                background-color: #5bc0de;
                border-color: #46b8da
            }

            .btn-info.focus,
            .btn-info:focus {
                color: #fff;
                background-color: #31b0d5;
                border-color: #1b6d85
            }

            .btn-info:hover {
                color: #fff;
                background-color: #31b0d5;
                border-color: #269abc
            }

            .btn-info.active,
            .btn-info:active,
            .open>.dropdown-toggle.btn-info {
                color: #fff;
                background-color: #31b0d5;
                border-color: #269abc
            }

            .btn-info.active.focus,
            .btn-info.active:focus,
            .btn-info.active:hover,
            .btn-info:active.focus,
            .btn-info:active:focus,
            .btn-info:active:hover,
            .open>.dropdown-toggle.btn-info.focus,
            .open>.dropdown-toggle.btn-info:focus,
            .open>.dropdown-toggle.btn-info:hover {
                color: #fff;
                background-color: #269abc;
                border-color: #1b6d85
            }

            .btn-info.active,
            .btn-info:active,
            .open>.dropdown-toggle.btn-info {
                background-image: none
            }

            .btn-info.disabled,
            .btn-info.disabled.active,
            .btn-info.disabled.focus,
            .btn-info.disabled:active,
            .btn-info.disabled:focus,
            .btn-info.disabled:hover,
            .btn-info[disabled],
            .btn-info[disabled].active,
            .btn-info[disabled].focus,
            .btn-info[disabled]:active,
            .btn-info[disabled]:focus,
            .btn-info[disabled]:hover,
            fieldset[disabled] .btn-info,
            fieldset[disabled] .btn-info.active,
            fieldset[disabled] .btn-info.focus,
            fieldset[disabled] .btn-info:active,
            fieldset[disabled] .btn-info:focus,
            fieldset[disabled] .btn-info:hover {
                background-color: #5bc0de;
                border-color: #46b8da
            }

            .btn-info .badge {
                color: #5bc0de;
                background-color: #fff
            }

            .btn-warning {
                color: #fff;
                background-color: #f0ad4e;
                border-color: #eea236
            }

            .btn-warning.focus,
            .btn-warning:focus {
                color: #fff;
                background-color: #ec971f;
                border-color: #985f0d
            }

            .btn-warning:hover {
                color: #fff;
                background-color: #ec971f;
                border-color: #d58512
            }

            .btn-warning.active,
            .btn-warning:active,
            .open>.dropdown-toggle.btn-warning {
                color: #fff;
                background-color: #ec971f;
                border-color: #d58512
            }

            .btn-warning.active.focus,
            .btn-warning.active:focus,
            .btn-warning.active:hover,
            .btn-warning:active.focus,
            .btn-warning:active:focus,
            .btn-warning:active:hover,
            .open>.dropdown-toggle.btn-warning.focus,
            .open>.dropdown-toggle.btn-warning:focus,
            .open>.dropdown-toggle.btn-warning:hover {
                color: #fff;
                background-color: #d58512;
                border-color: #985f0d
            }

            .btn-warning.active,
            .btn-warning:active,
            .open>.dropdown-toggle.btn-warning {
                background-image: none
            }

            .btn-warning.disabled,
            .btn-warning.disabled.active,
            .btn-warning.disabled.focus,
            .btn-warning.disabled:active,
            .btn-warning.disabled:focus,
            .btn-warning.disabled:hover,
            .btn-warning[disabled],
            .btn-warning[disabled].active,
            .btn-warning[disabled].focus,
            .btn-warning[disabled]:active,
            .btn-warning[disabled]:focus,
            .btn-warning[disabled]:hover,
            fieldset[disabled] .btn-warning,
            fieldset[disabled] .btn-warning.active,
            fieldset[disabled] .btn-warning.focus,
            fieldset[disabled] .btn-warning:active,
            fieldset[disabled] .btn-warning:focus,
            fieldset[disabled] .btn-warning:hover {
                background-color: #f0ad4e;
                border-color: #eea236
            }

            .btn-warning .badge {
                color: #f0ad4e;
                background-color: #fff
            }

            .btn-danger {
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a
            }

            .btn-danger.focus,
            .btn-danger:focus {
                color: #fff;
                background-color: #c9302c;
                border-color: #761c19
            }

            .btn-danger:hover {
                color: #fff;
                background-color: #c9302c;
                border-color: #ac2925
            }

            .btn-danger.active,
            .btn-danger:active,
            .open>.dropdown-toggle.btn-danger {
                color: #fff;
                background-color: #c9302c;
                border-color: #ac2925
            }

            .btn-danger.active.focus,
            .btn-danger.active:focus,
            .btn-danger.active:hover,
            .btn-danger:active.focus,
            .btn-danger:active:focus,
            .btn-danger:active:hover,
            .open>.dropdown-toggle.btn-danger.focus,
            .open>.dropdown-toggle.btn-danger:focus,
            .open>.dropdown-toggle.btn-danger:hover {
                color: #fff;
                background-color: #ac2925;
                border-color: #761c19
            }

            .btn-danger.active,
            .btn-danger:active,
            .open>.dropdown-toggle.btn-danger {
                background-image: none
            }

            .btn-danger.disabled,
            .btn-danger.disabled.active,
            .btn-danger.disabled.focus,
            .btn-danger.disabled:active,
            .btn-danger.disabled:focus,
            .btn-danger.disabled:hover,
            .btn-danger[disabled],
            .btn-danger[disabled].active,
            .btn-danger[disabled].focus,
            .btn-danger[disabled]:active,
            .btn-danger[disabled]:focus,
            .btn-danger[disabled]:hover,
            fieldset[disabled] .btn-danger,
            fieldset[disabled] .btn-danger.active,
            fieldset[disabled] .btn-danger.focus,
            fieldset[disabled] .btn-danger:active,
            fieldset[disabled] .btn-danger:focus,
            fieldset[disabled] .btn-danger:hover {
                background-color: #d9534f;
                border-color: #d43f3a
            }

            .btn-danger .badge {
                color: #d9534f;
                background-color: #fff
            }

            .btn-link {
                font-weight: 400;
                color: #337ab7;
                border-radius: 0
            }

            .btn-link,
            .btn-link.active,
            .btn-link:active,
            .btn-link[disabled],
            fieldset[disabled] .btn-link {
                background-color: transparent;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .btn-link,
            .btn-link:active,
            .btn-link:focus,
            .btn-link:hover {
                border-color: transparent
            }

            .btn-link:focus,
            .btn-link:hover {
                color: #23527c;
                text-decoration: underline;
                background-color: transparent
            }

            .btn-link[disabled]:focus,
            .btn-link[disabled]:hover,
            fieldset[disabled] .btn-link:focus,
            fieldset[disabled] .btn-link:hover {
                color: #777;
                text-decoration: none
            }

            .btn-group-lg>.btn,
            .btn-lg {
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333;
                border-radius: 6px
            }

            .btn-group-sm>.btn,
            .btn-sm {
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            .btn-group-xs>.btn,
            .btn-xs {
                padding: 1px 5px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            .btn-block {
                display: block;
                width: 100%
            }

            .btn-block+.btn-block {
                margin-top: 5px
            }

            input[type=button].btn-block,
            input[type=reset].btn-block,
            input[type=submit].btn-block {
                width: 100%
            }

            .fade {
                opacity: 0;
                -webkit-transition: opacity .15s linear;
                -o-transition: opacity .15s linear;
                transition: opacity .15s linear
            }

            .fade.in {
                opacity: 1
            }

            .collapse {
                display: none
            }

            .collapse.in {
                display: block
            }

            tr.collapse.in {
                display: table-row
            }

            tbody.collapse.in {
                display: table-row-group
            }

            .collapsing {
                position: relative;
                height: 0;
                overflow: hidden;
                -webkit-transition-timing-function: ease;
                -o-transition-timing-function: ease;
                transition-timing-function: ease;
                -webkit-transition-duration: .35s;
                -o-transition-duration: .35s;
                transition-duration: .35s;
                -webkit-transition-property: height, visibility;
                -o-transition-property: height, visibility;
                transition-property: height, visibility
            }

            .caret {
                display: inline-block;
                width: 0;
                height: 0;
                margin-left: 2px;
                vertical-align: middle;
                border-top: 4px dashed;
                border-top: 4px solid\9;
                border-right: 4px solid transparent;
                border-left: 4px solid transparent
            }

            .dropdown,
            .dropup {
                position: relative
            }

            .dropdown-toggle:focus {
                outline: 0
            }

            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                display: none;
                float: left;
                min-width: 160px;
                padding: 5px 0;
                margin: 2px 0 0;
                font-size: 14px;
                text-align: left;
                list-style: none;
                background-color: #fff;
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, .15);
                border-radius: 4px;
                -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
                box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
            }

            .dropdown-menu.pull-right {
                right: 0;
                left: auto
            }

            .dropdown-menu .divider {
                height: 1px;
                margin: 9px 0;
                overflow: hidden;
                background-color: #e5e5e5
            }

            .dropdown-menu>li>a {
                display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: 400;
                line-height: 1.42857143;
                color: #333;
                white-space: nowrap
            }

            .dropdown-menu>li>a:focus,
            .dropdown-menu>li>a:hover {
                color: #262626;
                text-decoration: none;
                background-color: #f5f5f5
            }

            .dropdown-menu>.active>a,
            .dropdown-menu>.active>a:focus,
            .dropdown-menu>.active>a:hover {
                color: #fff;
                text-decoration: none;
                background-color: #337ab7;
                outline: 0
            }

            .dropdown-menu>.disabled>a,
            .dropdown-menu>.disabled>a:focus,
            .dropdown-menu>.disabled>a:hover {
                color: #777
            }

            .dropdown-menu>.disabled>a:focus,
            .dropdown-menu>.disabled>a:hover {
                text-decoration: none;
                cursor: not-allowed;
                background-color: transparent;
                background-image: none;
                filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
            }

            .open>.dropdown-menu {
                display: block
            }

            .open>a {
                outline: 0
            }

            .dropdown-menu-right {
                right: 0;
                left: auto
            }

            .dropdown-menu-left {
                right: auto;
                left: 0
            }

            .dropdown-header {
                display: block;
                padding: 3px 20px;
                font-size: 12px;
                line-height: 1.42857143;
                color: #777;
                white-space: nowrap
            }

            .dropdown-backdrop {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 990
            }

            .pull-right>.dropdown-menu {
                right: 0;
                left: auto
            }

            .dropup .caret,
            .navbar-fixed-bottom .dropdown .caret {
                content: "";
                border-top: 0;
                border-bottom: 4px dashed;
                border-bottom: 4px solid\9
            }

            .dropup .dropdown-menu,
            .navbar-fixed-bottom .dropdown .dropdown-menu {
                top: auto;
                bottom: 100%;
                margin-bottom: 2px
            }

            @media (min-width:768px) {
                .navbar-right .dropdown-menu {
                    right: 0;
                    left: auto
                }

                .navbar-right .dropdown-menu-left {
                    right: auto;
                    left: 0
                }
            }

            .btn-group,
            .btn-group-vertical {
                position: relative;
                display: inline-block;
                vertical-align: middle
            }

            .btn-group-vertical>.btn,
            .btn-group>.btn {
                position: relative;
                float: left
            }

            .btn-group-vertical>.btn.active,
            .btn-group-vertical>.btn:active,
            .btn-group-vertical>.btn:focus,
            .btn-group-vertical>.btn:hover,
            .btn-group>.btn.active,
            .btn-group>.btn:active,
            .btn-group>.btn:focus,
            .btn-group>.btn:hover {
                z-index: 2
            }

            .btn-group .btn+.btn,
            .btn-group .btn+.btn-group,
            .btn-group .btn-group+.btn,
            .btn-group .btn-group+.btn-group {
                margin-left: -1px
            }

            .btn-toolbar {
                margin-left: -5px
            }

            .btn-toolbar .btn,
            .btn-toolbar .btn-group,
            .btn-toolbar .input-group {
                float: left
            }

            .btn-toolbar>.btn,
            .btn-toolbar>.btn-group,
            .btn-toolbar>.input-group {
                margin-left: 5px
            }

            .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
                border-radius: 0
            }

            .btn-group>.btn:first-child {
                margin-left: 0
            }

            .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .btn-group>.btn:last-child:not(:first-child),
            .btn-group>.dropdown-toggle:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .btn-group>.btn-group {
                float: left
            }

            .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
                border-radius: 0
            }

            .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
            .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .btn-group .dropdown-toggle:active,
            .btn-group.open .dropdown-toggle {
                outline: 0
            }

            .btn-group>.btn+.dropdown-toggle {
                padding-right: 8px;
                padding-left: 8px
            }

            .btn-group>.btn-lg+.dropdown-toggle {
                padding-right: 12px;
                padding-left: 12px
            }

            .btn-group.open .dropdown-toggle {
                -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
            }

            .btn-group.open .dropdown-toggle.btn-link {
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .btn .caret {
                margin-left: 0
            }

            .btn-lg .caret {
                border-width: 5px 5px 0;
                border-bottom-width: 0
            }

            .dropup .btn-lg .caret {
                border-width: 0 5px 5px
            }

            .btn-group-vertical>.btn,
            .btn-group-vertical>.btn-group,
            .btn-group-vertical>.btn-group>.btn {
                display: block;
                float: none;
                width: 100%;
                max-width: 100%
            }

            .btn-group-vertical>.btn-group>.btn {
                float: none
            }

            .btn-group-vertical>.btn+.btn,
            .btn-group-vertical>.btn+.btn-group,
            .btn-group-vertical>.btn-group+.btn,
            .btn-group-vertical>.btn-group+.btn-group {
                margin-top: -1px;
                margin-left: 0
            }

            .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
                border-radius: 0
            }

            .btn-group-vertical>.btn:first-child:not(:last-child) {
                border-top-right-radius: 4px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0
            }

            .btn-group-vertical>.btn:last-child:not(:first-child) {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-left-radius: 4px
            }

            .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
                border-radius: 0
            }

            .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
            .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0
            }

            .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .btn-group-justified {
                display: table;
                width: 100%;
                table-layout: fixed;
                border-collapse: separate
            }

            .btn-group-justified>.btn,
            .btn-group-justified>.btn-group {
                display: table-cell;
                float: none;
                width: 1%
            }

            .btn-group-justified>.btn-group .btn {
                width: 100%
            }

            .btn-group-justified>.btn-group .dropdown-menu {
                left: auto
            }

            [data-toggle=buttons]>.btn input[type=checkbox],
            [data-toggle=buttons]>.btn input[type=radio],
            [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
            [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
                position: absolute;
                clip: rect(0, 0, 0, 0);
                pointer-events: none
            }

            .input-group {
                position: relative;
                display: table;
                border-collapse: separate
            }

            .input-group[class*=col-] {
                float: none;
                padding-right: 0;
                padding-left: 0
            }

            .input-group .form-control {
                position: relative;
                z-index: 2;
                float: left;
                width: 100%;
                margin-bottom: 0
            }

            .input-group-lg>.form-control,
            .input-group-lg>.input-group-addon,
            .input-group-lg>.input-group-btn>.btn {
                height: 46px;
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333;
                border-radius: 6px
            }

            select.input-group-lg>.form-control,
            select.input-group-lg>.input-group-addon,
            select.input-group-lg>.input-group-btn>.btn {
                height: 46px;
                line-height: 46px
            }

            select[multiple].input-group-lg>.form-control,
            select[multiple].input-group-lg>.input-group-addon,
            select[multiple].input-group-lg>.input-group-btn>.btn,
            textarea.input-group-lg>.form-control,
            textarea.input-group-lg>.input-group-addon,
            textarea.input-group-lg>.input-group-btn>.btn {
                height: auto
            }

            .input-group-sm>.form-control,
            .input-group-sm>.input-group-addon,
            .input-group-sm>.input-group-btn>.btn {
                height: 30px;
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            select.input-group-sm>.form-control,
            select.input-group-sm>.input-group-addon,
            select.input-group-sm>.input-group-btn>.btn {
                height: 30px;
                line-height: 30px
            }

            select[multiple].input-group-sm>.form-control,
            select[multiple].input-group-sm>.input-group-addon,
            select[multiple].input-group-sm>.input-group-btn>.btn,
            textarea.input-group-sm>.form-control,
            textarea.input-group-sm>.input-group-addon,
            textarea.input-group-sm>.input-group-btn>.btn {
                height: auto
            }

            .input-group .form-control,
            .input-group-addon,
            .input-group-btn {
                display: table-cell
            }

            .input-group .form-control:not(:first-child):not(:last-child),
            .input-group-addon:not(:first-child):not(:last-child),
            .input-group-btn:not(:first-child):not(:last-child) {
                border-radius: 0
            }

            .input-group-addon,
            .input-group-btn {
                width: 1%;
                white-space: nowrap;
                vertical-align: middle
            }

            .input-group-addon {
                padding: 6px 12px;
                font-size: 14px;
                font-weight: 400;
                line-height: 1;
                color: #555;
                text-align: center;
                background-color: #eee;
                border: 1px solid #ccc;
                border-radius: 4px
            }

            .input-group-addon.input-sm {
                padding: 5px 10px;
                font-size: 12px;
                border-radius: 3px
            }

            .input-group-addon.input-lg {
                padding: 10px 16px;
                font-size: 18px;
                border-radius: 6px
            }

            .input-group-addon input[type=checkbox],
            .input-group-addon input[type=radio] {
                margin-top: 0
            }

            .input-group .form-control:first-child,
            .input-group-addon:first-child,
            .input-group-btn:first-child>.btn,
            .input-group-btn:first-child>.btn-group>.btn,
            .input-group-btn:first-child>.dropdown-toggle,
            .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
            .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .input-group-addon:first-child {
                border-right: 0
            }

            .input-group .form-control:last-child,
            .input-group-addon:last-child,
            .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
            .input-group-btn:first-child>.btn:not(:first-child),
            .input-group-btn:last-child>.btn,
            .input-group-btn:last-child>.btn-group>.btn,
            .input-group-btn:last-child>.dropdown-toggle {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .input-group-addon:last-child {
                border-left: 0
            }

            .input-group-btn {
                position: relative;
                font-size: 0;
                white-space: nowrap
            }

            .input-group-btn>.btn {
                position: relative
            }

            .input-group-btn>.btn+.btn {
                margin-left: -1px
            }

            .input-group-btn>.btn:active,
            .input-group-btn>.btn:focus,
            .input-group-btn>.btn:hover {
                z-index: 2
            }

            .input-group-btn:first-child>.btn,
            .input-group-btn:first-child>.btn-group {
                margin-right: -1px
            }

            .input-group-btn:last-child>.btn,
            .input-group-btn:last-child>.btn-group {
                z-index: 2;
                margin-left: -1px
            }

            .nav {
                padding-left: 0;
                margin-bottom: 0;
                list-style: none
            }

            .nav>li {
                position: relative;
                display: block
            }

            .nav>li>a {
                position: relative;
                display: block;
                padding: 10px 15px
            }

            .nav>li>a:focus,
            .nav>li>a:hover {
                text-decoration: none;
                background-color: #eee
            }

            .nav>li.disabled>a {
                color: #777
            }

            .nav>li.disabled>a:focus,
            .nav>li.disabled>a:hover {
                color: #777;
                text-decoration: none;
                cursor: not-allowed;
                background-color: transparent
            }

            .nav .open>a,
            .nav .open>a:focus,
            .nav .open>a:hover {
                background-color: #eee;
                border-color: #337ab7
            }

            .nav .nav-divider {
                height: 1px;
                margin: 9px 0;
                overflow: hidden;
                background-color: #e5e5e5
            }

            .nav>li>a>img {
                max-width: none
            }

            .nav-tabs {
                border-bottom: 1px solid #ddd
            }

            .nav-tabs>li {
                float: left;
                margin-bottom: -1px
            }

            .nav-tabs>li>a {
                margin-right: 2px;
                line-height: 1.42857143;
                border: 1px solid transparent;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs>li>a:hover {
                border-color: #eee #eee #ddd
            }

            .nav-tabs>li.active>a,
            .nav-tabs>li.active>a:focus,
            .nav-tabs>li.active>a:hover {
                color: #555;
                cursor: default;
                background-color: #fff;
                border: 1px solid #ddd;
                border-bottom-color: transparent
            }

            .nav-tabs.nav-justified {
                width: 100%;
                border-bottom: 0
            }

            .nav-tabs.nav-justified>li {
                float: none
            }

            .nav-tabs.nav-justified>li>a {
                margin-bottom: 5px;
                text-align: center
            }

            .nav-tabs.nav-justified>.dropdown .dropdown-menu {
                top: auto;
                left: auto
            }

            @media (min-width:768px) {
                .nav-tabs.nav-justified>li {
                    display: table-cell;
                    width: 1%
                }

                .nav-tabs.nav-justified>li>a {
                    margin-bottom: 0
                }
            }

            .nav-tabs.nav-justified>li>a {
                margin-right: 0;
                border-radius: 4px
            }

            .nav-tabs.nav-justified>.active>a,
            .nav-tabs.nav-justified>.active>a:focus,
            .nav-tabs.nav-justified>.active>a:hover {
                border: 1px solid #ddd
            }

            @media (min-width:768px) {
                .nav-tabs.nav-justified>li>a {
                    border-bottom: 1px solid #ddd;
                    border-radius: 4px 4px 0 0
                }

                .nav-tabs.nav-justified>.active>a,
                .nav-tabs.nav-justified>.active>a:focus,
                .nav-tabs.nav-justified>.active>a:hover {
                    border-bottom-color: #fff
                }
            }

            .nav-pills>li {
                float: left
            }

            .nav-pills>li>a {
                border-radius: 4px
            }

            .nav-pills>li+li {
                margin-left: 2px
            }

            .nav-pills>li.active>a,
            .nav-pills>li.active>a:focus,
            .nav-pills>li.active>a:hover {
                color: #fff;
                background-color: #337ab7
            }

            .nav-stacked>li {
                float: none
            }

            .nav-stacked>li+li {
                margin-top: 2px;
                margin-left: 0
            }

            .nav-justified {
                width: 100%
            }

            .nav-justified>li {
                float: none
            }

            .nav-justified>li>a {
                margin-bottom: 5px;
                text-align: center
            }

            .nav-justified>.dropdown .dropdown-menu {
                top: auto;
                left: auto
            }

            @media (min-width:768px) {
                .nav-justified>li {
                    display: table-cell;
                    width: 1%
                }

                .nav-justified>li>a {
                    margin-bottom: 0
                }
            }

            .nav-tabs-justified {
                border-bottom: 0
            }

            .nav-tabs-justified>li>a {
                margin-right: 0;
                border-radius: 4px
            }

            .nav-tabs-justified>.active>a,
            .nav-tabs-justified>.active>a:focus,
            .nav-tabs-justified>.active>a:hover {
                border: 1px solid #ddd
            }

            @media (min-width:768px) {
                .nav-tabs-justified>li>a {
                    border-bottom: 1px solid #ddd;
                    border-radius: 4px 4px 0 0
                }

                .nav-tabs-justified>.active>a,
                .nav-tabs-justified>.active>a:focus,
                .nav-tabs-justified>.active>a:hover {
                    border-bottom-color: #fff
                }
            }

            .tab-content>.tab-pane {
                display: none
            }

            .tab-content>.active {
                display: block
            }

            .nav-tabs .dropdown-menu {
                margin-top: -1px;
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .navbar {
                position: relative;
                min-height: 50px;
                margin-bottom: 20px;
                border: 1px solid transparent
            }

            @media (min-width:768px) {
                .navbar {
                    border-radius: 4px
                }
            }

            @media (min-width:768px) {
                .navbar-header {
                    float: left
                }
            }

            .navbar-collapse {
                padding-right: 15px;
                padding-left: 15px;
                overflow-x: visible;
                -webkit-overflow-scrolling: touch;
                border-top: 1px solid transparent;
                -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
            }

            .navbar-collapse.in {
                overflow-y: auto
            }

            @media (min-width:768px) {
                .navbar-collapse {
                    width: auto;
                    border-top: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none
                }

                .navbar-collapse.collapse {
                    display: block !important;
                    height: auto !important;
                    padding-bottom: 0;
                    overflow: visible !important
                }

                .navbar-collapse.in {
                    overflow-y: visible
                }

                .navbar-fixed-bottom .navbar-collapse,
                .navbar-fixed-top .navbar-collapse,
                .navbar-static-top .navbar-collapse {
                    padding-right: 0;
                    padding-left: 0
                }
            }

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse {
                max-height: 340px
            }

            @media (max-device-width:480px) and (orientation:landscape) {

                .navbar-fixed-bottom .navbar-collapse,
                .navbar-fixed-top .navbar-collapse {
                    max-height: 200px
                }
            }

            .container-fluid>.navbar-collapse,
            .container-fluid>.navbar-header,
            .container>.navbar-collapse,
            .container>.navbar-header {
                margin-right: -15px;
                margin-left: -15px
            }

            @media (min-width:768px) {

                .container-fluid>.navbar-collapse,
                .container-fluid>.navbar-header,
                .container>.navbar-collapse,
                .container>.navbar-header {
                    margin-right: 0;
                    margin-left: 0
                }
            }

            .navbar-static-top {
                z-index: 1000;
                border-width: 0 0 1px
            }

            @media (min-width:768px) {
                .navbar-static-top {
                    border-radius: 0
                }
            }

            .navbar-fixed-bottom,
            .navbar-fixed-top {
                position: fixed;
                right: 0;
                left: 0;
                z-index: 1030
            }

            @media (min-width:768px) {

                .navbar-fixed-bottom,
                .navbar-fixed-top {
                    border-radius: 0
                }
            }

            .navbar-fixed-top {
                top: 0;
                border-width: 0 0 1px
            }

            .navbar-fixed-bottom {
                bottom: 0;
                margin-bottom: 0;
                border-width: 1px 0 0
            }

            .navbar-brand {
                float: left;
                height: 50px;
                padding: 15px 15px;
                font-size: 18px;
                line-height: 20px
            }

            .navbar-brand:focus,
            .navbar-brand:hover {
                text-decoration: none
            }

            .navbar-brand>img {
                display: block
            }

            @media (min-width:768px) {

                .navbar>.container .navbar-brand,
                .navbar>.container-fluid .navbar-brand {
                    margin-left: -15px
                }
            }

            .navbar-toggle {
                position: relative;
                float: right;
                padding: 9px 10px;
                margin-top: 8px;
                margin-right: 15px;
                margin-bottom: 8px;
                background-color: transparent;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px
            }

            .navbar-toggle:focus {
                outline: 0
            }

            .navbar-toggle .icon-bar {
                display: block;
                width: 22px;
                height: 2px;
                border-radius: 1px
            }

            .navbar-toggle .icon-bar+.icon-bar {
                margin-top: 4px
            }

            @media (min-width:768px) {
                .navbar-toggle {
                    display: none
                }
            }

            .navbar-nav {
                margin: 7.5px -15px
            }

            .navbar-nav>li>a {
                padding-top: 10px;
                padding-bottom: 10px;
                line-height: 20px
            }

            @media (max-width:767px) {
                .navbar-nav .open .dropdown-menu {
                    position: static;
                    float: none;
                    width: auto;
                    margin-top: 0;
                    background-color: transparent;
                    border: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none
                }

                .navbar-nav .open .dropdown-menu .dropdown-header,
                .navbar-nav .open .dropdown-menu>li>a {
                    padding: 5px 15px 5px 25px
                }

                .navbar-nav .open .dropdown-menu>li>a {
                    line-height: 20px
                }

                .navbar-nav .open .dropdown-menu>li>a:focus,
                .navbar-nav .open .dropdown-menu>li>a:hover {
                    background-image: none
                }
            }

            @media (min-width:768px) {
                .navbar-nav {
                    float: left;
                    margin: 0
                }

                .navbar-nav>li {
                    float: left
                }

                .navbar-nav>li>a {
                    padding-top: 15px;
                    padding-bottom: 15px
                }
            }

            .navbar-form {
                padding: 10px 15px;
                margin-top: 8px;
                margin-right: -15px;
                margin-bottom: 8px;
                margin-left: -15px;
                border-top: 1px solid transparent;
                border-bottom: 1px solid transparent;
                -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
            }

            @media (min-width:768px) {
                .navbar-form .form-group {
                    display: inline-block;
                    margin-bottom: 0;
                    vertical-align: middle
                }

                .navbar-form .form-control {
                    display: inline-block;
                    width: auto;
                    vertical-align: middle
                }

                .navbar-form .form-control-static {
                    display: inline-block
                }

                .navbar-form .input-group {
                    display: inline-table;
                    vertical-align: middle
                }

                .navbar-form .input-group .form-control,
                .navbar-form .input-group .input-group-addon,
                .navbar-form .input-group .input-group-btn {
                    width: auto
                }

                .navbar-form .input-group>.form-control {
                    width: 100%
                }

                .navbar-form .control-label {
                    margin-bottom: 0;
                    vertical-align: middle
                }

                .navbar-form .checkbox,
                .navbar-form .radio {
                    display: inline-block;
                    margin-top: 0;
                    margin-bottom: 0;
                    vertical-align: middle
                }

                .navbar-form .checkbox label,
                .navbar-form .radio label {
                    padding-left: 0
                }

                .navbar-form .checkbox input[type=checkbox],
                .navbar-form .radio input[type=radio] {
                    position: relative;
                    margin-left: 0
                }

                .navbar-form .has-feedback .form-control-feedback {
                    top: 0
                }
            }

            @media (max-width:767px) {
                .navbar-form .form-group {
                    margin-bottom: 5px
                }

                .navbar-form .form-group:last-child {
                    margin-bottom: 0
                }
            }

            @media (min-width:768px) {
                .navbar-form {
                    width: auto;
                    padding-top: 0;
                    padding-bottom: 0;
                    margin-right: 0;
                    margin-left: 0;
                    border: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none
                }
            }

            .navbar-nav>li>.dropdown-menu {
                margin-top: 0;
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
                margin-bottom: 0;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0
            }

            .navbar-btn {
                margin-top: 8px;
                margin-bottom: 8px
            }

            .navbar-btn.btn-sm {
                margin-top: 10px;
                margin-bottom: 10px
            }

            .navbar-btn.btn-xs {
                margin-top: 14px;
                margin-bottom: 14px
            }

            .navbar-text {
                margin-top: 15px;
                margin-bottom: 15px
            }

            @media (min-width:768px) {
                .navbar-text {
                    float: left;
                    margin-right: 15px;
                    margin-left: 15px
                }
            }

            @media (min-width:768px) {
                .navbar-left {
                    float: left !important
                }

                .navbar-right {
                    float: right !important;
                    margin-right: -15px
                }

                .navbar-right~.navbar-right {
                    margin-right: 0
                }
            }

            .navbar-default {
                background-color: #f8f8f8;
                border-color: #e7e7e7
            }

            .navbar-default .navbar-brand {
                color: #777
            }

            .navbar-default .navbar-brand:focus,
            .navbar-default .navbar-brand:hover {
                color: #5e5e5e;
                background-color: transparent
            }

            .navbar-default .navbar-text {
                color: #777
            }

            .navbar-default .navbar-nav>li>a {
                color: #777
            }

            .navbar-default .navbar-nav>li>a:focus,
            .navbar-default .navbar-nav>li>a:hover {
                color: #333;
                background-color: transparent
            }

            .navbar-default .navbar-nav>.active>a,
            .navbar-default .navbar-nav>.active>a:focus,
            .navbar-default .navbar-nav>.active>a:hover {
                color: #555;
                background-color: #e7e7e7
            }

            .navbar-default .navbar-nav>.disabled>a,
            .navbar-default .navbar-nav>.disabled>a:focus,
            .navbar-default .navbar-nav>.disabled>a:hover {
                color: #ccc;
                background-color: transparent
            }

            .navbar-default .navbar-toggle {
                border-color: #ddd
            }

            .navbar-default .navbar-toggle:focus,
            .navbar-default .navbar-toggle:hover {
                background-color: #ddd
            }

            .navbar-default .navbar-toggle .icon-bar {
                background-color: #888
            }

            .navbar-default .navbar-collapse,
            .navbar-default .navbar-form {
                border-color: #e7e7e7
            }

            .navbar-default .navbar-nav>.open>a,
            .navbar-default .navbar-nav>.open>a:focus,
            .navbar-default .navbar-nav>.open>a:hover {
                color: #555;
                background-color: #e7e7e7
            }

            @media (max-width:767px) {
                .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                    color: #777
                }

                .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
                .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
                    color: #333;
                    background-color: transparent
                }

                .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
                .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
                .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
                    color: #555;
                    background-color: #e7e7e7
                }

                .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
                .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
                .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                    color: #ccc;
                    background-color: transparent
                }
            }

            .navbar-default .navbar-link {
                color: #777
            }

            .navbar-default .navbar-link:hover {
                color: #333
            }

            .navbar-default .btn-link {
                color: #777
            }

            .navbar-default .btn-link:focus,
            .navbar-default .btn-link:hover {
                color: #333
            }

            .navbar-default .btn-link[disabled]:focus,
            .navbar-default .btn-link[disabled]:hover,
            fieldset[disabled] .navbar-default .btn-link:focus,
            fieldset[disabled] .navbar-default .btn-link:hover {
                color: #ccc
            }

            .navbar-inverse {
                background-color: #222;
                border-color: #080808
            }

            .navbar-inverse .navbar-brand {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-brand:focus,
            .navbar-inverse .navbar-brand:hover {
                color: #fff;
                background-color: transparent
            }

            .navbar-inverse .navbar-text {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-nav>li>a {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-nav>li>a:focus,
            .navbar-inverse .navbar-nav>li>a:hover {
                color: #fff;
                background-color: transparent
            }

            .navbar-inverse .navbar-nav>.active>a,
            .navbar-inverse .navbar-nav>.active>a:focus,
            .navbar-inverse .navbar-nav>.active>a:hover {
                color: #fff;
                background-color: #080808
            }

            .navbar-inverse .navbar-nav>.disabled>a,
            .navbar-inverse .navbar-nav>.disabled>a:focus,
            .navbar-inverse .navbar-nav>.disabled>a:hover {
                color: #444;
                background-color: transparent
            }

            .navbar-inverse .navbar-toggle {
                border-color: #333
            }

            .navbar-inverse .navbar-toggle:focus,
            .navbar-inverse .navbar-toggle:hover {
                background-color: #333
            }

            .navbar-inverse .navbar-toggle .icon-bar {
                background-color: #fff
            }

            .navbar-inverse .navbar-collapse,
            .navbar-inverse .navbar-form {
                border-color: #101010
            }

            .navbar-inverse .navbar-nav>.open>a,
            .navbar-inverse .navbar-nav>.open>a:focus,
            .navbar-inverse .navbar-nav>.open>a:hover {
                color: #fff;
                background-color: #080808
            }

            @media (max-width:767px) {
                .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
                    border-color: #080808
                }

                .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
                    background-color: #080808
                }

                .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                    color: #9d9d9d
                }

                .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
                .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
                    color: #fff;
                    background-color: transparent
                }

                .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
                .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
                .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
                    color: #fff;
                    background-color: #080808
                }

                .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
                .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
                .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                    color: #444;
                    background-color: transparent
                }
            }

            .navbar-inverse .navbar-link {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-link:hover {
                color: #fff
            }

            .navbar-inverse .btn-link {
                color: #9d9d9d
            }

            .navbar-inverse .btn-link:focus,
            .navbar-inverse .btn-link:hover {
                color: #fff
            }

            .navbar-inverse .btn-link[disabled]:focus,
            .navbar-inverse .btn-link[disabled]:hover,
            fieldset[disabled] .navbar-inverse .btn-link:focus,
            fieldset[disabled] .navbar-inverse .btn-link:hover {
                color: #444
            }

            .breadcrumb {
                padding: 8px 15px;
                margin-bottom: 20px;
                list-style: none;
                background-color: #f5f5f5;
                border-radius: 4px
            }

            .breadcrumb>li {
                display: inline-block
            }

            .breadcrumb>li+li:before {
                padding: 0 5px;
                color: #ccc;
                content: "/\00a0"
            }

            .breadcrumb>.active {
                color: #777
            }

            .pagination {
                display: inline-block;
                padding-left: 0;
                margin: 20px 0;
                border-radius: 4px
            }

            .pagination>li {
                display: inline
            }

            .pagination>li>a,
            .pagination>li>span {
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #337ab7;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd
            }

            .pagination>li:first-child>a,
            .pagination>li:first-child>span {
                margin-left: 0;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px
            }

            .pagination>li:last-child>a,
            .pagination>li:last-child>span {
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px
            }

            .pagination>li>a:focus,
            .pagination>li>a:hover,
            .pagination>li>span:focus,
            .pagination>li>span:hover {
                z-index: 3;
                color: #23527c;
                background-color: #eee;
                border-color: #ddd
            }

            .pagination>.active>a,
            .pagination>.active>a:focus,
            .pagination>.active>a:hover,
            .pagination>.active>span,
            .pagination>.active>span:focus,
            .pagination>.active>span:hover {
                z-index: 2;
                color: #fff;
                cursor: default;
                background-color: #337ab7;
                border-color: #337ab7
            }

            .pagination>.disabled>a,
            .pagination>.disabled>a:focus,
            .pagination>.disabled>a:hover,
            .pagination>.disabled>span,
            .pagination>.disabled>span:focus,
            .pagination>.disabled>span:hover {
                color: #777;
                cursor: not-allowed;
                background-color: #fff;
                border-color: #ddd
            }

            .pagination-lg>li>a,
            .pagination-lg>li>span {
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333
            }

            .pagination-lg>li:first-child>a,
            .pagination-lg>li:first-child>span {
                border-top-left-radius: 6px;
                border-bottom-left-radius: 6px
            }

            .pagination-lg>li:last-child>a,
            .pagination-lg>li:last-child>span {
                border-top-right-radius: 6px;
                border-bottom-right-radius: 6px
            }

            .pagination-sm>li>a,
            .pagination-sm>li>span {
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.5
            }

            .pagination-sm>li:first-child>a,
            .pagination-sm>li:first-child>span {
                border-top-left-radius: 3px;
                border-bottom-left-radius: 3px
            }

            .pagination-sm>li:last-child>a,
            .pagination-sm>li:last-child>span {
                border-top-right-radius: 3px;
                border-bottom-right-radius: 3px
            }

            .pager {
                padding-left: 0;
                margin: 20px 0;
                text-align: center;
                list-style: none
            }

            .pager li {
                display: inline
            }

            .pager li>a,
            .pager li>span {
                display: inline-block;
                padding: 5px 14px;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 15px
            }

            .pager li>a:focus,
            .pager li>a:hover {
                text-decoration: none;
                background-color: #eee
            }

            .pager .next>a,
            .pager .next>span {
                float: right
            }

            .pager .previous>a,
            .pager .previous>span {
                float: left
            }

            .pager .disabled>a,
            .pager .disabled>a:focus,
            .pager .disabled>a:hover,
            .pager .disabled>span {
                color: #777;
                cursor: not-allowed;
                background-color: #fff
            }

            .label {
                display: inline;
                padding: .2em .6em .3em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em
            }

            a.label:focus,
            a.label:hover {
                color: #fff;
                text-decoration: none;
                cursor: pointer
            }

            .label:empty {
                display: none
            }

            .btn .label {
                position: relative;
                top: -1px
            }

            .label-default {
                background-color: #777
            }

            .label-default[href]:focus,
            .label-default[href]:hover {
                background-color: #5e5e5e
            }

            .label-primary {
                background-color: #337ab7
            }

            .label-primary[href]:focus,
            .label-primary[href]:hover {
                background-color: #286090
            }

            .label-success {
                background-color: #5cb85c
            }

            .label-success[href]:focus,
            .label-success[href]:hover {
                background-color: #449d44
            }

            .label-info {
                background-color: #5bc0de
            }

            .label-info[href]:focus,
            .label-info[href]:hover {
                background-color: #31b0d5
            }

            .label-warning {
                background-color: #f0ad4e
            }

            .label-warning[href]:focus,
            .label-warning[href]:hover {
                background-color: #ec971f
            }

            .label-danger {
                background-color: #d9534f
            }

            .label-danger[href]:focus,
            .label-danger[href]:hover {
                background-color: #c9302c
            }

            .badge {
                display: inline-block;
                min-width: 10px;
                padding: 3px 7px;
                font-size: 12px;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                background-color: #777;
                border-radius: 10px
            }

            .badge:empty {
                display: none
            }

            .btn .badge {
                position: relative;
                top: -1px
            }

            .btn-group-xs>.btn .badge,
            .btn-xs .badge {
                top: 0;
                padding: 1px 5px
            }

            a.badge:focus,
            a.badge:hover {
                color: #fff;
                text-decoration: none;
                cursor: pointer
            }

            .list-group-item.active>.badge,
            .nav-pills>.active>a>.badge {
                color: #337ab7;
                background-color: #fff
            }

            .list-group-item>.badge {
                float: right
            }

            .list-group-item>.badge+.badge {
                margin-right: 5px
            }

            .nav-pills>li>a>.badge {
                margin-left: 3px
            }

            .jumbotron {
                padding-top: 30px;
                padding-bottom: 30px;
                margin-bottom: 30px;
                color: inherit;
                background-color: #eee
            }

            .jumbotron .h1,
            .jumbotron h1 {
                color: inherit
            }

            .jumbotron p {
                margin-bottom: 15px;
                font-size: 21px;
                font-weight: 200
            }

            .jumbotron>hr {
                border-top-color: #d5d5d5
            }

            .container .jumbotron,
            .container-fluid .jumbotron {
                border-radius: 6px
            }

            .jumbotron .container {
                max-width: 100%
            }

            @media screen and (min-width:768px) {
                .jumbotron {
                    padding-top: 48px;
                    padding-bottom: 48px
                }

                .container .jumbotron,
                .container-fluid .jumbotron {
                    padding-right: 60px;
                    padding-left: 60px
                }

                .jumbotron .h1,
                .jumbotron h1 {
                    font-size: 63px
                }
            }

            .thumbnail {
                display: block;
                padding: 4px;
                margin-bottom: 20px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: border .2s ease-in-out;
                -o-transition: border .2s ease-in-out;
                transition: border .2s ease-in-out
            }

            .thumbnail a>img,
            .thumbnail>img {
                margin-right: auto;
                margin-left: auto
            }

            a.thumbnail.active,
            a.thumbnail:focus,
            a.thumbnail:hover {
                border-color: #337ab7
            }

            .thumbnail .caption {
                padding: 9px;
                color: #333
            }

            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px
            }

            .alert h4 {
                margin-top: 0;
                color: inherit
            }

            .alert .alert-link {
                font-weight: 700
            }

            .alert>p,
            .alert>ul {
                margin-bottom: 0
            }

            .alert>p+p {
                margin-top: 5px
            }

            .alert-dismissable,
            .alert-dismissible {
                padding-right: 35px
            }

            .alert-dismissable .close,
            .alert-dismissible .close {
                position: relative;
                top: -2px;
                right: -21px;
                color: inherit
            }

            .alert-success {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6
            }

            .alert-success hr {
                border-top-color: #c9e2b3
            }

            .alert-success .alert-link {
                color: #2b542c
            }

            .alert-info {
                color: #31708f;
                background-color: #d9edf7;
                border-color: #bce8f1
            }

            .alert-info hr {
                border-top-color: #a6e1ec
            }

            .alert-info .alert-link {
                color: #245269
            }

            .alert-warning {
                color: #8a6d3b;
                background-color: #fcf8e3;
                border-color: #faebcc
            }

            .alert-warning hr {
                border-top-color: #f7e1b5
            }

            .alert-warning .alert-link {
                color: #66512c
            }

            .alert-danger {
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1
            }

            .alert-danger hr {
                border-top-color: #e4b9c0
            }

            .alert-danger .alert-link {
                color: #843534
            }

            @-webkit-keyframes progress-bar-stripes {
                from {
                    background-position: 40px 0
                }

                to {
                    background-position: 0 0
                }
            }

            @-o-keyframes progress-bar-stripes {
                from {
                    background-position: 40px 0
                }

                to {
                    background-position: 0 0
                }
            }

            @keyframes progress-bar-stripes {
                from {
                    background-position: 40px 0
                }

                to {
                    background-position: 0 0
                }
            }

            .progress {
                height: 20px;
                margin-bottom: 20px;
                overflow: hidden;
                background-color: #f5f5f5;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
            }

            .progress-bar {
                float: left;
                width: 0;
                height: 100%;
                font-size: 12px;
                line-height: 20px;
                color: #fff;
                text-align: center;
                background-color: #337ab7;
                -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
                -webkit-transition: width .6s ease;
                -o-transition: width .6s ease;
                transition: width .6s ease
            }

            .progress-bar-striped,
            .progress-striped .progress-bar {
                background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                -webkit-background-size: 40px 40px;
                background-size: 40px 40px
            }

            .progress-bar.active,
            .progress.active .progress-bar {
                -webkit-animation: progress-bar-stripes 2s linear infinite;
                -o-animation: progress-bar-stripes 2s linear infinite;
                animation: progress-bar-stripes 2s linear infinite
            }

            .progress-bar-success {
                background-color: #5cb85c
            }

            .progress-striped .progress-bar-success {
                background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
            }

            .progress-bar-info {
                background-color: #5bc0de
            }

            .progress-striped .progress-bar-info {
                background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
            }

            .progress-bar-warning {
                background-color: #f0ad4e
            }

            .progress-striped .progress-bar-warning {
                background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
            }

            .progress-bar-danger {
                background-color: #d9534f
            }

            .progress-striped .progress-bar-danger {
                background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
                background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
            }

            .media {
                margin-top: 15px
            }

            .media:first-child {
                margin-top: 0
            }

            .media,
            .media-body {
                overflow: hidden;
                zoom: 1
            }

            .media-body {
                width: 10000px
            }

            .media-object {
                display: block
            }

            .media-object.img-thumbnail {
                max-width: none
            }

            .media-right,
            .media>.pull-right {
                padding-left: 10px
            }

            .media-left,
            .media>.pull-left {
                padding-right: 10px
            }

            .media-body,
            .media-left,
            .media-right {
                display: table-cell;
                vertical-align: top
            }

            .media-middle {
                vertical-align: middle
            }

            .media-bottom {
                vertical-align: bottom
            }

            .media-heading {
                margin-top: 0;
                margin-bottom: 5px
            }

            .media-list {
                padding-left: 0;
                list-style: none
            }

            .list-group {
                padding-left: 0;
                margin-bottom: 20px
            }

            .list-group-item {
                position: relative;
                display: block;
                padding: 10px 15px;
                margin-bottom: -1px;
                background-color: #fff;
                border: 1px solid #ddd
            }

            .list-group-item:first-child {
                border-top-left-radius: 4px;
                border-top-right-radius: 4px
            }

            .list-group-item:last-child {
                margin-bottom: 0;
                border-bottom-right-radius: 4px;
                border-bottom-left-radius: 4px
            }

            a.list-group-item,
            button.list-group-item {
                color: #555
            }

            a.list-group-item .list-group-item-heading,
            button.list-group-item .list-group-item-heading {
                color: #333
            }

            a.list-group-item:focus,
            a.list-group-item:hover,
            button.list-group-item:focus,
            button.list-group-item:hover {
                color: #555;
                text-decoration: none;
                background-color: #f5f5f5
            }

            button.list-group-item {
                width: 100%;
                text-align: left
            }

            .list-group-item.disabled,
            .list-group-item.disabled:focus,
            .list-group-item.disabled:hover {
                color: #777;
                cursor: not-allowed;
                background-color: #eee
            }

            .list-group-item.disabled .list-group-item-heading,
            .list-group-item.disabled:focus .list-group-item-heading,
            .list-group-item.disabled:hover .list-group-item-heading {
                color: inherit
            }

            .list-group-item.disabled .list-group-item-text,
            .list-group-item.disabled:focus .list-group-item-text,
            .list-group-item.disabled:hover .list-group-item-text {
                color: #777
            }

            .list-group-item.active,
            .list-group-item.active:focus,
            .list-group-item.active:hover {
                z-index: 2;
                color: #fff;
                background-color: #337ab7;
                border-color: #337ab7
            }

            .list-group-item.active .list-group-item-heading,
            .list-group-item.active .list-group-item-heading>.small,
            .list-group-item.active .list-group-item-heading>small,
            .list-group-item.active:focus .list-group-item-heading,
            .list-group-item.active:focus .list-group-item-heading>.small,
            .list-group-item.active:focus .list-group-item-heading>small,
            .list-group-item.active:hover .list-group-item-heading,
            .list-group-item.active:hover .list-group-item-heading>.small,
            .list-group-item.active:hover .list-group-item-heading>small {
                color: inherit
            }

            .list-group-item.active .list-group-item-text,
            .list-group-item.active:focus .list-group-item-text,
            .list-group-item.active:hover .list-group-item-text {
                color: #c7ddef
            }

            .list-group-item-success {
                color: #3c763d;
                background-color: #dff0d8
            }

            a.list-group-item-success,
            button.list-group-item-success {
                color: #3c763d
            }

            a.list-group-item-success .list-group-item-heading,
            button.list-group-item-success .list-group-item-heading {
                color: inherit
            }

            a.list-group-item-success:focus,
            a.list-group-item-success:hover,
            button.list-group-item-success:focus,
            button.list-group-item-success:hover {
                color: #3c763d;
                background-color: #d0e9c6
            }

            a.list-group-item-success.active,
            a.list-group-item-success.active:focus,
            a.list-group-item-success.active:hover,
            button.list-group-item-success.active,
            button.list-group-item-success.active:focus,
            button.list-group-item-success.active:hover {
                color: #fff;
                background-color: #3c763d;
                border-color: #3c763d
            }

            .list-group-item-info {
                color: #31708f;
                background-color: #d9edf7
            }

            a.list-group-item-info,
            button.list-group-item-info {
                color: #31708f
            }

            a.list-group-item-info .list-group-item-heading,
            button.list-group-item-info .list-group-item-heading {
                color: inherit
            }

            a.list-group-item-info:focus,
            a.list-group-item-info:hover,
            button.list-group-item-info:focus,
            button.list-group-item-info:hover {
                color: #31708f;
                background-color: #c4e3f3
            }

            a.list-group-item-info.active,
            a.list-group-item-info.active:focus,
            a.list-group-item-info.active:hover,
            button.list-group-item-info.active,
            button.list-group-item-info.active:focus,
            button.list-group-item-info.active:hover {
                color: #fff;
                background-color: #31708f;
                border-color: #31708f
            }

            .list-group-item-warning {
                color: #8a6d3b;
                background-color: #fcf8e3
            }

            a.list-group-item-warning,
            button.list-group-item-warning {
                color: #8a6d3b
            }

            a.list-group-item-warning .list-group-item-heading,
            button.list-group-item-warning .list-group-item-heading {
                color: inherit
            }

            a.list-group-item-warning:focus,
            a.list-group-item-warning:hover,
            button.list-group-item-warning:focus,
            button.list-group-item-warning:hover {
                color: #8a6d3b;
                background-color: #faf2cc
            }

            a.list-group-item-warning.active,
            a.list-group-item-warning.active:focus,
            a.list-group-item-warning.active:hover,
            button.list-group-item-warning.active,
            button.list-group-item-warning.active:focus,
            button.list-group-item-warning.active:hover {
                color: #fff;
                background-color: #8a6d3b;
                border-color: #8a6d3b
            }

            .list-group-item-danger {
                color: #a94442;
                background-color: #f2dede
            }

            a.list-group-item-danger,
            button.list-group-item-danger {
                color: #a94442
            }

            a.list-group-item-danger .list-group-item-heading,
            button.list-group-item-danger .list-group-item-heading {
                color: inherit
            }

            a.list-group-item-danger:focus,
            a.list-group-item-danger:hover,
            button.list-group-item-danger:focus,
            button.list-group-item-danger:hover {
                color: #a94442;
                background-color: #ebcccc
            }

            a.list-group-item-danger.active,
            a.list-group-item-danger.active:focus,
            a.list-group-item-danger.active:hover,
            button.list-group-item-danger.active,
            button.list-group-item-danger.active:focus,
            button.list-group-item-danger.active:hover {
                color: #fff;
                background-color: #a94442;
                border-color: #a94442
            }

            .list-group-item-heading {
                margin-top: 0;
                margin-bottom: 5px
            }

            .list-group-item-text {
                margin-bottom: 0;
                line-height: 1.3
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
            }

            .panel-body {
                padding: 15px
            }

            .panel-heading {
                padding: 10px 15px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px
            }

            .panel-heading>.dropdown .dropdown-toggle {
                color: inherit
            }

            .panel-title {
                margin-top: 0;
                margin-bottom: 0;
                font-size: 16px;
                color: inherit
            }

            .panel-title>.small,
            .panel-title>.small>a,
            .panel-title>a,
            .panel-title>small,
            .panel-title>small>a {
                color: inherit
            }

            .panel-footer {
                padding: 10px 15px;
                background-color: #f5f5f5;
                border-top: 1px solid #ddd;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px
            }

            .panel>.list-group,
            .panel>.panel-collapse>.list-group {
                margin-bottom: 0
            }

            .panel>.list-group .list-group-item,
            .panel>.panel-collapse>.list-group .list-group-item {
                border-width: 1px 0;
                border-radius: 0
            }

            .panel>.list-group:first-child .list-group-item:first-child,
            .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
                border-top: 0;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px
            }

            .panel>.list-group:last-child .list-group-item:last-child,
            .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
                border-bottom: 0;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px
            }

            .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .panel-heading+.list-group .list-group-item:first-child {
                border-top-width: 0
            }

            .list-group+.panel-footer {
                border-top-width: 0
            }

            .panel>.panel-collapse>.table,
            .panel>.table,
            .panel>.table-responsive>.table {
                margin-bottom: 0
            }

            .panel>.panel-collapse>.table caption,
            .panel>.table caption,
            .panel>.table-responsive>.table caption {
                padding-right: 15px;
                padding-left: 15px
            }

            .panel>.table-responsive:first-child>.table:first-child,
            .panel>.table:first-child {
                border-top-left-radius: 3px;
                border-top-right-radius: 3px
            }

            .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
            .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
            .panel>.table:first-child>tbody:first-child>tr:first-child,
            .panel>.table:first-child>thead:first-child>tr:first-child {
                border-top-left-radius: 3px;
                border-top-right-radius: 3px
            }

            .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
            .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
            .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
            .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
            .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
            .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
            .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
            .panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
                border-top-left-radius: 3px
            }

            .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
            .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
            .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
            .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
            .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
            .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
            .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
            .panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
                border-top-right-radius: 3px
            }

            .panel>.table-responsive:last-child>.table:last-child,
            .panel>.table:last-child {
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px
            }

            .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
            .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
            .panel>.table:last-child>tbody:last-child>tr:last-child,
            .panel>.table:last-child>tfoot:last-child>tr:last-child {
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 3px
            }

            .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
            .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
            .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
            .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
            .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
            .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
            .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
            .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
                border-bottom-left-radius: 3px
            }

            .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
            .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
            .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
            .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
            .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
            .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
            .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
            .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
                border-bottom-right-radius: 3px
            }

            .panel>.panel-body+.table,
            .panel>.panel-body+.table-responsive,
            .panel>.table+.panel-body,
            .panel>.table-responsive+.panel-body {
                border-top: 1px solid #ddd
            }

            .panel>.table>tbody:first-child>tr:first-child td,
            .panel>.table>tbody:first-child>tr:first-child th {
                border-top: 0
            }

            .panel>.table-bordered,
            .panel>.table-responsive>.table-bordered {
                border: 0
            }

            .panel>.table-bordered>tbody>tr>td:first-child,
            .panel>.table-bordered>tbody>tr>th:first-child,
            .panel>.table-bordered>tfoot>tr>td:first-child,
            .panel>.table-bordered>tfoot>tr>th:first-child,
            .panel>.table-bordered>thead>tr>td:first-child,
            .panel>.table-bordered>thead>tr>th:first-child,
            .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
            .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
            .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
            .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
            .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
            .panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
                border-left: 0
            }

            .panel>.table-bordered>tbody>tr>td:last-child,
            .panel>.table-bordered>tbody>tr>th:last-child,
            .panel>.table-bordered>tfoot>tr>td:last-child,
            .panel>.table-bordered>tfoot>tr>th:last-child,
            .panel>.table-bordered>thead>tr>td:last-child,
            .panel>.table-bordered>thead>tr>th:last-child,
            .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
            .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
            .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
            .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
            .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
            .panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
                border-right: 0
            }

            .panel>.table-bordered>tbody>tr:first-child>td,
            .panel>.table-bordered>tbody>tr:first-child>th,
            .panel>.table-bordered>thead>tr:first-child>td,
            .panel>.table-bordered>thead>tr:first-child>th,
            .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
            .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
            .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
            .panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
                border-bottom: 0
            }

            .panel>.table-bordered>tbody>tr:last-child>td,
            .panel>.table-bordered>tbody>tr:last-child>th,
            .panel>.table-bordered>tfoot>tr:last-child>td,
            .panel>.table-bordered>tfoot>tr:last-child>th,
            .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
            .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
            .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
            .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
                border-bottom: 0
            }

            .panel>.table-responsive {
                margin-bottom: 0;
                border: 0
            }

            .panel-group {
                margin-bottom: 20px
            }

            .panel-group .panel {
                margin-bottom: 0;
                border-radius: 4px
            }

            .panel-group .panel+.panel {
                margin-top: 5px
            }

            .panel-group .panel-heading {
                border-bottom: 0
            }

            .panel-group .panel-heading+.panel-collapse>.list-group,
            .panel-group .panel-heading+.panel-collapse>.panel-body {
                border-top: 1px solid #ddd
            }

            .panel-group .panel-footer {
                border-top: 0
            }

            .panel-group .panel-footer+.panel-collapse .panel-body {
                border-bottom: 1px solid #ddd
            }

            .panel-default {
                border-color: #ddd
            }

            .panel-default>.panel-heading {
                color: #333;
                background-color: #f5f5f5;
                border-color: #ddd
            }

            .panel-default>.panel-heading+.panel-collapse>.panel-body {
                border-top-color: #ddd
            }

            .panel-default>.panel-heading .badge {
                color: #f5f5f5;
                background-color: #333
            }

            .panel-default>.panel-footer+.panel-collapse>.panel-body {
                border-bottom-color: #ddd
            }

            .panel-primary {
                border-color: #337ab7
            }

            .panel-primary>.panel-heading {
                color: #fff;
                background-color: #337ab7;
                border-color: #337ab7
            }

            .panel-primary>.panel-heading+.panel-collapse>.panel-body {
                border-top-color: #337ab7
            }

            .panel-primary>.panel-heading .badge {
                color: #337ab7;
                background-color: #fff
            }

            .panel-primary>.panel-footer+.panel-collapse>.panel-body {
                border-bottom-color: #337ab7
            }

            .panel-success {
                border-color: #d6e9c6
            }

            .panel-success>.panel-heading {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6
            }

            .panel-success>.panel-heading+.panel-collapse>.panel-body {
                border-top-color: #d6e9c6
            }

            .panel-success>.panel-heading .badge {
                color: #dff0d8;
                background-color: #3c763d
            }

            .panel-success>.panel-footer+.panel-collapse>.panel-body {
                border-bottom-color: #d6e9c6
            }

            .panel-info {
                border-color: #bce8f1
            }

            .panel-info>.panel-heading {
                color: #31708f;
                background-color: #d9edf7;
                border-color: #bce8f1
            }

            .panel-info>.panel-heading+.panel-collapse>.panel-body {
                border-top-color: #bce8f1
            }

            .panel-info>.panel-heading .badge {
                color: #d9edf7;
                background-color: #31708f
            }

            .panel-info>.panel-footer+.panel-collapse>.panel-body {
                border-bottom-color: #bce8f1
            }

            .panel-warning {
                border-color: #faebcc
            }

            .panel-warning>.panel-heading {
                color: #8a6d3b;
                background-color: #fcf8e3;
                border-color: #faebcc
            }

            .panel-warning>.panel-heading+.panel-collapse>.panel-body {
                border-top-color: #faebcc
            }

            .panel-warning>.panel-heading .badge {
                color: #fcf8e3;
                background-color: #8a6d3b
            }

            .panel-warning>.panel-footer+.panel-collapse>.panel-body {
                border-bottom-color: #faebcc
            }

            .panel-danger {
                border-color: #ebccd1
            }

            .panel-danger>.panel-heading {
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1
            }

            .panel-danger>.panel-heading+.panel-collapse>.panel-body {
                border-top-color: #ebccd1
            }

            .panel-danger>.panel-heading .badge {
                color: #f2dede;
                background-color: #a94442
            }

            .panel-danger>.panel-footer+.panel-collapse>.panel-body {
                border-bottom-color: #ebccd1
            }

            .embed-responsive {
                position: relative;
                display: block;
                height: 0;
                padding: 0;
                overflow: hidden
            }

            .embed-responsive .embed-responsive-item,
            .embed-responsive embed,
            .embed-responsive iframe,
            .embed-responsive object,
            .embed-responsive video {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0
            }

            .embed-responsive-16by9 {
                padding-bottom: 56.25%
            }

            .embed-responsive-4by3 {
                padding-bottom: 75%
            }

            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
            }

            .well blockquote {
                border-color: #ddd;
                border-color: rgba(0, 0, 0, .15)
            }

            .well-lg {
                padding: 24px;
                border-radius: 6px
            }

            .well-sm {
                padding: 9px;
                border-radius: 3px
            }

            .close {
                float: right;
                font-size: 21px;
                font-weight: 700;
                line-height: 1;
                color: #000;
                text-shadow: 0 1px 0 #fff;
                filter: alpha(opacity=20);
                opacity: .2
            }

            .close:focus,
            .close:hover {
                color: #000;
                text-decoration: none;
                cursor: pointer;
                filter: alpha(opacity=50);
                opacity: .5
            }

            button.close {
                -webkit-appearance: none;
                padding: 0;
                cursor: pointer;
                background: 0;
                border: 0
            }

            .modal-open {
                overflow: hidden
            }

            .modal {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1050;
                display: none;
                overflow: hidden;
                -webkit-overflow-scrolling: touch;
                outline: 0
            }

            .modal.fade .modal-dialog {
                -webkit-transition: -webkit-transform .3s ease-out;
                -o-transition: -o-transform .3s ease-out;
                transition: transform .3s ease-out;
                -webkit-transform: translate(0, -25%);
                -ms-transform: translate(0, -25%);
                -o-transform: translate(0, -25%);
                transform: translate(0, -25%)
            }

            .modal.in .modal-dialog {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                -o-transform: translate(0, 0);
                transform: translate(0, 0)
            }

            .modal-open .modal {
                overflow-x: hidden;
                overflow-y: auto
            }

            .modal-dialog {
                position: relative;
                width: auto;
                margin: 10px
            }

            .modal-content {
                position: relative;
                background-color: #fff;
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
                border: 1px solid #999;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: 6px;
                outline: 0;
                -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
                box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
            }

            .modal-backdrop {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1040;
                background-color: #000
            }

            .modal-backdrop.fade {
                filter: alpha(opacity=0);
                opacity: 0
            }

            .modal-backdrop.in {
                filter: alpha(opacity=50);
                opacity: .5
            }

            .modal-header {
                min-height: 16.43px;
                padding: 15px;
                border-bottom: 1px solid #e5e5e5
            }

            .modal-header .close {
                margin-top: -2px
            }

            .modal-title {
                margin: 0;
                line-height: 1.42857143
            }

            .modal-body {
                position: relative;
                padding: 15px
            }

            .modal-footer {
                padding: 15px;
                text-align: right;
                border-top: 1px solid #e5e5e5
            }

            .modal-footer .btn+.btn {
                margin-bottom: 0;
                margin-left: 5px
            }

            .modal-footer .btn-group .btn+.btn {
                margin-left: -1px
            }

            .modal-footer .btn-block+.btn-block {
                margin-left: 0
            }

            .modal-scrollbar-measure {
                position: absolute;
                top: -9999px;
                width: 50px;
                height: 50px;
                overflow: scroll
            }

            @media (min-width:768px) {
                .modal-dialog {
                    width: 600px;
                    margin: 30px auto
                }

                .modal-content {
                    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                    box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
                }

                .modal-sm {
                    width: 300px
                }
            }

            @media (min-width:992px) {
                .modal-lg {
                    width: 900px
                }
            }

            .tooltip {
                position: absolute;
                z-index: 1070;
                display: block;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 12px;
                font-style: normal;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: left;
                text-align: start;
                text-decoration: none;
                text-shadow: none;
                text-transform: none;
                letter-spacing: normal;
                word-break: normal;
                word-spacing: normal;
                word-wrap: normal;
                white-space: normal;
                filter: alpha(opacity=0);
                opacity: 0;
                line-break: auto
            }

            .tooltip.in {
                filter: alpha(opacity=90);
                opacity: .9
            }

            .tooltip.top {
                padding: 5px 0;
                margin-top: -3px
            }

            .tooltip.right {
                padding: 0 5px;
                margin-left: 3px
            }

            .tooltip.bottom {
                padding: 5px 0;
                margin-top: 3px
            }

            .tooltip.left {
                padding: 0 5px;
                margin-left: -3px
            }

            .tooltip-inner {
                max-width: 200px;
                padding: 3px 8px;
                color: #fff;
                text-align: center;
                background-color: #000;
                border-radius: 4px
            }

            .tooltip-arrow {
                position: absolute;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid
            }

            .tooltip.top .tooltip-arrow {
                bottom: 0;
                left: 50%;
                margin-left: -5px;
                border-width: 5px 5px 0;
                border-top-color: #000
            }

            .tooltip.top-left .tooltip-arrow {
                right: 5px;
                bottom: 0;
                margin-bottom: -5px;
                border-width: 5px 5px 0;
                border-top-color: #000
            }

            .tooltip.top-right .tooltip-arrow {
                bottom: 0;
                left: 5px;
                margin-bottom: -5px;
                border-width: 5px 5px 0;
                border-top-color: #000
            }

            .tooltip.right .tooltip-arrow {
                top: 50%;
                left: 0;
                margin-top: -5px;
                border-width: 5px 5px 5px 0;
                border-right-color: #000
            }

            .tooltip.left .tooltip-arrow {
                top: 50%;
                right: 0;
                margin-top: -5px;
                border-width: 5px 0 5px 5px;
                border-left-color: #000
            }

            .tooltip.bottom .tooltip-arrow {
                top: 0;
                left: 50%;
                margin-left: -5px;
                border-width: 0 5px 5px;
                border-bottom-color: #000
            }

            .tooltip.bottom-left .tooltip-arrow {
                top: 0;
                right: 5px;
                margin-top: -5px;
                border-width: 0 5px 5px;
                border-bottom-color: #000
            }

            .tooltip.bottom-right .tooltip-arrow {
                top: 0;
                left: 5px;
                margin-top: -5px;
                border-width: 0 5px 5px;
                border-bottom-color: #000
            }

            .popover {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1060;
                display: none;
                max-width: 276px;
                padding: 1px;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: left;
                text-align: start;
                text-decoration: none;
                text-shadow: none;
                text-transform: none;
                letter-spacing: normal;
                word-break: normal;
                word-spacing: normal;
                word-wrap: normal;
                white-space: normal;
                background-color: #fff;
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: 6px;
                -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
                box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
                line-break: auto
            }

            .popover.top {
                margin-top: -10px
            }

            .popover.right {
                margin-left: 10px
            }

            .popover.bottom {
                margin-top: 10px
            }

            .popover.left {
                margin-left: -10px
            }

            .popover-title {
                padding: 8px 14px;
                margin: 0;
                font-size: 14px;
                background-color: #f7f7f7;
                border-bottom: 1px solid #ebebeb;
                border-radius: 5px 5px 0 0
            }

            .popover-content {
                padding: 9px 14px
            }

            .popover>.arrow,
            .popover>.arrow:after {
                position: absolute;
                display: block;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid
            }

            .popover>.arrow {
                border-width: 11px
            }

            .popover>.arrow:after {
                content: "";
                border-width: 10px
            }

            .popover.top>.arrow {
                bottom: -11px;
                left: 50%;
                margin-left: -11px;
                border-top-color: #999;
                border-top-color: rgba(0, 0, 0, .25);
                border-bottom-width: 0
            }

            .popover.top>.arrow:after {
                bottom: 1px;
                margin-left: -10px;
                content: " ";
                border-top-color: #fff;
                border-bottom-width: 0
            }

            .popover.right>.arrow {
                top: 50%;
                left: -11px;
                margin-top: -11px;
                border-right-color: #999;
                border-right-color: rgba(0, 0, 0, .25);
                border-left-width: 0
            }

            .popover.right>.arrow:after {
                bottom: -10px;
                left: 1px;
                content: " ";
                border-right-color: #fff;
                border-left-width: 0
            }

            .popover.bottom>.arrow {
                top: -11px;
                left: 50%;
                margin-left: -11px;
                border-top-width: 0;
                border-bottom-color: #999;
                border-bottom-color: rgba(0, 0, 0, .25)
            }

            .popover.bottom>.arrow:after {
                top: 1px;
                margin-left: -10px;
                content: " ";
                border-top-width: 0;
                border-bottom-color: #fff
            }

            .popover.left>.arrow {
                top: 50%;
                right: -11px;
                margin-top: -11px;
                border-right-width: 0;
                border-left-color: #999;
                border-left-color: rgba(0, 0, 0, .25)
            }

            .popover.left>.arrow:after {
                right: 1px;
                bottom: -10px;
                content: " ";
                border-right-width: 0;
                border-left-color: #fff
            }

            .carousel {
                position: relative
            }

            .carousel-inner {
                position: relative;
                width: 100%;
                overflow: hidden
            }

            .carousel-inner>.item {
                position: relative;
                display: none;
                -webkit-transition: .6s ease-in-out left;
                -o-transition: .6s ease-in-out left;
                transition: .6s ease-in-out left
            }

            .carousel-inner>.item>a>img,
            .carousel-inner>.item>img {
                line-height: 1
            }

            @media all and (transform-3d),
            (-webkit-transform-3d) {
                .carousel-inner>.item {
                    -webkit-transition: -webkit-transform .6s ease-in-out;
                    -o-transition: -o-transform .6s ease-in-out;
                    transition: transform .6s ease-in-out;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-perspective: 1000px;
                    perspective: 1000px
                }

                .carousel-inner>.item.active.right,
                .carousel-inner>.item.next {
                    left: 0;
                    -webkit-transform: translate3d(100%, 0, 0);
                    transform: translate3d(100%, 0, 0)
                }

                .carousel-inner>.item.active.left,
                .carousel-inner>.item.prev {
                    left: 0;
                    -webkit-transform: translate3d(-100%, 0, 0);
                    transform: translate3d(-100%, 0, 0)
                }

                .carousel-inner>.item.active,
                .carousel-inner>.item.next.left,
                .carousel-inner>.item.prev.right {
                    left: 0;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0)
                }
            }

            .carousel-inner>.active,
            .carousel-inner>.next,
            .carousel-inner>.prev {
                display: block
            }

            .carousel-inner>.active {
                left: 0
            }

            .carousel-inner>.next,
            .carousel-inner>.prev {
                position: absolute;
                top: 0;
                width: 100%
            }

            .carousel-inner>.next {
                left: 100%
            }

            .carousel-inner>.prev {
                left: -100%
            }

            .carousel-inner>.next.left,
            .carousel-inner>.prev.right {
                left: 0
            }

            .carousel-inner>.active.left {
                left: -100%
            }

            .carousel-inner>.active.right {
                left: 100%
            }

            .carousel-control {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                width: 15%;
                font-size: 20px;
                color: #fff;
                text-align: center;
                text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
                filter: alpha(opacity=50);
                opacity: .5
            }

            .carousel-control.left {
                background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
                background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
                background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
                background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
                background-repeat: repeat-x
            }

            .carousel-control.right {
                right: 0;
                left: auto;
                background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
                background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
                background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
                background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
                background-repeat: repeat-x
            }

            .carousel-control:focus,
            .carousel-control:hover {
                color: #fff;
                text-decoration: none;
                filter: alpha(opacity=90);
                outline: 0;
                opacity: .9
            }

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next,
            .carousel-control .icon-prev {
                position: absolute;
                top: 50%;
                z-index: 5;
                display: inline-block;
                margin-top: -10px
            }

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .icon-prev {
                left: 50%;
                margin-left: -10px
            }

            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next {
                right: 50%;
                margin-right: -10px
            }

            .carousel-control .icon-next,
            .carousel-control .icon-prev {
                width: 20px;
                height: 20px;
                font-family: serif;
                line-height: 1
            }

            .carousel-control .icon-prev:before {
                content: '\2039'
            }

            .carousel-control .icon-next:before {
                content: '\203a'
            }

            .carousel-indicators {
                position: absolute;
                bottom: 10px;
                left: 50%;
                z-index: 15;
                width: 60%;
                padding-left: 0;
                margin-left: -30%;
                text-align: center;
                list-style: none
            }

            .carousel-indicators li {
                display: inline-block;
                width: 10px;
                height: 10px;
                margin: 1px;
                text-indent: -999px;
                cursor: pointer;
                background-color: #000\9;
                background-color: rgba(0, 0, 0, 0);
                border: 1px solid #fff;
                border-radius: 10px
            }

            .carousel-indicators .active {
                width: 12px;
                height: 12px;
                margin: 0;
                background-color: #fff
            }

            .carousel-caption {
                position: absolute;
                right: 15%;
                bottom: 20px;
                left: 15%;
                z-index: 10;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #fff;
                text-align: center;
                text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
            }

            .carousel-caption .btn {
                text-shadow: none
            }

            @media screen and (min-width:768px) {

                .carousel-control .glyphicon-chevron-left,
                .carousel-control .glyphicon-chevron-right,
                .carousel-control .icon-next,
                .carousel-control .icon-prev {
                    width: 30px;
                    height: 30px;
                    margin-top: -15px;
                    font-size: 30px
                }

                .carousel-control .glyphicon-chevron-left,
                .carousel-control .icon-prev {
                    margin-left: -15px
                }

                .carousel-control .glyphicon-chevron-right,
                .carousel-control .icon-next {
                    margin-right: -15px
                }

                .carousel-caption {
                    right: 20%;
                    left: 20%;
                    padding-bottom: 30px
                }

                .carousel-indicators {
                    bottom: 20px
                }
            }

            .btn-group-vertical>.btn-group:after,
            .btn-group-vertical>.btn-group:before,
            .btn-toolbar:after,
            .btn-toolbar:before,
            .clearfix:after,
            .clearfix:before,
            .container-fluid:after,
            .container-fluid:before,
            .container:after,
            .container:before,
            .dl-horizontal dd:after,
            .dl-horizontal dd:before,
            .form-horizontal .form-group:after,
            .form-horizontal .form-group:before,
            .modal-footer:after,
            .modal-footer:before,
            .nav:after,
            .nav:before,
            .navbar-collapse:after,
            .navbar-collapse:before,
            .navbar-header:after,
            .navbar-header:before,
            .navbar:after,
            .navbar:before,
            .pager:after,
            .pager:before,
            .panel-body:after,
            .panel-body:before,
            .row:after,
            .row:before {
                display: table;
                content: " "
            }

            .btn-group-vertical>.btn-group:after,
            .btn-toolbar:after,
            .clearfix:after,
            .container-fluid:after,
            .container:after,
            .dl-horizontal dd:after,
            .form-horizontal .form-group:after,
            .modal-footer:after,
            .nav:after,
            .navbar-collapse:after,
            .navbar-header:after,
            .navbar:after,
            .pager:after,
            .panel-body:after,
            .row:after {
                clear: both
            }

            .center-block {
                display: block;
                margin-right: auto;
                margin-left: auto
            }

            .pull-right {
                float: right !important
            }

            .pull-left {
                float: left !important
            }

            .hide {
                display: none !important
            }

            .show {
                display: block !important
            }

            .invisible {
                visibility: hidden
            }

            .text-hide {
                font: 0/0 a;
                color: transparent;
                text-shadow: none;
                background-color: transparent;
                border: 0
            }

            .hidden {
                display: none !important
            }

            .affix {
                position: fixed
            }

            @-ms-viewport {
                width: device-width
            }

            .visible-lg,
            .visible-md,
            .visible-sm,
            .visible-xs {
                display: none !important
            }

            .visible-lg-block,
            .visible-lg-inline,
            .visible-lg-inline-block,
            .visible-md-block,
            .visible-md-inline,
            .visible-md-inline-block,
            .visible-sm-block,
            .visible-sm-inline,
            .visible-sm-inline-block,
            .visible-xs-block,
            .visible-xs-inline,
            .visible-xs-inline-block {
                display: none !important
            }

            @media (max-width:767px) {
                .visible-xs {
                    display: block !important
                }

                table.visible-xs {
                    display: table !important
                }

                tr.visible-xs {
                    display: table-row !important
                }

                td.visible-xs,
                th.visible-xs {
                    display: table-cell !important
                }
            }

            @media (max-width:767px) {
                .visible-xs-block {
                    display: block !important
                }
            }

            @media (max-width:767px) {
                .visible-xs-inline {
                    display: inline !important
                }
            }

            @media (max-width:767px) {
                .visible-xs-inline-block {
                    display: inline-block !important
                }
            }

            @media (min-width:768px) and (max-width:991px) {
                .visible-sm {
                    display: block !important
                }

                table.visible-sm {
                    display: table !important
                }

                tr.visible-sm {
                    display: table-row !important
                }

                td.visible-sm,
                th.visible-sm {
                    display: table-cell !important
                }
            }

            @media (min-width:768px) and (max-width:991px) {
                .visible-sm-block {
                    display: block !important
                }
            }

            @media (min-width:768px) and (max-width:991px) {
                .visible-sm-inline {
                    display: inline !important
                }
            }

            @media (min-width:768px) and (max-width:991px) {
                .visible-sm-inline-block {
                    display: inline-block !important
                }
            }

            @media (min-width:992px) and (max-width:1199px) {
                .visible-md {
                    display: block !important
                }

                table.visible-md {
                    display: table !important
                }

                tr.visible-md {
                    display: table-row !important
                }

                td.visible-md,
                th.visible-md {
                    display: table-cell !important
                }
            }

            @media (min-width:992px) and (max-width:1199px) {
                .visible-md-block {
                    display: block !important
                }
            }

            @media (min-width:992px) and (max-width:1199px) {
                .visible-md-inline {
                    display: inline !important
                }
            }

            @media (min-width:992px) and (max-width:1199px) {
                .visible-md-inline-block {
                    display: inline-block !important
                }
            }

            @media (min-width:1200px) {
                .visible-lg {
                    display: block !important
                }

                table.visible-lg {
                    display: table !important
                }

                tr.visible-lg {
                    display: table-row !important
                }

                td.visible-lg,
                th.visible-lg {
                    display: table-cell !important
                }
            }

            @media (min-width:1200px) {
                .visible-lg-block {
                    display: block !important
                }
            }

            @media (min-width:1200px) {
                .visible-lg-inline {
                    display: inline !important
                }
            }

            @media (min-width:1200px) {
                .visible-lg-inline-block {
                    display: inline-block !important
                }
            }

            @media (max-width:767px) {
                .hidden-xs {
                    display: none !important
                }
            }

            @media (min-width:768px) and (max-width:991px) {
                .hidden-sm {
                    display: none !important
                }
            }

            @media (min-width:992px) and (max-width:1199px) {
                .hidden-md {
                    display: none !important
                }
            }

            @media (min-width:1200px) {
                .hidden-lg {
                    display: none !important
                }
            }

            .visible-print {
                display: none !important
            }

            @media print {
                .visible-print {
                    display: block !important
                }

                table.visible-print {
                    display: table !important
                }

                tr.visible-print {
                    display: table-row !important
                }

                td.visible-print,
                th.visible-print {
                    display: table-cell !important
                }
            }

            .visible-print-block {
                display: none !important
            }

            @media print {
                .visible-print-block {
                    display: block !important
                }
            }

            .visible-print-inline {
                display: none !important
            }

            @media print {
                .visible-print-inline {
                    display: inline !important
                }
            }

            .visible-print-inline-block {
                display: none !important
            }

            @media print {
                .visible-print-inline-block {
                    display: inline-block !important
                }
            }

            @media print {
                .hidden-print {
                    display: none !important
                }
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: italic;
                font-weight: 200;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZYokSds18E.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: italic;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkids18E.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: italic;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7nsDc.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: italic;
                font-weight: 600;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCds18E.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: italic;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSds18E.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: italic;
                font-weight: 900;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZklyds18E.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 200;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7g.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 600;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdr.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdr.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 900;
                src: url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3iu4nwlxdr.ttf) format('truetype')
            }

            @font-face {
                font-family: Aclonica;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/aclonica/v11/K2FyfZJVlfNNSEBXGY7UAoo.ttf) format('truetype')
            }

            @font-face {
                font-family: Raleway;
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCIPrQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Raleway;
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Raleway;
                font-style: normal;
                font-weight: 600;
                src: url(https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVsEpbCIPrQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Raleway;
                font-style: normal;
                font-weight: 800;
                src: url(https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtapbCIPrQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Raleway;
                font-style: normal;
                font-weight: 900;
                src: url(https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtzpbCIPrQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Cookie;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/cookie/v12/syky-y18lb0tSbf9kgqX.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Delius Swash Caps';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/deliusswashcaps/v14/oY1E8fPLr7v4JWCExZpWebxVKORpXUeaIGM.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Josefin Slab';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W71msR349Lw.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Lily Script One';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lilyscriptone/v10/LhW9MV7ZMfIPdMxeBjBvFN8SXLSIhc6n.ttf) format('truetype')
            }

            @font-face {
                font-family: Lobster;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lobster/v23/neILzCirqoswsqX9zoKmNg.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Lobster Two';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lobstertwo/v13/BngMUXZGTXPUvIoyV6yN5-fN5qA.ttf) format('truetype')
            }

            @font-face {
                font-family: Michroma;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/michroma/v11/PN_zRfy9qWD8fEagAPg9pTw.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Paytone One';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/paytoneone/v13/0nksC9P7MfYHj2oFtYm2CiTq.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/memnYaGs126MiZpBA-UFUKWyV-hs.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem6YaGs126MiZpBA-UFUJ0e.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/memnYaGs126MiZpBA-UFUKXGUehs.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/memnYaGs126MiZpBA-UFUKWiUOhs.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/memnYaGs126MiZpBA-UFUKW-U-hs.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN_r8-VQ.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-U1Ug.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirk-VQ.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rg-VQ.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rs-VQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: italic;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZYgzz_PZ1.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: italic;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUQjIg1_i6t8kCHKm459WxRyS7j.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: italic;
                font-weight: 700;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZcgvz_PZ1.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: italic;
                font-weight: 900;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZSgnz_PZ1.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: normal;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD-w.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wlhzg.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: normal;
                font-weight: 700;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD-w.ttf) format('truetype')
            }

            @font-face {
                font-family: Montserrat;
                font-style: normal;
                font-weight: 900;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_epG3gnD-w.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Mouse Memoirs';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/mousememoirs/v8/t5tmIRoSNJ-PH0WNNgDYxdSb3T7Pqg.ttf) format('truetype')
            }

            @font-face {
                font-family: Raleway;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrQ.ttf) format('truetype')
            }

            @font-face {
                font-family: Oswald;
                font-style: normal;
                font-weight: 200;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs13FvsUZiYA.ttf) format('truetype')
            }

            @font-face {
                font-family: Oswald;
                font-style: normal;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs169vsUZiYA.ttf) format('truetype')
            }

            @font-face {
                font-family: Oswald;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs1_FvsUZiYA.ttf) format('truetype')
            }

            @font-face {
                font-family: Oswald;
                font-style: normal;
                font-weight: 500;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUZiYA.ttf) format('truetype')
            }

            @font-face {
                font-family: Oswald;
                font-style: normal;
                font-weight: 600;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9osUZiYA.ttf) format('truetype')
            }

            @font-face {
                font-family: Oswald;
                font-style: normal;
                font-weight: 700;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZosUZiYA.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Petit Formal Script';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/petitformalscript/v8/B50TF6xQr2TXJBnGOFME6u5OR83oRP5qkH7gOw.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Titillium Web';
                font-style: italic;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPFcZTIAOhVxoMyOr9n_E7fdMbepI5DYZyZ.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Titillium Web';
                font-style: italic;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPAcZTIAOhVxoMyOr9n_E7fdMbWD6xT.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Titillium Web';
                font-style: normal;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffGjEGItzZg.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Titillium Web';
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPecZTIAOhVxoMyOr9n_E7fdMPmCA.ttf) format('truetype')
            }

            @font-face {
                font-family: 'Titillium Web';
                font-style: normal;
                font-weight: 900;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/titilliumweb/v10/NaPDcZTIAOhVxoMyOr9n_E7ffEDBGItzZg.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: italic;
                font-weight: 100;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u-w4BMUTPHjxsIPx-oPCc.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: italic;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u_w4BMUTPHjxsI9w2_Gwfo.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: italic;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u8w4BMUTPHjxsAXC-v.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: italic;
                font-weight: 700;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u_w4BMUTPHjxsI5wq_Gwfo.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: italic;
                font-weight: 900;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u_w4BMUTPHjxsI3wi_Gwfo.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: normal;
                font-weight: 100;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u8w4BMUTPHh30AXC-v.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: normal;
                font-weight: 300;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh7USSwiPHA.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6uyw4BMUTPHjx4wWw.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: normal;
                font-weight: 700;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh6UVSwiPHA.ttf) format('truetype')
            }

            @font-face {
                font-family: Lato;
                font-style: normal;
                font-weight: 900;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh50XSwiPHA.ttf) format('truetype')
            }

            @font-face {
                font-family: Monoton;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url(https://fonts.gstatic.com/s/monoton/v10/5h1aiZUrOngCibe4TkHLRw.ttf) format('truetype')
            }
        </style>
        <!-- end of imported css -->

        <style>
            /*Confs especificas*/
            /* Menu Fixo*/
            @media screen and (max-width:600px) {
                .linha_fixa .navbar-header button {
                    float: right;
                    right: 10px;
                    position: fixed
                }

                .navbar-toggle {
                    margin-top: 0 !important
                }

                .navbar-collapse.in {
                    margin-top: 30px
                }
            }

            .linha_fixa_transparente {
                transition: all .8s;
                display: none;
                position: fixed !important;
                top: 0;
                left: 0;
                right: 0;
                z-index: 80;
                border: 0 !important;
                margin: 0 !important;
                transition: all .8s
            }

            .linha_fixa {
                position: fixed !important;
                top: 0;
                left: 0;
                right: 0;
                z-index: 80;
                border: 0 !important;
                margin: 0 !important;
                transition: all .8s
            }

            @media screen and (min-width:1100px) {

                .linha_fixa,
                .linha_fixa2,
                .linha_fixa_transparente {
                    position: fixed !important;
                    top: 0;
                    left: 0;
                    right: 0;
                    z-index: 80;
                    border: 0 !important;
                    margin: 0 !important;
                    transition: all .8s
                }
            }

            @media screen and (max-width:767px) {

                .linha_fixa,
                .linha_fixa2,
                .linha_fixa_transparente {
                    top: 0;
                    left: 0;
                    right: 0;
                    z-index: 80
                }

                .linha_fixa .fl-photo,
                .linha_fixa2 .fl-photo,
                .linha_fixa_transparente .fl-photo,
                .linha_fixa_transparente .fl-photo-content {
                    text-align: left !important
                }

                .linha_fixa .fl-photo-content img,
                .linha_fixa_transparente .fl-photo-content img {
                    max-width: 50%;
                    text-align: left
                }
            }

            .linha_fixa_rodape {
                position: fixed;
                z-index: 3000;
                bottom: 0;
                left: 0;
                width: 100%
            }

            .linha_fixa2 {
                display: none
            }

            @media screen and (max-width:1024px) {
                .linha_fixa_transparente .fl-row-content {
                    padding: 0 !important;
                    padding-top: 10px !important;
                    padding-right: 25px !important
                }
            }
        </style>
        <script type="text/javascript">
            var altura = 0;
            var back_image_menu = '';
            var box_shadow_menu = '';
            var webkit_menu = '';
            var background_menu = '';
            var border_menu = '';
            jQuery(document).ready(function() {
                setTimeout(function() {
                    altura = jQuery(".linha_fixa").innerHeight();
                    if (altura > 0) {
                        jQuery(".fl-content-full").css({
                            "margin-top": altura
                        });
                    }
                }, 250);
            });
            jQuery(document).ready(function() {
                try {
                    altura2 = jQuery(".linha_fixa_transparente").innerHeight();
                    largura_tela = jQuery("body").width();
                    jQuery(".linha_fixa_transparente").slideDown('slow');
                    jQuery(".fl-row:eq(1) .fl-row-content-wrap").css({
                        "padding-top": altura2
                    });
                    back_image_menu = jQuery(".linha_fixa_transparente .fl-row-content-wrap").css("background-image");
                    box_shadow_menu = jQuery(".linha_fixa_transparente .fl-row-content-wrap").css("box-shadow");
                    webkit_menu = jQuery(".linha_fixa_transparente .fl-row-content-wrap").css("-webkit-box-shadow");
                    background_menu = jQuery(".linha_fixa_transparente .fl-row-content-wrap").css("background");
                    border_menu = jQuery(".linha_fixa_transparente .fl-row-content-wrap").css("border");
                    jQuery(".linha_fixa_transparente .fl-row-content-wrap").css({
                        "transition": 'all 0.8s;',
                        "background-image": 'none',
                        "box-shadow": 'none',
                        "-webkit-box-shadow": 'none',
                        "background": 'none',
                        "border": 'none'
                    });
                } catch (e) {
                    console.log(e)
                }
            });
            jQuery(window).scroll(function() {
                altura_scrool = jQuery(window).scrollTop();
                largura_tela = jQuery("body").width();
                if (altura_scrool > 150 || largura_tela < 500) {
                    jQuery(".linha_fixa_transparente .fl-row-content-wrap").css({
                        "transition": "all 0.8s;",
                        "background-image": back_image_menu,
                        "box-shadow": box_shadow_menu,
                        "-webkit-box-shadow": webkit_menu,
                        "background": background_menu,
                        "border": border_menu
                    });
                } else {
                    jQuery(".linha_fixa_transparente .fl-row-content-wrap").css({
                        "background-image": 'none',
                        "box-shadow": 'none',
                        "-webkit-box-shadow": 'none',
                        "background": 'none',
                        "border": 'none',
                        "transition": 'all 0.8s;'
                    });
                }
            });
            jQuery(document).ready(function() {
                jQuery(".linha_fixa2").hide();
            });
            jQuery(window).scroll(function() {
                altura = jQuery(window).scrollTop();
                if (altura > 300) {
                    jQuery(".linha_fixa2").slideDown();
                } else {
                    jQuery(".linha_fixa2").slideUp();
                }
            });

            jQuery(document).ready(function() {
                jQuery(".navbar-nav li a").click(function() {
                    jQuery(".navbar-collapse").removeClass('in');
                    jQuery(".navbar-collapse").addClass('out');
                });
            });
        </script>
        <style type="text/css">
            .wp-video {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }

            p {
                line-height: 1;
            }

            .row-first-1 {
                margin-left: 0px;
                margin-right: 0px;
            }

            /*comentado momentaneamente se clientes reclamarem do mobile voltar */
            /*@media ( max-width: 768px ){
                body, div, button, input{
                    text-align: center !important;
                }
            }*/
        </style>



    </head>

    <body class="page-template-default page page-id-260 fl-builder">






        <img src="https://api.gdigital.com.br/img/gcapi/?bid=16775&pid=260" style="position:absolute; width:1px; height:1px; bottom:0; right:0">
        <div class="fl-content-full">
            <div class="row row-first-1">
                <div class="fl-builder-content fl-builder-content-260 fl-builder-content-primary fl-builder-global-templates-locked" data-post-id="260" style='padding:0'>



                    <div id="63d4403069506" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-627e69d11f60e" data-node="627e69d11f60e">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-627e69d11f677" data-node="627e69d11f677">
                                    <div class="fl-col fl-node-627e69d11f67a fl-col-small" data-node="627e69d11f67a">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f67e fl-col-small" data-node="627e69d11f67e">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f681 fl-col-small" data-node="627e69d11f681">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-photo fl-node-627e69d11f61e" data-node="627e69d11f61e">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <source loading="lazy" class="fl-photo-img wp-image-292" alt="Modelo Face (1)" itemprop="image" title="Modelo Face (1)" type="image/webp" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/12/Modelo-Face-1.png.webp" style="border-style: hidden;">
                                                                <img loading="lazy" class="fl-photo-img wp-image-292" src="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/12/Modelo-Face-1.png" alt="Modelo Face (1)" itemprop="image" title="Modelo Face (1)" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/12/Modelo-Face-1.png 940w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/12/Modelo-Face-1-300x251.png 300w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/12/Modelo-Face-1-768x644.png 768w" sizes="(max-width: 940px) 100vw, 940px" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f685 fl-col-small" data-node="627e69d11f685">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f689 fl-col-small" data-node="627e69d11f689">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-627e69d11f666" data-node="627e69d11f666">
                                    <div class="fl-col fl-node-627e69d11f66c" data-node="627e69d11f66c">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-video fl-node-627e69d11f64f" data-node="627e69d11f64f">
                                                <div class="fl-module-content fl-node-content">
                                                    <style type="text/css">
                                                        video {
                                                            background-color: #ffffff !important;
                                                        }
                                                    </style>
                                                    <div class="fl-video fl-embed-video">
                                                        <style>
                                                            .fluid-width-video-wrapper {
                                                                padding-top: 56.2% !important;
                                                            }
                                                        </style>
                                                        <div class='yt-lazyload' data-id='TFuG6yZdasg' data-random='' data-logo='0'></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f66f fl-col-small" data-node="627e69d11f66f">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f5e7 fl-animation fl-fade-down" data-node="627e69d11f5e7" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text" <h1 style="text-align: center;"><span style="font-family: Lato; font-size: 36pt;"><span style="color: #ffffff; font-size: 48px; background-color: #ffcc00;"><?php print $titulo; ?></span><br />
                                                        </span></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f673 fl-animation fl-fade-down" data-node="627e69d11f673" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h2 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="margin-top:3.5rem;text-align: center;"><span style="font-family: Lato; font-size: 36pt;"><strong><span style="color: #ffffff; font-size: 20px;">FORMAÇÃO COMPLETA</span></strong><br />
                                                            </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f612 fl-animation fl-fade-in" data-node="627e69d11f612" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h1 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;margin-top:20px"><span style="font-size: 36px;"><strong><span style="font-family: Lato;"><span style="color: #ffffff;"><?php print $descricaoVideo; ?></span></span></strong></span></h1>
                                                        <h1 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-size: 36px;"><strong><span style="font-family: Lato;"><span style="color: #ffffff;"><?php print $nome; ?></span></span></strong></span></h1>
                                                        <h3 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-size: 36px;"><strong><span style="font-family: Lato;"><br />
                                                                    </span></strong></span></h3>
                                                        <p>&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-63a628ba8acd3" data-node="63a628ba8acd3">
                                    <div class="fl-col fl-node-63a628ba8b16c" data-node="63a628ba8b16c">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-button fl-node-63a628ba8aa65" data-node="63a628ba8aa65">
                                                <div class="fl-module-content fl-node-content">
                                                    <div id="63d44030a9802" class="btn-63d44030a9802 fl-button-wrap fl-button-width-auto fl-button-center botao-fixo-63d44030a9802 " style="margin-top: 20px;">
                                                        <a href="https://api.whatsapp.com/send?phone=<?php echo $cel ?>" target="_self" class="fl-button " role="button">
                                                            <span class="fl-button-text">Dúvidas? Fale com o professor</span>
                                                        </a>
                                                    </div>
                                                    <script>
                                                        jQuery(document).ready(function($) {
                                                            /* Explode no ? */
                                                            var url_param = location.href.split('?');
                                                            /* Verifica se existe um parametro */
                                                            if (url_param[1] != "" && url_param[1] != undefined) {
                                                                /* Recebe o atributo href */
                                                                var href = jQuery("#63d44030a9802 a").attr('href');
                                                                /* Explode na ? */
                                                                var param = href.split('?');
                                                                /* Verifica se existe algum parametro já salvo */
                                                                if (param[1] != "" && param[1] != undefined) {
                                                                    /* Adiciona com o & para juntar o parametro existente */
                                                                    jQuery("#63d44030a9802 a").attr({
                                                                        'href': href + "&" + url_param[1]
                                                                    });
                                                                } else {
                                                                    /* Adiciona com o ? pois não existe parametro */
                                                                    jQuery("#63d44030a9802 a").attr({
                                                                        'href': href + "?" + url_param[1]
                                                                    });
                                                                }
                                                            }
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d44030a9dbf" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-6397804f9d6f3" data-node="6397804f9d6f3">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-6397804f9f4c3" data-node="6397804f9f4c3">
                                    <div class="fl-col fl-node-6397804f9f4cc fl-col-small" data-node="6397804f9f4cc">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-photo fl-node-6397804f9f4d4" data-node="6397804f9f4d4">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <img loading="lazy" class="fl-photo-img wp-image-295" style="min-height: 534px;
    max-height: 548px;
    min-width: 400px;" src="<?php echo $fotouser; ?>" alt="Culto de Jovens Leão Verde Neon" itemprop="image" title="Culto de Jovens Leão Verde Neon" srcset="<?php echo $fotouser; ?> 700w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/12/Culto-de-Jovens-Leão-Verde-Neon-300x300.png 300w" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-6397804f9f4dd fl-col-small" data-node="6397804f9f4dd">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-6397804f9f4e6" data-node="6397804f9f4e6">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p style="text-align: left;"><span style="color: #ffffff; font-family: Lato; font-size: 30px;">Conheça <?php echo $nome; ?> </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-6397804f9f4ee" data-node="6397804f9f4ee">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        
                                                            <p><span style="color: #ffffff;font-size:22px"><?php echo $descricaoUser; ?></span></p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d44030c5a53" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-627e69d11f77d" data-node="627e69d11f77d">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-627e69d11f793" data-node="627e69d11f793">
                                    <div class="fl-col fl-node-627e69d11f79a" data-node="627e69d11f79a">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f780 fl-animation fl-fade-down" data-node="627e69d11f780" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h6 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-family: Lato; font-size: 36pt;"><span style="font-size: 28px;"><strong><span style="color: #ffffff;"><span style="font-size: 28px;"> </span><span style="font-size: 30px;">NÃO CONHECE <?php echo strtoupper($nome); ?> ?</span></span></strong></span><br />
                                                            </span></h6>
                                                        <p>&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-627e76c5ba1b4" data-node="627e76c5ba1b4">
                                    <div class="fl-col fl-node-627e76c5ba429" data-node="627e76c5ba429">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-button fl-node-627e76c5ba070" data-node="627e76c5ba070">
                                                <div class="fl-module-content fl-node-content">
                                                    <div id="63d44030dcae4" class="btn-63d44030dcae4 fl-button-wrap fl-button-width-auto fl-button-center botao-fixo-63d44030dcae4 ">
                                                        <a href="<?php echo $referencia; ?>" target="_self" class="fl-button " role="button">
                                                            <span class="fl-button-text"><?php echo $btnRef ?></span>
                                                        </a>
                                                    </div>
                                                    <script>
                                                        jQuery(document).ready(function($) {
                                                            /* Explode no ? */
                                                            var url_param = location.href.split('?');
                                                            /* Verifica se existe um parametro */
                                                            if (url_param[1] != "" && url_param[1] != undefined) {
                                                                /* Recebe o atributo href */
                                                                var href = jQuery("#63d44030dcae4 a").attr('href');
                                                                /* Explode na ? */
                                                                var param = href.split('?');
                                                                /* Verifica se existe algum parametro já salvo */
                                                                if (param[1] != "" && param[1] != undefined) {
                                                                    /* Adiciona com o & para juntar o parametro existente */
                                                                    jQuery("#63d44030dcae4 a").attr({
                                                                        'href': href + "&" + url_param[1]
                                                                    });
                                                                } else {
                                                                    /* Adiciona com o ? pois não existe parametro */
                                                                    jQuery("#63d44030dcae4 a").attr({
                                                                        'href': href + "?" + url_param[1]
                                                                    });
                                                                }
                                                            }
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-6306292f295fb" data-node="6306292f295fb">
                                    <div class="fl-col fl-node-6306292f298e6" data-node="6306292f298e6">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d44030de0f2" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-639782deaf336" data-node="639782deaf336">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-639782deb11bc" data-node="639782deb11bc">
                                    <div class="fl-col fl-node-639782deb11c5" data-node="639782deb11c5">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-639782deb1203" data-node="639782deb1203">
                                    <div class="fl-col fl-node-639782deb1209 fl-col-small" data-node="639782deb1209">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-photo fl-node-639782deb1210" data-node="639782deb1210">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <source loading="lazy" class="fl-photo-img wp-image-270" alt="Será quanto tempo ainda temos (3)" itemprop="image" title="Será quanto tempo ainda temos (3)" type="image/webp" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Será-quanto-tempo-ainda-temos-3.png.webp" style="border-style: hidden;">
                                                                <img loading="lazy" class="fl-photo-img wp-image-270" src="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Será-quanto-tempo-ainda-temos-3.png" alt="Será quanto tempo ainda temos (3)" itemprop="image" title="Será quanto tempo ainda temos (3)" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Será-quanto-tempo-ainda-temos-3.png 700w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Será-quanto-tempo-ainda-temos-3-300x300.png 300w" sizes="(max-width: 700px) 100vw, 700px" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-639782deb1217 fl-col-small" data-node="639782deb1217">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-639782deb121d" data-node="639782deb121d">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p style="text-align: left;"><span style="color: #ffffff; font-family: Lato; font-size: 30px;">Conheça  o Professor Valdecir</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-639782deb1224" data-node="639782deb1224">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <ul>
                                                            <li><span style="color: #ffffff;">Bacharel em design de produto.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em hipnose clínica.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em neurociências.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em neuropsicologia.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em psicanálise.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em teoria psicanalítica.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em psicologia transpessoal,</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em terapias naturais e integrativas.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em terapia da constelação familiar sistêmica.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em tratamento dos transtornos de ansiedade e síndrome do pânico.</span></li>
                                                            <li><span style="color: #ffffff;">Pós graduado em fitoterapia e prescrição de fitoterápicos.</span></li>
                                                            <li><span style="color: #ffffff;">Mais de 5 mil alunos formados em mais de 12 países (EAD e presencial).</span></li>
                                                            <li><span style="color: #ffffff;">Produziu áudios terapêuticos com mais 1 MILHÂO de vizualizações no YouTube</span></li>
                                                            <li><span style="color: #ffffff;">Desenvolvedor de técnicas excluisivas em terapia transpessoal.</span></li>
                                                            <li><span style="color: #ffffff;">Professor de diversos cursos em terapias holísticas na modalidade EAD</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-button fl-node-639782deb122b fl-animation fl-fade-in" data-node="639782deb122b" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div id="63d44031215dc" class="btn-63d44031215dc fl-button-wrap fl-button-width-auto fl-button-center fl-button-has-icon botao-fixo-63d44031215dc btn-conversao">
                                                        <a href="https://chat.whatsapp.com/Eb6YgcHkVuTD324ncGJ1ca" target="_self" class="fl-button btn-venda" role="button">
                                                            <i class="fl-button-icon fab fa-whatsapp"></i>
                                                            <span class="fl-button-text">Fale com o professor</span>
                                                        </a>
                                                    </div>
                                                    <script>
                                                        /* Função para contar a conversão */
                                                        jQuery(".btn-conversao").off('click').click(function() {
                                                            console.log('contou a conversão');
                                                            jQuery.ajax({
                                                                    type: "POST",
                                                                    url: "/wp-admin/admin-ajax.php",
                                                                    data: {
                                                                        action: 'gravar_conversao',
                                                                        post_id: inbound.post_id,
                                                                        id_pagina: inbound.post_id,
                                                                        email: 'botão_de_venda',
                                                                    }
                                                                })
                                                                .done(function() {
                                                                    console.log('sucesso');
                                                                });
                                                        });
                                                        jQuery(document).ready(function($) {
                                                            /* Explode no ? */
                                                            var url_param = location.href.split('?');
                                                            /* Verifica se existe um parametro */
                                                            if (url_param[1] != "" && url_param[1] != undefined) {
                                                                /* Recebe o atributo href */
                                                                var href = jQuery("#63d44031215dc a").attr('href');
                                                                /* Explode na ? */
                                                                var param = href.split('?');
                                                                /* Verifica se existe algum parametro já salvo */
                                                                if (param[1] != "" && param[1] != undefined) {
                                                                    /* Adiciona com o & para juntar o parametro existente */
                                                                    jQuery("#63d44031215dc a").attr({
                                                                        'href': href + "&" + url_param[1]
                                                                    });
                                                                } else {
                                                                    /* Adiciona com o ? pois não existe parametro */
                                                                    jQuery("#63d44031215dc a").attr({
                                                                        'href': href + "?" + url_param[1]
                                                                    });
                                                                }
                                                            }
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d4403121c59" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-630619398457a" data-node="630619398457a">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-6306193a0679f" data-node="6306193a0679f">
                                    <div class="fl-col fl-node-6306193a06a46" data-node="6306193a06a46">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-6306193980ff4" data-node="6306193980ff4">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 30px;"><strong>Local do Evento</strong></span></p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 30px;"><strong><?php echo $local ?></strong></span></p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 20px;"><strong><?php echo $cidade ?> - <?php echo $estado ?></strong></span></p>
                                                        <p>&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 20px;">Horários:</span></p>
                                                        <?php 
                                                        if($hmanha != '' && $hmanhaFim != ''){
                                                            echo "<p style='text-align: center;'><span style='font-size: 18px; color: #ffffff;'> Manhã $hmanha às $hmanhaFim</span><span style='font-size: 20px; color: #ffffff;'>  </span></p>";
                                                        }
                                                        
                                                       


                                                        if($htarde != '' && $htardeFim  != ''){
                                                            echo "<p style='text-align: center;'><span style='font-size: 18px; color: #ffffff;'> Tarde $htarde às $htardeFim</span><span style='font-size: 20px; color: #ffffff;'>  </span></p>";
                                                        }   
                                                        
                                                        

                                                        if($hnoite != '' && $hnoiteFim != ''){
                                                            echo "<p style='text-align: center;'><span style='font-size: 18px; color: #ffffff;'> Noite $hnoite às $hnoiteFim</span><span style='font-size: 20px; color: #ffffff;'>  </span></p>";
                                                        }
                                                       
                                                        
                                                        
                                                      

                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        <p>&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-63061d40487d4" data-node="63061d40487d4">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 30px;"><strong>CERTIFICAÇÃO:</strong></span></p>
                                                        <p>&nbsp;</p>
                                                        <p style="text-align: center;"><span style="color: #ffffff;"><strong>CERTIFICADO REGISTRADO NA ABRATH (ASSOCIAÇÃO BRASILEIRA DOS TERAPEUTAS HOLÍSTICOS )</strong></span></p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 40px;"><strong><span style="font-size: 30px;">CERTIFICAÇÃO DE</span></strong></span></p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 40px;"><strong><span style="font-size: 30px;"> <?php echo $certificacao; ?> HORAS</span> </strong></span></p>
                                                        <p>&nbsp;</p>
                                                        <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 40px;"> <span style="font-size: 30px;">INSCRIÇÕES NO <?php echo strtoupper($lote);  ?> LOTE</span></span></strong></span></p>
                                                        <p>&nbsp;</p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 20px;"><strong><?php echo strtoupper($extra) ; ?></strong></span></p>
                                                        <p>&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                        <p><span style="font-size: 30px; color: #ffffff;">                                       </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-button_new fl-node-639791572f4e5" data-node="639791572f4e5">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                        <a href="https://chat.whatsapp.com/Eb6YgcHkVuTD324ncGJ1ca" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">Dúvidas Pergunte ao Professor</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-button_new fl-node-6397ae13b477d" data-node="6397ae13b477d">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                        <a href="<?php echo strtoupper($canal) ; ?>" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">CONHEÇA NOSSO CANAL DO YUTUBE</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d440312c261" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-627e69d11f7a1" data-node="627e69d11f7a1">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-627e69d11f7a5" data-node="627e69d11f7a5">
                                    <div class="fl-col fl-node-627e69d11f7a8" data-node="627e69d11f7a8">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f7b0 fl-animation fl-fade-in" data-node="627e69d11f7b0" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                 
                                                                </span></span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-cronometro fl-node-627e69d11f7ac fl-animation fl-fade-up" data-node="627e69d11f7ac" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="cronometro" id="cronometro-id-63d44031383d7" style="text-align:center;">
                                                        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300">
                                                        <style type="text/css">
                                                            @media screen and (max-width: 425px) {
                                                                .countdownHolder {
                                                                    font: 20px/1.5 'Open Sans Condensed', sans-serif !important;
                                                                }
                                                            }
                                                        </style>
                                                        <link rel="stylesheet" href="https://hipnosefacil.gpages.com.br/assets/countdown/countdown/jquery.countdown.css" />
                                                        <div id="18507fb6505"></div>
                                                        <!--<p id="18507fb6505_note" style="color: #666666;font-size: 15px;margin: 0 auto;padding: 4px;text-align: center;"></p>-->
                                                        <script src="https://hipnosefacil.gpages.com.br/assets/countdown/countdown/jquery.countdown.js"></script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-63061b48308e7" data-node="63061b48308e7">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 30px;"><strong>INVESTIMENTO</strong></span></p>
                                                        <p>&nbsp;</p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 22px;"><strong><?php echo strtoupper($lote); ?> LOTE</strong></span></p>
                                                        <p style="text-align: center;"><span style="color: #ffffff; font-size: 22px;"><strong> R$ <?php echo $valor; ?></strong></span></p>
                                                        <p><span style="font-size: 30px; color: #ffffff;">                                       </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-6303dda6d0e31 fl-animation fl-fade-in" data-node="6303dda6d0e31" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h3 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="color: #ffffff; font-family: arial, helvetica, sans-serif;"><span style="font-size: 28px;">Inscreva-se AGORA </span></span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-button_new fl-node-6303de4e4aeb6" data-node="6303de4e4aeb6">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                        <a href="https://pag.ae/7YWLxJ9jo" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">CLIQUE AQUI E FAÇA SUA INSCRIÇÃO</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-627e69d11f7b3" data-node="627e69d11f7b3">
                                    <div class="fl-col fl-node-627e69d11f7b7" data-node="627e69d11f7b7">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d4403142ae6" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-627e69d11f771" data-node="627e69d11f771">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-627e69d11f775" data-node="627e69d11f775">
                                    <div class="fl-col fl-node-627e69d11f778" data-node="627e69d11f778">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f720 fl-animation fl-fade-right" data-node="627e69d11f720" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h6 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="color: #e3124a; font-family: Lato; font-size: 36pt;"><span style="font-size: 28px;"><span style="color: #ffffff;">O QUE VOU</span> </span><span style="color: #ffffff;"><strong><span style="font-size: 28px;"> APRENDER?</span> </strong></span><br />
                                                            </span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d440314a256" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-627e69d11f6e9" data-node="627e69d11f6e9">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-627e69d11f724" data-node="627e69d11f724">
                                    <div class="fl-col fl-node-627e69d11f727 fl-col-small" data-node="627e69d11f727">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-icon fl-node-627e69d11f6f2" data-node="627e69d11f6f2">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-icon-wrap">

                                                        <span class="fl-icon">
                                                            <i class="fas fa-bullseye" aria-hidden="true"></i>
                                                        </span>
                                                        <div id="fl-icon-text-627e69d11f6f2" class="fl-icon-text fl-icon-text-wrap fl-icon-text-empty">
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f735" data-node="627e69d11f735">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p class="T1" style="text-align: center;"><span style="color: #333333;"><span style="font-size: 24pt;"><strong><span style="font-family: Lato;">1° DIA</span></strong></span></span></p>
                                                        <p style="text-align: center;"><span style="color: #333333;"><strong>MANHÃ</strong></span></p>
                                                        <pre class="T2" style="text-align: center;"><span style="font-family: Lato; color: #333333;">Introdução ao curso
Contexto histórico da hipnose
Modelo de mente
Participação Fred Morsch</span></pre>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f72b fl-col-small" data-node="627e69d11f72b">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-icon fl-node-627e69d11f6f5" data-node="627e69d11f6f5">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-icon-wrap">

                                                        <span class="fl-icon">
                                                            <i class="fas fa-bullseye" aria-hidden="true"></i>
                                                        </span>
                                                        <div id="fl-icon-text-627e69d11f6f5" class="fl-icon-text fl-icon-text-wrap fl-icon-text-empty">
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f6f9" data-node="627e69d11f6f9">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p class="T1" style="text-align: center;"><span style="font-family: Lato; font-size: 32px; color: #333333;"><b>1° DIA</b></span></p>
                                                        <p class="T1" style="text-align: center;"><span style="color: #333333;"><strong><span style="font-family: Lato; font-size: 12pt;">TARDE</span></strong></span></p>
                                                        <pre class="T2" style="text-align: center;"><span style="font-family: Lato; color: #333333;">Técnicas pré hipnose
Demonstrações práticas
Técnicas de indução
Roteiros de aprofundamento
Experiências Fred Morsch</span></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f72e fl-col-small" data-node="627e69d11f72e">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-icon fl-node-627e69d11f6ed" data-node="627e69d11f6ed">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-icon-wrap">

                                                        <span class="fl-icon">
                                                            <i class="fas fa-bullseye" aria-hidden="true"></i>
                                                        </span>
                                                        <div id="fl-icon-text-627e69d11f6ed" class="fl-icon-text fl-icon-text-wrap fl-icon-text-empty">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f73c" data-node="627e69d11f73c">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p class="T1" style="text-align: center;"><span style="color: #000000;"><span style="font-size: 24pt;"><strong><span style="font-family: Lato;">2° DIA</span></strong></span></span></p>
                                                        <p style="text-align: center;"><span style="color: #000000;"><strong>MANHÃ</strong></span></p>
                                                        <pre class="T2" style="text-align: center;"><span style="font-family: Lato;"><span style="color: #000000;">Abertura com Fred Morsch
Práticas entre alunos
Colocando a prova a teoria
Hipnose na terapia
Procedimentos terapêuticos
Metáforas

</span></span></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-627e69d11f732 fl-col-small" data-node="627e69d11f732">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-icon fl-node-627e69d11f6fc" data-node="627e69d11f6fc">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-icon-wrap">

                                                        <span class="fl-icon">
                                                            <i class="fas fa-bullseye" aria-hidden="true"></i>
                                                        </span>
                                                        <div id="fl-icon-text-627e69d11f6fc" class="fl-icon-text fl-icon-text-wrap fl-icon-text-empty">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-627e69d11f738" data-node="627e69d11f738">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p class="T1" style="text-align: center;"><span style="color: #333333;"><span style="font-size: 24pt;"><strong><span style="font-family: Lato;">2° DIA</span></strong></span></span></p>
                                                        <p style="text-align: center;"><strong>TARDE</strong></p>
                                                        <pre class="T2" style="text-align: center;"><span style="font-family: Lato; color: #000000;">Regressão de idade
Regressão vidas passadas
Abdução por Fred Morsch
Dissociação
Ressignificação
Práticas terapêuticas
Encerramento

</span></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <head>
                                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

                                    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
                                </head>

                                <div class="container galeria">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="titulo">
                                                Galeria de Fotos
                                            </div>
                                        </div>


                                        <div class="col-lg-3 foto" id="foto1">
                                            <div class="fundo-img">

                                                <div href="#foto1">
                                                    <a data-fancybox="gallery" href="instagram.png"><img src="instagram.png"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>



                                        </div>



                                        <div class="col-lg-3 foto" id="foto1">
                                            <div class="fundo-img">

                                                <div href="#foto1">
                                                    <a data-fancybox="gallery" href="instagram.png"><img src="instagram.png"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>



                                        </div>



                                        <div class="col-lg-3 foto" id="foto1">
                                            <div class="fundo-img">

                                                <div href="#foto1">
                                                    <a data-fancybox="gallery" href="instagram.png"><img src="instagram.png"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>



                                        </div>





                                        <div class="col-lg-3 foto" id="foto1">
                                            <div class="fundo-img">

                                                <div href="#foto1">
                                                    <a data-fancybox="gallery" href="instagram.png"><img src="instagram.png"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>



                                        </div>




                                        <div class="col-lg-3 foto" id="foto1">
                                            <div class="fundo-img">

                                                <div href="#foto1">
                                                    <a data-fancybox="gallery" href="instagram.png"><img src="instagram.png"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>



                                        </div>


                                        <div class="col-lg-3 foto" id="foto2">
                                            <div class="fundo-img">
                                                <div href="#foto2">
                                                    <a data-fancybox="gallery" href="image-gallery-orange.jpg"><img src="image-gallery-orange.jpg"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>

                                        </div>




                                        <div class="col-lg-3 foto" id="foto3">
                                            <div class="fundo-img">
                                                <div href="#foto3">
                                                    <a data-fancybox="gallery" href="marquinhos-foto.jpg"><img src="marquinhos-foto.jpg"></a>
                                                    <svg class='lupa' style='color:black; margin-top:4%' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>

                                                </div>
                                            </div>









                                        </div>

                                    </div>

                                </div>






                                <style>
                                    .titulo {
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        font-size: 38px;
                                        font-weight: bold;
                                        color: white;
                                    }


                                    .foto {
                                        margin-top: 5%
                                    }


                                    .lupa {
                                        display: none
                                    }


                                    .foto:hover .lupa {
                                        display: block
                                    }

                                    .fundo-img {
                                        padding: 10px;
                                        background-color: white;
                                        border-radius: 5px;
                                        cursor: pointer;
                                        width: 95%;
                                    }


                                    .foto img {
                                        min-height: 280px;
                                        max-height: 240px;
                                        width: 100%
                                    }

                                    .galeria {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10%;
                                        margin-bottom: 10%
                                    }


                                    .detalhes {
                                        display: none;
                                    }



                                    .whatsapp-share-button {
                                        display: inline-block;
                                        width: 40px;
                                        height: 40px;
                                        margin: 5px;
                                        background-size: 100% 100%;
                                        /* ou 'contain' */
                                        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk3My4wMDAwMDAsIC01MzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjNTdCQTYzIiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNODAyLjk5NTkzNyw0MDAgTDg1Ny4wMDQwNjMsNDAwIEM4NTguNjU4NjczLDQwMCA4NjAsNDAxLjMzNzMxIDg2MCw0MDIuOTk1OTM3IEw4NjAsNDU3LjAwNDA2MyBDODYwLDQ1OC42NTg2NzMgODU4LjY2MjY5LDQ2MCA4NTcuMDA0MDYzLDQ2MCBMODAyLjk5NTkzNyw0NjAgQzgwMS4zNDEzMjcsNDYwIDgwMCw0NTguNjYyNjkgODAwLDQ1Ny4wMDQwNjMgTDgwMCw0MDIuOTk1OTM3IEM4MDAsNDAxLjM0MTMyNyA4MDEuMzM3MzEsNDAwIDgwMi45OTU5MzcsNDAwIFoiIGlkPSJzcXVhcmUtNDkiLz48L2c+PGcgZmlsbD0iI0ZGRkZGRiIgaWQ9Imljb24iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE4Mi4wMDAwMDAsIDE1MC4wMDAwMDApIj48cGF0aCBkPSJNODIxLjA3MTI2Miw0MzQuMjIxMDQ2IEM4MTguMjEwODMxLDQzNC4yMjEwNDYgODE1LjUyMzU2OSw0MzMuNDg5OTY5IDgxMy4xODU2LDQzMi4yMDY4OTIgTDgwNC4xNTM4NDYsNDM1LjA3NjkyMyBMODA3LjA5ODA5Miw0MjYuMzkxODc3IEM4MDUuNjEzMDQ2LDQyMy45NTIzNjkgODA0Ljc1NzUzOCw0MjEuMDkxNTY5IDgwNC43NTc1MzgsNDE4LjAzMzYgQzgwNC43NTc1MzgsNDA5LjA5MzQxNSA4MTIuMDYxMjkyLDQwMS44NDYxNTQgODIxLjA3MTYzMSw0MDEuODQ2MTU0IEM4MzAuMDgwODYyLDQwMS44NDYxNTQgODM3LjM4NDYxNSw0MDkuMDkzNDE1IDgzNy4zODQ2MTUsNDE4LjAzMzYgQzgzNy4zODQ2MTUsNDI2Ljk3Mzc4NSA4MzAuMDgxMjMxLDQzNC4yMjEwNDYgODIxLjA3MTI2Miw0MzQuMjIxMDQ2IFogTTgyMS4wNzEyNjIsNDA0LjQyNDEyMyBDODEzLjUwNzkzOCw0MDQuNDI0MTIzIDgwNy4zNTU4MTUsNDEwLjUyOTM1NCA4MDcuMzU1ODE1LDQxOC4wMzM2IEM4MDcuMzU1ODE1LDQyMS4wMTE0NDYgODA4LjMyNjUyMyw0MjMuNzY5MjMxIDgwOS45NjgxMjMsNDI2LjAxMzA0NiBMODA4LjI1NDg5Miw0MzEuMDY3MDc3IEw4MTMuNTI1MjkyLDQyOS4zOTE4NzcgQzgxNS42OTEyLDQzMC44MTM3ODUgODE4LjI4NTQxNSw0MzEuNjQzMDc3IDgyMS4wNzEyNjIsNDMxLjY0MzA3NyBDODI4LjYzMzQ3Nyw0MzEuNjQzMDc3IDgzNC43ODY3MDgsNDI1LjUzODIxNSA4MzQuNzg2NzA4LDQxOC4wMzM5NjkgQzgzNC43ODY3MDgsNDEwLjUyOTcyMyA4MjguNjMzNDc3LDQwNC40MjQxMjMgODIxLjA3MTI2Miw0MDQuNDI0MTIzIEw4MjEuMDcxMjYyLDQwNC40MjQxMjMgWiBNODI5LjMwODgsNDIxLjc2MTcyMyBDODI5LjIwODM2OSw0MjEuNTk2Njc3IDgyOC45NDE3ODUsNDIxLjQ5Njk4NSA4MjguNTQyNjQ2LDQyMS4yOTg3MDggQzgyOC4xNDI0LDQyMS4xMDA0MzEgODI2LjE3NTg3Nyw0MjAuMTQwMDYyIDgyNS44MDk5NjksNDIwLjAwODI0NiBDODI1LjQ0Mjk1NCw0MTkuODc2MDYyIDgyNS4xNzYsNDE5LjgwOTIzMSA4MjQuOTA5Nzg1LDQyMC4yMDY1MjMgQzgyNC42NDM1NjksNDIwLjYwMzgxNSA4MjMuODc3MDQ2LDQyMS40OTY5ODUgODIzLjY0MzMyMyw0MjEuNzYxNzIzIEM4MjMuNDA5OTY5LDQyMi4wMjY4MzEgODIzLjE3Njk4NSw0MjIuMDYwMDYyIDgyMi43NzcxMDgsNDIxLjg2MTQxNSBDODIyLjM3NzYsNDIxLjY2MzEzOCA4MjEuMDg4OTg1LDQyMS4yNDQwNjIgODE5LjU2MTEwOCw0MTkuODkyMzA4IEM4MTguMzcyNTU0LDQxOC44NDA3MzggODE3LjU2OTg0Niw0MTcuNTQyNTIzIDgxNy4zMzY4NjIsNDE3LjE0NDg2MiBDODE3LjEwMzUwOCw0MTYuNzQ3OTM4IDgxNy4zMTIxMjMsNDE2LjUzMzQxNSA4MTcuNTEyMjQ2LDQxNi4zMzU4NzcgQzgxNy42OTIwNjIsNDE2LjE1NzkwOCA4MTcuOTEyMTIzLDQxNS44NzI0OTIgODE4LjExMjI0Niw0MTUuNjQwOTg1IEM4MTguMzEyMzY5LDQxNS40MDkxMDggODE4LjM3ODgzMSw0MTUuMjQ0MDYyIDgxOC41MTE3NTQsNDE0Ljk3ODk1NCBDODE4LjY0NTQxNSw0MTQuNzE0MjE1IDgxOC41Nzg1ODUsNDE0LjQ4MjcwOCA4MTguNDc4NTIzLDQxNC4yODM2OTIgQzgxOC4zNzg0NjIsNDE0LjA4NTQxNSA4MTcuNTc4MzM4LDQxMi4xMzI5MjMgODE3LjI0NTI5Miw0MTEuMzM4MzM4IEM4MTYuOTEyMjQ2LDQxMC41NDQ0OTIgODE2LjU3OTU2OSw0MTAuNjc2Njc3IDgxNi4zNDU4NDYsNDEwLjY3NjY3NyBDODE2LjExMjQ5Miw0MTAuNjc2Njc3IDgxNS44NDU5MDgsNDEwLjY0MzQ0NiA4MTUuNTc5MzIzLDQxMC42NDM0NDYgQzgxNS4zMTI3MzgsNDEwLjY0MzQ0NiA4MTQuODc5MjYyLDQxMC43NDI3NjkgODE0LjUxMjYxNSw0MTEuMTM5NjkyIEM4MTQuMTQ2MzM4LDQxMS41MzY5ODUgODEzLjExMzYsNDEyLjQ5Njk4NSA4MTMuMTEzNiw0MTQuNDQ5MTA4IEM4MTMuMTEzNiw0MTYuNDAxNiA4MTQuNTQ1ODQ2LDQxOC4yODggODE0Ljc0NjMzOCw0MTguNTUyMzY5IEM4MTQuOTQ2MDkyLDQxOC44MTY3MzggODE3LjUxMTg3Nyw0MjIuOTUzNiA4MjEuNTc2NzM4LDQyNC41NDI0IEM4MjUuNjQzMDc3LDQyNi4xMzA4MzEgODI1LjY0MzA3Nyw0MjUuNjAwOTg1IDgyNi4zNzYzNjksNDI1LjUzNDg5MiBDODI3LjEwODU1NCw0MjUuNDY4OCA4MjguNzQxMjkyLDQyNC41NzUyNjIgODI5LjA3NTQ0Niw0MjMuNjQ4ODYyIEM4MjkuNDA4MTIzLDQyMi43MjE3MjMgODI5LjQwODEyMyw0MjEuOTI3MTM4IDgyOS4zMDg4LDQyMS43NjE3MjMgTDgyOS4zMDg4LDQyMS43NjE3MjMgWiIgaWQ9IndoYXRzYXBwIi8+PC9nPjwvZz48L2c+PC9zdmc+");
                                        /*Base 64 Icon by Xinh Studio*/
                                        background-repeat: no-repeat;
                                        background-position: center;
                                    }

                                    .facebook-share-button {
                                        display: inline-block;
                                        width: 40px;
                                        height: 40px;
                                        margin: 5px;
                                        background-size: 100% 100%;
                                        /* ou 'contain' */
                                        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI3My4wMDAwMDAsIC0xMzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjMzQ2REE2IiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNMTAyLjk5NTkzNywwIEwxNTcuMDA0MDYzLDAgQzE1OC42NTg2NzMsMCAxNjAsMS4zMzczMDk3NCAxNjAsMi45OTU5Mzc0MyBMMTYwLDU3LjAwNDA2MjYgQzE2MCw1OC42NTg2NzMxIDE1OC42NjI2OSw2MCAxNTcuMDA0MDYzLDYwIEwxMDIuOTk1OTM3LDYwIEMxMDEuMzQxMzI3LDYwIDEwMCw1OC42NjI2OTAzIDEwMCw1Ny4wMDQwNjI2IEwxMDAsMi45OTU5Mzc0MyBDMTAwLDEuMzQxMzI2ODggMTAxLjMzNzMxLDAgMTAyLjk5NTkzNywwIFoiIGlkPSJzcXVhcmUtMiIvPjwvZz48ZyBmaWxsPSIjRkZGRkZGIiBpZD0iaWNvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTgyLjAwMDAwMCwgMTUwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0xMTYuNDYyMjI0LDM1LjMxNDMxMyBMMTE2LjQ2MjIyNCwxNy45OTg5NjEzIEwxMTIuOTQzMjg5LDE3Ljk5ODk2MTIgTDExMi45NDMyODksMTIuMjU5MzU2MyBMMTE2LjQ2MjIyNCwxMi4yNTkzNTYzIEwxMTYuNDYyMjI0LDguNzg4Mzg2NDEgQzExNi40NjIyMjQsNC4xMDY2NDIyMiAxMTcuODYxOTk1LDAuNzMwNjE4OTg2IDEyMi45ODgxMDIsMC43MzA2MTg5ODYgTDEyOS4wODYzNiwwLjczMDYxODk4NiBMMTI5LjA4NjM2LDYuNDU4NDM5OTYgTDEyNC43OTIyNTUsNi40NTg0Mzk5NiBDMTIyLjY0MTg5NCw2LjQ1ODQzOTk2IDEyMi4xNTE4NzQsNy44ODczNzYzIDEyMi4xNTE4NzQsOS4zODM3NjA5NSBMMTIyLjE1MTg3NCwxMi4yNTkzNTUzIEwxMjguNzY5NDIzLDEyLjI1OTM1NTggTDEyNy44NjYxNzMsMTcuOTk4OTYxMyBMMTIyLjE1MTg3NCwxNy45OTg5NjEzIEwxMjIuMTUxODc0LDM1LjMxNDMxMjMgTDExNi40NjIyMjQsMzUuMzE0MzEzIFoiIGlkPSJmYWNlYm9vayIvPjwvZz48L2c+PC9nPjwvc3ZnPg==");
                                        /*Base 64 Icon by Xinh Studio*/
                                        background-repeat: no-repeat;
                                        background-position: center;
                                    }

                                    .insta-share-button {
                                        display: inline-block;
                                        width: 40px;
                                        height: 40px;
                                        margin: 5px;
                                        background-size: 100% 100%;
                                        /* ou 'contain' */
                                        background-image: url("instagram.png");
                                        /*Base 64 Icon by Xinh Studio*/
                                        background-repeat: no-repeat;
                                        background-position: center;
                                    }

                                    .botoes {
                                        position: fixed;
                                        top: 77%;
                                        left: 95%;
                                        display: flex;
                                        flex-direction: column;
                                        z-index: 10;

                                    }
                                </style>

                            </div>

                            <div class="botoes">
                                <a href="https://api.whatsapp.com/send?text=," id="whatsapp-share-btt" rel="nofollow" target="_blank" class="whatsapp-share-button"></a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u=" id="facebook-share-btt" rel="nofollow" target="_blank" class="facebook-share-button"></a>

                                <a href="https://instagram.com" id="facebook-share-btt" rel="nofollow" target="_blank" class="insta-share-button"></a>

                            </div>





                        </div>





                    </div>











                    <div id="63d4403163542" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-63062d1cdec96" data-node="63062d1cdec96">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-63062d1d91003" data-node="63062d1d91003">
                                    <div class="fl-col fl-node-63062d1d914be" data-node="63062d1d914be">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-63062d1cd756c" data-node="63062d1cd756c">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <p style="text-align: center;"><span style="font-size: 28px;"><strong><span style="color: #ffffff;">O QUE DIZEM ALGUNS DE NOSSOS ALUNOS</span></strong></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-photo fl-node-6306430c2f344" data-node="6306430c2f344">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <source loading="lazy" class="fl-photo-img wp-image-287" alt="Design sem nome (81)" itemprop="image" title="Design sem nome (81)" type="image/webp" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-81.png.webp" style="border-style: hidden;">
                                                                <img loading="lazy" class="fl-photo-img wp-image-287" src="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-81.png" alt="Design sem nome (81)" itemprop="image" title="Design sem nome (81)" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-81.png 768w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-81-300x174.png 300w" sizes="(max-width: 768px) 100vw, 768px" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-photo fl-node-630645039c3da" data-node="630645039c3da">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <source loading="lazy" class="fl-photo-img wp-image-286" alt="Design sem nome (74)" itemprop="image" title="Design sem nome (74)" type="image/webp" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-74-1.png.webp" style="border-style: hidden;">
                                                                <img loading="lazy" class="fl-photo-img wp-image-286" src="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-74-1.png" alt="Design sem nome (74)" itemprop="image" title="Design sem nome (74)" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-74-1.png 768w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-74-1-300x174.png 300w" sizes="(max-width: 768px) 100vw, 768px" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-photo fl-node-63064520d303b" data-node="63064520d303b">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <source loading="lazy" class="fl-photo-img wp-image-282" alt="Design sem nome (79)" itemprop="image" title="Design sem nome (79)" type="image/webp" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-79.png.webp" style="border-style: hidden;">
                                                                <img loading="lazy" class="fl-photo-img wp-image-282" src="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-79.png" alt="Design sem nome (79)" itemprop="image" title="Design sem nome (79)" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-79.png 768w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-79-300x174.png 300w" sizes="(max-width: 768px) 100vw, 768px" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-photo fl-node-6306453949c76" data-node="6306453949c76">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                        <div class="fl-photo-content fl-photo-img-png">

                                                            <picture>
                                                                <source loading="lazy" class="fl-photo-img wp-image-289" alt="Design sem nome (76)" itemprop="image" title="Design sem nome (76)" type="image/webp" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-76-1.png.webp" style="border-style: hidden;">
                                                                <img loading="lazy" class="fl-photo-img wp-image-289" src="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-76-1.png" alt="Design sem nome (76)" itemprop="image" title="Design sem nome (76)" srcset="https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-76-1.png 768w, https://hipnosefacil.gpages.com.br/files/sites/16775/2022/08/Design-sem-nome-76-1-300x174.png 300w" sizes="(max-width: 768px) 100vw, 768px" />
                                                            </picture>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div id="63d44031939be" class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-63978ef5f0839" data-node="63978ef5f0839">
                        <div class="fl-row-content-wrap">
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                <div class="fl-col-group fl-node-63978ef5f25a8" data-node="63978ef5f25a8">
                                    <div class="fl-col fl-node-63978ef5f25b1" data-node="63978ef5f25b1">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-rich-text fl-node-63978ef5f25b8 fl-animation fl-fade-down" data-node="63978ef5f25b8" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h6 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-family: Lato; font-size: 36pt;"><span style="font-size: 28px;"><strong><span style="color: #ffffff;"> <span style="font-size: 30px;"> HIPNOSE na GÊNESE </span></span></strong></span><br />
                                                            </span></h6>
                                                        <p>&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-63978ef5f25bf fl-animation fl-fade-down" data-node="63978ef5f25bf" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h6></h6>
                                                        <h6 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-family: Lato; font-size: 22px;"><span style="color: #ffffff;"> <?php echo $inico; ?> e <?php echo $fim; ?>  <?php echo $mes;?></span></span></h6>
                                                        <h6 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-family: Lato; font-size: 36pt;"><span style="color: #ffffff; font-size: 22px; margin-top:20px"> <?php echo $cidade; ?> - <?php echo $estado; ?></span><br />
                                                            </span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-module fl-module-rich-text fl-node-63978ef5f25c5 fl-animation fl-fade-in" data-node="63978ef5f25c5" data-animation-delay="0" data-animation-duration="1">
                                                <div class="fl-module-content fl-node-content">
                                                    <div class="fl-rich-text">
                                                        <h3 class="text-white text-transform font-weight-700 alt-font margin-one-half-bottom tz-text" style="text-align: center;"><span style="font-family: Lato; font-size: 38pt;"><span style="color: #ffffff; font-size: 22px;"><span style="color: #ffffff; font-family: Lato;margin-top:20px"> Garanta sua vaga agora </span></span><br />
                                                            </span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-63978ef5f25cc" data-node="63978ef5f25cc">
                                    <div class="fl-col fl-node-63978ef5f25d3" data-node="63978ef5f25d3">
                                        <div class="fl-col-content fl-node-content">
                                            <div class="fl-module fl-module-button fl-node-63978ef5f25d9" data-node="63978ef5f25d9">
                                                <div class="fl-module-content fl-node-content">
                                                    <div id="63d44031a2bc2" class="btn-63d44031a2bc2 fl-button-wrap fl-button-width-auto fl-button-center botao-fixo-63d44031a2bc2 ">
                                                        <a href="https://pag.ae/7YWLxJ9jo" target="_self" class="fl-button " role="button">
                                                            <span class="fl-button-text">Quero Minha Vaga Agora </span>
                                                        </a>
                                                    </div>
                                                    <script>
                                                        jQuery(document).ready(function($) {
                                                            /* Explode no ? */
                                                            var url_param = location.href.split('?');
                                                            /* Verifica se existe um parametro */
                                                            if (url_param[1] != "" && url_param[1] != undefined) {
                                                                /* Recebe o atributo href */
                                                                var href = jQuery("#63d44031a2bc2 a").attr('href');
                                                                /* Explode na ? */
                                                                var param = href.split('?');
                                                                /* Verifica se existe algum parametro já salvo */
                                                                if (param[1] != "" && param[1] != undefined) {
                                                                    /* Adiciona com o & para juntar o parametro existente */
                                                                    jQuery("#63d44031a2bc2 a").attr({
                                                                        'href': href + "&" + url_param[1]
                                                                    });
                                                                } else {
                                                                    /* Adiciona com o ? pois não existe parametro */
                                                                    jQuery("#63d44031a2bc2 a").attr({
                                                                        'href': href + "?" + url_param[1]
                                                                    });
                                                                }
                                                            }
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fl-col-group fl-node-63978ef5f25f5" data-node="63978ef5f25f5">
                                    <div class="fl-col fl-node-63978ef5f25fc" data-node="63978ef5f25fc">
                                        <div class="fl-col-content fl-node-content">
                                        </div>
                                    </div>

                                    <div class="newslatter" style="margin-top:6%;">
                                        <div class="campo" style='display:flex;
                                                    justify-content: center;
                                                    flex-direction:column;
                                                    width: 100%;
                                                    
                                                '>
                                            <p class="item">Newslatter</p>

                                            <div class="inputs" style='display:flex;margin-top:2%;margin-left:3%'>
                                                <input type="text" class="form-control campo-item" placeholder="Digite seu melhor e-mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <button class="btn-news;" style="color:white;font-weight:bold;border-radius:5px;outline:none; border:none; background-color:#0071a5; margin-left:3px"><span style="margin-right:4px; background-color:#0071a5;border:none;color:white;font-weight:bold" class="input-group-text span" id="basic-addon2">Inscrever</span></button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>



                        <style>
                            .item {
                                margin-left: 43%;
                                color: white;
                                font-size: 34px;
                                font-weight: bold;
                                margin-bottom: 2%
                            }

                            .campo-item {
                                border-radius: 5px;
                                ;
                                margin-left: 35%;
                                width: 25%
                            }


                            .btn-news span:hover {
                                text-decoration: underline;
                            }

                            @media only screen and (max-width: 991px) {
                                .item {
                                    font-size: 24px;
                                    margin-left: 34%;
                                }

                                .campo-item {
                                    width: 50%;
                                    margin-left: 17%;

                                }

                            }
                        </style>









                        <div id="63d44031a4338" class="fl-row fl-row-full-width fl-row-bg-color fl-node-627e69d11f5da" data-node="627e69d11f5da">
                            <div class="fl-row-content-wrap">
                                <div class="fl-row-content fl-row-fixed-width fl-node-content">

                                    <div class="fl-col-group fl-node-627e69d11f5ec" data-node="627e69d11f5ec">
                                        <div class="fl-col fl-node-627e69d11f5f0" data-node="627e69d11f5f0">
                                            <div class="fl-col-content fl-node-content">
                                                <div class="fl-module fl-module-rich-text fl-node-627e69d11f5df" data-node="627e69d11f5df">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: center;"><span style="font-family: 'trebuchet ms', geneva; color: #999999;">© 2018 Todos direitos reservados</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fl-module fl-module-icon-group fl-node-627e69d11f5e3" data-node="627e69d11f5e3">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-icon-group">

                                                            <span class="fl-icon">
                                                                <a href="https://www.facebook.com/HipnosePsicoterapia" target="_blank" aria-label="link to https://www.facebook.com/HipnosePsicoterapia" rel="noopener">
                                                                    <i class="fi-social-facebook" aria-hidden="true"></i>
                                                                </a>
                                                            </span>


                                                            <span class="fl-icon">
                                                                <a href="https://www.youtube.com/c/HipnoseFacilEAD" target="_blank" aria-label="link to https://www.youtube.com/c/HipnoseFacilEAD" rel="noopener">
                                                                    <i class="dashicons dashicons-before dashicons-video-alt3" aria-hidden="true"></i>
                                                                </a>
                                                            </span>


                                                            <span class="fl-icon">
                                                                <a href="https://www.instagram.com/hipnosefacil/" target="_self" aria-label="link to https://www.instagram.com/hipnosefacil/">
                                                                    <i class="fas fa-info-circle" aria-hidden="true"></i>
                                                                </a>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>










                    </div>
                </div>
            </div>
            <link rel='stylesheet' id='fl-builder-layout-260-css' href='https://hipnosefacil.gpages.com.br/files/sites/16775/gdigital_novo/cache/260-layout-partial.css?ver=c3a3a8e06f6d089ea22cefb2d3ecec95' type='text/css' media='all' />
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/gdigital/gdigital_novo/js/jquery.fitvids.min.js?ver=1.2'></script>
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/gdigital/gdigital_novo/js/jquery.waypoints.min.js?ver=2.3.1.3'></script>
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/files/sites/16775/gdigital_novo/cache/260-layout.js?ver=c3a3a8e06f6d089ea22cefb2d3ecec95'></script>
            <script type='text/javascript'>
                /* <![CDATA[ */
                var inbound = {
                    "post_id": "260"
                };
                /* ]]> */
            </script>
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/painel/assets/tracking/conversao.js'></script>
            <script type='text/javascript'>
                var mejsL10n = {
                    "language": "pt",
                    "strings": {
                        "mejs.install-flash": "Voc\u00ea est\u00e1 usando um navegador que n\u00e3o tem Flash ativo ou instalado. Ative o plugin do Flash player ou baixe a \u00faltima vers\u00e3o em https:\/\/get.adobe.com\/flashplayer\/",
                        "mejs.fullscreen-off": "Desativar tela cheia",
                        "mejs.fullscreen-on": "Tela cheia",
                        "mejs.download-video": "Baixar o v\u00eddeo",
                        "mejs.fullscreen": "Tela inteira",
                        "mejs.time-jump-forward": ["Avan\u00e7ar 1 segundo", "Avan\u00e7ar %1 segundos"],
                        "mejs.loop": "Alternar repeti\u00e7\u00e3o",
                        "mejs.play": "Reproduzir",
                        "mejs.pause": "Pausar",
                        "mejs.close": "Fechar",
                        "mejs.time-slider": "Tempo do slider",
                        "mejs.time-help-text": "Use as setas esquerda e direita para avan\u00e7ar um segundo. Acima e abaixo para avan\u00e7ar dez segundos.",
                        "mejs.time-skip-back": ["Voltar 1 segundo", "Retroceder %1 segundos"],
                        "mejs.captions-subtitles": "Transcri\u00e7\u00f5es\/Legendas",
                        "mejs.captions-chapters": "Cap\u00edtulos",
                        "mejs.none": "Nenhum",
                        "mejs.mute-toggle": "Alternar mudo",
                        "mejs.volume-help-text": "Use as setas para cima ou para baixo para aumentar ou diminuir o volume.",
                        "mejs.unmute": "Desativar mudo",
                        "mejs.mute": "Mudo",
                        "mejs.volume-slider": "Controle de volume",
                        "mejs.video-player": "Tocador de v\u00eddeo",
                        "mejs.audio-player": "Tocador de \u00e1udio",
                        "mejs.ad-skip": "Pular an\u00fancio",
                        "mejs.ad-skip-info": ["Pular em 1 segundo", "Pular em %1 segundos"],
                        "mejs.source-chooser": "Seletor de origem",
                        "mejs.stop": "Parar",
                        "mejs.speed-rate": "Taxa de velocidade",
                        "mejs.live-broadcast": "Transmiss\u00e3o ao vivo",
                        "mejs.afrikaans": "Afric\u00e2ner",
                        "mejs.albanian": "Alban\u00eas",
                        "mejs.arabic": "\u00c1rabe",
                        "mejs.belarusian": "Bielorrusso",
                        "mejs.bulgarian": "B\u00falgaro",
                        "mejs.catalan": "Catal\u00e3o",
                        "mejs.chinese": "Chin\u00eas",
                        "mejs.chinese-simplified": "Chin\u00eas (simplificado)",
                        "mejs.chinese-traditional": "Chin\u00eas (tradicional)",
                        "mejs.croatian": "Croata",
                        "mejs.czech": "Checo",
                        "mejs.danish": "Dinamarqu\u00eas",
                        "mejs.dutch": "Holand\u00eas",
                        "mejs.english": "Ingl\u00eas",
                        "mejs.estonian": "Estoniano",
                        "mejs.filipino": "Filipino",
                        "mejs.finnish": "Finland\u00eas",
                        "mejs.french": "Franc\u00eas",
                        "mejs.galician": "Galega",
                        "mejs.german": "Alem\u00e3o",
                        "mejs.greek": "Grego",
                        "mejs.haitian-creole": "Crioulo haitiano",
                        "mejs.hebrew": "Hebraico",
                        "mejs.hindi": "Hindi",
                        "mejs.hungarian": "H\u00fangaro",
                        "mejs.icelandic": "Island\u00eas",
                        "mejs.indonesian": "Indon\u00e9sio",
                        "mejs.irish": "Irland\u00eas",
                        "mejs.italian": "Italiano",
                        "mejs.japanese": "Japon\u00eas",
                        "mejs.korean": "Coreano",
                        "mejs.latvian": "Let\u00e3o",
                        "mejs.lithuanian": "Lituano",
                        "mejs.macedonian": "Maced\u00f4nio",
                        "mejs.malay": "Malaio",
                        "mejs.maltese": "Malt\u00eas",
                        "mejs.norwegian": "Noruegu\u00eas",
                        "mejs.persian": "Persa",
                        "mejs.polish": "Polon\u00eas",
                        "mejs.portuguese": "Portugu\u00eas",
                        "mejs.romanian": "Romeno",
                        "mejs.russian": "Russo",
                        "mejs.serbian": "S\u00e9rvio",
                        "mejs.slovak": "Eslovaco",
                        "mejs.slovenian": "Esloveno",
                        "mejs.spanish": "Espanhol",
                        "mejs.swahili": "Sua\u00edli",
                        "mejs.swedish": "Sueco",
                        "mejs.tagalog": "Tagalo",
                        "mejs.thai": "Tailand\u00eas",
                        "mejs.turkish": "Turco",
                        "mejs.ukrainian": "Ucraniano",
                        "mejs.vietnamese": "Vietnamita",
                        "mejs.welsh": "Gal\u00eas",
                        "mejs.yiddish": "I\u00eddiche"
                    }
                };
            </script>
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.6-78496d1'></script>
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=4.9.4'></script>
            <script type='text/javascript'>
                /* <![CDATA[ */
                var _wpmejsSettings = {
                    "pluginPath": "\/wp-includes\/js\/mediaelement\/",
                    "classPrefix": "mejs-",
                    "stretching": "responsive"
                };
                /* ]]> */
            </script>
            <script type='text/javascript' src='https://hipnosefacil.gpages.com.br/wp-includes/js/wp-embed.min.js?ver=4.9.4'></script>
            <div class="load-tag">
                <script>
                    /* Funcão para buscar o Cookie */
                    function getCookie(cname) {
                        var name = cname + "=";
                        var ca = document.cookie.split(';');
                        for (var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') c = c.substring(1);
                            if (c.indexOf(name) == 0) {
                                return c.substring(name.length, c.length);
                            }
                        }
                        return "";
                    }
                    /* Recebe o lead*/
                    var lead = getCookie("id_lead_16775_");
                    /* Recebe a tag */
                    var tag = '';
                    /* Verifica se existe o lead e a tag */
                    if ((lead != undefined && lead != "") && (tag != undefined && tag != "")) {
                        /**/
                        jQuery.ajax({
                                url: '/api/lead/index.php',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    "acao": "salva_tag_lead",
                                    "id_lead": lead,
                                    "id_tag": tag,
                                    "acao_tag": "adicionar",
                                    "ID": 16775,
                                    "tk": '9c61eb804ede4bede474ef81f6e81f6e',
                                },
                            })
                            .done(function(dados) {
                                console.log(dados);
                                /* Remove da tela */
                                jQuery(".load-tag").remove();
                            })
                            .fail(function(erro) {
                                console.log(erro);
                                /* Remove da tela */
                                jQuery(".load-tag").remove();
                            });
                    } else {
                        /* Remove da tela */
                        jQuery(".load-tag").remove();
                    }
                </script>
            </div>
            <script>
                /**/
                jQuery(document).ready(function() {
                    var u_agent = navigator.userAgent;
                    /* instacia as variaveis */
                    var navegador = 'Unknown';
                    var plataforma = 'Unknown';
                    /* Verifica qual o sistema em uso */
                    if (u_agent.match('Linux')) {
                        plataforma = 'Linux';
                    } else if (u_agent.match('Macintosh') || u_agent.match('mac os x')) {
                        plataforma = 'Mac';
                    } else if (u_agent.match('Win32') || u_agent.match('Windows')) {
                        plataforma = 'Windows';
                    }
                    /* Verifica se é Mobile */
                    if (u_agent.match('phone') || u_agent.match('iPhone')) {
                        plataforma = 'iPhone';
                    } else if (u_agent.match('pad')) {
                        plataforma = 'iPad';
                    } else if (u_agent.match('pod')) {
                        plataforma = 'iPod';
                    } else if (u_agent.match('Android')) {
                        plataforma = 'Android';
                    } else if (u_agent.match('BlackBerry')) {
                        plataforma = 'BlackBerry';
                    }
                    /* Verifica qual o navegador em uso */
                    if (u_agent.match('MSIE') && !u_agent.match('Opera')) {
                        navegador = 'Internet Explorer';
                    } else if (u_agent.match('Firefox')) {
                        navegador = 'Mozilla Firefox';
                    } else if (u_agent.match('OPR')) {
                        navegador = 'Opera';
                    } else if (u_agent.match('Chrome')) {
                        navegador = 'Google Chrome';
                    } else if (u_agent.match('CriOS')) {
                        navegador = 'Google Chrome';
                    } else if (u_agent.match('Safari')) {
                        navegador = 'Apple Safari';
                    } else if (u_agent.match('AppleWebKit')) {
                        navegador = 'AppleWebKit';
                    } else if (u_agent.match('Netscape')) {
                        navegador = 'Netscape';
                    }
                    jQuery.ajax({
                        url: 'https://wiki.gdigital.com.br/dbnovo/index.php',
                        type: 'POST',
                        dataType: 'html',
                        data: {
                            post_id: 260,
                            qtde: 1,
                            navegador: navegador,
                            plataforma: plataforma,
                            blog_id: 16775,
                            ID: 16775,
                            tk: '47b9e213214c348795a1e75a27bf4b1c',
                            acao: "salva_view",
                            conta_ativa: 'gpages.com.br'
                        }
                    });
                });
            </script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" async></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" async></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js" async></script>
            <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@13.0.0/dist/lazyload.min.js"></script>

            <script type="text/javascript">
                jQuery(document).ready(function() {
                    (function() {
                        var ll = new LazyLoad({
                            elements_selector: "img picture",
                            load_delay: 300, //adjust according to use case
                        });
                    })();
                });
            </script>
            <script>
                //validacao para webP na linha entre outros.
                function supportsWebp() {
                    if (!self.createImageBitmap) return false;

                    const webpData = 'data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=';
                    const blob = fetch(webpData).then(r => r.blob());
                    return createImageBitmap(blob).then(() => true, () => false);
                }
                //validacao para webP
                jQuery(document).ready(function() {
                    if (supportsWebp()) {
                        jQuery(".fl-row-content-wrap").addClass("webp");
                    } else {
                        jQuery(".fl-row-content-wrap").addClass("nowebp");
                    }
                });
            </script>


            <!-- <!DOCTYPE html>
<html lang="en"> -->
            <!-- <head>
        <meta name="__gdcc" content="true"/> -->
            <!-- <meta charset="UTF-8"> -->
            <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
            <!-- <title>modal lgpd</title> -->
            <!-- </head> -->







            <style>
                :root {
                    --base-color: white;
                    --base-text-color: #818389;
                }

                [data-theme='dark'] {
                    --base-color: rgba(0, 0, 0, 0.7);
                    --base-text-color: white;
                }

                .cookies-container {
                    font-family: 'Montserrat', sans-serif;
                    margin: 0px;
                }

                .cookies-container {
                    display: none;
                    color: #222;
                    position: fixed;
                    width: 100%;
                    bottom: 2rem;
                    z-index: 99999999999999;
                }

                .cookies-content {
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.52);
                    /* background-color: rgb(0,0,0);  */
                    opacity: 0.8;
                    background-color: var(--base-color);
                    max-width: 90%;
                    border-radius: 5px;
                    padding: 1rem;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 3.5rem;
                    animation: slidup .5s forwards;
                    opacity: 0;
                    transform: translateY(1rem);
                }

                @keyframes slidup {
                    to {
                        transform: initial;
                        opacity: initial;
                    }
                }

                .cookies-b {
                    margin-left: 10px;
                    max-width: 870px;
                }

                .cookies-b span {
                    font-family: 'Montserrat', sans-serif;
                    color: var(--base-text-color);
                    font-style: normal;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 150%;
                }

                .cookies-b p {
                    color: var(--base-text-color);
                }

                .cookies-b a {
                    color: #00E4A0;
                    text-decoration: none;
                }

                .cookies-save {
                    font-family: 'Montserrat', sans-serif;
                    display: flex;
                    align-items: center;
                    margin-right: 30px;
                }


                .save,
                .cancel {
                    font-family: 'Montserrat', sans-serif;
                    background: #00E4A0;
                    color: white;
                    margin-left: 10px;
                    cursor: pointer;
                    border: none;
                    border-radius: 5px;
                    width: 160px;
                    height: 50px;
                    padding: 15px;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 17px;
                }

                .save-unique {
                    font-family: 'Montserrat', sans-serif;
                    margin-left: 10px;
                    background: #00E4A0;
                    color: white;
                    cursor: pointer;
                    border: none;
                    border-radius: 5px;
                    width: 260px;
                    height: 50px;
                    padding: 15px;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 17px;
                }

                /* .save{
    background: #00E4A0;
    color: white;  
} */
                .cancel {
                    background: #ededf0;
                    color: #81858e;
                }


                @media (min-width: 300px) and (max-width: 500px) {
                    .cookies-content {
                        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
                        width: 90%;
                        background-color: var(--base-color);
                        max-width: 460px;
                        border-radius: 5px;
                        padding: 1rem;
                        margin: 0 auto;
                        display: flex;
                        flex-direction: column;
                        /* border: 1px solid red; */
                        margin-bottom: 15px;
                        animation: slidup .5s forwards;
                        opacity: 0;
                        transform: translateY(1rem);
                    }



                    .cookies-b {
                        margin-top: 5px;
                        max-width: 300px;
                    }

                    .cookies-b p {
                        color: var(--base-text-color);
                    }

                    .cookies-b span {

                        margin-top: 10px;
                        margin-left: 0px;

                    }

                    .cookies-b a {

                        color: #00E4A0;
                        text-decoration: none;
                    }

                    .cookies-save {
                        justify-content: center;
                        margin-right: 0px;
                        margin-bottom: 15px;
                    }

                    .cookies-save button {
                        margin-left: 5px;
                        cursor: pointer;
                        border: none;
                        border-radius: 5px;
                        width: 140px;
                        height: 50px;
                        padding: 0px;
                    }

                    .save-unique {
                        width: 160px !important;
                    }
                }

                .wf-button-container {
                    z-index: 999999999 !important;
                }
            </style>

            <div class="cookies-container">
                <div class="cookies-content">


                    <div class="cookies-b">
                        <p><br></p>
                    </div>

                    <div class="cookies-save">
                        <button class="cancel">Cancelar</button>
                        <button class="save">Continuar</button>
                    </div>
                </div>
            </div>

            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
            <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
            <script>
                ((l) => {

                    let tema = ''
                    let cookie_value = 'lgpd';
                    const cev = new CustomEvent('_gdload');

                    // document.addEventListener("_gdload", ()=>{
                    //     console.log("evento");
                    // });

                    document.documentElement.setAttribute('data-theme', tema);

                    let lgpd = Cookies.get(cookie_value);
                    if (lgpd === 'true') {
                        // console.log("os cookies estão liberados")
                        document.dispatchEvent(cev);
                        $('.cookies-container').hide();
                    }
                    if (lgpd === 'false') {
                        // console.log("os cookies não estão liberados")
                        $('.cookies-container').hide();
                        removeCookies();
                    }
                    if (!lgpd) {
                        // console.log("os cookies não existem ");
                        $('.cookies-container').show();
                    }

                    let modaText = document.querySelector('.cookies-b').innerText;
                    if (modaText === "") {
                        document.querySelector('.cookies-b').innerText = 'Usamos cookies para personalizar sua experiência no site. Ao continuar navegando, você concorda com a nossa Política de Privacidade'
                    }

                    $(".save-unique").on('click', () => {
                        Cookies.set(cookie_value, 'true', {
                            expires: 365
                        })
                        $('.cookies-container').hide();
                        document.dispatchEvent(cev);
                    });

                    $(".save").on('click', () => {
                        Cookies.set(cookie_value, 'true', {
                            expires: 365
                        })
                        $('.cookies-container').hide();
                        document.dispatchEvent(cev);


                    });

                    $(".cancel").on('click', () => {
                        // Cookies.remove(cookie_value);
                        $('.cookies-container').hide();
                        removeCookies();
                    });


                    function removeCookies() {

                        let a = 'https://hipnosefacil.gpages.com.br';
                        let x = location.host
                        let host_split = x.split('.');
                        let sub_url = '';

                        if (host_split.length === 4) { //x.x.com.br
                            sub_url = host_split[1]

                        }

                        if (host_split.length === 3) { //x.com.br
                            sub_url = host_split[0]

                        }

                        let ifr = document.createElement('iframe');
                        ifr.setAttribute('src', `${a}/lgpd/limpa_cookies.php`);
                        ifr.style.width = '1px';
                        ifr.style.height = '1px';
                        ifr.style.rigth = '0';
                        ifr.style.bottom = '0';
                        ifr.style.position = 'absolute';

                        let ifr_gpages = document.createElement('iframe');
                        ifr_gpages.setAttribute('src', "https://.gpages.com.br/lgpd/limpa_cookies.php");
                        ifr_gpages.style.width = '1px';
                        ifr_gpages.style.height = '1px';
                        ifr.style.rigth = '0';
                        ifr.style.bottom = '0';
                        ifr.style.position = 'absolute';

                        let ifr_sub = document.createElement('iframe');
                        ifr_sub.setAttribute('src', `https://${sub_url}.gpages.com.br/lgpd/limpa_cookies.php`);
                        ifr_sub.style.width = '1px';
                        ifr_sub.style.height = '1px';
                        ifr.style.rigth = '0';
                        ifr.style.bottom = '0';
                        ifr.style.position = 'absolute';

                        document.body.append(ifr, ifr_gpages, ifr_sub);

                    }


                })(window);
            </script>

    </html>

    <script id="gd_load" data-lgpd="true" data-pid="260" data-ptk="MTY3NzUuOWQ5NDUwNDBhN2U4NmZkMThlNGJjZGIzODgwNTAwOTFjOWM0ZjM1YWIwYzhhMzQzNDAwZTU3ZWVhNTNlODhlOA==" data-ck="63d44032180fc" src="https://hipnosefacil.gpages.com.br/assets/gd_load.min.js" data-base_url="https://api.gdigital.com.br/" defer></script>




    <script id="gd_pixel">
        // let urlApi = 'https://api.gdigital.com.br'


        ((gd) => {
            let urlApi = 'https://api.gdigital.com.br'
            //let urlApi = 'https://api.innovaweb.com.br'

            gd.pixel = {
                base_url: urlApi,
                auth: 'MzQ5MS4yMDkwNi4yODcyZDRmODYzOWIwY2JmNGMxODYzN2VkN2QwOTFiYTVkOWYyZDIyMWYyODMzOWEwNWVhNmJhOGE2ZDQ0YzYw'
            };

            gd.pixel.uuidv4 = function() {
                return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                    var r = Math.random() * 16 | 0,
                        v = c == 'x' ? r : (r & 0x3 | 0x8);
                    return v.toString(16);
                });
            };

            gd.pixel.handleIframe = function(host, pixel_id, post_id, event, event_id, blog_id, option, data) {

                let src = `${host}/pixel-post/initial?event=${event}&event_id=${event_id}&pixel_id=${pixel_id}&post_id=${post_id}&blog_id=${blog_id}&data=${data}&opt=${option}`;
                if ($(`[id="${src}"]`)[0]) {
                    return false
                }


                var myHeaders = new Headers();
                myHeaders.append("Authorization", gd.pixel.auth);

                var requestOptions = {
                    method: 'GET',
                    headers: myHeaders,
                    redirect: 'follow'
                };

                console.log('aqui -->')
                fetch(src, requestOptions)
                    .then(res => {
                        return res.text();
                    })
                    .then(data => {

                        $('body').append(`<div id="${src}">${data}</div>`);

                    })

            };

            gd.pixel.getPixels = function(event, blog_id, post_id, event_id, option) {

                const params = new URLSearchParams(window.location.search)

                let urlPixel = `${gd.pixel.base_url}/pixel-post/pixels/?blog_id=${blog_id}&post_id=${post_id}&event=${event}&event_id=${event_id}&opt=${option}`;

                if (params.get('test_event')) {
                    urlPixel += `&test_event=true`;
                }

                var myHeaders = new Headers();
                myHeaders.append("Authorization", gd.pixel.auth);

                var requestOptions = {
                    method: 'GET',
                    headers: myHeaders,
                    redirect: 'follow'
                };

                return new Promise((resolve, reject) => {
                    fetch(urlPixel, requestOptions)
                        .then(res => res.json())
                        .then(data => {
                            resolve(data.pixels);
                        })
                        .catch((err) => {
                            console.error(err);
                            reject(err);
                        })
                });
            };

            gd.pixel.handleEvent = async (event, blog_id, post_id, option, data = null) => {
                console.log(option);
                let event_id = gd.pixel.uuidv4();
                let host = urlApi;
                console.log('WELCOME GD PIXEL ', event);
                let pixels = await gd.pixel.getPixels(event, blog_id, post_id, event_id, option);
                // console.log(pixels);
                if (pixels && pixels.length) {
                    pixels.forEach(async (pixel) => {
                        gd.pixel.handleIframe(host, pixel.pixel_id, pixel.resource_id, event, event_id, blog_id, option, data);
                    });
                }
            };

        })(window)

        let page = document.querySelector('meta[name=__gdpi]').content
        let blog = document.querySelector('meta[name=__gdbi]').content
        window.pixel.handleEvent('view', blog, page, 0);
    </script>



    <script id="handle">
        document.addEventListener("DOMContentLoaded", function(event) {
            const urlParams = new URLSearchParams(window.location.search);
            const idForm = urlParams.get('pxf');
            const leadEmail = urlParams.get('pxld');
            const options = urlParams.get('opt');
            let blog = document.querySelector('meta[name=__gdbi]').content
            if (idForm != '' && leadEmail) {
                if (options == 1) {
                    window.pixel.handleEvent('conversion', blog, idForm, 1, leadEmail)
                } else {
                    window.pixel.handleEvent('conversion', blog, idForm, 0, leadEmail)
                }
            }
        });
    </script>



</body>

</html>

</body>

</html>