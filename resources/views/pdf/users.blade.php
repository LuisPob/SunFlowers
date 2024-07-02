<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
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
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Fecha de creación</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>
                    <img src="{{ public_path('img/team-1.jpg') }}" class="avatar" alt="image">
                    {{ $user->username }}
                </td>
                <td>Admin</td>
                <td>22/03/2022</td>
                <td>Editar | Eliminar</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
