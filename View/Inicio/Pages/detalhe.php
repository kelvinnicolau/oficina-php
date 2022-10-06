<div class="row mt-4">
    <div class="col-12">
    <a href="index.php" class="btn btn-dark">Voltar</a>
        <div class="card">
            <img class="card-img-top second" src="<?= $item['image_link'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $item['titulo'] ?></h5>
                <h5 class="card-subtitle md-2 text-muted"><?= $item['reporter'] ?></h5>
                <span class="badge badge-info"><?= $item['criado_em'] ?></span>
                <p class="card-text"><?= $item['assunto'] ?></p>
                <p class="card-text"><?= $item['descricao'] ?></p>
            </div>
        </div>
    </div>
</div>