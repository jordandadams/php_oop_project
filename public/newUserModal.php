<!-- The New User Modal -->
<div class="modal fade" id="newUserModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post" id="form-data">
                    <div class="form-group">
                        <input type="text" id="insert_user_modal_first_name" name="fname" class="form-control mb-3" placeholder="First Name" required>
                        <input type="text" id="insert_user_modal_last_name" name="lname" class="form-control mb-3" placeholder="Last Name" required>
                        <input type="text" id="insert_user_modal_email" name="email" class="form-control mb-3" placeholder="Email Address" required>
                        <input type="text" id="insert_user_modal_phone" name="phone" class="form-control mb-3" placeholder="Phone Number" required>
                    </div>
                    <div >
                        <input type="submit" name="insert" id="insert_user" value="Add User" class="btn btn-success btn-block" onclick="homeUsers.insertUsers();">
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>