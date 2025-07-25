<form method="POST" action="{{ route('current-user.destroy') }}">
    @csrf
    @method('DELETE')

    <h4 class="mb-3 text-danger">Delete Account</h4>

    <p class="text-muted">Once your account is deleted, all of its resources and data will be permanently deleted.</p>

    <div class="mb-3">
        <label for="password" class="form-label">Password Confirmation</label>
        <input id="password" name="password" type="password" class="form-control" required>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-danger">Delete Account</button>
</form>
