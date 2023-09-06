<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Proffesor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('assets-lay/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('/assets-lay/css/style-reserve.css') }}">
</head>

<body>
    <div class="wrapper">
        <form method="post" action="{{ route('form.store') }}">
            @csrf
            <h2></h2>
            <section>
                <div class="inner">
                    @yield('content')
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill all the information</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="First name" class="form-control" name="first_name"
                                    required>
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Lats name" class="form-control" name="last_name"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="phone" placeholder="Phone number" class="form-control"
                                    name="phone_number" required>
                            </div>
                            <div class="form-holder">
                                <input type="emaol" placeholder="Email" class="form-control" name="degree" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Address" class="form-control" name="address"
                                    required>
                            </div>
                        </div>
                        <input type="hidden" name="grade" value="{{ $grades->grade_name }}">
                        <a href="/" class="btn btn-danger">Home page</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
</body>

</html>
