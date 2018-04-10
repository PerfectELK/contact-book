$(document).ready(function(){

	 $("#phonenumber").mask("8(999) 999-99 99");

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
		})
		success: function success(data){
			if(data == 1){
				alert("пидор");
				setTimeout('document.location.href="/"',1500);
			} else{
				alert(data);
			}
		}
		fail: function failed(data){
			alert(data);
		}
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
	if(($('#name').val().length < 2)  || ($('#lastname').val().length < 3) || (!pattern.test($('#email').val())) || (checkPhone() == false) ){
		 $('#create').prop("disabled", true);
	} else {
		$('#create').prop("disabled", false);
	}
}
setInterval(testButton, 500);
setInterval(checkPhoneint, 500);










});
