<html>
<head>
<script type="text/javascript">
window.onload = function(){
        id('novo').onclick = function(){
                toogle_disabled( id('form_test'), false );
        }
        
}
function toogle_disabled( obj_form, bool_disabled ){
        var inputs = obj_form.getElementsByTagName('input');
        
        for( var i=0; i<inputs.length; i++ ){
                inputs[i].disabled = bool_disabled;
        }       
}
function id( el ){
        return document.getElementById( el );
}
</script>
</head>
<body>
        <form action="outra.html" method="get" id="form_test">
                <label>Nome: <input type="text" disabled="true" name="nome" /></label>
                <label>Local: <input type="text" name="local" /></label>
                <label><input type="button" name="habilitar" id="novo" value="Habilitar" /></label>
        </form>
</body>
</html>