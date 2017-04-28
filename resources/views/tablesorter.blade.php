@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('js/tablesorter/themes/blue/style.css') }}">
@endsection('css')
@section('js')
    <script src="{{ asset('js/tablesorter/jquery-latest.js') }}"></script> 
    <script src="{{ asset('js/tablesorter/jquery.tablesorter.js') }}"></script> 
@endsection('js')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">tablesorter</div>
                <div class="panel-body">
                </div>
                <table class="table table-bordered tablesorter" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() { 
        $("#myTable").tablesorter(); 
    }); 
</script>
@endsection