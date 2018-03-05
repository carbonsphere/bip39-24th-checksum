# Email

CarbonSphere@Gmail.com

# Description

Ledger Nano S uses 24 words Mnemonic to generate series of private keys for your cold wallet.

Ledger Nano S uses 24 [BIP39 wordlist](https://goo.gl/PCimRz). It will randomly generate 24 words as your initial mnemonic for your wallets.

24 words Mnemonic can be automatically generated on Ledger Nano S cold wallet, but there isn't any option on how to use your own custom words from BIP39 wordlist. Not sure if it will ever have a mnemonic collision, but I recommend using partial custom and partial randomized 24 words mnemonic.

What if you want to use a customized wordlist by choosing your own 24 words mnemonic from BIP39? You can't! since the last word is a checksum for the previous 23 words. If you try to use unchecked wordlist, you will get an error "Invalid Recovery Phrase".

This script can help you find BIP39 checksum word (a.k.a. last word). By inserting the first 23 words, it will iterate through BIP39 wordlist to find valid checksum word for your 23 wordlist.

It is recommanded that you download this script and run it on an offline machine to help you securely generate your 24th word. 

# Usage

Download and edit findLedgerChecksumWord.php   change "$mywords" value to your own 23 words.  Note: Be sure that you pick 23 words from BIP39 list or else it will fail.

Then Run

```
php findLedgerChecksumWord.php
```

It will list words that are valid checksum, each word on that list can be used as the 24th word for your 23 words mnemonic.=

# Donation Address

- BTC: 32eGchjVh9Gsn981e7BcC2NRRjkBER5wEB
- ETH: 0x4289219B9B2c81FdAd7BB02D51b0c9CCD81F465b

Thanks for your support! If you have any question, email me.

# Buy Ledger Nano S

- [LedgerWallet](https://goo.gl/W7uRVz)

# Buy ETH or BTC with USD / Credit Card from CoinBase.com to get Free $10 BTC

- [CoinBase](https://goo.gl/X6Q147)

# Crypto Exchange

- [Binance](https://goo.gl/up6KWN)


