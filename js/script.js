$(document).ready(function(){

	function checkMail(){
		$.ajax({
			url: '../controller/confirmEmail.php',
			type: 'POST',
			dataType: 'html',
			data: {
				   email: $('#email').val(),
			 },
			 success: function successMail(data){ 	
			if (data == 1){
				$('#create').prop("disabled", true);
			}
		}

	});
}

	$("#phonenumber").mask("8(999) 999-99 99");

	$("#phonenumberedit").mask("8(999) 999-99 99");

	$('#create').click(function(event) {
		
		$.ajax({
			url: '../controller/addcontact.php',
			type: 'POST',
			dataType: 'html',
			data: {name: $('#name').val(),
				   lastname: $('#lastname').val(),
				   email: $('#email').val(),
				   phonenumber: $('#phonenumber').val()
			 },
			 success: function success(data){
			if(data == 1){
				setTimeout('document.location.href="/"',1500);
			} else{
				console.log(data);
			}
		}
		})
		
	});

function checkPhone(){
var phone = document.getElementById('phonenumber');
	for(var i = 0; i < phone.value.length; i++){
 		if (phone.value[i] == "_"){
 		 return false;
 	}
 }
}
function checkPhoneint(){
	if($('#phonenumber').val() == 0){
		$('#create').prop("disabled", true);
	}
}

	var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
function testButton(){
	if(($('#name').val().length < 2)  || ($('#lastname').val().length < 3) || (!pattern.test($('#email').val())) || (checkPhone() == false)){
		 $('#create').prop("disabled", true);
	} else {
		$('#create').prop("disabled", false);
	}
}
setInterval(checkMail,10); 
setInterval(testButton, 600);
setInterval(checkPhoneint, 600);


$('#editcontact').change(function(event) {
	$.ajax({
			url: '../controller/select.php',
			type: 'POST',
			dataType: 'html',
			data: { phonenumber: $('#editcontact').val()
			 },
			success: function success(data){
				var dataform = JSON.parse(data);
				$("#nameedit").val(dataform.name);
				$("#lastnameedit").val(dataform.lastname);
				$("#emailedit").val(dataform.email);
				$("#phonenumberedit").val(dataform.phonenumber);

			}
	});

});

$('#edit').click(function(event) {
	$.ajax({
			url: '../controller/edit.php',
			type: 'POST',
			dataType: 'html',
			data: { name: $("#nameedit").val(),
					lastname: $("#lastnameedit").val(),
					email: $("#emailedit").val(),
					phonenumber: $("#phonenumberedit").val(),
			 },
			success: function success(data){
				if(data == 1){
					console.log(data);
				} else{
					setTimeout('document.location.href="/"',1500);
				}
			}
	});
});


});
