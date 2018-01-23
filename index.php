<html>
    <head>
        <!-- mobile meta -->
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title> Live Search | AJAX</title>

        <!--lib css-->
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

        <!--custom css-->
        <link rel="icon" type="image/x-icon" href="images/mypic.jpg">
    </head>

  <style media="screen">
      body{
        background-image: url('images/2.jpg');
      }
  </style>

<body>

<div class="container">
  <h2>Live Search</h2>

  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search Shubham or Daya here...." id="search" name="search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
    </div>
  </div>

  <div id="result">  </div>
</div>

</body>

<script type="text/javascript" src="bootstrap/js/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){

      var txt=$(this).val();
      if(txt!='')//if search box is not empty
      {
        $('#result').html('');
        $.ajax({
          url:'fetch.php',
          type:'POST',
          data:{search:txt},
          datatype:'text',
          success:function(data)
          {
            $('#result').html(data);
          }
        });
      }
      // else {
      //   $('#result').html('');
      // }
    })
  });
</script>
</html>
