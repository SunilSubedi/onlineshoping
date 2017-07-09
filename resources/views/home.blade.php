@extends('layouts.app')

@section('content')
<div id="app1">

        @{{name}}
      <button type="button" @click="loadUser()">Click</button>
     <ul>
     <li v-show="visiblee" v-for="users in user">hello</li>
     </ul>
 
    
</div>
   <script src="https://unpkg.com/vue"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js')}}"></script>
@endsection
