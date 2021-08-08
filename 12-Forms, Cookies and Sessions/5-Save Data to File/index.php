
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Save Form Data To File</title>
</head>

<body>
<h1>Save Form Data To File</h1>
<form action="display.php" method="get">

    <fieldset>

        <legend>Student Enquiry Form</legend>
        <p>
            <label for="input_text">Text:</label>
            <input name ="input_text" type="text" placeholder="Text">
        </p>
        <p>
            <label for="input_email">Email:</label>
            <input name ="input_email" type="email" placeholder="test@domain.com">
        </p>
        <p>
            <input type="radio" name="gender" value="Male" checked> Male<br>
            <input type="radio" name="gender" value="Female"> Female<br>
        </p>
        <p>
            Hobbies
            <input type="checkbox" name="surfing" checked> Surfing<br>
            <input type="checkbox" name="tv"> Watching TV<br>
            <input type="checkbox" name="sports"> Playing Sports
        </p>

    </fieldset>

    <p><input type="submit"> &nbsp;&nbsp; <input type="reset"></p>
</form>
</body>
</html>
