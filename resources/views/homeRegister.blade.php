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
  
    <div class="Register">
        <h1>Register</h1>
        <br>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter Name" value="{{ old('name') }}">
            </div>
            <div class="input-group">
                <label >Section :</label>
                <input type="text" required placeholder="Enter Section" value="{{ old('student_id') }}">
            </div>

            <div class="input-group">
                <label for="course">Course:</label>
                <select name="course" id="course" required>
                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                    <option value="Bachelor of Science in Information Systems">Bachelor of Science in Information Systems</option>
                    <option value="Associate in Computer Technology">Associate in Computer Technology</option>
                    <option value="Bachelor of Library and Information Science">Bachelor of Library and Information Science</option>
                    <option value="Bachelor of Physical Education">Bachelor of Physical Education</option>
                    <option value="Bachelor of Technical-Vocational Teacher Education Major in Food and Service Management">Bachelor of Technical-Vocational Teacher Education Major in Food and Service Management</option>
                    <option value="Bachelor of Arts in English Language Studies">Bachelor of Arts in English Language Studies</option>
                    <option value="Bachelor of Special Needs Education">Bachelor of Special Needs Education</option>
                    <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
                    <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
                    <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                    <option value="Bachelor of Science in Entrepreneurship">Bachelor of Science in Entrepreneurship</option>
                    <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                </select>
            </div>
            <div class="input-group">
                <label for="year">Year:</label>
                <select id="year" name="year" required>
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                    <option value="5th">5th Year</option>
                </select>
            </div>
            <div class="input-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required placeholder="Enter Address" value="{{ old('address') }}">
            </div>

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
                <h4>Register</h4>
                
            </div>
            <button type="submit" class="btn-submit">Login</button>
        </form>
        <div>
            @if(session('success'))
                <p style="color:green;">{{ session('success') }}</p>
            @endif

        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>

@include('Components.footer')