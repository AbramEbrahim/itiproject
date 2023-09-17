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
                <th>update Name</th>
                <th>update price</th>
                <th>update Product availablity</th>
                <th>update Product description</th>
                <th>update Product category_id</th>
                <th>update Product image</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form action="{{ route('product.edit', $product->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <td><input type="text" name="name" value="{{ $product->name }}" required></td>
                    <td><input type="text" name="price" value="{{ $product->price }}" required></td>
                    <td><input type="text" name="availability" value="{{ $product->availability }}" required> </td>
                    <td><input type="text" name="description" value="{{ $product->description }}"></td>
                    <td><input type="text" name="category_id" value="{{ $product->category_id }}"></td>
                    <td><input type="file" name="image"> </td>
                    <td><input type="submit" value="update"></td>
                </form>
            </tr>
        </tbody>
    </table>

    <a href="/adminpage"><button
            style="width: 20%; margin: 30px;  height: 40px; border-radius: 10px; background-color: rgb(0, 0, 0); color: white ">go
            back</button> </a>

</body>

</html>
