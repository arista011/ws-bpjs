<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Table Kode HFIS</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="dataHFIS" class="table">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Dokter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?php include "includes/footer.php"; ?>

<!-- Source -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="model/ResponDatatables.js"></script>


<!-- Library
<script src="vendor/datatables/datatables/media/js/jquery.js"></script>
<script src="vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js"></script>
<!-- Include DataTables JS -->
<!-- <script type="text/javascript" charset="utf8" src="vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script> -->