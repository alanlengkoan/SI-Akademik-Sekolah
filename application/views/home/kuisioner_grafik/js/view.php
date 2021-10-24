<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    // Radialize the colors
    Highcharts.setOptions({
        colors: Highcharts.map(Highcharts.getOptions().colors, function(color) {
            return {
                radialGradient: {
                    cx: 0.5,
                    cy: 0.3,
                    r: 0.7
                },
                stops: [
                    [0, color],
                    [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        })
    });

    // untuk get data peta
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: '<?= base_url() ?>kuisioner_chart/<?= $id_kuisioner ?>',
            dataType: 'json',
            success: function(response) {
                $.each(response, function(key, value) {
                    Highcharts.chart(value.id_kuisioner_soal, {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: value.soal
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.y:1f}%</b>'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b>: {point.y:1f} %',
                                    connectorColor: 'silver'
                                }
                            }
                        },
                        series: [{
                            name: 'Share',
                            data: value.data
                        }]
                    });
                });
            },
            error: function(xhr, ajaxOptions, thrownError) {
                var errorMsg = 'Request Ajax Gagal : ' + xhr.responseText;
                alert(errorMsg);
            }
        });
    });
</script>