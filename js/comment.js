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
                text.addClass("error");
                $('.error_block').text(result.message).reset();
            }
            else {
                var comment = $("#comment");
                var html = '<div class="msg border">' +
                    '<p class="inline-right partition-dashed">' + result.date + "</p>" +
                    '<p class="inline-left partition-dashed">' + result.author + ' (' + result.mail + ')' + "</p>" +
                    '<p class="msg-text inflow-left font-green">' + result.text + "</p>" +
                    '</div>';
                comment.prepend(html);
                $('.element-form').val('');
                $('.element-form').attr("disabled",true);
                $('.btn').attr("disabled",true);
                $('.error_block').text('').reset();

            }
        }).error();

        return false;
    });
});