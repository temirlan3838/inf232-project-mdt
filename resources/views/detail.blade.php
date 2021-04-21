<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min " rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  </head>
  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img width="300" height="400" src="/front/img/{{ $product['image'] }} "/></div>
						  
						</div>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{ $product['name'] }}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 <strong>{{ __("reviews")}}</strong></span>
						</div>
						<p class="product-description"><strong>{{ __("about this")}}:</strong> {{ $product['title'] }}</p>
						<h4 class="price"><strong>{{ __("current price")}}:</strong> <span>${{ $product['price'] }}</span></h4>
						<p class="vote"><strong>{{ __("Every")}} {{ $product['rating'] }}</strong> {{ __("of buyers enjoyed this product!")}}</p>
						<h5 class="sizes"><strong> {{ __("sizes")}}:</strong>
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
                            <form action="/addToCart" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                <button class="btn btn-primary">{{ __("Cart")}}</button>
                            </form>
                        <a href="/mdt" style="color:black"><button class="btn btn-primary" > {{ __("Go back")}}</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>
