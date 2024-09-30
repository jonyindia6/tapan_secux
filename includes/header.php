<div class="container-fluid">
    <div class="row py10 bg-yellow">
        <div class="col-sm-12 text-center">
            <div class="fw-bold fs16">Beware of phishing attacks, Never share your 24 word recovery seed phrase except SecuX.</div>
            <div class="fw-bold fs16">Global free shipping until 9/30. Shop Now</div>
        </div>
    </div>
</div>
<?php
$list = [
    ['name' => 'Products', 'sub_menus' => ['SecuX Neo Series (New🔥)', 'Shield BIO', 'SecuX V20', 'SecuX W20', 'SecuX W10', 'SecuX Forte USB', 'SecuX Nifty', 'X-SEED Series', 'Compare Wallets', 'Bundles']],
    ['name' => 'News &amp; Blog', 'sub_menus' => ['News &amp; Blog', 'Media Reviews']],
    ['name' => 'For Business', 'sub_menus' => ['About', 'Affiliate Program', 'Payment Solution', 'Partnerships']],
    ['name' => 'Support', 'sub_menus' => ['How It Works', 'Contact Us', 'Crypto Assets']],
    ['name' => 'Connect Wallet', 'sub_menus' => []],
    ['name' => 'Shop', 'sub_menus' => []],
];
?>
<div class='container'>
    <header class="row">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/img/secux-logo-black.svg') ?>" height="25" alt="SecuX" title="SecuX" />
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <?php foreach ($list as $l) : ?>
                        <?php if (empty($l['sub_menus'])) : ?>
                            <a class="nav-link px15" href="#" role="button">
                                <?= $l['name'] ?>
                            </a>
                        <?php else : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px15" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $l['name'] ?>
                                </a>
                                <ul class="dropdown-menu sub_menu">
                                    <?php foreach ($l['sub_menus'] as $sm) : ?>
                                        <li><a class="" href="#"><?= $sm ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <li lang="nav-item"><i class="fa-solid fa-cart-shopping pt10 ps10 fs15"></i></li>
                </ul>
            </div>
        </nav>
    </header>
</div>