@extends('layouts.app')

@section('content')
<div class="columns full-screen flex-vcenter bg-gray">
    <div class="column text-center">
        <h1>Web app sandbox</h1>
        <hr class="col-1 text-secondary">
        <h2>What is it ?</h2>
        <div class="text-gray">
            <p>A regroupement of small web application made with :</p>

            <div class="text-primary">
                <h4><b>Laravel</b></h4>
                <h4><b>Vue.js</b></h4>
                <h4><b>Spectre.css</b></h4>
            </div>

            <p>One Laravel backend manage the routing of every application (and auth as well). All the app are Vue.js build with Webpack.</p>
        </div>

        <h3>The main objective is to have a <b>fast</b> and <b>clean</b> base to create small projects.</h3>
    </div>
</div>
@endsection
