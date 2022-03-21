<?php

namespace App\Http\Controllers\Compilation;

use App\Http\Requests\StoreCompilationRequest;
use App\Http\Requests\UpdateCompilationRequest;
use App\Models\Compilation;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MPStatsController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CompilationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('compilation');
    }

    public function view($id)
    {

        $data = Compilation::where('id', $id)->get()[0];
        if (!empty($id_product)) {
            $id_product = $data->id_product;
            $id_product = json_decode($id_product);

            $productArr = [];
            $productsController = (new  ProductController);
            foreach ($id_product as $id) {
                $productArr[] = $productsController->getProductId($id);
            }
            foreach ($productArr as $key => $product) {
                $productArr[$key]->data = json_decode($product->data);
            }
        }else{
            $productArr = null;
        }

        // dd($productArr[0]->data);
        return view('compilationlistitem', ['data' => $data, 'productArr' => $productArr]);
    }
    public function addView()
    {
        if (Auth::id()) {
            return view('compilationadd');
        } else {
            echo 'Авторизуйтесь на сайте';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::id()) {
            $post = $request->all();
            $mpstats = (new MPStatsController);
            $productsController = (new  ProductController);
            $product = [];
            $productId = [];
            if ($post['url'][0] != null) {


                foreach ($post['url'] as $key => $url) {
                    $idItem = $mpstats->parseUrl($url);

                    $hostName = $mpstats->getHostUrl($url);

                    $hostName = ($hostName == 'www.wildberries.ru') ? 'wb' : 'oz';
                    $itemArray = $mpstats->getProduct($hostName, 'item', $idItem);

                    $product[] = $itemArray;
                    $productId[] = $idItem;
                }
                $product = json_encode($product);
                $productId = json_encode($productId);

                $productsController->create($product);
            } else {
                $product = null;
                $productId = null;
            }


            Compilation::insert(['title' => $post['title'], 'id_product' => $productId, 'data' => $product, 'user_id' => Auth::id()]);
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompilationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompilationRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function viewList(Compilation $compilation)
    {
        $data = Compilation::where('user_id', Auth::id())->get();
        $test = [];
        foreach ($data as $key => $value) {
            $data[$key]->data = json_decode($value->data);
        }
        // dd($data[0]->data[0]);
        return view('compilationlist', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function edit(Compilation $compilation)
    {
        //
    }

    public function deleted($idDelet)
    {
        Compilation::where('id', $idDelet)->delete();
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompilationRequest  $request
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompilationRequest $request, Compilation $compilation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compilation $compilation)
    {
        //
    }
}
