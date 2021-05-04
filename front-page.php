<?php get_header(); ?>
    <main id="js-main">
      <section id="about" class="about">
        <div class="container">
          <h2 class="section-title about__title" lang="en">About</h2>
          <div class="profile">
            <img
              src="img/profile.png"
              width="420"
              height="420"
              alt="小川竜司の写真"
              class="profile__img"
            />
            <dl class="profile__list">
              <dt class="profile__item">名前</dt>
              <dd class="profile__item">小川竜司</dd>
              <dt class="profile__item">出身</dt>
              <dd class="profile__item">愛知県</dd>
              <dt class="profile__item">生年月日</dt>
              <dd class="profile__item"><time>1997.4.7</time></dd>
              <dt class="profile__item">趣味</dt>
              <dd class="profile__item">野球観戦/読書/筋トレ</dd>
              <dt class="profile__item">経歴</dt>
              <dd class="profile__item">
                航空機部品の製造 → EC会社のWebデザイナー
              </dd>
              <dt class="profile__item">今後の目標</dt>
              <dd class="profile__item">
                Web制作とWeb開発の両方を極めること。<br />Webサイトに<em>付加価値</em>を与えられるようになること。
              </dd>
              <dt class="profile__item">ブログ</dt>
              <dd class="profile__item">
                学習用ブログ<a
                  href="https://ryu-webstudy.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="blog-link"
                  >「リュウブログ」</a
                >を運営
              </dd>
              <dt class="profile__item" lang="en">Links</dt>
              <dd class="profile__item">
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
              </dd>
            </dl>
          </div>
        </div>
      </section>
      <section id="skill" class="skill">
        <div class="container">
          <h2 class="section-title skill__title" lang="en">Skill</h2>
          <p class="intro">
            これまでに学習した言語・ツールです。<br />
            より深い理解を目指して日々学習を続けております。
          </p>
          <ul class="skill__list">
            <li class="skill__item"><i class="fab fa-7x fa-html5"></i></li>
            <li class="skill__item"><i class="fab fa-7x fa-css3"></i></li>
            <li class="skill__item">
              <img
                src="https://img.icons8.com/color/144/000000/javascript.png"
                width="144"
                height="144"
                alt="JavaScript"
              />
            </li>
            <li class="skill__item">
              <img
                src="https://img.icons8.com/ios-filled/150/000000/jquery.png"
                width="150"
                height="150"
                alt="jQuery"
              />
            </li>
            <li class="skill__item"><i class="fab fa-7x fa-sass"></i></li>
            <li class="skill__item">
              <i class="fab fa-7x fa-wordpress"></i>
            </li>
            <li class="skill__item"><i class="fab fa-7x fa-git-square"></i></li>
            <li class="skill__item">
              <i class="fab fa-7x fa-github"></i>
            </li>
          </ul>
        </div>
      </section>
      <section id="work" class="work">
        <div class="container">
          <h2 class="section-title work__title" lang="en">Work</h2>
          <p class="intro">
            これまでに制作した作品です。<br />
            画像をクリックすると作品の詳細をご覧いただけます。
          </p>
          <ul class="work__list">
            <li class="work__item">
              <div class="work__img">
                <img
                  src="img/numbers-game.png"
                  width="426"
                  height="224"
                  alt="ボタンに表示された数字を1から順番に押していきその速さを競う「Numbers Game」です。"
                />
              </div>
              <p class="work__name" lang="en">Numbers Game</p>
            </li>
            <li class="work__item">
              <img
                src="img/thread.png"
                width="426"
                height="224"
                alt="架空の企業・株式会社 threadのコーポレートサイトです。"
              />
              <p class="work__name">架空の企業のコーポレートサイト</p>
            </li>
            <li class="work__item">
              <img
                src="img/js-work.png"
                width="426"
                height="224"
                alt="Webサイトによくある機能・ドロワーメニュー・スムーススクロール・スライダー・タブメニュー・モーダル・アコーディオンメニュー・TOPへ戻るボタン・ローディングアニメーションをjQueryではなくJavaScriptで作りました。"
              />
              <p class="work__name">JavaScript作品集</p>
            </li>
            <li class="work__item">
              <img
                src="img/timer.png"
                width="426"
                height="224"
                alt="25分間の作業と5分間の休憩を1セットとして繰り返し行うポモドーロテクニックを測ることが出来るタイマーです。"
              />
              <p class="work__name">ポモドーロタイマー</p>
            </li>
            <li class="work__item">
              <img
                src="img/tweet.png"
                width="426"
                height="224"
                alt="毎日行っている学習の内容を書いたツイートをTwitterのモーメント機能を使ってまとめました。"
              />
              <p class="work__name">積み上げツイートまとめ</p>
            </li>
            <li class="work__item">
              <img
                src="img/portfolio.png"
                width="426"
                height="224"
                alt="小川竜司のポートフォリオサイトです。"
              />
              <p class="work__name">ポートフォリオサイト</p>
            </li>
          </ul>
        </div>
      </section>
      <section id="blog" class="blog">
        <div class="container">
          <h2 class="section-title blog__title" lang="en">Blog</h2>
          <img
            class="blog__img"
            src="img/blog.png"
            width="900"
            height="600"
            alt="ブログのスクリーンショット"
          />
          <p class="blog__description">
            日々の学習で<strong>エラーが出て解決したことや知識のアウトプット</strong>を目的としてブログを書いています。
            記事を書く時はエディタを使ってコードを書いて載せたり、CodePenを使ってコードとデモを載せたり
            解説する時に図解をしたりと、自分の学習のためだけではなく<strong>記事を読むユーザーが分かりやすい内容</strong>に
            することを意識しています。書いた記事はその都度Twitterにアップしてたくさんの人に読んでもらえるよ
            うにするのと、見出しにキーワードを入れたりaltタグに適切な説明を入れてSEOも意識しています。
          </p>
          <a
            class="btn red"
            href="https://ryu-webstudy.com/"
            target="_blank"
            rel="noopener noreferrer"
            >ブログを見る<i class="fas fa-external-link-alt"></i
          ></a>
        </div>
      </section>
    </main>
<?php get_footer(); ?>