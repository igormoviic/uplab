<?php
require_once 'conexao/init.php';
      // abre a conexão
$PDO = db_connect();
      // SQL para selecionar os registros
$sql_tags = "SELECT * FROM tags ";
      // seleciona os registros
$tagsbd = $PDO->prepare($sql_tags);
$tagsbd->execute();
?>
<div class="widget widget_tag_cloud">
    <span class="gamma widget-title">Tags</span>
    <?php while ($tags = $tagsbd->fetch(PDO::FETCH_ASSOC)): ?>
    <div class="tagcloud">
        <a style="font-size: 22pt;" class="tag-cloud-link" href="#"><?php echo $tags['tags'] ?></a>

        <!-- .tagcloud -->
    </div>
    <?php endwhile; ?>
