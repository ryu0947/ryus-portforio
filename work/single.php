<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="作品・「Numbers Game」の概要・理由・こだわったところをまとめました。"
    />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/fontawsome.css" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/work.css" />
    <link rel="icon" href="img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="img/apple-touch-icon.png"
    />
    <title>作品詳細 | Numbers Game</title>
  </head>
  <body>
    <header id="js-header" class="header">
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item" lang="en">
            <a href="index.html#about">About</a>
          </li>
          <li class="nav__item" lang="en">
            <a href="index.html#skill">Skill</a>
          </li>
          <li class="nav__item" lang="en">
            <a href="index.html#work">Work</a>
          </li>
          <li class="nav__item" lang="en">
            <a href="index.html#blog">Blog</a>
          </li>
        </ul>
      </nav>
    </header>
    <section>
      <div class="container">
        <h2 class="section-title" lang="en">Numbers Game</h2>
        <video
          class="work-movie"
          src="movie/numbers-game.mp4"
          controls
          preload="auto"
          muted
        ></video>
        <div class="work-caption">
          <p class="work-language" lang="en">HTML/CSS/JavaScript</p>
          <div class="work-link">
            <a
              href="https://ryu0947.github.io/numbers-game/"
              target="_blank"
              rel="noopener noreferrer"
              >ゲームをプレイする<i class="fas fa-external-link-alt"></i
            ></a>
          </div>
        </div>
        <div class="work-contents">
          <h3 class="work-title">概要</h3>
          <p>
            ボタンに表示された数字を1から順番に押していきその速さを競う<strong
              >「Numbers Game」をHTML/CSS/JavaScript</strong
            >で作りました。
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
            操作の面では、<strong>数字が表示されるボタンに影をつけて「押せるボタン」</strong>に見えるようにして<strong
              >クリックしたボタンは影を消して灰色にして
              「使用済みのボタン」</strong
            >に見えるように工夫しました。
            機能の面では、後に機能の拡張がしやすいように<strong>数字が表示されるボタンを動的に出力するのとクラス構文</strong>を使いました。
            最初こそHTMLで物理的にタグを増やして処理も全て関数で行いましたが、コードの見通しが悪く更新がしづらいと感じたので
            <strong
              >クラス構文に書き換えて処理の内容を「数字が表示されるボタンを管理するクラス」「ボタンの状態を管理するクラス」
              「ゲーム全体の処理を管理するクラス」</strong
            >の3つに分けました。引き続きコードのリファクタリングを進めていくとともに
            今後はゲームの結果をSNSに共有できる機能の実装を予定しております。
          </p>
        </div>
        <div class="work-link">
          <a
            href="https://github.com/ryu0947/numbers-game"
            target="_blank"
            rel="noopener noreferrer"
            >GitHubのコードを見る<img src="img/new-window.png" alt="" /><i
              class="fas fa-external-link-alt"
            ></i
          ></a>
        </div>
        <div class="work-link">
          <a
            class="work-link"
            href="https://ryu0947.github.io/numbers-game/"
            target="_blank"
            rel="noopener noreferrer"
            >ゲームをプレイする<i
              class="fas fa-external-link-alt"
            ></i
          ></a>
        </div>
        <a class="btn red" href="index.html">前のページへ戻る</a>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__links">
        <a
          href="https://twitter.com/ryu0947"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i class="fab fa-2x fa-twitter"></i>
        </a>
        <a
          href="https://github.com/ryu0947"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i class="fab fa-2x fa-github"></i>
        </a>
      </div>
      <small class="small">&copy;Ryu's Portfolio</small>
    </footer>
  </body>
</html>
