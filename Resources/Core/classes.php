<?php
#This is the basic M8 classes file
foreach (glob("Classes/*.php") as $filename)
{
    include $filename;
}

#Basic database interaction class
class database
{
    // property declaration
    private $dbuser = 'm8';
    private $dbpassword = 'hunter3';
    private $dbhost = 'localhost';
    private $database = 'm8db';
    private $prefix = 'meight';

    // method declaration
    public function info() {
    	echo "Database: ".$this->database."<br />";
        echo "Database User: ".$this->dbuser."<br />";
        echo "Database Host: ".$this->dbhost."<br />";
        echo "Database Prefix: ".$this->prefix."<br />";
    }

    public function test() {
    	$link = mysql_connect($this->dbhost, $this->dbuser, $this->dbpassword);
		if (!$link) {
	    	die('Could not connect: ' . mysql_error());
		}
		echo 'Connected successfully';
		mysql_close($link);
    }
}

#$database = new database();

#$database->test();

#echo "Classes Initialized <br />";
?>