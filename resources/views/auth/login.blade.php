@extends('layouts.app')

@section('content')

<b-container>
  <b-row align-h="center"> 
    <b-col cols="8">
        <b-card title="Iniciar Sesion">
            <b-alert show>Error en autentificacion, Intentelo de nuevo</b-alert>

            <b-form method="POST" action="{{ route('login') }}">
               @csrf
            <b-form-group 
                    label="Correo Electronico:"
                    label-for="email"
                    >
            <b-form-input id="exampleInput1"
                     type="email"
                     name="email"
                     value="{{ old('email') }}" required autofocus
                     placeholder="enalbo@cbn.com">
            </b-form-input>
            </b-form-group>

            <b-form-group 
                    label="Contraseña:"
                    label-for="password">
            <b-form-input
                     type="password"
                     name="password"
                     value="{{ old('email') }}" required>
            </b-form-input>
            </b-form-group>

            <b-button type="submit" variant="primary">
                Ingresar 
            </b-button>
            


                        

                   
            </b-form>
        </b-card>
    </b-col>
  </b-row> 
</b-container>
@endsection
