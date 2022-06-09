<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class WorkController extends Controller
{
    public $qQeury;
    public function index(Request $request){
        $q = $request->input('q');
        $max_page = 30;
        //Полнотекстовый поиск с пагинацией
        $results = $this->searchSimple($q, $max_page);
        //AJAX-запрос
        if($request->ajax() && $request->input('page')){
            return view('search.table-ajax', [
                'qQeury' => $this->qQeury,
                'students' => $results,
            ]);
        }
        return view('search.index', [
            'qQeury' => $this->qQeury,
            'include' => 'search.table',
            'students' => $results,
        ])->render();;
    }
    /**
     * Полнотекстовый поиск (простая форма)
     *
     * @param string $q
     * @param integer $count
     * @return mixed
     */
    public function searchSimple($q, $count){
        $page = Input::get('page');
        if(!$page) $page =1;
        $query = mb_strtolower($q, 'UTF-8');
        $tmp = explode(" ", $query);
        $query = [];
        foreach ($tmp as $word)
        {
            $len = mb_strlen($word, 'UTF-8');
            switch (true)
            {
                case ($len <= 3):
                {
                    $query[] = $word . "*";
                    break;
                }
                case ($len > 3 && $len <= 6):
                {
                    $query[] = mb_substr($word, 0, -1, 'UTF-8') . "*";
                    break;
                }
                case ($len > 6 && $len <= 9):
                {
                    $query[] = mb_substr($word, 0, -2, 'UTF-8') . "*";
                    break;
                }
                case ($len > 9):
                {
                    $query[] = mb_substr($word, 0, -3, 'UTF-8') . "*";
                    break;
                }
                default:
                {
                    break;
                }
            }
        }
        $query = array_unique($query, SORT_STRING);
        $qQeury = implode(" ", $query);
        $this->qQeury = $qQeury;
        // Таблица для поиска
        $results = Student::whereRaw(
            "MATCH(name,email) AGAINST(? IN BOOLEAN MODE)", // name,email - поля, по которым нужно искать
            array($qQeury))->paginate($count) ;
        return $results;
    }
}
