<?php session_start(); 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="img/favicon.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
        /* Verificando se a fcor foi definido na sessão */ 
        if(isset($_SESSION['fcor'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
			:root{
				--backgroud-pagina: $_SESSION[fcor];
                }
                </style> 
            "; 
        }
        /* Verificando se a fcor1 foi definido na sessão */ 
        if(isset($_SESSION['fcor1'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
                .cube::after{
                    background: $_SESSION[fcor1];
                }
                </style> 
            "; 
        }
        /* Verificando se a fcor2 foi definido na sessão */ 
        if(isset($_SESSION['fcor3'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
                .cube{
                    background: $_SESSION[fcor3];
                }
                </style> 
            "; 
        }
		/* Verificando se a fcor2 foi definido na sessão */ 
        if(isset($_SESSION['fcor4'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
                .cube{
                    background: $_SESSION[fcor4];
                }
                </style> 
            "; 
        }
			/* Verificando se a fcor2 foi definido na sessão */ 
			if(isset($_SESSION['fcor5'])){
				/* Aplicando CSS enviado */ 
				echo "<style> 
					.cube{
						background: $_SESSION[fcor5];
					}
					</style> 
				"; 
			}
				/* Verificando se a fcor2 foi definido na sessão */ 
				if(isset($_SESSION['fcor6'])){
					/* Aplicando CSS enviado */ 
					echo "<style> 
						.cube{
							background: $_SESSION[fcor6];
						}
						</style> 
					"; 
				}  
					/* Verificando se a fcor2 foi definido na sessão */ 
					if(isset($_SESSION['fcor7'])){
						/* Aplicando CSS enviado */ 
						echo "<style> 
							.cube{
								background: $_SESSION[fcor7];
							}
							</style> 
						"; 
					}  
						/* Verificando se a fcor2 foi definido na sessão */ 
						if(isset($_SESSION['fcor8'])){
							/* Aplicando CSS enviado */ 
							echo "<style> 
								.cube{
									background: $_SESSION[fcor8];
								}
								</style> 
							"; 
						}  
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor9'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor9];
									}
									</style> 
								"; 
							} 
							
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor10'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor10];
									}
									</style> 
								"; 
							}
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor11'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor11];
									}
									</style> 
								"; 
							} 
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor12'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor12];
									}
									</style> 
								"; 
							}   
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor13'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor13];
									}
									</style> 
								"; 
							}   
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor14'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor14];
									}
									</style> 
								"; 
							}   
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor15'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor15];
									}
									</style> 
								"; 
							}   
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor16'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor16];
									}
									</style> 
								"; 
							}   
							/* Verificando se a fcor2 foi definido na sessão */ 
							if(isset($_SESSION['fcor17'])){
								/* Aplicando CSS enviado */ 
								echo "<style> 
									.cube{
										background: $_SESSION[fcor17];
									}
									</style> 
								"; 
							}   

    ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	

</head>

<body id="page-top">
<div class="container">
        <div class="navigation">
	<div class="container-fluid d-flex align-items-center flex-column">
		<div class="row">
			<div class="col-6 m-auto">
				<div class="container">
					<div class="row">
						<div class="col-12 p-0">
							<img style="position: relative;top: 10px;" class="img-fluid" src="img/logo.png" alt="" height="250" width="250"/>            
						</div>
						<!-- Masthead Avatar Image-->
						<div class="col-12 p-0">
							<!-- Masthead Heading-->
							<br><br><h2 class="page-section-heading text-center titulo  mb-0">Texto da Página</h2><br><br>
							<!-- Masthead Subheading-->
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-8 m-auto">
				<div class="container-fluid">					
					<div class="row">
										
							<div class="col-12 mb-1 justify-content-center">								
								<div class="btn-servico servico col-lg imagemDeFundo" >
                                    <br><br>	Texto	<br><br><br>									
								</div>
							</div><br>
					</div>					
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="agendamento" tabindex="-1" role="dialog" aria-labelledby="modalAgendamento" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content modal-servico">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<p><span aria-hidden="true">&times;</span></p>
	        </button>
	      </div>
	      <div class="modal-body">
            <div class="text-center">
            <div class="col-12 mb-1 justify-content-center">								
                <div class="btn-dias servico col-lg " >
                    <br><br>Texto<br><br><br>									
                </div>
            </div><br>
        </div>
		  
            <div class="text-center">
				 	<button type="submit" id="botaoAgendar" class=" btn-agendar">AGENDAR</button>
			</div>
	      </div>
	    </div>
	  </div>
	</div>


