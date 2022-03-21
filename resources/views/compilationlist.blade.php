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
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">Название товаров</th>
                                    <th scope="col" style="    display: flex;
                                    justify-content: flex-end;">
                                        <a class="btn btn-success" href="/mpstats/compilation/add">Новая подборка</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$value->title}}</td>
                                        <td>
                                            {{-- {{$value->data[0]->item->id}} --}}
                                            @if ($value->data != null)
                                            @foreach ($value->data as $product)
                                            {{$product->item->name}}<br>
                                        @endforeach
                                            @endif
                                            
                                        </td>
                                        <td class="d-flex" ><a class="btn btn-primary" href="/mpstats/compilation/{{$value->id}}">Посмотреть</a>
                                        <a class="btn btn-danger "href="/mpstats/compilation/delete/{{$value->id}}">Удалить</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
