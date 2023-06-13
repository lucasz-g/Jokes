<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Joke Getter</title>   
</head>
<body class="joke">
<div>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Get the selected category and type from the form
        $category = $_POST['category'];
        $type = $_POST['type']; 

        //API URL with the category and type selected 
        $url = "https://v2.jokeapi.dev/joke/$category?$type?format=json";  
        //HTTP request to API
        $response = file_get_contents($url); 
        //Check if the json response was successful
        if($response != false){
            $json = json_decode($response, true);
            //Check if the API returned a valid joke
            if($json['type'] === 'single'){
                //Check if it's a single part joke 
                $joke = $json['joke'];
            }elseif($json['type'] === 'twopart'){
                //Check if it's a two part joke 
                $setup = $json['setup']; 
                $delivery = $json['delivery'];
                $joke = "$setup $delivery"; 
            }else{
                $joke = "Error finding jokes."; 
            }
            //Show joke
            echo "<h2>Joke: </h2>";
            echo "<p>$joke</p>";
        }else{
            echo "Error making HTTP request to API."; 
        }
    }
    ?> 
</div>
    <a class="back-button" href="index.php">Back</a>
</body>
</html>
