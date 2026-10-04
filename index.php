<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include'purephp.php'
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hell world</h1>
    <label for=""><u>Output from php to HTML Elements</u></label>
    <?php echo "<h1>Hello</h1>"; ?>
    <h3>
        username: <u> <?php echo $username?></u>
        <br>
        User Id: <u><?php echo $user_id?></u>
        <a href="next_page.php">Go to next page boi</a>
    </h3> <br>
    <button type="button" onclick="greetUser()">Greet User</button>
    <script>
        const username = "<?php echo $username; ?>";
        const userID = "<?php echo $user_id; ?>";
        let level = "<?php echo $level; ?>";
        let money = "<?php echo $money; ?>";
        let live = "<?php echo $live; ?>";
        function greetUser(){
            alert("HELLO " +" "+username +". "+ "Your User ID: "+" "+userID +" "+ "Money: "+ money +" "+"Level: "+ level +" "+ "Live: " + live)
        }
    </script>
</body>
</html>