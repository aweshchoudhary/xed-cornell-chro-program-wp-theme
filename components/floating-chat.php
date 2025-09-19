<div class="fixed bottom-0 right-0 md:p-4 p-2 w-fit max-w-lg max-h-screen z-50 flex flex-col items-end gap-3">
    <div id="floating-chat" data-show-chat="false" class="bg-white group data-[show-chat=false]:hidden data-[show-chat=true]:flex w-full rounded-xl overflow-hidden flex-col md:max-w-90 flex-1 md:max-h-[80vh] max-h-[90vh]  size-full border shadow-lg">
        <div class="w-full border-b px-4 py-2 flex justify-between items-center">
            <div class="flex items-center gap-2 justify-between w-full">
                <div class="flex items-center gap-2">
                <figure class="size-10 m-0!">
                    <? $image_id = 598 ?>
                    <?= wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "eager",
                        "class" => "image-cover bg-gray-100 border-2 border-primary rounded-full overflow-hidden",
                    ]); ?>
                </figure>
                <h4 class="mb-0 flex items-center gap-2">
                    Steve
                    <span class="size-2 rounded-full bg-green-300 animate-pulse block"></span>
                </h4>
            </div>
            <p class="mb-0 text-primary">Beta Version</p>
            </div>
            <button onclick="toggleChat()" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" />
                </svg>
            </button>
        </div>
        <div class="px-4 flex flex-col gap-2 overflow-y-auto flex-1 justify-between">
            <div class="space-y-6 flex-1 overflow-y-auto" id="scroll-container">
                
                <div id="messages" class="space-y-6 mt-5">
                    <div class="flex gap-2 md:max-w-[90%] max-w-[80%]">
                        <div class="bg-gray-100 rounded-xl w-fit rounded-tl-none p-2 flex-1">
                            Welcome to XED, and congratulations on taking the first step towards a more empowered you. Let me know if I can answer any question for you
                        </div>
                    </div>
                </div>
                <div id="loading-message" class="hidden gap-2 md:max-w-[90%] max-w-[80%]">
                    <div class="bg-gray-100 rounded-xl w-fit! rounded-tl-none p-2 flex-1 flex items-center gap-1">
                        <span class="size-2 block rounded-full bg-gray-400 ease-in-out animate-bounce" style="animation-delay: 500ms;"></span>
                        <span class="size-2 block rounded-full bg-gray-400 ease-in-out animate-bounce" style="animation-delay: 800ms;"></span>
                        <span class="size-2 block rounded-full bg-gray-400 ease-in-out animate-bounce"></span>
                    </div>
                </div>
                <div id="error-message" class="hidden gap-2 md:max-w-[90%] max-w-[80%]">
                    <div class="bg-gray-100 rounded-xl w-fit! rounded-tl-none p-2 flex-1 flex items-center gap-1">
                        <p class="text-primary mb-0">Error sending message</p>
                    </div>
                </div>
            </div>

            <div class="flex items-end gap-2 mb-3">
                <div class="flex-1 border bg-gray-100 rounded-lg p-3 shrink-0 flex flex-col items-end">
                    <textarea placeholder="Type your message here..." id="message-input" class="w-full h-full resize-none bg-transparent hover:outline-none! outline-none! p-0! border-none! min-h-0!"></textarea>
                </div>
                <button onclick="sendMessage()" aria-label="Send message" name="send message" class="shrink-0 size-8 flex items-center justify-center rounded-full bg-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20.33 3.67a1.45 1.45 0 0 0-1.47-.35L4.23 8.2A1.44 1.44 0 0 0 4 10.85l6.07 3l3 6.09a1.44 1.44 0 0 0 1.29.79h.1a1.43 1.43 0 0 0 1.26-1l4.95-14.59a1.41 1.41 0 0 0-.34-1.47M4.85 9.58l12.77-4.26l-7.09 7.09Zm9.58 9.57l-2.84-5.68l7.09-7.09Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <button data-tooltip-target="tooltip-default" type="button" onclick="toggleChat()" class="md:size-20 size-14 relative">
        <figure>
            <? $image_id = 598 ?>
            <?= wp_get_attachment_image($image_id, "large", false, [
                "loading" => "eager",
                "class" => "image-cover md:border-4 border-2 border-primary rounded-full bg-gray-100 overflow-hidden",
            ]); ?>
        </figure>
        <span class="size-3 animate-pulse rounded-full bg-green-400 absolute bottom-2 left-2">

        </span>
    </button>

    <div id="tooltip-default" data-tooltip-style="light" role="tooltip" class="absolute z-10 invisible opacity-0 inline-block px-3 py-2 m font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs tooltip md:min-w-80">
        Welcome to XED. Let me know if you have any question about this program?
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</div>

