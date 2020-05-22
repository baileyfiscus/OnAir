#!/usr/bin/python3
import sys
sys.path.append("")
import websocket

def getAsciiMessage(message):
  return message

n = len(sys.argv)
userMessage = ' '.join(sys.argv[1:])

scrubbedMessage = getAsciiMessage(userMessage)
print("Message to send: " + scrubbedMessage)

# Connect to WebSocket server
ws = websocket.WebSocket()
ws.connect("ws://192.168.1.91")
print("Connected to WebSocket server")

# Ask the user for some input and transmit it
ws.send(scrubbedMessage)

# Wait for server to respond and print it
result = ws.recv()
print("Received: " + result)

# Gracefully close WebSocket connection
ws.close()
