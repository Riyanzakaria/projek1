    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <style>
        body { font-family: sans-serif; padding: 40px; }
        .container { max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <h2>{{ $product['name'] }} (ID: {{ $product['id'] }})</h2>
        <h3>Price: {{ $product['price'] }}</h3>
        <p>{{ $product['description'] }}</p>
    </div>
</body>
</html>