<?php
if (isset($_POST['box'])) {
    if (isset($_POST['action'])) {
        if (($_POST['action']) == 'verifiemail') {
            $email = htmlspecialchars($_POST['email']);
            $verifiemail = verifie_email($email, 'admin');
            echo $verifiemail;
        } else if ($_POST['action'] == 'mdp') {
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars(md5($_POST['password']));
            $idadmin = get_connexion($email, $mdp, 'mdp');
            if ($idadmin != -1) {
                $_SESSION['id'] = $idadmin;
                echo 'success';
                exit;
            } else {
                echo 'erreur';
                exit;
            }
        }
    }
} else {
    if (($_POST['action']) == 'verifiemail') {
        $email = htmlspecialchars($_POST['email']);
        $verifiemail = verifie_email($email, 'capitaine');
        echo $verifiemail;
    } else if ($_POST['action'] == 'code') {
        $code = htmlspecialchars($_POST['code']);
        $email = htmlspecialchars($_POST['email']);
        $idcapitaine = get_connexion($email, $code, 'code');
        if ($idmembre != -1) {
            echo 'success';
            exit;
        } else {
            echo 'erreur';
            exit;
        }
    }
}
