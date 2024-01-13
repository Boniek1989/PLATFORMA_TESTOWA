<html>
  <head>
    <title>{{ $title ?? 'Platforma testowa' }}</title>
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
  </head>
  <body>
   
<nav class="sidenav" id="Navibar">
  <form method= "post" action="/admin_auth_control">
  @csrf
  <label for="fname">Użytkownik:</label><br><br>
  <input type="text" id="AdminPassword" name="AdminUser"><br><br>
  <label for="lname">Hasło:</label><br><br>
  <input type="password" id="AdminPassword" name="AdminPassword"><br><br><br>
  <input type="submit" value="Zatwierdź">
  </form>

  
  <form method= "post">
  @csrf
  <label for="fname">Nazwa uczestnika:</label><br><br>
  <input type="text" id="AdminPassword" name="AdminUser"><br><br>
  <input type="submit" value="Rozpocznij Test"> <input type="submit" value="Regulamin Testu"><input type="submit" value="Lista Wyników">
  </form><br><br><br>
  <input type="submit" value="Wyjdź" onclick="closeNav()"><br><br><br>
  </div>
  <script>
  function openNav() 
  {
  document.getElementById("Navibar").style.width = "35%";
  document.getElementById("Navibar").style.height = "100%";
}
  function closeNav()
  {
  document.getElementById("Navibar").style.width = "0";
  document.getElementById("Navibar").style.height = "100%";
}


</script>

</nav>
<nav>

</nav>


    {{ $slot }}
    
  
  </body>
</html>