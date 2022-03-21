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

                        <form class="" action="/mpstats/compilation/add" method="post">
                            @csrf
                            <div class="form-row  row d-flex flex-column">
                                <input type="text" class="mb-3" placeholder="Название подборки" name="title" id="">
                                <div class="add-compilation col-12 d-flex row mb-3">
                                    <div class="d-flex row complitation-input">
                                        <input class="col-9" placeholder="Ссылка на товар" type="text" multiple
                                            name="url[]" id="">
                                        <button class="offset-1 col-2">Добавить</button>
                                    </div>
                                </div>





                                <input class="col-3 align-self-center" type="submit" value="Добавить подборка">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
