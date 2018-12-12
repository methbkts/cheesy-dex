var map = document.querySelector('#map')
var paths = map.querySelectorAll('.map_image a')
var links = map.querySelectorAll('.map_list a')
var activeArea = function (id) {
  // On retire les elements qui ne sont plus selectionné
  map.querySelectorAll('.is-active').forEach(function (item) {
    item.classList.remove('is-active')
  })
  if (id !== undefined) {
    document.querySelector('#list-' + id).classList.add('is-active')
    document.querySelector('#region-' + id).classList.add('is-active')
  }
}

paths.forEach(function (path) {
  path.addEventListener('mouseenter', function() {
    var id = this.id.replace('region-', '')
    activeArea(id)
  })
})

links.forEach(function (link) {
  link.addEventListener('mouseenter', function () {
    var id = this.id.replace('list-', '')
    activeArea(id)
  })
})
// Je lance la fonction activeArea lorsque ma souris sort de la map
map.addEventListener('mouseover', function () {
  activeArea()
})
