@extends('layouts.app')

@section('content')

	<h1>Форма</h1>

	<!-- 
	подключаем форму, используем одну форму на обновление/добавление данных
	в форме в текстовые поля подставим данные обновляемой записи (если они существуют)
	-->
	@include('console.form')

	<!-- 
	если редактируемая запись может содержать (свойство allowed) и содержит подчиненные записи
	выведем их с добавлением ссылки на изменение
	-->
	@if (isset($attachdata) && count($attachdata))
		<hr>					
		<h2>Прикрепленные записи</h2>						
		@foreach ($attachdata as $item)
			{{ $item->Tittle }} (
				<a href="/console/update/{{ $item->Post_id }}">Изменить</a> /  
				<a href="/admin/delete/{{ $item->Post_id }}">Удалить</a>) </p>
		@endforeach

	@endif 

	<!--  
	если родительская запись разрешает прикреплять подчиненные (свойство allowed записи) 
	то выводим форму добавления новой записи, при этом
	не забыть передать идентификатор родительской записи (свойство parent)
	-->
	@if (isset($data))
		<form class="console" action="/console/add" method="post">
			<input type="hidden" name="Page" value="{{ $data ->Page_id }}"><p>	
			<input type="submit" value="Прикрепить новую запись">
			@csrf
		</form>
	@endif

@endsection