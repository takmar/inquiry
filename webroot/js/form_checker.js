(function() {
    //標準エラーメッセージの変更
    $.extend($.validator.messages, {
        email: '*正しいメールアドレスの形式で入力して下さい',
        required: '*入力必須項目です',
    });

    //入力項目の検証ルール定義
    var rules = {
        name: { required: true },
        mail_address: { required: true, email: true },
        content: { required: true }
    };

    //入力項目ごとのエラーメッセージ定義
    var messages = {
        name: {
            required: "*名前を入力してください"
        },
        mail_address: {
            required: "*メールアドレスを入力してください"
        },
        content: {
            required: "*内容を入力してください"
        }
    };

    $(function() {
        $('#inquiry_form').validate({
            rules: rules,
            messages: messages,

            //エラーメッセージ出力箇所調整
            errorPlacement: function(error, element) {
                // if (element.is(':radio')) {
                //     error.appendTo(element.parent());
                // } else {
                    // console.log(element);
                    error.insertAfter(element);
                // }
            }
        });
    });
})();
