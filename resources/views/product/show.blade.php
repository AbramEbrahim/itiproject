<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <a href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></a>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>product image</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Category Name</th>



            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->name }}</td>
                <td> <img style="width: 50% ; height: 120px" src="{{$product->image}}"></a></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->availability }}</td>
                <td>{{ $product->category->name }}</td>
            </tr>

        </tbody>
    </table>

    <a href="/adminpage" ><button style="width: 20%; margin: 30px;  height: 40px; border-radius: 10px; background-color: rgb(0, 0, 0); color: white ">go back</button> </a>


</body>
</html> 