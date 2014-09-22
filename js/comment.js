$(document).ready(function () {
    $("#send").click(function () {
        var author = $("#author");
        var mail = $("#mail");
        var text = $("#text");
        var captcha = $("#captcha");

        $.ajax({
            data: {
                author: author.val(),
                mail: mail.val(),
                text: text.val(),
                captcha: captcha.val()
            },
            url: "comment.php",
            method: "POST"
        }).success(function (data) {
            var result = JSON.parse(data);

            if (result.status == 'error') {
                text.addClass("error");
                $('.error_block').text(result.message).reset;
                if(result.type_error == 'captcha'){
                    $('#captcha').val('');
                }
            }
            else {
                var comment = $("#comment");
                var html = '<div class="msg">' +
                    '<p class="msg_data">' + result.date + "</p>" +
                    '<p class="msg_name">' + result.author + ' (' + result.mail + ')' + "</p>" +
                    '<p class="msg_text">' + result.text + "</p>" +
                    '</div>';
                comment.prepend(html);
                $('.msg:gt(2)').slideUp(2000);
                $('.element-form').val('');
                /*$('.element-form').attr("disabled",true);
                $('.btn').attr("disabled",true);*/

                $('.error_block').text('').reset;

            }
        }).error();

        return false;
    });
});