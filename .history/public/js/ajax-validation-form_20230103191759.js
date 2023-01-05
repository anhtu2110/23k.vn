$(document).ready(function () {
    // $("button.btn_reg").click(function () {
    //     var fullname = $("#fullname").val();
    //     var number_phone = $("#number_phone").val();
    //     var address = $("#address").val();
    //     var check_address = $("input[name=check_address]:checked").val();
    //     var proof_document = $("input#proof_document").val();
    //     var exhibit = document.getElementsByName('exhibit');
    //     var list_exhibit = "";
    //     var proof_document = $("#proof_document").val();
    //     // Lặp qua từng exhibit để lấy giá trị
    //     for (var i = 0; i < exhibit.length; i++) {
    //         if (exhibit[i].checked === true) {
    //             list_exhibit += exhibit[i].value + ', ';
    //         }
    //     }
    //     list_exhibit += $("#exhibit_dif").val();
    //     if (check_address == 'yes') {
    //         proof_document = "Nhà đã trùng hộ khẩu => Không cần chứng minh";
    //     }
    //     var data = {
    //         'fullname': fullname,
    //         'number_phone': number_phone,
    //         'address': address,
    //         'check_address': check_address,
    //         'proof_document': proof_document,
    //         'list_exhibit': list_exhibit,
    //     }
    //     $.ajax({
    //         type: "post",
    //         url: "?mod=page&controller=index&action=check_reg",
    //         data: data,
    //         dataType: "json",
    //         success: function (result) {
    //             console.log(result);
    //             $.each(result, function (key, value) {
    //                 $("span#error_" + key).text(value);
    //             });
    //             if (result.address == "" && result.check_address == "" && result.exhibit == "" && result.fullname && result.number_phone == "" && result.proof_document == "") {
    //                 alert('Thành công');
    //             }
    //             return false;
    //         }
    //     });
    //     return false;
    // });

    $('#fullname').on('input', function () {
        checkfullname();
    });
    $('#email').on('input', function () {
        checkemail();
    });
    $('#password').on('input', function () {
        checkpass();
    });
    $('#cpassword').on('input', function () {
        checkcpass();
    });
    $('#mobile').on('input', function () {
        checkmobile();
    });

    // $('#submitbtn').click(function () {


    //     if (!checkfullname() && !checkemail() && !checkmobile() && !checkpass() && !checkcpass()) {
    //         console.log("er1");
    //         $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
    //     } else if (!checkfullname() || !checkemail() || !checkmobile() || !checkpass() || !checkcpass()) {
    //         $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
    //         console.log("er");
    //     }
    //     else {
    //         console.log("ok");
    //         $("#message").html("");
    //         var form = $('#myform')[0];
    //         var data = new FormData(form);
    //         $.ajax({
    //             type: "POST",
    //             url: "process.php",
    //             data: data,
    //             processData: false,
    //             contentType: false,
    //             cache: false,
    //             async: false,
    //             beforeSend: function () {
    //                 $('#submitbtn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
    //                 $('#submitbtn').attr("disabled", true);
    //                 $('#submitbtn').css({ "border-radius": "50%" });
    //             },

    //             success: function (data) {
    //                 $('#message').html(data);
    //             },
    //             complete: function () {
    //                 setTimeout(function () {
    //                     $('#myform').trigger("reset");
    //                     $('#submitbtn').html('Submit');
    //                     $('#submitbtn').attr("disabled", false);
    //                     $('#submitbtn').css({ "border-radius": "4px" });
    //                 }, 50000);
    //             }
    //         });
    //     }
    // });
    $("button.btn_reg").click(function () {
        checkfullname();
        return false;
    })
});
function checkfullname() {
    // var pattern = /^[A-Za-z0-9]+$/;
    // var fullname = $('#fullname').val();
    // var validfullname = pattern.test(fullname);
    // if ($('#fullname').val().length == 0) {
    //     $('#error_fullname').html('*Vui lòng nhập họ và tên');
    //     return false;
    // } else if (!validfullname) {
    //     $('#error_fullname').html('fullname should be a-z ,A-Z only');
    //     return false;
    // } else {
    //     $('#error_fullname').html('');
    //     return true;
    // }
    var fullname = $('#fullname').val();
    if (fullname == "") {
        $('#error_fullname').html('*Vui lòng nhập họ và tên');
    } else {
        $('#error_fullname').html('');
        return true;
    }
}
function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#email_err').html('required field');
        return false;
    } else if (!validemail) {
        $('#email_err').html('invalid email');
        return false;
    } else {
        $('#email_err').html('');
        return true;
    }
}
function checkpass() {
    console.log("sass");
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#password').val();
    var validpass = pattern2.test(pass);

    if (pass == "") {
        $('#password_err').html('password can not be empty');
        return false;
    } else if (!validpass) {
        $('#password_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

    } else {
        $('#password_err').html("");
        return true;
    }
}
function checkcpass() {
    var pass = $('#password').val();
    var cpass = $('#cpassword').val();
    if (cpass == "") {
        $('#cpassword_err').html('confirm password cannot be empty');
        return false;
    } else if (pass !== cpass) {
        $('#cpassword_err').html('confirm password did not match');
        return false;
    } else {
        $('#cpassword_err').html('');
        return true;
    }
}

function checkmobile() {
    if (!$.isNumeric($("#mobile").val())) {
        $("#mobile_err").html("only number is allowed");
        return false;
    } else if ($("#mobile").val().length != 10) {
        $("#mobile_err").html("10 digit required");
        return false;
    }
    else {
        $("#mobile_err").html("");
        return true;
    }
}

function password_show_hide() {
    console.log('ok');
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}