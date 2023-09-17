<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>product Name</th>
                <th>product price</th>
                <th>product availablity</th>
                <th>product description</th>
                <th>product category_id</th>
                <th>product image</th>
                <th>product</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <form  action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <td><input type="text" name="name" placeholder="product_name"> </td>
                    <td><input type="text" name="price" placeholder="product_price"></td>
                    <td><input type="text" name="availability"placeholder="product_availability"></td>
                    <td><input type="text" name="description" placeholder="description"></td>
                    <td><input type="text" name="category_id" placeholder="category_id"></td>
                    <td><input type="file" name="image" > </td>
                    <td><input type="submit"></td> 
                </form>
                </tr>
            </tbody>
        </table>

    <a href="/adminpage"><button
            style="width: 20%; margin: 30px;  height: 40px; border-radius: 10px; background-color: rgb(0, 0, 0); color: white ">go
            back</button> </a>
</body>

</html>
