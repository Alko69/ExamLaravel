<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
</head>
<body>
    <header>
      <nav>
        <ul id="navul">
          <li><a class = "nava" style="color: black" href="/">Accueil</a></li>
          <li><a class = "nava" href="characters">Personnages</a></li>
          <li><a class = "nava" href="addCharacter">Ajouter un Personnage</a></li>    
          <li><a class = "nava" href="cartoonists">Dessinateurs</a></li>         
          <li><a class = "nava" href="addCartoonist">Ajouter un Dessinateur</a></li>  
        </ul>
      </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>