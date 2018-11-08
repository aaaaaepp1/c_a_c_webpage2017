<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ダイアリー | C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
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
        
        <div class="eachDiaryContents--back">
            
            <!-- ダイアリーメニュー -->
            <div class="diaryContents__menuBar--base">
                <div class="diaryContents__menuBar--frame">
                    <a href="" class="diaryContents__menuBar--cell">
                        トップ
                    </a>
                    <a href="" class="diaryContents__menuBar--cell">
                        行事
                    </a>
                    <a href="" class="diaryContents__menuBar--cell">
                        活動日誌
                    </a>
                    <a href="" class="diaryContents__menuBar--cell">
                        プロジェクト
                    </a>
                    <a href="" class="diaryContents__menuBar--cell">
                        部員向け情報
                    </a>
                </div>
            </div>
            
            <div class="eachDiaryContents--frame">
                
                <div class="eachDiaryContents--sentence">
                    <h2 class="diary">最新記事一覧</h2>
                    <div class="diaryContents__cell--frame">
                        <!-- メイン画像を指定 -->
                        <a href=""><img class="diaryContents__cell--img" src="../img/diary/20160824_2016年夏ボックス掃除/DSC_0255.jpg" alt=""/></a>
                        
                        <!-- カテゴリを指定（複数可） -->
                        <div class="diaryContents__cell--categoryFrame">
                            <a class="diaryContents__cell_categoryCell">活動日誌</a>
                        </div>
                        
                        <!-- タイトルを指定 -->
                        <a href=""><h1 class="cellTitle">2016年度夏BOX掃除！</h1></a>
                        
                        <!-- タグを指定（複数可） -->
                        <a href="" class="diaryContents__cell--tag">2016年</a>
                        <a href="" class="diaryContents__cell--tag">BOX</a>
                        <a href="" class="diaryContents__cell--tag">BOX掃除</a>
                        
                        <!-- 文章の一部 -->
                        <p class="diary">2016年8月24日、ボックス掃除が行われました。 今回の醍醐味は ・カーペット変える ・網戸実装 ・新ディスプレイ です！ 例年では２時間ほどで終わる作業でしたが全てのものを一旦外に出して行ったので倍以上の時間がかかり...</p>
                        
                    </div>
                    
                    
                    <div class="diaryContents__cell--frame">
                        <!-- メイン画像を指定 -->
                        <a href=""><img class="diaryContents__cell--img" src="../img/diary/20161103_2016年サタデージャンボリー/S__3399825.jpg" alt=""/></a>
                        
                        <!-- カテゴリを指定（複数可） -->
                        <div class="diaryContents__cell--categoryFrame">
                            <a class="diaryContents__cell_categoryCell">行事</a>
                        </div>
                        
                        <!-- タイトルを指定 -->
                        <a href=""><h1 class="cellTitle">サタデージャンボリー2016レポート</h1></a>
                        
                        <!-- タグを指定（複数可） -->
                        <a href="" class="diaryContents__cell--tag">2016年</a>
                        <a href="" class="diaryContents__cell--tag">サタデージャンボリー</a>
                        <a href="" class="diaryContents__cell--tag">ゲーム</a>
                        
                        <!-- 文章の一部 -->
                        <p class="diary">C.A.C.一回生、牛尾です。 遅れましたが10/15に開催されたサタデージャンボリーの様子をレポートさせていただきます！   僕たちC.A.C.ではこのようにコンピュータゲームの体験とkinectを使ったイン...</p>
                        
                    </div>
                    
                    
                    <div class="diaryContents__cell--frame">
                        <!-- メイン画像を指定 -->
                        <a href=""><img class="diaryContents__cell--img" src="../img/diary/20170724_EscapeVRの進捗報告/main.png" alt=""/></a>
                        <!-- カテゴリを指定（複数可） -->
                        <div class="diaryContents__cell--categoryFrame">
                            <a class="diaryContents__cell_categoryCell">プロジェクト</a>
                        </div>
                        
                        <!-- タイトルを指定 -->
                        <a href=""><h1 class="cellTitle">EscapeVR班の活動報告！</h1></a>
                        
                        <!-- タグを指定（複数可） -->
                        <a href="" class="diaryContents__cell--tag">2016年</a>
                        <a href="" class="diaryContents__cell--tag">ゲーム</a>
                        <a href="" class="diaryContents__cell--tag">EscapeVR</a>
                        <a href="" class="diaryContents__cell--tag">VirtualReality</a>
                        <a href="" class="diaryContents__cell--tag">Unity</a>
                        <a href="" class="diaryContents__cell--tag">C#</a>
                        <a href="" class="diaryContents__cell--tag">チーム開発</a>
                        <a href="" class="diaryContents__cell--tag">Cinema4D</a>
                        <a href="" class="diaryContents__cell--tag">Blender</a>
                        
                        <!-- 文章の一部 -->
                        <p class="diary">こんにちは、escapeVR班です！暑い日が続きますがみなさんいかがお過ごしでしょうか。さて、このC.A.C web siteでは定期的にプロジェクトの紹介をしていくということで、...</p>
                        
                    </div>
                    
                    
                    <div class="diaryContents__cell--frame">
                        <!-- メイン画像を指定 -->
                        <a href=""><img class="diaryContents__cell--img" src="../img/diary/20161103_2016年夏合宿/S__18563097.jpg" alt=""/></a>
                        <!-- カテゴリを指定（複数可） -->
                        <div class="diaryContents__cell--categoryFrame">
                            <a class="diaryContents__cell_categoryCell">行事</a>
                        </div>
                        
                        <!-- タイトルを指定 -->
                        <a href=""><h1 class="cellTitle">2016年　夏合宿in三重</h1></a>
                        
                        <!-- タグを指定（複数可） -->
                        <a href="" class="diaryContents__cell--tag">2016年</a>
                        <a href="" class="diaryContents__cell--tag">夏合宿</a>
                        <a href="" class="diaryContents__cell--tag">合宿</a>
                        <a href="" class="diaryContents__cell--tag">三重</a>
                        <a href="" class="diaryContents__cell--tag">夏</a>
                        
                        <!-- 文章の一部 -->
                        <p class="diary">9月1日～9月3日にかけて三重県に行ってきました！ 今までは民宿でしたが今回は念願（自分にとっては）のちゃんとした？ホテルに泊まりました！ （こちらは道の駅で撮った写真です）   一日目はみんなで会議をしました...</p>
                        
                    </div>
                    
                    
                    <div class="diaryContents__cell--frame">
                        diaryContents__cell--frame
                    </div>
                    
                    
                    <div class="diaryContents__cell--frame">
                        diaryContents__cell--frame
                    </div>
                </div>
                
                <div class="eachDiaryContents--subMenu">
                    <h2 class="diary">最近の投稿</h2>
                    <div class="subMenu__cell--frame">
                        sub menu here<hr>
                        a
                    </div>
                    
                    <h2 class="diary">アクセスランキング</h2>
                    <div class="subMenu__cell--frame">
                        sub menu here<hr>
                        a
                    </div>
                </div>
            </div>
        
        </div>
        
        <!-- end main contents -->
        
        <?php get_footer(); ?>
        
        <?php wp_footer(); ?><!--システム・プラグイン用-->
        
    </body>
</html>
