<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menampilkan Data User</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">	
</head>
<body>
	<h1>Tabel User</h1>
	<br>
	<div align="center" style="padding: 0 15px;">
      <div class="row">
        <div class="col-xs-12 col-sm-10">
          <div style="margin-left: 100px;" class="input-group">
            <input type="text" class="form-control" placeholder="Pencarian..." id="keyword" onclick="record3()">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
              <a href="" class="btn btn-warning">RESET</a>
            </span>
          </div>
        </div>
	  </div>
	  <br>
		<div id="view"><?php include "view.php";?></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/speech.js"></script>
    <script src="js/enter-ajax.js"></script>
</body>
</html>