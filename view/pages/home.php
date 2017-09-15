<style type="text/css">
    .ui.inverted.segment.hero{
        background:linear-gradient(
        rgba(0, 0, 0, 0.3), 
        rgba(0, 0, 0, 0.3)
        ),url('res/img/hero.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;
    }
    .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
    }
    .masthead .logo.item img {
        margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
    }
    .masthead h1.ui.header {
        margin-top: 3em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: normal;
    }
    .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
    }
    .ui.header{
        padding-top:1em;
    }

    @media only screen and (max-width: 700px) {
        .masthead.segment {
        min-height: 350px;
        }
        .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
        }
        .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
        }
    }
</style>

<div class="ui inverted vertical masthead center aligned segment hero">
    <div class="ui text container">
    <h1 class="ui inverted header">
        UI Airlines
    </h1>
    <h2>Get your cargo where you need it</h2>
        <a class="ui huge orange button">Start Shipping</a>
    </div>
</div>

<div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
    <div class="row">
        <div class="eight wide column">
        <h3 class="ui header">Quality Routing</h3>
        <p>We offer the most efficient and secure routes around the globe. Routes are constantly being optimized daily.</p>
        <h3 class="ui header">Safe Shipping</h3>
        <p>Your cargo is our privilege, we ensure the safe delivery of all types of cargo. Our workers are trained to handle all your shipments with the utmost care.</p>
        </div>
        <div class="six wide right floated column">
        <img src="res/img/containers.jpg" class="ui large bordered rounded image"/>
        </div>
    </div>
    </div>
</div>


<div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
    <div class="center aligned row">
        <div class="column">
        <h3>"Shipped much faster than I expected"</h3>
        <p>
            <b>Bill Nye</b> The Science Guy - PBS Studios
        </p>
        </div>
        <div class="column">
        <h3>"Top notch shipping service!"</h3>
        <p>
            <b>Lunafreya Nox </b> Logistics Director - Tenebrae Inc.
        </p>
        </div>
    </div>
    </div>
</div>