<x-app-layout>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        thead {
            background-color: #007BFF; /* Color del encabezado */
            color: white;
        }
        h1{
            color: white;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tbody tr {
            background-color: #f2f2f2; /* Color de filas alternas */
        }
        tbody tr:hover {
            background-color: #e7f1ff; /* Efecto hover */
        }
    </style>
    <h1>Lista de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <td>
                        <form action="{{route('roles.update',$user->id)}} "method="POST">
                            @csrf
                            <select name="rols_id" onchange="this.form.submit()">
                                @foreach ($roles as $role )
                                    <option value="{{$role->id}}"{{$user->rols_id == $role->id ? 'selected' : ""}}>
                                        {{$role->nombre}}
                                    </option>                            
                                @endforeach
                            </select>
                        </form>
                    </td>
                </tr>            
            @endforeach
        </tbody>
    </table>
</x-app-layout>