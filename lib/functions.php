<?php

function OutputDuplicatUser(){
	echo "Sorry this phone number has been registred";
}

function OutputSuccessRegistration(){
	echo "You've been successfully registered with us";
}

function checkSanityNumber($number) {
	return true;
}

function checkSanityEmail($email) {
	return true;
}

function checkSanityCity($city) {
	return true;
}

?>