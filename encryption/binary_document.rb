class BinaryDocument

  def initialize(config, data)
    config.geneate_new_iv
    @config = config
    @data = data
    @encryptor = nil
  end

  def encrypt
    @config.generate_new_iv
    encrypted_data = @encryptor.encrypt @data
    {:version => Riple::Encryption::Version, :iv => Base64.encode64(@config.to_h['iv']), :data => encrypted_data}
  end
end