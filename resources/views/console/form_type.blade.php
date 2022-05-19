<!-- 
	используем одну форму и для добавления и для обновления записи
-->
<form class="console" action="/admin/modification_type" method="post" enctype="multipart/form-data">
	
	<input type="text" placeholder="Название" name="type_Tittle" value="{{ isset($data ->type_Tittle)? $data ->type_Tittle : '' }}"><p>	
	<textarea name="type_Description">{{ isset($data->type_Description)? $data->type_Description : '' }}</textarea><p>
	<!-- 
	в скрытых полях храним некоторую служебную информацию, скрытую от глаз пользователя
		1) parent - если добавляем новую запись, нужен идентификатор родительской записи
		2) id - если обновляем запись, нужен первичный ключ обновляемой записи
	-->
	<input type="hidden" name="id" value="{{ isset($data ->type_id)? $data ->type_id : '' }}"><p>	
	<!--...-->

	<input type="submit" value="{{ isset($data)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
	
</form>