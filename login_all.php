<?php if($_SERVER["REQUEST_METHOD"] == "GET"): ?>
    <h1>Login</h1>
    <form method="post" action="login_all.php">
        <label>Username</label>
        <input name="username" type="text" required />
        <label>Password</label>
        <input name="password" type="password" required />
        <input type=submit value=Submit>
    </form>

<?php elseif($_SERVER["REQUEST_METHOD"] == "POST"): ?>
<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if(empty($username) || empty($password)){
        echo "Username dan password harus diisi";
    } else{
        if($username == "admin" && $password == "tes123"){
            echo "Login sukses";
        }
        else{
            echo "Login gagal";
        } 
    }
?>

<?php endif; ?>