<!DOCTYPE html>
<html>
    <head>
        <title>Sample website</title>
    </head>
    <body>
        <!-- This comment is only viewable with source code -->
        <h1>Welcome to sample website</h1>
        <ul>
            <li><a href="rand.php">A link to a random hash</a></li>
            <li><a href="other.php">Another page</a></li>
            <li><a href="form.php">Page to test form stuff</a></li>
            <li><a href="cookies.php">Cookies page</a></li>
            <li><a href="mouse.php">Mouse tests</a></li>
            <li><a href="request.php">What is your request?</a></li>
        </ul>
        <div id="danger-zone">
            <h2>DANGER ZONE</h2>
            <p><?php echo 'You are on page'.(isset($_GET['page']) ? $_GET['page'] : 1); ?></p>
            <div id="pagination">
                <p><a href="?page=1">page 1</a></p>
                <p><a href="?page=2">page 2</a></p>
                <p><a href="?page=3">page 3</a></p>
            </div>
        </div>
        <div class="homes">
            <div id="neighbour-home">
                <div class="first-floor floor">
                    <div class="kitchen"></div>
                    <div class="bathroom"></div>
                </div>
                <div class="second-floor floor">
                    <div class="bathroom"></div>
                    <div class="bedroom"></div>
                </div>
            </div>
            <div id="my-home">
                <div class="first-floor floor">
                    <div class="kitchen"></div>
                    <div class="bathroom"></div>
                </div>
                <div class="second-floor floor">
                    <div class="bathroom"></div>
                    <div class="bedroom"></div>
                </div>
            </div>
        </div>
    </body>
</html>
