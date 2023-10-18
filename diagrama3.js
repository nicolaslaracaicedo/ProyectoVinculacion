google.charts.load('current', {'packages':['gantt'], 'language': 'es'});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Task ID');
  data.addColumn('string', 'Task Name');
  data.addColumn('date', 'Start Date');
  data.addColumn('date', 'End Date');
  data.addColumn('number', 'Duration');
  data.addColumn('number', 'Percent Complete');
  data.addColumn('string', 'Dependencies');

  data.addRows([
    ['Tarea1', 'Actividad 1', new Date(2025, 9, 1), new Date(2025, 9, 30), null, 100, null],
    ['Tarea2', 'Actividad 2', new Date(2025, 10, 1), new Date(2025, 10, 30), null, 100, null],
    ['Tarea3', 'Actividad 3', new Date(2025, 11, 1), new Date(2025, 11, 31), null, 100, null]
  ]);

  var options = {
    height: data.getNumberOfRows() * 30 + 60,
    gantt: {
      trackHeight: 30,
      labelMaxWidth: 300,
      barHeight: 20,
      monthLabelFormat: '%b %Y',
      scaleType: 'all'
    }
  };

  var chart = new google.visualization.Gantt(document.getElementById('chart_div3'));
  
  function resize() {
    chart.draw(data, options);
  }

  // Llama a resize justo después de crear el gráfico.
  resize();

  // Redibuja el gráfico cada vez que se redimensiona la ventana.
  window.addEventListener('resize', resize);
}
