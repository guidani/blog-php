<?php
require_once("./templates/header.php");

function truncateText($text, $numWords)
{
  $words = explode(' ', $text);
  if (count($words) > $numWords) {
    $words = array_slice($words, 0, $numWords);
    return implode(' ', $words) . '...';
  }
  return $text;
}
?>
<main>
  <section class="">
    <div class="hero is-info">
      <div class="hero-body">
        <div class="container">
          <h1 class="title font-700">
            Blog Codar
          </h1>
          <p class="subtitle">O seu blog de programação.</p>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <div class="section">
    <div class="container">
      <div class="grid is-col-min-12">
        <?php foreach ($posts as $post) : ?>
          <div class="card">
            <div class="card-image">
              <figure class="image">
                <img src="<?= $BASE_URL ?>img/<?= $post['img'] ?>" alt="">
              </figure>
            </div>
            <div class="card-content">
              <h2 class="title"> <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a> </h2>
              <p class="subtitle">
                <?= truncateText($post['body'], 20); ?>
              </p>
            </div>
            <div class="card-footer">
              <?php foreach ($post['tags'] as $tag) : ?>
                <span class="tag">
                  <a href=""><?= ucfirst($tag)  ?></a>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!--  -->
  <section class="section">
    <div class="container">
      <h1 class="title">Medium section</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like
        the one you're currently reading.
      </h2>
    </div>
  </section>
</main>


<?php
require_once("./templates/footer.php")
?>