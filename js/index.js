showSlides(1);
setInterval(function(){plusSlides(1);},5000);

$.ajax({
    type: "GET",
    dataType: "json",
    url: "../data/produccion.json",
    success: function(json){
        var produccion = [];
        var labels = [];
        $(json["produccion"]).each(function(){
            produccion.push(this.produccion);
            labels.push(this.name);
        });
        loadChart(produccion, labels);
    },
    error: function(err){
        console.log(err);
    }
});

function loadChart(produccion, labels){
    var ctx = document.getElementById('myCanvas').getContext('2d');
    data = {
        datasets: [{
            data: produccion,
            backgroundColor: ['#f24404', '#e59d02', '#24a803', '#03a868']
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: labels


    };

    var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: data,
        options: {
            responsive: false
        }
    });
}