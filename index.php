<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- título site -->
    <title>Guerra contra o jornalismo</title>

    <!--  jquery + d3 (gráficos) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

    <script src="js/main.js"></script>

    <!-- fonts google + font awesome (ícones) -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Raleway|Philosopher" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- estilos (css+bootstrap) -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="icon.png" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119033719-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119033719-2');
	</script>

	<!-- 
	//////////////////////////////////////////////////////

	Projeto para ciberjornalismo II - FABICO/UFRGS
	Desenvolvido por Bibiana C. Davila

	Outubro/2018
	
	//////////////////////////////////////////////////////
	 -->
</head>
<body>

	<!-- início -->
	<nav></nav>
	<div class="container">
		<section id="title">
			<article>
				<div class="content-center">
					<div class="row">
	  					<div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">  	

							<h1>guerra contra<br>o jornalismo<br></h1>
							<h3>onde a democracia não tem vez</h3>
							<div class="divider"></div>
			  				<p class="first">
			  					Um espectro ronda o jornalismo — o espectro do autoritarismo. É o que aponta o <a href="https://rsf.org/pt/o-ranking-mundial-da-liberdade-de-imprensa-2018-o-odio-ao-jornalismo-ameaca-democracias">Ranking Mundial da Liberdade de Imprensa de 2018</a>, do <a href="https://rsf.org/pt/">Repórteres Sem Fronteira (RSF)</a>, que mostra como o ódio direcionado a jornalistas cresceu nos últimos anos.
			  				</p>
							<p>Profissionais são impedidos de realizar seu trabalho, perseguidos por suas reportagens, ameaçados por suas descobertas. Não que a caça às bruxas (ou aos jornalistas, no caso) seja um fenômeno novo, mas os protagonistas da trama mudaram.</p>
			  				<p>
			  				Desta vez, o autoritarismo não emana de grandes ditadores, tomando o poder a força e subjugando o povo a suas vontades. Do resultado inconteste de urnas, em sistemas reconhecidamente democráticos, emergem líderes que não apenas rejeitam o jornalismo — eles o condenam como o verdadeiro mal na Terra.
			  				</p>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section class="quotes">
			<div class="row">
				<div class="col-sm-4 col-4 text-center">
	  				<img src="images/trump.jpg" class="quote-img responsive-img"/>
	  			</div>
	  			<div class="col-sm-4 col-4 text-center">
	  				<img src="images/duterte.jpg" class="quote-img responsive-img"/>
	  			</div>	
	  			<div class="col-sm-4 col-4 text-center">
	  				<img src="images/milos.jpg" class="quote-img responsive-img"/>
	  			</div>
			</div>
	  		<div class="row">
	  			<div class="col-md-4">
	  				<p class="first large">
	  					“A mídia fake (New York Times, NBC News, ABC, CBS, CNN) não é minha inimiga, <b>ela é inimiga do Povo Americano</b>!”
	  				</p>
	  				<h6>— <b>Donald J. Trump</b>, 45º presidente dos Estados Unidos da América, eleito com 62.984.828 votos
 	  				</h6>
	  			</div>
	  			<div class="col-md-4">
	  				<p class="first large">
	  					“Só porque você é um jornalista, você não está isento de ser assassinado, se for um filho da puta”
	  				</p>
	  				<h6>— <b>Rodrigo Duterte</b>, 16º presidente das Filipinas, eleito com 16.601.997 votos
	  				</h6>
	  			</div>	
	  			<div class="col-md-4">
	  				<p class="first large">
	  					“Para jornalistas”: inscrição gravada na réplica de um rifle AK-47, que o líder exibiu durante uma coletiva de imprensa
	  				</p>
	  				<h6>— <b>Miloš Zeman</b>, 3º presidente da República Tcheca, eleito com 2.717.405 votos
 	  				</h6>
	  			</div>
	  		</div>
	  		<hr/>
			<div class="row">
				<div class="col-md-4 offset-md-2 text-center">  	
					<h1 class="large">63</h1>
	  				<h3>jornalistas assassinados desde janeiro de 2018</h3>
				</div>
				<div class="col-md-4 text-center"> 
					<h1 id="killed-dem" class="large"></h1>
					<h3>em países considerados democráticos</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2 text-center">
					<p style="font-size: 1.2em" id="killed-list"></p>
					<br/>
					<h4 style="font-weight: bold; color:#ff4848; display: 'inline';">*</h4><small>segundo informações dos <a href="https://rsf.org/en/barometer?type_id=233#list-barometre"> Repórteres Sem Fronteiras</a></small>
				</div>
			</div>
			<hr/>
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">  				

	  				<h2>
	  					Mas até que ponto uma democracia pode sobreviver sem informação de qualidade?
	  				</h2>
	  				<br/>
	  				<p>
	  					Se não há uma resposta exata, a análise de dados pode indicar a realidade. O cruzamento de <i>indicadores de liberdade de imprensa</i> e <i>de nível de democracia</i> demonstra uma forte correlação entre os dois fenômenos.
	  				</p>
	  			</div>
	  		</div>
		</section>
		<section id="correlacao">
			<div class="row">
				<div class="col-md-8" id="correlac-cont">
					<div class="data-box" style="max-width: 100%; margin-bottom: 80px;">
		  				<div id="correlac"></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="correlac-leg">
						
						<ul class="botoes">
							<li class="active" id="dem">Democracia</li>
							<li id="press">Liberdade</li>
						</ul>

						<ul class="legenda-din active" id="leg-dem">
							<li>
								<div class="leg-cor full1"></div><div class="leg-cor full2"></div> 
								Democracia plena
							</li>

							<li>
								<div class="leg-cor flaw1"></div><div class="leg-cor flaw2"></div> 
								Democracia imperfeita
							</li>
							<li>
								<div class="leg-cor hyb1"></div><div class="leg-cor hyb2"></div> 
								Regime híbrido
							</li>
							<li>
								<div class="leg-cor aut1"></div><div class="leg-cor aut2"></div><div class="leg-cor aut3"></div> 
								Regime autoritário
							</li>
						</ul>
					
						<ul class="legenda-din" id="leg-press">
							<li><div class="leg-cor-1 boa"></div> Boa situação</li>
							<li><div class="leg-cor-1 relat"></div> Relativamente boa</li>
							<li><div class="leg-cor-1 sens"></div> Situação sensível</li>
							<li><div class="leg-cor-1 difi"></div> Situação difícil</li>
							<li><div class="leg-cor-1 grave"></div> Situação grave</li>
						</ul>
					</div>
					<div class="correlac-leg">
						
						<ul class="botoes">
							<li class="active">Filtros</li>
						</ul>

						<ul class="legenda-din filter active">
							<li>
								<select name="local" id="local-selct">
									<option value="">Todos</option>
									<option value="AF">África</option>
									<option value="AM">América</option>
									<option value="AS">Ásia</option>
									<option value="EU">Europa</option>
									<option value="OC">Oceania</option>
								</select>
							</li>
							<li>
								<select name="ano" id="ano-selct">
									<option value="17">2017</option>
									<option value="16">2016</option>
									<option value="15">2015</option>
									<option value="14">2014</option>
									<option value="13">2013</option>
								</select>
							</li>
							
						</ul>
						<br/>
						<p>
							<b>Coeficiente de correlação de Pearson:</b> <span id="correlat"></span>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
	  			<div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">
	  				<h4><i class="fas fa-dice"></i> para entender os dados</h4>
	  				<p>
	  					O <b>índice de democracia</b> corresponde ao <a href="https://infographics.economist.com/2018/DemocracyIndex/">Democracy Index</a>, elaborado anualmente pela revista <a href="https://www.economist.com/">The Economist</a>, que calcula o índice de democracia para 167 países, a partir de mais de 60 indicadores diferentes. A escala varia de zero a dez, sendo que o zero corresponde a um regime plenamente autoritário e o 10 a um regime plenamente democrático. 
	  				</p>
	  				<p>
	  					Já o <b>índice de liberdade de imprensa</b> é calculado pela RSF, que avalia 180 países, através de questionários e dados sobre violência contra profissionais da área. Os dados originais variam de zero a 100, com o zero correspondendo  a censura total (sem nenhuma garantia de segurança aos jornalistas na região) e o 100 à liberdade completa (nenhuma ameaça aos repórteres). 
	  				</p>
	  				<p>
	  					Para fins de visualização, os dados foram convertidos para uma escala similar a do índice de democracia. Assim, o zero passou a corresponder ao menor nível de liberdade possível e o dez, a liberdade absoluta.
	  				</p>
	  				<p>
	  					Foram utilizadas as informações de 161 países, presentes nos dois estudos pelos últimos cinco anos. O ano de 2018 não foi contabilizado porque o índice de democracia ainda não foi publicado pela revista <i>The Economist</i>. 
	  				</p>
	  				<p>
	  					Ao lado, é possível verificar a maneira como as organizações classificam estes índices, de acordo com o nível de democracia ou de liberdade de imprensa.
	  				</p>
	  				<p>
	  					A correlação entre os dois indicadores foi calculada a partir do Coeficiente de correlação de Pearson. Utilizando esta fórmula, é possível perceber que nos últimos anos há um grau consistente de 0.7 de correspondência entre liberdade de imprensa e democracia.
	  				</p>
	  				<hr/>
	  			</div>
	  		</div>
		</section>
		<section id="br">
			<div class="row">
				<div class="col-md-5 offset-md-1">
					<h2>
	  					Liberdade sem democracia?
	  				</h2>
	  				<p>
	  					Nem sempre a liberdade de imprensa e a democracia andam de mãos dadas.
	  				</p>
	  				<p>
	  					Principalmente em democracias jovens, o que se vê ainda é um regime sensível, mas com altos índices de liberdade de imprensa.
	  				</p>
	  				<p>
	  					Por outro lado, alguns países com democracias plenas têm uma correspondência quase exata entre os dois indicadores. É o caso do Canadá, Finlândia, Alemanha e Nova Zelândia, por exemplo. Outros fatores como o grau de desenvolvimento destes países, entretanto, podem explicar este fenômeno.
	  				</p>
	  				<br/>
	  				<h4><i class="fas fa-dice"></i> para entender os dados</h4>
	  				<p>
	  					Ao lado, uma comparação entre os indicadores de liberdade de imprensa e democracia ao longo dos anos, para cada um dos países analisados.
	  				</p>
	  			</div>	
	  			<div class="col-md-6" id="brasil-cont">
	  			<div class="correlac-leg text-left">
	  				<div class="data-box" style="max-width: 100%; margin-top: -50px;">
		  				<div id="brasil"></div>
					</div>

						<ul class="legenda-din active inline">
							<li style="display: inline-block; margin-left: 30px; "><div class="leg-cor-1 flaw2"></div> Democracia</li>
							<li style="display: inline-block;"><div class="leg-cor-1 imp"></div> Liberdade de imprensa </li>
						</ul>

						<ul class="legenda-din filter active" style="margin-left: 30px;">
							<li>
							<select name="pais" id="slct-pais">
							    <option value="Noruega">Noruega</option>
							    <option value="Suécia">Suécia</option>
							    <option value="Holanda">Holanda</option>
							    <option value="Finlândia">Finlândia</option>
							    <option value="Suíça">Suíça</option>
							    <option value="Jamaica">Jamaica</option>
							    <option value="Bélgica">Bélgica</option>
							    <option value="Nova" zelândia="">Nova Zelândia</option>
							    <option value="Dinamarca">Dinamarca</option>
							    <option value="Costa rica">Costa Rica</option>
							    <option value="Áustria">Áustria</option>
							    <option value="Estônia">Estônia</option>
							    <option value="Islândia">Islândia</option>
							    <option value="Portugal">Portugal</option>
							    <option value="Alemanha">Alemanha</option>
							    <option value="Irlanda">Irlanda</option>
							    <option value="Luxemburgo">Luxemburgo</option>
							    <option value="Canadá">Canadá</option>
							    <option value="Austrália">Austrália</option>
							    <option value="Uruguai">Uruguai</option>
							    <option value="Suriname">Suriname</option>
							    <option value="Gana">Gana</option>
							    <option value="Letônia">Letônia</option>
							    <option value="Chipre">Chipre</option>
							    <option value="Namíbia">Namíbia</option>
							    <option value="Eslováquia">Eslováquia</option>
							    <option value="África do sul">África do Sul</option>
							    <option value="Cabo verde">Cabo Verde</option>
							    <option value="Espanha">Espanha</option>
							    <option value="Eslovênia">Eslovênia</option>
							    <option value="França">França</option>
							    <option value="República tcheca">República Tcheca</option>
							    <option value="Lituânia">Lituânia</option>
							    <option value="Chile">Chile</option>
							    <option value="Trinidad e tobago">Trinidad e Tobago</option>
							    <option value="Reino unido">Reino Unido</option>
							    <option value="Burkina faso">Burkina Faso</option>
							    <option value="Taiwan">Taiwan</option>
							    <option value="Coréia do sul">Coréia do Sul</option>
							    <option value="Romênia">Romênia</option>
							    <option value="Estados unidos">Estados Unidos</option>
							    <option value="Itália">Itália</option>
							    <option value="Comores">Comores</option>
							    <option value="Senegal">Senegal</option>
							    <option value="Argentina">Argentina</option>
							    <option value="Papua nova guiné">Papua Nova Guiné</option>
							    <option value="Madagascar">Madagascar</option>
							    <option value="Guiana">Guiana</option>
							    <option value="Maurícia">Maurícia</option>
							    <option value="Fiji">Fiji</option>
							    <option value="Polônia">Polônia</option>
							    <option value="República dominicana">República Dominicana</option>
							    <option value="Haiti">Haiti</option>
							    <option value="Georgia">Georgia</option>
							    <option value="Bósnia herzegovina">Bósnia Herzegovina</option>
							    <option value="Níger">Níger</option>
							    <option value="Malawi">Malawi</option>
							    <option value="Malta">Malta</option>
							    <option value="El salvador">El Salvador</option>
							    <option value="Japão">Japão</option>
							    <option value="Lesoto">Lesoto</option>
							    <option value="Croácia">Croácia</option>
							    <option value="Hong kong">Hong Kong</option>
							    <option value="Mongólia">Mongólia</option>
							    <option value="Mauritânia">Mauritânia</option>
							    <option value="Hungria">Hungria</option>
							    <option value="Grécia">Grécia</option>
							    <option value="Albânia">Albânia</option>
							    <option value="Sérvia">Sérvia</option>
							    <option value="Serra leoa">Serra Leoa</option>
							    <option value="Armênia">Armênia</option>
							    <option value="Moldávia">Moldávia</option>
							    <option value="Guiné bissau">Guiné Bissau</option>
							    <option value="Benin">Benin</option>
							    <option value="Togo">Togo</option>
							    <option value="Israel">Israel</option>
							    <option value="Peru">Peru</option>
							    <option value="Libéria">Libéria</option>
							    <option value="Nicarágua">Nicarágua</option>
							    <option value="Panamá">Panamá</option>
							    <option value="Equador">Equador</option>
							    <option value="Tanzânia">Tanzânia</option>
							    <option value="Butão">Butão</option>
							    <option value="Timor" leste="">Timor Leste</option>
							    <option value="Quênia">Quênia</option>
							    <option value="Tunísia">Tunísia</option>
							    <option value="Moçambique">Moçambique</option>
							    <option value="Líbano">Líbano</option>
							    <option value="Ucrânia">Ucrânia</option>
							    <option value="Brasil">Brasil</option>
							    <option value="Montenegro">Montenegro</option>
							    <option value="Guiné">Guiné</option>
							    <option value="Kuwait">Kuwait</option>
							    <option value="Nepal">Nepal</option>
							    <option value="Paraguai">Paraguai</option>
							    <option value="Gabão">Gabão</option>
							    <option value="Macedônia">Macedônia</option>
							    <option value="Bolívia">Bolívia</option>
							    <option value="Bulgária">Bulgária</option>
							    <option value="República centro africana">República Centro Africana</option>
							    <option value="Zâmbia">Zâmbia</option>
							    <option value="Guatemala">Guatemala</option>
							    <option value="Uganda">Uganda</option>
							    <option value="Afeganistão">Afeganistão</option>
							    <option value="Nigéria">Nigéria</option>
							    <option value="Angola">Angola</option>
							    <option value="Gâmbia">Gâmbia</option>
							    <option value="Chad">Chad</option>
							    <option value="Indonésia">Indonésia</option>
							    <option value="Qatar">Qatar</option>
							    <option value="Zimbabwe">Zimbabwe</option>
							    <option value="Omã">Omã</option>
							    <option value="Emirados Árabes unidos">Emirados Árabes Unidos</option>
							    <option value="Camarões">Camarões</option>
							    <option value="Colômbia">Colômbia</option>
							    <option value="Sri" lanka="">Sri Lanka</option>
							    <option value="Jordânia">Jordânia</option>
							    <option value="Filipinas">Filipinas</option>
							    <option value="Palestina">Palestina</option>
							    <option value="Marrocos">Marrocos</option>
							    <option value="Algéria">Algéria</option>
							    <option value="Myanmar">Myanmar</option>
							    <option value="Índia">Índia</option>
							    <option value="Paquistão">Paquistão</option>
							    <option value="Tailândia">Tailândia</option>
							    <option value="Honduras">Honduras</option>
							    <option value="Camboja">Camboja</option>
							    <option value="Venezuela">Venezuela</option>
							    <option value="Malásia">Malásia</option>
							    <option value="Bangladesh">Bangladesh</option>
							    <option value="México">México</option>
							    <option value="Rússia">Rússia</option>
							    <option value="Tajiquistão">Tajiquistão</option>
							    <option value="Etiópia">Etiópia</option>
							    <option value="Singapura">Singapura</option>
							    <option value="República democrática do congo">República democrática do Congo</option>
							    <option value="Belarus">Belarus</option>
							    <option value="Ruanda">Ruanda</option>
							    <option value="Turquia">Turquia</option>
							    <option value="Cazasquistão">Cazasquistão</option>
							    <option value="Burundi">Burundi</option>
							    <option value="Iraque">Iraque</option>
							    <option value="Egito">Egito</option>
							    <option value="Líbia">Líbia</option>
							    <option value="Azerbaijão">Azerbaijão</option>
							    <option value="Irã">Irã</option>
							    <option value="Uzbequistão">Uzbequistão</option>
							    <option value="Bahrain">Bahrain</option>
							    <option value="Iêmen">Iêmen</option>
							    <option value="Árabia saudita">Árabia Saudita</option>
							    <option value="Laos">Laos</option>
							    <option value="Guiné" equatorial="">Guiné Equatorial</option>
							    <option value="Cuba">Cuba</option>
							    <option value="Djibouti">Djibouti</option>
							    <option value="Sudão">Sudão</option>
							    <option value="Vietnã">Vietnã</option>
							    <option value="China">China</option>
							    <option value="Síria">Síria</option>
							    <option value="Turcomenistão">Turcomenistão</option>
							    <option value="Eritréia">Eritréia</option>
							    <option value="Coréia do norte">Coréia do Norte</option>
							</select>
							</li>
						</ul>
						
					</div>
					
				</div>	
			</div>
		</section>
		<section>
			<div class="row">
	  			<div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">
	  				<hr/>
	  				<h2>
	  					Democracia sem liberdade?
	  				</h2>
	  				<p>
	  					Na maior parte dos países (61,5%) a liberdade de imprensa está em uma "situação sensível" ou "difícil". Destas regiões, mais da metade têm regimes híbridos ou puramente autoritários; um terço têm democracias imperfeitas; e apenas a República de Maurícia, um país insular do Oceano Índico com cerca de 1.356.388 habitantes, é considerada uma democracia plena com liberdade de imprensa em situação "sensível".
	  				</p>
	  				<p>
	  					Da mesma forma, a grande maioria dos países (95,23%) em uma "situação boa" ou "relativamente boa" em relação à liberdade de imprensa, são considerados democracias plenas ou imperfeitas. Nos dados analisados, apenas Comores (outro conjunto de ilhas no Oceano Índico, com cerca de 806.153 habitantes) e Burkina Faso (no noroeste africano, com 15.757.000 habitantes) não se encaixam neste padrão. 
	  				</p>
	  				<p>
	  					Sem surpresas, em todos os países considerados autoritários, a situação da liberdade de imprensa é considerada "grave". Uma nação sem espaço para o jornalismo, também será uma nação onde a democracia não tem vez. 
	  				</p>
	  				<br/><br/>
	  			</div>
	  		</div>
	  	</section>
		<section id="barra">
			<div class="row">
				<div class="col-md-9 text-center" id="barras-cont">
					<div class="data-box" style="max-width: 100%; margin-bottom: 80px;">
		  				<div id="barras"></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="correlac-leg">
						
						<ul class="botoes">
							<li class="active" id="dem">Democracia</li>
						</ul>

						<ul class="legenda-din active">
							<li><div class="leg-cor-1 full1"></div> Democracia plena</li>
							<li><div class="leg-cor-1 flaw2"></div> Democracia imperfeita</li>
							<li><div class="leg-cor-1 hyb2"></div> Regime híbrido</li>
							<li><div class="leg-cor-1 aut"></div> Regime autoritário</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
	  			<div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">
	  				<h4><i class="fas fa-dice"></i> para entender os dados</h4>
	  				<p>
	  					Os países estão distribuídos de acordo com a classificação definida pelos Repórteres Sem Fronteira, de acordo com a escala personalizada utilizada nos gráficos anteriores. Países com um índice de liberdade de imprensa
	  				</p>
	  					<ul>
	  						<li><b>maior do que 8.5</b>, são considerados em uma <b>situação boa</b>; 
	  						<li><b>entre 7.5 e 8.5 pontos</b>, são considerados em uma <b>situação relativamente boa</b>;</li>
	  						<li>entre <b>6.5 e 7.5 pontos</b>, em uma <b>situação sensível</b>;</li>
	  						<li><b>entre 4.5 e 6.5 pontos</b>, em uma <b>situação difícil</b>;</li>
	  						<li>e <b>abaixo de 4.5 pontos</b>, em uma <b>situação grave</b>.</li>
	  					</li>
	  				</ul>
	  				<hr/>
	  				<br/><br/>
	  				<p class="text-right">
	  					Por Bibiana C. Davila, para a cadeira de Ciberjornalismo II.<br/>
	  					<i>Universidade Federal do Rio Grande do Sul, novembro de 2018.</i>
	  				</p>
	  				<br/>
	  			</div>
	  		</div>
		</section>
	</div>
	<footer></footer>

	<!--========= gráficos ===========-->
	<script>
	
		var width = $('#correlac-cont').width();
		var w = width;
		var h = window.innerHeight-100;
		var margin = {top: 50, right: 50, bottom: 15, left: 70};
		var radius = 10;
		var dataBox = document.getElementById("data-container")

		var svg = d3.select('#correlac').append('svg').attr({
			width: w,
			height: h
		});

		var data;

		/*=================================

		Primeiro Gráfico
					Dispersão democracia vs jornalismo

		==================================*/
		d3.json("data2017.json", function(dataJson) {
			data = dataJson;

			var mortos_dem = 0;

			$.each(data, function(index,item){
				data[index]['y'] = data[index]['rsf'+"17"];
				data[index]['x'] = data[index]['dem'+"17"];

				/*========= jornalistas mortos em países democráticos ===========*/
				if(item['killed18']!=0 && parseInt(item['dem17'])>=6){
					mortos_dem = mortos_dem+parseInt(item['killed18']);
					$('#killed-list').append(item['nome']+' <span style="color:#ff4848">('+item['killed18']+')</span>, ');
				}
			});

			$('#killed-dem').html(mortos_dem);

			/* desenha o gráfico, com as escalas */
			var xScale = d3.scale.linear().domain([0,10.9]).range([margin.left, w - margin.right]);
			var yScale = d3.scale.linear().domain([10.9,0]).range([margin.top, h - margin.bottom]);

			var xAxis = d3.svg.axis().scale(xScale).orient("bottom").tickSize(2);
			var yAxis = d3.svg.axis().scale(yScale).orient('left').tickSize(2);

			/* posição inicial dos pontos, para ani*/
			var circleInitialAttrs = {
				cx: function(d){return xScale(d)},
				r: 1,
				fill: 'red',
				class:function(d){return d.cont}
			};

			/* atributos dos pontos */
			var circleAttrs = {
				cx: function(d) { return xScale(d.x); },
				cy: function(d) { return yScale((100-d.y)/10); },

				r: function(d){return 4},
				fill: function(d){return demColors(d.x)}
			};
			var circleAttrs2 = {
				cx: function(d) { return xScale(d.x); },
				cy: function(d) { return yScale((100-d.y)/10); },
				r: function(d){return 4},
				fill: function(d){return pressColors(d.y)}
			};

			var mouseOverHandler = function(d, i) {
				d3.select(this).attr({
			    	r: 10
			  	});
				svg.append('text')
			    .attr({
			      	id: 'tlegenda',
			      	x: function() { return xScale(d.x) - 30 ; },
			     	y: function() { return yScale((100-d.y)/10) - 15 ; }, 
			      	class: 'legenda'+d.nome
			    })
			    .text(function() {
			    	return [d.nome];
			    });
			};

			var mouseOutHandler = function(d, i) {
				d3.select(this).attr({
			    	r:4
			  	});
			  	d3.select('#tlegenda').remove();
			};

			var xAxisGroup = svg.append('g').attr({
				'class': 'axis',
				transform: 'translate(' + [0, h-margin.bottom] + ')'
			}).call(xAxis);

			svg.append("text")             
				.attr("transform",
				    "translate(" + (w-240) + " ," + 
				                   (h) + ")")
				.attr("y",-40)
				.attr("x",25)
				.style("text-anchor", "center")
				.text("Índice de democracia");

			var yAxisGroup = svg.append('g').attr({
				'class': 'axis',
				transform: 'translate(' + [margin.left, 0] + ')'
			}).call(yAxis);

			svg.append("g")
				.attr("class", "y axis")
				.call(yAxis)
				.append("text")
				.attr("transform", "rotate(-90)")
				.attr("y", 48)
				.attr("x",-25)
				.attr("dy", ".8em")
				.style("text-anchor", "end")
				.text("Liberdade de imprensa");

			var circles = svg.selectAll('circle')
				.data(data)
				.enter()
				.append('circle')
				.attr(circleInitialAttrs)
				.on('mouseover', mouseOverHandler)
				.on('mouseout', mouseOutHandler);

			circles.transition()
				.delay(function(d, i){return i * 10;})
				.duration(500)
				.ease('in')
				.attr(circleAttrs);

				$('.botoes li').click(function(){
					if(!$(this).hasClass('active')){

						var context = $(this).parents('.correlac-leg');
						
						$(context).find('.legenda-din').removeClass('active');
						$(context).find('.botoes li').removeClass('active');

						var id = $(this).attr('id');
						$('#leg-'+id).addClass('active');
						$(this).addClass('active');		

						if(id=='press'){
							circles.transition()
							.delay(function(d, i){return i * 10;})
							.duration(5)
							.ease('in')
							.attr(circleAttrs2);
						}	
						if(id=='dem'){
							circles.transition()
							.delay(function(d, i){return i * 10;})
							.duration(5)
							.ease('in')
							.attr(circleAttrs);
						}
					}
				});

				$('#ano-selct').change(function(){
					var year = $(this).val();

					$.each(data, function(index,item){
						data[index]['y'] = data[index]['rsf'+year];
						data[index]['x'] = data[index]['dem'+year];
					});

					var colorType = $(this).parents('.correlac-leg').siblings('.correlac-leg').find('.botoes').find('li.active').attr('id');

					if(colorType=='press'){
						circles.transition()
						.attr(circleAttrs2);
					}	
					if(colorType=='dem'){
						circles.transition()
						.attr(circleAttrs);
					}		
					if($('#local-selct').val()==""){
						r = correlation(data);
	           			$('#correlat').html(r.toFixed(2));
					}
				});
				$('#local-selct').change(function(){
					var local = $(this).val();

					if(local!==''){
						$('#correlac svg').find('circle').addClass('hide');
						$('#correlac svg').find('circle.'+local).removeClass('hide');
						
						$('#correlat').html("-");
					}
					if(local==''){
						$('#correlac svg').find('circle').removeClass('hide');
					}
					if(local==""){
						r = correlation(data);
	           			$('#correlat').html(r.toFixed(2));
					}

				});
				var r = correlation(data);
	           	$('#correlat').html(r.toFixed(2));

		});

		/*=================================

		BARRAS

		==================================*/
		d3.json("data2017.json", function(dataJson) {
			
			var html = '<table><thead><tr><th>nome</th><th>democracia</th><th>liberdade</th></tr></thead><tbody>';

			var imprensa = [], niveldem, nivelpress; 

			imprensa['boa']=[];
			imprensa['boa']['full']=0;
			imprensa['boa']['flaw']=0;
			imprensa['boa']['hyb']=0;
			imprensa['boa']['aut']=0;
			imprensa['ok']=[];
			imprensa['ok']['full']=0;
			imprensa['ok']['flaw']=0;
			imprensa['ok']['hyb']=0;
			imprensa['ok']['aut']=0;
			imprensa['sens']=[];
			imprensa['sens']['full']=0;
			imprensa['sens']['flaw']=0;
			imprensa['sens']['hyb']=0;
			imprensa['sens']['aut']=0;
			imprensa['dif']=[];
			imprensa['dif']['full']=0;
			imprensa['dif']['flaw']=0;
			imprensa['dif']['hyb']=0;
			imprensa['dif']['aut']=0;
			imprensa['gra']=[];
			imprensa['gra']['full']=0;
			imprensa['gra']['flaw']=0;
			imprensa['gra']['hyb']=0;
			imprensa['gra']['aut']=0;

			$.each(dataJson, function(i, item) {

				/*imprensa okay*/
				if(item['y']<15){
					nivelpress='boa';
				}
				/* imprensa relativamente ok*/
				else if(item['y']<25){
					nivelpress='ok';
				}
				/* imprensa sensivel*/
				else if(item['y']<35){
					nivelpress='sens';
				}
				/* imprensa dificil*/
				else if(item['y']<55){
					nivelpress='dif';
				}
				/* imprensa grave*/
				else{
					nivelpress='gra';
				}

				/* full dem */
				if(item['x']>8){
					niveldem = 'full';
				}
				/* flawed dem */
				else if(item['x']>6){
					niveldem = 'flaw';
				}
				/* hyb */
				else if(item['x']>4){
					niveldem = 'hyb';
				}
				/* aut */
				else{
					niveldem = 'aut';
				}

				imprensa[nivelpress][niveldem]++;

   				html = html+'<tr><td>'+item['nome']+'</td><td>'+item['x']+'</td><td>'+item['y']+'</td></tr>';	
			});
			html = html+'</tbody></table>';

		});
			var data2 = [
			{
				"imprensa": "Situação boa",
				"full": 12, 
				"flaw": 4, 
				"hyb": 0, 
				"aut": 0
			},
			{
				"imprensa":"Rel. boa",
				"full": 6, 
				"flaw": 18, 
				"hyb": 1, 
				"aut": 1
			},
			{
				"imprensa":"Sensível",
				"full": 1,
				"flaw": 23,
				"hyb": 22,
				"aut": 8
			},
			{
				"imprensa":"Difícil",
				"full": 0, 
				"flaw": 10, 
				"hyb": 14, 
				"aut": 21
			},
			{
				"imprensa":"Grave",
				"full": 0, 
				"flaw": 0, 
				"hyb": 0, 
				"aut": 20
			}];

			var margin = {top: 20, right: 20, bottom: 30, left: 40},
			    width = $('#barras-cont').width(),
			    height = h-h/4;

			var x0 = d3.scale.ordinal().rangeRoundBands([0, width], .1);

			var x1 = d3.scale.ordinal();

			var y = d3.scale.linear().range([height, 0]);

			var color = d3.scale.ordinal().range(["#4796c8", "#a0dce9" , "#ffe16d", "#ff4848"]);

			var xAxis = d3.svg.axis()
			    .scale(x0)
			    .tickSize(2)
			    .orient("bottom");

			var yAxis = d3.svg.axis()
			    .scale(y)
			    .orient("left")
			    .tickSize(2)
			    .tickFormat(d3.format(".2s"));

			var svg2 = d3.select("#barras").append("svg")
			    .attr("width", width + margin.left + margin.right)
			    .attr("height", height + margin.top + margin.bottom)
			    .append("g")
			    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

			var ageNames = d3.keys(data2[0]).filter(function(key) { return key !== "imprensa"; });

			data2.forEach(function(d) {
			    d.ages = ageNames.map(function(name) { return {name: name, value: +d[name]}; });
			    });

			x0.domain(data2.map(function(d) { return d.imprensa; }));
			x1.domain(ageNames).rangeRoundBands([0, x0.rangeBand()]);
			y.domain([0, d3.max(data2, function(d) { return d3.max(d.ages, function(d) { return d.value; }); })]);

			svg2.append("g")
				.attr("class", "x axis")
				.attr("transform", "translate(0," + height + ")")
				.call(xAxis);

			svg2.append("g")
				.attr("class", "y axis")
				.call(yAxis)
				.append("text")
				.attr("transform", "rotate(-90)")
				.attr("dy", ".71em")
				.style("text-anchor", "end")
				.text("Países");

			svg2.selectAll("text")
				.attr("y",10);

			var state = svg2.selectAll(".groups")
				.data(data2)
				.enter().append("g")
				.attr("class", "groups")
				.attr("transform", function(d) { return "translate(" + x0(d.imprensa) + ",0)"; });

			state.selectAll("rect")
				.data(function(d) { return d.ages; })
				.enter().append("rect")
				.attr("width", x1.rangeBand())
				.attr("x", function(d) { return x1(d.name); })
				.attr("y", function(d) { return y(d.value); })
				.attr("height", function(d) { return height - y(d.value); })
				.style("fill", function(d) { return color(d.name); });
				

		/*=================================

		PAÍSES

		==================================*/
		var height2 = h*2/3;
		var width2 = $('#brasil-cont').width();

		var svg3 = d3.select('#brasil').append('svg').attr({width: width2,height: height2});
		var data3 = [];


		d3.json("data2017.json", function(dataJson){

			 var htmltest = "<select name='pais' id='pais'>";
			$.each(dataJson, function(index,item){
				htmltest = htmltest+"<option value="+item['nome']+">"+item['nome']+"<option>";
				if(item['nome']=='Estados Unidos'){
					var anoum = 13;
					for(var k=0; k<10; k+=2){
						data3[k] = {};
						data3[k+1] = {};
						data3[k]['x']="20"+anoum;
						data3[k]['y']=item['dem'+anoum];
						data3[k]['tipo']='d';
						data3[k+1]['x']="20"+anoum;
						data3[k+1]['y']=(100-parseInt(item['rsf'+anoum]))/10;
						data3[k+1]['tipo']='i';
						anoum++;
					}
					console.log(data3);
				}

			});	

htmltest = htmltest+"</select>";
			//	$('body').html(htmltest);
			/* desenha o gráfico, com as escalas */
			var xScale = d3.scale.linear().domain([2012, 2018]).range([margin.left, width2 - margin.right]);
			var yScale = d3.scale.linear().domain([10,0]).range([margin.top, height2 - margin.bottom]);

			var xAxis = d3.svg.axis().scale(xScale).orient("bottom").tickSize(2).tickFormat(d3.format("d"));
			var yAxis = d3.svg.axis().scale(yScale).orient('left').tickSize(2);

			/* posição inicial dos pontos, para ani*/
			var circleInitialAttrsCnt = {
				cx: function(d){return xScale(d)},
				r: 1,
				fill: 'red'
			};
		
			/* cores dos pontos (de acordo com tipo de dados)*/
			var controlColorsCnt =  function(tipo){
				if(tipo =="d") return "#D2EAEF";
				if(tipo =="i") return "#b7e542"}

			/* atributos dos pontos */
			var circleAttrsCnt = {
				cx: function(d) { return xScale(d.x); },
				cy: function(d) { return yScale(d.y); },
				r: function(d){return 4},
				fill: function(d){return controlColorsCnt(d.tipo)}
			};

			var xAxisGroup = svg3.append('g').attr({
				'class': 'axis',
				transform: 'translate(' + [0, height2-margin.bottom] + ')'
			}).call(xAxis);

			svg3.append("text")             
				.attr("transform",
				    "translate(" + (width2-100) + " ," + 
				                   (height2) + ")")
				.attr("y",-40)
				.attr("x",50)
				.style("text-anchor", "center")
				.text("Ano");

			var yAxisGroup = svg3.append('g').attr({
				'class': 'axis',
				transform: 'translate(' + [margin.left, 0] + ')'
			}).call(yAxis);

			svg3.append("g")
				.attr("class", "y axis")
				.call(yAxis)
				.append("text")
				.attr("transform", "rotate(-90)")
				.attr("y", 48)
				.attr("x",-25)
				.attr("dy", ".8em")
				.style("text-anchor", "end")
				.text("Pontuação");

			var circles = svg3.selectAll('circle')
				.data(data3)
				.enter()
				.append('circle')
				.attr(circleInitialAttrsCnt);

			circles.transition()
				.delay(function(d, i){return i * 10;})
				.duration(5)
				.ease('in')
				.attr(circleAttrsCnt);

			$('#slct-pais').change(function(){
				var pais = $(this).val();
				console.log('well');
				$.each(dataJson, function(index,item){
					if(item['nome']==pais){
						var anoum = 13;
						for(var k=0; k<10; k+=2){
							data3[k] = {};
							data3[k+1] = {};
							data3[k]['x']="20"+anoum;
							data3[k]['y']=item['dem'+anoum];
							data3[k]['tipo']='d';
							data3[k+1]['x']="20"+anoum;
							data3[k+1]['y']=(100-parseInt(item['rsf'+anoum]))/10;
							data3[k+1]['tipo']='i';
							anoum++;
						}
					}
				});
				$('#brasil').find('svg circle').remove();
				var circles = svg3.selectAll('circle')
					.data(data3)
					.enter()
					.append('circle')
					.attr(circleInitialAttrsCnt);
				circles.transition()
					.delay(function(d, i){return i * 10;})
					.duration(5)
					.ease('in')
					.attr(circleAttrsCnt);	
			});
		});	
	</script>
  </body>
</html>
