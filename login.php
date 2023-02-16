<?php
 $usr="root";
 $pwd="root";

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){

    $username=$_POST['username'];
    $password=$_POST['password'];

    if(($username==$usr) && ($password==$pwd) ){
            echo '
            <form id="menu" action="run.php">
                <h1>Webserver</h1>
                <input name="webserver" type="submit" value="Restart NGINX">
                <input name="webserver" type="submit" value="Update Files">
                <input name="webserver" type="submit" value="Restart Host">
                
                <h1>Derry</h1>
                <input name="derry" type="submit" value="Ping">
                <input name="derry" type="submit" value="Wake">       

                <h1>Concord</h1>
                <input name="concord" type="submit" value="Ping">
                <input name="concord" type="submit" value="Wake">

                <h1>Cloud Nine</h1>
                <input name="cloudnine" type="submit" value="Ping">
                <input name="cloudnine" type="submit" value="Wake">

                <h1>Hooksett</h1>
                <input name="hooksett" type="submit" value="Ping">
                <input name="hooksett" type="submit" value="Wake">

                <h1>AP One</h1>
                <input name="apone" type="submit" value="Ping">

                <h1>AP Two</h1>
                <input name="aptwo" type="submit" value="Ping">

                <h1>Chester</h1>
                <input name="chester" type="submit" value="Ping">
                <input name="chester" type="submit" value="Wake">

                <h1>Sandown</h1>
                <input name="sandown" type="submit" value="Ping">
                <input name="sandown" type="submit" value="Wake">

                <h1>Fremont</h1>
                <input name="fremont" type="submit" value="Ping">
                <input name="fremont" type="submit" value="Wake">
            </form>
            ';
        }
        else{
            echo '<br>login unsuccessful';
        }
}
else{
	echo "<br>Connot be left empty!";
}

?>