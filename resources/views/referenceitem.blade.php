@extends('layouts.app')

@section('content')
    <div class="container header-container">
        <div class="row">
            <div class="col-1 logo-wrapper">
                <img class="header-logo" src="img/logo-header.png" alt="logo">
            </div>
            <div class="col-6">
                <div class="header-menu">
                    <a href="#" class="header-menu__item active">Главная</a>
                    <a href="#" class="header-menu__item">Мои подборки</a>
                    <a href="#" class="header-menu__item">Ozon</a>
                    <a href="#" class="header-menu__item">Wildberries</a>
                </div>

                <div class="breadcrumbs">
                    <a href="#" class="breadcrumbs-wrapper">
                        Главная
                    </a>
                    <a href="#" class="breadcrumbs-wrapper">
                        Мои подборки
                    </a href="#">
                    <a href="#" class="breadcrumbs-wrapper">
                        Подборка 1
                    </a>
                    <a href="#" class="breadcrumbs-wrapper">
                        Товар 1
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="left-block_wrapper">
                    <div class="btn-wrapper">
                        <input class="custom-btn" type="button" name="" value="Проанализировать товар">
                    </div>
                    <div class="user-block">
                        <div class="user-block__foto">
                            <img src="img/avatar.png" alt="avatar">
                        </div>
                        <a href="#" class="user-block__name">
                            Username
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid main-block">
        <div class="container">
            <div class="row">
                <h1 class="main-block__title">Товар 1</h1>


                <div class="item-card__filter-block">
                    <p class="filter-label">Период</p>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                    <div class="col-4 item-card">
                        <h3 class="item-card___title">О товаре</h3>

                        <div class="item-card__about-item">
                            <div class="item-card__about-item__img">
                                <img src="{{ $photos[0]->f }}" alt="product-img">
                            </div>

                            <div class="item-card__about-item__info">
                                <p>{{ $item['name'] }}</p>
                                <p><a href="#">{{ $item['brand'] }}</a></p>
                                <p><a href="#">{{ $item['seller'] }}</a></p>
                                <p>Цена: {{ $item['final_price'] }}р</p>
                                <p>До скидки: {{ $item['price'] }}р</p>
                            </div>
                        </div>
                        <div class="collections-block">
                            <p class="collections-block__title">Подборки</p>

                            <div class="collections-block__items">
                                <input type="button" class="collections-block__items__item" value="Подборка 1">
                                <input type="button" class="collections-block__items__item" value="Подборка 2">
                                <input type="button" class="collections-block__items__item" value="+">
                            </div>
                            <div class="collections-block__props">
                                <p class="collections-block__props__item">SKU: {{ $item['id'] }}</p>
                                <p class="collections-block__props__item">Наличие: {{$itemsales}}</p>
                                <p class="collections-block__props__item">Рейтинг: <span
                                        class="red-txt">{{ $item['rating'] / 100 }}</span></p>
                                <p class="collections-block__props__item">Ссылка: <a href="{{ $item['link'] }}">url</a>
                                </p>
                            </div>

                        </div>

                        <div class="item-card__text-wrapper">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </div>
                    </div>

                    <div class="col-7 graphs-block">
                        <h3 class="graphs-block___title">Сводная информация</h3>

                        <div class="graphs-block__filter">
                            <div class="form-check form-switch">
                                <label class="form-check-label"  for="switchSales">Продажи</label>
                                <input class="form-check-input" data-info="sale" type="checkbox" id="switchSales">
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="switchRemains">Остаток</label>
                                <input class="form-check-input" data-info="remains" type="checkbox" id="switchRemains">
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="switchPrice">Цена</label>
                                <input class="form-check-input" data-info="price"  type="checkbox" id="switchPrice">
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="switchDiscount">Цена со скидкой</label>
                                <input class="form-check-input"  data-info="discount" type="checkbox" id="switchDiscount">
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="switchRevenue">Выручка</label>
                                <input class="form-check-input" data-info="revenue" type="checkbox" id="switchRevenue">
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Рейтинг</label>
                                <input class="form-check-input" data-info="reit" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </div>

                        <div id="myfirstchart" style="height: 250px;"></div>

                        <div class="graphs-block__info">
                            <div class="graphs-block__info__item">
                                <div class="graphs-block___info__value">{{$allCash}}</div>
                                <p>Выручка за период</p>
                            </div>
                            <div class="graphs-block__info__item">
                                <div class="graphs-block___info__value">{{$allsales}}</div>
                                <p>Продано единиц</p>
                            </div>
                            <div class="graphs-block__info__item">
                                <div class="graphs-block___info__value">{{$allFinalPrice}}</div>
                                <p>Средняя цена со скидкой</p>
                            </div>
                            <div class="graphs-block__info__item">
                                <div class="graphs-block___info__value">{{$allReit}}</div>
                                <p>Средний рейтинг</p>
                            </div>
                        </div>
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
                            <img class="my-product__img" src="{{ $photos[0]->f }}" alt="product-img">
                        </div>
                    </div>
                    <div class="col-3 my-product__props-wrap">
                        <div class="my-product__props-container">
                            <p class="my-product__title">Название товара</p>

                            <div class="my-product__prop">
                                <p class="right-prop">Маркетплейс: </p>
                                <p>{{$host_name}}</p>
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
                                <p class="my-product__title right-prop">{{$item['name']}}</p>
                                <p class="my-product__title"> 99</p>
                            </div>
                            <div class="my-product__prop">
                                <p class="my-product__title right-prop">{{$item['first_name']}}</p>
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
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Настроить фильтры
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Действие</a></li>
                                <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
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



                            @foreach ($salse as $sale)
                            
                            
                            
                                <tr>
                                    <td>{{$sale->data}}</td>
                                    <td>{{$sale->sales}}</td>
                                    <td>{{$sale->balance}}</td>
                                    <td>{{$sale->price}}</td>
                                    <td>{{$sale->final_price}}</td>
                                    <td>{{$sale->final_price * $sale->sales}}</td>
                                    <td>{{$sale->rating}}</td>
                                    <td>
                                        Бестеллер
                                        {{-- {{$sale->is_bestseller}} --}}
                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
@endsection
