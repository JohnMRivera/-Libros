@extends('plantillas.plantilla')

@section('contenido')

    <main class="main-bibliotecarios">
        <header>
            <h1>Libros</h1>
        </header>
        <div class="main-bibliotecarios__contenido">
            <form class="form-bibliotecarios" action="">
                <header>
                    <h2>Administrativos</h2>
                </header>
                <div class="form-bibliotecarios__contenido">
                    <div class="bibliotecarios-inputs__nombre">
                        <input type="text" placeholder="Nombres">
                        <input type="text" placeholder="Apellido Paterno">
                        <input type="text" placeholder="Apellido Materno">
                    </div>
                    <div class="bibliotecarios-inputs__datos">
                        <input type="text" placeholder="Numero de Empleado">
                    </div>
                    <div class="bibliotecarios-inputs__datos">
                        <input type="text" placeholder="Correo">
                    </div>
                    <div class="bibliotecarios-inputs__datos">
                        <input type="text" placeholder="Número Teléfonico">
                    </div>
                </div>
                <div class="form-bibliotecarios__btn">
                    <button>Registrar</button>
                </div>
            </form>
        </div>
    </main>

@endsection