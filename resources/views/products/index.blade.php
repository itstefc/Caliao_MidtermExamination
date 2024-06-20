<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Book Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} by {{ $product['author'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>