<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form A</title>
</head>
<body>
    <div>
        <form action="formA.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nama">Nama</label><input type="text" name="nama" id="nama" onclick="record1()">
        </div>
        <div>
            <label for="password">Password</label><input type="password" name="pass" id="word" onclick="record2()">
        </div>
        <div>
            <label for="audio">Audio</label><input type="file" name="audio" id="audio">
        </div>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>
        </form>
    </div>
<script src="formA.js"></script>
<script src="js/speech.js"></script>
</body>
</html>