<?php
session_start();

try {
    $connexion = new PDO('mysql:host=localhost;dbname=efoot', "root", "");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage();
    die();
}

function Connexion(): PDO
{
    global $connexion;
    return $connexion;
}

function save_equipe(array $tab):int{
    $sql = Connexion()->prepare('INSERT INTO equipe(nom, images, code) VALUES(:nom, :images, :code)');
    try {
        $sql->execute($tab);
        $id_responsable = connexion()->lastInsertId();
    } catch (\Throwable $th) {
        $id = -1;
    }
    $sql->closeCursor();
    return $id;
}

function save_joueur(array $tab):int{
    $sql = Connexion()->prepare('INSERT INTO joueur(id_equipe, nom, tel, email, poste) VALUES(:id_equipe, :nom, :tel, :email, :poste)');
    try {
        $sql->execute($tab);
        $id_responsable = connexion()->lastInsertId();
    } catch (\Throwable $th) {
        $id = -1;
    }
    $sql->closeCursor();
    return $id;
}

function update_equipe(int $id_equipe, array $tab):bool{
    $sql = 'UPDATE equipe SET ';
    if( !empty( $tab['id_capitaine'] ) )
        $sql .= 'id_capitaine = :id_capitaine';
    if( !empty( $tab['nom'] ) )
        $sql .= 'nom = :nom';
    if( !empty( $tab['images'] ) )
        $sql .= 'images = :images';
    
    $sql .= 'WHERE id = ' . $id_equipe;

    $sql = Connexion()->prepare($sql);
    try {
        $sql->execute($tab);
        $sql->closeCursor();
        return true;
    } catch (\Throwable $th) {
        $sql->closeCursor();
        return false;
    }
}

/**
 * Fonction code du groupe
 *
 * @return string
 */
function codeg(): string
{
    $string = '0123456789AZERTYUIOPQSDFGHJKLMWXCVBN';
    $key = "";
    for ($i = 1; $i < 6; $i++) {
        $key .= $string[rand(0, strlen($string)-1)];
    }
    return $key;
}

function get_equipe():array
{
    $sql = Connexion()->prepare('SELECT * FROM equipe');
    $sql->execute();
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null)
        return $result;
    else
        return array();
}

function get_all_joueur_equipe(int $id_equipe):array
{
    $sql = Connexion()->prepare('SELECT * FROM joueur WHERE id_equipe= ?');
    $sql->execute(array($id_equipe));
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null)
        return $result;
    else
        return array();
}

function get_capitaine(int $id_equipe):array
{
    $sql = Connexion()->prepare('SELECT joueur.* FROM equipe,joueur WHERE joueur.id = equipe.id_capitaine AND id_equipe=?');
    $sql->execute(array($id_equipe));
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null)
        return $result;
    else
        return array();
}

