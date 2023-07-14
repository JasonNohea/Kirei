<!-- resources/views/cities/create.blade.php -->
<form action="{{ route('city.store') }}" method="POST">
    @csrf
    <label for="city_name">City Names:</label>
    <textarea name="city_name" id="city_name" rows="5" cols="50"></textarea>
    @error('city_name')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
    <button type="submit">Add Cities</button>
</form>
