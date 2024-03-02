<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>


    @auth
    <p>You are logged in!</p>
    <form action="/logout" method="post">
        @csrf
        <button>Log out</button>
    </form>
    @else

        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="post">
                @csrf
                <label>
                    <input name="name" type="text" placeholder="name">
                </label>
                <label>
                    <input name="email" type="text" placeholder="email">
                </label>
                <label>
                    <input name="password" type="password" placeholder="password">
                </label>
                <button>Register</button>
            </form>
        </div>

        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="post">
                @csrf
                <label>
                    <input name="login_name" type="text" placeholder="name">
                </label>
                <label>
                    <input name="login_password" type="password" placeholder="password">
                </label>
                <button>Login</button>
            </form>
        </div>

    @endauth
</body>
</html>
