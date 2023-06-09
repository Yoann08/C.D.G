<?php
require_once '../C.D.G/config/connectBDD.php';

class User
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $mdp;
    private int $id_roles;

    public function __construct($nom, $prenom, $email, $mdp, $id_roles = 0, $id = 0) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->id_roles = $id_roles;
        $this->id = $id;
    }

    public function createToSignin(array $userForm):bool
    {
        if(!isset($userForm['nom']) OR $userForm['nom'] == '')
        {
            return false;
        }
        if(!isset($userForm['prenom']) OR $userForm['prenom'] == '')
        {
            return false;
        }
        if(!isset($userForm['email']) OR $userForm['email'] == '')
        {
            return false;
        }
        if(!isset($userForm['mdp']) OR ($userForm['mdp']) && $userForm['conf_mdp'] == $userForm['mdp'])
        {
            $this->mdp = $userForm['mdp'];
        }
        else
        {
            return false;
        }

        $this->nom = $userForm['nom'];
        $this->prenom = $userForm['prenom'];
        $this->email = $userForm['email'];

        return true;
    }

    public function getNom() : string 
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom() : string 
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail() : string 
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMdp() : string
    {
        return $this->mdp;
    } 

    public function getIdRoles() : int
    {
       return $this->id_roles;
    }

    public function getId() : int
    {
       return $this->id; 
    }
}

class UserRepository extends ConnectBDD
{
    public function __construct($servername, $username, $password, $dbname)
    {
        parent::__construct($servername, $username, $password, $dbname);
    }

    public function getUserByEmail($email)
    {
        $req = $this->conn->prepare('SELECT * FROM utilisateurs WHERE email_utilisateurs = ?');
        $req->execute([$email]);
        $data = $req->fetch();
        if($data != false)
        {
            $user = new User($data['nom_utilisateurs'], $data['prenom_utilisateurs'], $data['email_utilisateurs'], $data['mdp_utilisateurs'], $data['id_utilisateurs']);

            return $user;
        }
        else
        {
            return [];
        }
    }

    public function insertUser(User $user)
    {
        $req = $this->conn->prepare("INSERT INTO utilisateurs SET nom_utilisateurs = ?, prenom_utilisateurs = ?, email_utilisateurs = ?, mdp_utilisateurs = ?, id_role = ?");
        $req->execute([
            $user->getNom(),
            $user->getPrenom(),
            $user->getEmail(),
            $user->getMdp(),
            2
        ]);
    } 
}

?>