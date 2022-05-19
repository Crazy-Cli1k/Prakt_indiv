@extends('layouts.app')

@section('content')
<div class="Homepage">
  <div class="PageBackg">
<h1>{!! $data->Tittle !!}</h1>
              @if($data -> URL != null)
                      <iframe 
	                     src="{!! $data -> URL !!}" frameborder="0">
                      </iframe>
                    @endif
                    @if($data -> Img != null)
                       <img src="{!! $data ->Img !!}"/>
                    @endif
                    @if($data -> Description != null)
                        <p>{!! $data->Description !!}</p>
              @endif
        <br>
</div>
</div>
@endsection