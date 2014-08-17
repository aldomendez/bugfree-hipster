r = new Ractive
  el:'#content'
  template:'#template'
  data:
    pageElement:'finished'
    index:[]
    editing:false,
    showHelper:false

r.on 'edit', (e)->
  console.log e

prm = $.getJSON( 'index.js').promise();

prm.done (index)->
  r.set 'index', index

Mousetrap.bind '/', ->
  r.set 'pageElement', 'all'

Mousetrap.bind '.', ->
  r.set 'pageElement', 'finished'


window.r = r