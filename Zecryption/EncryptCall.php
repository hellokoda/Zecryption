<?php
/*

Powered Best License

Copyright © 2020 imkoda & Powered.Best (Koda Lee)

Permission is hereby granted, free of charge, to any person or
persons obtaining this copy of software and any associated 
documentation files (the “Software”), to deal in the Software 
without restriction, including without limitation the rights to
use, copy, modify, or publish copies of this Software and no limited
rights to distribute, sublicense and/or sell copies of the Software
as long as (“Credit”) and notification to the original Software holder
is given, and to permit persons to whom the Software is furnished 
to do so, subject to the following conditions:

The above copyright notice and this permission notice
shall be included in all copies or substantial portions of the Software.

As the owner of (the "Software") states, this license
is subject to change without any notice by any
means, anytime and how ever the original Software owner chooses.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY
OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS 
BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

function zEcryptString($imkoda_RfUjWnZr , $imkoda_UjXn2r5u) {
    // Check is string is set in the called function.
    if (!isset($imkoda_RfUjWnZr)) {
        // String was not set, sending a fatal error as a return, and canceling the call.
        return "FATAL: Missing first syntax in function call! zEcryptString(string << missing";
    }
    // String was set and the above was skipped.
    // Check is spice set in the called function
    if ($imkoda_UjXn2r5u != null) {
        #######################################
        ####                               ####
        ####           RECOMMENDED         ####
        ####                               ####
        #######################################
        // Get string and set it to garbled data (decoding error)
        // Spice was set, adding "spice"
        // which is just some more string to 
        // make the data hard to decrypt.
        // Just breaks down the plain text (with spice) into corrupted data
        // Since it is not encoded in the first place.
        $imkoda_hVmYq3t6 = base64_decode(
            $imkoda_RfUjWnZr . $imkoda_UjXn2r5u
        );
    }
    else {
        // Get string and set it to garbled data (decoding error)
        // Just breaks down the plain text into corrupted data
        // Since it is not encoded in the first place.
        $imkoda_hVmYq3t6 = base64_decode(
            $imkoda_RfUjWnZr
        );
    }
    // The imkoda_hVmYq3t6 variable has been set, now going forward.
    // We are now shifting that broken text into a hexidecimal.
    // One string will always generate the same results
    $imkoda_KbPeSgVk = bin2hex(
        $imkoda_hVmYq3t6
    );
    // imkoda_KbPeSgVk set and finished, next up, MD5.
    // This text is already completely ruined and can not 
    // be translated into its original state, but as my pet
    // rock says, "there is never enough."
    $imkoda_4u7x1APD = md5($imkoda_KbPeSgVk);
    // Now on to the last part of the encryption, sha256
    // I love sha256 <3
    for ($imkoda_cQeThWmZ = 0; $imkoda_cQeThWmZ <= 20; $imkoda_cQeThWmZ+=1) {
        $imkoda_4u7x1APD = hash('sha256', $imkoda_4u7x1APD);
    }
    // And now, off you go encrypted string!
    // Be free my little butterfly.
    return $imkoda_4u7x1APD;
}
