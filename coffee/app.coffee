class Index
  constructor: () ->
    @get()
  get:->
    prm = $.getJSON( 'index.js').promise()
    .done (index)->
      r.set 'index.data', index
    
  


r = new Ractive
  el:'#content'
  template:'#template'
  data:
    pageElement:'finished'
    index:new Index
    editing:false,
    showHelper:false

r.on 'edit', (e)->
  console.log e


Mousetrap.bind '/', ->
  r.set 'pageElement', 'all'

Mousetrap.bind '.', ->
  r.set 'pageElement', 'finished'


window.r = r