<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<meta name="description" content="Programação Web 2 conhecendo a sintaxe do PHP">
		<meta name="keywords" content="HTML, CSS, PHP, Bootstrap">
		<meta name="author" content="Renan e Gustavo">
		<link rel="icon" type="image/x-icon" href="img/logo/logo.ico">	
		<title>Apple - Cadastro</title>
		<!--Scripts e CSS-->
		<link href="css/css-bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="fontawesome-web/css/all.min.css" rel="stylesheet">
		<link href="css/form.css" rel="stylesheet">
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
			<article class="container-fluid article-bg">
				<div class="wrappe">
					<div class="container">
						<div class="row row-cad">
							<div class="col-md-6 side-image">
								<div class="text">
									<i class="fa-brands fa-apple"></i>
								</div>
							</div>
							<form action="dados.php" method="POST" name="cadApple" class="col-md-6 right">
								<div class="input-box">
									<header>Cadastrando Gerente Apple</header>
									<div class="input-field">
										<input type="text" maxlength="50" class="input" name="nome" required>
										<label for="nome">Nome</label>
									</div>
									<div class="input-field">
										<input type="text" class="input" name="endereco" required>
										<label for="endereco">Endereço</label>
									</div>
									<div class="input-field">
										<p>Data de Nascimento</p>
										<input type="date" class="input" name="datanascimento" onsubmit="removeDefaultOption()" required>	
										<select name="depto" aria-label="Select Depto" required>
										  <option value="" selected disabled>Departamento</option>
										  <option value="Gerencial">Gerencial</option>
										  <option value="Recursos humanos">Recursos humanos</option>
										  <option value="Jurídico">Jurídico</option>
										  <option value="Comercial">Comercial</option>
										  <option value="Financeiro">Financeiro</option>
										  <option value="Marketing">Marketing</option>
										  <option value="Criativo">Criativo</option>									  
										</select>	
									</div>
									<div class="input-field input-submit">
										<input type="reset">
								   </div> 
								   <div class="input-field input-submit">
										<input type="submit" class="submit" value="Cadastrar">
								   </div> 
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="br-article">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
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
			</article>
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
