<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('Products.store') }}" method="POST">
        @csrf
        <label for="name">name</label>
        <input id='name' type="text"name=" name">


        <label for= "Price">Price</label>
        <input id='Price'type=number name="Price">


        <label for="category">Category</label>
        <select id="category" name="category">
            <option value="Electronics">Electronics</option>
            <option value="Clothes">Clothes</option>
            <option value="Accessories">Accessories</option>
        </select>

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>
        <button type="submit">Save</button>
    </form>
</body>

</html>
