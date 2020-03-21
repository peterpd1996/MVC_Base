<h1>PAGE PRODUCT</h1>

<?php foreach ($products as $product):  ?>

	<h4><a href="<?php echo base_url("home/show&id=$product[product_id]") ?>">Chi tiet san pham</a></h4>
<li><?php echo $product['product_name'] ?></li>
<?php endforeach;  ?>

