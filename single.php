<?php get_header(); ?>
<section>
  <div class="container">
    <h2 class="section-title" lang="en"><?php echo the_title(); ?></h2>
    <video class="work-movie" src="<?php the_field('work_movie'); ?>" controls preload="auto" muted></video>
    <div class="work-caption">
      <p class="work-language" lang="en"><?php the_field('work_lang'); ?></p>
      <?php if (get_field('page_url')) : ?>
        <div class="work-link">
          <a href="<?php esc_url(the_field('page_url')); ?>" target="_blank" rel="noopener noreferrer">作品サイトを見る<i class="fas fa-external-link-alt"></i></a>
        </div>
      <?php endif; ?>
    </div>
    <div class="work-contents">
      <h3 class="work-title">概要</h3>
      <p>
        ボタンに表示された数字を1から順番に押していきその速さを競う<strong>「Numbers Game」をHTML/CSS/JavaScript</strong>で作りました。
        実装した機能は、難易度の選択/難易度に応じて表示されるパネルの増減と画面デザインの変更/タイマー機能/クリアタイムに応じた
        レビュー機能の4つです。PCはもちろんスマホでもプレイ可能です。実際にプレイした感想やクリアタイムをいただけるととても嬉しいです。
      </p>
    </div>
    <div class="work-contents">
      <h3 class="work-title">制作した理由</h3>
      <p>
        ある程度の期間JavaScriptの学習をして何か作品を作ろうと思った時、真っ先に思い浮かんだのが<strong>「ゲームを作りたい」</strong>でした。
        「スマホとPCの両方で遊べるゲームって何だ？」と色々探していたらたまたまバナー広告でNumbersGameが表示されていて実際にプレイしてみると、ルールはシンプルながらもより早いタイムを出すために何度もプレイ出来る楽しさを感じたので
        Numbers Gameを作りました。
      </p>
    </div>
    <div class="work-contents">
      <h3 class="work-title">こだわったところ</h3>
      <p>
        こだわったところは<strong>操作のしやすさと機能拡張のしやすさ</strong>の2点です。
        操作の面では、<strong>数字が表示されるボタンに影をつけて「押せるボタン」</strong>に見えるようにして<strong>クリックしたボタンは影を消して灰色にして
          「使用済みのボタン」</strong>に見えるように工夫しました。
        機能の面では、後に機能の拡張がしやすいように<strong>数字が表示されるボタンを動的に出力するのとクラス構文</strong>を使いました。
        最初こそHTMLで物理的にタグを増やして処理も全て関数で行いましたが、コードの見通しが悪く更新がしづらいと感じたので
        <strong>クラス構文に書き換えて処理の内容を「数字が表示されるボタンを管理するクラス」「ボタンの状態を管理するクラス」
          「ゲーム全体の処理を管理するクラス」</strong>の3つに分けました。引き続きコードのリファクタリングを進めていくとともに
        今後はゲームの結果をSNSに共有できる機能の実装を予定しております。
      </p>
    </div>
    <?php if (get_field('page_url')) : ?>
      <div class="work-link">
        <a href="<?php esc_url(the_field('page_url')); ?>" target="_blank" rel="noopener noreferrer">作品サイトを見る<i class="fas fa-external-link-alt"></i></a>
      </div>
    <?php endif; ?>
    <?php if (get_field('github_url')) : ?>
      <div class="work-link">
        <a href="<?php esc_url(the_field('github_url')); ?>" target="_blank" rel="noopener noreferrer">GitHubのコードを見る<i class="fas fa-external-link-alt"></i></a>
      </div>
    <?php endif; ?>
    <a class="btn red" href="<?php echo esc_url(home_url()); ?>">前のページへ戻る</a>
  </div>
</section>
<?php get_footer(); ?>