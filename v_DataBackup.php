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
                            <div id="button-container">
                                <select id="folderFilter">
                                    <option value="">Filter All Folder</option>
                                    <option value="HIS">HIS</option>
                                    <option value="MEDIK">MEDIK</option>
                                    <option value="SISMADAK">SISMADAK</option>
                                    <option value="CCGDBBackup">CCGDBBackup</option>
                                    <option value="EADBBackup">EADBBackup</option>
                                    <option value="UVDBBackup">UVDBBackup</option>
                                </select>
                            </div>
                            <table id="dataGE" class="table">
                                <thead>
                                    <tr>
                                        <th>Folder</th>
                                        <th>File Name</th>
                                        <th>Modified</th>
                                        <th>Size</th>
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
<script src="model/Report/datatables.js"></script>
<!-- Library -->
<script src="vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js"></script>