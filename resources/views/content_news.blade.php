
<form class="console" method="post" enctype="multipart/form-data">
@foreach ($data as $item)
    @if($item -> URL != null)
                <div class="content">
	                <h1>{!! $item->Tittle !!}</h1>
                    <iframe 
	                    src="{!! $item -> URL !!}" frameborder="0">
                    </iframe>
	                    <a href="/MyPost/{{ $item -> Post_id }}"><br>Подробнее!</a>
                </div>
    @endif
 @endforeach
</form>