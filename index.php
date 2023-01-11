<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP SEARCH</title>
</head>
<body>

  <main >
      <section class="search-section" style="margin-bottom: 5px;">

        <!--Category Search-->
        <div>
          <h1>Category Search</h1>

          <form action="" method="post">
            <fieldset>
              <legend>Search</legend> <br/><br/>

              <label for="Category">Category: </label>
              <select name="product_category" id="Category" required>
                <option> -- Please Select -- </option>
                <option value="Pepperoni">Pepperoni</option>
                <option value="Cheese">Cheese</option>
                <option value="Pineapple">Pineapple</option>
              </select>

              <input type="submit" value="Submit" name="category_btn"/>
              <input type="reset" value="Clear">
            </fieldset>
          </form>
        </div>
        <!--/ Category Search End-->

        <!--Open Text Search-->
        <div>
          <h1>Open Text Search</h1>

          <form action="" method="post">
            <fieldset>
              <legend>Search</legend> <br><br>

              <label for="Search">Search: </label>
              <input type="text"  name="product_name" id="Search" placeholder="Search By Product Name .." required />

              <input type="submit" value="Submit" name="name_btn"/>
              <input type="reset" value="Clear">
            </fieldset>
          </form>
        </div>
        <!--/ Open Text Search End-->

        <!--Order By Search-->
        <div>
          <h1>Sort</h1>

          <form action="" method="post">
            <fieldset>
              <legend>Search</legend> <br/><br/>

              <label>Order by: </label>

              <input type="radio" name="order" value="product_name" id="A-Z" required />
              <label for="A-Z">A-Z</label>

              <input type="radio" name="order" value="product_price" id="Price" required />
              <label for="Price">Price</label> <br><br>

              <input type="submit" value="Submit" name="order_btn"/>
              <input type="reset" value="Clear">
            </fieldset>
          </form>
        </div>
        <!--/ Order By Search End-->

      </section>

      <section class="result-section">
        <?php

          if( isset($_POST['category_btn']) ) {
              require_once "search-by-category.php";
          }
          elseif( isset($_POST['name_btn']) ) {
              require_once "search-by-name.php";
          }
          elseif( isset($_POST['order_btn']) )  {
              require_once "search-by-order.php";
          }

        ?>
      </section>
  </main>

  <a href="#">Home</a>
</body>
</html>



