<?php
require_once 'conexao/init.php';
      // abre a conexão
$PDO = db_connect();

      // SQL para selecionar os registros
$sql_categ = "SELECT * FROM categoria ";

      // seleciona os registros
$categoriabd = $PDO->prepare($sql_categ);
$categoriabd->execute();


?>
 <div class="widget widget_categories" id="categories-2">
    <span class="gamma widget-title">Categoria</span>
    <?php while ($categoria = $categoriabd->fetch(PDO::FETCH_ASSOC)): ?>
    <ul>
        <li class="cat-item cat-item-53">
            <a href="product-category.html"><?php echo $categoria['categoria'] ?></a>
        </li>
    </ul>
    <?php endwhile ?>
</div>
