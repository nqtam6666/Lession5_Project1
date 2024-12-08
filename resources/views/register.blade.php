<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
            <h2 class="text-center text-primary mb-3">Registration Form</h2>
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="form-group row mb-1">
                    <label for="user" class="col-sm-3 col-form-label text-end">User:</label>
                    <div class="col-sm-9">
                        <input 
                            type="text" 
                            name="user" 
                            id="user" 
                            class="form-control @error('user') is-invalid @enderror" 
                            placeholder="Enter your user"
                            value="{{ old('user') }}"
                        >
                        @error('user')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-1">
                    <label for="password" class="col-sm-3 col-form-label text-end">Password:</label>
                    <div class="col-sm-9">
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            placeholder="Enter your password"
                        >
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-1">
                    <label for="name" class="col-sm-3 col-form-label text-end">Name:</label>
                    <div class="col-sm-9">
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            placeholder="Enter your name"
                            value="{{ old('name') }}"
                        >
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-1">
                    <label for="address" class="col-sm-3 col-form-label text-end">Address:</label>
                    <div class="col-sm-9">
                        <input 
                            type="text" 
                            name="address" 
                            id="address" 
                            class="form-control @error('address') is-invalid @enderror" 
                            placeholder="Enter your address"
                            value="{{ old('address') }}"
                        >
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-1">
                    <label for="country" class="col-sm-3 col-form-label text-end">Country:</label>
                    <div class="col-sm-9">
                        <select 
                            name="country" 
                            id="country" 
                            class="form-select @error('country') is-invalid @enderror"
                        >
                            <option value="">-- Select your country --</option>
                            <option value="us" {{ old('country') == 'us' ? 'selected' : '' }}>United States</option>
                            <option value="uk" {{ old('country') == 'uk' ? 'selected' : '' }}>United Kingdom</option>
                            <option value="vn" {{ old('country') == 'vn' ? 'selected' : '' }}>Vietnam</option>
                            <option value="jp" {{ old('country') == 'jp' ? 'selected' : '' }}>Japan</option>
                        </select>
                        @error('country')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-1">
                    <label for="zipcode" class="col-sm-3 col-form-label text-end">ZipCode:</label>
                    <div class="col-sm-9">
                        <input 
                            type="text" 
                            name="zipcode" 
                            id="zipcode" 
                            class="form-control @error('zipcode') is-invalid @enderror"
                            value="{{ old('zipcode') }}"
                        >
                        @error('zipcode')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-1">
                    <label for="email" class="col-sm-3 col-form-label text-end">Email:</label>
                    <div class="col-sm-9">
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                        >
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-1">
                    <label for="sex" class="col-sm-3 col-form-label text-end">Sex:</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input 
                                type="radio" 
                                name="sex" 
                                id="female" 
                                class="form-check-input @error('sex') is-invalid @enderror" 
                                value="Female" 
                                {{ old('sex') == 'Female' ? 'checked' : '' }}
                            >
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                            <input 
                                type="radio" 
                                name="sex" 
                                id="male" 
                                class="form-check-input @error('sex') is-invalid @enderror" 
                                value="Male" 
                                {{ old('sex') == 'Male' ? 'checked' : '' }}
                            >
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        @error('sex')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-1">
                    <label class="col-sm-3 col-form-label text-end">Languages:</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input 
                                type="checkbox" 
                                name="language[]" 
                                id="english" 
                                class="form-check-input @error('language') is-invalid @enderror" 
                                value="English" 
                                {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}
                            >
                            <label for="english" class="form-check-label">English</label>
                        </div>
                        <div class="form-check">
                            <input 
                                type="checkbox" 
                                name="language[]" 
                                id="vietnamese" 
                                class="form-check-input @error('language') is-invalid @enderror" 
                                value="Vietnamese" 
                                {{ is_array(old('language')) && in_array('Vietnamese', old('language')) ? 'checked' : '' }}
                            >
                            <label for="vietnamese" class="form-check-label">Vietnamese</label>
                        </div>
                        @error('language')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3 col-form-label text-end">About:</label>
                    <div class="col-sm-9">
                        <textarea name="about" id="about" class="form-control @error('about') is-invalid @enderror w-100" rows="4" placeholder="Tell us about yourself">{{ old('about') }}</textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50 rounded-pill">Register</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p>Already have an account? <a href="/login" class="text-decoration-none">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
