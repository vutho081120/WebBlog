<!-- Page Login Body -->
<div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="{{ route('site.home.index') }}" class="navbar-brand navbar-brand-autodark"><img
                src="{{ asset('images/Admin/logo.svg') }}" height="36" alt=""></a>
    </div>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            <form action="{{ route('site.account.login') }}" method="post" autocomplete="off" novalidate="">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <div>
                        @if ($errors->has('phoneLogin'))
                            <input type="tel" class="form-control is-invalid" aria-describedby="phoneHelp"
                                name="phoneLogin" placeholder="Enter phone">
                            <div class="invalid-feedback">{{ $errors->first('phoneLogin') }}</div>
                        @else
                            <input type="tel" class="form-control" aria-describedby="phoneHelp" name="phoneLogin"
                                placeholder="Enter phone">
                        @endif
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="./forgot-password.html">I forgot password</a>
                        </span>
                    </label>
                    @if ($errors->has('passwordLogin'))
                        <div>
                            <input type="password" class="form-control is-invalid" placeholder="Your password"
                                name="passwordLogin" autocomplete="off">
                            <div class="invalid-feedback">{{ $errors->first('passwordLogin') }}</div>
                        </div>
                    @else
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Your password" name="passwordLogin"
                                autocomplete="off">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" data-bs-toggle="tooltip"
                                    aria-label="Show password"
                                    data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    @endif
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember">
                        <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
