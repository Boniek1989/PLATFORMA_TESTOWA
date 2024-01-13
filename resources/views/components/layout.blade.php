<html>
  <head>
    <title>{{ $title ?? 'Platforma testowa' }}</title>
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
  </head>
  <body>
   
<nav class="sidenav" id="Navibar">
  <div class="admin_logon">
   <span class="button_fixed" onclick="openAdminfullscreen();">Rozwiń</span>
  <form method= "post" action="/admin_auth_control" class="footer_value_index">
  @csrf
  <label for="fname">Użytkownik:</label>
  <input type="text" id="AdminPassword" name="AdminUser">
  <label for="lname">Hasło:</label>
  <input type="password" id="AdminPassword" name="AdminPassword">
  <input type="submit" value="Zatwierdź">
  </form>
<span class="button_fixed" onclick="closeAdmin();"> Zwiń </span>
</div>
</nav>
  <script>
  function openAdmin() 
  {
  document.getElementById("Navibar").style.width = "100%";
  document.getElementById("Navibar").style.height = "auto";
}
function openAdminfullscreen() 
  {
  document.getElementById("Navibar").style.width = "100%";
  document.getElementById("Navibar").style.height = "100%";
}
  function closeAdmin()
  {
  document.getElementById("Navibar").style.width = "100%";
  document.getElementById("Navibar").style.height = "0%";
}



</script>




    {{ $slot }}
    
  
  </body>
</html>