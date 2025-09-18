<div class="overlay fixed bottom-0 left-0 w-full bg-white border-t py-4 flex justify-center backdrop-blur-sm z-40">

    <div class="flex flex-col items-center max-w-xl gap-3.5">
        <div id="sales-rep-welcome-message" class="w-full px-3 py-2 rounded-xl rounded-tl-none bg-primary text-white">
            Welcome to XED, and congratulations on taking the first step towards a more empowered you. Let me know if I can answer any question for you.
        </div>
        <input id="drawer-open" class="w-full block py-2 px-3 bg-gray-100 border-gray-500" placeholder="Ask any questions..." onclick="document.querySelector('#ai-chat-drawer').dataset.showDrawer = 'true'">
    </div>
</div>

<!-- Parent needs to have `group` -->
<div id="ai-chat-drawer" data-show-drawer="false" class="group data-[show-drawer=true]:translate-y-0 translate-y-full transition-all duration-300 fixed bottom-0 left-0 w-full h-full bg-black/50 z-50">
    
    <!-- Child uses `group-[...]` -->
    <div id="scroll-container" class="fixed bottom-0 left-0 w-full max-h-[80%] overflow-y-auto h-fit bg-gray-200 z-50">
        <button id="drawer-close" class="sticky z-50 hover:scale-125 transition-all duration-300 top-0 left-0 p-5" onclick="onDrawerClose()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x transition-all duration-300"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button> 
        <div class="relative size-full">
            <div class="max-w-3xl mx-auto">
                    <div class="xl:space-y-6 space-y-4">
                        <div id="messages" class="xl:space-y-6 space-y-4 pb-5">
                            <div class="w-fit max-w-[80%] mr-auto">
                                <div class="flex gap-2 flex-row w-fit">
                                    <div class="rounded-full shrink-0 bg-primary text-white size-10 flex items-center justify-center text-xs">
                                        XED
                                    </div>
                                    <div class="bg-white w-fit p-3 flex-1">
                                        <div class="mb-0">Welcome to XED, and congratulations on taking the first step towards a more empowered you. Let me know if I can answer any question for you</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="sales-rep-thinking-message" class="hidden w-fit max-w-[80%] mr-auto">
                            <div class="flex gap-2 flex-row">
                                <div class="rounded-full shrink-0 bg-primary text-white size-8 flex items-center justify-center text-sm">
                                    XED
                                </div>
                                <div class="bg-white w-fit p-3 flex-1">
                                    <p class="mb-0">Thinking...</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="error-message">
                            <p class="text-red-700">Something went wrong from our side. Please try again later.</p>
                        </div>
                    </div>
                    <div class="w-full sticky bottom-0 pb-5 bg-gray-200 shadow-xl left-0">                    
                            <div class="max-w-3xl w-full mx-auto p-3 group bg-white">
                                <input  class="size-full resize-none p-0 m-0 outline-none! border-none! bg-transparent ring-0!" placeholder="Ask any questions..." id="message-input" rows="2"></input>
        
                                <div class="flex justify-end gap-3">
                                    <button onclick="clearMessages()" class="text-sm text-gray-500 cursor-pointer">Clear</button>
                                    <button onclick="sendMessage()" class="bg-primary text-white px-2 py-1 text-sm rounded cursor-pointer">Send</button>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script>
    const messages = document.getElementById('messages');
    const thinkingMessage = document.getElementById('sales-rep-thinking-message');

    const messageInput = document.getElementById('message-input');

    const onDrawerClose = ()=> {
        const welcomeMessage = document.getElementById('sales-rep-welcome-message');
        welcomeMessage.classList.add('hidden');
        document.querySelector('#ai-chat-drawer').dataset.showDrawer = 'false'
    }

    messageInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
            messageInput.value = '';
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
        thinkingMessage?.classList?.remove('hidden');

        const messageInput = document.getElementById('message-input');
        const message = messageInput.value;
        
        renderUserMessage(message);
        messageInput.value = '';

        scrollToBottom();

        const response = await sendMessageToSalesRep(message);

        renderSalesRepMessage(response);
        scrollToBottom();

        thinkingMessage?.classList?.add('hidden');
    }

    const renderUserMessage = (message) => {
        messages.innerHTML += `
            <div class="w-fit max-w-[80%] ml-auto">
                <div class="flex gap-2 flex-row-reverse">
                    <div class="rounded-full shrink-0 bg-primary text-white size-10 text-sm flex items-center justify-center">
                        U
                    </div>
                    <div id="sales-repfirst-message-text" class="bg-white w-fit p-3 flex-1">
                        <p class="mb-0">${message}</p>
                    </div>
                </div>
            </div>
        `;
    }

    const renderSalesRepMessage = (message) => {
        messages.innerHTML += `
            <div class="w-fit max-w-[80%]">
                <div class="flex gap-2 flex-row">
                    <div class="rounded-full shrink-0 bg-primary text-white size-10 text-sm flex items-center justify-center">
                        XED
                    </div>
                    <div id="sales-repfirst-message-text" class="bg-white w-fit p-3 flex-1">
                        <div class="prose">${message}</div>
                    </div>
                </div>
            </div>
        `;
    }

   const sendMessageToSalesRep = async (message) => {
    try {
        const response = await fetch('/wp-json/xedchat/v1/send-message/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                message: `
                    System Message: 
                       - Program Context: Cornell Chief AI Officer Leadership Program

                    User Message: ${message}
                `,
                threadId: window.conversationThreadId
            })
        });

        const data = await response.json();
        console.log({ data });

        if (!data.response) {
            throw new Error("data.error");
        }

        if (data.threadId) {
            window.conversationThreadId = data.threadId;
        }

        const response2 = await fetch('/wp-json/xedchat/v1/html-response/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                message: data.response
            })
        });

        const data2 = await response2.json();
        return data2.response;

    } catch (error) {
        console.error(error);
        document.getElementById('error-message').classList.remove('hidden');
    }
};

    const clearMessages = () => {
        const messageInput = document.getElementById('message-input');
        messageInput.value = '';
    }
</script>