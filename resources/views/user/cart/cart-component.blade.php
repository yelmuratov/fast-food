<div>
    <style>
        /* Global Styling */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5; /* Light background for a modern look */
            color: #333; /* Dark text for contrast */
        }

        /* Container Styling */
        .cart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        /* Left Section */
        .cart-left {
            flex: 3;
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Right Section */
        .cart-right {
            flex: 1;
            background: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        /* Product Card */
        .product {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 8px;
            background: #fafafa;
            border: 1px solid #ddd;
        }

        .product img {
            width: 60px;
            height: auto;
            border-radius: 8px;
            margin-right: 15px;
        }

        .product-details {
            flex: 2;
            display: flex;
            align-items: center;
        }

        .product-info {
            flex: 1;
        }

        .product-price {
            flex: 1;
            text-align: right;
        }

        /* Quantity Controls */
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-controls button {
            background: #6200ea;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .quantity-controls button:hover {
            background: #4500b5;
        }

        /* Summary Section */
        .summary h3 {
            margin-bottom: 20px;
        }

        .summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            background: #28a745;
            color: #fff;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        .checkout-btn:hover {
            background: #218838;
        }

        .delivery-note {
            font-size: 0.9rem;
            margin-top: 20px;
            color: #555;
        }
    </style>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping Cart</title>
    </head>

    <body>
        <div class="cart-container">
            <!-- Left Section -->
            <div class="cart-left">
                <div class="header">
                    <h2>Review Your Cart</h2>
                    <a href="/user-page" class="btn btn-secondary" wire:navigate>Back to Menu</a>
                </div>
                @if (!session('foods'))
                <p>Your cart is empty. Add some delicious items!</p>
                @else
                @foreach (session('foods') as $food)
                <div class="product">
                    <div class="product-details">
                        <img src="{{ asset('storage/' . $food['image']) }}" alt="{{ $food['name'] }}">
                        <div>
                            <h5>{{ $food['name'] }}</h5>
                        </div>
                    </div>
                    <div class="quantity-controls">
                        <button wire:click="decrementQuantity({{ $food['id'] }})">-</button>
                        <span>{{ $food['quantity'] }}</span>
                        <button wire:click="incrementQuantity({{ $food['id'] }})">+</button>
                    </div>
                    <div class="product-price">
                        <p><strong>${{ $food['price'] }}</strong></p>
                        <p class="text-muted"><s>${{ $food['price'] + 20 }}</s></p>
                        <button wire:click="removeFromCart({{ $food['id'] }})" class="btn btn-sm btn-danger">Remove</button>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <!-- Right Section -->
            <div class="cart-right">
                <div class="summary">
                    <h3>Order Summary</h3>
                    @foreach (session('foods') as $food)
                    <p>{{ $food['name'] }} x{{ $food['quantity'] }} <strong>${{ number_format($food['total_price'], 2) }}</strong></p>
                    @endforeach
                    <p>Total: <strong>${{ number_format($superTotal, 2) }}</strong></p>
                    <p>Discount: <span class="text-success">- ${{ number_format($superTotal * 0.2, 2) }}</span></p>
                    <p><strong>Payable Amount: ${{ number_format($superTotal - ($superTotal * 0.2), 2) }}</strong></p>
                    <button wire:click="saveOrder" class="checkout-btn">Checkout</button>
                </div>
                <div class="delivery-note">
                    <p>Free delivery for orders above $25!</p>
                </div>
            </div>
        </div>
    </body>

    </html>
</div>
