<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ url('assets/logo.png')}}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/registalent.css')}}" />
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title> Register RegiO </title>
</head>

<body>
    <a href="/home_talent"><p class="cta-home">Back to Home</p></a>
    <div class="container">

        <!-- Floating Content -->
        <div class="kanan">
            <h2> Let Us Find Your Job </h2>
            <h2 class="alter"> Vacancy </h2>
            <img src="{{ url('assets/logov2.png')}}" width="200px">
        </div>

        <!-- Form Register -->

        <form action="{{ route('usersT.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1> Register </h1>
            <hr>
            <input type="text" placeholder=" First Name" name="first_name" id="fname" required>
            <input type="text" placeholder=" Last Name" name="last_name" id="lname" required>
            <hr>
            <select name="gender">
                <option value='M'> Male </option>
                <option value='F'> Female </option>
            </select>
            <hr>
            <input type="email" placeholder=" Email" name="email" id="email" required>        
            <hr>
            <input type="password" placeholder=" Password" name="password" id="pass" required>
            <hr>
            <input type="text" placeholder=" Phone Number" name="phone_number" id="phone" required>
            <hr>
            <input type="date" name="birth_date" id="birth_date">
            <hr>
            <select class="provinsi" name="province_id" id="province_id">
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}" {{ old('province') == $province->id || $loop->first ? 'selected' : '' }}>
                            {{ $province->province_name }}
                        </option>
                    @endforeach
                @error('province_id')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </select>
            <hr><hr>
            <select class="kota"name="city_id" id="city_id">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" {{ old('city') == $city->id || $loop->first ? 'selected' : '' }}>
                            {{ $city->city_name }}
                        </option>
                    @endforeach
                @error('city_id')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </select>  
            <hr><hr>

        <!-- Upload Content -->
        
        <div class="upload">
            <div class="cv">    
            <label class="cv"> Upload CV &nbsp;</label> <hr>
            <div class="image-upload">
                <label for="file-input">
                    <img src="{{ url('assets/uploadicon.png')}}">
                </label>
                <input id="file-input" type="file"/>
            </div>
            </div>

            <div class="porto">
            <label class="porto"> Upload Portofolio &nbsp;</label> <hr>
            <div class="image-upload">
                <label for="file-input">
                    <img src="{{ url('assets/uploadicon.png')}}">
                </label>
                <input id="file-input" type="file"/>
            </div>
            </div>
        </div>
        <hr>
            <input type= "submit" value="Register" class="register"></input>
        </hr>
        <p class="mid account"> Already Have Account? &nbsp; <span class="login"> <a href="#" class="regist"> Login </a></span></p>
        </form>
</div>
</body>
</html>