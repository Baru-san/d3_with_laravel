 
@extends('layouts.app')
 
 
@section('body')
    class="bg-gray-500"
 
@endsection
 
 
@section('content')
 <div class="flex flex-wrap px-10 pt-36">
    <div id="barchart"></div>

    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script>
    // Data
    var data = [
        { name: 'Apples', value: 10 },
        { name: 'Oranges', value: 5 },
        { name: 'Bananas', value: 20 },
        { name: 'Grapes', value: 15 },
        {   name: 'bayam', value:25}
    ];

    // Create SVG element
    var svg = d3.select('#barchart')
                .append('svg')
                .attr('width', 500)
                .attr('height', 270);

    // Create scales
    var xScale = d3.scaleBand()
                    .domain(data.map(function(d) { return d.name; }))
                    .range([0, 400])
                    .padding(0.1);

    var yScale = d3.scaleLinear()
                    .domain([0, d3.max(data, function(d) { return d.value+5; })])
                    .range([0, 200]);

    // Create bars
    svg.selectAll('rect')
        .data(data)
        .enter()
        .append('rect')
        .attr('x', function(d) { return 50+xScale(d.name); })
        .attr('y', function(d) { return 210 - yScale(d.value); })
        .attr('width', xScale.bandwidth())
        .attr('height', function(d) { return yScale(d.value); })
        .attr('fill', '#0099cc');

// Create labels for bars
svg.selectAll('text')
     .data(data)
     .enter()
     .append('text')
     .text(function(d) { return d.value; })
     .attr('x', function(d) { return 50 + xScale(d.name) + xScale.bandwidth() / 2; })
     .attr('y', function(d) { return 200 - yScale(d.value); })
     .attr('dy', '1em')
     .attr('text-anchor', 'middle')
     .attr('fill', '#ffffff');

  // Create x-axis
  var xAxis = d3.axisBottom(xScale);
  svg.append('g')
     .attr('transform', 'translate(50, 210)')
     .call(xAxis)
     .selectAll('text')
     .attr('transform', 'rotate(-90)')
     .attr('x', -10)
     .attr('y', 0)
     .attr('dy', '.35em')
     .style('text-anchor', 'end');

  // Create y-axis
  var yAxis = d3.axisLeft(yScale);
  svg.append('g')
        .attr('transform', 'translate(50,10)')
     .call(yAxis);
    </script>
</div>
 
<!-- End Hero Section -->
 
 
 
@endsection
 
 