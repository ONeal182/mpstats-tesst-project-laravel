@extends('layouts.app')

@section('content')
<section class="container-fluid main-block">
  <div class="container">
    <div class="row">
      <div class="main-block__header">
        <h1 class="main-block__title">Пирамидки для кошек</h1>
        <form class="form-inline">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.25 14.25C11.5637 14.25 14.25 11.5637 14.25 8.25C14.25 4.93629 11.5637 2.25 8.25 2.25C4.93629 2.25 2.25 4.93629 2.25 8.25C2.25 11.5637 4.93629 14.25 8.25 14.25Z" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M15.75 15.75L12.4875 12.4875" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <input type="text" placeholder="Поиск по товару или подборке" aria-label="Search">
          <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Искать</button>
        </form>
      </div>


      <div class="item-card__filter-block">
        <p class="filter-label">Период</p>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            c 23.10.2021 по 23.10.2021
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Действие</a></li>
            <li><a class="dropdown-item" href="#">Другое действие</a></li>
            <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
          </ul>
        </div>
      </div>

      <div class="item-block">
        <div class="col-5 item-card">
          <h3 class="item-card___title">О подборке</h3>

          <div class="item-card__about-item">
            <div class="item-card__about-item__info">
              <table class="item-card__about-item__info__table">
                <tbody>
                  <tr>
                    <th>
                      Всего товаров в подборке
                    </th>
                    <th>
                      8
                    </th>
                  </tr>
                  <tr>
                    <th>
                      Всего продано на сумму
                    </th>
                    <th>
                      1 204 232 &#8381;
                    </th>
                  </tr>
                  <tr>
                    <th>
                      Средняя стоимость товаров
                    </th>
                    <th>
                      596 &#8381;
                    </th>
                  </tr>
                  <tr>
                    <th>
                      Всего продано единиц
                    </th>
                    <th>
                      2 713
                    </th>
                  </tr>
                  <tr>
                    <th>
                      Продавцов
                    </th>
                    <th>
                      8
                    </th>
                  </tr>
                  <tr>
                    <th>
                      Брендов
                    </th>
                    <th>
                      8
                    </th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-7 graphs-block">
          <h3 class="graphs-block___title">Сводная информация</h3>

          <div id="myfirstchart" style="height: 250px;"></div>


        </div>
      </div>
    </div>
  </div>
  </div>


</section>

<section class="container-fluid my-product-section">
  <div class="container">
    <div class="row">
      <h1 class="main-block__title">Мой товар</h1>

      <div class="my-product">
        <div class="col-2">
          <div class="my-product__wrapper-img">
            <img class="my-product__img" src="img/unknow.jpg" alt="product-img">
          </div>
        </div>
        <div class="col-3 my-product__props-wrap">
          <div class="my-product__props-container">
            <p class="my-product__title">Название товара</p>

            <div class="my-product__prop">
              <p class="right-prop">Маркетплейс: </p>
              <p>Тест</p>
            </div>
            <div class="my-product__prop">
              <p class="right-prop">Категория: </p>
              <p>Тест</p>
            </div>
            <div class="my-product__prop">
              <p class="right-prop">Категория: </p>
              <p>Тест</p>
            </div>
          </div>
        </div>
        <div class="col-4 my-product__props-wrap">
          <div class="my-product__props-container">
            <div class="my-product__prop">
              <p class="my-product__title right-prop">Название товара</p>
              <p class="my-product__title"> 99</p>
            </div>
            <div class="my-product__prop">
              <p class="my-product__title right-prop">Название товара</p>
              <p class="my-product__title"> 99</p>
            </div>
            <div class="my-product__prop">
              <p class="my-product__title right-prop">Название товара</p>
              <p class="my-product__title green-txt"> отлично</p>
            </div>
          </div>
        </div>
        <div class="col-3 my-product__btn-wrap">
          <input class="custom-btn" type="button" value="Перейти к товару">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid sales-data">
  <div class="container">
    <div class="row">
      <div class="sales-data__header-block">
        <h1 class="main-block__title">Данные о продажах</h1>

        <div class="header-block__filter">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Настроить фильтры
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Действие</a></li>
              <li><a class="dropdown-item" href="#">Другое действие</a></li>
              <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Настроить поля
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Действие</a></li>
              <li><a class="dropdown-item" href="#">Другое действие</a></li>
              <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="sales-data__wrapper">
        <table class="table sales-data__table">
          <thead>
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Продажи</th>
              <th scope="col">Остаток</th>
              <th scope="col">Цена</th>
              <th scope="col">Цена со скидкой</th>
              <th scope="col">Сумма</th>
              <th scope="col">Рейтинг</th>
              <th scope="col">Бестеллер</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>21.11.21</td>
              <td>300</td>
              <td>12</td>
              <td>1500</td>
              <td>1200</td>
              <td>9888</td>
              <td>4,5</td>
              <td>Бестеллер</td>
            </tr>
            <tr>
              <td>21.11.21</td>
              <td>300</td>
              <td>12</td>
              <td>1500</td>
              <td>1200</td>
              <td>9888</td>
              <td>4,5</td>
              <td>Бестеллер</td>
            </tr>
            <tr>
              <td>21.11.21</td>
              <td>300</td>
              <td>12</td>
              <td>1500</td>
              <td>1200</td>
              <td>9888</td>
              <td>4,5</td>
              <td>Бестеллер</td>
            </tr>
            <tr>
              <td>21.11.21</td>
              <td>300</td>
              <td>12</td>
              <td>1500</td>
              <td>1200</td>
              <td>9888</td>
              <td>4,5</td>
              <td>Бестеллер</td>
            </tr>
          </tbody>
        </table>
      </div>



    </div>
  </div>
</div>
@endsection


<!-- <div class="container">
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
                  Название: {{$product->data->item->name}}
                  <hr>
                  Цена: @if ($product->data->item->final_price != 0)
                  {{$product->data->item->final_price}}
                  @else{
                  {{$product->data->item->price}}
                  }
                  @endif
                  <hr>
                  <a href="{{$product->data->item->link}}">Ссылка</a>
                  <hr>
                  Бренд: {{$product->data->item->brand}}
                  <hr>
                </td>
                <td>
                  <a class="show-data btn btn-primary" href="">Показать товар</a>

                  <pre style="display:none;" class="data-product"><? print_r($product->data) ?></pre>



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
                <input name="url[]" type="text" class="form-control col-11" id="">
                <button class="col-1 btn btn-success">+</button>
              </div>
            </div>
            <input class="btn btn-primary align-self-center" type="submit" value="Добавить в подборку">
          </form>
        </div>
      </div>
    </div>
  </div>
</div> -->