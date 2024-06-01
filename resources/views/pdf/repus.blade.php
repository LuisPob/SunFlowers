<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div><img src="{{ asset('img/ICONO_SINFONDO.png') }}" alt=""></div>
    <h1>Reporte de Usuarios</h1>
<div class="container">
        <table class="warning">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>E-mail Contacto</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user)
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>