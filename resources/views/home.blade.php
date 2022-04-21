@extends('layouts.app')

@section('styling')
<link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <a name="pending" value="pending" class="dashBoardLink" href="">Pending</a>
    <a name="complete" value="complete" class="dashBoardLink" href="">Completed</a>
    <a name="cancelled" value="cancelled" class="dashBoardLink" href="">Cancelled</a>
        <br>
    <table name="data">
        <tr class="header">
            <th>Order ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Product Type</th>
            <th>Qty.</th>
            <th>Size</th>
            <th>Price</th>
            <th>Method of Recieving</th>
        </tr>
        <!-- TEST -->
        <!-- <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>seggs</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
            <td>seggs2</td>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
        </tr> -->
    </table>
</div>
@endsection