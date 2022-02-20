<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>

    <h1>Add a new artist</h1>
    
    <form class="artist-form" action="store.php" method="post">
        <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="">
        </div>
        <div>
        <label for="birth">Born:</label>
        <input type="number" name="birth" id="birth" value="">
        </div>
        <div>
        <label for="death">Died:</label>
        <input type="number" name="death" id="death" value="">
        </div>
        <div>
        <label for="bio">Bio:</label>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        </div>
        <div>
        <label for="country">Nationality:</label>
        <input type="text" name="country" id="country" value="">
        </div>
        <div>
        <label for="movement">Movement:</label>
        <input type="text" name="movement" id="movement" value="">
        </div>
        <div>
        <label for="picture_url">URL of picture:</label>
        <input type="text" name="picture_url" id="picture_url" value="">
        </div>
        <button>Save</button>
    </form>

</body>
</html>