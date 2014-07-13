<div class="ui secondary pointing menu">
  <a class="item" href="../">
  <i class="home icon"></i> avago
  </a>
  <a class="item">
  <i class="terminal icon"></i> flag: {{flag}}
  </a>
</div>


<div class="column">
   <h1 class="center aligned name ui header">Indice de aplicaciones
    </h1>

  <table class="ui padded table segment">
    <tr>
      <th>arguments</th>
      <th>description</th>
    </tr>
    {{#index:i}}
    <tr>
      <td><a href="{{dir}}">{{name}}</a></td>
      <td>{{desc}}</td>
    </tr>
    {{/index}}
  </table>
</div> 