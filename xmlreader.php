<?php
// Loading the XML file
$xml = simplexml_load_file("books.xml");
var_dump($xml);
var_dump($xml->children(1));
echo "<h2>".$xml->getName()."</h2><br />";
foreach($xml->children() as $book)
{
	var_dump($book);
    echo "BOOK : ".$book->attributes()->id."<br />";
    echo "Author : ".$book->author." <br />";
    echo "Title : ".$book->title." <br />";
    echo "Genre : ".$book->genre." <br />";
    echo "Price : ".$book->price." <br />";
    echo "Publish Date : ".$book->publish_date." <br />";
    echo "Description : ".$book->description." <br />";
    echo "<hr/>";
}