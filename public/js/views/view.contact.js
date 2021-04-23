/*
Name: 			View - Contact
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	8.3.0
*/

(function ($) {

	/*
	Contact Form: Basic
	*/

	$('.contact-form').validate();

}).apply(this, [jQuery]);

// $(document).ready(function () {
// 	$('.contact-form').submit(function (e) {
// 		e.preventDefault();
// 		$.ajax({
// 			type: "POST",
// 			url: 'email-script.php',
// 			data: $(this).serialize(),
// 			success: function (response) {
// 				var jsonData = JSON.parse(response);

// 				// user is logged in successfully in the back-end
// 				// let's redirect
// 				if (jsonData.success == "1") {
// 					location.href = 'contact';
// 				}
// 				else {
// 					alert('Invalid Credentials!');
// 				}
// 			}
// 		});
// 	});
// });