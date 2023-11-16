<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<div class="main-content">
    <section class="section">
        <div class="row sortable-card ui-sortable">
            <div class="col-6 col-md-8 col-lg-2">
                <div class="card card-primary"><img src="/bpjs/asset/bpjs.png" width="50%" style="margin: auto;">
                    <div id="antrean" class="card_content">
                        <h5 class="card-header">Antrean Dokter</h5>
                        <button class="btn btn-block" onclick="antrean()">Read Time</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-8 col-lg-2">
                <div class="card card-primary"><img src="/bpjs/asset/bpjs.png" width="50%" style="margin: auto;">
                    <div id="pendaftaran" class="card_content">
                        <h5 class="card-header">Data Pendaftaran</h5>
                        <button class="btn btn-block" onclick="pendaftaran()">Read Time</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-8 col-lg-2">
                <div class="card card-primary"><img src="/bpjs/asset/bpjs.png" width="50%" style="margin: auto;">
                    <div id="rujukan" class="card_content">
                        <h5 class="card-header">Data Rujukan</h5>
                        <button class="btn btn-block" onclick="rujukan()">Read Time</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-8 col-lg-2">
                <div class="card card-primary"><img src="/bpjs/asset/bpjs.png" width="50%" style="margin: auto;">
                    <div id="monitoring" class="card_content">
                        <h5 class="card-header">Data Kunjungan</h5>
                        <button class="btn btn-block" onclick="monitoring()">Read Time</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php'; ?>
<script src="model/ResponTime.js"></script>