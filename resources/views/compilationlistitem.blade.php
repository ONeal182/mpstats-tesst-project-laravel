@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$data->title}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Артикул</th>
                                <th scope="col">Название товара</th>
                                <th>Информация</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (!empty($productArr))
                                @foreach ($productArr as $product)
                                <tr>
                                  <th scope="row">{{$product->id_product}}</th>
                                      
                                      <td>{{$product->title}}</td>
                                      <td>
                                           Название: {{$product->data->item->name}} <hr>
                                          Цена: @if ($product->data->item->final_price != 0)
                                          {{$product->data->item->final_price}}
                                          @else{
                                            {{$product->data->item->price}}
                                          }
                                          @endif <hr>
                                          <a href="{{$product->data->item->link}}">Ссылка</a><hr>
                                          Бренд: {{$product->data->item->brand}}<hr>
                                      </td>
                                      <td>
                                          <a class="show-data btn btn-primary" href="">Показать  товар</a>
                                          
                                              <pre style="display:none;" class="data-product"><?print_r($product->data)?></pre>
                                              
                                              
                                          
                                      </td>
                                      
                                      <td><a class="btn btn-danger" href="/mpstats/compilation/{{$data->id}}/product/delete/{{$product->id_product}}">Удалить</a>
                                      
                                      </td>
                                  
                                  
                                  
                                </tr>
                              
                                      
                              @endforeach
                                @endif
                                
                            </tbody>
                          </table>
                          <form class="add-compilation" action="/mpstats/product/add" method="post">
                            @csrf
                            <input type="hidden" name="id_comp" value="{{$data->id}}">
                            <div class="place">
                                <div class="form-group d-flex  complitation-input flex-wrap">
                                    <label for="inputAddress">Ссылка на товар</label>
                                    <input name="url[]" type="text" class="form-control col-11" id="" >
                                    <button class="col-1 btn btn-success">+</button>
                                  </div>
                            </div>
                            <input class="btn btn-primary align-self-center" type="submit" value="Добавить в подборку">
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
