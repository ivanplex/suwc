@extends('layouts')

@section('title', 'Register ')

@section('css')
    <link href="/css/session.css" rel="stylesheet" type="text/css">
    <link href="/css/form.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="section">

        <div class="section-header">
          Signup - Beginner sessions - 09/10/2017
        </div>


        <div class="form-group">
            <label class="control-label" for="uid">Student ID</label>
            <input type="text" class="form-control" id="uid">
        </div>

        <div class="form-group">
            <label class="control-label" for="phone">Phone number</label>
            <input type="text" class="form-control" id="phone">
        </div>

        <div class="form-group">
            <label class="control-label" for="sw-member">Do you have a sport and wellbeing membership</label>
            <input type="text" class="form-control" id="sw-member">
        </div>

        <div class="form-group">
            <label class="control-label" for="suwc-member">Do you have a sport and wellbeing membership</label>
            <input type="text" class="form-control" id="suwc-member">
        </div>

        <div class="form-group">
            <label class="control-label" for="wetsuit">Do you need a wetsuit </label>
            <input type="text" class="form-control" id="wetsuit">
        </div>

        <div class="form-group">
            <label class="control-label" for="wetsuit-size">What wetsuit size do you need </label>
            <input type="text" class="form-control" id="wetsuit-size">
        </div>

        <div class="form-group">
            <label class="control-label" for="boot">Do you need to borrow a wetsuit boot? </label>
            <input type="text" class="form-control" id="boot">
        </div>






    </div>
@endsection
        