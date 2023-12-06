<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="author" content="Patryk Pawliński">
    <meta name="logo-author" content="Patryk Pawliński">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JTPPPCWOW</title>
</head>
<body>
<main>
    <nav>
        <div id="nav-left">
            <div id="logo">
                <img src="img/placeholder.svg" alt="website logo">
            </div>
        </div>
        <div id="nav-right">
            <?php
                session_start();
                if(!isset($_SESSION['newSession'])){
                    echo('
                    <a href="" class="nav-elem">
                        <div></div>
                    </a>
                    <a href="register.php" id="register-button" class="nav-elem">
                        <div>Register</div>
                    </a>
                    <a href="login.php" id="login-button" class="nav-elem">
                        <div>Login</div>
                    </a>
                    ');
                }else{
                    echo('<a href="scripts/logout.php" id="register-button" class="nav-elem">
                        <div>Logout</div></a>');
                }
            ?>


        </div>
    </nav>
    <div id="middle-section">
        <?php
            if(isset($_SESSION['newSession'])){
                echo('
                <form class="post" id="sendPost">
                    <textarea oninput="auto_grow(this)" name="post-content" id="sendPostInput"
                      placeholder="Click here, to start typing (max 1024 characters)" maxlength="1024"></textarea>
                    <input type="submit" id="sendPostButton" value="Send">
                </form>
                ');
            }


        ?>

        <div class="post">
            <div class="post-author">
                Petter
            </div>
            <div class="post-content">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi
                vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus
                eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. N
            </div>
            <div class="adminPanel">
                <a href="scripts/adminScripts.php?postId=r324s&command=delete">D</a>
                <a href="">D</a>
                <a href="">D</a>
                <a href="">D</a>
            </div>
        </div>

    </div>
    <footer>
        <div>Icons made from <a href="https://www.onlinewebfonts.com/icon">svg icons</a> is licensed by CC BY 4.0</div>
    </footer>
</main>
<script src="javascript/newPost.js">
    </body>
    </html>