@include('Components.header')

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<div class="container">
    <div class="welcome">
        <div class="logohome">
            <img alt="CCA logo" class="h-16 undefined" loading="lazy" src="/Img/CCA_SEAL_DARK.png">
        </div>
        <div class="textwelcome">
            <h2>City College of Angeles  </h2>
      
            <h4>Totalis Humanae </h4>
        </div> 
    </div>
  
    <div class="Login">
        <h3>Login</h3>
        <form action="" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required placeholder="Enter Email"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter Password"><br><br>
            <h4><a href="">Forgot Password?</a></h4>
            <input type="submit" value="Login">
        </form>
    </div>
</div>

@include('Components.footer')