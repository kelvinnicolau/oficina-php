<div class="row">
   <?php foreach ($noticias as $item): ?>
    <div class="col-12 col-md-4 col-sm-12">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $item['image_link']; ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $item['titulo']; ?>
                </h5>
                <p class="card-text"><?php echo $item['assunto']; ?></p>
                <a href="?a=detalhe&id=<?= $item['id'] ?>" class="btn btn-primary">LEIA MAIS</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>