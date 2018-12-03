function correlation(data) {
    /*
    Pearson Correlation Coefficient: (https://en.wikipedia.org/wiki/Pearson_correlation_coefficient)
    Code source: https://bl.ocks.org/NGuernse/d166177625d0cb0f6e3ebfaf2008725c 

    r = Σ (xy) / sqrt [ ( Σ x^2 ) * ( Σ y^2 ) ]
    r = Σ (xi - xbar) * (yi - ybar) / sqrt[ ( Σ (xi-xbar)^2 ) * ( Σ (yi-ybar)^2 )]
    r = A / B

    where Σ is the summation symbol, x = xi - x, xi is the x value for observation i, x is the mean x value, y = yi - y, yi is the y value for observation i, and y is the mean y value.
    */

    var x = [];
    var y = [];
    data.forEach( (d) => {
        x.push(parseInt(d.x));
        y.push(parseInt(100-d.y));
    });

    // CALCULATE X and Y Means
    var test = x.reduce((function(sum, value) {
        return sum + value;
    }));

    var x_mean = test/ x.length; 

    var y_mean = y.reduce((function(sum, value) {
        return sum + value;
    })) / y.length;
    // console.log("X Mean = " + x_mean + "| Y Mean = " + y_mean);
    // CALCULATE A = Σ (xi - xbar) * (yi - ybar)
    var A = 0;
    for(let i = 0; i < x.length; i++) {
        A += (x[i]-x_mean)*(y[i]-y_mean);
    }
    // console.log("A = ", A);

    // CALCULATE B = sqrt[ ( Σ (xi-xbar)^2 ) * ( Σ (yi-ybar)^2 )]
    var sum_sq_x = 0;
    x.forEach(function(el) {
        sum_sq_x += Math.pow( (el - x_mean), 2); //(xi-x_bar)^2
    })

    var sum_sq_y = 0;
    y.forEach(function(el) {
        sum_sq_y += Math.pow( (el - y_mean), 2); //(yi-x_bar)^2
    })

    // console.log("Sum Square X = " + sum_sq_x + "| Sum Square Y = " + sum_sq_y);
    var B = Math.sqrt(sum_sq_x*sum_sq_y);
    // console.log("B = ", B);
    // CALCULATE and Return correlation: R = A / B =
    // r = Σ (xi - xbar) * (yi - ybar) / sqrt[ ( Σ (xi-xbar)^2 ) * ( Σ (yi-ybar)^2 )] = 
    // r = Σ (xy) / sqrt [ ( Σ x^2 ) * ( Σ y^2 ) ]
    return A / B;
}

/* cores dos pontos (de acordo com nível de democracia)*/
function demColors(num){
    if(num > 9) return "#13536b";
    if(num > 8) return "#13536b";
    if(num > 7) return "#68dade";
    if(num > 6) return "#68dade";
    if(num > 5) return '#ffe16d';
    if(num > 4) return '#ffe16d';
    if(num > 3) return '#ff3b3b';
    if(num > 2) return '#ff3b3b';
    if(num > 1) return '#ff3b3b'
}

