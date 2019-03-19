<?php
require_once 'conexao/init.php';
      // abre a conexão
$PDO = db_connect();
      // SQL para selecionar os registros
$sql_post = "SELECT * FROM postagem ";
      // seleciona os registros
$postbd = $PDO->prepare($sql_post);
$postbd->execute();
?>
<div id="primary" class="content-area">
    <?php while ($post = $postbd->fetch(PDO::FETCH_ASSOC)): ?>
        <article class="post format-image hentry">
            <div class="media-attachment">
                <div class="post-thumbnail">
                    <a  href="visualizar.php?id=<?php echo $post['id']; ?>">
                        <img width="460" height="244" alt="" class="wp-post-image" src="banners/publicacao/<?php echo $post['img']; ?>" alt="<?php echo $foto['imagem']; ?>">
                    </a>
                </div>
            </div>
            <!-- .media-attachment -->
            <div class="content-body">
                <header class="entry-header">
                    <h1 class="entry-title">
                        <a rel="bookmark" href="visualizar.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a>
                    </h1>
                    <div class="entry-meta">
                        <!-- .cat-links -->
                        <span class="posted-on">
                            <a rel="bookmark" href="blog-single.html">
                                <time datetime="2017-03-23T08:06:09+00:00" class="entry-date published"><?php echo $post['data'] ?></time>
                            </a>
                        </span>
                    </div>
                    <!-- .entry-meta -->
                </header>
                <!-- .entry-header -->
                <div class="entry-content">
                    <p><?php echo $post['descricao'] ?></p>
                </div>
                <!-- .entry-content -->
                <div class="post-readmore">
                    <a class="btn btn-primary" href="visualizar.php?id=<?php echo $post['id']; ?>">Ler Tudo</a>
                </div>
                    <!-- .post-readmore
                    <span class="comments-link">
                        <a href="blog-single#comments.html">Ver os comentário</a>
                    </span>
                -->
            </div>
        </article>
    <?php endwhile; ?>
</div>