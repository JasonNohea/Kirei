<!-- resources/views/provinces/create.blade.php -->
<form action="{{ route('provinces.store') }}" method="POST">
    @csrf
    <label for="province_name">Province Names:</label>
    <textarea name="province_name" id="province_name" rows="5" cols="50"></textarea>
    @error('province_name')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
    <button type="submit">Create Provinces</button>
</form>
