// Отправка заявки 
$(document).ready(function() {
	$('#contact').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		if (document.form.name.value == '' || document.form.phone.value == '' ) {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find('input').val('');
			$('#form').trigger('reset');
		});
		return false;
	});
});

