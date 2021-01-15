<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Project</title>
</head>
<body>
    <div class="container">
        <div class="post-index-test">
            <form method= "POST">
                @csrf
                Title: <input id="titleInput" type="text" name="titleInput">
                Body: <input id="bodyInput" type="text" name="bodyInput">
                <button class="btn btn-primary pull-center" name="btnButton" value="Submit">Submit</button>
            </form>
                
        </div>  
    </div>

</body>
</html>