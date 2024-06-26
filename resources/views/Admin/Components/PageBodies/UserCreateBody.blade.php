<!-- User Create Body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-6">
                <form class="card" action="{{ route('admin.user.create') }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">User create</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Phone</label>
                            <div>
                                @if ($errors->has('phone'))
                                    <input type="tel" class="form-control is-invalid" aria-describedby="phoneHelp"
                                        name="phone" placeholder="Enter phone">
                                    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                                @else
                                    <input type="tel" class="form-control" aria-describedby="phoneHelp"
                                        name="phone" placeholder="Enter phone">
                                    <small class="form-hint">We'll never share your phone with anyone else.</small>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Password</label>
                            <div>
                                @if ($errors->has('password'))
                                    <input type="password" class="form-control is-invalid" name="password"
                                        placeholder="Password">
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                @else
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <small class="form-hint">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must not contain spaces, special characters, or emoji.
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            @if ($errors->has('userName'))
                                <input type="text" class="form-control is-invalid" name="userName"
                                    placeholder="User name">
                                <div class="invalid-feedback">{{ $errors->first('userName') }}</div>
                            @else
                                <label class="form-label">User name</label>
                                <input type="text" class="form-control" name="userName" placeholder="User name">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div>
                                <select class="form-select" name="gender">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            @if ($errors->has('dateOfBirth'))
                                <label class="form-label">Date of birth</label>
                                <div class="input-icon mb-2">
                                    <input class="form-control is-invalid" placeholder="Select a date"
                                        id="datepicker-icon" name="dateOfBirth" value="2000-01-01">
                                    <div class="invalid-feedback">{{ $errors->first('dateOfBirth') }}</div>
                                </div>
                            @else
                                <label class="form-label">Date of birth</label>
                                <div class="input-icon mb-2">
                                    <input class="form-control " placeholder="Select a date" id="datepicker-icon"
                                        name="dateOfBirth" value="2000-01-01">
                                    <span
                                        class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                            </path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M11 15h1"></path>
                                            <path d="M12 15v3"></path>
                                        </svg>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <div>
                                <select class="form-select" name="role">
                                    <option value="Admin">Admin</option>
                                    <option value="Writer">Người viết blog</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
