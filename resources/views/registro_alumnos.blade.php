@extends('plantillas.plantilla')

@section('contenido')

    <main class="main-alumnos">
        <header>
            <h1>Libros</h1>
        </header>
        <div class="main-alumnos__contenido">
            <form class="form-alumnos" action="">
                <header>
                    <h2>Alumnos</h2>
                </header>
                <div class="form-alumnos__contenido">
                    <div class="alumnos-inputs__nombre">
                        <input type="text" placeholder="Nombres">
                        <input type="text" placeholder="Apellido Paterno">
                        <input type="text" placeholder="Apellido Materno">
                    </div>
                    <div class="alumnos-inputs__datos">
                        <input type="text" placeholder="Matricula">
                    </div>
                    <div class="alumnos-inputs__datos">
                        <input type="text" placeholder="Correo">
                    </div>
                    <div class="alumnos-inputs__datos">
                        <input type="text" placeholder="Número Teléfonico">
                    </div>
                    <div class="alumnos-inputs__datos">
                        <input type="text" placeholder="Carrera">
                    </div>
                </div>
                <div class="form-alumnos__btn">
                    <button>Registrar</button>
                </div>
            </form>
        </div>
    </main>

@endsection