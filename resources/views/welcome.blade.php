@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody class="connectedSortable">
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    tr.ui-sortable-helper{background-color: #fff;display: table!important;border: 1px solid #ddd;}
</style>
<script>
    $(document).ready(function() {
        $( "tbody.connectedSortable" ).sortable({
                connectWith: ".connectedSortable",
                items: "> tr:not(:first)",
                helper:"clone",
                zIndex: 999990,
                start: function(event, ui){
                    //ui.item.startHtml = ui.item.html();
                },
                stop: function(event, ui){ 
                    //ui.item.html(ui.item.startHtml);
                }
            })
            .disableSelection()
    });
</script>
@endsection