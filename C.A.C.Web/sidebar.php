<div class="eachDiaryContents--subMenu">
    <h2 class="diary">最近の投稿</h2>
    <?php query_posts('posts_per_page=6&category_name=diary'); ?>
    
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="subMenu__cell--frame">
        <a href="" class="subMenu__cell--contentsFrame">
            <!-- メイン画像を指定 -->     
            <?php if( has_post_thumbnail() ): ?>
                <?php
                the_post_thumbnail(
                    [
                        110, 80
                    ],
                    [
                        'class' => "subMenu__cell--img"
                    ]
                );
                ?>
            <?php else: ?>
                <img class="subMenu__cell--img" src="<?php echo get_template_directory_uri(); ?>/img/diary/NoImage_mini.jpg"/>
            <?php endif; ?>
            <div class="subMenu__cell--titleFrame">
                <h3 class="subMenu__cell--title"><?php the_title(); ?></h3>
            </div>
        </a>
        <div class="subMenu__cell--categoryCell">
            <?php if (!is_category()): ?>
                <?php if( has_category() ): ?>
                    <a class="diaryContents__cell_categoryCell">
                        <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <div class="diaryContents__noCongtentsMessage__background">
        <div class="diaryContents__noCongtentsMessage--frame">
            現在は掲載中のダイアリーは御座いません。
        </div>
    </div>
    <?php endif; ?>
    
    <h2 class="diary">アクセスランキング（仮）</h2>
    
    <?php
        // views post metaで記事のPV情報を取得する
        setPostViews(get_the_ID());

        // ループ開始
        query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC'); while(have_posts()) : the_post();
    ?>
    <div class="subMenu__cell--frame">
        <a href="" class="subMenu__cell--contentsFrame">
            <!-- メイン画像を指定 -->     
            <?php if( has_post_thumbnail() ): ?>
                <?php
                the_post_thumbnail(
                    [
                        110, 80
                    ],
                    [
                        'class' => "subMenu__cell--img"
                    ]
                );
                ?>
            <?php else: ?>
                <img class="subMenu__cell--img" src="<?php echo get_template_directory_uri(); ?>/img/diary/NoImage_mini.jpg"/>
            <?php endif; ?>
            <div class="subMenu__cell--titleFrame">
                <h3 class="subMenu__cell--title"><?php the_title(); ?></h3>
            </div>
        </a>
    </div>
    <?php endwhile; ?>
    
    <h2 class="diary">タグ一覧（仮）</h2>
    <div class="subMenu__cell--frame">
        <?php
        // パラメータを指定
        $args=array(
            // タグ名順で指定
            'orderby' => 'name',
            // 昇順で指定
            'order' => 'ASC'
        );
        $posttags = get_tags( $args );

        if ( $posttags ){
            echo ' <ul class="tag-list"> ';
            foreach( $posttags as $tag ) {
                echo '<li><a href="'. get_tag_link( $tag->term_id ) .'">' . $tag->name . '</a></li>';
            }
            echo ' </ul> ';
        }
        ?>
    </div>
    
    
</div>