<?php
    //Access Control
    if(!isset($_SESSION['username'])){
        header('Location: error403');
        exit();
    }
?>
<?php
    $flight = Param::get('flight');
    $seat = Param::get('seat');

    //Check flight exists
    if($flight == ''){
        header('Location: member');
        exit();
    }
    elseif($seat == ''){
        //Get flight info
        $price = 0;
    }
    else{
        //Add booking
        header('Location: member');
        exit();
    }
?>
<script>
$( document ).ready(function() {
    $('.ui.sticky')
      .sticky({
        context: '#seats',
        offset: 70
      })
    ;
    $('.ui.form').form({
        fields:{
            seat:'empty'
        }
    });
});
</script>
<script src="/js/anychart.min.js"></script>
<script src="/js/seat-data.js"></script>

<style>
    #container {
        width: 100%;
        display: inline-block;
        position: relative;
    }
    #container:after {
        /* Maintaining aspect ratio */
        padding-top: 206.26%;
        display: block;
        content: '';
    }
    #container > div {
        position:absolute !important;
    }
</style>

<div class="ui vertical stripe segment">
    <div class="ui top aligned stackable grid container">
        <div class="row">
            <div class="ten wide column">
                <h1 class="ui header">New Booking - Flight <?php echo $flight ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="eleven wide column" id="seats">
                <h3>Choose a seat</h3>
                <div id="container"></div>
            </div>
            <div class="five wide column">
                <div class="ui sticky">
                    <h3>Confirm booking</h3>
                    <form class="ui form segment">
                        <div class="field">
                            <label>Flight No</label>
                            <input type="text" name="flight" class="ui input disabled fluid" value="<?php echo $flight; ?>"/>
                        </div>
                        <div class="field">
                            <label>Price</label>
                            <input type="text" class="ui input disabled fluid" value="RM <?php echo $price; ?>"/>
                        </div>
                        <div class="field">
                            <label>Seat</label>
                            <input type="text" id="seat" name="seat" class="ui input disabled fluid" value=""/>
                        </div>
                        <button type="submit" class="ui button fluid orange large">Place Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seat Picker -->
<script type="text/javascript">
    anychart.onDocumentReady(function() {
        stage = acgraph.create('container');
        $.ajax({
            type: 'GET',
            url: '/img/boeing_737.svg',
            success: function(svgData) {
                var data = boeingData();
                chart = anychart.seatMap(data);
                chart.geoData(svgData);
                chart.padding([105, 0, 20, 0]).unboundRegions('as-is');

                series = chart.getSeries(0);
                series.fill(function() {
                    var attrs = this.attributes;
                    return attrs ? attrs.fill : this.sourceColor;
                })
                .stroke(function() {
                    var attrs = this.attributes;
                    return attrs ? attrs.stroke : this.sourceColor;
                });

                series.hoverFill('#64b5f6');
                series.selectFill('#64b5f6');
                series.tooltip().titleFormat('Seat');
                series.tooltip().format('{%Id}');

                // Get seat on click
                chart.listen('click', function() {
                var points = chart.getSelectedPoints();
                    if (points.length == 1) {
                        $('#seat').val(data[points[0].getIndex()]['id']);
                    }
                });

                // Change Interactivity 
                var interactivity = chart.interactivity();
                interactivity.keyboardZoomAndMove(false);
                interactivity.zoomOnDoubleClick(false);
                interactivity.drag(false);
                interactivity.selectionMode("singleSelect");

                //Draw Chart
                chart.container(stage);
                chart.draw();
            }
        });
    });
</script>