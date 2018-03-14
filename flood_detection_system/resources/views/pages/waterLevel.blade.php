@extends('layouts.master')
@section('content')
<img src="img/header.jpg" class="full-width">

<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <table class="table table-hover">
                <tr>
                    <th>Station Name</th>
                    <th>River</th>
                    <th>Alert Level (m) </th>
                    <th>Minor Flood<br>Level (m)</th>
                    <th>Major Flood<br>Level (m)</th>
                    <th>Current Water<br>Level (m)</th>
                    <th>Condition</th>
                </tr>
                <?php for ($i=0; $i<10; $i++) {?>
                <tr>
                    <td>Ganga bada</td>
                    <td> Nilwala Ganga</td>
                    <td></td>
                    <td>5.00</td>
                    <td>5.00</td>
                    <td>5.50</td>
                    <td>Normal</td>
                </tr>
               <?php } ?>
            </table>
        </div>
    </div>
</div>
@endsection