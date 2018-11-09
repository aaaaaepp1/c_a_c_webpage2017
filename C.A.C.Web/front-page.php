<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- links for css-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        
        <!-- links for javascript -->
        <script src="js/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jqueryColorPlugin.js" type="text/javascript"></script>

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
        
        <?php get_header("top"); ?>
        
        <!-- start main contents -->

        <div class="mainTitle">
            <div class="mainTitle__titleEnglish">Beyond your Creation</div>
            <div class="mainTitle__titleJapanese">「作るだけ」で、終わらせない</div>
        </div>

        <div class="mainMenu">
            <div class="mainMenu__aboutLink" onclick="document.location.href = '<?php echo esc_url( home_url( 'index.php/about/' ) ); ?>'" onmouseout="hoverMainMenu('about', false);" onmouseover="hoverMainMenu('about', true);">
                <div class="mainMenu__imageLeft" id="mainMenu__aboutLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/top/mainMenu_about.png');">
                    <div class="mainMenu__squareLeft" style="background-color: #bedf69;"></div>
                </div>
                <div class="mainMenu__discriptionRight" style="background-color: #bedf69;">
                    <div class="mainMenu__discriptionLogo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/top/mainMenu_logo_弊団体について.png');"></div>
                    <div class="mainMenu__discriptionTitle">弊団体について</div>
                    <div class="mainMenu__discriptionSentence">弊団体についての説明をご覧いただけます</div>
                    <div class="mainMenu__discriptionMoreButton" id="mainMenu__aboutLinkMoreButton">more</div>
                </div>
            </div>

            <div class="mainMenu__projectLink" onclick="document.location.href = '<?php echo esc_url( home_url( 'index.php/category/project/' ) ); ?>'" onmouseout="hoverMainMenu('project', false);" onmouseover="hoverMainMenu('project', true);">
                <div class="mainMenu__imageRight" id="mainMenu__projectLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/top/mainMenu_project.png');"></div>
                <div class="mainMenu__discriptionLeft" style="background-color: #69abdf;">
                    <div class="mainMenu__discriptionLogo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/top/mainMenu_logo_プロジェクト.png');"></div>
                    <div class="mainMenu__discriptionTitle">プロジェクト</div>
                    <div class="mainMenu__discriptionSentence">弊団体の活動について紹介しています</div>
                    <div class="mainMenu__discriptionMoreButton" id="mainMenu__projectLinkMoreButton">more</div>
                    <div class="mainMenu__squareRight" style="background-color: #69abdf;"></div>
                </div>
            </div>

            <div class="mainMenu__diaryLink" onclick="document.location.href = '<?php echo esc_url( home_url( 'index.php/category/diary/' ) ); ?>'" onmouseout="hoverMainMenu('diary', false);" onmouseover="hoverMainMenu('diary', true);">
                <div class="mainMenu__imageLeft" id="mainMenu__diaryLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/top/mainMenu_diary.png');">
                    <div class="mainMenu__squareLeft" style="background-color: #d069df;"></div>
                </div>
                <div class="mainMenu__discriptionRight" style="background-color: #d069df;">
                    <div class="mainMenu__discriptionLogo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/top/mainMenu_logo_ダイアリー.png');"></div>
                    <div class="mainMenu__discriptionTitle">ダイアリー</div>
                    <div class="mainMenu__discriptionSentence">弊団体の普段の様子などを日記形式でご覧いただけます</div>
                    <div class="mainMenu__discriptionMoreButton" id="mainMenu__diaryLinkMoreButton">more</div>
                </div>
            </div>
        </div>

        <div class="mainDiary">
            <div class="mainDiary__separater"></div>
            <div class="mainDiary__diary">
                <div class="mainDiary__title">Diary</div>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">a</div>
                    <div class="mainDiary__diary--title">タイトル</div>
                    <div class="mainDiary__diary--sentence">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div class="mainDiary__diary--separator"></div>
                </div>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">a</div>
                    <div class="mainDiary__diary--title">タイトル</div>
                    <div class="mainDiary__diary--sentence">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div class="mainDiary__diary--separator"></div>
                </div>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">a</div>
                    <div class="mainDiary__diary--title">タイトル</div>
                    <div class="mainDiary__diary--sentence">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                </div>

                <a class="mainDiary__moreButton" href="html/diary.html">more</a>
            </div>
            <div class="mainDiary__twitter">
                <div class="mainDiary__title">Twitter</div>
                <div class="mainDiary__twitter--contents">
                    <a class="twitter-timeline" data-height="470" href="https://twitter.com/c_a_c_official?ref_src=twsrc%5Etfw">Tweets by c_a_c_official</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <a class="mainDiary__moreButton" href="https://twitter.com/c_a_c_official" target="blank">more</a>
            </div>
        </div>

        <!-- end main contents -->
        
        <?php get_footer(); ?>
        
        <?php wp_footer(); ?><!--システム・プラグイン用-->
        
    </body>
</html>
