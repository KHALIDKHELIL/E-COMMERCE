<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Page</title>
    <style>
        /* *{
            border: 2px solid red;
        } */
        body{
            background-color: rgb(194, 183, 169);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            scrollbar-highlight-color: black;
        }
        .form_Admin{
            display: flex;
            margin-top: 8%;
            flex-direction: column;
           justify-content: center;
           align-items: center;
            width: 50%;
            background-color: aliceblue;
            padding: 2%;
        }
    </style>
</head>
<body>
    <h1>Welcome to Admin Page</h1>

    <form class="form_Admin">
       
  
  <!-- <label for="category">Category:</label>
  <input type="text" id="category" name="category"> -->
  
  
  <label >Image of product</label><br>
  <input type="file" accept="Image/*" id="image" name="image"><br>

  <label for="productName">Product name:</label>
  <input type="text" id="productName" name="productName">
  <label for="price">Price:</label>
  <input type="number" id="price" name="price"> <br>
  <input type="submit" value="submit" id="submit">
        <!-- <button type="button" onclick="addProduct()">Add Product</button> -->
      </form>

      <form action="" class="form_Admin">
        <label for="">Enter the unwanted Product title</label>
       
        <input type="text" id="title"><br>
        
        <button type="button" onclick="deleteProduct()">Add Product</button>
        
        
      </form>
    
      <script src="cart.js"></script>
</body>
</html>