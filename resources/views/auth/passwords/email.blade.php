@extends('auth.layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Forgot Password?</h5>
                        <p class="text-muted">Reset password with velzon</p>

                        <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c"
                            class="avatar-xl"></lord-icon>

                    </div>

                    <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                        Enter your email and instructions will be sent to you!
                    </div>
                    <div class="p-2">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Enter Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-success w-100"
                                    type="submit">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form><!-- end form -->
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 text-center">
                <p class="mb-0">Wait, I remember my password... <a href="{{ route('login') }}"
                        class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <!-- particles js -->
    <script src="{{ asset('theme/admin/assets/libs/particles.js/particles.js') }}"></script>

    <!-- particles app js -->
    <script src="{{ asset('theme/admin/assets/js/pages/particles.app.js') }}"></script>
@endsection
