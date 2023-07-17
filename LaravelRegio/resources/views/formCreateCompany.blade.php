<!-- resources/views/users/create.blade.php -->
<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <!-- User Information -->
    <label for="user_type">User Type:</label>
    <input type="text" name="user_type" id="user_type" value="{{ old('user_type') }}">
    @error('user_type')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
    @error('first_name')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
    @error('last_name')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">
    @error('email')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    @error('password')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
    @error('phone_number')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <!-- Company Information -->
    <label for="company_name">Company Name:</label>
    <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}">
    @error('company_name')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="address">Address:</label>
    <textarea name="address" id="address" rows="5" cols="50">{{ old('address') }}</textarea>
    @error('address')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="city">City:</label>
    <input type="text" name="city" id="city" value="{{ old('city') }}">
    @error('city')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="province">Province:</label>
    <input type="text" name="province" id="province" value="{{ old('province') }}">
    @error('province')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <label for="number_of_employee">Number of Employees:</label>
    <input type="number" name="number_of_employee" id="number_of_employee" value="{{ old('number_of_employee') }}">
    @error('number_of_employee')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
<!--
    <label for="profile_photo">Profile Photo:</label>
    <input type="file" name="profile_photo" id="profile_photo">
    @error('profile_photo')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
-->

    <button type="submit">Create User and Company</button>
</form>
