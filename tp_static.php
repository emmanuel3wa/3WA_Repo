<?php

date_default_timezone_set('UTC');

class Log
{

    private static array $strorage;
    private static int $count;

    public static function addLog(string $date){
        $this->strorage[] = $date;
        $this->count++;
    }

    public static function getStorage(): array{
        return $this->strorage;
    }
    
}

class ManageNews{
   private string $title;

   public function __construct(Log $log, string $title)
   {
        $log->addLog(date(DATE_RFC2822));
       $this->$title = $title;
   }

}


$n1 = new ManageNews(new Log, "Article PHP");
$n2 = new ManageNews(new Log, "Article MySQL");
$n3 = new ManageNews(new Log, "Article JS");
$n4 = new ManageNews(new Log, "Article MongoDB");
$n5 = new ManageNews(new Log, "Article Python");

var_dump(Log::getStorage());