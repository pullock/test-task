<?
    
    include 'connect.php';

    $answer = '';

    if (isset($_POST['password']) AND $_POST['password'] != $_POST['password_two']){
        
        $answer = 'Пароли не совпадают!';

    } else if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['tel']) AND isset($_POST['password'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $pass = $_POST['password'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $stmt = $conn->prepare("SELECT user_name, user_mail, user_tel FROM users WHERE user_name='$name' OR user_mail='$email' OR user_tel='$tel'");

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $answer = 'Введенные вами данные уже используются...';
        } else {
            $sql = "INSERT INTO users (user_name, user_mail, user_tel, user_password)
            VALUES ('$name', '$email', '$tel', '$pass')";
            $conn->exec($sql);

            $conn = null;

            $_SESSION['name'] = $name;
            $_SESSION['tel'] = $tel ;
            $_SESSION['email'] = $email;

            header("Location: main-page.php");
            exit();
        }

    }
?>