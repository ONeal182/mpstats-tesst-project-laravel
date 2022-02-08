<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class MPStatsController extends Controller
{
    public $tokken = '619fbdfb1270c1.4502036590ef1a80c43d174ccf75c3bf5d8473c8';
    public $url = 'https://mpstats.io/api/';
    public function index(Request $request)
    {

        dd($this->getProduct($request->get('name'), 'item', $request->get('id')));
    }
    public function request($url, $type)
    {
        try {
            $request = Http::withHeaders(['X-Mpstats-TOKEN' => $this->tokken, 'Content-Type' => 'application/json',])->$type($url);
            $status = $request->getStatusCode();
            if ($status == 200) {
                $response = $request;
                return json_decode($response->getBody()->getContents());
            } else {
                throw new \Exception('Failed');
            }
        } catch (\Illuminate\Support\Facades\Http $e) {
            $response = json_encode((string)$request->getResponse()->getBody());
        }
    }
    public function getApiCategoryUrl($name, $type, $data, $method = 'get', $subType = false)
    {
        $url = ($subType) ? $this->url . $name . '/' . $method . '/' . $type . '/' . $subType . '/?path=' . $data : $this->url . $name . '/' . $method . '/' . $type . '/?path=' . $data;
        return $url;
    }

    public function getApiProductUrl($name, $type, $data, $method = 'get', $subType = false)
    {
        $url = $this->url . $name . '/' . $method . '/' . $type . '/' . $data;
        return $url;
    }
    public function getCategory($name, $type, $categoryName)
    {
        $url = $this->getApiUrl($name, $type, $categoryName);
        $response = $this->request($url);
        return $response;
    }

    public function getProduct($name, $type, $idProduct)
    {

        $url = $this->getApiProductUrl($name, $type, $idProduct);
        $response =  $this->request($url, 'get');
        $response->salse = $this->getSalesProduct($name, $type, $idProduct);
        $response->by_category = $this->getHistProductCategory($name, $type, $idProduct);
        return $response;
    }

    function getSalesProduct($name, $type, $idProduct)
    {
        $url = $this->getApiProductUrl($name, $type, $idProduct) . '/sales';
        $response =  $this->request($url, 'get');
        return $response;
    }
    function getHistProductCategory($name, $type, $idProduct)
    {
        $url = $this->getApiProductUrl($name, $type, $idProduct) . '/by_category';
        $response =  $this->request($url, 'get');
        return $response;
    }
    public function parseUrl($name)
    {
        $path = parse_url($name);
        $path = trim($path['path'], '/');
        $path = explode('-', $path);
        $path = end($path);
        return $path;
    }
    // public function subCategory($name,$method='get',$categoryName){
    //     $type = 'subcategories';

    //     $url = $this->url.''.$type.'?=path'.urlencode($categoryName);
    //     $response = $this->request($url);
    //     return $response;
    // }
}
