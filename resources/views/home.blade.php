@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Задачи</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>                       

                    @endif

                    
                    <div id="app2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
