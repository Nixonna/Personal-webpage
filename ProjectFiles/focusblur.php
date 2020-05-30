<!DOCTYPE html>

<!-- Demonstrating the focus and blur events. -->
<html>
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset = "utf-8">
      <title>A Form Using focus and blur</title>
      <link rel = "stylesheet" type = "text/css" href = "style3.css">
      <script src = "focusblur.js"></script>
   </head>
   <body style="color: cornflowerblue;">
      <form id = "myForm" action = "">
         <p><label class = "fixed" for = "name">Name:</label>
            <input type = "text" id =  "name" 
               placeholder = "Enter name"></p>
         <p><label class = "fixed" for = "email">E-mail:</label>
            <input type = "email" id = "email" 
               placeholder = "Enter e-mail address"></p>
         <p><label>Click here if you like this site 
            <input type = "checkbox" id =  "like"></label></p>
         <p><label for = "comments">Any comments?</p>
         <textarea id =  "comments" 
            placeholder = "Enter comments here"></textarea>
         <p><input id = "submit" type = "submit"> 
            <input id = "reset" type = "reset"></p>
      </form>
      <p id = "helpText"></p>
   </body>
</html>


