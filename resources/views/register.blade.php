<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf 
        <label for="first_name"></label>
        <p>First Name:</p>
        <input type="text" name="first_name" id="first_name">
        <p>Last Name:</p>
        <input type="text" name="last_name" id="last_name">
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select><br>
        <p>Language Spoken:</p>
        <input type="checkbox" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" value="other">
        <label for="other">Other</label>
        <p>Bio:</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up" name="submit" id="submit">
    </form>
</body>

</html>