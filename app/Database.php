<?php 
namespace App;

class Database{

    private $dbconn;

    public function __construct()
    {
        $this->dbconn = mysqli_connect("localhost", "root", "", "php_crud");
    }

    public function getContacts()
    {
        $sql = "SELECT * FROM contacts";
        $result = mysqli_query($this->dbconn, $sql);
        $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $contacts;
    }

    public function addContact($name_first, $name_last,$birthday, $email )
    {
        $sql = "INSERT INTO contacts (name_first, name_last, birthday, email) VALUES ('$name_first', '$name_last','$birthday' ,'$email' )";
        mysqli_query($this->dbconn, $sql);
    }

    public function getContact($id)
    {
        $sql = "SELECT * FROM contacts WHERE id = $id";
        $result = mysqli_query($this->dbconn, $sql);
        $contact = mysqli_fetch_assoc($result);
        return $contact;
    }

    public function updateContact($id, $name_first, $name_last, $birthday, $email )
    {
        $sql = "UPDATE contacts SET name_first = '$name_first', name_last = '$name_last', birthday = '$birthday', email = '$email' WHERE id = '$id'";
        mysqli_query($this->dbconn, $sql);
    }   

    public function deleteContact($id)
    {
        $sql = "DELETE FROM contacts WHERE id = $id";
        mysqli_query($this->dbconn, $sql);
    }
}
?>