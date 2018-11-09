<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>メディア | C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
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
        
        <div class="mediaBackgroundImage"></div>
        <div class="subPageHeader" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="subPageTitle" style="color: #545454;">
                メディア
            </div>
            <div class="subPageSentence" style="color: #545454;">
                弊団体が出場したコンテストや、取り上げられた媒体についての紹介を行います。
            </div>
        </div>
        
        <!-- end header, start main contents -->
        
        <div class="mediaContents__background">
            <div class="mediaContents__cell--frame">
                
                <div class="mediaContents__cell--base">
                    <div class="mediaContents__cell--img" style="background-image: url('../img/media/mediaImage_2017_ISCA.png');"></div>
                    <div class="mediaContents__cell--title">EscapeVRが InternationalStudentsCreativeAward2016 で入賞</div>
                    <div class="mediaContents__cell--discription">弊団体のプロジェクトであるVR脱出ゲーム「EscapeVR」が、InternationalStudentsCreativeAward 2016で入賞を果たしました。</div>
                    <div class="mediaContents__cell--linkBase">
                        <a href="" class="mediaContents__cell--link">ISCA2016</a>
                        <a href="" class="mediaContents__cell--link">ダイアリー</a>
                    </div>
                </div>

                
                <div class="mediaContents__cell--base">
                    media
                </div>

                <div class="mediaContents__cell--base">
                    media
                </div>

                <div class="mediaContents__cell--base">
                    media
                </div>

                <div class="mediaContents__cell--base">
                    media
                </div>

                <div class="mediaContents__cell--base">
                    media
                </div>

                <div class="mediaContents__cell--base">
                    media
                </div>
                
                
                <div class="mediaContents__pageMenu--frame">
                    <div class="mediaContents__pageMenu--back">
                        <a class="mediaContents__pageMenu--cellRecNotButton">1/20</a>
                        <a class="mediaContents__pageMenu--cellRec" style="background-color: #dddddd">&lt;&lt;Past</a>
                        <a class="mediaContents__pageMenu--cellSquare" style="background-color: #dddddd">1</a>
                        <a href="" class="mediaContents__pageMenu--cellSquare">2</a>
                        <a href="" class="mediaContents__pageMenu--cellSquare">3</a>
                        <a href="" class="mediaContents__pageMenu--cellSquare">4</a>
                        <a href="" class="mediaContents__pageMenu--cellSquare">5</a>
                        <a href="" class="mediaContents__pageMenu--cellSquare">6</a>
                        <a href="" class="mediaContents__pageMenu--cellSquare">..</a>
                        <a href="" class="mediaContents__pageMenu--cellRec">Next&gt;&gt;</a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- end main contents -->
        
        <?php get_footer(); ?>
        
        <?php wp_footer(); ?><!--システム・プラグイン用-->
        
    </body>
</html>
