@extends('Front.Layout.master')
@section('content')

<div id="page-content">
    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>
    <div class="container">
        <div class="row site-breadcrumbs justify-content-flex-start">
            @include('Front.Widgets.breadcrumb')
        </div>
        <div class="divider-sm"></div>
        <div class="row text-center justify-content-center">
            <h1 class="title-text">
                Online Rent
            </h1>
        </div>
    </div>
    <div class="container rent-form">
        <div class="form-wrapper">
            <form action="" class="rent-form-online">
                
                <select placeholder="Car brand" type="text" class="width-md rent-input">
                    <option value="1">option1</option>
                </select>
                <select placeholder="Car brand" type="text" class="width-md rent-input">
                    <option value="1">option1</option>
                </select>
                <select placeholder="Car brand" type="text" class="width-lg rent-input">
                    <option value="1">option1</option>
                </select>
                <input placeholder="Car brand" type="datetime" class="datetime rent-input">
                <input placeholder="Car brand" type="datetime" class="datetime rent-input">
                <input placeholder="Name, Surname*" type="text" class="width-sm rent-input">
                <input placeholder="Phone*" type="text" class="width-sm rent-input">
                <input placeholder="Email" type="text" class="width-sm rent-input">
                <textarea  placeholder="Any other suggestions" name="" id="" class="width-lg rent-textarea" cols="30" rows="10"></textarea>
               </form>
        </div>
       
    </div>

    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>

@endsection
