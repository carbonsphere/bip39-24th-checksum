<?PHP
/**
 * The purpose of this script is to help test and find checksum word for Ledger Nano S.
 *
 * This script is for those who wants to use a customized word list, 
 * this is the tool that can help you generate the last (24th) checksum word.
 *
 * User will have to provide a 23 words list, words from BIP39 https://goo.gl/5mmpoc 
 * This script will iterate though 2048 words combination to find all the words that can be used as the 24th
 * 
 * This script can be run locally so there is no risk of transmitting your secret Mnemonic.
 * It may display multiple words that are valid to be used with your 23 words list.
 *
 *
 *
 * If this source helps you in anyway, please consider donating and "STAR" this github project.
 *
 * Donation Address
 *
 * BTC: 32eGchjVh9Gsn981e7BcC2NRRjkBER5wEB
 * ETH: 0x4289219B9B2c81FdAd7BB02D51b0c9CCD81F465b
 *
 */


include 'bip39custom.php';

$mywords = 'verify cool art wear bridge blast direct armed asthma leisure call mammal federal about embrace judge city crisp health rapid garlic duty old';

$a = new BIP39CUSTOM();

//Get BIP39 English word list.
$wordList = $a->wordList();

//Check mywords for 23 words
if(count(explode(' ',$mywords)) != 23) {
    echo "Error: 23 words required\n";
    return;
}

//Iterate through 2048 word list to find valid checksum.
foreach($wordList as $word ) {
    $newWords = $mywords . " $word";

   if($a->checkMnemonic($newWords)) {
       echo "Found Valid Word - $word\n";
   }
}



?>
