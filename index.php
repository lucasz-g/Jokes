<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Joke Getter</title>
</head>
<body>
    <div class="form">
    <h1>Joke Getter</h1>
    <form action="GetJokes.php" method="POST">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="Misc">Misc</option>
            <option value="Programming">Programming</option>
            <option value="Pun">Pun</option>
            <option value="Dark">Dark</option>
            <option value="Spooky">Spooky</option>
            <option value="Christmas">Christmas</option> 
        </select>
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="Single">Single</option>
            <option value="Two Part">Two Part</option>
        </select>
        <input type="submit" value="Get Joke">
    </form>
    </div>
</body>
</html>
