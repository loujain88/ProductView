<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col">Name</th>
              <th scope="col">Price</th>
            <th scope="col">Category</th>
           <th scope="col">Created At</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($Products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name ?? 'No Category' }}</td>
                    <td>{{ $product->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
<a href ={{ route('Products.create') }}>add new product</a><br>

</html>
