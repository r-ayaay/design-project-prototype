@extends('layouts.app')
<!--
<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "desprojprototype";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed");
    }
?>

@section('styling')
<link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <?php
        $sql = "SELECT * FROM orders WHERE orders.status='pending'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            echo "<table>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Product Type</th>
                    <th>Qty.</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Method of Recieving</th>
                    <th>Status</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["client_name"]."</td>
                <td>".$row["client_email"]."</td>
                <td>".$row["photo"]."</td>
                <td>".$row["product"]."</td>
                <td>".$row["quantity"]."</td>
                <td>".$row["dimension_x"]." x ".$row["dimension_y"]."</td>
                <td>".$row["price"]."</td>
                <td>".$row["method_of_recieving"]."</td>
                <td>".$row["status"]."</td>
                </tr>";
            }
            echo "</table>";
        }
        else{
            echo "no bitches";
        }
    ?>
</div>
@endsection