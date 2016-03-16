<?php
/**
 * Gère une liste de notes
 */
class Notes
{
    /**
     * Constructeur
     * Initialise la session pour qu'elle contienne un tableau de notes
     */
    function __construct()
    {
        $this->initialiserSession();
    }

    /**
     * Initialisation de la session
     */
    function initialiserSession()
    {
        if(!isset($_SESSION['tabNotes']))
            $_SESSION['tabNotes'] = array();
    }

    /**
     * Ajoute une note au tableau de note
     * @param mixed $nom Nom de l'étudiant
     * @param mixed $note Note de l'étudiant
     */
    function ajouterNote($nom, $note)
    {
        $_SESSION['tabNotes'][] = array(
            'nom' => $nom,
            'note' => $note
        );
    }

    /**
     * Retourne la liste des notes sous la forme d'un tableau
     */
    function getNotes()
    {
        return $_SESSION['tabNotes'];
    }

    /**
     * Vide la liste de notes
     */
    function vider()
    {
        $_SESSION['tabNotes'] = array();
    }

    /**
     * Retourne le nombre de notes présentes dans la liste
     */
    function getNombreNotes()
    {
        return count($_SESSION['tabNotes']);
    }
}

?>