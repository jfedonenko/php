<form action = "includes/add_product.php" method = "post">
			<p>Название товара</p>
			<input type="text" name="title">

			<p>Описание</p>
			<textarea name="textare" id="" cols="30" rows="10"></textarea>

			<p>Катекатегория товара</p>
			<select name="category" id="">
				<option value="Товары для детей">Детские игрушки</option>
				<option value="Товары для взрослых">Взрослые игрушки</option>
			</select>
			
			<p>цена</p>
			<input type="text" name="prace">
			<button type ="submit"> Добавить </button>
	</form>



	<form action="includes/upload.php" method="post" enctype="multipart/form-data">
				<input type="file" name="image">
				<button type="submit"> SAVE</button>
			</form>