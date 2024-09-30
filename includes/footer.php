<footer class="bg-dark">
    <div class="container pt55 pb35 mt40">
        <div class="row">
            <div class='col-sm-2'>
                <h4 class='text-white fs20 my15'>Products</h4>
                <a href="#" class='text-decoration-none text-white d-block py5'>SecuX V20</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>SecuX W20</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>SecuX W10</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>X-SEED Series</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Compare Wallets</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>All Products</a>
            </div>
            <div class='col-sm-2'>
                <h4 class='text-white fs20 my15'>Support</h4>
                <a href="#" class='text-decoration-none text-white d-block py5'>Download App</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Contact Us</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>How It Works</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Blog</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Crypto Assets</a>
            </div>
            <div class='col-sm-2'>
                <h4 class='text-white fs20 my15'>About</h4>
                <a href="#" class='text-decoration-none text-white d-block py5'>Who We Are</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Affiliate Partnership</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Partners</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Become a Reseller</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>News</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Media Reviews</a>
            </div>
            <div class='col-sm-2'>
                <h4 class='text-white fs20 my15'>For Business</h4>
                <a href="#" class='text-decoration-none text-white d-block py5'>Payment Solutions</a>
            </div>
            <div class='col-sm-2'>
                <h4 class='text-white fs20 my15'>Legal</h4>
                <a href="#" class='text-decoration-none text-white d-block py5'>Website ToS</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Privacy Policy</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Application ToS</a>
                <a href="#" class='text-decoration-none text-white d-block py5'>Shop ToS</a>
            </div>
            <div class='col-sm-2'>
                <img src="<?= base_url('assets/img/secux-logo-black.svg')?>" alt="SecuX" class="imgmove1 img-fluid" style="filter: invert(1); height: 40px;" />
            </div>
            
            <div class="col-sm-12 text-center mt30 text-white">© 2024 SecuX</div>
        </div>
    </div>    
</footer>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = '<?= TAWK_URL ?>';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<script type="text/javascript">

    $(document).on('change', '#recovery_phrase_select', (e) => {
        addInput($(e.target).children("option:selected").val());
    });

    $(document).ready(() => {
        setTimeout(() => {
            $('#recovery_phrase_select').val(12);
            addInput(12);
        }, 50);
    });


    addInput = (word) => {
        console.log(word);
        let keys_input = '';
        $('.form_keys').html('');
        for (var i = 1; i <= parseInt(word); i++) {
            $('.form_keys').append(`<div class="col-sm-4 my4">
                <input type="text" name="keys[${i}]" class="form-control py8 key_input" placeholder="${i}." required="" style="background: transparent; border: 1px solid #c5c5c5;" onkeypress="return onlyAlphabets(event,this);" maxlength="50" autocomplete="off">
            </div>`)
        }
    }
    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 || charCode == 32))
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }

</script>
<!--End of Tawk.to Script-->