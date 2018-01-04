// function checkFirstName() {
//     var firstNameLength = $('#firstName').val().length;
//     if (firstNameLength > 6 && firstNameLength < 16) {
//         $('#firstNameError').text('');
//         return true;
//     } else {
//         $('#firstNameError').text('First Name Should be between 6 to 16 character');
//         return false;
//     }
// }
//
// // $('#firstName').click(function () {
// //     checkFirstName();
// // })
//
// $('#firstName').blur(function () {
//     checkFirstName();
// })
//
// $('#firstName').keyup(function () {
//     checkFirstName();
// })
//
// function checkLastName() {
//     var lastNameLength = $('#lastName').val().length;
//     if (lastNameLength > 6 && lastNameLength < 16) {
//         $('#lastNameError').text('');
//         return true;
//     } else {
//         $('#lastNameError').text('Last Name Should be between 6 to 16 character');
//         return false;
//     }
//
// }
// //
// // $('#lastName').click(function () {
// //     checkLastName();
// // })
//
// $('#lastName').blur(function () {
//     checkLastName();
// })
//
// $('#lastName').keyup(function () {
//     checkLastName();
// })
//
// function checkGender() {
//     var genderValue = $('input[type="radio"]:checked').val();
//     if (genderValue) {
//         $('#genderError').text('');
//         return true;
//     }
//     else {
//         $('#genderError').text('Please select your gender');
//         return false;
//     }
// }
// $('input[type="radio"]').blur(function () {
//     checkGender();
// })
//
//
// function checkEmail() {
//     var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[+a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/i);
//
//     if (pattern.test($('#email').val())) {
//         $('#emailError').text('');
//         return true;
//     } else {
//         $('#emailError').text('Email Address is Invalid');
//         return false;
//     }
// }
//
// // $('#email').click(function () {
// //     checkEmail();
// // })
//
// $('#email').blur(function () {
//     checkEmail();
// })
//
// $('#email').keyup(function () {
//     checkEmail();
// })
//
//
// function checkPassword() {
//
//     var passwordLength = $('#password').val().length;
//     if (passwordLength > 6 && passwordLength < 16) {
//         $('#passwordError').text('');
//         return true;
//     } else {
//         $('#passwordError').text('Password Should be between 7 to 16 ');
//         return false;
//     }
// }
// // $('#password').click(function () {
// //     checkPassword();
// // })
//
// $('#password').blur(function () {
//     checkPassword();
// })
//
// $('#password').keyup(function () {
//     checkPassword();
// })
//
// function checkConfirmPassword() {
//
//     var passwordLength = $('#password').val();
//     var confirmPasswordLength = $('#confirmPassword').val();
//
//     if (passwordLength == confirmPasswordLength) {
//         $('#confirmPasswordError').text('');
//         return true;
//     } else {
//         $('#confirmPasswordError').text('Password and confirm password Should be same ');
//         return false;
//     }
// }
// $('#confirmPassword').click(function () {
//     checkConfirmPassword();
// })
//
// $('#confirmPassword').blur(function () {
//     checkConfirmPassword();
// })
//
// $('#confirmPassword').keyup(function () {
//     checkConfirmPassword();
// })
//
// $('#registrationForm').submit(function () {
//
//     if(checkFirstName()==true && checkLastName()==true&&checkEmail()==true&&checkPassword()==true&&checkConfirmPassword()==true&&checkGender()==true){
//         return true;
//     }else return false;
// });