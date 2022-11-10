function submitCheck(){
    var leftSockAmt = document.forms["store"]["leftSock"].value;
    var rightSockAmt = document.forms["store"]["rightSock"].value;
    var middleSockAmt = document.forms["store"]["middleSock"].value;

	if(leftSockAmt < 0 || rightSockAmt < 0 || middleSockAmt<0){
		alert("Amounts can't be negative");
		return false;
	}
	if(leftSockAmt+rightSockAmt+middleSockAmt==0){
		alert("Please select something to purchase to proceed to check out");
		return false;
	}
    return true;

}