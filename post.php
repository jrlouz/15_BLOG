<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }

?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Bem-vindo ao Blog Codar - seu destino definitivo para aprender a arte da programação! Se você já sonhou em criar seus próprios aplicativos, websites ou até mesmo jogos, este é o lugar certo para você. Nosso blog é dedicado a tornar o aprendizado da programação divertido, acessível e acima de tudo, inspirador.</p>
      <p class="post-content">Não importa se você está apenas começando sua jornada na programação ou se já é um programador experiente em busca de novos desafios, o Blog Codar é o seu guia definitivo. Prepare-se para desbloquear seu potencial criativo, desenvolver habilidades valiosas e fazer parte de uma comunidade apaixonada pela arte da programação. Junte-se a nós hoje e comece a transformar suas ideias em realidade!</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php
  include_once("templates/footer.php")
?>