<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use App\Models\Automobiles;
use App\Models\Engine;


class SitemapController extends Controller
{
    protected $count_auto;
    protected $count_engine;
    public function index()
    {

        $dir_sitemaps = scandir('./sitemap');
        return response()->view('frontend.sitemap.sitemap', compact('dir_sitemaps'))->header('Content-Type', 'text/xml');
    }
    public function store(){
        $engines_sitemap = $this->data_engine();
        $automobiles_sitemap = $this->data_automobiles();
        $count_auto = $this->count_auto;
        $count_engine = $this->count_engine;
        return view('frontend.sitemap.update',compact('engines_sitemap','automobiles_sitemap','count_auto','count_engine'));
    }

    public function data_automobiles()
    {
        $autpmobiles = Automobiles::all('updated_at', 'url')->toArray();
        $this->count_auto = count($autpmobiles);
        return $this->sitemap_template($autpmobiles, 3000, 'url', 'updated_at', 'models_sitemap','/car');
    }

    public function data_engine()
    {
        $engines = Engine::all('updated_at', 'slug')->toArray();
        $this->count_engine = count($engines);
         return $this->sitemap_template($engines,3000,'slug','updated_at','engine_sitemap');
    }
//    Для работы с генератором карты сайта необходимо указать: $input_dat - переменную где хранится выгрузка из БД
//$url - Название поля в БД для запроса урла,$date - Название поля в БД для запроса даты,$name_file - Имя конечного файла после обработки, $paginate - насколько нужно разделить вашу выгрузку.
// To work with the sitemap generator, you must specify:
// $input_dat - the variable where the upload from the database is stored
//$url - The name of the field in the database to request the url
//$date - The name of the field in the database to request the date
//$name_file - The name of the final file after processing
    public function sitemap_template($input_data, $paginate, String $url, String $date, String $name_file,$category = null)
    {

        $page_number = $paginate;
        $steps = 3000;
        $page_start = 0;
        $step = (count($input_data) / $page_number) + 1;//10
        for ($sitemap = 1; $sitemap <= $step; $sitemap++) {


            $dom = new \DOMDocument('1.0', 'utf-8');
            $urlset = $dom->createElement('urlset');
            $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');


            for ($i = $page_start; $i < $page_number; $i++) {//0-3000
                if (!empty($input_data[$i])) {

                    //Формируем валидную дату
                    $date_valid = date('Y-m-d', strtotime($input_data[$i]["$date"]));

                    $urls = $dom->createElement('url');

                    // Элемент <loc> - URL статьи.
                    $loc = $dom->createElement('loc');
                    $text = $dom->createTextNode(
                        route('index').$category . "/" . $input_data[$i]["$url"]
                    );
                    $loc->appendChild($text);
                    $urls->appendChild($loc);

                    // Элемент <lastmod> - дата последнего изменения статьи.
                    $lastmod = $dom->createElement('lastmod');
                    $text = $dom->createTextNode($date_valid);
                    $lastmod->appendChild($text);
                    $urls->appendChild($lastmod);

                    // Элемент <priority> - приоритетность (от 0 до 1.0, по умолчанию 0.5).
                    // Если дата публикации/изменения статьи была меньше недели назад ставим приоритет 1.
                    $priority = $dom->createElement('priority');
                    $text = $dom->createTextNode('1');
                    $priority->appendChild($text);
                    $urls->appendChild($priority);

                    $urlset->appendChild($urls);
                }
            }


            $dom->appendChild($urlset);
            $dom->save('./sitemap/' . $name_file . $sitemap . '.xml');
            $page_start = $page_number;
            $page_number = $page_number + $steps;
        }
    }


}
