<?php 
require_once('functions.php');
if(isset( $_POST['action'] )){
    if( $_POST['action'] == 'verifie' ){
        $email = htmlspecialchars( $_POST['email'] );
        $type = htmlspecialchars( $_POST['type'] );
        if (mailExist( $email, $type ) ) echo 'true';
        else echo 'false';
    }elseif($_POST['action'] == 'connect' ){
        $email = htmlspecialchars( $_POST['email'] );
        $cles = htmlspecialchars( md5( sha1( $_POST['password'] ) ) );
        $type = htmlspecialchars( $_POST['type'] );
        $id = get_connect( $email, $cles, $type );
        if( $id == -1 ){
            header('Location: ./../../../view/forms/connexion.php');
            exit;
        }else{
            $_SESSION['id_user'] = $id;
            if( $type == 'admin' ){
                //rediction admin page
            }else{
                //redirection joueur page
            }
        }
    }else{
        //redirection
    }
}else{
    //redirection
}