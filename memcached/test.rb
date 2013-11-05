# run gem install dalli first

require 'dalli'

ip = '127.0.0.1'

# update with your port number
port = 42

dc = Dalli::Client.new("#{ip}:#{port}")
dc.set('abc', "Always Be Closing")
value = dc.get('abc')

puts value
