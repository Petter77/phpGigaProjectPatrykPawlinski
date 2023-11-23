<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
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
            <a href="" class="nav-elem">
                <div></div>
            </a>
            <a href="register.php" id="register-button" class="nav-elem">
                <div>Register</div>
            </a>
            <a href="" id="login-button" class="nav-elem">
                <div>Login</div>
            </a>
        </div>
    </nav>
    <form action="">
        <div class="form-group">
            <label for="email" class="form-label">Email
                <input type="email" name="email" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Name
                <input type="text" name="name" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="lastName" class="form-label">Last Name (optional)
                <input type="text" name="lastName" class="form-input">
            </label>
        </div>
        <div id="date">
            <div class="date-element">
                <label for="day">Day
                    <select name="day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29" class="february-change">29</option>
                        <option value="30" class="february-change">30</option>
                        <option value="31" class="month-change">31</option>
                    </select>
                </label>
            </div>
            <div class="date-element">
                <label for="month">Month
                    <select name="month">
                        <option value='1' class="odd" selected>January</option>
                        <option value='2' class="february">February</option>
                        <option value='3' class="odd">March</option>
                        <option value='4' class="even">April</option>
                        <option value='5' class="odd">May</option>
                        <option value='6' class="even">June</option>
                        <option value='7' class="odd">July</option>
                        <option value='8' class="even">August</option>
                        <option value='9' class="odd">September</option>
                        <option value='10' class="even">October</option>
                        <option value='11' class="odd">November</option>
                        <option value='12' class="even">December</option>
                    </select>
                </label>
            </div>
            <div class="date-element">
                <label for="year">Year
                    <input type="number" class="form-input" name="year" min="1900" max="2100" value="2016">
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password
                <input type="password" name="password" class="form-input">
            </label>
        </div>
        <div class="form-group">
            <label for="confirmPassword" class="form-label">Confirm Password
                <input type="password" name="confirmPassword" class="form-input">
            </label>
        </div>
        <input type="submit" class="form-input">
    </form>
    <footer>
        <div>Icons made from <a href="https://www.onlinewebfonts.com/icon">svg icons</a> is licensed by CC BY 4.0</div>
    </footer>
</main>
</body>
</html>