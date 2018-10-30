<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- título site -->
    <title>Jornalismo e democracia</title>

    <!--  jquery + d3 (gráficos) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

    <script src="js/main.js"></script>

    <!-- fonts google + font awesome (ícones) -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Raleway|Philosopher" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- estilos (css+bootstrap) -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="icon.png" />

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
		<section id="home">
	  		<div class="row">
	  			<div class="col-md-9">
	  				<h1>Jornalismo&<br/>democracia</h1>
	  				<div class="divider"></div>

	  				<p class="first">
	  					Um espectro ronda o jornalismo — o espectro do autoritarismo. É o que aponta o <a href="https://rsf.org/pt/o-ranking-mundial-da-liberdade-de-imprensa-2018-o-odio-ao-jornalismo-ameaca-democracias">Ranking Mundial da Liberdade de Imprensa de 2018</a>, do <a href="https://rsf.org/pt/">Repórteres Sem Fronteira (RSF)</a>, que indica o crescimento do sentimento de ódio dirigido à jornalistas em todo mundo, fomentado principalmente por líderes autoritários. 
	  				</p>
	  				<p>
	  					A hostilidade em relação à mídia é percebida como uma ameaça real à democracia, uma vez que o direito à informação é uma das bases de regimes democráticos. Entretanto, à medida que líderes eleitos como Donald Trump, nos Estados Unidos, Rodrigo Duterte, nas Filipinas e Milos Zeman, na República Tcheca, entre tantos outros, atacam periodicamente jornalistas, os colocando como inimigos de seus governos, fica claro que a relação entre liberdade de imprensa e democracia ainda é vista como insignificante por muitas pessoas. 
	  				</p>
	  				<p>
	  					Neste sentido, cruzamos os dados do <a href="https://infographics.economist.com/2018/DemocracyIndex/">Democracy Index</a>, elaborado anualmente pela revista <a href="https://www.economist.com/">The Economist</a>, que calcula o índice de democracia para 167 países, a partir de mais de 60 indicadores diferentes; e os dados da própria Repórteres Sem Fronteira, sobre liberdade de imprensa, que avaliam 180 países, através de questionários e dados sobre violência contra profissionais da área. Desta forma, buscamos uma imagem da relação entre democracia e jornalismo.
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
				</div>
			</div>
		</section>
		<section>
			<div class="row">
	  			<div class="col-md-9">
	  				<h4><i class="fa fa-exclamation-circle"></i> para entender o gráfico</h4>
	  				<p>
	  					O <b>índice de democracia</b> varia de zero a dez, sendo que o zero corresponde a um regime plenamente autoritário e o 10 a um regime plenamente democrático. 
	  				</p>
	  				<p>
	  					Já o <b>índice de liberdade de imprensa</b> varia de zero a 100, com o zero correspondendo à liberdade completa (nenhuma ameaça aos repórteres) e 100 a censura total e nenhuma garantia de segurança aos jornalistas na região. 
	  				</p>
	  				<p>
	  					No gráfico acima, é possível perceber uma grande correlação entre os dois indicadores, com um grau de 0.7 de correspondência entre eles. Ou seja, há uma tendência de que países mais democráticos também sejam países com maior liberdade de imprensa.
	  				</p>
	  				<p>
	  					Ao lado, é possível verificar a maneira como as organizações classificam estes índices, de acordo com o nível de democracia ou de liberdade de imprensa.
	  				</p>
	  				<hr/>
	  				<p class="first">
	  					Em relação ao Brasil, o país ocupa a 102º posição no ranking de liberdade de imprensa, com uma pontuação de 31.20, uma situação considerada "sensível". Em relação à democracia, o país ocupou o 49º em 2017, com 6.86 pontos, sendo considerado uma "democracia imperfeita". 
	  				</p>
	  				<p>
	  					Abaixo, o histórico brasileiro nos dois rankings e os índices alcançados pelo país nos últimos sete anos.  
	  				</p>
	  				<br/><br/>
	  			</div>
	  		</div>
		</section>
				<section id="br">
			<div class="row">
				<div class="col-md-10 text-right">
					<ul class="legenda-din active inline">
						<li style="display: inline-block; margin-right: 10px; "><div class="leg-cor-1 flaw2"></div> Democracia</li>
						<li style="display: inline-block;"><div class="leg-cor-1 imp"></div> Liberdade de imprensa </li>
					</ul>
				</div>
				<div class="col-md-5 text-center" id="brasil-cont">
					<div class="data-box" style="max-width: 100%; margin-bottom: 80px;">
		  				<div id="brasil"></div>
					</div>
				</div>
				<div class="col-md-5 text-center" id="brasil-cont2">
					<div class="data-box" style="max-width: 100%; margin-bottom: 80px;">
		  				<div id="brasilindice"></div>
					</div>
				</div>				
			</div>
		</section>
		<section>
			<div class="row">
	  			<div class="col-md-9">
	  				<h4><i class="fa fa-exclamation-circle"></i> para entender os gráficos</h4>
	  				<p>
	  					O <b>gráfico da direita</b> indica a posição brasileira nos dois rankings, nos últimos sete anos. <b>Quanto menor</b> a posição neste gráfico, melhor foi o desempenho do país. É preciso ressaltar, entretanto, que a posição no ranking também está ligada a fatores externos ao Brasil, que causam movimentações em toda a lista. O <b>gráfico da esquerda</b> indica o índice alcançado pelo Brasil nos rankings no mesmo período.  
	  				</p>
	  				<p>
	  					Em relação aos indicadores, é preciso lembrar que quanto maior o índice de liberdade de imprensa, pior é a situação do país no indicador. Já no índice de democracia, quanto maior a pontuação, melhor a situação do país. Em uma situação ideal, os pontos verdes do gráfico baixariam sua posição, à medida que os azuis subissem (mais liberdade para a imprensa e  democracia). 
	  				</p>
	  				<hr/>
	  				<p class="first">
	  					Na maior parte dos países (61,5%) a liberdade de imprensa está em uma "situação sensível" ou "difícil". Destas regiões, 65,65% tem regimes híbridos ou puramente autoritários; 33,33% têm democracias imperfeitas; e apenas a República de Maurícia, um país insular do Oceano Índico com cerca de 1.356.388 habitantes, é considerada uma democracia plena com liberdade de imprensa em situação "sensível".
	  				</p>
	  				<p>
	  					Da mesma forma, a grande maioria dos países (95,23%) em uma "situação boa" ou "relativamente boa" em relação à liberdade de imprensa, são considerados democracias plenas ou imperfeitas. Nos dados analisados, apenas Comores (outro conjunto de ilhas no Oceano Índico, com cerca de 806.153 habitantes) e Burkina Faso (no noroeste africano, com 15.757.000 habitantes) não se encaixam neste padrão. 
	  				</p>
	  				<p>
	  					Sem surpresas, em 100% dos países considerados autoritários, a situação da liberdade de imprensa é considerada "grave". Abaixo, a relação completa entre a classificação da RSF e os níveis de democracia estabelecidos pela Economist.
	  				</p>
	  				<br/><br/>
	  			</div>
	  		</div>
	  	</section>
		<section id="barra">
			<div class="row">
				<div class="col-md-8 text-center" id="barras-cont">
					<div class="data-box" style="max-width: 100%; margin-bottom: 80px;">
		  				<div id="barras"></div>
					</div>
				</div>
				<div class="col-md-4">
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
	  			<div class="col-md-9">
	  				<h4><i class="fa fa-exclamation-circle"></i> para entender o gráfico</h4>
	  				<p>
	  					Os países estão distribuídos de acordo com a classificação definida pelos Repórteres Sem Fronteira. Países com um índice de liberdade de imprensa
	  				</p>
	  					<ul>
	  						<li><b>menor do que 15 pontos</b>, são considerados em uma <b>situação boa</b>; 
	  						<li><b>entre 25 e 15 pontos</b>, são considerados em uma <b>situação relativamente boa</b>;</li>
	  						<li>entre <b>35 e 25 pontos</b>, em uma <b>situação sensível</b>;</li>
	  						<li><b>entre 35 e 55 pontos</b>, em uma <b>situação difícil</b>;</li>
	  						<li>e <b>acima de 55 pontos</b>, em uma <b>situação grave</b>.</li>
	  					</li>
	  				</ul>
	  				<hr/>
	  				<p class="first">
	  					Apesar dos dados confirmarem a noção de que há uma correlação entre uma imprensa livre e regimes democráticos, é preciso frisar que não necessariamente há uma relação de causalidade entre ambos. Mesmo países reconhecidamente democráticos, como a Índia e o México, possuem fortes restrições à jornalistas. 
	  				</p>
	  				<p>
	  					Ainda assim, o enfraquecimento da imprensa em escala global deve ser visto com olhos críticos pelos defensores da democracia. Até que ponto esta movimentação influenciará os governos mundo afora, ainda não se sabe. 
	  				</p>
	  				<br/><br/>
	  				<p class="text-right">
	  					Por Bibiana C. Davila, para a cadeira de Ciberjornalismo II.<br/>
	  					<i>Universidade Federal do Rio Grande do Sul, outubro de 2018.</i>
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
		d3.json("data2017.json", function(dataJson) {
			data = dataJson;

		/* desenha o gráfico, com as escalas */
		var xScale = d3.scale.linear().domain([0, d3.max(data, function(d) { return d.x; } ) + 10]).range([margin.left, w - margin.right]);
		var yScale = d3.scale.linear().domain([ d3.max(data, function(d) { return d.y; } ) + 10,0]).range([margin.top, h - margin.bottom]);

		var xAxis = d3.svg.axis().scale(xScale).orient("bottom").tickSize(2);
		var yAxis = d3.svg.axis().scale(yScale).orient('left').tickSize(2);

		/* posição inicial dos pontos, para ani*/
		var circleInitialAttrs = {
			cx: function(d){return xScale(d)},
			r: 1,
			fill: 'red'
		};

		/* cores dos pontos (de acordo com nível de democracia)*/
		var demColors =  function(num){
			if(num > 9) return "#37566A";
			if(num > 8) return "#6E8493";
			if(num > 7) return "#A0C1D1";
			if(num > 6) return "#D2EAEF";
			if(num > 5) return '#FFEFB0';
			if(num > 4) return '#FFCC99';
			if(num > 3) return '#EF9575';
			if(num > 2) return '#FF7373';
			if(num > 1) return '#B61B1B'}

		var pressColors =  function(num){
			if(num > 55) return "#3C3636";
			if(num > 35) return "#e13c3c";
			if(num > 25) return "#FFCC99";
			if(num > 15) return "#FFEFB0";
			else return "#D2EAEF"}

		/* atributos dos pontos */
		var circleAttrs = {
			cx: function(d) { return xScale(d.x); },
			cy: function(d) { return yScale(d.y); },
			r: function(d){return 4},
			fill: function(d){return demColors(d.x)}
		};
		var circleAttrs2 = {
			cx: function(d) { return xScale(d.x); },
			cy: function(d) { return yScale(d.y); },
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
		     	y: function() { return yScale(d.y) - 15 ; }, 
		      	class: 'legenda'
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

		});

		/* busca dados para o gráfico de barras */
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

				if(nivelpress=="ok"&&niveldem=="hyb")console.log(item['nome']);
				imprensa[nivelpress][niveldem]++;

   				html = html+'<tr><td>'+item['nome']+'</td><td>'+item['x']+'</td><td>'+item['y']+'</td></tr>';	
			});
			html = html+'</tbody></table>';
			console.log(imprensa);

		});
		var data = [
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

		var x0 = d3.scale.ordinal()
		    .rangeRoundBands([0, width], .1);

		var x1 = d3.scale.ordinal();

		var y = d3.scale.linear()
		    .range([height, 0]);

		var color = d3.scale.ordinal()
		    .range(["#37566A", "#D2EAEF" , "#FFEFB0", "#e86363"]);

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

		var ageNames = d3.keys(data[0]).filter(function(key) { return key !== "imprensa"; });

		data.forEach(function(d) {
		    d.ages = ageNames.map(function(name) { return {name: name, value: +d[name]}; });
		    });

		x0.domain(data.map(function(d) { return d.imprensa; }));
		x1.domain(ageNames).rangeRoundBands([0, x0.rangeBand()]);
		y.domain([0, d3.max(data, function(d) { return d3.max(d.ages, function(d) { return d.value; }); })]);

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
			.data(data)
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
			

		/* gráfico brasil */
		var height2 = h*2/3;
		var width2 = $('#brasil-cont').width();

		var svg3 = d3.select('#brasil').append('svg').attr({
			width: width2,
			height: height2
		});

		var data;
		d3.json("databrasil.json", function(dataJson) {
			data = dataJson;

		/* desenha o gráfico, com as escalas */
		var xScale = d3.scale.linear().domain([2010, d3.max(data, function(d) { return d.x; } )]).range([margin.left, width2 - margin.right]);
		var yScale = d3.scale.linear().domain([113,38]).range([margin.top, height2 - margin.bottom]);

		var xAxis = d3.svg.axis().scale(xScale).orient("bottom").tickSize(2).tickFormat(d3.format("d"));
		var yAxis = d3.svg.axis().scale(yScale).orient('left').tickSize(2);

		/* posição inicial dos pontos, para ani*/
		var circleInitialAttrs = {
			cx: function(d){return xScale(d)},
			r: 1,
			fill: 'red'
		};
		
		/* cores dos pontos (de acordo com tipo de dados)*/
		var controlColors =  function(tipo){
			if(tipo =="d") return "#D2EAEF";
			if(tipo =="i") return "#b7e542"}

		/* atributos dos pontos */
		var circleAttrs = {
			cx: function(d) { return xScale(d.x); },
			cy: function(d) { return yScale(d.y); },
			r: function(d){return 4},
			fill: function(d){return controlColors(d.tipo)}
		};

		/* atributos dos pontos */
		var circleAttrs = {
			cx: function(d) { return xScale(d.x); },
			cy: function(d) { return yScale(d.y); },
			r: function(d){return 4},
			fill: function(d){return controlColors(d.tipo)}
		};

		var mouseOverHandler = function(d, i) {
			d3.select(this).attr({
		    	r: 10
		  	});
			svg3.append('text')
		    .attr({
		      	id: 'tlegenda',
		      	x: function() { return xScale(d.x) - 30 ; },
		     	y: function() { return yScale(d.y) - 15 ; }, 
		      	class: 'legenda'
		    })
		    .text(function() {
		    	return ['#'+d.y];
		    });
		};

		var mouseOutHandler = function(d, i) {
			d3.select(this).attr({
		    	r:4
		  	});
		  	d3.select('#tlegenda').remove();
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
			.text("Posição no ranking");

		var circles = svg3.selectAll('circle')
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
		});	
		/* gráfico brasil */
		var height2 = h*2/3;
		var width2 = $('#brasil-cont2').width();

		var svg4 = d3.select('#brasilindice').append('svg').attr({
			width: width2,
			height: height2
		});

		var data;
		d3.json("databrasilindice.json", function(dataJson) {
			data = dataJson;

		/* desenha o gráfico, com as escalas */
		var xScale = d3.scale.linear().domain([2010, d3.max(data, function(d) { return d.x; } )]).range([margin.left, width2 - margin.right]);
		var yScale = d3.scale.linear().domain([38,3]).range([margin.top, height2 - margin.bottom]);

		var xAxis = d3.svg.axis().scale(xScale).orient("bottom").tickSize(2).tickFormat(d3.format("d"));
		var yAxis = d3.svg.axis().scale(yScale).orient('left').tickSize(2);

		/* posição inicial dos pontos, para ani*/
		var circleInitialAttrs = {
			cx: function(d){return xScale(d)},
			r: 1,
			fill: 'red'
		};
		
		/* cores dos pontos (de acordo com tipo de dados)*/
		var controlColors =  function(tipo){
			if(tipo =="d") return "#D2EAEF";
			if(tipo =="i") return "#b7e542"}

		/* atributos dos pontos */
		var circleAttrs = {
			cx: function(d) { return xScale(d.x); },
			cy: function(d) { return yScale(d.y); },
			r: function(d){return 4},
			fill: function(d){return controlColors(d.tipo)}
		};

		/* atributos dos pontos */
		var circleAttrs = {
			cx: function(d) { return xScale(d.x); },
			cy: function(d) { return yScale(d.y); },
			r: function(d){return 4},
			fill: function(d){return controlColors(d.tipo)}
		};

		var mouseOverHandler = function(d, i) {
			d3.select(this).attr({
		    	r: 10
		  	});
			svg4.append('text')
		    .attr({
		      	id: 'tlegenda',
		      	x: function() { return xScale(d.x) - 30 ; },
		     	y: function() { return yScale(d.y) - 15 ; }, 
		      	class: 'legenda'
		    })
		    .text(function() {
		    	return [d.y];
		    });
		};

		var mouseOutHandler = function(d, i) {
			d3.select(this).attr({
		    	r:4
		  	});
		  	d3.select('#tlegenda').remove();
		};

		var xAxisGroup = svg4.append('g').attr({
			'class': 'axis',
			transform: 'translate(' + [0, height2-margin.bottom] + ')'
		}).call(xAxis);

		svg4.append("text")             
			.attr("transform",
			    "translate(" + (width2-100) + " ," + 
			                   (height2) + ")")
			.attr("y",-40)
			.attr("x",50)
			.style("text-anchor", "center")
			.text("Ano");

		var yAxisGroup = svg4.append('g').attr({
			'class': 'axis',
			transform: 'translate(' + [margin.left, 0] + ')'
		}).call(yAxis);

		svg4.append("g")
			.attr("class", "y axis")
			.call(yAxis)
			.append("text")
			.attr("transform", "rotate(-90)")
			.attr("y", 48)
			.attr("x",-25)
			.attr("dy", ".8em")
			.style("text-anchor", "end")
			.text("Pontuação");

		var circles = svg4.selectAll('circle')
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
		});	
	</script>
  </body>
</html>