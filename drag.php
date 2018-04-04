<!doctype html>
<html lang="en">
<head>

<title>A Styled Draggable Element</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

<style>
#makeMeDraggable { width: 300px; height: 300px; background: red; }
#makeMeDraggable.ui-draggable-dragging { background: green; }
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<script type="text/javascript">

$( init );

function init() {
  $('#makeMeDraggable').draggable();
}

</script>

</head>
<body>

<div class="wideBox">
  <h1>Drag-and-Drop with jQuery: Your Essential Guide</h1>
  <h2>A Styled Draggable Element</h2>
</div>

<div id="content" style="height: 400px;">

  <div id="makeMeDraggable"> </div>

</div>

<div class="wideBox">
  <p>&copy; Elated.com | <a href="http://www.elated.com/articles/drag-and-drop-with-jquery-your-essential-guide/">Back to Tutorial</a></p>
  <p style="font-size: .8em; line-height: 1.5em;"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br />This <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" rel="dc:type">work</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.elated.com/" property="cc:attributionName" rel="cc:attributionURL">http://www.elated.com/</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</p>
</div>

</body>
</html>

