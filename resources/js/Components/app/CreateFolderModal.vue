<template>
    <Modal :show="modelValue" max-width="sm">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                Create New Folder
            </h2>
            <div class="mt-6">
                <InputLabel for="folderName" value="Folder Name" class="sr-only" ref="folderNameInput"/>
                 <TextInput type="text" 
                            id="folderName"  
                            v-model="form.name"
                            class="mt-1 block w-full"
                            :class="form.errors.name ? 'borders-red-500 focus:border-red-500 focus:ring-red-500' :  ''"
                            placeholder="Folder Name"
                            @keyup.enter="createFolder"    
                    />
                    <InputError :message="form.errors.name" class="mt-2" />
            </div>
            <div class="mt-6 flex justify-end">
                <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
                <PrimaryButton 
                                class="ml-3"
                                :class="{'opacity-25': form.processing}"
                                @click="createFolder" 
                                :disable="form.processing">
                    Create
                </PrimaryButton>
            </div>

        </div>
    </Modal>
</template>
<script setup>


import Modal from '../Modal.vue';
import InputLabel from '../InputLabel.vue';
import TextInput from '../TextInput.vue';
import InputError from '../InputError.vue';
import { useForm } from '@inertiajs/vue3';
import SecondaryButton from '../SecondaryButton.vue';
import PrimaryButton from '../PrimaryButton.vue';
import { ref } from 'vue';
const {modelValue} = defineProps({
    modelValue: Boolean 
})

//Uses
const form = useForm({
    name: ''
})

//Refs
const folderNameInput = ref(null)
const emit = defineEmits(['update:modelValue'])

//Methods

function createFolder(){
    form.post(route('folder.create'), {
        preserveScroll:true,
        onSuccess:() => {
            closeModal()
            form.reset();

        },
        onError: () => folderNameInput.value.focus()
    })
}

function closeModal(){
    emit('update:modelValue')
    form.clearErrors();
    form.reset()
}

</script>
