@extends('/NavBarFooter/navbarfooter')
@section('titulo', 'Actualización Curso')

@section('contenido')
<div class="container" style="text-align: center;">
    <div class="row mt-3">
        <div class="col-md-6 col-sm-6 offset-3">
            <div class="card">
                <h5 class="card-header">Actualización Curso</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('actualizar-curso')}}" class="needs-validation" novalidate>

                    @csrf
                    @method('put')

                    <div class="row">
                        
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="hidden" name="id" value="{{$curso->id}}">
                                <input type="text" name="nombreCurso" value="{{$curso->nombreCurso}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Nombre Curso</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="text" name="lugarCurso" value="{{$curso->lugarCurso}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Lugar</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <select class="form-select form-select-lg" name="id_docente" aria-label="Default select example" required>
                                <@foreach ($docentes as $docente)
                                    <option value="{{$docente->id}}"
                                        @if ($curso->docente->id == $docente->id)
                                            selected
                                        @else
                                            
                                        @endif
                                        >{{$docente->primerNombre}} {{$docente->segundoNombre}} {{$docente->primerApellido}} {{$docente->segundoApellido}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 col-sm-4 offset-4">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <b style="margin-left: 5px;">Actualizar</b></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection