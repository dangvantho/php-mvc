<h1>Danh sách sản phẩm</h1>
<?php
foreach($products as $key => $product)
{
    $id = $product["id"];
    $name = $product["name"];
    echo "<p data-product-id=\"${id}\">${name}</p>";
}
echo "<pre>";
print_r($products);
echo "</pre>";
?>