<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ダイアリー_プロジェクト | C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- links for css-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

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
    <body>
        
        <?php get_header("other"); ?>
        
        <!-- ダイアリーのトップ画像 -->
        <div class="diaryBackgroundImage"></div>
        
        <!-- ダイアリーの説明 -->
        <div class="subPageHeader" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="subPageTitle" style="color: #545454;">
                ダイアリー
            </div>
            <div class="subPageSentence" style="color: #545454;">
                弊団体の部員の普段の活動をブログ形式で紹介します。
            </div>
        </div>
        
        <!-- end header, start main contents -->
        
        <div class="eachDiaryContents--back">
            
            <!-- ダイアリーメニュー -->
            <div class="diaryContents__menuBar--base">
                <?php 
                wp_nav_menu(
                    [
                        'theme_location' => 'diary-nav',
                        'menu' => '',
                        'menu_class' => 'diaryContents__menuBar--frame',
                        'menu_id' => 'menu',
                        'container' => '',
                        'container_class' => 'diaryContents__menuBar--cell',
                        'container_id' => '',
                        'fallback_cb' => ''
                    ]
                ); 
                ?>
            </div>
            
            <div class="eachDiaryContents--frame">
                
                <!--  ここからダイアリータイトル  -->
                <a class="eachDiaryContents--month">8</a>
                <a class="eachDiaryContents--dateAndYear">/10/2017</a>
                <h1 class="eachDiary">EscapeVR班の活動報告！</h1>
                <!-- カテゴリー -->
                <a class="diaryContents__cell_categoryCellTitle">活動日誌</a>
                
                <!-- タグを指定（複数可） -->
                <a href="" class="diaryContents__cell--tag">2016年</a>s
                
                
                <?php get_sidebar(); ?>
                
            </div>
            
        </div>   
        <!-- end main contents -->
        <?php get_footer(); ?>
        <?php wp_footer(); ?><!--システム・プラグイン用-->
        
    </body>
</html>