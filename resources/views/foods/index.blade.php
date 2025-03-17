<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foods</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Foods Table</h2>        
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Nutrition Fact</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
      </tr>

    </thead>
    <tbody>
    @foreach ($foods as $food)
        <tr>
          <td>{{ $food->name }}</td>
          <td>{{ $food->nutrition_fact }}</td>
          <td>{{ $food->description }}</td>
          <td>{{ $food->price }}</td>
          <td>{{ $food->category_id }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
