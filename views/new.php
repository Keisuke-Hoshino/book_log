      <h2 class="h3 mb-4 text-dark">読書ログ登録</h2>
      <form action="create.php" method="post">
        <?php if (count($errors)) : ?>
        <ul>
          <?php foreach ($errors as $error) : ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <div class="form-group">
          <label for="title">書籍名</label>
          <input class="form-control" type="text" name="title" id="title" value="<?php echo $review['title']; ?>">
        </div>
        <div class="form-group">
          <label for="author">著者名</label>
          <input class="form-control" type="text" name="author" id="author" value="<?php echo $review['author']; ?>">
        </div>
        <div class="form-group">
          <label>読書状況</label>
          <div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" value="未読"<?php echo ($review['status'] === '未読')? 'checked' : '';?> id="status1">
              <label for="status1">未読</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" value="読んでる"<?php echo ($review['status'] === '読んでる')? 'checked' : '';?>  id="status2">
              <label for="status2">読んでる</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" class="" type="radio" name="status" value="読了"<?php echo ($review['status'] === '読了')? 'checked' : '';?>  id="status3">
              <label for="status3">読了</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="score">評価(5点満点の整数)</label>
          <input class="form-control" type="number" name="score" id="score" value="<?php echo $review['score']; ?>">
        </div>
        <div class="form-group">
          <label for="summary">感想</label>
          <textarea class="form-control" name="summary" id="summary" cols="30" rows="10" value="<?php echo $review['summary']; ?>"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">登録する</button>
      </form>
