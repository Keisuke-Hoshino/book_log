  <h1 class="mb-4 text-dark">読書状況の一覧</h1>
    <a class="btn btn-primary" href="new.php">読書ログを登録する</a>
  <main>
    <?php if(count($reviews) > 0): ?>
    <?php foreach($reviews as $review): ?>
    <section class="card mb-4 mt-4 p-2">
      <div class="card-body">
        <h2 class="card-title h3 mb-3">書籍名：<?php echo escape($review['title']) ?></h2>
        <div class="mb-3">
          著者名：<?php echo escape($review['author']) ?>&nbsp;/&nbsp;
          読書状況：<?php echo escape($review['status']) ?>&nbsp;/&nbsp;
          評価：<?php echo escape($review['score']) ?>点
        </div>
        <p>
          感想:<?php echo  nl2br(escape($review['summary']), false) ?>
        </p>
      </div>
    </section>
    <?php endforeach; ?>
    <?php else: ?>
      <p>読書ログがまだ登録されていません。</p>
    <?php endif;?>
  </main>
