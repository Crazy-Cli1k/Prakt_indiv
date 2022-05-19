<!-- 
	используем одну форму и для добавления и для обновления записи
-->
<form class="console" action="/admin/modification_post" method="post" enctype="multipart/form-data">
	
	<input type="text" placeholder="Название" name="Tittle" value="{{ isset($data ->Tittle)? $data ->Tittle : '' }}"><p>	
	<textarea name="Description">{{ isset($data->Description)? $data->Description : '' }}</textarea><p>
	<input type="text" placeholder="Страница (id)" name="Page_id" value="{{ isset($data->Page_id)? $data->Page_id : '' }}"><p>
    <input type="text" placeholder="Тип поста (id)" name="Type_id" value="{{ isset($data->Type_id)? $data->Type_id : '' }}"><p>
	<input type="text" placeholder="Дата" name="Date" value="{{ isset($data->Date)? $data->Date : '' }}"><p>
	<input type="text" placeholder="Ссылка" name="URL" value="{{ isset($data->URL)? $data->URL : '' }}"><p>	
	<input type="text" placeholder="Изображение" name="Img" value="{{ isset($data->Img)? $data->Img : '' }}"><p>	
	<input type="file" name="Img_File"/><p>
	<!-- 
	в скрытых полях храним некоторую служебную информацию, скрытую от глаз пользователя
		1) parent - если добавляем новую запись, нужен идентификатор родительской записи
		2) id - если обновляем запись, нужен первичный ключ обновляемой записи
	-->
	<input type="hidden" name="id" value="{{ isset($data->Post_id)? $data->Post_id : '' }}"><p>	
	<!--...-->

	<input type="submit" value="{{ isset($data)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
	
</form>