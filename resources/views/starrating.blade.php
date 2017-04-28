@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">tablesorter</div>
                <div class="panel-body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="clearfix">
                                <div class="rating pull-left">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class = "full" for="star5" title="5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4.5" />
                                    <label class="half" for="star4half" title="4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class = "full" for="star4" title="4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3.5" />
                                    <label class="half" for="star3half" title="3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class = "full" for="star3" title="3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2.5" />
                                    <label class="half" for="star2half" title="2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class = "full" for="star2" title="2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1.5" />
                                    <label class="half" for="star1half" title="1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" checked />
                                    <label class = "full" for="star1" title="1 stars"></label>
                                    <input type="radio" id="starhalf" name="rating" value="0.5" />
                                    <label class="half" for="starhalf" title="0.5 stars"></label>
                                </div>
                            </div>
                            <div><button type="submit" class="btn btn-success">Gửi</button></div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<style>
    .rating > input { display: none; } 
    .rating > label:before { 
      margin: 5px;
      font-size: 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }

    .rating > .half:before { 
      content: "\f089";
      position: absolute;
    }

    .rating > label { 
      color: #ddd; 
      float: right; 
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label,
    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label { color: #6f5499;  }

    .rating > input:not(:checked) + label:hover,
    .rating > input:not(:checked) ~ label:hover,
    .rating > label:hover ~ input:not(:checked) ~ label,
    .rating > input:not(:checked) ~ label:hover ~ label { color: #3097d1;  } 
</style>
@endsection