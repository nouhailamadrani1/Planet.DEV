<?php
include_once 'connectiondb.php';

class login
{
    protected $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }
    function login()
    {
        if (isset($_POST['submit'])) {
            $email = addslashes(strip_tags($_POST['email']));
            $password = addslashes(strip_tags($_POST['password']));
            if (!empty($email) and !empty($password)) {

                $sql = $this->conn->prepare("SELECT * FROM `admin` WHERE email = :email AND password = :password");

                $sql->execute(array('email' => $email, 'password' => $password));

                if ($sql->rowCount()) {
                    $data = $sql->fetch();
                    $_SESSION['id'] = $data['id'];
                    $_Session['id'] = true;


                    header('location:../template/dashbord.php');
                } else {

                    echo "email or password are wrong";
                }
            }
        } else {
            echo "please enter Email and Password";
        }
    }
}

class admin
{
    public $firstName;
    public $lastName;
    public $email;
    public $age;
    protected $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function displayInfoAdmin()
    {

        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];

            $sql = $this->conn->prepare("SELECT * FROM `admin` WHERE id = :id ");

            $sql->execute(array('id' => $id));

            if ($sql->rowCount()) {
                $data = $sql->fetch();
                $_SESSION['id'] = $data['id'];
                $_Session['id'] = true;
                $_SESSION['firstname'] = $data['firstname'];
                $_Session['firstname'] = true;
                $_SESSION['lastname'] = $data['lastname'];
                $_Session['lastname'] = true;
                $_SESSION['age'] = $data['age'];
                $_Session['age'] = true;
                $_SESSION['email'] = $data['email'];
                $_Session['email'] = true;
               

            }
        }
    }
    public static function countAdmins()
    {
        $connection = new Db;
        $conn = $connection->connection();
        $sql = ("SELECT * FROM admin ");
        $exec = $conn->query($sql);

        $res = $exec->rowCount();

        return $res;
    }
}

$connection = new Db;
$conn = $connection->connection();
$profile = new admin($conn);
$profile->displayInfoAdmin();


class Article
{

    protected $id;
    protected $title;
    protected $text;



    function __construct($newTitle, $newText,$newId = null)
    {   
        $this->id = $newId;
        $this->title = $newTitle;
        $this->text = $newText;
    }
    public static function displayArticle()
    {
        $connection = new Db;
        $conn = $connection->connection();
        $sql = $conn->prepare("SELECT * FROM `article`;");
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }


    public static function deleteArticle($id)
    {


        $connection = new Db;
        $conn = $connection->connection();
        $sql = $conn->prepare("DELETE FROM `article` WHERE id= ?");
        $result = $sql->execute([$id]);
        return $result;
    }

    public function addArticle()
    {

        $connection = new Db;
        $conn = $connection->connection();
        $sql = $conn->prepare("INSERT INTO article (title,text) VALUES (?,?)");
        $sql->execute([
            $this->title,
            $this->text
        ]);
    }

    public function updateArticle()
    { 
        $connection = new Db;
        $conn = $connection->connection();
        $sql = $conn->prepare("UPDATE article set title = ?, text = ? where id=?");
        $sql->execute([
            $this->title,
            $this->text,
            $this->id
        ]);
    }
}
