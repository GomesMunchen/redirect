
<div class="panel panel-primary">
	    	<div class="panel-heading">
	    		URL's
	    	</div>
	    	<div class="panel-body">
                <div class="panel panel-primary">
        <div class="panel-body">
	    	<form action="processamento.php?acao=salvar" method="post" name="formulario" class="form-horizontal">
				<input type="hidden" name="id_url" id="id_url" />
	    	
				<div class="form-group">
                	<label for="url" class="col-sm-2 control-label">URL's </label>
                    <div class="col-sm-10">
                    	<input type="url" class="form-control" name="url" id="url" />
                    <br/>
                    <button type="submit" class="btn btn-success"> Adicionar </button>
                    </div>
				</div>	  
                <div class="form-group">
                	<label for="show" class="col-sm-2 control-label">Pré visualizar </label>
                    <div class="col-sm-10">
                    	
<?php

$tags = get_meta_tags('http://php.net/manual/pt_BR/function.get-meta-tags.php');

// Veja que todas as chaves estão agora em minúsculas, e
// que agora o . foi substituido por _ na chave.
echo $tags['title'];       // name
echo $tags['image'];     // php documentation
echo $tags['imagem'];  // a php manual
echo $tags['description']; // 49.33;-86.59
?>   
                    </div>
                </div>	
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="/menu.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>	
            </form>
    	</div>
                </div>
            </div>
    	</div>
