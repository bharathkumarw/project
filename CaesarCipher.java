public class CaesarCipher {

    // Encryption function
    public static String encrypt(String plaintext, int shift) {
        StringBuilder ciphertext = new StringBuilder();

        for (int i = 0; i < plaintext.length(); i++) {
            char currentChar = plaintext.charAt(i);

            if (Character.isLetter(currentChar)) {
                char base = Character.isUpperCase(currentChar) ? 'A' : 'a';
                char encryptedChar = (char) ((currentChar - base + shift) % 26 + base);
                
                ciphertext.append(encryptedChar);
            } else {

                ciphertext.append(currentChar);
            }
        }

        return ciphertext.toString();
    }

  
    public static String decrypt(String ciphertext, int shift) {
  
        return encrypt(ciphertext, 26 - shift);
        
        
    }

    public static void main(String[] args) {
        String plaintext = "pizza";
        int shift = 3;

       
        String encryptedText = encrypt(plaintext, shift);
        System.out.println("Encrypted: " + encryptedText);

        
        String decryptedText = decrypt(encryptedText, shift);
        System.out.println("Decrypted: " + decryptedText);
    }   System.out.println("ciphertext:"+ciphertext);
}

