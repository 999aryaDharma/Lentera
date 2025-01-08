<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fun Chat Assistant</title>
    @vite('resources/css/app.css')
    <style>
        .typing-animation span {
            animation: typing 1s infinite;
            margin: 0 2px;
        }

        .typing-animation span:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-animation span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes typing {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .message-appear {
            animation: appear 0.3s ease-out;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="container mx-auto p-4 max-w-4xl">
        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-lg shadow-xl p-4">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold text-purple-800 flex items-center gap-2">
                    <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Fun Chat Assistant
                </h1>
            </div>

            <!-- Chat Container -->
            <div id="chat-box"
                class="h-[500px] overflow-y-auto bg-white p-4 rounded-lg border border-purple-100 shadow-inner">
                <!-- Messages will be inserted here -->
            </div>

            <!-- Input Form -->
            <form id="chat-form" class="mt-4">
                <div class="flex items-center gap-2">
                    <input type="text" id="user-input"
                        class="flex-1 px-4 py-2 rounded-full border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all duration-200"
                        placeholder="Type your message..." required>
                    <button type="submit"
                        class="p-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition-colors duration-200 shadow-md rotate-90">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const chatForm = document.getElementById('chat-form');
            const userInput = document.getElementById('user-input');
            const chatBox = document.getElementById('chat-box');

            function createMessage(text, sender, timestamp) {
                const messageDiv = document.createElement('div');
                messageDiv.className =
                    `flex ${sender === 'user' ? 'justify-end' : 'justify-start'} mb-4 message-appear`;

                const messageBubble = document.createElement('div');
                messageBubble.className = `max-w-[70%] rounded-2xl px-4 py-2 ${
                    sender === 'user' 
                        ? 'bg-purple-600 text-white rounded-br-none' 
                        : 'bg-gray-100 text-gray-800 rounded-bl-none'
                }`;

                const messageText = document.createElement('p');
                messageText.className = 'text-sm';
                messageText.textContent = text;

                const messageTime = document.createElement('span');
                messageTime.className = 'text-xs opacity-70 mt-1 block';
                messageTime.textContent = timestamp;

                messageBubble.appendChild(messageText);
                messageBubble.appendChild(messageTime);
                messageDiv.appendChild(messageBubble);

                return messageDiv;
            }

            function createTypingIndicator() {
                const wrapper = document.createElement('div');
                wrapper.className = 'flex justify-start mb-4 message-appear';
                wrapper.innerHTML = `
                    <div class="bg-gray-100 rounded-2xl rounded-bl-none px-4 py-2">
                        <div class="typing-animation flex gap-1">
                            <span class="w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="w-2 h-2 bg-gray-500 rounded-full"></span>
                        </div>
                    </div>
                `;
                return wrapper;
            }

            chatForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const message = userInput.value.trim();
                if (!message) return;

                // Clear input
                userInput.value = '';

                // Add user message
                const timestamp = new Date().toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit'
                })
                chatBox.appendChild(createMessage(message, 'user', timestamp));
                chatBox.scrollTop = chatBox.scrollHeight;

                // Show typing indicator
                const typingIndicator = createTypingIndicator();
                chatBox.appendChild(typingIndicator);
                chatBox.scrollTop = chatBox.scrollHeight;

                try {
                    const response = await fetch('/chat', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .content
                        },
                        body: JSON.stringify({
                            message
                        })
                    });

                    const data = await response.json();

                    // Remove typing indicator after a delay
                    setTimeout(() => {
                        typingIndicator.remove();
                        chatBox.appendChild(createMessage(
                            data.generated_text || 'I received your message!',
                            'ai',
                            new Date().toLocaleTimeString('en-US', {
                                hour: '2-digit',
                                minute: '2-digit'
                            })
                        ));
                        chatBox.scrollTop = chatBox.scrollHeight;
                    }, 1000);

                } catch (error) {
                    typingIndicator.remove();
                    chatBox.appendChild(createMessage(
                        'Oops! Something went wrong. Please try again!',
                        'ai',
                        new Date().toLocaleTimeString()
                    ));
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            });
        });
    </script>
</body>

</html>
