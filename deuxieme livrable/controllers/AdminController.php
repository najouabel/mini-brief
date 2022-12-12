<?php 

class AdminController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Admin::login($data);
            if($result->email === $_POST['email'] && $result->password === $_POST['password']){
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $result->email;
                Redirect::to('dashbord');
            } else {
                Session::set('error','email or password not valid');
                Redirect::to('login');
            }
        }
    }
    static public function logout(){
        session_destroy();
    }

}