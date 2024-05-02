<?php

header('Content-Type: text/html; charset=UTF-8');

require_once "functions/db.php";
require_once "functions/classUsers.php";


extract($_REQUEST);

$startDate = $startDate ?? date("Y-m-d");
$endDate = $endDate ?? date("Y-m-d");
$keyword = $keyword ?? "";

$sql =  "SELECT * FROM verimor 
        WHERE DATE(created_at) 
        BETWEEN '$startDate' AND '$endDate' 
        AND phone LIKE '%$keyword%'
        ORDER BY id DESC";

$rows = query($dbConn, $sql);

$countAll = query($dbConn, "SELECT COUNT(*) as total FROM verimor")[0] ?? 0;

$phones = "";

if (is_array($rows)) {
    foreach ($rows as $index => $row) {
        $phones .= "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['created_at']}</td>
                    </tr>";
    }
}
?>


<h4 class="title">Watsapp Business Service (<?= $countAll["total"] ?>)</h4>
<form action="" method="post" id="filter">
    <div class="row mb-3 g-2">
        <div class="col-sm-6 col-md-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 135px;" id="startDate">Başlangıç Tarihi</span>
                </div>
                <input type="date" value="<?= $startDate ?>" class="form-control" name="startDate" placeholder="Başlangıç Tarihi" aria-label="Başlangıç Tarihi">
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 135px;" id="endDate">Bitiş Tarihi</span>
                </div>
                <input type="date" value="<?= $endDate ?>" name="endDate" class="form-control" placeholder="Bitiş Tarihi" aria-label="Bitiş Tarihi">
            </div>
        </div>
        <div class=" col-md-4 d-flex gap-2">
            <input type="search" value="<?= $keyword ?>" class="form-control" name="keyword" placeholder="Telefon Numarası">
            <button class="btn btn-primary">
                Süzgeç
            </button>
        </div>
    </div>
</form>
<div class="table-responsive" style="height: 75vh!important;">
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Numara</th>
                <th>Tarihi</th>
            </tr>
        </thead>
        <tbody>
            <?= $phones ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2" class="text-end">Toplam</th>
                <th><?= count($rows) ?></th>
            </tr>
        </tfoot>
    </table>
</div>

<script>
    $("#filter").submit(function(e) {
        e.preventDefault();
        const params = $(this).serializeArray();

        fetchData("<?= $_SERVER["PHP_SELF"] ?>", "#root", params);
    })
</script>