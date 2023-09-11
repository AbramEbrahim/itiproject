<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
  
  <form action="{{ route('product.edit', $product->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ $product->name }}"  required>
        <input type="text" name="price" value="{{ $product->price }}" required>
        <input type="text" name="availability" value="{{ $product->availability }} required">
        <input type="text" name="description" value="{{ $product->description }}">
        <input type="text" name="category_id" value="{{ $product->category_id }}" >
        <input type="file" name="image"> 

        <input type="submit">

    </form>
    <td><a href="/adminpage"><button>go back</button> </a></td>

  </body>

</html>
