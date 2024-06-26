<?php
require_once("./templates/header.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $currentPost;
  foreach ($posts as $post) {
    if ($post['id'] == $id) {
      $currentPost = $post;
    }
  }
}

?>
<main>
  <?php if (!isset($currentPost)) : ?>
    <section class="section">
      <div class="container">
        <h1 class="title font-700">
          Postagem não encontrada.
        </h1>
      </div>
    </section>

  <?php else : ?>

    <section class="section">
      <div class="container">
        <div class="content">
          <?php foreach ($currentPost['tags'] as $tag) : ?>
            <span class="tag">
              <a href="#"><?= ucfirst($tag)  ?></a>
            </span>
          <?php endforeach; ?>
          <h1><?= $currentPost['title'] ?></h1>
          <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="">
          <p><?= $currentPost['body'] ?></p>
        </div>
      </div>
    </section>

  <?php endif; ?>
</main>
<?php
require_once("./templates/footer.php")
?>