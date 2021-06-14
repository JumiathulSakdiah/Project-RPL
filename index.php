<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/main.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas RPL</title>
</head>
<body>
    <header>
        <div class="card" id = "container">
            <div class="container container-login" >
                <h1>Login</h1>
                <form action="" method="POST">
                    <div class="username">
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Masukan username kamu">
                    </div>
                    <div class="password">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Masukan password kamu">
                    </div>
                    <div>
                        <button name="submit_login" >Login</button>
                        <a href="#"  id="toSignup">Belum punya akun? buat akun baru <span> disini.  </span> </a>
                    </div>
                </form>
            </div>
            <div class="container container-signup">
                <h1>Sign up</h1>
                <form action="#" method="POST">
                    <div class="nama">
                        <p>Nama</p>
                        <input type="text" name="nama" placeholder="Masukan nama kamu">
                    </div>
                    <div class="username">
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Masukan username kamu">
                    </div>
                    <div class="password">
                        <p>Password</p>
                        <input type="text" name="password" placeholder="Masukan password kamu">
                    </div>
                    <div>
                        <button name="submit_signup">Sign up</button>
                        <a href="#" id="toLogin">Sudah punya akun? masuk <span> disini.  </span> </a>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <script src="JS/main.js"></script>
</body>
</html>