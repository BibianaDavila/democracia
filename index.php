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
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- estilos (css+bootstrap) -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="favicon.ico" />

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
	<div class="container">
		<section id="home">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h1>Jornalismo &<br/>democracia</h1>
	  				<div class="divider"></div>

	  				<p>
	  					Um espectro ronda o jornalismo — o espectro do autoritarismo. É o que aponta o <a href="https://rsf.org/pt/o-ranking-mundial-da-liberdade-de-imprensa-2018-o-odio-ao-jornalismo-ameaca-democracias">Ranking Mundial da Liberdade de Imprensa de 2018</a>, do <a href="https://rsf.org/pt/">Repórteres Sem Fronteira (RSF)</a>, que indica o crescimento de um sentimento de ódio dirigido à jornalistas em todo mundo, fomentado principalmente por líderes autoritários. 
	  				</p>
	  				<p>
	  					A hostilidade em relação à mídia é vista como uma ameaça real à democracia, uma vez que o direito à informação é uma das bases de regimes democráticos. Entretanto, à medida que líderes eleitos como Donald Trump, nos Estados Unidos, Rodrigo Duterte, nas Filipinas e Milos Zeman, na República Tcheca, entre outros, atacam periodicamente jornalistas como inimigos de seus governos, fica claro que a relação entre liberdade de imprensa e democracia ainda é vista como insignificante para muitas pessoas. 
	  				</p>
	  				<p>
	  					Neste sentido, buscamos os dados do <a href="https://infographics.economist.com/2018/DemocracyIndex/"><i>Democracy Index</i></a>, elaborado anualmente pela revista <a href="https://www.economist.com/">The Economist</a>, que calcula o índice de democracia para 167 países, a partir de mais de 60 indicadores diferentes; e os dados da própria Repórteres Sem Fronteira, sobre liberdade de imprensa, que avaliam 180 países, através de questionários e dados sobre violência contra profissionais da área. 
	  				</p>
	  			</div>
	  		</div>
		</section>
		<section id="correlacao">
			<div class="row">
				<div class="col-md-12 text-center"><h3>Democracia <i>versus</i> liberdade de imprensa</h3></div>
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
	  			<div class="col-md-12">
	  				<p>
	  					O índice de democracia varia de zero a dez, sendo que o zero corresponde a um regime plenamente autoritário e o 10 a um regime plenamente democrático. Já o índice de liberdade de imprensa varia de zero a 100, com o zero correspondendo à liberdade completa (nenhuma ameaça aos repórteres) e 100 a censura total e nenhuma garantia de segurança aos jornalistas na região. No gráfico acima, é possível perceber uma grande correlação entre os dois indicadores, com um grau de 0.7 de correspondência entre eles. 
	  				</p>
	  				<p>
	  					Por outro lado, também é possível observar 


	  					<table><thead><tr><th>nome</th><th>democracia</th><th>liberdade</th></tr></thead><tbody><tr><td>Noruega</td><td>9.87</td><td>7.6</td></tr><tr><td>Suécia</td><td>9.39</td><td>8.27</td></tr><tr><td>Holanda</td><td>8.89</td><td>11.28</td></tr><tr><td>Finlândia</td><td>9.03</td><td>8.92</td></tr><tr><td>Suíça</td><td>9.03</td><td>12.13</td></tr><tr><td>Jamaica</td><td>7.29</td><td>12.73</td></tr><tr><td>Bélgica</td><td>7.78</td><td>12.75</td></tr><tr><td>Nova Zelândia</td><td>9.26</td><td>13.98</td></tr><tr><td>Dinamarca</td><td>9.22</td><td>10.36</td></tr><tr><td>Costa Rica</td><td>7.88</td><td>11.93</td></tr><tr><td>Áustria</td><td>8.42</td><td>13.47</td></tr><tr><td>Estônia</td><td>7.79</td><td>13.55</td></tr><tr><td>Islândia</td><td>9.58</td><td>13.03</td></tr><tr><td>Portugal</td><td>7.84</td><td>15.77</td></tr><tr><td>Alemanha</td><td>8.61</td><td>14.97</td></tr><tr><td>Irlanda</td><td>9.15</td><td>14.08</td></tr><tr><td>Luxemburgo</td><td>8.81</td><td>14.72</td></tr><tr><td>Canadá</td><td>9.15</td><td>16.53</td></tr><tr><td>Austrália</td><td>9.09</td><td>16.02</td></tr><tr><td>Uruguai</td><td>8.12</td><td>17.43</td></tr><tr><td>Suriname</td><td>6.76</td><td>16.07</td></tr><tr><td>Gana</td><td>6.69</td><td>17.95</td></tr><tr><td>Letônia</td><td>7.25</td><td>18.62</td></tr><tr><td>Chipre</td><td>7.59</td><td>19.79</td></tr><tr><td>Namíbia</td><td>6.31</td><td>17.08</td></tr><tr><td>Eslováquia</td><td>7.16</td><td>15.51</td></tr><tr><td>África do Sul</td><td>7.24</td><td>20.12</td></tr><tr><td>Cabo Verde</td><td>7.88</td><td>18.02</td></tr><tr><td>Espanha</td><td>8.08</td><td>18.69</td></tr><tr><td>Eslovênia</td><td>7.5</td><td>21.7</td></tr><tr><td>França</td><td>7.8</td><td>22.24</td></tr><tr><td>República Tcheca</td><td>7.62</td><td>16.91</td></tr><tr><td>Lituânia</td><td>7.41</td><td>21.37</td></tr><tr><td>Chile</td><td>7.84</td><td>20.53</td></tr><tr><td>Trinidad e Tobago</td><td>7.04</td><td>20.62</td></tr><tr><td>Reino Unido</td><td>8.53</td><td>22.26</td></tr><tr><td>Burkina Faso</td><td>4.75</td><td>23.85</td></tr><tr><td>Taiwan</td><td>7.73</td><td>24.37</td></tr><tr><td>Coréia do Sul</td><td>8</td><td>27.61</td></tr><tr><td>Romênia</td><td>6.44</td><td>24.46</td></tr><tr><td>Estados Unidos</td><td>7.98</td><td>23.88</td></tr><tr><td>Itália</td><td>7.98</td><td>26.26</td></tr><tr><td>Comores</td><td>3.71</td><td>24.33</td></tr><tr><td>Senegal</td><td>6.15</td><td>26.72</td></tr><tr><td>Argentina</td><td>6.96</td><td>25.07</td></tr><tr><td>Papua Nova Guiné</td><td>6.03</td><td>25.07</td></tr><tr><td>Madagascar</td><td>5.11</td><td>26.71</td></tr><tr><td>Guiana</td><td>3.14</td><td>26.8</td></tr><tr><td>Maurícia</td><td>8.22</td><td>26.67</td></tr><tr><td>Fiji</td><td>5.85</td><td>28.64</td></tr><tr><td>Polônia</td><td>6.67</td><td>26.47</td></tr><tr><td>República Dominicana</td><td>6.66</td><td>26.76</td></tr><tr><td>Haiti</td><td>4.03</td><td>26.36</td></tr><tr><td>Georgia</td><td>5.93</td><td>27.76</td></tr><tr><td>Bósnia Herzegovina</td><td>4.87</td><td>27.83</td></tr><tr><td>Níger</td><td>3.76</td><td>27.21</td></tr><tr><td>Malawi</td><td>5.49</td><td>28.97</td></tr><tr><td>Malta</td><td>8.15</td><td>24.76</td></tr><tr><td>El Salvador</td><td>6.43</td><td>27.24</td></tr><tr><td>Japão</td><td>7.88</td><td>29.44</td></tr><tr><td>Lesoto</td><td>6.64</td><td>28.78</td></tr><tr><td>Croácia</td><td>6.63</td><td>29.59</td></tr><tr><td>Hong Kong</td><td>6.31</td><td>29.46</td></tr><tr><td>Mongólia</td><td>6.5</td><td>28.95</td></tr><tr><td>Mauritânia</td><td>3.82</td><td>26.49</td></tr><tr><td>Hungria</td><td>6.64</td><td>29.01</td></tr><tr><td>Grécia</td><td>7.29</td><td>30.89</td></tr><tr><td>Albânia</td><td>5.98</td><td>29.92</td></tr><tr><td>Sérvia</td><td>6.41</td><td>28.05</td></tr><tr><td>Serra Leoa</td><td>4.66</td><td>30.73</td></tr><tr><td>Armênia</td><td>4.11</td><td>30.38</td></tr><tr><td>Moldávia</td><td>5.94</td><td>30.41</td></tr><tr><td>Guiné Bissau</td><td>1.98</td><td>30.09</td></tr><tr><td>Benin</td><td>5.61</td><td>30.32</td></tr><tr><td>Togo</td><td>3.05</td><td>30.75</td></tr><tr><td>Israel</td><td>7.79</td><td>31.01</td></tr><tr><td>Peru</td><td>6.49</td><td>30.98</td></tr><tr><td>Libéria</td><td>5.23</td><td>31.12</td></tr><tr><td>Nicarágua</td><td>4.66</td><td>31.01</td></tr><tr><td>Panamá</td><td>7.08</td><td>32.12</td></tr><tr><td>Equador</td><td>6.02</td><td>33.64</td></tr><tr><td>Tanzânia</td><td>5.47</td><td>30.65</td></tr><tr><td>Butão</td><td>5.08</td><td>30.73</td></tr><tr><td>Timor Leste</td><td>7.19</td><td>32.82</td></tr><tr><td>Quênia</td><td>5.11</td><td>31.2</td></tr><tr><td>Tunísia</td><td>6.32</td><td>32.22</td></tr><tr><td>Moçambique</td><td>4.02</td><td>31.05</td></tr><tr><td>Líbano</td><td>4.72</td><td>33.01</td></tr><tr><td>Ucrânia</td><td>5.69</td><td>33.19</td></tr><tr><td>Brasil</td><td>6.86</td><td>33.58</td></tr><tr><td>Montenegro</td><td>5.69</td><td>33.65</td></tr><tr><td>Guiné</td><td>3.14</td><td>33.15</td></tr><tr><td>Kuwait</td><td>3.85</td><td>33.61</td></tr><tr><td>Nepal</td><td>5.18</td><td>33.02</td></tr><tr><td>Paraguai</td><td>6.31</td><td>35.64</td></tr><tr><td>Gabão</td><td>3.61</td><td>34.83</td></tr><tr><td>Macedônia</td><td>5.57</td><td>35.74</td></tr><tr><td>Bolívia</td><td>5.49</td><td>33.88</td></tr><tr><td>Bulgária</td><td>7.03</td><td>35.01</td></tr><tr><td>República Centro Africana</td><td>1.52</td><td>36.12</td></tr><tr><td>Zâmbia</td><td>5.68</td><td>36.48</td></tr><tr><td>Guatemala</td><td>5.86</td><td>39.33</td></tr><tr><td>Uganda</td><td>5.09</td><td>35.94</td></tr><tr><td>Afeganistão</td><td>2.55</td><td>39.46</td></tr><tr><td>Nigéria</td><td>4.44</td><td>39.69</td></tr><tr><td>Angola</td><td>3.62</td><td>40.42</td></tr><tr><td>Gâmbia</td><td>4.06</td><td>46.7</td></tr><tr><td>Chad</td><td>1.5</td><td>39.66</td></tr><tr><td>Indonésia</td><td>6.39</td><td>39.93</td></tr><tr><td>Qatar</td><td>3.19</td><td>39.83</td></tr><tr><td>Zimbabwe</td><td>3.16</td><td>41.44</td></tr><tr><td>Omã</td><td>3.04</td><td>40.46</td></tr><tr><td>Emirados Árabes Unidos</td><td>2.69</td><td>39.39</td></tr><tr><td>Camarões</td><td>3.61</td><td>41.59</td></tr><tr><td>Colômbia</td><td>6.67</td><td>41.47</td></tr><tr><td>Sri Lanka</td><td>6.48</td><td>44.34</td></tr><tr><td>Jordânia</td><td>3.87</td><td>43.24</td></tr><tr><td>Filipinas</td><td>6.71</td><td>41.08</td></tr><tr><td>Palestina</td><td>4.46</td><td>42.9</td></tr><tr><td>Marrocos</td><td>4.87</td><td>42.42</td></tr><tr><td>Algéria</td><td>3.56</td><td>42.83</td></tr><tr><td>Myanmar</td><td>3.83</td><td>41.82</td></tr><tr><td>Índia</td><td>7.23</td><td>42.94</td></tr><tr><td>Paquistão</td><td>4.26</td><td>43.55</td></tr><tr><td>Tailândia</td><td>4.63</td><td>44.69</td></tr><tr><td>Honduras</td><td>5.72</td><td>43.75</td></tr><tr><td>Camboja</td><td>3.63</td><td>42.07</td></tr><tr><td>Venezuela</td><td>3.87</td><td>42.94</td></tr><tr><td>Malásia</td><td>6.54</td><td>46.89</td></tr><tr><td>Bangladesh</td><td>5.43</td><td>48.36</td></tr><tr><td>México</td><td>6.41</td><td>48.97</td></tr><tr><td>Rússia</td><td>3.17</td><td>49.45</td></tr><tr><td>Tajiquistão</td><td>1.93</td><td>50.27</td></tr><tr><td>Etiópia</td><td>3.42</td><td>50.34</td></tr><tr><td>Singapura</td><td>6.32</td><td>51.10</td></tr><tr><td>República democrática do Congo</td><td>3.25</td><td>52.67</td></tr><tr><td>Belarus</td><td>3.13</td><td>52.43</td></tr><tr><td>Ruanda</td><td>3.19</td><td>54.11</td></tr><tr><td>Turquia</td><td>4.88</td><td>52.98</td></tr><tr><td>Cazasquistão</td><td>3.06</td><td>54.01</td></tr><tr><td>Burundi</td><td>2.33</td><td>55.78</td></tr><tr><td>Iraque</td><td>4.09</td><td>54.03</td></tr><tr><td>Egito</td><td>3.36</td><td>55.78</td></tr><tr><td>Líbia</td><td>2.32</td><td>56.81</td></tr><tr><td>Azerbaijão</td><td>2.65</td><td>56.4</td></tr><tr><td>Irã</td><td>2.45</td><td>65.12</td></tr><tr><td>Uzbequistão</td><td>1.95</td><td>66.11</td></tr><tr><td>Bahrain</td><td>2.71</td><td>58.88</td></tr><tr><td>Iêmen</td><td>2.07</td><td>65.8</td></tr><tr><td>Árabia Saudita</td><td>1.93</td><td>66.02</td></tr><tr><td>Laos</td><td>2.37</td><td>66.41</td></tr><tr><td>Guiné Equatorial</td><td>1.81</td><td>66.47</td></tr><tr><td>Cuba</td><td>3.31</td><td>71.75</td></tr><tr><td>Djibouti</td><td>2.76</td><td>70.54</td></tr><tr><td>Sudão</td><td>2.15</td><td>73.56</td></tr><tr><td>Vietnã</td><td>3.08</td><td>73.96</td></tr><tr><td>China</td><td>3.1</td><td>77.66</td></tr><tr><td>Síria</td><td>1.43</td><td>81.49</td></tr><tr><td>Turcomenistão</td><td>1.72</td><td>84.19</td></tr><tr><td>Eritréia</td><td>2.37</td><td>84.24</td></tr><tr><td>Coréia do Norte</td><td>1.08</td><td>84.98</td></tr></tbody></table>
	  				</p>
	  			</div>
	  		</div>
		</section>
	</div>

	<!--========= gráficos ===========-->
	<script>
		var width = $('#correlac-cont').width();
		var w = width;
		var h = window.innerHeight-100;
		var margin = {top: 50, right: 50, bottom: 50, left: 70};
		var radius = 10;
		var dataBox = document.getElementById("data-container")

		var svg = d3.select('#correlac').append('svg').attr({
			width: w,
			height: h
		});


		/* busca dados para o gráfico */
		d3.json("data2017.json", function(dataJson) {
			
			var html = '<table><thead><tr><th>nome</th><th>democracia</th><th>liberdade</th></tr></thead><tbody>';

			$.each(dataJson, function(i, item) {
   				html = html+'<tr><td>'+item['nome']+'</td><td>'+item['x']+'</td><td>'+item['y']+'</td></tr>';	
			});
			html = html+'</tbody></table>';
			console.log(html);
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
			.style("text-anchor", "center")
			.text("Índice de democracia");

		var yAxisGroup = svg.append('g').attr({
			'class': 'axis',
			transform: 'translate(' + [margin.left, 0] + ')'
		}).call(yAxis);

		svg.append("text")
			.attr("transform", "rotate(-90)")
			.attr("y", 5)
			.attr("x",0 - (h / 2))
			.attr("dy", "1em")
			.style("text-anchor", "middle")
			.text("Ataques à liberdade de imprensa (índice)"); 


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
					
					$('.legenda-din').removeClass('active');
					$('.botoes li').removeClass('active');

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
	</script>
  </body>
</html>