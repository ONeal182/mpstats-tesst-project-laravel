<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenceItems extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
        
        return view('referenceitems');

        
    }

    public function getId(){
        
    }
    public function indexItem(Request $request)
    {
        
        $mpstats = (new MPStatsController);
        $idItem = $mpstats->parseUrl($request->get('url'));
        $hostName = $mpstats->getHostUrl($request->get('url'));
        $marketName = $hostName;
        $hostName = ($hostName == 'www.wildberries.ru') ? 'wb' : 'oz';
        $itemArray = $mpstats->getProduct($hostName,'item',$idItem);
        $itemSales = $mpstats->getSalesProduct($hostName,'item',$idItem);
        $item = (array)$itemArray->item;
        $photos = $itemArray->photos;
        $salse = $itemArray->salse;
        $itemSales = $mpstats->getSalesProduct($hostName,'item',$idItem);
        $by_category = (array)$itemArray->by_category;
        $allCash = 0;
        $allsales = 0;
        $allFinalPrice = 0;
        $allReit = 0;
        $countFinalPrice = 0;
        $countFinalRait = 0;

        foreach($salse as $sale){
            
            $allCash = $allCash +  $sale->sales * $sale->final_price;
            $allsales = $allsales + $sale->sales;
            if($sale->final_price > 0){
                $countFinalPrice++;
                $allFinalPrice = $sale->final_price + $allFinalPrice;
            }

            if($sale->rating > 0){
                $countFinalRait++;
                $allReit = $sale->rating + $allReit;
            }
            
        }
        $allReit = $allReit / $countFinalRait;
        $allFinalPrice = $allFinalPrice / $countFinalPrice;
        return view('referenceitem',['item'=>$item,'photos'=>$photos,'salse'=>$salse,'by_category'=>$by_category,'host_name' => $marketName, 'itemsales'=>$itemSales[0]->balance, 'allCash'=>$allCash,'allsales'=>$allsales,'allFinalPrice'=>round($allFinalPrice),'allReit'=>round($allReit,2) ]);

        
    }
    public function indexDate(Request $request){

        $mpstats = (new MPStatsController);
        $idItem = $mpstats->parseUrl($request->get('url'));
        $hostName = $mpstats->getHostUrl($request->get('url'));
        $hostName = ($hostName == 'www.wildberries.ru') ? 'wb' : 'oz';
        $itemArray = $mpstats->getProduct($hostName,'item',$idItem);
        $salse = $itemArray->salse;

        return $salse;

    }
}
