@extends('layouts.app')
@section('content')
<style type="text/css">
.db-bk-color-one {
    background-color: #f55039;
}
.db-bk-color-two {
    background-color: #46A6F7;
}
.db-bk-color-three {
    background-color: #47887E;
}
.db-bk-color-six {
    background-color: #F59B24;
}
.db-padding-btm {
    padding-bottom: 50px;
}
.db-button-color-square {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.50);
    border: none;
    border-radius: 0px;
}
.db-button-color-square:hover {
    color: #fff;
    border: none;
}
.db-pricing-eleven {
    margin-bottom: 30px;
    margin-top: 50px;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, .5);
    color: #fff;
    line-height: 30px;
}
.db-pricing-eleven ul {
    list-style: none;
    margin: 0;
    text-align: center;
    padding-left: 0px;
}
.db-pricing-eleven ul li {
    padding-top: 10px;
    padding-bottom: 10px;
    cursor: pointer;
}
.db-pricing-eleven ul li i {
    margin-right: 5px;
}
.db-pricing-eleven .price {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px 20px 20px 20px;
    font-size: 60px;
    font-weight: 900;
    color: #FFFFFF;
}
.db-pricing-eleven .price small {
    color: #B8B8B8;
    display: block;
    font-size: 12px;
    margin-top: 22px;
}
.db-pricing-eleven .type {
    background-color: #52E89E;
    padding: 40px 10px;
    font-weight: 900;
    text-transform: uppercase;
    font-size: 30px;
}
.db-pricing-eleven .pricing-footer {
    padding: 10px;
}
.db-pricing-eleven.popular {
    margin-top: 10px;
}
.db-pricing-eleven.popular .price {
	padding-top: 50px;
}
</style>
<div class="container">
   <div class="row text-center">
        <div class="col-md-12">
            <h3>Laravel 5 - Payment Using Paypal</h3>
        </div>
    </div>
 
        <div class="row db-padding-btm db-attached">
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <form action="{{ route('getCheckout') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="medium">
                        <input type="hidden" name="pay" value="45">
	                <div class="db-pricing-eleven db-bk-color-two popular">
	                    <div class="price">
	                        <sup>$</sup>45
	                                <small>per quarter</small>
	                    </div>
	                    <div class="type">
	                        MEDIUM PLAN
	                    </div>
	                    <ul>
	                        <li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
	                        <li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
	                        <li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
	                    </ul>
	                    <div class="pricing-footer">
	                        <button class="btn db-button-color-square btn-lg">BOOK ORDER</button>
	                    </div>
	                </div>
	                </form>
                </div>
            </div>
        </div>
</div>
@endsection