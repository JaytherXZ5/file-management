<template>
    <div class="h-screen bg-gray-50 flex w-full gap-4">
       <Navigation />

       <main class="flex flex-col flex-1 px-4 overflow-hidden">
            <div class="flex items-center justify-between w-full">
                <SearchForm />
                <UserSettingsDropdown />
            </div> 
       </main>

    </div>
</template>
<script>

import Navigation from '../Components/app/Navigation.vue';
import SearchForm from '../Components/app/SearchForm.vue';
import UserSettingsDropdown from '../Components/app/UserSettingsDropdown.vue';
export default {
    //////////////////////Variables////////////////////////
    data(){
        return {

        }
    },

    ///////////////////////Components////////////////////////
    components:{
        Navigation,
        SearchForm,
        UserSettingsDropdown
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
