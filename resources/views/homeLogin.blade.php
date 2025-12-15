@include('Components.header')

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<div class="container">
    <div class="welcome">
        <div class="logohome">
            <img alt="CCA logo" class="h-16 logo-img" loading="lazy" src="{{ asset('Img/CCA_SEAL_DARK.png') }}">
        </div>
        <div class="textwelcome">
            <h2>City College of Angeles</h2>
            <h4>Totalis Humanae</h4>
            <br>
            <p>Welcome to City College of Angeles Student Parking Portal</p>
        </div> 
    </div>
  
    <div class="Login">
        <h1>Login</h1>
        <br>
        <form action="" method="POST">
            @csrf
            
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter Email" value="{{ old('email') }}">
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter Password">
            </div>

            <div class="form-footer">
                <h4><a href="#" class="white-link">Forgot Password?</a></h4>
                <h4><a href="{{ route('register') }}" class="white-link">Register</a></h4>
                
            </div>
            <button type="submit" class="btn-submit">Login</button>
        </form>
    </div>
</div>

@include('Components.footer')