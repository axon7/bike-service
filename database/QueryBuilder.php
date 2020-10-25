<?php



class QueryBuilder
{
protected $pdo;

 public function __construct($pdo){
     $this->pdo = $pdo;
 }


 public function selectAll($table){
     $stmt = $this->pdo->prepare("SELECT * FROM {$table}");
     $stmt->execute();

     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 public function insert($table, $parameters){
     $sql = sprintf(
         'INSERT INTO %s (%s) VALUES (%s)',
         $table,
         implode(', ', array_keys($parameters)),
         ':' . implode(', :', array_keys($parameters))
     );

     var_dump($sql);
     try{

         $stmt = $this->pdo->prepare($sql);
         $stmt->execute($parameters);
     } catch(Exception $e) {
         die('error' . $e);
     }

 }
}