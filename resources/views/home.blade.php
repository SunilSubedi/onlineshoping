@extends('layouts.app')

@section('content')
<div id="app1">

       
     <div v-for="user in users">
    <h3>Name</h3>
    <strong>@{{user.name}}</strong>
    <h3>Email</h3>
    <strong>@{{user.email}}</strong>
 </div>
     <!--<button type="button" @click="loadUser()">Click</button>-->
</div>
   <script src="https://unpkg.com/vue"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js')}}"></script>
@endsection
