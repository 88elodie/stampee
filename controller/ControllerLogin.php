<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('User');
RequirePage::requireLibrary('Validation');

class ControllerLogin {
    public function index(){
        return Twig::render('login-index.php');
    }
    public function authentication(){
        $user = new ModelUser;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user->checkUser($username, $password);
    }
    public function logout(){
        session_destroy();
        RequirePage::redirectPage('../book/index');
    }
}
?>