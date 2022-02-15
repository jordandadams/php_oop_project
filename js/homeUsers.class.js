class HomeUsers {

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
        var self = this;

        $.ajax({
            type: "POST",
            url: "../routes/homeUsers.php",
            data: {
                request: 'insert_user'
            },
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