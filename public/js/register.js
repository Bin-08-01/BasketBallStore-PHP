function preventDefault(e) {
    e.preventDefault();
}

$(document).ready(function (){
    $("#register-container input").on("keyup", function (){
        $(this).parent().children("h6").children("span").html("");
    });
    $('#register-container input[name="gender"]').change(()=>{
        $('#register-container input[name="gender"]').parent().parent().children("h6").children("span").html("");
    })
})


$(document).ready(function () {
    $("#button-register").click(function (event) {
        event.preventDefault();
        $.post(
            "Middlewares/login.php", {
                firstname: $("#reg-firstname").val(),
                lastname: $("#reg-lastname").val(),
                gender: $('input[name="gender"]:checked').val(),
                user: $("#reg-username").val(),
                pass: $("#reg-password").val(),
                repass: $("#reg-re-password").val(),
                email: $("#reg-email").val(),
                phone: $("#reg-phone").val()
            },
            function (data) {
                const msg = JSON.parse(data);
                let check = true;
                for (const each in msg){
                    if(msg[each]){
                        check=false;
                    }
                }
                if (!check) {
                    // $("#register-container .msg-check-username").css("display", "inline-block");
                    // $("#register-container .msg-check-username").slideDown("slow");
                    $("#register-container .msg-check-fn").html(msg?.msgFn);
                    $("#register-container .msg-check-ln").html(msg?.msgLn);
                    $("#register-container .msg-check-gender").html(msg?.msgGender);
                    $("#register-container .msg-check-username").html(msg?.msgUsername);
                    $("#register-container .msg-check-pass").html(msg?.msgPassword);
                    $("#register-container .msg-check-email").html(msg?.msgEmail);
                    $("#register-container .msg-check-phone").html(msg?.msgPhone);
                    console.log(msg);
                }
                else{
                    window.location = "?page=login";
                }
            }
        );
    });
});