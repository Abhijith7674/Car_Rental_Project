<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Car Rental Website</title>
  <link rel="stylesheet" href="styles1.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="panel.php">Dashboard</a></li>
    </ul>
    <div class="admin-login">
      <a href="logout.php">Logout</a>
    </div>
  </nav>

  <div class="admin-panel">
    <h1>Welcome, Admin!</h1>
    <h2>Statistics</h2>
    <p>Total number of registered users: 100</p>
    <p>Total number of rented cars: 50</p>
    <p>Total revenue: $5000</p>

    <h2>Latest Rentals</h2>
    <table>
      <thead>

          <th>Username</th>
          <th>Car</th>
          <th>Rental Date</th>
          <th>Return Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John123</td>
          <td>Mountain Car</td>
          <td>2023-06-15</td>
          <td>2023-06-18</td>
        </tr>
        <tr>
          <td>Sarah456</td>
          <td>City Car</td>
          <td>2023-06-20</td>
          <td>2023-06-23</td>
        </tr>
    
        <tr>
          <td>Mike789</td>
          <td>Hybrid Car</td>
          <td>2023-06-25</td>
          <td>2023-06-28</td>
        </tr>
        <tr>
          <td>Lisa246</td>
          <td>Electric Car</td>
          <td>2023-06-30</td>
          <td>2023-07-03</td>
        </tr>

      </tbody>
    </table>
  </div>
</body>
</html>
