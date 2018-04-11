<!-- Модальное окно -->  
<div class="modal ContactList fade" id="ContactList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Список контактов</h4>
      </div>
      <div class="modal-body">
        <table>
        	<tr>
        		<th>Имя</th>
        		<th>Фамилия</th>
        		<th>Почта</th>
        		<th>Телефон</th>
        	</tr>
        	<?php
        	$allContacts = new ContactList;
        	$contacts = $allContacts::findAllContact();
        	foreach($contacts as $contact):
        	?>
        	<tr>
        		<td><? echo $contact['name'];?></td>
        		<td><? echo $contact['lastname'];?></td>
        		<td><? echo $contact['email'];?></td>
        		<td><? echo $contact['phonenumber'];?></td>
        	</tr>
        <?php endforeach?>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal ContactList fade" id="ContactFind" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Контакт</h4>
      </div>
      <div class="modal-body">
        <table>
        	<tr>
        		<th>Имя</th>
        		<th>Фамилия</th>
        		<th>Почта</th>
        		<th>Телефон</th>
        	</tr>
        	<tr>
        		<td id="namefinded"></td>
        		<td id="lastnamefinded"></td>
        		<td id="emailfinded"></td>
        		<td id="phonenumberfinded"></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 insert-h">
			<h2>Создание, хранение и изменение контактной инфoрмации</h2>
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
					<?php 
				$selectNum = new ContactList;
				$queryAll  = $selectNum::selectAllContact();
				foreach ($queryAll as $value):
				?>
					<option><?php echo $value['phonenumber'];?></option>
				<?php endforeach?>
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
				<input type="text" id="phonenumberedit" readonly>
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
				<button id="find" class="btn btn-primary" data-toggle="modal" data-target="#ContactFind">
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
				<button id="listcontacts" class="btn btn-info" data-toggle="modal" data-target="#ContactList">
				Показать
				</button>
			</div>
		</div>
	</div>
</div>