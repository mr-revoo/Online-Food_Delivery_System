<?php 
declare(strict_types= 1);

namespace MyApp;
use MyApp\Database;

class RestaurantManager{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }


    public function getRestaurants(){
        $query = "SELECT * FROM restaurant";
        $result = $this->db->query($query);
        return $result;
    }

    public function addRestaurant(string $name, string $location, string $image): bool|string {
        $error = "";
        $message = "";
        if (empty($name) || 
            empty($location) || 
            empty($image)) {
           $error =  	'<div class="alert alert-danger alert-dismissible fade show">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <strong>All fields Must be Fillup!</strong></div>';
              return $error;
        } else {
            $sql = "INSERT INTO restaurant (name, location, image) VALUES (?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            $this->db->bindParams($stmt, "sss", $name, $location, $image);
            $stmt->execute();
            return true;
        }
    }
}