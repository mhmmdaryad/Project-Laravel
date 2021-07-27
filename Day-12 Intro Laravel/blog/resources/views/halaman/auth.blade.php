<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Buat Account baru</h1>
    <h2>Sign up Form</h2>
    <form action="/send" method="POST">
        <label for="">First Name :</label><br><br>
        <input type="text" name="nama"><br><br>
        <label for="">Last Name :</label><br><br>
        <input type="text"><br><br>
        <label for="">Gender :</label><br><br>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br>
        <input type="radio" name="gender">Other<br><br>
        <label for="">Nationality :</label><br><br>
        <select name="negara" id="">
            <option value="indonesia">Indonesian</option>
            <option value="malaysia">Malaysian</option>
            <option value="unitedstates">Australian</option>
        </select><br><br>
        <label for="">Language Spoken :</label><br><br>
        <input type="checkbox" name="" id=""> Bahasa Indonesia <br>
        <input type="checkbox" name="" id=""> English <br>
        <input type="checkbox" name="" id=""> Other <br><br>
        <label for="">Bio :</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>