<!DOCTYPE html>

<html>

<head>
    <title>Exercise I</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.mi\
n.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3">

        <!-- Form that sends data to capture.php -->

        <form role="form" method="post" action="capture.php">

            <!-- Name Field -->

            <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" class="form-control" id="name" required="requ\
ired" name="name">
            </div>

            <!-- Email Field -->

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" required="re\
quired" name="email">
            </div>

            <!-- Button to submit -->

            <button type="submit" class="btn btn-info btn-block">Greet me!</butt\
on>

        </form>

    </div>
    <div>
</body>

</html>
