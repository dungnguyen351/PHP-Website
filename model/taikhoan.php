<?php 

function insert_taikhoan($email,$user,$pass){
    $hashed_pass = sha1($pass);
    $sql="INSERT INTO taikhoan(email,user,pass) VALUES('$email','$user','$hashed_pass')";
    pdo_execute($sql);
}

function delete_taikhoan($id){
    $sql="DELETE FROM taikhoan WHERE id=".$id;
    pdo_query($sql);
}
function checkuser($user,$pass){
    $hashed_pass = sha1($pass);
    $sql="SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$hashed_pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="SELECT * FROM taikhoan WHERE email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel){
    $sql="UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}

function update_taikhoan_role($role,$id){
    $sql="UPDATE taikhoan SET role='".$role."' WHERE id=".$id;
    pdo_execute($sql);
}

function loadall_taikhoan(){
    $sql="SELECT * FROM taikhoan ORDER BY id DESC";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($id){
    $sql="SELECT * FROM taikhoan WHERE id=".$id;
    $tk=pdo_query_one($sql);
    return $tk;
}

?>