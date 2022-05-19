@extends('layouts.app')

@section('content')

<div class="homepage">
      <div class="content">
	        <h1>{!! $data->Tittle !!}</h1>
        <div>
	        <img src="{!! $data->Img !!}"/>
	    <p>
		    {!! $data->Description !!}
	    </p>
    </div>
	<a href="/biography">Подробнее</a>
</div>
		<aside>
			   @foreach ($attachdata as $item)
                    <div class="content">
	                <h1>{!! $item->Tittle !!}</h1>
                    <iframe 
	                    src="{!! $item -> URL !!}" frameborder="0">
                    </iframe>
	                    <a href="/MyPost/{{ $item -> Post_id }}"><br>Последние новости!</a>
                    </div>
               @endforeach
        </aside>
</div>	
@endsection