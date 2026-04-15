<html>
<head><title>Book Search</title></head>
<body>
<form method="GET" action="">
    Enter Book Name: <input type="text" name="book_search">
    <input type="submit" name="submit" value="Search">
</form>

<?php
if(isset($_GET["submit"]))
{
    // Load the XML file
    if (file_exists("Slip 14.xml")) {
        $xml = simplexml_load_file("Slip 14.xml");
        $search_name = $_GET['book_search'];
        $found = false;

        foreach($xml->book as $book)
        {
            // Compare the input name with the XML book_name
            if((string)$book->book_name == $search_name)
            {
                echo "<h3>Book Found:</h3>";
                echo "Book Name: " . $book->book_name . "<br>";
                echo "Category: " . $book->category . "<br>";
                echo "Price: " . $book->price . "<br><hr>";
                $found = true;
            }
        }

        if(!$found) {
            echo "No book found with the name: " . htmlspecialchars($search_name);
        }
    } else {
        echo "Error: XML file not found.";
    }
}
?>
</body>
</html>