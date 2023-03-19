@extends('/NavBarFooter/navbarfooter')
@section('titulo', 'Registro Docente')

@section('contenido')
<div class="container" style="text-align: center;">
    <div class="row mt-3">
        <div class="col-md-6 col-sm-6 offset-3">
            <div class="card">
                <h5 class="card-header">Registro Docente</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('registrar-docente')}}" class="needs-validation" novalidate>

                    @csrf

                    <div class="row">
                        
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="text" name="primerNombre" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Primer Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="text" name="segundoNombre" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Segundo Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="text" name="primerApellido" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Primer Apellido</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="text" name="segundoApellido" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Segundo Apellido</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="text" name="especialidad" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Especialidad</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" id="marginTop">
                            <div class="form-floating">
                                <input type="date" name="fechaNacimiento" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                <label for="floatingInputGrid">Fecha Nacimiento</label>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 col-sm-4 offset-4">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <b style="margin-left: 5px;">Registrar</b></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection