<div class="ui secondary pointing menu">
  <a class="item" href="../">
  <i class="home icon"></i> avago
  </a>
  <a class="item" href="../toolbox/#/query/13127939.json">
  <i class="shuffle icon"></i> Numero de parte Tosa
  </a>
  {{#showHelper}}
  <a class="item" href="javascript:(function(){document.body.appendChild(document.createElement('script')).src='http://foo.bar/baz.js';})();">MaintHelper</a>
  {{/showHelper}}
</div>


<div class="column">
   <h1 class="center aligned name ui header">Aplicaciones
    </h1>


  <table class="ui padded table segment">
    <tr>
      <th>App</th>
      <th>Description</th>
    </tr>
    {{#index.data:i}}
      <!-- Todos los proyectos  -->
      {{# pageElement =='finished' }}
        {{>justFinished}}
      {{/ pageElement =='finished' }}
      <!-- Solo los proyectos que ya estan terminados -->
      {{# pageElement =='all' }}
        {{>all}}
      {{/ pageElement =='all' }}
    {{/index.data}}
  </table>
</div>

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

