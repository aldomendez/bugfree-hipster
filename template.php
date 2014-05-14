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

    <table class="ui definition table segment">
        <thead>
            <tr>
                <th>arguments</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            {{#index:i}}
            <tr>
                <td>{{name}}</td>
                <td>{{desc}}</td>
            </tr>
            {{/index}}
        </tbody>
    </table>
</div> 