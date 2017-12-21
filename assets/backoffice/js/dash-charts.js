/*** First Chart in Dashboard page ***/

	// $(document).ready(function() {
	// 	info = new Highcharts.Chart({
	// 		chart: {
	// 			renderTo: 'load',
	// 			margin: [0, 0, 0, 0],
	// 			backgroundColor: null,
 //                plotBackgroundColor: 'none',
							
	// 		},
			
	// 		title: {
	// 			text: null
	// 		},

	// 		tooltip: {
	// 			formatter: function() { 
	// 				return this.point.name +': '+ this.y +' %';
						
	// 			} 	
	// 		},
	// 	    series: [
	// 			{
	// 			borderWidth: 2,
	// 			borderColor: '#F1F3EB',
	// 			shadow: false,	
	// 			type: 'pie',
	// 			name: 'Income',
	// 			innerSize: '65%',
	// 			data: [
	// 				{ name: 'load percentage', y: 1, color: '#b2c831' },
	// 				{ name: 'rest', y: 0, color: '#3d3d3d' }
	// 			],
	// 			dataLabels: {
	// 				enabled: false,
	// 				color: '#000000',
	// 				connectorColor: '#000000'
	// 			}
	// 		}]
	// 	});
		
	// });

/*** second Chart in Dashboard page ***/

	// $(document).ready(function() {
	// 	info = new Highcharts.Chart({
	// 		chart: {
	// 			renderTo: 'space',
	// 			margin: [0, 0, 0, 0],
	// 			backgroundColor: null,
 //                plotBackgroundColor: 'none',
							
	// 		},
			
	// 		title: {
	// 			text: null
	// 		},

	// 		tooltip: {
	// 			formatter: function() { 
	// 				return this.point.name +': '+ this.y +' %';
						
	// 			} 	
	// 		},
	// 	    series: [
	// 			{
	// 			borderWidth: 2,
	// 			borderColor: '#F1F3EB',
	// 			shadow: false,	
	// 			type: 'pie',
	// 			name: 'SiteInfo',
	// 			innerSize: '65%',
	// 			data: [
	// 				{ name: 'Used', y: 65.0, color: '#fa1d2d' },
	// 				{ name: 'Rest', y: 35.0, color: '#3d3d3d' }
	// 			],
	// 			dataLabels: {
	// 				enabled: false,
	// 				color: '#000000',
	// 				connectorColor: '#000000'
	// 			}
	// 		}]
	// 	});
		
	// });



	$(document).ready(function(){
	
	var credsAvail = 100;
	var tetoBinario = $('#tetoBinario').data('value');

	//data
	var pieData = [
	   {
	    	value: tetoBinario,
	     //value: 10,
	    	color: '#00a69c',
	    	label: 'Credits Earned'
	   }, 
	   {
	    	value: credsAvail - tetoBinario,
	    	//value: 20,
		    color: '#E3E3E3',
	    	label: 'Total Credits Available'
	   }
	];

	   //activate chart.js  
	  var context = document.getElementById('tetoBinario').getContext('2d');
	  //var context = $('#tetoBinario').get(0).getContext("2d");
	  //use data and options
	  var skillsChart = new Chart(context).Doughnut(pieData, {
	    
	    //options defined
	  	showTooltips: false,
	    //segmentShowStroke: false,
	    responsive: true,
	    percentageInnerCutout: 80,
	    //animation: false,
	    animationEasing: 'easeOutQuart',
	    animateScale: false,
	    //animationSteps: 80,
	    
	    /*onAnimationComplete: function() {
	      
	      var canvasWidthvar = $('#tetoBinario').width();
	      var canvasHeight = $('#tetoBinario').height();
	      var constant = 114;
	      var fontsize = (canvasHeight/constant).toFixed(2);
	      //ctx.font="2.8em Verdana";
	      context.font=fontsize +"em Verdana";
	      context.textBaseline="middle"; 
	      var total = 0;
	      $.each(pieData,function() {
	          total += parseInt(this.value,10);
	      });
	      var tpercentage = ((pieData[0].value/total)*100).toFixed(2)+"%";
	      var textWidth = context.measureText(tpercentage).width;
	      
	       var txtPosx = Math.round((canvasWidthvar - textWidth)/2);
	        context.fillText(tpercentage, txtPosx, canvasHeight/2);
	    }*/ //onAnimationComplete	  
	  
	  });


	var tetoDireta = $('#tetoDireta').data('value');

	//data
	var pieData2 = [
	   {
	    	value: tetoDireta,
	     //value: 10,
	    	color: '#00a69c',
	    	label: 'Credits Earned'
	   }, 
	   {
	    	value: credsAvail - tetoDireta,
	    	//value: 20,
		    color: '#E3E3E3',
	    	label: 'Total Credits Available'
	   }
	];

	   //activate chart.js  
	  var context2 = document.getElementById('tetoDireta').getContext('2d');
	  //var context2 = $('#tetoDireta').get(0).getContext("2d");
	  //use data and options
	  var skillsChart = new Chart(context2).Doughnut(pieData2, {
	    
	    //options defined
	  	showTooltips: false,
	    //segmentShowStroke: false,
	    responsive: true,
	    percentageInnerCutout: 80,
	    //animation: false,
	    animationEasing: 'easeOutQuart',
	    animateScale: false,
	    //animationSteps: 80,
	    
	    /*onAnimationComplete: function() {
	      
	      var canvasWidthvar = $('#tetoDireta').width();
	      var canvasHeight = $('#tetoDireta').height();
	      var constant = 114;
	      var fontsize = (canvasHeight/constant).toFixed(2);
	      //ctx.font="2.8em Verdana";
	      context2.font=fontsize +"em Verdana";
	      context2.textBaseline="middle"; 
	      var total = 0;
	      $.each(pieData,function() {
	          total += parseInt(this.value,10);
	      });
	      var tpercentage = ((pieData[0].value/total)*100).toFixed(2)+"%";
	      var textWidth = context2.measureText(tpercentage).width;
	      
	       var txtPosx = Math.round((canvasWidthvar - textWidth)/2);
	        context2.fillText(tpercentage, txtPosx, canvasHeight/2);
	    }*/ //onAnimationComplete	  
	  
	  });
	  
	});

