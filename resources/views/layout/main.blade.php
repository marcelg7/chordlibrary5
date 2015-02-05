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
        <div data-role="navbar">
            <ul>
                <li><a href="#" data-icon="plus">New</a></li>
                <li><a href="#" data-icon="edit">Edit</a></li>
                <li><a href="#" data-icon="star">Starred</a></li>
            </ul>
        </div>
        <p>List all set lists</p>
    </div>

    <div data-role="panel" id="artistsPanel">
        <h2>Manage Account</h2>
        <div data-role="navbar">
            <ul>
                <li><a href="{{ action('ArtistsController@create') }}" class="ui-btn ui-btn-inline" data-icon="plus">New</a></li>
                <li><a href="#" data-icon="edit">Edit</a></li>
                <li><a href="#" data-icon="star">Starred</a></li>
            </ul>
        </div>
    </div>

    <div data-role="panel" id="songsPanel">
        <h2>Songs List</h2>
        <h2>Filtering list IE:</h2>
        <form class="ui-filterable">
            <input id="myFilter" data-type="search" placeholder="Search for names..">
        </form>
        <ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">
            <li><a href="#">Adele</a></li>
            <li><a href="#">Agnes</a></li>
            <li><a href="#">Albert</a></li>
            <li><a href="#">Billy</a></li>
            <li><a href="#">Bob</a></li>
            <li><a href="#">Calvin</a></li>
            <li><a href="#">Cameron</a></li>
            <li><a href="#">Chloe</a></li>
            <li><a href="#">Christina</a></li>
            <li><a href="#">Diana</a></li>
            <li><a href="#">Gabriel</a></li>
            <li><a href="#">Glen</a></li>
            <li><a href="#">Ralph</a></li>
            <li><a href="#">Valarie</a></li>
        </ul>

    </div>

    <div data-role="header">

        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Sign In</a>
        <h1>Chord Library</h1>
        <form>
            <input type="text" name="search" placeholder="Search" class="ui-btn ui-corner-all ui-shadow ui-icon-search ui-btn-icon-left" />
        </form>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Button 2</a>
        <div data-role="navbar">
            <ul>
                <li><a href="index.html" class="ui-btn ui-btn-inline" data-icon="home">Home</a></li>
                <li><a href="#setListsPanel" class="ui-btn ui-btn-inline" data-icon="bullets">Set Lists</a></li>
                <li><a href="#artistsPanel" data-icon="star">Artists</a></li>
                <li><a href="#songsPanel" data-icon="star">Songs</a></li>
            </ul>
        </div>

    </div>

    <div data-role="main" class="ui-content">
        @yield('content')

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
