@extends('layouts.app')

@section('content')
<div class="Homepage">
   @foreach($data as $item)
   <div class="PageBackg">
            @if($item -> Tittle != null)
                <h1>{!! $item->Tittle !!}</h1>
            @endif
                    @if($item -> URL != null)
                      <iframe 
	                     src="{!! $item -> URL !!}" frameborder="0">
                      </iframe>
                    @endif
                    @if($item -> Img != null)
                       <img src="{!! $item ->Img !!}"/>
                    @endif
                    @if($item -> Description != null)
                        <p>{!! $item->Description !!}</p>
                    @endif
                <br>
    </div>
    @endforeach
</div>
@endsection