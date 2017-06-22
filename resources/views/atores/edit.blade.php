@extends('layouts.site')

@section('titulo','Edição de Atores')

@section('content')

            <h1 class="page-header">Edição de Atores</h1>

            <div class="col-md-6">
                @include('atores.partials.form-edit') 

            </div>
        </div>
    </div>

@endsection