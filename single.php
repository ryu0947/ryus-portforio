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
    <?php if (get_field('work_summary')) : ?>
      <div class="work-contents">
        <h3 class="work-title">概要</h3>
        <p><?php the_field('work_summary'); ?></p>
      </div>
    <?php endif; ?>
    <?php if (get_field('work_reason')) : ?>
      <div class="work-contents">
        <h3 class="work-title">制作した理由</h3>
        <p><?php the_field('work_reason'); ?></p>
      </div>
    <?php endif; ?>
    <?php if (get_field('work_commitment')) : ?>
      <div class="work-contents">
        <h3 class="work-title">こだわったところ</h3>
        <p><?php the_field('work_commitment'); ?></p>
      </div>
    <?php endif; ?>
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