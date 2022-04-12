@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a style="margin-bottom: 10px" class="" href="/mpstats/compilation/list">Назад</a>
                <br>
                <div class="card">
                    
                    <div class="card-header">Создать новую подборку</div>

                    <div class="card-body">
                        
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form class="add-compilation" action="/mpstats/compilation/add" method="post">
                            @csrf
                            
                            <div class="form-row  row d-flex flex-column">
                                <div class="form-group">
                                    <label for="inputEmail4">Название подборки</label>
                                    <input name="title" type="text" class="form-control" id="" >
                                  </div>
                                  
                                  <div class="place">
                                    <div class="form-group d-flex  complitation-input flex-wrap">
                                        <label for="inputAddress">Ссылка на товар</label>
                                        <input name="url[]" type="text" class="form-control col-11" id="" >
                                        <button class="col-1 btn btn-success">+</button>
                                      </div>
                                </div>
                                





                                <input class="btn btn-primary col-3 align-self-center" type="submit" value="Добавить подборку">
                            </div>
                            
                                
                              
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
