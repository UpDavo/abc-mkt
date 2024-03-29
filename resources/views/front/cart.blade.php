<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
@include('util.header')

<body>

	@include('util.nav-header')

	<div class="colorlib-shop">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-10 col-md-offset-1">
					<div class="process-wrap">
						<div class="process text-center active">
							<p><span>01</span></p>
							<h3>Shopping Cart</h3>
						</div>
						<div class="process text-center">
							<p><span>02</span></p>
							<h3>Checkout</h3>
						</div>
						<div class="process text-center">
							<p><span>03</span></p>
							<h3>Order Complete</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-10 col-md-offset-1">
					<div class="product-name">
						<div class="one-forth text-center">
							<span>Product Details</span>
						</div>
						<div class="one-eight text-center">
							<span>Price</span>
						</div>
						<div class="one-eight text-center">
							<span>Quantity</span>
						</div>
						<div class="one-eight text-center">
							<span>Total</span>
						</div>
						<div class="one-eight text-center">
							<span>Remove</span>
						</div>
					</div>
					<div class="product-cart">
						<div class="one-forth">
							<div class="product-img" style="background-image: url(images/item-6.jpg);">
							</div>
							<div class="display-tc">
								<h3>Product Name</h3>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span class="price">$68.00</span>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<input type="text" id="quantity" name="quantity"
									class="form-control input-number text-center" value="1" min="1" max="100">
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span class="price">$120.00</span>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<a href="#" class="closed"></a>
							</div>
						</div>
					</div>
					<div class="product-cart">
						<div class="one-forth">
							<div class="product-img" style="background-image: url(images/item-7.jpg);">
							</div>
							<div class="display-tc">
								<h3>Product Name</h3>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span class="price">$68.00</span>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<form action="#">
									<input type="text" name="quantity" class="form-control input-number text-center"
										value="1" min="1" max="100">
								</form>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span class="price">$120.00</span>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<a href="#" class="closed"></a>
							</div>
						</div>
					</div>
					<div class="product-cart">
						<div class="one-forth">
							<div class="product-img" style="background-image: url(images/item-8.jpg);">
							</div>
							<div class="display-tc">
								<h3>Product Name</h3>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span class="price">$68.00</span>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<input type="text" id="quantity" name="quantity"
									class="form-control input-number text-center" value="1" min="1" max="100">
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span class="price">$120.00</span>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<a href="#" class="closed"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="total-wrap">
						<div class="row">
							<div class="col-md-8">
								<form action="#">
									<div class="row form-group">
										<div class="col-md-9">
											<input type="text" name="quantity" class="form-control input-number"
												placeholder="Your Coupon Number...">
										</div>
										<div class="col-md-3">
											<input type="submit" value="Apply Coupon" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-3 col-md-push-1 text-center">
								<div class="total">
									<div class="sub">
										<p><span>Subtotal:</span> <span>$200.00</span></p>
										<p><span>Delivery:</span> <span>$0.00</span></p>
										<p><span>Discount:</span> <span>$45.00</span></p>
									</div>
									<div class="grand-total">
										<p><span><strong>Total:</strong></span> <span>$450.00</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('util.recomendations')


	@include('util.footer')


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>



</body>

</html>