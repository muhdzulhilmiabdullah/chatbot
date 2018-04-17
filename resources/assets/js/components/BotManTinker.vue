<template>
    <div>
        <div class="row">
        <div class="col-sm-3 ads">
            <a href="https://arkgene.com"><img class="banner" align="left"src="/arkgene.jpg"></a>  
        </div>

        <div class="col-sm-5 frame">
        <div class="ChatLog" v-chat-scroll>
            <li class="ChatLog__entry" v-for="message in messages" :class="{'ChatLog__entry_mine': message.isMine}">
            <img class="ChatLog__avatar" src="/panda_face.gif" />
                <p class="ChatLog__message" v-html="message.text"></p>
            </li>
        </div>
          <input type="text" class="ChatInput" @keyup.enter="sendMessage" v-model="newMessage" placeholder="Message">
    </div>
    <div class="col-sm-3 ads">
            <a href="/about"><img class="banner" align="right" src="/panda_banner.jpg"></a>
        </div>
</div>
</div>
</template>

<style>

.ads{
    margin:0;

}

.banner{
    margin:0;
}

::-webkit-scrollbar {
    width: 5px;
}
 
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        border-radius: 10px;
    }
 
    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    }

    .frame{
    background:#e0e0de;
    height:460px;
    width: 400px;
    overflow:hidden;
    padding: 10px;
    margin: 30px;
    border-radius: 5px;
    }

    input.ChatInput {
        
        width: 100%;
        height: 35px;
        border-radius: 5px;
        border: none;
        padding: 5px;
        margin-top: 5px;
        align-content: left;
    }

    .ChatLog {
        max-width: 460px;
        width: 100%;
        margin: 0 auto;
        height: 100%;
        max-height: 400px;
        border: 1px solid #fff;
        border-radius: 5px; 
        overflow: auto;
        background-color:#fff;
    }
    .ChatLog .ChatLog__entry {
        margin: .5em;
    }

    .ChatLog__entry {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        max-width: 100%;
        overflow: auto;
    }

    .ChatLog__entry.ChatLog__entry_mine {
        flex-direction: row-reverse;
    }

    .ChatLog__avatar {
        flex-shrink: 0;
        flex-grow: 0;
        z-index: 1;
        height: 38px;
        width: 50px;
        border-radius: 25px;

    }

    .ChatLog__entry.ChatLog__entry_mine
    .ChatLog__avatar {
        display: none;
    }

    .ChatLog__entry .ChatLog__message {
        position: relative;
        margin: 0 12px;
    }

    .ChatLog__entry .ChatLog__message::before {
        position: absolute;
        right: auto;
        bottom: .6em;
        left: -12px;
        height: 0;
        content: '';
        border: 6px solid transparent;
        border-right-color: #ddd;
        z-index: 2;
    }

    .ChatLog__entry.ChatLog__entry_mine .ChatLog__message::before {
        right: -12px;
        bottom: .6em;
        left: auto;
        border: 6px solid transparent;
        border-left-color: #08f;
    }

    .ChatLog__message {
        background-color: #ddd;
        padding: .5em;
        border-radius: 10px;
        font-weight: lighter;
        max-width: 70%;
        text-align: left;
    }

    .ChatLog__entry.ChatLog__entry_mine .ChatLog__message {
        border-top: 1px solid #07f;
        border-bottom: 1px solid #07f;
        background-color: #08f;
        color: #fff;
    }
</style>

<script>
    const axios = require('axios');
    const API_ENDPOINT = '/botman';

    export default {
        data() {
            return {
                messages: [],
                newMessage: null
            };
        },

        methods: {
            _addMessage(text, attachment, isMine) {
                this.messages.push({
                    'isMine': isMine,
                    'user': isMine ? '👨' : '🤖',
                    'text': text,
                    'attachment': attachment || {},
                });
            },

            sendMessage() {
                let messageText = this.newMessage;
                this.newMessage = '';
                if (messageText === 'clear') {
                    this.messages = [];
                    return;
                }

                this._addMessage(messageText, null, true);

                axios.post(API_ENDPOINT, {
                    driver: 'web',
                    userId: 9999999,
                    message: messageText
                }).then(response => {
                    let messages = response.data.messages || [];
                    messages.forEach(msg => {
                        this._addMessage(msg.text, msg.attachment, false);
                    });
                }, response => {

                });
            }
        }
    }
</script>
