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
    $sql = Connexion()->prepare('INSERT INTO equipes(nom, images, code) VALUES(:nom, :images, :code)');
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
    $sql = Connexion()->prepare('INSERT INTO joueurs(id_equipe, nom, tel, email, poste) VALUES(:id_equipe, :nom, :tel, :email, :poste)');
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
    $sql = 'UPDATE equipes SET ';
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

function get_all_equipe():array
{
    $sql = Connexion()->prepare('SELECT * FROM equipes');
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
    $sql = Connexion()->prepare('SELECT * FROM joueurs WHERE id_equipe= ?');
    $sql->execute(array($id_equipe));
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null)
        return $result;
    else
        return array();
}

function get_prochaine_match(int $limit=0 ):array{
    $requete = 'SELECT * FROM matchs WHERE rencontre_date >= ? ';
    if( $limit != 0 )
        $requete .= ' LIMIT '.$limit;
    $sql = Connexion()->prepare( $requete );
    $sql->execute(array( date('Y-m-d H:i:s',  strtotime('-1 hours')) ));
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null)
        return $result;
    else
        return array();
}

function get_equipe(int $id_equipe):array{
    $sql = Connexion()->prepare('SELECT * FROM equipes WHERE id = ?');
    $sql->execute(array($id_equipe));
    $res = $sql->fetch();
    $sql->closeCursor();
    if($res != NULL){
        return $res;
    }else{
        return array();
    }
}

function get_joueur(int $id_joueur):array{
    $sql = Connexion()->prepare('SELECT * FROM joueurs WHERE id = ?');
    $sql->execute(array($id_joueur));
    $res = $sql->fetch();
    $sql->closeCursor();
    if($res != NULL){
        return $res;
    }else{
        return array();
    }
}

function get_equipe_name( int $id_equipe ):string{
    $equipe = get_equipe( $id_equipe );
    return $equipe['nomEquipe'];
}

function get_equipe_img( int $id_equipe ):string{
    $equipe = get_equipe( $id_equipe );
    return $equipe['images'];
}

function get_equipe_capitaine( int $id_equipe ):array{
    $equipe = get_equipe( $id_equipe );
    $id_capitaine = $equipe['id_capitaine'];
    return get_joueur( $id_capitaine );
}

function get_name_capitaine( int $id_equipe ){
    $capitaine = get_equipe_capitaine( $id_equipe );
    return $capitaine['nom'];
}

function get_joueur_name( int $id_joueur ):string{
    $joueur = get_joueur( $id_joueur );
    return $joueur['nom'];
}

function get_joueur_img( int $id_joueur ):string{
    $joueur = get_joueur( $id_joueur );
    return $joueur['images'];
}

function get_joueur_tel( int $id_joueur ):string{
    $joueur = get_joueur( $id_joueur );
    return $joueur['tel'];
}

function get_joueur_email( int $id_joueur ):string{
    $joueur = get_joueur( $id_joueur );
    return $joueur['email'];
}

function get_joueur_poste( int $id_joueur ):string{
    $joueur = get_joueur( $id_joueur );
    return $joueur['poste'];
}

function get_joueur_equipe( int $id_joueur ):string{
    $joueur = get_joueur( $id_joueur );
    $id_equipe = $joueur['id_equipe'];
    return get_equipe_name( $id_equipe );
}

function format_date( $date ){
    $date_format = date_create($date);
    return date_format($date_format, 'd-m-Y à H:i');
}

function get_match_play( ):array{
    $requete = 'SELECT * FROM matchs, statistique WHERE matchs.id=id_match';
    $sql = Connexion()->prepare($requete);
    $sql->execute();
    $res = $sql->fetchAll();
    if( $res != null )
        return $res;
    else
        return array();
}