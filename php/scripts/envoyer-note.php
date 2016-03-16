<?php
session_start();

require_once(__DIR__.'/../models/notes.php');

$message = 'Erreur';

try
{
    if(!isset($_POST['data']))
        throw new Exception();
   
    $data = json_decode($_POST['data']);
    
    $notes = new Notes();
    $notes->ajouterNote($data->nom, $data->note);

    $message = "Note ajoutée ! (".$notes->getNombreNotes()." notes)";
}
catch(Exception $exception)
{
    $message = "Erreur - données d'entrée incorrectes";
}

print $message;

?>