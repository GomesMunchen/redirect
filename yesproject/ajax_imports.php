
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>

      <link rel="stylesheet" href="css/style.css">

<div class="container white z-depth-2">
<div class="panel panel-primary">
    	<div class="panel-heading">
    		Imports
    	</div>
    	<div class="panel-body">
	    	<form action="processamento.php?acao=salvar" method="post" name="formulario" class="form-horizontal">
				<input type="hidden" name="id_imports" id="id_imports"  />
	    	
				<div class="form-group">
                	<label for="urls" class="col-sm-12 control-label">URL's </label>
                    <div class="col-sm-8">
                    	<input type="url" class="form-control" name="url" id="url"  />
                        
                    </div>
				</div>	    
                
                <div class="form-group">
                	<label for="titulo" class="col-sm-2 control-label">Titulo </label>
                    <div class="col-sm-10">
                    	<input type="text" class="form-control" name="text" id="text"  />
                        <div id="text"></div>
                    </div>
				</div>	 
	    	
				<div class="form-group">
                	<label for="imagem" class="col-sm-2 control-label">Imagem </label>
                    <div class="col-sm-10">
              
                         <input type=file>
                        <img />
                        <input type=button class=hide value="Adicionar outro">
                           <script>
                    
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $(input).next()
        .attr('src', e.target.result)
    };
    reader.readAsDataURL(input.files[0]);
    }
    else {
        var img = input.value;
        $(input).next().attr('src',img);
    }
} 

function verificaMostraBotao(){
    $('input[type=file]').each(function(index){
        if ($('input[type=file]').eq(index).val() != ""){
            readURL(this);
            $('.hide').show();
        }
    });
}

$('input[type=file]').on("change", function(){
  verificaMostraBotao();
});

$('.hide').on("click", function(){
    $(document.body).append($('<input />', {type: "file" }).change(verificaMostraBotao));
    $(document.body).append($('<img />'));
    $('.hide').hide();
});
                           </script>
                    </div>
				</div>	
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="submit" href="index.php" class="btn btn-danger">Voltar</button>
                	</div>
				</div>				
				
	    	</form>
    	</div>
   	</div>
</div>
<script>

    $(function(){
        $('#email').change(function(){
         //   $('#mensagem').load('processamentoAjax.php');
            
            $ajax({
                url: 'processamentoAjax.php',
                sucess: function(retorno){
                    
                    $('#mensagem').html(retorno);
                    
                }
                
                
            });
        });
        
    }); 
    
</script>

