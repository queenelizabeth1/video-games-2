<?php
    include 'header.php';
?>
<link href="test.css" rel="stylesheet"type="text/css"/>
<form action="search.php" method = "POST">
    <input type="text" name = "search" placeholder="Search">
    <button type = "submit" name = "submit-search">Purrch</button>
</form>
<div style="background: ghostwhite; 
  font-size: 20px; 
  padding: 10px; 
  border: 1px solid lightgray; 
  margin-left: 300px;
  margin-right:300px;">
<h1>Front Page</h1>
<h2>All Articles</h2>
<div class="article-container">
    <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class = 'article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                    <p>".$row['a_date']."</p>
                    <p>".$row['a_author']."</p>
                </div>";
            }
        }
    ?>
</div>
</body>
</html>