@extends('layouts.app')

@section('content')
<nav>
@foreach ($attachdata as $item)
	   <a href="/news/{{ $item -> type_id }}"><img src="/images/LOGO/star_20.png"/>{{ $item -> type_Description }}</a>
@endforeach
</nav>           
<div class="monoBackg">
@foreach ($data as $item)
    <div class="content">
            @if($item -> Tittle != null)
                <h1>{!! $item->Tittle !!}</h1>
            @endif
                    @if($item -> URL != null)
                      <iframe 
	                     src="{!! $item-> URL !!}" frameborder="0">
                      </iframe>
                    @endif
                    @if($item -> Img != null)
                       <img src="/images/{!! $item ->Img !!}"/>
                    @endif
                    @if($item -> Description != null)
                        <p>{!! $item->Description !!}</p>
                    @endif
       </div>
 @endforeach
</div>
@endsection