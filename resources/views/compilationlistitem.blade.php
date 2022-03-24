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

      <div class="item-block">
        <div class="col-5 item-card">
          <h3 class="item-card__title">О подборке</h3>

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
          <div class="graphs-block__header">
            <div class="graphs-block__header-block">
              <h3 class="graphs-block__title">Сводная информация</h3>
              <div class="graphs-block__question" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <svg width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="#3C435A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M6.81738 6.75C6.99371 6.24875 7.34175 5.82608 7.79985 5.55685C8.25795 5.28762 8.79655 5.1892 9.32027 5.27903C9.84398 5.36886 10.319 5.64114 10.6612 6.04765C11.0034 6.45415 11.1907 6.96864 11.1899 7.5C11.1899 9 8.93988 9.75 8.93988 9.75" stroke="#3C435A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M9 12.75H9.0075" stroke="#3C435A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <div class="graphs-block__header-block">
              <button class="graphs-block__btn__last-mounth mr-16">Прошлый месяц</button>

              <div class="datapicker-wrap mr-16">
                <input type="text" class="datepicker-here" data-min-view="months" data-view="months" data-date-format="M yyyy" />

                <svg class="svg-calendar" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75 3.5C1.75 2.85567 2.27233 2.33333 2.91667 2.33333H11.0833C11.7277 2.33333 12.25 2.85567 12.25 3.5V11.6667C12.25 12.311 11.7277 12.8333 11.0833 12.8333H2.91667C2.27233 12.8333 1.75 12.311 1.75 11.6667V3.5Z" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M9.33325 1.16667V3.5" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M4.66675 1.16667V3.5" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M1.75 5.83333H12.25" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>

              <button class="graphs-block__btn__show-more">
                <svg width="5" height="4" viewBox="0 0 5 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33341 3.16667C2.97775 3.16667 3.50008 2.64433 3.50008 2C3.50008 1.35567 2.97775 0.833333 2.33341 0.833333C1.68908 0.833333 1.16675 1.35567 1.16675 2C1.16675 2.64433 1.68908 3.16667 2.33341 3.16667Z" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg width="5" height="4" viewBox="0 0 5 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33341 3.16667C2.97775 3.16667 3.50008 2.64433 3.50008 2C3.50008 1.35567 2.97775 0.833333 2.33341 0.833333C1.68908 0.833333 1.16675 1.35567 1.16675 2C1.16675 2.64433 1.68908 3.16667 2.33341 3.16667Z" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg width="5" height="4" viewBox="0 0 5 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33341 3.16667C2.97775 3.16667 3.50008 2.64433 3.50008 2C3.50008 1.35567 2.97775 0.833333 2.33341 0.833333C1.68908 0.833333 1.16675 1.35567 1.16675 2C1.16675 2.64433 1.68908 3.16667 2.33341 3.16667Z" stroke="#414BB2" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

              </button>
            </div>

          </div>

          <div id="main" style="width: 100%;height:300px;"></div>


        </div>
      </div>
    </div>
  </div>
  </div>


</section>

