<template>
    <div class="modal fade show d-block" id="idModal" tabindex="-1" style="background-color: rgba(0,0,0,0.5)">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex flex-row justify-content-between">
                    <h5 class="modal-title">{{ props.title }}</h5>
                    <button type="button" class="close fs-3" @click="fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Mensagem:</strong> {{ props.text }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="fechar">Ok</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    text: { type: String, required: true },
    title: { type: String, required: true },
})

const emit = defineEmits(['fechar']);

const fechar = () => {
    emit('fechar');
}
</script>
