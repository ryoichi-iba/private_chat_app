<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header">Private chat</div>
                    <ul class="list-group">
                        <li class="list-group-item">test name</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <message-component></message-component>
            </div>
        </div>
    </div>
</template>

<script>
import MessageComponent from './MessageComponent';
    export default {
        components: {
            MessageComponent
        },
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
