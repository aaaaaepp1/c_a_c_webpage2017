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

                <?php query_posts('posts_per_page=7&category_name=media'); ?>

                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div <?php post_class( 'mediaContents__cell--base' ); ?>>   
                    <!--画像を追加-->
                    <?php if( has_post_thumbnail() ): ?>
                    <div class="mediaContents__cell--img">
                        <?php the_post_thumbnail(array( 260, 200 ) ); ?>
                    </div>
                    <?php else: ?>
                    <div class="mediaContents__cell--img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/media/NoImage.jpg');"></div>
                    <?php endif; ?>
                    <div>
                        <!--タイトル-->
                        <div class="mediaContents__cell--title"><?php the_title(); ?></div>
                        <!--抜粋--><!--投稿日を表示-->
                        <div class="mediaContents__cell--discription">
                            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <div class="mediaContents__noCongtentsMessage__background">
                    <div class="mediaContents__noCongtentsMessage--frame">
                        現在は掲載中のメディアは御座いません。
                    </div>
                </div>
                <?php endif; ?>

                <!--ループ終了-->

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
