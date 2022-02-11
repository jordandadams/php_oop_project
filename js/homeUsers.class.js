class HomeUsers {

    showAllUsers() {
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
    }



}