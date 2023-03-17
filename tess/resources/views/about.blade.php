@extends('master')

<style>
    #myDIV{
        text-align: center;
    }
</style>

@section('content')
    <div id="myDIV">
    <div class="header">
        <img src="{{URL::asset('/image/logobinus1.png')}}" alt="" height="200" width="300">
    </div>
    <p class="card">2301858093 - Warren <br> warren@binus.ac.id</p>
    <p class="card">2440024390 - Agung Sukmawan <br> agung.sukmawan@binus.ac.id</p>
    <p class="card">2440020253 - George Gilberto Da Saviour <br> george.galla@binus.ac.id</p>
    <p class="card">2440098205 - Arnaldi Arif <br> arnaldi.arif@binus.ac.id</p>
    <p class="card">2440107752 - Muhammad Robih Octodhia <br> muhammad.octodhia@binus.ac.id</p>
    </div>
@endsection
