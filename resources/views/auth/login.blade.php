@extends('auth.layouts.app')

@section('content-auth')
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="content-detail p-0">
                    <!-- Login form -->
                    <form class="login-form form-data" method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="blobs_1"></div>
                        <div class="blobs_2"></div>
                        <div class="blobs_5"></div>
                        <div class="blobs_6"></div>
                        <div class="blobs_7"></div>
                        <div class="imgcontainer">
                            {{-- <h3 class="fw-bold text-uppercase">Plate Making <br> Polimer</h3> --}}
                            <img src="{{ asset('assets/logo-polimer.png') }}" alt="logo polimer" class="logo polimer" width="200">
                        </div>
                        <div class="input-control">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="input-username" placeholder="Enter Username" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="password-field-show">
                                <input type="password" placeholder="Enter Password" name="password" class="password-field @error('password') is-invalid @enderror" value="" autocomplete="current-password" id="password-input" required>
                                <span data-toggle=".password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </span>
                            <label class="label-container">Remember me
                                <input type="checkbox" id="remember-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>
                            <span class="psw"><a href="{{ route('forgot-password-view') }}" class="forgot-btn">Forgot password?</a></span>
                            <div class="login-btns">
                                <button type="submit" class="w-100">Login</button>
                            </div>

                            {{-- <div class="login-with-btns">
                                <span class="already-acc">Not a member? <a href="signup.html" class="signup-btn">Sign up</a></span>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-auth')
{{-- UPDATE  --}}
    <script>
         $(document).ajaxStart(function() {
            showLoading('Processing Request.....');
        }).ajaxStop(function() {
            hideLoading();
        });
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

        function showLoading(message) {
            Swal.fire({
                title: message,
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }

        function hideLoading() {
            Swal.close();
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

                const email = document.querySelector('input[name="username"]').value.trim();
                const password = document.querySelector('input[name="password"]').value.trim();
                let isValid = true;

                if (!email) {
                    showError('Username tidak boleh kosong', 'input[name="username"]');
                    isValid = false;
                }

                if (!password) {
                    showError('Password tidak boleh kosong', 'input[name="password"]');
                    isValid = false;
                }


                if (isValid) {
                    const formData = new FormData(form);

                    $.ajax({
                        url: '{{ route('send-login') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: response.msg,
                                    showConfirmButton: false,
                                });
                                var isSuperAdmin = response.isSuperAdmin;
                                if (isSuperAdmin) {
                                    window.location.href = '{{ route('homepage-role') }}';
                                }else{
                                    window.location.href = '{{ route('home') }}';
                                }
                                console.log('fail => ' +response);

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: response.msg,
                                });
                                console.log('fail => ' +response);
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
