<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <title>SKRRT</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Add User</h1>
        <form id="userForm">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <select name="gender" id="gender" class="form-select">
                    <option value="-1" selected disabled>Select a gender</option>
                    <option value="f">Female</option>
                    <option value="m">Male</option>
                    <option value="o">Other</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" id="btnSubmit">Submit</button>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $("#btnSubmit").click(function () {
                $.ajax({
                    url: 'adddata.php',
                    type: 'POST',
                    data: $('#userForm').serialize(),
                    success: function (response) {
                        alert(response);
                        // Clear form fields after successful submission
                        $('#userForm')[0].reset();
                    },
                    error: function (e) {
                        alert("Error: " + e.responseText);
                    }
                })
            })
        })
    </script>
</body>

</html>
