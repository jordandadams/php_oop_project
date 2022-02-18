class HomeUsers {

    constructor() {
        this.id
    }


    errorMessage() {
        alert('Error has occured!');
        location.reload;
    }

    getUsers() {
        var self = this;
        var request = {
            request: 'get_users'
        };

        $.ajax({
            type: "POST",
            url: "../routes/homeUsers.php",
            data: request,
            success: function(result) {
                console.log(result);
                var result = JSON.parse(result);
                if (typeof result === 'object' && result !== null) {
                    self.createUsersTable(result);
                }
                else {
                    self.errorMessage();
                }
            }
        })
    }

    getTableButtons() {
        var edit = `
        <span class='text-primary cursor-pointer td-action-buttons' data-toggle='modal' data-placement='bottom' title='Edit' data-target="#newUserModal"><i class='far fa-edit transform icons'></i></span>
        `;
        var buttons = [edit];
        return buttons;
    }

    createUsersTable(rows) {
        var htmlArray = [];
        for (var rowArray of rows) {
            var id = (rowArray['id']);
            var firstName = (rowArray['first_name']);
            var lastName = (rowArray['last_name']);
            var email = (rowArray['email_name']);
            var phone = (rowArray['phone_name']);
            var buttons = this.getTableButtons(rowArray['id']);

            var html = `
                <tr class='text-center'>
                    <td>${id}</td>
                    <td>${firstName}</td>
                    <td>${lastName}</td>
                    <td>${email}</td>
                    <td>${phone}</td>
                    <td style='text-align:center;'>${buttons}</td>
                </tr>
            `;

            htmlArray.push(html);
        }

        var html = htmlArray.join('');

        $('#users_table_tbody').html(html);
        $('#users_table_tbody').trigger("update").trigger("appendCache").trigger("applyWidgets");

        if (html.length > 0) {
            $('#users_table').removeClass('d-none');
        }
    }

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
                console.log(result);
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