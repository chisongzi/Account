<?php
function password($password,$password_code='lshi4AsSUrUOwWV'){
    return md5(md5($password).md5($password_code));
}