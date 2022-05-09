<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="shortcut icon" href="./images/contact.svg">
    <style>


input[type=text],
select,
textarea {
    width: 100%;
   
    padding: 12px;
    
    border: 1px solid #ccc;
  
    border-radius: 4px;
    
    box-sizing: border-box;
    
    margin-top: 6px;
    
    margin-bottom: 16px;
    
    resize: vertical
       
}


input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit]:hover {
    background-color: #45a049;
}


.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.complain {
    font-size: 40px;
    font-family: 'Tapestry', cursive;
    margin-left: 660px;
}



</style>
</head>
<body>
<div class="container">
    <h3 class="complain">Complain Box</h3>
    <form action="index.php">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="First Name">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Last Name">

      <label for="email">Email</label>
      <input type="email" style="    width: 100%; padding: 12px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;margin-top: 6px; margin-bottom: 16px;resize: vertical" id="email" name="email" placeholder="Email">


      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="bangladesh">Bangladesh</option>
        <option value="australia">Australia</option>
        <option value="Argentina">Argentina</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Finland">Finland</option>
        <option value="Gambia">Gambia</option>
        <option value="Ivory Coast">Ivory Coast</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Mexico">Mexico</option>
        <option value="Mozambique">Mozambique</option>
     
      </select>

      <label for="subject">Complain</label>
      <textarea id="subject" name="subject" placeholder="Write Your Complain here.." style="height:200px"></textarea>
      
      <input type="submit" value="Submit"> 

    </form>
  </div>
  <hr>
</body>
</html>