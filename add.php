<?php
require("inc/db.php");

if ($_POST) {
    $barcode = trim($_POST['barcode']);
    $name    = trim($_POST['name']);
    $price   = (float) $_POST['price'];
    $qty     = (int) $_POST['qty'];
    $image   = trim($_POST['image']);
    $short_descript = trim($_POST['short_descript']);
    $long_descript = trim($_POST['long_descript']);

    try {
        //Adding product into DB
        $sql = 'INSERT INTO products(barcode, name, price, qty, image, short_descript, long_descript)
    VALUES(:barcode, :name, :price, :qty, :image, :short_descript, :long_descript)';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":barcode", $barcode);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":qty", $qty);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":short_descript", $short_descript);
        $stmt->bindParam(":long_descript", $long_descript);
        $stmt->execute();

        if ($stmt->rowCount()) {
            header("Location: create.php?status=created");
            exit();
        }
        header("Location: create.php?status=fail_create");
        exit();
    } catch (Exception $e) {
        //Send an error message
        echo "Error" . $e->getMessage();
        exit();
    }
} else {
    header("Location: create.php?status=fail_create");
    exit();
}
