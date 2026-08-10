<?php

namespace App\Services;

use BitWasp\Bitcoin\Key\Deterministic\HdPrefix;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use BitWasp\Bitcoin\Network\NetworkFactory;

class CryptoWalletService
{
public function isMnemonicValid(string $mnemonic): bool
{
    try {
        // Normalize input
        $mnemonic = strtolower(trim($mnemonic));
        $mnemonic = preg_replace('/\s+/', ' ', $mnemonic);

        $mnemonicFactory = MnemonicFactory::bip39();

        // Validate mnemonic
        $mnemonicFactory->mnemonicToEntropy($mnemonic);

        return true;
    } catch (\Throwable $e) {
        \Log::error('Mnemonic validation failed', [
            'error' => $e->getMessage(),
            'mnemonic' => $mnemonic
        ]);
        return false;
    }
}

}
