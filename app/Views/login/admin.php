<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/assets/css/regis-login.css">
    <title>Daftar.in - Registrasi</title>
</head>
<body>
    <div class="container">
        <a href="">
            <div class="bg">
                <img src="https://i.ibb.co/fCwXmNb/Group-8-1.png" alt="Group-8" border="0">
            </div>
        </a>
        <div class="content">
            <a href="/login" style="text-decoration:none; color: #8692A6; margin-top:em;">
                <p style="margin-top: 2em;margin-left:-5em;">&#10094 Back</p>
            </a>
            <h2 style="font-size:30pt;margin-top: 3em;margin-bottom: 0.5em; color: #303030;font-weight: bold;font-style:normal;">Login To Your Account</h2>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div style="color: red; margin-bottom:5%; margin-top:5%;" class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form class="form-login" action="/login/admin/proses" method="post">
                <label style="color: #696F79;font-style: normal;font-weight: 500; font-size: 16px;">Username</label><br><br>
                <input type="text" class="t-input" name="username" placeholder="Enter Username" id="Username" required><br>
                <label style="color: #696F79;font-style: normal;font-weight: 500; font-size: 16px;">Password</label><br><br>
                <input type="Password" class="t-input" placeholder="Enter Password" name="password" required><br><br>
                <button type="submit" class="submit-button" name="submit-regis">
                    <p style="text-decoration: none; color: #FFFFFF;font-style: normal;font-weight: 500;font-size: 16px;"> Login </p>
                </button><br><br>
                <i class="bi bi-file-lock" style="font-style: normal;font-weight: normal;font-size: 12px;line-height: 15px;color: #8692A6; text-align:center;">Your Info is safely secured</i>
            </form>
        </div>
    </div>

</body>

</html>