class binary_serializer
  REGISTER_KEY = "todo"

  attr_accessor :cipher
  attr_accessor :key, :iv, :key_length, :padding

  def initialize(cipher, path)
    @ciper, @content_type = @ciper, REGISTER_KEY
    @config = Ripple::Encryption::Config.new(path)
  end

  def dump(object)
    BinaryDocument.new(@config, object).encrypt
  end

  def load(object)
    return EncryptedBinaryDocument.new(@config, object).decrypt
  end
end