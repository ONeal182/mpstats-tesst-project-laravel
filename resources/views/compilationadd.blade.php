@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="/mpstats/compilation/add" method="get">
                        @csrf
                        <div class="form-row  row d-flex flex-column">
                        <input type="text" class="mb-3" placeholder="Название подборки" name="title" id="">
                        <div class="col-12 row mb-3">
                            <input class="col-10" type="text" multiple name="url" id="">
                        </div>
                        

                        
                        
                       
                        <input class="col-3 align-self-center" type="submit" value="Найти">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection