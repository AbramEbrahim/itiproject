@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    {{-- // fastly   => cdn --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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

                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td> <img style="width: 50% ; height: 120px" src="{{$product->image}}"></a></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->availability }}</td>
                    <td>{{ $product->category->name }}</td>
                    
                    <td>
                        
                        <form action="{{ route('product.show', $product->id) }}" method="get">
                            <button>Show</button>
                        </form>

                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>

                        <form action="{{ route('product.update', $product->id) }}">
                            <button type="submit">Update</button>
                        </form>

                    </td> 
                </tr>
            @endforeach

        </tbody>
    </table>

    <br>
    <br>
    <br>
    <a href="{{ route('product.create')}}" ><button class="button">add product</button> </a>

</body>

</html>

@endsection