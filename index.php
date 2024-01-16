<?php
// Importo lo "strato dati"
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="row">
            <h2>Shop</h2>
        </div>
        <div class="row">
            <?php foreach ($cards as $card) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $card->razza->razza ?>
                                <img width="20%" src="./cani.jpg" alt="">
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">

                                <?= $card->cibo ?> <br>
                                <?= $card->giochi ?> <br>
                                <?= $card->cuccie ?>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</body>

</html>