<?php
  if(!isset($_GET['quote'])){
    header('Location: ../');
  }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bugtaw Quotes</title>

  <style>
    body {
      background : repeat rgba(235, 150, 108, 0.1); 
    } 

    .main {
      position : relative; 
    } 

    .mb-wrap {
      margin : 20px auto; 
      padding : 20px; 
      position : relative; 
      width : 300px; 
    } 

    .mb-wrap p {
      margin : 0; 
      padding : 0; 
    }

    .mb-wrap blockquote {
      margin : 0; 
      padding : 0; 
      position : relative; 
    } 

    .mb-wrap cite {
      font-style : normal; 
    } 

    .mb-style-2 blockquote {
      padding-top : 150px; 
    } 

    .mb-style-2 blockquote:after {
        background: none repeat scroll 0 0 rgba(235, 150, 108, 0.8);
        border-radius: 50% 50% 50% 50%;
        color: rgba(255, 255, 255, 0.5);
        content: "❞";
        font-family: 'icons';
        font-size: 70px;
        height: 130px;
        left: 50%;
        line-height: 130px;
        margin-left: -65px;
        position: absolute;
        text-align: center;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.1);
        top: 0;
        width: 130px;
    }
    .mb-style-2 blockquote:before {
        border-left: 5px solid rgba(235, 150, 108, 0.1);
        border-radius: 50% 50% 50% 50%;
        content: "";
        height: 500px;
        left: -50px;
        position: absolute;
        top: 0;
        width: 500px;
        z-index: -1;
    }

    .mb-style-2 blockquote p {
      background : none repeat scroll 0 0 rgba(255, 255, 255, 0.5); 
      box-shadow : 0 -6px 0 rgba(235, 150, 108, 0.2); 
      color : rgba(235, 150, 108, 0.8); 
      display : inline; 
      font-family : Baskerville, Georgia, serif; 
      font-style : italic; 
      font-size : 28px; 
      line-height : 46px; 
      text-shadow : 0 1px 1px rgba(255, 255, 255, 0.5);  
    } 

    .mb-attribution {
      text-align : right; 
    } 

    .mb-author {
      color : #D48158; 
      font-size : 18px; 
      font-weight : bold; 
      padding-top : 10px; 
      text-shadow : 0 1px 1px rgba(255, 255, 255, 0.1); 
      text-transform : uppercase; 
    }  

    cite a {
      color : #D7AA94; 
      font-style : italic; 
    } 

    cite a:hover {
      color : #D48158; 
    }
  </style>
</head>
<body>
	  <section class="main">  
      <div class="mb-wrap mb-style-2">  
        <blockquote cite="http://www.gutenberg.org/ebboks/11">  
          <p><?php echo $_GET['quote'] ?></p>
        </blockquote>
      </div><!--#mb-wrap-->
      
      <div class="mb-attribution"> 
        <p class="mb-author">  
          [Author]
        </p>
        <cite>  
          [Book]
        </cite>
      </div><!-- #mb-attribution-->

  </section>
</body>
</html>
