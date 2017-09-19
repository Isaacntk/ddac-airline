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

<div class="ui vertical stripe segment">
    <div class="ui top aligned stackable grid container">
        <div class="row">
            <div class="ten wide column">
                <h1 class="ui header">New Booking - Flight <?php echo $flight ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="eight wide column" id="seats">
                <h3>Choose a seat</h3>
                <img class="ui right floated image" src="/img/plane_layout.png"></img>
            </div>
            <div class="three wide column">
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
                            <input type="text" name="seat" class="ui input disabled fluid" value="A1"/>
                        </div>
                        <button type="submit" class="ui button fluid orange large">Place Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>