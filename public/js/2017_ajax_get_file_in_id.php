<!-- Fonction instanciation objet XMLHttpRequest -->
<script type="text/javascript" src="js/oXHR.js"></script>
<script type="text/javascript">
function getFileSimple(id,adr) {
$.ajax({
"url":adr,
"success":function (data){
$(id).html(data);}
});
}
</script>