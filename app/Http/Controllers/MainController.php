<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // обработчик http://muzei-mira/
	public function acMain () {
		// формируем данные для представления main.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("Page_id", "=", "1") ->first();
		$attachdata= DB::table("posts")->where("Page_id", "=", "2") ->OrderBy("Date","desc") ->limit("3") ->get();
		return view("main")->with(["data"=> $data, "attachdata"=> $attachdata]);
	}
	
	// обработчик http://muzei-mira/zhivopis/{параметр}
	public function acNews ($id) {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		// по идентификатору главной получим прикрепленные записи 
		$data = DB::table("posts") ->where("Type_id", "=", $id) ->get();
		$attachdata = DB::table("types") ->get();
		return view("news")->with(["data"=> $data, "attachdata"=> $attachdata]);
	}

		// обработчик http://muzei-mira/goroda/{параметр}
	public function acGetPost ($id) {
			// формируем данные для представления по переданному параметру
			// выполняем запрос к базе данных установленной по умолчанию
			$data = DB::table("posts")->where("Post_id", "=", $id)->first();
			// по идентификатору главной получим прикрепленные записи 
			// отдадим полученные данные в представление
			return view ("MyPost")->with(["data" => $data]);
	}	
		
	// обработчик http://muzei-mira/velikie-muzei
	public function acBiography () {
		// формируем данные для представления velikie-muzei.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["Page_id" => "5"])->first();
		// по идентификатору главной получим прикрепленные записи 
		// отдадим полученные данные в представление 
		return view("biography")->with(["data" => $data]);
	}
		// обработчик http://muzei-mira/velikie-muzei
	public function acBlog () {
			// формируем данные для представления velikie-muzei.blade.php
			// выполняем запрос к базе данных установленной по умолчанию
			$data = DB::table("posts") ->OrderBy("Date","desc") ->get();
			// по идентификатору главной получим прикрепленные записи 
			// отдадим полученные данные в представление 
			return view("blog")->with(["data" => $data]);
	}
	
	// обработчик http://muzei-mira/novosti
	public function acWorks () {
		// формируем данные для представления velikie-muzei.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["Page_id" => "4"])->get();
		// по идентификатору главной получим прикрепленные записи 
		// отдадим полученные данные в представление 
		return view("work")->with(["data" => $data]);
	}
	
	// обработчик http://muzei-mira/goroda/{параметр}
	public function acAbout () {
		// формируем данные для представления velikie-muzei.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["Page_id" => "9"])->get();
		// по идентификатору главной получим прикрепленные записи 
		// отдадим полученные данные в представление 
		return view("about")->with(["data" => $data]);
	}		
}