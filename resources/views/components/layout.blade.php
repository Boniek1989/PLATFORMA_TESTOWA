<html>
  <head>
    <title>{{ $title ?? 'Platforma testowa' }}</title>
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
  </head>
  <body>
   
<nav class="topnav" id="Adminbar">
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
<nav class="downnav" id="Studbar">
  <div class="admin_logon">
  <span class="button_fixed" onclick="openStudfullscreen();">Rozwiń</span>
  <a href="{{url('test_run')}}" class="button_fixed">Rozpocznij test</a> 
  <span class="button_fixed" onclick="closeStud();"> Zwiń </span>
</div>
</nav>
  <script>
  function openAdmin() 
  {
  document.getElementById("Adminbar").style.width = "100%";
  document.getElementById("Adminbar").style.height = "auto";
}
function openAdminfullscreen() 
  {
  document.getElementById("Adminbar").style.width = "100%";
  document.getElementById("Adminbar").style.height = "100%";
}
  function closeAdmin()
  {
  document.getElementById("Adminbar").style.width = "100%";
  document.getElementById("Adminbar").style.height = "0%";
}
function openStud() 
  {
  document.getElementById("Studbar").style.width = "100%";
  document.getElementById("Studbar").style.height = "auto";
}
function openStudfullscreen() 
  {
  document.getElementById("Studbar").style.width = "100%";
  document.getElementById("Studbar").style.height = "100%";
}
  function closeStud() 
  {
  document.getElementById("Studbar").style.width = "100%";
  document.getElementById("Studbar").style.height = "0%";
}



</script>




    {{ $slot }}
    
  
  </body>
</html>