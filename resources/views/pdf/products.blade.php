<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .img-fluid {
            width: 90px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Lista de Productos</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ public_path('storage/images/' . $product->image_path) }}" alt="{{ $product->name }}" class="img-fluid rounded"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
