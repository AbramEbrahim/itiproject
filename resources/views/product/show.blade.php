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
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Actions</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->availability}}</td>
                <td><a href="/adminpage"><button>go back</button> </a></td>
            </tr>

        </tbody>
    </table>

</body>
</html> 