<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Compilation;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MPStatsController;
use Jenssegers\Date\Date;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data)
    {
 
        $data = json_decode($data);

        foreach($data as $key => $value){
            Product::insert(['title'=> $value->item->name,'id_product' => $value->item->id,'data'=>json_encode($data[$key])]);
        }
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function getTableDate(Product $product,Request $request)
    {
        
        $post = $request->all();
        $idProduct = $post['id'];
        $requestProduct = $product::whereIn('id',[$idProduct])->get()->first()->toArray();
        $dateProduct = json_decode($requestProduct['data'])->salse;
        $arrDate = [];
        foreach($dateProduct as $key=>$value){
            $date = new Date($value->data);
            $price = $value->final_price;
            $count = $value->balance;
            $allSumm = $price * $count;
            $mouth = $date->format('F');
            $day = $date->format('d');

            $arrDate[$mouth][$day] = $allSumm;
        }
        foreach($arrDate as $key => $value){
            $arrDate[$key] = array_reverse($value);
        }
        return json_encode($arrDate);
    }
    public function addCompletation(Request $request){
        $post = $request->all();
        $url = $post['url'];
        
        $id = $post['id_comp'];
        $mpstats = (new MPStatsController);
        $compilation = (new Compilation);
        $product = [];
        $productId = [];
        foreach($url as $value){
            $idItem = $mpstats->parseUrl($value);
            
            $hostName = $mpstats->getHostUrl($value);
            
            $hostName = ($hostName == 'www.wildberries.ru') ? 'wb' : 'oz';
            $itemArray = $mpstats->getProduct($hostName, 'item', $idItem);
            
            $product[] = $itemArray;
            $productId[] = $idItem;
        }
        
        
        $requestDb = $compilation::where('id', $id);

        $compData = $requestDb->where('id', $id)->get();
        $id_product = json_decode($compData[0]->id_product);
        foreach($productId as $val){
            $id_product[] = $val;
        }
        $id_product = json_encode($id_product);
        $requestDb->update(['id_product'=>$id_product]);

        $product = json_encode($product);
        $productId = json_encode($productId);
        $this->create($product);

        return back();
        
    }
    public function getProductId($id)
    {
        
        $product = Product::where('id_product', $id)->get();
        return $product[0];
    }

    public function deleted($idDelet){
        Product::where('id', $idDelet)->delete();
        return back();
    }

    public function deletedComp($id,$idComp){
 
        $comp = Compilation::where('id', $id)->get();
        $id_product = $comp[0]->id_product;
        $newIdProduct = [];
        foreach(json_decode($id_product) as $idProd){
            if($idComp == $idProd){

            }else{
                $newIdProduct[] = $idProd;
            }
        }
        $comp[0]->id_product = json_encode($newIdProduct);
        $comp[0]->save();
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
