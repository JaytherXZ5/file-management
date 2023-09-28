<template>
    <nav class="min-w-[100px]">
        <div class="h-[80px] px-3 flex items-center gap-3">
            <Link :href="route('dashboard')">
                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
            </Link>
            LaraStorage
        </div>
    </nav> 
    <div>
       Navigation
    </div>
</template>
<script>
import ApplicationLogo from '../ApplicationLogo.vue'


export default {
    //////////////////////Variables////////////////////////
    data(){
        return {

        }
    },

    ///////////////////////Components////////////////////////
    components:{
    ApplicationLogo
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