<script type="module" src="<?php echo get_template_directory_uri() ?>/eleven-labs/dist/assets/index-Sd64Z2vu.js"></script>


<script>
    window.addEventListener("DOMContentLoaded", () => {
        setTimeout(() => {
            const tooltip = document.getElementById('tooltip-default');
            tooltip.classList.remove('invisible');
            tooltip.classList.remove('opacity-0');
        }, 2000);

        setTimeout(() => {
            const tooltip = document.getElementById('tooltip-default');
            tooltip.classList.add('invisible');
            tooltip.classList.add('opacity-0');
        }, 10 * 1000);
    });

    const messages = document.getElementById('messages');
    const loadingMessage = document.getElementById('loading-message');

    const messageInput = document.getElementById('message-input');
    const tooltip = document.getElementById('tooltip-default');

    const toggleChat = () => {
        const floatingChat = document.getElementById('floating-chat');
        if (floatingChat.dataset.showChat === 'false') {
            floatingChat.dataset.showChat = 'true';
            tooltip.style.display = 'none';
        } else {
            floatingChat.dataset.showChat = 'false';
            tooltip.style.display = 'block';
        }
    }

    messageInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            sendMessage();
            messageInput.value = null;
        }
    });

    const scrollToBottom = () => {
        const scrollContainer = document.getElementById('scroll-container');
        messages.scrollTo({
            top: scrollContainer.scrollHeight,
            behavior: 'smooth'
        });

        scrollContainer.scrollTo({
            top: scrollContainer.scrollHeight,
            behavior: 'smooth'
        });
    }

    const sendMessage = async () => {
        document.getElementById('error-message').classList.add('hidden');
        loadingMessage?.classList?.remove('hidden');

        const messageInput = document.getElementById('message-input');
        const message = messageInput.value;

        renderUserMessage(message);
        messageInput.value = '';
        scrollToBottom();
        
        if(!window.textConversation){
                window.isInitialMessage = true;
               await window.startTextConversation();
                await window.textConversation.sendUserMessage(message);
        } else {
            
            await window.textConversation.sendUserMessage(message);
        }
    }

    const renderUserMessage = (message) => {
        const messages = document.getElementById('messages');
        messages.innerHTML += `
            <div class="flex justify-end ml-auto gap-2 md:max-w-[90%] max-w-[80%]">
                    <div class="bg-primary text-white w-fit rounded-lg rounded-br-none p-2">
                        ${message}
                    </div>
            </div>
        `;
    }

    const renderSalesRepMessage = (message) => {
        const messages = document.getElementById('messages');
        messages.innerHTML += `
            <div class="flex gap-2 md:max-w-[90%] max-w-[80%]">
                <div class="bg-gray-100 rounded-xl w-fit rounded-tl-none p-2 flex-1">
                    ${message}
                </div>
            </div>
        `;
    }

    const sendMessageToSalesRep = async (message) => {
        try {
            const response = await fetch('/wp-json/xed-agent/xspca/v1/send-message/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    message,
                    threadId: window.conversationThreadId,
                    programName: 'Cornell Chief AI Officer Leadership Program'
                })
            });

            let data = await response.json();

            if (!data.response) {
                throw new Error("data.error");
            }

            if (data.threadId) {
                window.conversationThreadId = data.threadId;
            }

            // condition to check if the response string is longer than 200 characters
            if (data.response.length > 130) {
                const response2 = await fetch('/wp-json/xed-agent/hrga/v1/send-message/', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        message: data.response
                    })
                });

                data = await response2.json() || data.response;
            }

            return data.response;

        } catch (error) {
            console.error(error);
            document.getElementById('error-message').classList.remove('hidden');
        }
    };

    const clearMessages = () => {
        const messageInput = document.getElementById('message-input');
        messageInput.value = '';
    }

    window.scrollToBottom = scrollToBottom;
    window.sendMessage = sendMessage;
    window.renderUserMessage = renderUserMessage;
    window.renderSalesRepMessage = renderSalesRepMessage;
    window.sendMessageToSalesRep = sendMessageToSalesRep;
    window.clearMessages = clearMessages;
    window.toggleChat = toggleChat;
</script>