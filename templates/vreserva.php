<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Labos DEI</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reserva.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->


	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css"> 
    
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!--===============================================================================================-->
</head>
<body>
	<header class="full-width NavBarP">
		<div class="full-width NavBarP-Logo">Dei UCA</div>
		<nav class="full-width NavBarP-Nav">
			<ul class="full-width list-unstyled">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="#!">Contactenos</a></li>
				
				<li><a href="#!">Acerca de</a></li>
				<li>
					<a href="#!" class="btn-login"><i class="fa fa-user" aria-hidden="true"></i> Log In</a>
					<div class="full-width Login">
						<p class="text-center">
							<form action="">
								<div class="form-group">
									<label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</label>
									<input type="text" class="form-control" name="email" id="email">
								</div>
								<div class="form-group">
									<label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Contraseña</label>
									<input type="text" class="form-control" name="password" id="password">
								</div>
								<a href="#!">No recuerdo mi contraseña</a>
								<br>
								<p class="text-center">
									<a href="#!" class="btn btn-danger btn-login" style="display:inline-block !important;">CANCELAR</a>
									<button type="submit" class="btn btn-primary">INICIAR SESIÓN</button>
								</p>
							</form>
							<hr>
							<p class="text-center">¿Aún no tienes cuenta?</p>
							<a href="#!">CRÉATE UNA GRATIS</a>
						</p>
					</div>
				</li>
			</ul>
		</nav>
		<i class="fa fa-bars visible-xs btn-menuMobile ShowMenuMobile" aria-hidden="true"></i>
	</header>

	<section class="banner">
		<div class="banner-content">
            <h1>Laboratorios DEI UCA</h1>

            <div class="agile-its">
                <h2>Reserva</h2>
                <div class="w3layouts">
                    <div class="photos-upload-view">
                        <form action="#" method="POST">
                                <div class="agileinfo">
                                </div>
                                    <div class="agileinfo-row">
                                        <div class="ferry ferry-from">
                                            <label>Nombre</label>
                                            <input type="text" name="Name" placeholder="" required="">
                                        </div>
                                        <div class="ferry ferry-from">
                                            <label>Correo</label>
                                            <input type="email" name="email" placeholder="" required="">
                                        </div>
                                        <div class="ferry ferry-from">
                                                <label>Uso</label>
                                                <input type="text" name="descr" placeholder="" required="">
                                            </div>
                                        <label>Dia de la reserva</label>
                                            
                                        <div class="form_box">
                                          <div class="select-block1 middle">
                                            <select required="">
                                                <option value="">Date</option>
                                                <option value="">01</option>
                                                <option value="">02</option>
                                                <option value="">03</option>
                                                <option value="">04</option>
                                                <option value="">05</option>
                                                <option value="">06</option>
                                                <option value="">07</option>
                                                <option value="">08</option>
                                                <option value="">09</option>
                                                <option value="">10</option>
                                                <option value="">11</option>
                                                <option value="">12</option>
                                                <option value="">13</option>
                                                <option value="">14</option>
                                                <option value="">15</option>
                                                <option value="">16</option>
                                                <option value="">17</option>
                                                <option value="">18</option>
                                                <option value="">19</option>
                                                <option value="">20</option>
                                                <option value="">21</option>
                                                <option value="">22</option>
                                                <option value="">23</option>
                                                <option value="">24</option>
                                                <option value="">25</option>
                                                <option value="">26</option>
                                                <option value="">27</option>
                                                <option value="">28</option>
                                                <option value="">29</option>
                                                <option value="">30</option>
                                                <option value="">31</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form_box">
                                           <div class="select-block1">
                                            <select required="">
                                                <option value="">Month</option>
                                                <option value="">January</option>
                                                <option value="">February</option>
                                                <option value="">March</option>
                                                <option value="">April</option>
                                                <option value="">May</option>
                                                <option value="">June</option>
                                                <option value="">July</option>
                                                <option value="">August</option>
                                                <option value="">September</option>
                                                <option value="">October</option>
                                                <option value="">November</option>
                                                <option value="">December</option>
                                            </select>
                                          </div>
                                         </div>
                                        <div class="form_box1">
                                           <div class="select-block1 last">
                                            <select required="">
                                                <option value="">2019</option>
                                                <option value="">2020</option>
                                                <option value="">2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                            </select>
                                           </div>
                                        </div>
                                       
                                        <div class="form_box2">
                                                <div class="select-block1 last">
                                                        <label>Hora</label>
                                                 <select required="">
                                                        <option>hour</option>
                                                        <option>9:00 a 11.00</option>
                                                        <option>13:30 a 15:30</option>
                                                        <option>9:00 a 11.00</option>
                                                        <option>13:30 a 15:30</option>
                                                        <option>9:00 a 11.00</option>
                                                        <option>15:30 a 17:30</option>
                                                 </select>
                                                </div>
                                             </div>
                                        <div class="clear"></div>
                                    </div>
                                <div class="wthree-text"> 
                                    <div class="wthreesubmitaits">
                                        <input type="submit" name="submit" value="Submit">
                                    </div>  
                                </div>
                        </form>
                                    
                    </div>
                    <div class="clear"></div>
                </div>
            </div>




            			
	</section>
	
	
	
</body>
</html>