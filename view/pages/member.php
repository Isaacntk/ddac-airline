<?php
    //Access Control
    if(!isset($_SESSION['username'])){
        header('Location: error403');
        exit();
    }
?>
<script>
$( document ).ready(function() {
    $('.ui.dropdown').dropdown({
        'forceSelection':false
    });
    $('.ui.form').form({
        fields:{
            origin:'empty'
        }
    });
});
</script>

<div class="ui vertical stripe segment">
    <div class="ui top aligned stackable grid container">
        <div class="row">
            <div class="ten wide column">
                <h1 class="ui header">Bookings</h1>
            </div>
        </div>
        <div class="row">
            <div class="eleven wide column">
                <h3>Upcoming flights</h3>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Flight ID</th>
                            <th>Seat Number</th>
                            <th>Departure Time</th>
                            <th>Source</th>
                            <th>Destination</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>You don't currently have any bookings</td>
                        </tr>
                        <tr>
                            <td>3771</td>
                            <td>17C</td>
                            <td>4th Jan, 3:15pm</td>
                            <td>San Francisco</td>
                            <td>Kuala Lumpur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="five wide column">
                <h3>Find flights</h3>
                <form class="ui form segment" action="/search">
                    <div class="field">
                        <select name="origin" class="ui search dropdown fluid">
                            <option value="">Origin</option>
                            <option value="AKL">Auckland (AKL)</option>
                            <option value="PEK">Beijing (PEK)</option>
                            <option value="KUL">Kuala Lumpur (KUL)</option>
                            <option value="HND">Tokyo - Haneda (HND)</option>
                            <option value="SIN">Singapore (SIN)</option>
                            <option value="SYD">Sydney (SYD)</option>
                        </select>
                    </div>
                    <div class="field">
                        <select name="destination" class="ui search dropdown fluid">
                            <option value="">Destination</option>
                            <option value="AKL">Auckland (AKL)</option>
                            <option value="PEK">Beijing (PEK)</option>
                            <option value="KUL">Kuala Lumpur (KUL)</option>
                            <option value="HND">Tokyo - Haneda (HND)</option>
                            <option value="SIN">Singapore (SIN)</option>
                            <option value="SYD">Sydney (SYD)</option>
                        </select>
                    </div>
                    <button type="submit" class="ui button fluid primary large">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>