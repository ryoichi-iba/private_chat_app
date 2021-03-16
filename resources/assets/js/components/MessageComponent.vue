<template>
    <div class="card card-default chat-box">
        <div class="card-header">Chats</div>
        <div class="card-body" v-chat-scroll>
            <p class="card-text" v-for="chat in chats" :key="chat.message">
                {{ chat.message }}

            </p>
        </div>
        <form action="" class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="テキストを入力してください">
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            chats: []
        }
    },
    methods: {
        send() {
            console.log('yeah!!');
        }
    },
    created() {
        this.chats.push(
            {message: 'heyyy'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            {message: 'how are you'},
            );
    }
}
</script>

<style>
    .chat-box {
        height: 400px;
    }

    .card-body {
        overflow-y: scroll;
    }
</style>