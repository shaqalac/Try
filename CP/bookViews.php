<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Store</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      width :100%;
      margin-top: 0px;
    }

    h1 {
      margin: 0;
    }

    .search-bar {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
      margin-top: 20px;
    }

    .search-bar input[type="text"] {
      padding: 8px;
      margin-right: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .search-button {
      padding: 8px 16px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    main {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .book {
      width: 300px;
	    height :800px;
      padding: 40px;
      margin: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

	.book audio
	{
       width : 90%;
	}


	.book img{

		width :80%;
		height:200px;
	
	}
    .book h3 {
      margin-top: 0;
    }

    .book-button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #333;
      color: #fff;
      text-align: center;
      text-decoration: none;
      border: none;
      border-radius: 5px;
    }

    
  </style>
  <script>
    function searchBooks() {
      var input = document.getElementById("search-input").value;
      var books = document.getElementsByTagName("h3");
      for (var i = 0; i < books.length; i++) {
        var book = books[i];
        if (book.innerHTML.toLowerCase().indexOf(input.toLowerCase()) > -1) {
          book.parentElement.style.display = "";
        } else {
          book.parentElement.style.display = "none";
        }
      }
    }
  </script>
</head>
<body>
  <header>
    <h1>Welcome to our Book Store</h1>
  </header>

  <div class="search-bar">
    <input type="text" id="search-input" placeholder="Search by title">
    <button class="search-button" onclick="searchBooks()">Search</button>
  </div>

  <main>
    <div class="book">
      <h3>Black Beauty</h3>
	  <img src="images\black-beauty-picture-book-1.jpg">
      <p>Author: Anna Sewell</p>
      <p>Black Beauty, a handsome well-bred horse of the era before automobiles, narrates the story. He is initially owned by kind masters but is sold to crueler owners. Eventually he collapses from overwork and ill treatment, but in the end he is sold to another kind owner and recovers</p>
	  
      <a href="booking.php" class="book-button">Add to Order</a>
      
    
	
	</div>
    <div class="book">
      <h3>Frankenstein </h3>
	  <img src="images\frankenstein.jpg">
      <p>Author: Mary Shelley</p>
      <p>Frankenstein is a talented young medical student who strikes upon the secret of endowing life to the dead. He becomes obsessed with the idea that he might make a man. The resulting creature is lonely and miserable; he is an outcast who seeks murderous revenge for his condition.</p>
      <a href="booking.php" class="book-button">Add to Order</a>
    </div>
    
    <div class="book">
      <h3>Cosmic Computer</h3>
	  <img src="images\CosmicComputer.jpg">
      <p>Author:H. Beam Piper</p>
      <p>Conn Maxwell returns from Terra to his poverty-stricken home planet of Poictesme, with news of the possible location of Merlin, a military super-computer rumored to have been abandoned there after the last war. The inhabitants hope to find Merlin, which they think will be their ticket to wealth and prosperity. But is Merlin real?</p>
      <a href="booking.php" class="book-button">Add to Order</a>
    </div>
    <div class="book">
      <h3> The Sleepy Hollow </h3>
      <img src="images\SleepyHollow.jpg">
      <p>Author : Washington Irving</p>
      <p>Sleepy Hollow is a small, isolated town which is speculated to be a supernatural hot spot. The townspeople are unsure as to the reason for the activity in their town, but they believe it may be because their town is an original Dutch settlement, with many of its residents being direct descendants of these settlers.</p>
      <a href="booking.php" class="book-button">Add to Order</a>

    </div>
    

    
  </main>

  
 
</body>
</html>
