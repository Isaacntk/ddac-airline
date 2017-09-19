<?php
    //Access Control
    if(isset($_SESSION['username'])){
        header('Location: member');
        exit();
    }
?>
<?php
    //Validate signup
    $username = Param::get('username');
    $fullname = Param::get('fullname');
    $password = Param::get('password');

    if($username != '' & $fullname != '' & $password !=''){
        //Check DB for existing
        if(true){
            //Add new account to DB
            
        }
        else{
            $error = true;
        }
    }
?>

<script>
    window.onload = function () {
        $('.ui.form').form({
            fields: {
                name: {
                    identifier: 'fullname',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter your full name'
                        }
                    ]
                },
                username: {
                    identifier: 'username',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a username'
                        }
                    ]
                },
                password: {
                    identifier: 'password',
                    rules: [
                        {
                            type: 'empty',
                            prompt: 'Please enter a password'
                        },
                        {
                            type: 'minLength[6]',
                            prompt: 'Your password must be at least {ruleValue} characters'
                        }
                    ]
                }
            }
        });
    }
</script>

<div class="ui middle center aligned stackable grid">
    <div class="column five wide">
        <h2 class="ui orange image header">
            <img src="res/img/logo.png" class="image"/>
            <div class="content">
                Create New Account
            </div>
        </h2>
        <form class="ui form segment">
            <div class="field">
                <div class="ui left input">
                    <input type="text" name="fullname" placeholder="Full Name" />
                </div>
            </div>
            <div class="field">
                <div class="ui left input">
                    <input type="text" name="username" placeholder="Username" />
                </div>
            </div>
            <div class="field">
                <div class="ui left input">
                    <input type="password" name="password" placeholder="Password"/>
                </div>
            </div>
            <button type="submit" class="ui fluid large orange submit button">Sign Up</button>
            <div class="ui message error" <?php if($error == true) echo 'style="display:block"'; ?>>
                <?php
                    if($error == true){
                        echo "<li>Sorry, the username has already been taken</li>";
                        $error=false;
                    }
                ?>
            </div>
        </form>
        <div class="ui message">
            Already an existing user? <a href="/login">Log In</a>
        </div>
    </div>
</div>