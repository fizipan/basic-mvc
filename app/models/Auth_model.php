    <?php

class Auth_model
{
    private $tabel = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertDataUser()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        $query = "SELECT username FROM user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $data = $this->db->single();

        if ($username === $data["username"]) {
            Messages::setMessage('Maaf, User Sudah Terdaftar', 'danger');
            header("Location: " . BASEURL . '/register');
            return false;
        }

        if ($password !== $password2) {
            Messages::setMessage('Konfirmasi Password Tidak Sesuai', 'danger');
            header("Location: " . BASEURL . '/register');
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user
                    VALUES
                    ('', :username, :password)
                ";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function login()
    {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $data = $this->db->single();

        if (password_verify($password, $data["password"])) {
            return $this->db->rowCount();
        } else {
            Messages::setMessage('Username / password salah', 'danger');
            header("Location: " . BASEURL . '/login');
            return false;
        }
    }
}
