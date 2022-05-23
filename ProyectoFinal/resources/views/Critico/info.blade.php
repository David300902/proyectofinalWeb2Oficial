@extends("welcome")

@section('title', 'Criticos')


@section('script')
<script>
    var app = angular.module("CriticoInfoApp", [])

app.controller("CrticoInfoController", ($scope, $http)=>{

    $scope.criticos = {}

    let id = window.location.href.split("/")[2]

    $scope.getCritico = function (){

        $http.get('/criticos/' + id).then(res=>{

            $scope.criticos = res.data

        })

    }

    $scope.getCritico();

})
</script>
@stop

@section('content')

<div ng-app="CriticoInfoApp" np-controller="CrticoInfoController">
<div class="card mb-3" ng-repeat="d in criticos">
  <img src="@{{d.foto}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">@{{d.firstName}}</h5>
    <p class="card-text"></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>

@stop