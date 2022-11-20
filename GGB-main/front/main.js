let ctx = document.getElementById('chart1').getContext('2d');
    let myChart = new Chart(ctx,{
      type : 'line',
      data : {
        labels : ['1일','2일','3일','4일','5일','6일','7일'],
        datasets : [{
          label : '지출',
          data : [2000,1452,1100,1300,1852,3021,2400],
          fill:true,
          lineTension:0, //선 곡선모양 0이면 직선
          pointStyle: 'circle', //포인터 스타일 변경
          pointBorderWidth: 2, //포인터 보더사이즈
          pointRadius: 6, //포인터 반경 범위 
          borderColor: '#7FB7FF',
          backgroundColor:'rgba(30,144,255,0.3)',
        }]
      },

      options : {
        title : {
          display : true,
          text : '일주일간 지출액',
          fontSize : 24,
          fontColor: 'black'
        },
        legend: {
          labels: {
            fontColor:"black",
            fontSize: 18
          }
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize : 200,
              fontColor : "rgba(0,0,0,0.6)",
              fontSize : 14,

            }
          }]
        }
      }
    })