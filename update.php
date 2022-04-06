<?php
require("inc/db.php");

if ($_POST) {
    $id      = (int)$_POST['id'];
    $barcode = trim($_POST['barcode']);
    $name    = trim($_POST['name']);
    $price   = (float) $_POST['price'];
    $qty     = (int) $_POST['qty'];
    $image   = trim($_POST['image']);
    $short_descript = trim($_POST['short_descript']);
    $long_descript = trim($_POST['long_descript']);

    try {
        //code...

        $sql = 'UPDATE products 
                    SET barcode = :barcode, name = :name, price = :price, qty = :qty, 
                    image = :image, short_descript = :short_descript, long_descript = :long_descript
                WHERE id = :id';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":barcode", $barcode);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":qty", $qty);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":short_descript", $short_descript);
        $stmt->bindParam(":long_descript", $long_descript);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        if ($stmt->rowCount()) {
            header("Location: edit.php?id=" . $id . "&status=updated");
            exit();
        }
        header("Location: edit.php?id=" . $id . "&status=fail_update");
        exit();
    } catch (Exception $e) {
        //throw $th;

        echo "Error" . $e->getMessage();
        exit();
    }
} else {
    header("Location: edit.php?id=" . $id . "&status=fail_update");
    exit();
}
