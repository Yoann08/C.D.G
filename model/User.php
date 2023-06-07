<?php
require_once '../../C.D.G/config/connectBDD.php';

class User
{
    public int $id;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $mdp;
    public int $id_roles;

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
        if(isset($userForm['mdp']) OR ($userForm['mdp']) && $userForm['conf_mdp'] == $userForm['mdp'])
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
}

class UserRepository extends connectBDD
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByEmail($email)
    {
        $req = $this->conn->prepare('SELECT * FROM utilisateurs WHERE email = ?');
        $req->execute([$email]);
        $data = $req->fetch();
        if($data != false)
        {
            $user = new User();
            $user->id = $data['id_utilisateurs'];
            $user->nom = $data['nom_utilisateurs'];
            $user->prenom = $data['prenom_utilisateurs'];
            $user->email = $data['email_utilisateurs'];
            $user->mdp = $data['mdp_utilisateurs'];
            $user->id_roles = $data['id_roles'];

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
            $user->nom,
            $user->prenom,
            $user->email,
            $user->mdp,
            2
        ]);
    } 
}

?>