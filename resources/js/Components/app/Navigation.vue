<template>
    <nav class="min-w-[200px]">
        <div class="h-[80px] px-3 flex items-center gap-3">
            <Link href="/">
               <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800"/>
            </Link>
            LaraStorage
            

        </div>
        <div class="px-3">
            <CreateNewDropdown />
        </div>
    </nav> 
    <div>
       Navigation
    </div>
</template>
<script>


import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import CreateNewDropdown from './CreateNewDropdown.vue';
import { Link } from '@inertiajs/vue3';


export default {
    //////////////////////Variables////////////////////////
    data(){
        return {

        }
    },

    ///////////////////////Components////////////////////////
    components:{
    ApplicationLogo,
    CreateNewDropdown,
    Link
},
    
    /////////////////////Methods//////////////////////////
    methods: {
        
    },
    ////////////////////Mounted///////////////////////////
    mounted() {
        
    },
    /////////////////////Computed/////////////////////////
    computed:{

    },

   

}   
</script>
<style lang="">
    
</style>