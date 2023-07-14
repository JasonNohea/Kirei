<!-- resources/views/skills/create.blade.php -->
<form action="{{ route('skills.store') }}" method="POST">
    @csrf
    <label for="skillname">Skill Names:</label>
    <textarea name="skillname" id="skillname" rows="5" cols="50"></textarea>
    @error('skillname')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
    <button type="submit">Create Skills</button>
</form>
