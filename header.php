<?php include 'db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
        align-items: center;
        justify-content: center;
        background-size: auto;
        background-image: url("town.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    body::before {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 10%;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url("thumbnail.jpg");
        background-size: cover;
        filter: blur(10px);
        -webkit-filter: blur(3px);
    }

    header {
        margin: 5px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(lightgreen, lightyellow);
        color: #000;
        padding: 20px;
        letter-spacing: 2px;
        font-style: normal;
    }

    header h1 {
        font-size: 40px;
        font-weight: bold;
    }

    header h2 {
        font-size: 25px;
        font-weight: bold;
    }

    header h3 {
        font-size: 20px;
        font-weight: bold;
    }

    .col-md-2 {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
        margin-right: 10px; 
    }
</style>

<body>
<header>
 <div class="row">
      <div class="col-md-2">
        <img src="Central_Philippines_State_University_Logo (1).jpg" alt="University Logo" class="img-fluid">
      </div>
      <div class="col-md-10">
        <h1>Central Philippines State University</h1>
        <h2>Main Campus, Kabankalan City, Negros Occidental, 6111</h2>
        <h3>Student Listing</h3>
      </div>
    </div>
    </header>

  <div class="container">
  
        
  
 