function pressColors(num){
    if(num > 55) return "#3C3636";
    if(num > 35) return "#a32d2d";
    if(num > 25) return "#ff3b3b";
    if(num > 15) return "#ffe16d";
    else return "#68dade"
}
$(document).ready(function(){

    $('#nav-icon').click(function(){
        $(this).toggleClass('open');
        $('#menu').toggleClass('open');
    });

    var width = $('#killed-cont').width();
    var height = window.innerHeight-100;

    if(height>width+width/2) height=height-height/5;
    var margin = {top: 20, right: 10, bottom: 5, left: 0};
    var radius = 10;
    var dataBox = document.getElementById("data-container")

    var svg = d3.select('#killed').append('svg').attr({
        width: width+10,
        height: height+100
    });

    var w = $('#correlac-cont').width();
    var h = window.innerHeight-100;
    if(h>w+w/2) h=h-h/5;
    if(h>500)h=500;

    var svgpontos = d3.select('#correlac').append('svg').attr({
        width: w+10,
        height: h+25
    });

    var year = ["17","16","15","14","13"];

    d3.json("data.json", function(dataJson) {
        data = dataJson;
        var data_killed = [];

        $.each(data, function(index,item){
            data[index]['y'] = data[index]['rsf'+"17"];
            data[index]['x'] = data[index]['dem'+"17"];

            /* jornalistas assassinados */
            $.each(year, function(i,ano){
                if(!data_killed[i])data_killed[i] = {};
                data_killed[i]['year']='20'+ano;

                var demNum = Math.floor(parseInt(item['dem'+ano]));
                console.log('run');
                if(item['killed'+ano]!=0){
                    if(data_killed[i]['total']){
                        data_killed[i]['total']+=parseInt(item['killed'+ano]);
                    }else{
                        data_killed[i]['total']=parseInt(item['killed'+ano]);
                    }
                    if(demNum>=6){
                        if(data_killed[i]['ind'+demNum]){
                            data_killed[i]['ind'+demNum] += parseInt(item['killed'+ano]);
                        }else{
                            data_killed[i]['ind'+demNum] = parseInt(item['killed'+ano]);
                        }
                        if(data_killed[i]['totaldem']){
                            data_killed[i]['totaldem']+= parseInt(item['killed'+ano]);
                        }else{
                            data_killed[i]['totaldem']= parseInt(item['killed'+ano]);
                        }
                    }
                }else{
                     if(!data_killed[i]['ind'+demNum])data_killed[i]['ind'+demNum] = 0;   
                }
            });
        });
        console.log(data_killed);
        var tr;
        $.each(data_killed, function(i,item){
            tr = "<tr><td>"+item['year']+"</td>";
            tr = tr+"<td>"+item['total']+"</td>";
            tr = tr+"<td>"+item['totaldem']+"</td>";
            tr = tr+"<td>"+(item['totaldem']*100/item['total']).toFixed(1)+"%</td></tr>";
            $('#killed-tab tbody').append(tr);
        });
        data_killed=data_killed.sort(function(a, b){return a.year-b.year});

        var parse = d3.time.format("%Y").parse;

        // Transpose the data into layers
        var dataset = d3.layout.stack()(["ind6", "ind7", "ind8", "ind9"].map(function(k) {
            return data_killed.map(function(d) {
                return {x: parse(d.year), y: +d[k]};
            });
        }));

        // Set x, y and colors
        var x = d3.scale.ordinal()
          .domain(dataset[0].map(function(d) { return d.x; }))
          .rangeRoundBands([20, width], 0.02);

        var y = d3.scale.linear()
          .domain([0, 35])
          .range([height, 0]);

        var colors = ["#ff1724eb", "#ff1724eb", "#ff172478", "#ff172478"];

        // Define and draw axes
        var yAxis = d3.svg.axis()
            .scale(y)
            .orient("left")
            .ticks(14)
            .tickSize(-width,0,0)
            .tickFormat( function(d) { return d } );

        var xAxis = d3.svg.axis()
            .scale(x)
            .orient("bottom")
            .tickFormat(d3.time.format("%Y"));

        svg.append("g")
            .attr("class", "y axis")
            .attr("transform", "translate(20,0)")
            .call(yAxis);

        svg.append("g")
            .attr("class", "x axis")
            .attr("transform", "translate(0," + height + ")")
            .call(xAxis);

        // Create groups for each series, rects for each segment 
        var groups = svg.selectAll("g.cost")
            .data(dataset)
            .enter().append("g")
            .attr("class", "cost")
            .style("fill", function(d, i) { return colors[i]; });

        var rect = groups.selectAll("rect")
            .data(function(d) { return d; })
            .enter()
            .append("rect")
            .attr("x", function(d) { return x(d.x); })
            .attr("y", function(d) { return y(d.y0 + d.y); })
            .attr("height", function(d) { return y(d.y0) - y(d.y0 + d.y); })
            .attr("width", x.rangeBand())


        /* desenha o gráfico, com as escalas */
        var xScale = d3.scale
            .linear()
            .domain([0.01,10.5])
            .range([50, w], 0.02);

        var yScale = d3.scale.linear().domain([10.9,0]).range([margin.top, h]);

        var xAxis = d3.svg.axis()
            .scale(xScale)
            .orient("bottom")
            .tickSize(2);

        var yAxis = d3.svg.axis()
            .scale(yScale)
            .orient('left')
            .ticks(10)
            .tickSize(-w,10.2,0);

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
            svgpontos.append('text')
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


            
        svgpontos.append("g")
            .attr("class", "x axis")
            .attr("transform", "translate(0," + h + ")")
            .call(xAxis);


        svgpontos.append("text")             
            .attr("transform",
                "translate(" + (w-240) + " ," + 
                               (h) + ")")
            .attr("y",-10)
            .attr("x",60)
            .style("text-anchor", "center")
            .text("Índice de democracia");

        svgpontos.append("g")
            .attr("class", "y axis")
            .attr("transform","translate(50,0)")
            .call(yAxis)
            .append("text")
            .attr("transform", "rotate(-90)")
            .attr("y", 5)
            .attr("x",-25)
            .attr("dy", ".8em")
            .style("text-anchor", "end")
            .text("Liberdade de imprensa");

        var circles = svgpontos.selectAll('circle')
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
            
    });
    var data2 = [
        {
            "imprensa": "Boa",
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
        width_bar = $('#barras-cont').width(),
        height_aux =window.innerHeight-100,
        height_bar = height_aux/2;


    var x0 = d3.scale.ordinal().rangeRoundBands([0, width_bar], .1);

    var x1 = d3.scale.ordinal();

    var y = d3.scale.linear().range([height_bar, 0]);

    var color = d3.scale.ordinal().range(["#13536b", "#68dade" , "#ffe16d", "#ff3b3b"]);

    var xAxis = d3.svg.axis()
        .scale(x0)
        .tickSize(2)
        .orient("bottom");

    var yAxis = d3.svg.axis()
        .scale(y)
        .orient("left")
        .tickSize(1)
        .ticks(15)
        .tickSize(-width_bar,0,0)
        .tickFormat(d3.format(".2s"));

    var svg2 = d3.select("#barras").append("svg")
        .attr("width", width_bar + margin.left + margin.right)
        .attr("height", height_bar + margin.top + margin.bottom)
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
        .attr("transform", "translate(0," + height_bar + ")")
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
        .attr("height", function(d) { return height_bar - y(d.value); })
        .style("fill", function(d) { return color(d.name); });
});
