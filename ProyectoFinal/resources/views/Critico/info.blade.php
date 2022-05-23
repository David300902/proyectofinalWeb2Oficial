@extends("welcome")

@section('title', 'Criticos')

@section('script')
  <script >
      var app = angular.module("CriticoInfoApp", [])
      app.controller("CriticoInfoController", ($scope, $http)=>{
        $scope.critico = {}
        console.log("asdasdasdasdsdadas")
        $scope.getCritico = function (){
            $http.get('/criticos/' + id).then(res=>{
                $scope.critico = res.data
                console.log(res.data);
            })
        }
        $scope.getCritico();
      })
  </script>
@stop

@section('content')

<div ng-app="CriticoInfoApp" np-controller="CriticoInfoController">
  <div class="card mb-3">
    <img src="@{{d.foto}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">@{{critico.firstName}}</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">@{{critico.descripcion}}</small></p>
    </div>
  </div>
</div>

@stop