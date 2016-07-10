<div class = "content">

	<div class = "shopping-cart">
		<img class = "shopping-cart-pic" src="http://www.jpole-antenna.com/wordpress/wp-content/uploads/2012/05/shopping-cart.jpg">
		<h2 class = "shopping-title">Shopping Cart</h2>
		<br>
		<div class = "cartdata">
			<?php 
				if ($this->session->userdata){
					echo "<h4>Product: ";
					echo $this->session->userdata('product_id');
					echo "</h4>";					
					echo "<h4>Quantity: ";
					echo $this->session->userdata('qty');
					echo "</h4>";
					echo "<h4>Price (before tax and shipping): $";
					echo $this->session->userdata('price');
					echo "</h4>";					
				}
				else {
					
					echo "Your shopping cart is empty.";
				}
			?>			
		</div>
	</div>

	<div class = "product-list">
	<!-- mini kit -->
		<div class = "product">
			<div class = "product-img col-md-4">
				<img class= "img-responsive"src="assets/images/store/1-mini-kit.jpg" alt="mini kit">				
			</div>
			<div class = "product-text col-md-8">
				<h3 class = "product-title">ZOSSEO<sup>TM</sup> Mini Kit</h3>
				<ul class = "product-description">
					<li>Simple, Sterilizable, Endo-style drill stop</li>
					<li>Multiple Diameters</li>
					<li>Drill Diameters scribed on respective stops</li>
					<li>5 stops cover widths up to 5.5 mm</li>
					<li>Adjustable to your osteotomy depth</li>
				</ul>
				<h4 class = "product-price">Price: $95.99</h4>
				<!-- adds the product to the shopping cart -->
				<form action = "/stores/add_to_cart" method = "post">
					<label>Quantity </label> <input type="text" name="qty">
					<input type="hidden" name="product_id" value = "Zosseo Mini Kit">
					<input type="hidden" name="price" value = "95.99">
					<input type="submit" name="Add to Cart">
				</form>			
			</div>	
		</div>
	</div> <!-- product-list -->
</div> <!-- content ends -->