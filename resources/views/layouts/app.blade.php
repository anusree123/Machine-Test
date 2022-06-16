<!DOCTYPE html>
<html>

<head>
    <title>User</title>

    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- fav icon -->
    <link rel="icon" href="img/fav.png" sizes="32x32" />

    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: 'Montserrat', sans-serif;
  background-color: #eee9e9bf !important;
}
.search-container .btn{
    position: absolute;
    top: 0;
    right: 0;
}
.search-container .form-group{
    position: relative;
}
.user-section{
    margin-top: 100px;
}
.user-section label{
    font-weight: 700;
}
.user-section .card{
    padding: 20px 20px;
    margin-bottom: 30px;
}

    </style>

</head>
<body>


    <main class="main">
        @yield('content')
    </main>





</body>
</html>
