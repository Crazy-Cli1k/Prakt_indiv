@extends('layouts.app')

@section('content')
	
	<h1>Изменить/Добавить</h1>
	
	<!-- выводим записи верхнего уровня, добавляем ссылку на изменение -->
<nav>
	<a href="/console/update/type/{{ $data -> type_id}}"><img src="images/LOGO/star_20.png"/>Типы</a>
	<a href="/console/update/post/{{ $attachdata -> Post_id}}"><img src="images/LOGO/star_20.png"/>Посты</a>
</nav>  

@endsection