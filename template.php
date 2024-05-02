<?php

require_once "functions/db.php";
require_once "functions/classUsers.php";
include "functions/class.log.php";

extract($_REQUEST);

$row = query($dbConn, "SELECT * FROM template LIMIT 1");
$dbMessage = $row[0] ?? null;


if (isset($message) && $message) {
    $message= trim($message);
    if ($dbMessage) {
        $sql = "UPDATE template SET text = ?, updated_at = NOW()";
    } else {
        $sql = "INSERT INTO template (text) VALUES (?)";
    }

    $stmt = $dbConn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $message); // "s" indicates a string parameter
        $stmt->execute();
        $stmt->close();

        echo "success";
        return;
    } else {
        echo "Error preparing statement: " . $dbConn->error;
    }
}


?>

<div class="content mb-5">
    <h4 class="title">Mesaj Şablonu</h4>

    <div class="row g-2">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="mb-3">
                            <label for="message" class="form-label">Metin</label>
                            <textarea class="form-control" name="message" id="message" rows="8"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary float-end">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <?php if ($dbMessage) : ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kaydedilen Şablon</h5>
                        <p><?= $dbMessage["text"] ?></p>
                        <table class="table table-sm">
                            <tr>
                                <td>Oluşturma Tarihi</td>
                                <td><?= $dbMessage["created_at"] ?></td>
                            </tr>
                            <tr>
                                <td>Son Güncelleme</td>
                                <td><?= $dbMessage["updated_at"] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("form").submit(function(e) {
            e.preventDefault();
            const data = $(this).serializeArray();
            const url = $(this).attr("action");

            fetchData(url, null, data, {
                success(data) {
                    if (data == "success") {
                        fetchData(url);
                    }
                },
            })
        });
    });
</script>