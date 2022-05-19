@extends('layouts.app')

@section('content')

	<h1>Форма</h1>

	<!-- 
	подключаем форму, используем одну форму на обновление/добавление данных
	в форме в текстовые поля подставим данные обновляемой записи (если они существуют)
	-->
	@include('console.form_type')

	<!-- 
	если редактируемая запись может содержать (свойство allowed) и содержит подчиненные записи
	выведем их с добавлением ссылки на изменение
	-->
	@if (isset($attachdata) && count($attachdata))
		<hr>					
		<h2>Типы постов</h2>						
		@foreach ($attachdata as $item)
			{{ $item->type_Description }} (
				<a href="/console/update/type/{{ $item ->type_id }}">Изменить</a> /  
				<a href="/admin/delete/type/{{ $item->type_id }}">Удалить</a>) </p>
		@endforeach

	@endif 

	<!--  
	если родительская запись разрешает прикреплять подчиненные (свойство allowed записи) 
	то выводим форму добавления новой записи, при этом
	не забыть передать идентификатор родительской записи (свойство parent)
	-->
	@if (isset($data))
		<form class="console" action="/console/add/Type" method="post">
			<input type="submit" value="Прикрепить новую запись">
			@csrf
		</form>
	@endif

@endsection