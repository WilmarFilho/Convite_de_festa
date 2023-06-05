<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Evento</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script>

		<script>
			
			$(document).ready(() => {
				$('#album').fadeIn(2000)
			}) 

		</script>

					<script >
						
						
						function play() {
		  					
							var myMusic = document.getElementById("music");

		  					console.log(myMusic)

							myMusic.play();
		  
						};

					</script>

	</head>

	<body>

		<div id='main' class="text-center  container "> 
			
			<div id='album' class="row p-1">
				
				<div class="col-md-10 centraliza pt-3 ">
					
					<h2 onclick="play()" class="mb-3 text-white ciano text-center">Clique aqui  <i class="fa-solid fa-volume-high"></i> </h2> 

					<h2 onclick="play()" class="convite text-white text-center mt-4">Se você recebeu esse link se prepare para uma festa de aniversário apocaliptica com direito a som e iluminação profissional pra deixar ninguem sentado, drinks insanos pra dar um oi pra cirrose e atrações que daqui pra frente é só pra trás.</h2>

					<h2 onclick="play()" class="text-white ciano text-center mt-4">Deslize para o lado para ver as atrações</h2>


				</div>

				<div id="carousel" class="col-md-10 carrosel centraliza carousel slide text-white  mt-3" data-ride="carousel" data-interval="0">
					
					<div class="carousel-inner">

				    	<div class="carousel-item active">

							<h4 class="atração">Tudo menos copo!</h4>

					    	<p class="atração mt-2">Traga um "copo" de casa, porém a regra é que não pode ser um copo comum.</p>

						</div>
				   
				    	<div class="carousel-item">
				      
				    		<h4 class="atração">Choffer</h4>

				     		<p class="atração mt-2">Caso precise nós te buscamos para você não perder essa festa</p>

				    	</div>

				   		<div class="carousel-item">
				      	
				    		<h4 class="atração">Brincadeiras Alcoolicas</h4>

				    		<p class="atração mt-2">Algumas brincadeiras pra quando você estiver mais pra la do que pra cá</p>

				    	</div>
	 
				  	</div>

					
				  
				  	<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>

				  	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>

				</div>

				<div class="centraliza">
				    
				    <?php if(!isset($_GET['msg'])) {	?>
					
					    <h2 onclick="play()" class="mt-3 col-12 text-white ciano text-center">Já confirma sua presença nesse evento:</h2>
					
					<?php } ?>

					<p class="text-white label-form">Ajude com R$10 e sua bebida.</p>
					
					<?php if(!isset($_GET['msg'])) {	?>

    					<form method="POST" action="controller.php" class="">
    
    						<div class="form-row">
    
    							<div class="form-group col-6">
    						    	<input name='nome' type="text" class="form-control" id="nome" placeholder="Nome">
    							</div>
    
    							<div class="form-group col-6">
    						    	<input name='num' type="number" class="form-control" id="numero" placeholder="Número">
    							</div>
    						</div>
    
    						<button class="btn-block btn btn-info" type="submitt">Confirmar</button>
    
    						
    
    					</form>
    					
    				<?php } ?>
    				
    				<?php if(isset($_GET['msg'])) {	?>
    							<div class="mt-3 alert alert-info" role="alert">
    						  		Você acaba de confirmar presença na que vai ser a melhor festa da sua vida!
    							</div>
    				<?php } ?>


				</div>
                
                
    				<footer class="text-center justify-content-center rodape text-white">
    			
    					<p class="d-block d-md-none">Local: Juliesse | Data: 17/06 | Horario: 22:00</p>
    					<p class="d-none d-md-block">Local: Juliesse | Data: 17/06 | Horario: 22:00 | Chave pra déposito: 711.903.941.54</p>
    					<p class="d-block d-md-none">Chave pra déposito: 711.903.941.54</p>
    
    				</footer>	
    			

			</div>

		</div>

		<video onclick="play()" class="video" loop="true" autoplay="autoplay" controls muted src="assets/boate.mp4"></video>

		<video onclick="play()" class="video2" loop="true" autoplay="autoplay" controls muted src="assets/video2.mp4"></video>

		<audio style="opacity: 0" id='music' class='' src="assets/musica.mp3" controls></audio>
		
		<!-- Optional JavaScript -->
	   	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	</body>
</html>