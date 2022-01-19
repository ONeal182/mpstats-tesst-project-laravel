<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MPStatsController extends Controller
{
    public $tokken = '619fbdfb1270c1.4502036590ef1a80c43d174ccf75c3bf5d8473c8';
    public function index()
    {
        $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://mpstats.io/api/wb/get/category?d1=2020-07-13&d2=2020-08-11&path=%D0%96%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0%D0%BC/%D0%9E%D0%B4%D0%B5%D0%B6%D0%B4%D0%B0",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "{\"startRow\":0,\"endRow\":100,\"filterModel\":{},\"sortModel\":[{\"colId\":\"revenue\",\"sort\":\"desc\"}]}",
        //     CURLOPT_HTTPHEADER => array(
        //         "X-Mpstats-TOKEN: 619fbdfb1270c1.4502036590ef1a80c43d174ccf75c3bf5d8473c8",
        //         "Content-Type: application/json"
        //     ),
        // ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;
        $response = Http::withHeaders([
            'X-Mpstats-TOKEN' => '619fbdfb1270c1.4502036590ef1a80c43d174ccf75c3bf5d8473c8',
            'Content-Type' => 'application/json',
 
        ])->post('https://mpstats.io/api/oz/get/category?path='.urlencode('Электроника'), [
            // 'path'=>'ООО Вайлдберриз',
            'startRow' => 0,
            'endRow' => 100,
            
        ]);
        // $response = Http::withHeaders([
        //     'X-Mpstats-TOKEN' => '619fbdfb1270c1.4502036590ef1a80c43d174ccf75c3bf5d8473c8',
        //     'Content-Type' => 'application/json',
 
        // ])->get('https://mpstats.io/api/oz/get/item/288651911', [

            
        // ]);
        dd($response->json());
        // print_r($response->body());
        return view('mpstats');
    }
    public function request($url){
        $response = Http::withHeaders(['X-Mpstats-TOKEN'=>$this->tokken,'Content-Type' => 'application/json',])->post($url);

        return $response;
    }
}
