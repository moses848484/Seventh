@php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Crypt;
@endphp

<h4 class="mb-3">Two-Factor Authentication</h4>

@if (! Auth::user()->two_factor_secret)
    <form method="POST" action="{{ url('/user/two-factor-authentication') }}">
        @csrf
        <button type="submit" class="btn btn-success">
            Enable Two-Factor Authentication
        </button>
    </form>
@else
    <div class="alert alert-success mb-3">
        Two-Factor Authentication is enabled.
    </div>

    <!-- QR Code -->
    <div class="mb-3">
        <h6>QR Code:</h6>
        {!! Auth::user()->twoFactorQrCodeSvg() !!}
    </div>

    <!-- Recovery Codes -->
    <div class="mb-3">
        <h6>Recovery Codes:</h6>
        <ul class="list-group">
            @foreach (json_decode(decrypt(Auth::user()->two_factor_recovery_codes), true) as $code)
                <li class="list-group-item font-monospace">{{ $code }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Regenerate Recovery Codes -->
    <form method="POST" action="{{ url('/user/two-factor-recovery-codes') }}" class="d-inline-block">
        @csrf
        <button type="submit" class="btn btn-warning me-2">
            Regenerate Recovery Codes
        </button>
    </form>

    <!-- Disable 2FA -->
    <form method="POST" action="{{ url('/user/two-factor-authentication') }}" class="d-inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            Disable Two-Factor Authentication
        </button>
    </form>
@endif
