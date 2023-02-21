@extends('/NavBarFooter/navbarfooter')
@section('titulo', 'Docentes')

@section('contenido')
<div class="container align-content-center" style="text-align: center">
    <h1>Lista Docentes</h1>
    <div class="row justify-items-center mb-3">
        <div class="col-md-2 col-sm-2 offset-10">
            <a href="{{route('docente-registro')}}" class="btn btn-success" ><b><i class="fa-solid fa-plus"></i> Agregar</b></a>  
        </div>
    </div>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th><th>Nombres</th><th>Apellidos</th><th>Especialidad</th><th>Fecha de Nacimiento</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
                <tr>
                    <td>{{$docente->id}}</td>
                    <td>{{$docente->primerNombre}} {{$docente->segundoNombre}}</td>
                    <td>{{$docente->primerApellido}} {{$docente->segundoApellido}}</td>
                    <td>{{$docente->especialidad}}</td>
                    <td>{{$docente->fechaNacimiento}}</td>
                    <td>
                        <a href="{{route('docente-actualizacion', $docente->id)}}" type="button" class="btn btn-primary"> <i class="fa-sharp fa-solid fa-pen"></i></a>
                        <button onclick='funcion("{{$docente->id}}")' type="button" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>
                        <form id ="{{$docente->id}}" method="POST" action="{{route('eliminar-docente', $docente)}}">
                            @csrf
                            @method('delete')
                            
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$docentes->links()}}
</div>
<script>
    
    function funcion(id){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            ).then((result2)=>{
                if(result2.isConfirmed){
                    let formulario = document.getElementById(id);
                    formulario.submit();
                }
            });
                
        }
        });
    };
</script>
@endsection