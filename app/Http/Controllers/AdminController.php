<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	
		public function acConsole () {

			$data = DB::table("types") -> first();
			$attachdata = DB::table("posts") ->first();
			// отдадим полученные данные в представление
			return view("console.index")->with(["data" => $data,  "attachdata" => $attachdata]);
		}

		function acDataDelete ($id) {
			// выполним запрос на удаление записи
			DB::table("posts")->where("Post_id", $id)->delete();
			
			// выполним редирект на страницу из которой удалялась запись
			return back();
		}
		public function acConsoleFormUpdate ($id) {
			// получим запись по переданному в параметре идентификатору ($id)
			$data = DB::table("posts")->where("Page_id", "=", $id)->first();
			// у записи в базе данных могут быть подчиненные 
			$attachdata = DB::table("posts")->where("Page_id", "=", $id)->get(); 
			// откроем форму на обновление данных редактируемой записи
			// выведем прикрепленные записи если они есть
			// отдадим полученные данные в представление
			return view("console.modification")->with(["data" => $data,  "attachdata" => $attachdata]);
		}
		public function acConsoleType () {

			$data = DB::table("types") ->get();
			// отдадим полученные данные в представление
			return view("console.modification_type")->with("data", $data);
		}
		
		public function acConsoleFormAddNewType (Request $request) {

				return view("console.modification_type")->with('parent', $request->input("parent"));
		}		
		
		public function acConsoleTypeEditer ($id) {
			$data = DB::table("types") ->where("Type_id", "=", $id) ->first();
			$attachdata = DB::table("types")->get(); 
			return view("console.modification_type")->with(["data" => $data,  "attachdata" => $attachdata]);
		}
			
		public function acDataModificationType (Request $request) {
					// если передаем данные родительского блока значит выполняется вставка новой записи БД
					if ($request->input("id") != null) {
						// если передается изображение
						
						// получим идентификатор обновляемой записи
						$id = $request->input("id");
						// выполним запрос на обновление записи
						DB::table("types")->where("type_id", $id)->update(
					[
						'type_Tittle' => $request->input('type_Tittle'),
						'type_Description' => $request->input('type_Description'),
						]
					);
					
					// если передается идентификатор записи значит выполняется обновление записи БД	
				} else{
					
					// выполним запрос на вставку с сохранением идентификатора вставленной записи
					$id = DB::table("types")->insertGetId(
						[
							'type_Tittle' => $request->input('type_Tittle'),
							'type_Description' => $request->input('type_Description'),
							]
						);	
					}
					// выполним редирект к вставленной / обновленной записи 
					return redirect ('/console/update/type/updated' .$id);
				}
				
				
				function acTypeDelete ($id) {
					// выполним запрос на удаление записи
					DB::table("types")->where("type_id", $id)->delete();
					
					// выполним редирект на страницу из которой удалялась запись
					return back();
				}
				
				


				public function acConsolePost () {
					// получим записи верхнего уровня (parent = 0)
					$data = DB::table("posts") ->get();
					// отдадим полученные данные в представление
					return view("console.modification_post")->with("data", $data);
				}

			public function acConsoleFormAddNewPost (Request $request) {

				return view("console.modification_post")->with('parent', $request->input("parent"));
			}	
			public function acConsolePostEditer ($id) {
				$data = DB::table("posts") ->where("Post_id", "=", $id) ->first();
				$attachdata = DB::table("posts")->get(); 
				return view("console.modification_post")->with(["data" => $data,  "attachdata" => $attachdata]);
			}

			public function acDataModificationPost (Request $request) {
					// если передаем данные родительского блока значит выполняется вставка новой записи БД
					if ($request->input("id") != null) {
						// если передается изображение 
						if ($request->hasFile('Img_File')) {
							// получим новое имя файла
							$image = $request->file('Img_File')->getClientOriginalName();
							// переместим файл в директорию хранения
							$request->file('Img_File')->move("images/download/", $image);
						} else $image = $request->input('Img');	
						
						// получим идентификатор обновляемой записи
						$id = $request->input("id");
						// выполним запрос на обновление записи
						DB::table("posts")->where("Post_id", $id)->update(
							[
								'Tittle' => $request->input('Tittle'),
								'Description' => $request->input('Description'),
								'Img' => $image,
								'URL' => $request->input('URL'),
								'Date' => $request->input('Date'),
								]
							);
							
							// если передается идентификатор записи значит выполняется обновление записи БД	
						} elseif ($request->input("Page_id") != null) {
							
							// если передается изображение 
							if ($request->hasFile('Img_File')) {
								// получим оригинальное имя файла для записи в базу
								$image = $request->file('Img_File')->getClientOriginalName();
								// переместим файл в директорию хранения
								$request->file('Img_File')->move("images/", $image);
							} else $image = $request->input('Img');
							
							// выполним запрос на вставку с сохранением идентификатора вставленной записи
							$id = DB::table("posts")->insertGetId(
								[
									'Tittle' => $request->input('Tittle'),
									'Description' => $request->input('Description'),
									'Img' => $image,
									'URL' => $request->input('URL'),
									'Date' => $request->input('Date'),
									'Page_id' => $request->input('Page_id'),
									'Type_id' => $request->input('Type_id')
									]
								);
								
							}
							// выполним редирект к вставленной / обновленной записи 
							return redirect ('/console/update/post/updated' . $id);
				}
				function acPostDelete ($id) {
					// выполним запрос на удаление записи
					DB::table("posts")->where("post_id", $id)->delete();
					
					// выполним редирект на страницу из которой удалялась запись
					return back();
				}
			}
			