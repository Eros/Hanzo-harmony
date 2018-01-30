class Encrypted_binary_document

  def initialize(config, data)
    @config = config.to_h.clone
    @data = data
    raise(EncryptedJsonDocumentError, "Missing IV for the decription") unless @data['iv']
    iv = Base64.decode64 @data[:iv]
    @config.merge!('iv' => iv)
    @decryptor = Ripple::Encryption::Encryptor.new @config
  end

  def decrypt
    @decryptor.decrypt @data[:data]
  end
end