<section class="container-fluid my-product-section">
  <div class="container">
    <div class="row">
      <h1 class="my-product__title">Мой товар</h1>

      <div class="my-product">
        <div class="col-2">
          <div class="my-product__wrapper-img">
            <img class="my-product__img" src="/img/unknow.jpg" alt="product-img">
          </div>
        </div>

        <div class="col-3 my-product__props-wrap">
          <div class="my-product__props-container">
            <p class="my-product__title">Название товара</p>

            <div class="my-product__prop">
              <p>Ozon, Wildberries </p>
            </div>

            <div class="my-product__prop">
              <p>Товары для животных/Для кошек/Игрушки</p>
            </div>
          </div>
        </div>

        <div class="col-4 my-product__props-wrap">
          <div class="my-product__props-container">
            <table class="item-card__about-item__info__table">
              <tbody>
                <tr>
                  <th>
                    <p class="right-prop">Цена на полке</p>
                  </th>

                  <th>
                    <p class="prop-value"> 370 &#8381;</p>
                  </th>
                </tr>

                <tr>
                  <th>
                    <p class="right-prop">Входная цена</p>
                  </th>

                  <th>
                    <p class="prop-value"> 170 &#8381;</p>
                  </th>
                </tr>

                <tr>
                  <th>
                    <p class="right-prop">Оценка товара</p>
                  </th>

                  <th>
                    <p class="prop-value raiting-1"> отлично</p> <!-- raiting-1-green, -2-yelloow, -3-red -->
                  </th>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid sales-data">
  <div class="container">
    <div class="row">
      <div class="sales-data__header-block">
        <div class="sales-data__right-block">
          <h1 class="sales-data__title">Товары в подборке</h1>
          <button class="btn btn-unique btn-rounded btn-sm my-0 purple-button">Перейти к подборке</button>
        </div>

        <div class="header-block__filter">
          <div class="dropdown">
            <button class="btn btn-unique btn-rounded btn-sm my-0 dropdown-toggle purple-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.81738 6.75C6.99371 6.24875 7.34175 5.82608 7.79985 5.55685C8.25795 5.28762 8.79655 5.1892 9.32027 5.27903C9.84398 5.36886 10.319 5.64114 10.6612 6.04765C11.0034 6.45415 11.1907 6.96864 11.1899 7.5C11.1899 9 8.93988 9.75 8.93988 9.75" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9 12.75H9.0075" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

              Настроить фильтры
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Действие</a></li>
              <li><a class="dropdown-item" href="#">Другое действие</a></li>
              <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <button class="btn btn-unique btn-rounded btn-sm my-0 dropdown-toggle purple-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.81738 6.75C6.99371 6.24875 7.34175 5.82608 7.79985 5.55685C8.25795 5.28762 8.79655 5.1892 9.32027 5.27903C9.84398 5.36886 10.319 5.64114 10.6612 6.04765C11.0034 6.45415 11.1907 6.96864 11.1899 7.5C11.1899 9 8.93988 9.75 8.93988 9.75" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9 12.75H9.0075" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

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
              <th scope="col"></th>
              <th scope="col">Название</th>
              <th scope="col">Маркетплейс <br> Категория</th>
              <th scope="col">Рейтинг</th>
              <th scope="col" class="col-with-btn">
                <button class="sales-data__sorting-btn">
                  Позиция
                  <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 3L4 1L1 3" stroke="#3C435A" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
              </th>
              <th scope="col">Бренд<br>Продавец</th>
              <th scope="col">Выручка<br>Продаж</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img class="my-product__img" src="/img/unknow.jpg" alt="product-img">
              </td>
              <td class="col-4"> <a class="sales-data__table-link">Кардиган Gun</a></td> <!-- name -->
              <td class="col-2 w-20">
                Ozon
                <!-- marketplace -->
                <p class="txt-gray">Одежда</p> <!-- category -->
              </td>
              <td>5</td> <!-- rating -->
              <td>2</td><!-- position -->
              <td class="col-2">
                Nike
                <!-- brand -->
                <p class="txt-gray">Nike</p><!-- seller -->
              </td>
              <td class="col-1">
                829 170 &#8381;
                <p class="txt-gray">1 998</p>
              </td>
              <td class="col-1"></td><!-- graph -->
            </tr>

            <tr class="empty-tr"></tr>

            <tr>
              <td>
                <img class="my-product__img" src="/img/unknow.jpg" alt="product-img">
              </td>
              <td class="col-4"> <a class="sales-data__table-link">Пирамида игра для кошки / Интерактивная игрушка для кошек баш..</a></td> <!-- name -->
              <td class="col-2 w-20">
                Wildberries
                <!-- marketplace -->
                <p class="txt-gray">Игрушки для животных</p> <!-- category -->
              </td>
              <td>5</td> <!-- rating -->
              <td class="col-1">2</td><!-- position -->
              <td class="col-2">
                Антицарапки
                <!-- brand -->
                <p class="txt-gray">ИП Каплин Анатол...</p><!-- seller -->
              </td>
              <td class="col-1">
                829 170 &#8381;
                <p class="txt-gray">1 998</p>
              </td>
              <td class="col-1"></td><!-- graph -->
            </tr>

            <tr class="empty-tr"></tr>

            <tr>
              <td>
                <img class="my-product__img" src="/img/unknow.jpg" alt="product-img">
              </td>
              <td class="col-4"> <a class="sales-data__table-link">Пирамида игра для кошки / Интерактивная игрушка для кошек баш..</a></td> <!-- name -->
              <td class="col-2 w-20">
                Wildberries
                <!-- marketplace -->
                <p class="txt-gray">Игрушки для животных</p> <!-- category -->
              </td>
              <td>5</td> <!-- rating -->
              <td>2</td><!-- position -->
              <td class="col-2">
                Антицарапки
                <!-- brand -->
                <p class="txt-gray">ИП Каплин Анатол...</p><!-- seller -->
              </td>
              <td class="col-1">
                829 170 &#8381;
                <p class="txt-gray">1 998</p>
              </td>
              <td class="col-1"></td><!-- graph -->
            </tr>

          </tbody>
        </table>

        <button class="btn btn-unique btn-rounded btn-sm my-0 add-new-product purple-button" data-toggle="modal" data-target="#exampleModal">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9 6V12" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6 9H12" stroke="#414BB2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          Добавить товар
        </button>

      </div>



    </div>
  </div>
</div>
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить товар</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="product-link" class="col-form-label">Вставте ссылку на товар</label>
            <input type="text" class="form-control" id="product-link">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Добавить</button>
      </div>
    </div>
  </div>
</div>

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