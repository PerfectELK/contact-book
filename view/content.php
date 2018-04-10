<div class="container">
	<div class="row">
		<div class="col-12 insert-h">
			<h2>Создание, хранение и изменение контактной инофрмации</h2>
		</div>
	</div>
	<div class="row block-1">
		<div class="col-6">
			<div class="formcontainer">
				<h5 class="head">Создание контактов:</h5>
				<label>Имя<br>
					<input type="text" id="name">
				</label>
				<label>Фамилия<br>
				<input type="text" id="lastname">
				</label>
				<label>Электронный адрес<br>
				<input type="text" id="email">
				</label>
				<label>Номер телефона<br>
				<input type="text" id="phonenumber">
				</label>
				<button id="create" class="btn btn-primary">
				Создать контакт
			</button>
			</div>
		</div>
		<div class="col-6">
			<div class="formcontainer">
				<h5 class="head">Редактирование контактов</h5>
				<label>Номер телефона<br>
				<select id="editcontact">
					<option></option>
				</select>
				</label>
				<label>Имя<br>
				<input type="text" id="nameedit">
				</label>
				<label>Фамилия<br>
				<input type="text" id="lastnameedit">
				</label>
				<label>Электронный адрес<br>
				<input type="text" id="emailedit">
				</label>
				<label>Номер телефона<br>
				<input type="text" id="phonenumberedit">
				</label>
				<button id="edit" class="btn btn-primary">
				Внести изменения
				</button>
			</div>
		</div>
		<div class="col-6">
			<div class="formcontainer">
				<h5 class="head">Найти контакт</h5>
				<label>Имя<br>
					<input type="text" id="namefind">
				</label>
				<button id="find" class="btn btn-primary">
				Найти
				</button>
				<div class="findcontacts">
					
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="formcontainer">
				<h5 class="head">Удалить контакт</h5>
				<label>Электронный адрес<br>
					<input type="text" id="emaildelete">
				</label>
				<button id="delete" class="btn btn-danger">
				Удалить
				</button>
			</div>
		</div>
		<div class="col-6">
			<div class="formcontainer">
				<h5 class="head">Показать список контактов</h5>
				<button id="listcontacts" class="btn btn-info">
				Показать
				</button>
			</div>
		</div>
	</div>
</div>