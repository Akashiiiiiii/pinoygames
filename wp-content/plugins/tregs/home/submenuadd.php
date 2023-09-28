<?php
    global $wpdb;

    //Insert Code
    /*$wpdb->insert(
        "wp_tregs_plugin",
        array(
            "tbl_title"=>"test1",
            "tbl_paragraph"=>"test1",
            "tbl_column"=>"1",
            "tbl_status"=>"Status",
            "tbl_language"=>"Engling"
        )
    )*/

    $wpdb->query(
        $wpdb->prepare(
             "INSERT into wp_tregs_plugin(tbl_title,tbl_paragraph,tbl_column,tbl_status,tbl_language) values('%s','%s','%s','%s','%s')","test2","test2","test2","test2","test2"
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="#" id="frmpost">
    
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" required placeholder="Enter Title" name="title">
    </div>

    <div class="form-group">
      <label for="paragraph">Paragraph:</label>
      <input type="text" class="form-control" id="paragraph" required placeholder="Enter Paragraph" name="paragraph">
    </div>
    
    <div class="form-group">
      <label for="column">Column:</label>
      <input type="text" class="form-control" id="column" required placeholder="Enter Column" name="column">
    </div>
    

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>