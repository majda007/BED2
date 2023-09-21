<?php

interface Entity
{
    
  public function save();
 
}
 
class Author implements Entity


{
    private $ime, $prezime;
    
    public function __construct($ime, $prezime)
    {
        
        
        $this->ime = $_POST['ime'];
        $this->prezime=$_POST['prezime'];
       
    }

   public function getIme()
   {
    return $this->ime;
   
   
   }
   public function getPrezime()
   {
   
    return $this->prezime;
   
   }
    public function save()
    {
    
     
     echo "Autor";
     $db = DB::getInstance();
    
    $mysqli = $db->getConnection(); 
    $query="INSERT INTO autori (ime, prezime) values( ?,?)";
    $stmt=$mysqli->prepare($query);
    $stmt->bind_param("ss", $this->ime, $this->prezime);
    
   

$stmt->execute();

        
    }
}

class Book implements Entity
{

  private $naslov, $godina_izdanja;
    
  public function __construct($naslov, $godina_izdanja)
  {
      
      
     
      $this->naslov=$_POST['naslov'];
      $this->godina_izdanja=$_POST['godina'];
     // $this->id_autori=$_POST['id'];
  }

  public function getNaslov()
  {
   return $this->naslov;
  
  
  }
  public function getGodinaIzdanja()
  {
  
   return $this->godina_izdanja;
  
  }
  //public function getIdAutori()
  //{
  
   //return $this->id_autori;
  
  //}
    public function save()
    {
   

        echo "Book";
        $db = DB::getInstance();
        
        $mysqli = $db->getConnection(); 

        $query="INSERT INTO knjige (naslov, godina_izdanja) values( ?,?)";
        $stmt=$mysqli->prepare($query);
        $stmt->bind_param("ss", $this->naslov, $this->godina_izdanja);
        
       
    
    $stmt->execute();

     



        
   
    }
    public function save2()
    {
   

        echo "Book";
        $db = DB::getInstance();
        
      
        $mysqli = $db->getConnection(); 
        $array = array(); 
        $query="select * from  autori ";
        $result = mysqli_query($this->connection, $query);  
        while($row = mysqli_fetch_assoc($result))  
        {  
             $array[] = $row;  
        }  
        return $array; 
    //endwhile;
     



        
   
    }
}

class EntityFactory
{
    public static function createEntity($type)
{
    if ($type=="Author")
    {
        
        
            return new Author($ime, $prezime);
        
   

}
else if ($type=="Book")
{
   
   

  return new Book($naslov, $godina_izdanja);
}


}
}

$factory = new EntityFactory();
//$factory2 = new EntityFactory();

$product1 = $factory->createEntity('Author');
echo $product1->getIme();
$product1->save();


$product2 = $factory->createEntity('Book');
echo $product2->getNaslov();
$product2->save();

$product2->save2();





?>