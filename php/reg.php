<?
    if (isset($_POST['name']) AND isset($_POST['emal']) AND isset($_POST['tel']) AND isset($_POST['pass'])){

        $name = mysqli_real_escape_string($_POST['name']);
        $emal = mysqli_real_escape_string($_POST['emal']);
        $tel = mysqli_real_escape_string($_POST['tel']);
        $pass = mysqli_real_escape_string($_POST['pass']);

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $sql = "INSERT INTO users (user_name, user_mail, user_tel, user_password)
        VALUES ('$name', '$emal', $tel, '$pass')";
        $conn->exec($sql);

        $conn = null;

    }
?>