function testinput(re, str) {
    const myReg = new RegExp('/^b/', "g");
    if (myReg.test(str)) {
        midstring = " zawiera ";
        console.log('test: ', str + midstring + myReg.source);
        return true;
    } else {
        midstring = " nie zawiera ";
        console.log('test: ', str + midstring + myReg.source);
        return false;
    }
};