<form method="POST" action="{{ route('other-browser-sessions.destroy') }}">
    @csrf
    @method('DELETE')

    <h4 class="mb-3">Logout Other Browser Sessions</h4>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" name="password" type="password" class="form-control" required>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-danger">Logout Other Sessions</button>
</form>
