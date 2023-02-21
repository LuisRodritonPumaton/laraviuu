@extends('/NavBarFooter/navbarfooter')
@section('titulo', 'Cursos')

@section('contenido')
<div class="container align-content-center" style="text-align: center">
    <h1><b>Lista Cursos</b></h1>
    <div class="row justify-items-center mb-3">
        <div class="col-md-2 col-sm-2 offset-10">
            <a href="{{route('curso-registro')}}" class="btn btn-success" ><b><i class="fa-solid fa-plus"></i> Agregar</b></a>  
        </div>
    </div>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th><th>Nombre Curso</th><th>Lugar</th><th>Docente</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->nombreCurso}}</td>
                    <td>{{$curso->lugarCurso}}</td>
                    <td>{{$curso->docente->primerNombre}} {{$curso->docente->segundoNombre}} {{$curso->docente->primerApellido}} {{$curso->docente->segundoApellido}}</td>
                    <td>
                        <form id="{{$curso->id}}" method="POST" action="{{route('eliminar-curso', $curso)}}">
                            @csrf
                            @method('delete')
                        </form>
                        <a href="{{route('curso-actualizacion', $curso->id)}}" type="button" class="btn btn-primary"> <i class="fa-sharp fa-solid fa-pen"></i></a>
                        <button onclick="funcion('{{$curso->id}}')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$cursos->links()}}
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
                    //validador=true;
                    let formulario = document.getElementById(id);
                    formulario.submit();
                }
            });
                
        }
        });
    };
</script>
@endsection