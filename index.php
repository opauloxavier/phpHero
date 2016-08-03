<?php 
	include("form.php");
?>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://dev.pauloxavier.com/phpHero/assets/bootstrap/dist/css/bootstrap.min.css" />
	<script type="text/javascript" src="http://dev.pauloxavier.com/phpHero/assets/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-md-4 col-md-offset-4" style="margin-top:80px;">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
      	<img src="assets/img/logo.png" class="img-responsive">
      </div>
    </div>
    <div class="col-md-8 pull-right" style="background-color: #6d336e; color:#f6ae48;">
      <h1 style="text-align:center;"><strong> PROMOÇÃO DE ANIVERSÁRIO </strong></h1>
    </div>
  </div>
  <div class="row">
    <h1 style="text-transform: uppercase; text-shadow: 2px 2px 1px #9eafb6; text-align:center; "> Concorra a uma habilitação B <span style="color:#6b3276;">com 50% de desconto!</span></h1>
  </div>
  <div class="row">
    <h2 style="color:#eab648; text-transform: uppercase; text-align:center;  "><strong>Cadastre-se e concorra!</strong></h2>
  </div>
  <div class="row">
  	<form class="form-horizontal align-center form-custom" action="index.php" method="POST">
      <fieldset>
        <div class="form-group">
          <label class="col-md-3 control-label" for="textinput">Nome</label>
          <div class="col-md-8">
          	<input type="text" name="nome" class="form-control" placeholder="Digite seu Nome" required="true">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label" for="textinput">Email</label>
          <div class="col-md-8">
          <input type="email" name="email" class="form-control input-md" placeholder="Digite seu E-mail" required="true">
          </div>
        </div>
        <div class="form-group">
        	<label class="col-md-3 control-label"> Sexo </label>
	          <div class="col-md-8">
	            <label class="radio-inline" for="radios-m">
	      			<input type="radio" name="genero" id="radios-m" value="m" checked="checked">Masculino
	    		</label> 

	    		<label class="radio-inline" for="radios-f">
	      			<input type="radio" name="genero" id="radios-f" value="f"> Feminino
	    		</label> 
	          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label" for="textinput">Telefone</label>
          <div class="col-md-8">
          <input type="text" name="telefone" class="form-control" required="true" placeholder="Digite seu telefone">
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
        	<label class="col-md-3 control-label"> Habilitaçao Desejada </label>
        <div class="col-md-6">

        	<label class="radio-inline" for="radios-a">
	      		<input type="radio" name="carteira_pref" id="radios-a" value="a" checked="checked"> A
	    	</label> 

	    	<label class="radio-inline" for="radios-b">
	      		<input type="radio" name="carteira_pref" id="radios-b" value="b"> B
	    	</label>
	    	<label class="radio-inline" for="radios-ab">
	      		<input type="radio" name="carteira_pref" id="radios-ab" value="ab"> AB
	    	</label>
        </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"> Ja possui CNH? </label>
          <div class="col-md-6">
        	<label class="radio-inline" for="radios-sim">
	      		<input type="radio" name="carteira" id="radios-sim" value="1"> Sim
	    	</label> 
	    	<label class="radio-inline" for="radios-nao">
	      		<input type="radio" name="carteira" id="radios-nao" value="0" checked="checked"> Nao
	    	</label>
          </div>
       	</div>
        <!-- Button -->
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-md-12">
            	<button type="submit" class="btn btn-primary pull-right" style="margin-top:10px; margin-bottom:10px;" name="enviar"> Cadastrar </button>
            </div>

          </div>
        </div>

      </fieldset>
    </form>
    <div class="col-md-12 footer">
        <p style="font-size:12px;"><strong>Regulamento:</strong>Primeira Habilitação(Categoria A,B ou AB) com 20% de desconto a vista em dinheiro e 10% nos cartões em até 6x sem juros. Inclusões com 15% de desconto a vista em dinheiro e 5% de desconto em até 6x sem juros nos cartões.DUDA e clínica não estão inclusos. Os cupons são válidos até 30/04. Caso o vencedor do sorteio tenha utilizado o cupom de desconto, o mesmo sera ressarcido do valor ate os 50% da promocao.Para participar do sorteio é necessário curtir a página da <a href="https://www.facebook.com/cfccasal20/" target="_blank">Autoescola Casal20 no Facebook</a> e compartilhar em seu perfil em modo público. Caso o sorteado não atenda a ambos os critérios será desqualificado e um próximo novo sorteio será feito até haver um ganhador elegível. O cupom de 50% tem 15 dias de validade a partir da divulgação do resultado do sorteio.<br><br>*Ao clicar em participar você está concordando com o regulamento.<br>Desenvolvido por <a href="http://pauloxavier.com" target="_blank">Paulo Xavier</a>.</p>
    </div>
  </div>
</div>













</body>
</html>