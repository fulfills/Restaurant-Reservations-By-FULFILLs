(function($){

    $('input[type="submit"].rerebf-store').click(function(){

        var $this_submit = $(this);
        $this_submit.val('保存中...');

        var $form = $(this).closest('form');
        var serialize = $form.serializeArray(); // 取得データ
        var post_data = {}; // 送信データ（配列形式）
        for (i in serialize) {
          var key   = serialize[i]["name"];
          var value = serialize[i]["value"];
          post_data[key] = value;
        }

        $.ajax({
            type: 'POST',
            url: rerebf_save_ajax_url,
            data: {
                'action': 'rerebf_ajax',
                'data': JSON.stringify(post_data),
                'type': $form.attr('rerebf'),
                'secure': rerebf_nonce,
            }
        })
        .done( (data) => {
            $this_submit.val('保存しました');
            setTimeout(function(){
                $this_submit.val('変更を保存する')
            },3000);
            console.log(data);
        });

        return false;
    });
    
})(jQuery);