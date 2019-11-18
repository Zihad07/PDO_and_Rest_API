<?php 

    $host = 'localhost';
    $user = 'root';
    $password = "";
    $dbname = "pdoposts";

    // SET DNS

    $dns = "mysql:host=$host;dbname=$dbname";

    // Create a PDO intances
    $pdo = new PDO($dns,$user,$password);
    $pdo->setAttribute(pdo::ATTR_DEFAULT_FETCH_MODE,pdo::FETCH_OBJ);

    // --------------------------------------

    #pdo Query
    // $stmt = $pdo->query("SELECT * FROM posts ");

    // while($row = $stmt->fetch(pdo::FETCH_ASSOC)){
    //     echo $row['title'].'<br>';
    // }
    // while($row = $stmt->fetch(pdo::FETCH_OBJ)){
    //     echo $row->title.'<br>';
    // }
    // while($row = $stmt->fetch()){
    //     echo $row->title.'<br>';
    // }

    #PREPARED STATEMENTS (prepare & execute)

    #Fetch multiple POSTS

    // UserInput
    $author = "Hellow";
    $is_published = true;
    $id = 2;
    // // positional Prams
    // $sql = "SELECT * FROM posts WHERE author= ? ";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);

    // Name Prams
    // $sql = "SELECT * FROM posts WHERE author=  :author_name && is_published= :is_published";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author_name'=>$author, 'is_published'=>$is_published]);

    // $posts = $stmt->fetchAll();

    // foreach($posts as $post){
    //     echo $post->title.'<br>';
    //     echo $post->author.'<br>';
    //     echo $post->body.'<br><br>';
    // }

    // Single Posts
      // Name Prams
    //   $sql = "SELECT * FROM posts WHERE id= :id ";
    //   $stmt = $pdo->prepare($sql);
    //   $stmt->execute(["id"=>$id]);
  
    //   $post = $stmt->fetch();
    // var_dump($posts);

   
        // echo $post->title.'<br>';
        // echo $post->author.'<br>';
        // echo $post->body.'<br><br>';


    // GET ROW count

    // $stmt = $pdo->prepare("SELECT * FROM posts WHERE author= :author ");
    // $stmt->execute(['author'=>$author]);
    // echo $stmt->rowCount();


    // INSERT DATA
    // $title = "Post-7";
    // $body = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, consequatur. Officia, iure.";
    // $author = "Evan";

    // $sql = "INSERT INTO posts(title,body,author) VALUES(:title,:body,:author) ";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author]);
    // echo "Post Added";


    // Updated
    
    // $id = 2;
    // $body = "Updated Updated ";
    // $sql = "UPDATE posts SET body=:body WHERE id=:id ";

    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['body'=>$body,'id'=>$id]);
    // echo "Post Updated";

    // Deleted
    
    $id = 5;
   
    $sql = "DELETE FROM posts  WHERE id=:id LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    echo "Post Delete";











?>

<!doctype html>
<html lang="en">
  <head>
    <title>PDO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <h1>Learning PDO</h1>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>