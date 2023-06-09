<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <!-- Icon Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Bank Management System</title>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
        <a class="navbar-brand" href=""><i class="fas fa-university"></i> Basic Bank of India</a>
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLScXdRJOTr5plyjinjUWOdkRNxCi-NzL2V_qO99H1pXKhXpImQ/viewform?usp=sf_link">Contact</a>
            </li>
        </ul>
    </nav>
    <!-- Navbar End -->

    <!-- Transaction Histroy Table Start -->
    <div class="container">
        <?php

            include("connection.php");

            $query = "select * from transaction_history";
            $data = mysqli_query($conn, $query);

            $total = mysqli_num_rows($data);

            if($total!=0){
                ?>
                <table style="width:600px; text-align:center; line-height:40px; width: 100%" class="table-bordered">  
                    <thead>
                        <tr>
                            <th>From Account Of</th>
                            <th>To Account Of</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    
                    <?php
                        while($rows = mysqli_fetch_assoc($data)){
                    ?>
                        <tr>
                            <td><?php echo $rows['From Account Of']; ?></td>
                            <td><?php echo $rows['To Account Of']; ?></td>
                            <td><?php echo $rows['Amount']; ?></td>
                        </tr>
                    <?php
                        }
                    ?> 
                </table>
            <?php 
                } 
            else{
                echo "No transaction history";
            }
        ?>
    </div>
    <!-- Transaction Histroy Table End -->
    
</body>
</html>