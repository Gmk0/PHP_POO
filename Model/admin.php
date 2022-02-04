<?php

class DataBase
{
   private static $dbhost ="GMK\GMK1";
   private static $dbName="GESTION_STOCK_3";
   private static $dbUser="";

   private static $dbUserPass ="";
   private static $bdd =null;

   public  static function setBdd()
    {
        try 
        {
       // self:: $bdd = New PDO("mysql:host=".self::$dbhost." ;dbname=". self::$dbName ,self::$dbUser,self::$dbUserPass);
       self::$bdd = New PDO("sqlsrv:Server=".self::$dbhost .";Database=".self::$dbName,self::$dbUser,self::$dbUserPass);
        self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (Exception $th) 
        {
            //throw $th;
            die($th->getMessage());
        }
        return self::$bdd;
    }
    public static function disconnect()
    {
        self:: $bdd = null;
    }
    protected function getBdd()
    {
        if (self::$bdd===null)
        {
            self::setBdd();
        }
        return self::setBdd();
    }
 
}
?>

