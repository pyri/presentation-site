$(document).ready(function () {
    $("#send").click(function () {
        var author = $("#author");
        var mail = $("#mail");
        var text = $("#text");

        $.ajax({
            data: {
                author: author.val(),
                mail: mail.val(),
                text: text.val()
            },
            url: "comment.php",
            method: "POST"
        }).success(function (data) {
            var result = JSON.parse(data);

            if (result.status == 'error') {
                text.addClass("new error");
                //$('.error_block').css({"display": "none";});
                //var resultStat = "'<p>'+ result.message +'</p>'";

                $('.error_block').text(result.message).show().delay(1500).fadeOut(800);

                //$('.error_block').append('<p>'+ result.message +'</p>');
            }
            else {
                var comment = $("#comment");
                var html = '<div class="msg border">' +
                    '<p class="inline-right partition-dashed">' + result.date + "</p>" +
                    '<p class="inline-left partition-dashed">' + result.author + ' (' + result.mail + ')' + "</p>" +
                    '<p class="msg-text inflow-left font-green">' + result.text + "</p>" +
                    '</div>';
                comment.prepend(html);
            }
        }).error(function () {
            console.log("new error");
        });

        return false;
    });
});