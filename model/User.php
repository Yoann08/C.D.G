<?php
require_once '../C.D.G/config/connectBDD.php';

class User
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $mdp;
    private int $id_role;

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
        if(isset($userForm['mdp']) OR strlen($userForm['mdp'])>=4 && $userForm['confirm_mdp'] == $userForm['mdp'])
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
}

?>