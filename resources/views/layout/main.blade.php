<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone">

    <div data-role="panel" id="setListsPanel">
        <h2>Set Lists</h2>
        <p>List all set lists</p>
    </div>

    <div data-role="panel" id="artistsPanel">
        <h2>Artists</h2>
        @yield('artistsPanel')

    </div>

    <div data-role="panel" id="songsPanel">
        <h2>Songs</h2>
        @yield('songsPanel')

    </div>

    <div data-role="header">

        @if (Auth::guest())
           <a href="/auth/login" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Login</a>
           <a href="/auth/register" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Register</a>
        @else
            <a href="/auth/logout" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Logout</a>
        @endif

        <h1>Chord Library (<a href="http://chordlibrary.com/view/index.php">old site</a>)</h1>

        <form>
            <input type="text" name="search" placeholder="Search" class="ui-btn ui-corner-all ui-shadow ui-icon-search ui-btn-icon-left" />
        </form>

        <div data-role="navbar">
            <ul>
                <li><a href="/" class="ui-btn ui-btn-inline" data-icon="home">Home</a></li>
                <li><a href="/index.php#setListsPanel" class="ui-btn ui-btn-inline" data-icon="bullets">Set Lists</a></li>
                <li><a href="/artist" data-icon="star">Artists</a></li>
                <li><a href="/song" data-icon="star">Songs</a></li>
            </ul>
        </div>

    </div>

    <div data-role="main" class="ui-content">
        @yield('content')
        Grid of set lists
    </div> <!-- end main content-->

    <div data-role="footer">
        <h1>Chordlibrary.com</h1>
    </div>
</div>

<div data-role="page" id="pagetwo">
    <div data-role="header">
        <h1>Welcome To My Homepage</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>Click on the link to go back. <b>Note</b>: fade is default.</p>
        <a href="#pageone">Go to Page One</a>
    </div>



    <div data-role="footer">
        <h1>Footer Text</h1>
    </div>
</div>

</body>
</html>
