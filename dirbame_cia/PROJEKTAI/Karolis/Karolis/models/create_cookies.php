<script type="text/javascript">

function togglePageContentLightDark() {
  var body = document.getElementById('body')
  var currentClass = body.className
  var newClass = body.className == 'dark-mode' ? 'light-mode' : 'dark-mode'
  body.className = newClass

  document.cookie = 'theme=' + (newClass == 'light-mode' ? 'light' : 'dark')
  console.log('Cookies are now: ' + document.cookie)
}
function isDarkThemeSelected() {
  return document.cookie.match(/theme=dark/i) != null
}

</script>