<form method="POST" action="dados.php">
        <label class="barra">
        <p><input type="text" name="fcor" id="" placeholder="backgroud-pagina" value="<?php if(isset($_SESSION['fcor'])){ echo $_SESSION['fcor']; } ?>"></p>
        <p><input type="text" name="fcor2" id="" placeholder="texto-pagina" value="<?php if(isset($_SESSION['fcor2'])){ echo $_SESSION['fcor2']; } ?>"></p>
        <p><input type="text" name="fcor3" id="" placeholder="background-servico" value="<?php if(isset($_SESSION['fcor3'])){ echo $_SESSION['fcor3']; } ?>"></p>
        <p><input type="text" name="fcor4" id="" placeholder="borda-servico" value="<?php if(isset($_SESSION['fcor4'])){ echo $_SESSION['fcor4']; } ?>"></p>
        <p><input type="text" name="fcor5" id="" placeholder="texto-servico" value="<?php if(isset($_SESSION['fcor5'])){ echo $_SESSION['fcor5']; } ?>"></p>
        <p><input type="text" name="fcor6" id="" placeholder="borda-hover-servico" value="<?php if(isset($_SESSION['fcor6'])){ echo $_SESSION['fcor6']; } ?>"></p>
        <p><input type="text" name="fcor7" id="" placeholder="hover-servico" value="<?php if(isset($_SESSION['fcor7'])){ echo $_SESSION['fcor7']; } ?>"></p>
        <p><input type="text" name="fcor8" id="" placeholder="texto-hover-servico" value="<?php if(isset($_SESSION['fcor8'])){ echo $_SESSION['fcor8']; } ?>"></p>
        <p><input type="text" name="fcor9" id="" placeholder="texto-modal" value="<?php if(isset($_SESSION['fcor9'])){ echo $_SESSION['fcor9']; } ?>"></p>
        <p><input type="text" name="fcor10" id="" placeholder="borda-modal" value="<?php if(isset($_SESSION['fcor10'])){ echo $_SESSION['fcor10']; } ?>"></p>
        <p><input type="text" name="fcor11" id="" placeholder="texto-hover-modal" value="<?php if(isset($_SESSION['fcor11'])){ echo $_SESSION['fcor11']; } ?>"></p>
        <p><input type="text" name="fcor12" id="" placeholder="backgroud-hover-modal" value="<?php if(isset($_SESSION['fcor12'])){ echo $_SESSION['fcor12']; } ?>"></p>
        <p><input type="text" name="fcor13" id="" placeholder="texto-ativo-modal" value="<?php if(isset($_SESSION['fcor13'])){ echo $_SESSION['fcor13']; } ?>"></p>
        <p><input type="text" name="fcor14" id="" placeholder="backgroud-ativo-modal" value="<?php if(isset($_SESSION['fcor14'])){ echo $_SESSION['fcor14']; } ?>"></p>
        <p><input type="text" name="fcor15" id="" placeholder="background-agenda" value="<?php if(isset($_SESSION['fcor15'])){ echo $_SESSION['fcor15']; } ?>"></p>
        <p><input type="text" name="fcor16" id="" placeholder="borda-agenda" value="<?php if(isset($_SESSION['fcor16'])){ echo $_SESSION['fcor16']; } ?>"></p>
        <p><input type="text" name="fcor17" id="" placeholder="texto-agenda" value="<?php if(isset($_SESSION['fcor17'])){ echo $_SESSION['fcor17']; } ?>"></p>
           <div class="butao">
           <p><input type="submit" value="Enviar"><input type="submit" value="Limpar" name="limpar"></input></p>
        </div>
        </label>
 
    </form>



</main>

<!-- app script -->
<!-- <script type="text/javascript" src="js/app.js"></script> -->

<script type="text/javascript">

	const el_servicos_click = document.querySelectorAll('.servico');

	el_servicos_click.forEach(servico => {
		servico.addEventListener('click', el => {
			$("#agendamento").modal({
				show: true
			});
		})
	})
</script>
</body>

    

</html>

