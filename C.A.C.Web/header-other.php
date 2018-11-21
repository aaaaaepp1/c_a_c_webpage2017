<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- import fonts -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

        <!-- import bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <?php wp_head(); ?><!--システム・プラグイン用-->
        
    </head>
    <body <?php body_class(); ?>>
        <!-- start header -->
        <header>
            <div class="miniHeader">
                <div class="miniHeader__cacLogo" style="cursor: pointer;" onclick="location.href ="<?php echo esc_url( home_url( '/' ) ); ?>" ></div>
                <div style="text-align: right; margin-right: 30px >
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-nav',
                        'menu' => '',
                        'menu_class' => '',
                        'menu_id' => 'menu',
                        'container' => '',
                        'container_class' => 'miniHeader__Link',
                        'container_id' => '',
                        'fallback_cb' => ''
                    ) ); ?>
                </div>
            </div>
        </header>