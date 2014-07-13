<div class="ui secondary pointing menu">
  <a class="item" href="../">
  <i class="home icon"></i> avago
  </a>
  <a class="item" href="../toolbox/#/query/13127939.json">
  <i class="shuffle icon"></i> Numero de parte Tosa
  </a>
</div>


<div class="column">
   <h1 class="center aligned name ui header">Aplicaciones
    </h1>

<!-- ####################################################
     Partial Templates
     ################################################ -->
    {{# state ==='prod' }}
      {{>mainTable}}
    {{/ state ==='prod' }}

    {{# state ==='dev' }}
      {{>editTemplate}}
    {{/ state ==='dev' }}
</div>

<!-- {{>mainTable}} -->
<table class="ui padded table segment">
  <tr>
    <th>arguments</th>
    <th>description</th>
  </tr>
  {{#index:i}}
    <!-- Todos los proyectos  -->
    {{# pageElement ==='finished' }}
      {{>justFinished}}
    {{/ pageElement ==='finished' }}
    <!-- Solo los proyectos que ya estan terminados -->
    {{# pageElement ==='all' }}
      {{>all}}
    {{/ pageElement ==='all' }}
  {{/index}}
</table>
<!-- {{/mainTable}} -->

<!-- {{>all}} -->
<tr id='{{i}}'>
  <td><a href="{{dir}}">{{name}}</a></td>
  <td>{{desc}}</td>
</tr>
<!-- {{/all}} -->


<!-- {{>justFinished}} -->
{{^forDev}}
  <tr id='{{i}}'>
    <td><a href="{{dir}}">{{name}}</a></td>
    <td>{{desc}}</td>
  </tr>
{{/forDev}}
<!-- {{/justFinished}} -->

<!-- {{>editTemplate}} -->
{{#index:i}}
  <ul id='{{i}}' on-click='edit'>
    <li><a href="{{dir}}">## {{name}}</a></li>
    <li>{{desc}}</li>
  </ul>
{{/index}}
<!-- {{/editTemplate}} -->