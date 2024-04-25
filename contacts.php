<?php

header('Content-Type: text/html; charset=UTF-8');


include "functions/db.php";


$rows = query($dbConn, "SELECT * FROM verimor ORDER BY id DESC");

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

<div class="content">
    <h4 class="title">Watsapp Business Service</h4>
    <table class="table table-striped">
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
    </table>
</div>