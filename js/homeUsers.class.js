class HomeUsers {


    errorMessage() {
        alert('Error has occured!');
        location.reload;
    }

    /*showAllUsers() {
        $.ajax({
            type: "POST",
            url: "../routes/homeUsers.php",
            data: {
                request: 'get_users'
            },
            success: function(result) {
                var result = JSON.parse(result);
                console.log(result);
            }
        })
    }*/

    insertUsers() {
        var request = {
            request: 'insert_user'
        };
        request['first_name'] = $('#insert_user_modal_first_name').val();
        request['last_name'] = $('#insert_user_modal_last_name').val();
        request['email'] = $('#insert_user_modal_email').val();
        request['phone'] = $('#insert_user_modal_phone').val();

        $.ajax({
            type: "POST",
            url: "../routes/homeUsers.php",
            data: request,
            success: function(result) {
                var result = JSON.parse(result);
                if (result == '1') {
                    location.reload();
                } else {
                    self.errorMessage();
                }
            }
        });
    }



}