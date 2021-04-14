<?php

// used to fetch product data..
class Product{

 public $db = null;

 public function __construct(DBController $db){
// db is a type of DBController class
    //create a public injection constructor

    if(!isset($db->conn)) return null;

    $this->db = $db;
 }

// fetch  product data using getData Method
public function getData($table = 'products'){
   $resultPr = $this->db->conn->query( "SELECT * FROM ($table)");

   $resultArray = array();

//    fetch product data one by one
   while($item = mysqli_fetch_array($resultPr, MYSQLI_ASSOC)){

    $resultArray[] = $item;
   }
   return $resultArray;
}

// fetch  product  data on offer using getOffer Method
public function getOffer($table = 'products'){
    
    $resultOffer = $this->db->conn->query( "SELECT * FROM ($table) WHERE  product_status='offer'");
 
    $resultArray = array();
 
 //    fetch product data one by one
    while($item = mysqli_fetch_array($resultOffer, MYSQLI_ASSOC)){
 
     $resultArray[] = $item;
    }
    return $resultArray;
 }

 // fetch  product data using getData Method
public function getPhoto($table = 'photos'){
    $resultPhoto = $this->db->conn->query( "SELECT * FROM ($table)");
 
    $resultArray = array();
 
 //    fetch product data one by one
    while($item = mysqli_fetch_array($resultPhoto, MYSQLI_ASSOC)){
 
     $resultArray[] = $item;
    }
    return $resultArray;
 }

  // fetch  product data using getBlog Method
public function getBlog($table = 'latestBlog'){
    $resultBlog = $this->db->conn->query( "SELECT * FROM ($table)");
 
    $resultArray = array();
 
 //    fetch product data one by one
    while($item = mysqli_fetch_array($resultBlog, MYSQLI_ASSOC)){
 
     $resultArray[] = $item;
    }
    return $resultArray;
 }

 // fetch  product  data on offer using getSold Method
public function getSold($table = 'products'){
    
    $resultSale = $this->db->conn->query( "SELECT * FROM ($table) WHERE  item_place='loved'");
 
    $resultArray = array();
 
 //    fetch product data one by one
    while($item = mysqli_fetch_array($resultSale, MYSQLI_ASSOC)){
 
     $resultArray[] = $item;
    }
    return $resultArray;
 }
  // fetch  product  data on offer using getFeatured Method
public function getFeatured($table = 'products'){
    
    $resultFeatured = $this->db->conn->query( "SELECT * FROM ($table) WHERE  item_place='featured'");
 
    $resultArray = array();
 
 //    fetch product data one by one
    while($item = mysqli_fetch_array($resultFeatured, MYSQLI_ASSOC)){
 
     $resultArray[] = $item;
    }
    return $resultArray;
 }

}









?>