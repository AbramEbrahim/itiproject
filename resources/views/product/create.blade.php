<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <input type="text" name="name"        placeholder="product_name">
        <input type="text" name="price"       placeholder="product_price">
        <input type="text" name="availability"placeholder="product_availability">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="category_id" placeholder="category_id">

        <input type="submit">


    </form>
</body>

</html>
