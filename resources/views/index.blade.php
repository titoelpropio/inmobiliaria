@extends('layouts.admin')
@section('content')

<div class="form-group">
    <div class="col-md-7 news-left-grid" style="border: 1px #2e6da4 solid;margin-right: 20px"> 
        <h3>Don’t be late,</h3>
        <h2>Book your ticket now!</h2>
        <h4>Easy, simple & fast.</h4>
        <a href="#"><i class="book"></i>BOOK TICKET</a>
        <p>Get Discount up to <strong>10%</strong> if you are a member!</p>
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 news-left-grid " style="box-shadow: 2px 2px 5px 2px #999;">
        <h4>BUSCAR</h4>
        <div class="form-horizontal " style="margin: 40px">
            <div class="form-group" >                <label>precio</label>

                <select class="selectpicker" multiple>
                    <optgroup label="Condiments" data-max-options="2">

                        <option>HOLIS</option>
                    </optgroup>
                    <optgroup label="Breads" data-max-options="2">

                        <option>HOLIS</option>
                    </optgroup>
                </select> 
            </div>
            <div class="form-group" >                <label>precio</label>

                <select class="selectpicker" multiple>
                    <optgroup label="Condiments" data-max-options="2">
                        <option>HOLIS</option>
                    </optgroup>
                    <optgroup label="Breads" data-max-options="2">
                        <option>HOLIS</option>
                    </optgroup>
                </select> 
            </div>
            <button class="btn btn-success">BUSCAR</button>
        </div>
    </div>

</div>

    <div class="col-md-12 news-left-grid " style="box-shadow: 2px 2px 5px 2px #999;margin-top: 20px;" >
        <h4>BUSCAR</h4>
        <div class="form-horizontal " style="margin: 40px">
            <div class="form-group" >
                <span>precio</span>
                <select class="selectpicker" multiple>
                    <optgroup label="Condiments" data-max-options="2">

                        <option>HOLIS</option>
                    </optgroup>
                    <optgroup label="Breads" data-max-options="2">

                        <option>HOLIS</option>
                    </optgroup>
                </select> 
            </div>
            
            <div class="form-group" >
                                <span>precio</span>

                <select class="selectpicker" multiple>
                    <optgroup label="Condiments" data-max-options="2">
                        <option>HOLIS</option>
                    </optgroup>
                    <optgroup label="Breads" data-max-options="2">
                        <option>HOLIS</option>
                    </optgroup>
                </select> 
            </div>
            <button class="btn btn-success">ENVIAR</button>
        </div>
    </div>

<!--</div>-->

@stop