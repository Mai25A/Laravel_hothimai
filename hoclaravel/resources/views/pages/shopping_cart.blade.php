@extends('layout.master')
@section('banner')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Shopping Cart</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Shopping Cart</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
@section('content')
	<div class="container">
		<div id="content">

			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Image</th>

							<th class="product-name">Product</th>
							<th class="product-price">Price</th>

							<th class="product-quantity">Qty.</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
                        {{-- {{ dd(Session('cart')->totalQty) }} --}}
                        @foreach($productCarts as $product)
                        {{-- {{ dd($product['item']['id']) }} --}}
                        <tr class="cart_item">
                            <td>
                                <img style="width: 100px" src="/source/image/product/{{ $product['item']['image'] }}" alt="">
                            </td>
                            <td class="product-name">
                                <div class="media">
                                    <img class="pull-left" src="assets/dest/images/shoping1.jpg" alt="">
                                    <div class="media-body">
                                        <p class="font-large table-title">{{ $product['item']['name'] }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="product-price"> 
                                @if($product['new_price']>0)
                                    {{-- // $giohang['price'] = $item->promotion_price * $giohang['qty']; --}}
                                    <span class="amount">${{ $product['new_price'] }}</span>
                                @else
                                    <span class="amount">${{ $product['price'] }}</span>
                                @endif
                            </td>

                            <td class="product-quantity">
                                <select name="product-qty" class="quantity" data-price="@if($product['new_price']>0)
                                    {{ $product['new_price'] }}
                                @else
                                    {{ $product['price'] }}
                                @endif" data-product-id="{{ $product['item']['id'] }}">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ $i == $product['qty'] ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>

                            <td class="product-subtotal">
                                <input type="hidden" class="price" value="{{ $product['price'] }}" readonly>
                                <span class="subtotal-amount">
                                    @if($product['new_price']>0)
                                        {{ $product['qty'] * $product['new_price'] }}
                                    @else
                                        {{ $product['qty'] * $product['price'] }}
                                    @endif
                                </span>
                            </td>

                            <td class="product-remove">
                                <a href="{{ route('delete-cart', ['id' => $product['item']['id']]) }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <script>
                    document.querySelectorAll('.quantity').forEach(function(element) {
                        element.addEventListener('change', function() {
                            const quantity = parseInt(this.value);
                            const price = parseFloat(this.getAttribute('data-price'));
                            const subtotalElement = this.closest('.cart_item').querySelector('.subtotal-amount');
                            const subtotal = quantity * price;
                            subtotalElement.textContent = subtotal.toFixed();

                            // Cập nhật tổng giá trị
                            updateTotal();

                        });
                    });

                    function updateTotal() {
                        const subtotalElements = document.querySelectorAll('.subtotal-amount');
                        let total = 0;
                        subtotalElements.forEach(function(element) {
                            total += parseFloat(element.textContent);
                        });
                        document.getElementById('total').textContent = total.toFixed(0);
                    }
                    </script>



				</table>
				<!-- End of Shop Table Products -->
                <a href="" class="btn-checkout">
                    <button style="float:right; border-radius: 10px; border: none; padding: 10px 20px; background-color:darkgreen;color:white">Go to Checkout</button>
                </a>
			</div>


	</div> <!-- .container -->

@endsection