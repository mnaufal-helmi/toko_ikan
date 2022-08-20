<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php



?>


<h4 class=""> Transaksi No <?= $transaksi->id_trans ?></h4>

<div class="">
    <table class="table">

        <tr>
            <td class="col-6"> Barang </td>
            <td><?= $transaksi->nama ?></td>
        </tr>
        <tr>
            <td class="col-6">Pembeli</td>
            <td><?= $transaksi->username ?></td>
        </tr>
        <tr>
            <td class="col-6">Alamat</td>
            <td><?= $transaksi->alamat ?></td>
        </tr>
        <tr>
            <td class="col-6">Jumlah</td>
            <td><?= $transaksi->jumlah ?></td>
        </tr>
        <tr>
            <td class="col-6">Total Harga</td>
            <td><?= $transaksi->total_harga ?></td>
        </tr>
        <tr> <?php if (session()->get('role') != 0) : ?>
                <td class="col-6">



                    <p class="font-black-600"> Silahkan kepada Yth <?php echo session()->get('username');  ?> segera melakukan pembayaran <br> dan konfirmasi melalui WhatsApp</p>

                </td>
                <td>

</div>
</td>
<?php endif ?>

</tr>
</div>
<tr>
    <?php if (session()->get('role') != 0) : ?>
        <td>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.8/holder.min.js">

            <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css')  ?>" rel="stylesheet">


            <div class="container">
                <div class="row">
                    <div class="col-6 ">
                        klik untuk melakukan pembayaran
                        <div style=" display:flex; justify-content:space-between;">
                            <button id="huhu" class="btn btn-outline-info">Payment method</button>

                            <button id="huhu" class="btn btn-outline-info">Konfirmasi Pembayaran</button>
                        </div>
                        <div id="haha" class="bg-slate-20 text-white text-center grid gap-5 p-5 transition duration-1000 translate-y-5 opacity-0 absolute top-4">
                            <div class="d-flex flex-column flex-sm-row ">
                                <div class="col" id="dana"><img src=" <?php echo base_url(); ?>/assets/images/dana.png" width="150" alt="">&nbsp; <br>
                                    <p>+62877-7314-2250 Ano Supriatno</p>
                                </div>
                                <div class="col" id="gopay"><img src=" <?php echo base_url(); ?>/assets/images/gopay.png" width="150" alt="">&nbsp; <br>
                                    <p>+62877-7314-2250 Ano Supriatno</p>
                                </div>
                                <div class="col" id="ovo"><img src=" <?php echo base_url(); ?>/assets/images/ovo.png " width="150" alt="">&nbsp; <br>
                                    <p>+62877-7314-2250 Ano Supriatno</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <img src="php echo base_url(); ?>/assets/images/dana.png" class="w3-display-middle w3-large" alt="dana bang">&nbsp;

            <img src="php echo base_url(); ?>/assets/images/gopay.png" class="w3-display-middle w3-large" alt="gopay">&nbsp;

            <img src="php echo base_url(); ?>/assets/images/paypal.png" alt="gopay"> -->

        </td>


    <?php endif ?>
</tr>
</table>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function() {
        var options = {
            googlemap: "https://www.google.com/maps/dir/-7.2152914,107.9176314/toko+ikan+hias+talun/@-7.2209577,107.9061651,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68b1b5c4fd7201:0x10615c1046122bca!2m2!1d107.9108456!2d-7.2242517", // Google Map url
            whatsapp: "+6287773142250", // WhatsApp number
            call_to_action: "Konfirmasi Pembayaran", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "googlemap,whatsapp", // Order of buttons
            pre_filled_message: "Hallo, Saya akan membayar konfirmasi pembayaran  ", // WhatsApp pre-filled message
        };
        var proto = 'https:',
            host = "getbutton.io",
            url = proto + '//static.' + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


<script>
    // pendefinisian
    const pilihan = document.getElementById("huhu");
    const isi = document.getElementById("haha");
    const dana = document.getElementById("dana");
    const gopay = document.getElementById("gopay");
    const ovo = document.getElementById("ovo");

    //fungsi transisi
    function transition() {
        if (isi.classList.contains("hidden")) {
            isi.classList.remove("hidden");
            setTimeout(() => {
                isi.classList.toggle("translate-y-5");
                isi.classList.toggle("translate-y-0");
                isi.classList.toggle("opacity-0");
                isi.classList.toggle("opacity-100");
            }, 60);
        } else {
            isi.classList.toggle("translate-y-5");
            isi.classList.toggle("translate-y-0");
            isi.classList.toggle("opacity-0");
            isi.classList.toggle("opacity-100");
            setTimeout(() => {

            }, 60);
        }
    }

    pilihan.addEventListener("click", transition);

    dana.addEventListener("click", function() {
        pilihan.innerHTML = dana.innerHTML;
        transition();
    });

    gopay.addEventListener("click", function() {
        pilihan.innerHTML = gopay.innerHTML;
        transition();
    });

    ovo.addEventListener("click", function() {
        pilihan.innerHTML = ovo.innerHTML;
        transition();
    });
</script>
<?= $this->endSection() ?>