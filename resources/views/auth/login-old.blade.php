@extends('auth.layouts.app')

@section('content-auth')
    <div class="auth-page d-flex align-items-center min-vh-100">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="d-flex flex-column h-100 py-5 px-4">
                        <div class="text-center text-muted mb-2">
                            <div class="pb-3">
                                <a href="index.html">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span
                                            class="logo-txt">Vuesy</span>
                                    </span>
                                </a>
                                <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience & Interface Design
                                    Strategy Saas Solution</p>
                            </div>
                        </div>

                        <div class="my-auto">
                            <div class="p-3 text-center">
                                <img src="assets/images/auth-img.png" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Vuesy. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                Themesdesign
                            </p>
                        </div>
                    </div>

                    <!-- end auth full page content -->
                </div>
                <!-- end col -->

                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg bg-light py-md-5 p-4 d-flex">
                        <div class="bg-overlay-gradient"></div>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center g-0 align-items-center w-100">
                            <div class="col-xl-4 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3 py-3">
                                            <div class="text-center">
                                                <h5 class="mb-0">Welcome Back !</h5>
                                                <p class="text-muted mt-2">Sign in to continue to Printing Factory.</p>
                                            </div>
                                            <form class="mt-4 pt-2 form-data" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-floating form-floating-custom mb-3">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="input-email" placeholder="Enter Email" name="email"
                                                        value="{{ old('email') }}" autocomplete="email" autofocus>
                                                    <label for="input-email">Email</label>
                                                    <div class="form-floating-icon">
                                                        <i class="uil uil-envelope-alt"></i>
                                                    </div>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" autocomplete="current-password" id="password-input"
                                                        placeholder="Enter Password">
                                                    <button type="button"
                                                        class="btn btn-link position-absolute h-100 end-0 top-0"
                                                        id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                    <label for="password-input">Password</label>
                                                    <div class="form-floating-icon">
                                                        <i class="uil uil-padlock"></i>
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-check form-check-primary font-size-16 py-1">
                                                    <input class="form-check-input" id="remember-check" type="checkbox"
                                                        name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <div class="float-end">
                                                        <a href="{{ route('forgot-password-view') }}"
                                                            class="text-muted text-decoration-underline font-size-14">Forgot
                                                            your password?</a>
                                                    </div>
                                                    <label class="form-check-label font-size-14" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>

                                                <div class="mt-3">
                                                    <button class="btn btn-primary w-100" type="submit">Log In</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="font-size-15 mb-4 text-muted fw-medium">- Or you can join
                                                            with -</h5>
                                                    </div>

                                                    <div class="d-flex gap-2">
                                                        <button type="button"
                                                            class="btn btn-primary-subtle waves-effect waves-light w-100">
                                                            <i class="bx bxl-facebook font-size-16 align-middle"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-info-subtle waves-effect waves-light w-100">
                                                            <i class="bx bxl-linkedin font-size-16 align-middle"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-danger-subtle waves-effect waves-light w-100">
                                                            <i class="bx bxl-google font-size-16 align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="mt-4 pt-3 text-center">
                                                    <p class="text-muted mb-0">Don't have an account ? <a
                                                            href="auth-signup-cover.html"
                                                            class="fw-semibold text-decoration-underline"> Signup Now </a>
                                                    </p>
                                                </div>

                                            </form><!-- end form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
@endsection

@section('script-auth')
{{-- UPDATE  --}}
    <script>
        function alertSuccess(msg) {
            Swal.fire({
                position: "center",
                icon: "success",
                title: msg,
                showConfirmButton: false,
                timer: 1500
            });
        }

        function alertFailed(msg) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: msg,
                timer: 1500
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.form-data');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Clear previous validation messages
                const errorElements = document.querySelectorAll('.error-msg');
                errorElements.forEach(function(element) {
                    element.remove();
                });

                const email = document.querySelector('input[name="email"]').value.trim();
                const password = document.querySelector('input[name="password"]').value.trim();
                let isValid = true;

                if (!email) {
                    showError('Email tidak boleh kosong', 'input[name="email"]');
                    isValid = false;
                }

                if (!password) {
                    showError('Password tidak boleh kosong', 'input[name="password"]');
                    isValid = false;
                }


                if (isValid) {
                    const formData = new FormData(form);

                    $.ajax({
                        url: '{{ route('login') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: response.msg,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                window.location.href = '{{ route('home') }}';
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: response.msg,
                                    timer: 1500
                                });
                            }
                        },
                        error: function(xhr) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    showError(errors[key][0], `[name="${key}"]`);
                                }
                            }
                        }
                    });
                }
            });

            function showError(message, selector) {
                const element = document.querySelector(selector);
                const error = document.createElement('span');
                error.className = 'error-msg text-danger';
                error.textContent = message;
                element.parentNode.appendChild(error);
            }
        });
    </script>
@endsection
