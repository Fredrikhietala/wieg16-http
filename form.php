<form method="post" action="form.php">
    <label>Name</label><br>
    <input type="text" name="name"><br>
    <label>Email</label><br>
    <input type="text" name="email"><br>
    <label>Age</label><br>
    <input type="number" name="age"><br>
    <label>Occupation</label><br>
    <input type="text" name="occupation"><br>
    <button type="submit">Submit</button>
</form>

<?php

    echo "Namn: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Ålder: " . $_POST["age"] . "<br>";
    echo "Yrke: " . $_POST["occupation"] . "<br>";
?>