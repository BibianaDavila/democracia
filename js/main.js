function animation(){
	var scroll = $(document).scrollTop();
	
	if($(window).width()>480){
		
	}
	var height = 100-scroll/3;
	//$('#home article').css('min-height',height+'vh');

	var sec1 = $('#prim').offset().top;
	var sec2 = $('#seg').offset().top;
	var sec3 = $('#ter').offset().top;
	var sec4 = $('#sex').offset().top;
	var sec5 = $('#qui').offset().top;
	var sec6 = $('#quar').offset().top;
	var sec7 = $('#set').offset().top;

	/* home */
	if(scroll<sec1){
		
	}
}
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
	if(num > 9) return "#37566A";
	if(num > 8) return "#6E8493";
	if(num > 7) return "#A0C1D1";
	if(num > 6) return "#a0dce9";
	if(num > 5) return '#FFEFB0';
	if(num > 4) return '#FFCC99';
	if(num > 3) return '#EF9575';
	if(num > 2) return '#FF7373';
	if(num > 1) return '#B61B1B'
}

function pressColors(num){
	if(num > 55) return "#3C3636";
	if(num > 35) return "#e13c3c";
	if(num > 25) return "#FFCC99";
	if(num > 15) return "#FFEFB0";
	else return "#a0dce9"
}

$(document).ready(function(){


});