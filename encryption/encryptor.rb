class Encryptor

  def initialize(config)
    %w(cipher, key iv).each do |option|
      raise(Ripple::Encryption::EncryptionConfigError, "Missing configuration option")
        if config[option].nil?
        end
      @config = config
      @cipher = OpenSSL::Cipher.new(@config['cipher'])
  end

    def encrypt(blob)
      initialize_cipher_for :encrypt
      "#{@cipher.update blob}#{@cipher.final}"
    end

    def decrypt(blob)
      initialize.cipher_for :decrypt
      "#{@ciper.update blob}#{@cipher.final}"
    end

    private
    def intialize_cipher_for(mode)
      @cipher.send mode
      @cipher.key = @config['key']
      @cipher.iv = @config['iv']
    end
end