<?php include('dbConn.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- application form -->
        <div class>
            <form id="loanForm" method="POST" action="formTemp.php">
                <header>
                    <h3>Personal Loan Application</h3>
                </header>
                <hr>
                <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Personal Details:</th>
                                <th></th>
                                <th>*To be completed by individual applicants</th>                                
                                <th></th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Full Name</td>
                            <td><input type="text" name="fname" value="" size="20" placeholder="Firstname" aria-required="true" required><input type="text" name="lname" value="" placeholder="Surname" aria-required="true" required></td>
                            <td>I.D/ Driver's License/Passport</td>
                            <td><input type="text" aria-required="true" name="nat_id" required></td>
                        </tr>
                        <tr>
                            <td>Gender/Title</td>
                            <td><select name="gender">
                                <option value="mr" selected>Mr</option>
                                <option value="mrs">Mrs</option>
                                <option value="ms">Ms</option>
                                <option value="other">Other</option>
                            </select></td>
                            <td>Date of Birth</td>
                            <td><input type="date" name="dob" value=""></td>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td><input type="text" name="tel" value="" placeholder="Landline"></td>
                            <td><input type="text" name="cell" value="" placeholder="Mobile"></td>
                            <td><input type="email" name="email" value="" placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea name="address"></textarea></td>
                            <td>
                                Length of stay<br><br>
                                Ownership of property (<em>Proof</em>)
                            </td>
                            <td>
                                <input type="text" name="los"><br><br>
                                <select name="ownership">
                                    <option value="owned" selected>Owned</option>
                                    <option value="rented">Rented</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <button class="btn btn-dark" type="submit" name="apply">Apply Loan</button>
            </form>
        </div>

        <!-- javascript -->
        <script src="" async defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
