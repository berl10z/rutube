<template>
    <Transition name="fade">
    <div v-if="show" class="alert alert-success" id="success_alert" role="alert">
       Авторизация прошла успешно!
    </div>
</Transition>
</template>
<script>
export default {
    mounted() {
        this.show = true
        setTimeout(()=>this.show = false, 2000)
    },
    data() {
        return {
            show: false
        }
    },
    props:['users']
}
</script>
<style>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1.5s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
