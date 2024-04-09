<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<meta name="description" content="Programação Web 2 conhecendo a sintaxe do PHP">
		<meta name="keywords" content="HTML, CSS, PHP, Bootstrap">
		<meta name="author" content="Renan e Gustavo">
		<link rel="icon" type="image/x-icon" href="img/logo/logo.ico">	
		<title>Apple - Home</title>
		<!--Scripts e CSS-->
		<link href="css/css-bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="fontawesome-web/css/all.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
		<script src="js/js-bootstrap/bootstrap.bundle.min.js"></script>
		<script src="fontawesome-web/js/all.min.js"></script>	
		<script src="js/meujs.js"></script>
	</head>
	<body>
		<!--Body-->
		<div class="container-xll">
			<!--Navbar-->
			<nav class="navbar navbar-expand-lg navbar-bg">
				  <div class="container-fluid">
						<a class="navbar-brand" href="index.php" onmouseover="OnMouseOverGer()" onmouseout="OnMouseOutGer"><i class="fa-brands fa-apple"></i> Gerenciamento Apple</a>
						<a class="navbar-brand" href="form.php" onmouseover="OnMouseOverLog()" onmouseout="OnMouseOutLog()"><i class="fa-solid fa-address-card"></i> Cadastro</a>
				  </div>
			</nav>
			<!--Article-->
			<div class="container-fluid article-bg">
				<div id="carouselcontrol" class="carousel carousel-dark slide" data-ride="carousel">
				  <div class="carousel-inner">
					<div class="carousel-item active">
						<div class="card-group">
							<div class="card shadow" style="border:2px solid rgb(0, 0, 0);">
								<a href="form.php" class="link-dark">
									<img id="teste" src="img/index/img1.jpeg" class="card-img-top" alt="Gerenciamento de Produtos Apple">	
									<div class="card-img-overlay">
										<h5 class="card-title">GERENCIAR PRODUTOS</h5>
										<p class="card-text">Gerenciar produtos de determinada loja Apple.</p>
									</div>
								</a>
							</div>
							<div class="card shadow" style="border:2px solid rgb(255, 255, 255);">
								<a href="form.php">
									<img src="img/index/img2.jpeg" class="card-img-top" alt="Estoque dos Produtos Apple">
									<div class="card-img-overlay lbl-carousel-branco">
										<h5 class="card-title">ESTOQUE</h5>
										<p class="card-text">Gerenciar estoque de determinada loja Apple.</p>
									</div>
								</a>
							</div>
							<div class="card shadow" style="border:2px solid rgb(255, 255, 255);">
								<a href="form.php">
									<img src="img/index/img3.jpeg" class="card-img-top" alt="Produtos Apple">
									<div class="card-img-overlay lbl-carousel-branco">
										<h5 class="card-title">PRODUTOS</h5>
										<p class="card-text">Banco de dados de produtos Apple.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="card-group">
							<div class="card shadow" style="border:2px solid rgb(0, 0, 0);">
								<a href="form.php">
									<img src="img/index/img4.jpeg" class="card-img-top" alt="Relações comerciais da Apple">	
									<div class="card-img-overlay">
										<h5 class="card-title">RELAÇÕES COMERCIAIS</h5>
										<p class="card-text">Gerenciamento das relações comerciais Apple.</p>
									</div>
								</a>
							</div>
							<div class="card shadow" style="border:2px solid rgb(0, 0, 0);">
								<a href="form.php">
									<img src="img/index/img5.jpeg" class="card-img-top" alt="Departamentos da Apple">	
									<div class="card-img-overlay">
										<h5 class="card-title">DEPARTAMENTOS</h5>
										<p class="card-text">Contate outros departamentos.</p>
									</div>
								</a>
							</div>
							<div class="card shadow" style="border:2px solid rgb(0, 0, 0);">
								<a href="form.php">
									<img src="img/index/img6.jpeg" class="card-img-top" alt="Afiliações Apple">	
									<div class="card-img-overlay">
										<h5 class="card-title">AFILIAÇÕES</h5>
										<p class="card-text">Afiliados Apple.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselcontrol" data-bs-slide="prev">
					<span class="carousel-control-prev-icon btn-carousel-1 rounded" aria-hidden="true"></span>
					<span class="visually-hidden">Anterior</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselcontrol" data-bs-slide="next">
					<span class="carousel-control-next-icon btn-carousel-2 rounded" aria-hidden="true"></span>
					<span class="visually-hidden">Próximo</span>
				  </button>
				</div>
				<!-- janela Políticas de Privacidade-->
				<div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5 cor-modal" id="ModalLabel">Políticas de Privacidade</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body cor-modal">
								<p>A sua privacidade é importante para nós. É política da Apple respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Apple,
								e outros sites que possuímos e operamos. Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos 
								e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado. Apenas retemos as informações coletadas pelo tempo necessário 
								para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, 
								cópia, uso ou modificação não autorizados. Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei. O nosso site 
								pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar 
								responsabilidade por suas respectivas políticas de privacidade. Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos 
								fornecer alguns dos serviços desejados. O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se 
								você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto conosco.><br></p>
								<ul>
									<li>O serviço Google AdSense que usamos para veicular publicidade usa um cookie DoubleClick para veicular anúncios mais relevantes em toda a Web e limitar o número de 
									vezes que um determinado anúncio é exibido para você.</li>
									<br>
									<li>Para mais informações sobre o Google AdSense, consulte as FAQs oficiais sobre privacidade do Google AdSense.</li>
									<br>
									<li>Utilizamos anúncios para compensar os custos de funcionamento deste site e fornecer financiamento para futuros desenvolvimentos. Os cookies de publicidade comportamental 
									usados ​​por este site foram projetados para garantir que você forneça os anúncios mais relevantes sempre que possível, rastreando anonimamente seus interesses e apresentando 
									coisas semelhantes que possam ser do seu interesse.</li>
									<br>
									<li>Vários parceiros anunciam em nosso nome e os cookies de rastreamento de afiliados simplesmente nos permitem ver se nossos clientes acessaram 
									o site através de um dos sites de nossos parceiros, para que possamos creditá-los adequadamente e, quando aplicável, permitir que nossos 
									parceiros afiliados ofereçam qualquer promoção que pode fornecê-lo para fazer uma compra.</li>
								</ul>
								<p>Compromisso do Usuário<br><br> O usuário se compromete a fazer uso adequado dos conteúdos e da informação que a Apple oferece no site e com caráter 
								enunciativo, mas não limitativo:</p>
								<ul>
									<li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
									<li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, jogos de sorte ou azar, qualquer tipo de pornografia ilegal, de apologia
									ao terrorismo ou contra os direitos humanos;</li>
									<li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) da Apple, de seus fornecedores ou terceiros, para introduzir ou
									disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
								</ul>
								<p>Mais informações<br><br> Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente
								é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.<br><br> Esta política é efetiva a 
								partir de 4 de Abril de 2024, 22:47</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
								<button type="button" class="btn btn-dark cor-principal-2" data-bs-dismiss="modal">Aceitar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Footer-->
			<div class="footer-bg">
				<div class="row">
					<div class="col-6">
						<br>
						<div class="text-center rounded footer-botao">
							<h6>Siga a Apple</h6>
						</div>
						<br>
						<div class="text-center">
							<a href="https://www.facebook.com/apple" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></a>
							<a href="https://twitter.com/apple" target="_blank"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
							<a href="https://www.youtube.com/@Apple" target="_blank"><i class="fa-brands fa-youtube fa-2xl"></i></a>
							<a href="https://www.instagram.com/apple/" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
						</div>
						<br>
					</div>
					<div class="col-6">
						<br>
						<div class="text-center rounded footer-botao">
							<h6>Regras</h6>
						</div>
						<br>
						<p class="ms-3 d-block text-center"><a href="#" data-bs-toggle="modal" data-bs-target="#Modal1">Políticas de Privacidade</a><p>
					</div>				
				</div>
			</div>
		</div>		
	</body>
</html>
