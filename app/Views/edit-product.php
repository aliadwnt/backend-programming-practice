<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?=base_url("product-update/". $product->id)?>">
<div>
    <label for="namaProduct">Nama Produk</label>
    <input id="namaProduct" name="nama_product"type="text" value="<?=$product->nama_product?>"></input>
</div>
<br>
<div>
    <label for="description">Deskripsi Produk</label>
    <input name="description" type="text"  value="<?=$product->description?>"></input>
</div>
<br>
<div>
    <button type="submit">Update</button>
</div>
</form>
</body>
</html>