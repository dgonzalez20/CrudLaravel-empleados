Plantilla para ver la lista de empleados en plantilla
<table class="table table-light" >
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen </th>
            <th>Nombre Empleado </th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido </th>
            <th>Correo </th>
            <th>Acciones </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            
        
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->Imagen }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Primer_Apellido}}</td>
            <td>{{ $empleado->Segundo_Apellido }}</td>
            <td>{{ $empleado->Correo_Electronico }}</td>
            <td>Editar |

            <form action="{{ url('/empleado/' .$empleado->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm ('Cuidado estas borrando un empleado, estass seguro')" 
            value="Borar Empleado">

            </form>
            </td>   
        </tr>
        @endforeach 
    </tbody>
</table>

