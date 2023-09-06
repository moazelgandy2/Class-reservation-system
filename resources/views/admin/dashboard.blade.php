<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Proffesor</title>
    <link rel="stylesheet" href="{{ asset('/dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

    <!-- for header part -->
    <header>
        <div class="logo">
            <div>
                <a style="text-decoration: none; color:black;" href="/dash">
                    <img src="{{ asset('favicon.png') }}" alt="">
                    The Proffesor
                </a>

            </div>
        </div>
        <form action="{{ url('/dash') }}" method="GET">
            <div class="searchbar">
                <input type="text" placeholder="Search..." name="search">
                <button class="btn btn-primary" style="border: none; color:white;" type="submit">Search</button>
            </div>
            <div style="border-radius: 9px; margin-top:10px;" class="search-options">
                <select class="form-select btn btn-primary" name="search_option"
                    style="border-radius: 9px; color:white;">
                    <option value="name">Search by Name</option>
                    <option value="grade">Search by Grade</option>
                </select>
            </div>
        </form>

    </header>

    <div class="main-container">
        <div class="main">
            <div class="box-container">

                <div></div>
                @foreach ($dataCount as $grade => $count)
                    <div class="box box4">
                        <div class="text">
                            <h2 class="topic-heading">{{ $count }}</h2>
                            <h2 class="topic">Grade : {{ $grade }}</h2>
                        </div>
                        <img src="{{ asset('images/13.png') }}" alt="published">
                    </div>
                @endforeach
                <div></div>
            </div>
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Students</h1>
                    <button class="view">View All</button>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Grade</th>
                            <th class="phone_number">Phone Number</th>
                            <th class="phone_number">Email</th>
                            <th class="address">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->last_name }}</td>
                                <td>{{ $data->grade }}</td>
                                <td class="phone_number">{{ $data->phone_number }}</td>
                                <td class="phone_number">{{ $data->email }}</td>
                                <td class="address">{{ $data->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
