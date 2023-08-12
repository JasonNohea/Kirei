<!-- resources/views/users/create.blade.php -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('usersC.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- User Information -->
    <div>
        <label for="user_type">User Type:</label>
        <input type="text" name="user_type" id="user_type" value="{{ old('user_type') }}">
        @error('user_type')
            <div class="text-red-500">{{ $message }}</div> 
        @enderror
    </div>

    <div>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
        @error('first_name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
        @error('last_name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        @error('password')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
        @error('phone_number')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <!-- Company Information -->
    <div>
        <label for="company_name">Company Name:</label>
        <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}">
        @error('company_name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="address">Address:</label>
        <textarea name="address" id="address" rows="5" cols="50">{{ old('address') }}</textarea>
        @error('address')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="position">Position:</label>
        <input type="text" name="position" id="position" value="{{ old('position') }}">
        @error('position')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label for="city">City:</label>
        <select name="city_id" id="city_id">
            @foreach ($cities as $city)
                <option value="{{ $city->id }}" {{ old('city') == $city->id || $loop->first ? 'selected' : '' }}>
                    {{ $city->city_name }}
                </option>
            @endforeach
        </select>
        @error('city_id')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label for="province">Province:</label>
        <select name="province_id" id="province_id">
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}" {{ old('province') == $province->id || $loop->first ? 'selected' : '' }}>
                    {{ $province->province_name }}
                </option>
            @endforeach
        </select>
        @error('province_id')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <!--
    <div>
        <label for="city">City:</label>
        <select name="city" id="city">
            @foreach ($cities as $city)
                <option value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>
                    {{ $city->city_name }}
                </option>
            @endforeach
        </select>
        @error('city')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label for="province">Province:</label>
        <select name="province" id="province">
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}" {{ old('province') == $province->id ? 'selected' : '' }}>
                    {{ $province->province_name }}
                </option>
            @endforeach
        </select>
        @error('province')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
-->
    <!--
    <div>
        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="{{ old('city') }}">
        @error('city')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="province">Province:</label>
        <input type="text" name="province" id="province" value="{{ old('province') }}">
        @error('province')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
-->
    <div>
        <label for="number_of_employee">Number of Employees:</label>
        <select name="number_of_employee" id="number_of_employee">
            <option value="1-20">1 to 20</option>
            <option value="21-50">21 to 50</option>
            <option value="51-100">51 to 100</option>
            <option value="101-200">101 to 200</option>
            <option value="201-500">201 to 500</option>
            <option value="501-1000">501 to 1000</option>
            <option value=">1000">More than 1000</option>
        </select>
        @error('number_of_employee')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="profile_photo">Profile Photo:</label>
        <input type="file" name="profile_photo" id="profile_photo">
        @error('profile_photo')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit">Create User and Company</button>
</form>