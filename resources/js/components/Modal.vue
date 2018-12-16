<template>

    <transition name="modal">
        <div class="modal modal-mask" style="display: block">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <slot name="header">
                            default header
                        </slot>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            default body
                        </slot>
                    </div>

                    <div class="modal-footer">
                        <slot name="footer">
                            <button class="modal-default-button" @click="$emit('close')">
                                Cerrar
                            </button>
                            <button class="modal-default-button" @click="$emit('save')">
                                Guardar
                            </button>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>
<script>
    export default{
        data(){
            return{
                //
            }
        }

    }
</script>
<style>
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow-y: auto !important;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }
    .modal-wrapper {
        display: -webkit-box !important;
        display: -moz-box !important;
        display: -ms-flexbox !important;
        display: -webkit-flex !important;
        display: flex !important;
        margin: auto !important;
        max-width: 760px !important;
        padding: 64px !important;
        width: 100% !important;
    }
</style>