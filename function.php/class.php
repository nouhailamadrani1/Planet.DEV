<?php
include_once 'connectiondb.php';

class login
{
    protected $nm;
    function __construct($nm)
    {
        $this->nm = $nm;
    }
    function login()
    {
        if (isset($_POST['submit'])) {
            $email = addslashes(strip_tags($_POST['email']));
            $password = addslashes(strip_tags($_POST['password']));
            if (!empty($email) and !empty($password)) {

                $sql = $this->nm->prepare("SELECT * FROM `admin` WHERE email = :email AND password = :password");

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

class admin {
    public $firstName;
    public $lastName;
    public $email;
    public $age;
    protected $nm;
    function __construct($nm)
    {
        $this->nm = $nm;
    }

    public function displayInfoAdmin(){

        if (isset($_SESSION['id'])) {
              $id=$_SESSION['id'];
           
            $sql = $this->nm->prepare("SELECT * FROM `admin` WHERE id = :id ");

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
                // var_dump( $_SESSION['email']);
              
                

        }


    }
}

}

$connection = new Db;
$conn = $connection->connection();
$profile =new admin($conn);
$profile->displayInfoAdmin();


class Article {
   
    protected $nm;

    function __construct($nm)
    {
        $this->nm = $nm;
    }
    public function displayArticle(){
        $sql = $this->nm->prepare("SELECT * FROM `article`;");
        $result = $sql->execute();
        $data= $sql->fetchAll(PDO::FETCH_ASSOC);
       
        return $data ;
       
     
            }
            }
            
        

    
        
    // public function deleteArticle(){


    // }

    // public function updateArticle(){

    // }

$connection = new Db;
 $conn = $connection->connection();
$profile =new Article($conn);
$profile->displayArticle();


