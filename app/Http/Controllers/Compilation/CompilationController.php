<?php

namespace App\Http\Controllers\Compilation;

use App\Http\Requests\StoreCompilationRequest;
use App\Http\Requests\UpdateCompilationRequest;
use App\Models\Compilation;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MPStatsController;

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

    public function view($id){
        $data = Compilation::where('id', $id)->get()[0];
        ?><pre>Имя подборки: <?print_r($data->title)?></pre><?
        ?><pre>ID товаров: <?print_r($data->id_product)?></pre><?
        ?><pre><?print_r(json_decode($data->data))?></pre><?
        dd();
    }
    public function addView()
    {
        return view('compilationadd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = $request->all();
        $mpstats = (new MPStatsController);
        $product = [];
        $productId = [];
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
        

        Compilation::insert(['title'=> $post['title'],'id_product' => $productId,'data'=>$product]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompilationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompilationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function show(Compilation $compilation)
    {
        //
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
