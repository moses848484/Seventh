<form method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')

    <h4 class="mb-3">Update Password</h4>

    <div class="mb-3">
        <label for="current_password" class="form-label">Current Password</label>
        <input id="current_password" name="current_password" type="password" class="form-control" required>
        @error('current_password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input id="password" name="password" type="password" class="form-control" required>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm New Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Password</button>
</form>
