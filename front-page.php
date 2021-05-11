<?php get_header(); ?>
<main id="js-main">
  <section id="about" class="about">
    <div class="container">
      <h2 class="section-title about__title" lang="en">About</h2>
      <p class="intro">
        はじめまして！小川竜司と申します。<br />
        私の経歴と簡単な自己紹介をいたします。
      </p>
      <div class="profile">
        <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" width="420" height="420" alt="小川竜司の写真" class="profile__img" />
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
            学習用ブログ<a href="<?php echo esc_url('https://ryu-webstudy.com/') ?>" target="_blank" rel="noopener noreferrer" class="blog-link">「リュウブログ」</a>を運営
          </dd>
          <dt class="profile__item" lang="en">Links</dt>
          <dd class="profile__item">
            <a href="<?php echo esc_url('https://twitter.com/ryu0947'); ?> " target="_blank" rel="noopener noreferrer">
              <i class="fab fa-2x fa-twitter"></i>
            </a>
            <a href="<?php echo esc_url('https://github.com/ryu0947'); ?>" target="_blank" rel="noopener noreferrer">
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
          <img src="https://img.icons8.com/color/144/000000/javascript.png" width="144" height="144" alt="JavaScript" />
        </li>
        <li class="skill__item">
          <img src="https://img.icons8.com/ios-filled/150/000000/jquery.png" width="150" height="150" alt="jQuery" />
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
        <?php
        $args = array(
          'post_type' => 'works',
          'order' => 'ASC',
          'get_per_page' => -1
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post();
        ?>
            <li class="work__item">
              <a href="<?php the_permalink(); ?>">
                <div class="work__img"><?php the_post_thumbnail(); ?></div>
                <p class="work__name" lang="en"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>
  <section id="blog" class="blog">
    <div class="container">
      <h2 class="section-title blog__title" lang="en">Blog</h2>
      <img class="blog__img" src="<?php echo get_template_directory_uri(); ?>/img/blog.png" width="900" height="600" alt="ブログのスクリーンショット" />
      <p class="blog__description">
        日々の学習で<strong>エラーが出て解決したことや知識のアウトプット</strong>を目的としてブログを書いています。
        記事を書く時はエディタを使ってコードを書いて載せたり、CodePenを使ってコードとデモを載せたり
        解説する時に図解をしたりと、自分の学習のためだけではなく<strong>記事を読むユーザーが分かりやすい内容</strong>に
        することを意識しています。書いた記事はその都度Twitterにアップしてたくさんの人に読んでもらえるよ
        うにするのと、見出しにキーワードを入れたりaltタグに適切な説明を入れてSEOも意識しています。
      </p>
      <a class="btn red" href="<?php echo esc_url('https://ryu-webstudy.com/') ?>" target="_blank" rel="noopener noreferrer">ブログを見る<i class="fas fa-external-link-alt"></i></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>