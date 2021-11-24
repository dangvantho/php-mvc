<head>
    <?php include "./views/common/head.php"; ?>
    <style>
        .hello {
            background: red;
        }
    </style>
</head>

<?php
echo "<div class=\"flex p-2 justify-center items-center\">";
foreach ($products as $key => $product) {
    $id = $product["id"];
    $name = $product["name"];
    echo "<p data-product-id=\"${id}\">${name}</p>";
}
echo "</div>";
?>