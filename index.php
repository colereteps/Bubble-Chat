<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="view" content="width=device-width, initial-scale 1.0">
  <title> Bubble Chat </title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/5b72804baa.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="wrapper">
    
    <div class="title">Bubble Chat</div>
    <div class="form">
      <! Form Bot -->
        <div class="bot-inbox inbox">
          <div class="icon">
            <! icon --> 
              <i class="fa-solid fa-user"></i>
          </div>
          <div class="msg-header">
            <! Top post -->
              <p>Hello there, how are you</p>
              <! Brick with new abzac>
          </div>
        </div>
    </div>
    <div class="typing">
      <div class="input-d">
        <input id="data" type="text" placeholder="I'm waiting for your messages..." required>
        <! text in input -->
          <button id="send"> Send </button>
      </div>
    </div>
  </div>
  <script> $(document).ready(function(){
$("#send").on("click", function(){
  $value=$("#data").val();
  // alert($value);
  $msg= '<div class="user-bot inbox"><div class="msg-header"><p>'+ $value +'</p></div>';
$(".form").append($msg); 
$("#data").val();
$.ajax({
  url: 'message.php',
  type: 'POST',
  data: 'text='+$value,
  success: function(result) {
$replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa-solid fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div>'
$(".form").append($replay);  
$(".form").scrollTop($(".form")[0].scrollHeight); } 
  
}) 
})
  });</script>
</body>
</html>