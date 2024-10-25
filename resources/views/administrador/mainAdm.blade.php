<x-app-layout>
    <table>Lista de Usuarios</table>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rold</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr>
                <th>{{$user->name}}</th>
                <th>{{$user->email}}</th>
                <th>{{$user->rols_id}}</th>
                </tr>            
            @endforeach
        </tbody>
    </table>
</x-app-layout>