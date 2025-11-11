function handleLogin(){
    var username = $('#username').val().trim(), password = $('#password').val().trim();
    if(username == "" || password == ""){
        show_message("error", "Vui lòng nhập đầy đủ thông tin!");
        return;
    }else{
        var xhr = new XMLHttpRequest();
        var formData = new FormData($('#loginForm')[0]);
        $.ajax({
            url: baseUrl + '/index/do_login',  //server script to process data
            type: 'POST',
            xhr: function() {
                return xhr;
            },
            data: formData,
            success: function(data){
                var result = JSON.parse(data);
                if(result.success == true){
                    window.location.href = baseUrl + '/index?token='+result.token;
                    localStorage.setItem('token',result.token);
                }else{
                    show_message('error', result.msg);
                    return false;
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
}