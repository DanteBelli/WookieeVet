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