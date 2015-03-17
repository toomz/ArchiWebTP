<?php
    require_once('connexion_bdd.php');

    
    include_once('header.html');
?>

	<div class="breadcrumbs">
		HOME &nbsp; &#8594; &nbsp; <span class="breadcrumbs-selected">SHOPPING CART</span> 
	</div>

	<div class="banner-item-added">
		"Pellentesque sit amet diam nunc" was successfully added to your shopping cart. 
	</div>

	<table class="products-table">
		<thead class="products-table-title">
			<tr>
				<th>Product Name</th>
				<th>Unite Price</th>
				<th>Qty</th>
				<th>Subtotal</th>
				<th></th>
			</tr>
		</thead>

		<tbody class="products-table-content">
			<tr>
				<td>
					<div class="product-thumbnail">
						<span class="helper"></span><img src="thumbnail_mini.png">
					</div>
					<div class="product-title">
						Nam at lectus eget mi hendrerit tincidunt
					</div>
					<div class="product-edit"> 
						<a href="#" class="product-edit-link">Edit</a>
					</div>
				</td>
				<td>
					<div class="product-price">
						$90.00
					</div>
				</td>
				<td>
					<div class="product-quantity">
						<input type="text" class="product-quantity-input" value="1">
					</div>
				</td>
				<td>
					<div class="product-subtotal">
						$90.00
					</div>
				</td>
				<td>
					<div class="product-delete-btn">
						<button class="product-delete-btn" form="products-form">x</button>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="product-thumbnail">
						<span class="helper"></span><img src="thumbnail_mini.png">
					</div>
					<div class="product-title">
						Nam at lectus eget mi hendrerit tincidunt
					</div>
					<div class="product-edit"> 
						<a href="#" class="product-edit-link">Edit</a>
					</div>
				</td>
				<td>
					<div class="product-price">
						$90.00
					</div>
				</td>
				<td>
					<div class="product-quantity">
						<input type="text" class="product-quantity-input" value="1">
					</div>
				</td>
				<td>
					<div class="product-subtotal">
						$90.00
					</div>
				</td>
				<td>
					<div class="product-delete-btn">
						<button class="product-delete-btn" form="products-form">x</button>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="products-btns">
		<button type="button" class="continue-shopping-btn">CONTINUE SHOPPING</button>
		<button type="button" class="update-cart-btn" >UPDATE SHOPPING CART</button>
	</div>


<?php include_once('footer.html');?>