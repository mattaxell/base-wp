<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('&bull;', true, right); ?><?php bloginfo('name'); ?></title>
        <!-- Icons -->
        <link rel="icon" href="<?php print THEME; ?>/favicon.ico" />
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php print THEME; ?>/public/styles/main.css" />
        <!-- Fonts -->
        <!-- INSERT FONT CODE HERE -->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->

        <?php wp_head(); ?>

    </head>

    <body>