<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<<<<<<< HEAD
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
=======
        <title>C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

>>>>>>> 09d663e930703fcd01502688f9d12b7092242a09
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
        <header>

            <!-- start header -->

           <div class="header">
                <span>
                    <div class="header__cacDiscription">京都産業大学　文化団体連盟　電子計算機応用部</div>
                    <div class="header__cacLogo"></div>
                </span>
                <nav class="navbar navbar-light bg-white navbar-expand-md" style="padding: 0px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
<<<<<<< HEAD
                    <?php wp_nav_menu( array(
                          'theme_location' => 'header-nav',
                          'menu' => 'ul',
                          'menu_class' => 'collapse navbar-collapse justify-content-center',
                          'menu_id' => 'menu',
                          'container' => 'li',
                          'container_class' => 'header__Link',
                          'container_id' => '',
                          'fallback_cb' => ''
                    ) ); ?>
=======
                    <ul id="menu" class="collapse navbar-collapse justify-content-center">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__Link">ホーム</a></li>
                        <li><a href="<?php echo esc_url( home_url( 'index.php/about/' ) ); ?>" class="header__Link">弊団体について</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__Link">プロジェクト</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__Link">告知</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__Link">ダイアリー</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__Link">メディア</a></li>
                    </ul>
>>>>>>> 09d663e930703fcd01502688f9d12b7092242a09
                </nav>
            </div>

            <!-- end header -->
            
        </header>
