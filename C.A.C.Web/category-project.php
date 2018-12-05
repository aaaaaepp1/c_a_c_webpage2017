<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>プロジェクト | C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- links for css-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        
        <!-- links for JavaScript-->
        <script src="../javascript/main.js" type="text/javascript"></script>
        <script src="../javascript/project.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="../javascript/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="../javascript/jqueryColorPlugin.js" type="text/javascript"></script>

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
        
        <div class="projectBackgroundImage"></div>
        <div class="subPageHeader" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="subPageTitle" style="color: #545454;">
                プロジェクト
            </div>
            <div class="subPageSentence" style="color: #545454;">
                弊団体の中心の活動である、プロジェクトについて紹介します。
            </div>
        </div>
        
        <!-- end header, start main contents -->
        <div class="projectContents__background">
            <div class="projectContents__background--frame">
                
                <?php query_posts('posts_per_page=12&category_name=project'); ?>
                
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    
                <a href="" <?php post_class( "projectContents__cell--base" ); ?>onmouseover="hoverProjectContents(true, this);" onmouseout="hoverProjectContents(false, this);">
                    <!--画像を追加-->
                    <?php if( has_post_thumbnail() ): ?>
                        <div class="projectContents__cell--imgBlur" style="background-image: url(<?php the_post_thumbnail_url(array( 495, 380 ) ); ?>);">
                            <div class="projectContents__cell--readMoreButton">ReadMore</div>
                            <div class="projectContents__cell--img" style="background-image: url(<?php the_post_thumbnail_url(array( 495, 380 ) ); ?>);"></div>
                        </div>
                    <?php else: ?>
                        <div class="projectContents__cell--imgBlur" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/project/NoImage.jpg');">
                            <div class="projectContents__cell--readMoreButton">ReadMore</div>
                            <div class="projectContents__cell--img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/project/NoImage.jpg');"></div>
                        </div>
                    <?php endif; ?>
                    <!--タイトル-->
                    <div class="projectContents__cell--title" style="text-decoration:none;">
                        <?php the_title(); ?>
                    </div>
                    <!--投稿日を表示-->
                    <div class="projectContents__cell--discription"　style="text-decoration:none;">
                        <time datetime="<?php echo get_the_date( 'Y' ); ?>">
                            <?php echo get_the_date( 'Y'); ?>
                        </time>
                        <nobr>/</nobr>
                        <?php if(has_tag()==true) : ?>
                            <?php
                            foreach((get_the_tags()) as $tag) {
                            echo $tag->name . ' ';
                            }
                            ?>
                        <?php else : ?>
                            <nobr>--</nobr>
                        <?php endif; ?>
                    </div>
                </a>
                
                <?php endwhile; ?>
                <?php else : ?>
                  <div class="projectContents__noCongtentsMessage__background">
                      <div class="projectContents__noCongtentsMessage--frame">
                          現在は掲載中のプロジェクトは御座いません。
                      </div>
                  </div>
                <?php endif; ?>
                
                <div class="projectContents__pageMenu--frame">
                    <div class="projectContents__pageMenu--back">
                        <a class="projectContents__pageMenu--cellRecNotButton">1/20</a>
                        <a class="projectContents__pageMenu--cellRec" style="background-color: #dddddd">&lt;&lt;Past</a>
                        <a class="projectContents__pageMenu--cellSquare" style="background-color: #dddddd">1</a>
                        <a href="" class="projectContents__pageMenu--cellSquare">2</a>
                        <a href="" class="projectContents__pageMenu--cellSquare">3</a>
                        <a href="" class="projectContents__pageMenu--cellSquare">4</a>
                        <a href="" class="projectContents__pageMenu--cellSquare">5</a>
                        <a href="" class="projectContents__pageMenu--cellSquare">6</a>
                        <a href="" class="projectContents__pageMenu--cellSquare">..</a>
                        <a href="" class="projectContents__pageMenu--cellRec">Next&gt;&gt;</a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end main contents -->
        <?php get_footer(); ?>
        <?php wp_footer(); ?><!--システム・プラグイン用-->
        
    </body>
</html>
