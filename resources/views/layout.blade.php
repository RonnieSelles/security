<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Ronnie Selles</title>
    <link rel="stylesheet" href="css/styles.css">

    @yield('page-specific-css')

</head>

<body>

    <nav>
        <ul>
            <li><a id='{{ Request::path() === '/' ? 'current-page' : '' }}'href="/"><img id='home-icon' src="assets/home-icon.png"></a></li>
            <li><a id='{{ Request::path() === 'profile' ? 'current-page' : '' }}' href="profile">Profile</a></li>
            <li><a id='{{ Request::path() === 'dashboard' ? 'current-page' : '' }}'href="dashboard">Dashboard</a></li>
            <li><a id='{{ Request::path() === 'faq' ? 'current-page' : '' }}'href="faq">FAQ</a></li>
            <li><a id='{{ Request::path() === 'motivation' ? 'current-page' : '' }}'href="motivation">Motivation</a></li>


        </ul>
    </nav>

    @yield('content')

</body>

<footer>
    <h5>© 2020 Ronnie Selles</h5>
</footer>

</html>
