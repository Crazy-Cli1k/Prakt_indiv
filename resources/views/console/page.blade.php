@extends('layouts.app')

@section('content')
	<!-- выводим записи верхнего уровня, добавляем ссылку на изменение -->
<nav>
	@foreach ($data as $item)
	<a href="/console/update/page/select/"><img src="/images/LOGO/star_20.png"/>{{ $item -> Main_Description }}</a>
	@endforeach
</nav>  

@endsection