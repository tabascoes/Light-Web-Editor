var simplemde = new SimpleMDE({
  element: document.getElementById("editor"),
  forceSync: true,
  autofocus: true,
});

var text = document.getElementById("editor").value;
console.log(text);
