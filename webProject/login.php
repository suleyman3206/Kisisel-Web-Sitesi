<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-AU-Compatible" content="ie=edge">
  <title>Login</title>

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous" defer>
  </script>  
  
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  
 <!-- all other page content -->
 <nav id="navbar" class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand" href="index.html"><img src="Assets/img/logo.png" alt="" ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
                aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav" >
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ilgiAlanlarım.html">İlgi alanlarım</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="miras.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </nav>

   
  <div class="container" style="height:85vh;">
  <header>
		<div> 
			<h1>LOGIN</h1>
	  </div>
	</header>
  <main>
    <div>    
      
      <form action="Controllogin.php" method="POST" >
        <div>
          <label>Kullanıcı Adı</label>  
          <input type="text" name = "kullaniciadi" placeholder = "b201210069@sakarya.edu.tr" required> 
        </div>
        <div>
          <label>Şifre</label>  
          <input type="password" name = "password" placeholder = "b201210069" required> 
        </div>
        <div>
          
          <input type="submit"> 
        </div>       
      </form>          
    </div>
  </main>
  </div>
   
  <footer id="footer">
				<p>Bu site © SBD tarafından yapılmıştır 2022</p>
			</footer>

</body>
</html>