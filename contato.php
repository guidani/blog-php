<?php
require_once("./templates/header.php");

echo "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
?>


<section class="section">
  <div class="container">
    <h1 class="title font-700">
      Contato
    </h1>
  </div>
</section>


<?php
require_once("./templates/footer.php")
?>