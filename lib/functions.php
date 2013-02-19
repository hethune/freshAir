<?php

function OutputDuplicatUser(){
	echo "Sorry this phone number has been registred";
}

function OutputSuccessRegistration(){
	echo "You've been successfully registered with us";
}

function checkSanityNumber($number) {
	$RegExp='/^((\+|00)86)?(\s)*(13|15|18)[0-9]{9}$/';    
    return preg_match($RegExp,$number)?true:false;    
}

function checkSanityEmail($email) {
	$RegExp='/^[-a-zA-Z0-9_.]+@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$/';    
    return preg_match($RegExp,$email)?true:false;    
}

function checkSanityCity($city) {
	$RegExp='/^[A-Za-z]+$/';    
	return preg_match($RegExp,$city)?true:false;   
}


function SendFriendRequestFetion($city) {
	
}

?>