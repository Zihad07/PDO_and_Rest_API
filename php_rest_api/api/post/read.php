<?php 
    // Headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    include_once "../../config/Database.php";
    include_once "../../models/Post.php";

    // Instantiate DB and connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object

    $post = new Post($db);

    // Blog post Query
    $result = $post->read();
    // Get the Row Count
    $num = $result->rowCount();

    if($num > 0){
        // Post array
        $posts_arr = [];
        $posts_arr['data'] = [];

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_item = [
                'id' => $id,
                'title'=>$title,
                'body'=>html_entity_decode($body),
                'author'=>$author,
                'category_id'=>$category_id,
                'category_name'=>$category_name
            ];

            // Push to 'data'
            array_push($posts_arr['data'],$post_item);
        }

        // Turn to JSON & output
        echo json_encode($posts_arr);
    }else{
        // No posts
        echo json_encode([
            'message'=>'No Posts Found' 
        ]);
    }

?>